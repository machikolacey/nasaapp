<template>
	<div class="maintitle">
		<h1 class="text-center">{{ apodLatest.title }}</h1>
		<div class="btn-wrapper">
  		<p v-if="subtitle" class="text-center d-inline">{{ subtitle }}</p>
  		<change-bg-button-component  :buttontype="'btn-primary'" class="d-inline">Change background colour</change-bg-button-component>
		</div>
	</div>
	<div class="container">
    <div class="main-content text-center">
  		<img :src="apodLatest.url" alt="{{ apodLatest.title }}" />
			<p class="mt-2">{{ $moment(apodLatest.published_at).format('DD/MM/YYYY') }}</p>
			<p class="mt-2">{{ apodLatest.explanation }}</p>
    </div>
	</div>
</template>

<script>
	export default {
	  props: {
	    apodData: {
	      type: Object,
	      required: true,
	    },
	    apodLatest: {
	      type: Object,
	      required: true,
	    },
	    subtitle: {
	      type: String,
	      required: true
	    }
	  }
	};
</script>