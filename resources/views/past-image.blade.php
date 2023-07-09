<x-layout>
  <div id="app">
    <apod-component :apod-latest="{{ $apodCurrent }} " ></apod-component>
    <past-image-component :past-images="{{ $apodOther }}" :title="'Other images'"></past-image-component>
    <div class="text-center mb-5">
    	<button-component :buttontype="'btn-primary'">Back to home</button-component> 			
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</x-layout>