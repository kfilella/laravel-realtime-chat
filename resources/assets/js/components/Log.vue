<template lang="html">
  <div class="log">
      <message v-for="message in messages" :message="message" v-bind:key="message.message"></message>
      <div class="empty" v-show="messages.length === 0">
          No messages to display.
      </div>
  </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
.log .message:nth-child(even) {
    background-color: #ccc;
}
.empty {
    padding: 1rem;
    text-align: center;
}
</style>