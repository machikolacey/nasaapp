<x-layout>
  <div id="app">
    <apod-component :apod-latest="{{ $apodLatest }}" :subtitle="'today\'s image'"></apod-component>
		<past-image-component :past-images="{{ $apodPast }}" :title="'Past images'"></past-image-component>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</x-layout>