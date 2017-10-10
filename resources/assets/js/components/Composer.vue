<template>
	<div class="composer">
		<input id="message" type="text" placeholder="Type your message here..." v-model="messageText" @keydown.enter="sendMessage">
		<button class="btn btn-primary" @click="sendMessage">Send</button>
	</div>
</template>

<script>
export default {

  name: 'Composer',

  data () {
    return {
    	messageText: ''
    };
  },
  methods: {
  	sendMessage() {
  		this.$emit('messagesent', {
  			message: this.messageText,
  			user: {
  				name: $('.navbar-right .dropdown-toggle').text()
  			}	
  		});
  		this.messageText = '';
  	}
  }
};
</script>

<style lang="css" scoped>
 .composer {
 	display:flex;
 }

 .composer input {
 	flex: 1 auto;
 }

 .composer button {
 	border-radius: 0;
 }
</style>