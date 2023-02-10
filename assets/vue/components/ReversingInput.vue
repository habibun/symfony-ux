<template>
  <input v-model="message" />
  <p>Reversed value is: {{ message.split('').reverse().join('') }}</p>
</template>

<script>
export default {
  name: "ReversingInput",
  data() {
    return {
      message: "",
    }
  },
}
</script>
