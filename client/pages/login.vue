<template>
  <form @submit.prevent="login">
    <input type="text" name="email" id="email" v-model="form.email">
    <br/>
    <input type="password" name="password" id="password" v-model="form.password">

    <button type="submit">Login</button>
  </form>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    }
  },
  methods: {
    async login() {
      try {
        await this.$auth.loginWith("laravelSanctum", {
          data: this.form
        })
      } catch (e) {
        console.error(e)
      }
    }
  }
}
</script>
