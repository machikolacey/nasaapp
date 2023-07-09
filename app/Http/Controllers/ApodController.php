<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Apod;
use Carbon\Carbon;

class ApodController extends Controller
{

	public function getDataandSave($apiResponse = null)
	{

  	// Check if there is a record with the same published_at date in the database
    $latestRecord = Apod::latest()->first();
    $today = Carbon::today();

    if ($latestRecord && $latestRecord->published_at == $today) {
      //Data is already fetched and saved for today
  		//so do not fetch
  		return;
    }

    if (!$apiResponse) {
      $url = env('NASAENDPOINT_URL');
      $apiKey = env('NASAAPI_KEY');
      $requestUrl = $url . '?api_key=' . $apiKey;
 
      // Fetch data from the NASA API
      $response = file_get_contents($requestUrl);

      // Check for errors
      if ($response === false) {
          return 'Error: Failed to fetch data from the NASA.';
      }

      // Decode the JSON response
      $apiResponse = json_decode($response, true);
    }

    // Check if the data is from today
    $today = Carbon::today()->toDateString();
    $dataDate = Carbon::createFromTimestamp(strtotime($apiResponse['date']))->toDateString();

    if ($dataDate !== $today) {
      return 'No data available for today';
    }

    // Save the data to the MySQL database
    $publishedAt = Carbon::createFromTimestamp(strtotime($apiResponse['date']))->toDateTimeString();

    $apod = new Apod([
      'title' => $apiResponse['title'],
      'url' => $apiResponse['url'],
      'hdurl' => $apiResponse['hdurl'],
      'explanation' => $apiResponse['explanation'],
      'published_at' => $publishedAt,
    ]);

    $apod->save();

    return 'Data fetched and saved successfully';
	}


	public function index()
	{
		$this->getDataandSave();
    $apodLatest = Apod::latest()->first();
    $apodPast = Apod::where('published_at', '<', $apodLatest->published_at)->orderBy('published_at', 'desc')->get();

    return view('apod', [
    	  'apodLatest' => $apodLatest,
    	  'apodPast' => $apodPast,
    ]);
	}


	public function show(Apod $apod)
  {
    // Fetch the Apod record by its ID
    $apodCurrent = Apod::findOrFail($apod->id);
    $apodOther = Apod::where('id', '<>', $apod->id)->orderBy('published_at', 'desc')->get();

    // Pass the image data to the view
    return view('past-image', [
    	'apodCurrent' => $apodCurrent,
    	'apodOther' => $apodOther
    ]);
  }

}