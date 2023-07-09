<template>
	<button :class="['btn', buttontype]"  @click="goBack"><slot /></button>
</template>
<script>
	export default {
		props: {
			buttontype: {
				type: String,
				required: true,
			}
		},
		methods: {
			goBack() {
				window.location.href = '/';
			}
		}
	};
</script>