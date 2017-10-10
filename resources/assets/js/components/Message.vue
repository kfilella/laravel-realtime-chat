<template>
	<div class="message">
		<p>{{ message.message }}</p>
		<small>{{ message.user.name }}</small>
	</div>
</template>

<script>
export default {

  name: 'Message',
  props: ['message']


};
</script>

<style lang="css" scoped>
	.message {
		padding: 1rem;
	}

	.message > p {
		margin-bottom: .5rem;
	}
</style>