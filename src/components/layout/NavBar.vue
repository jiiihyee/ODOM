<template>
  <div>
    <b-nav class="nav">
    <b-nav-item class="odom" @click="goAbout()" >About</b-nav-item>
    <b-nav-item @click="goLog()">ODOM-Log</b-nav-item>
    <b-nav-item @click="goContact()">Contact</b-nav-item>
  </b-nav>

  </div>
</template>

<script>
export default {
  methods:{
    goAbout(){
      this.$router.push({name: 'aboutodom'})
    },
    goLog(){
      this.$router.push({name: 'odomlog'})
    },
    goContact(){
      this.$router.push({name: 'contactodom'})
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