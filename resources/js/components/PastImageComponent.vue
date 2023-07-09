<template>
  <div class="past-images mb-5">
    <div class="container">
    	<h2 class="text-center">{{ title }}</h2>
    		<a v-for="image in pastImages" :key="image.id" class="d-inine-block" :href="`/past-image/${image.id}`">
    			<img :src="image.url" :alt="image.title" :title="image.title" />
    		</a>
    </div>
  </div>
</template>
<script>
	export default {
	  props: {
	    pastImages: {
	      type: Array,
	      required: true,
	    },
	    title: {
	      type: String,
	      required: true
	    }
	  },
	};
</script>