<?php
use App\Http\Controllers\ApodController;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Support\Facades\Http;
use Tests\CreatesApplication;

class ApodControllerTest extends TestCase
{
    use CreatesApplication;

    public function testGetDataandSave()
    {
        // Mock the API response
				$apiResponse = [
				    'title' => 'Test Title',
				    'url' => 'http://example.com/image.jpg',
				    'hdurl' => 'http://example.com/image-hd.jpg',
				    'explanation' => 'Test explanation',
				    'date' => now()->format('Y-m-d'),
				];

   		 $publishedAt = Carbon::createFromTimestamp(strtotime(now()->format('Y-m-d')))->toDateTimeString();

        // Mock the HTTP request to return the API response
        Http::fake([
            '*' => Http::response($apiResponse),
        ]);

        // Call the getDataandSave method
        $controller = new ApodController();
        $result = $controller->getDataandSave($apiResponse);

        // Assert the result
        $this->assertEquals('Data fetched and saved successfully', $result);
   		

        // Assert that the data was saved to the database
        $this->assertDatabaseHas('apod', [
            'title' => 'Test Title',
            'url' => 'http://example.com/image.jpg',
            'hdurl' => 'http://example.com/image-hd.jpg',
            'explanation' => 'Test explanation',
            'published_at' => $publishedAt ,
        ]);
    }
}
?>