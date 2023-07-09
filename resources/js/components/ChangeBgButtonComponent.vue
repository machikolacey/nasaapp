<template>
	<button :class="['btn', buttontype]"  @click="changeBg()"><slot /></button>
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
			changeBg() {
				let colours = ["#040404", "#05081a", "#535951", "#301012", "#0c0311", "#1f5e39"];;
				let bgcolour = colours[Math.floor(Math.random() * colours.length)];
				document.body.style.background = bgcolour;
			}
		}
	};
</script>