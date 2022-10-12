<template>
  <div>
    <b-nav class="nav">
    <b-nav-item class="odom" @click="goAbout()" >About</b-nav-item>
    <b-nav-item >ODOM-Log</b-nav-item>
    <b-nav-item >Contact</b-nav-item>
  </b-nav>

  </div>
</template>

<script>
export default {
  methods:{
    goAbout(){
      this.$router.push({name: 'aboutodom'})
    }
  }
}
</script>

<style>
.nav-link{
  background-color: black;
  color: white;
  
}
</style>