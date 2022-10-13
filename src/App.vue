<template>
  <component :is="layout" id="common">
  <transition name="fade">
    <router-view></router-view>
  </transition>
  </component>
</template>

<script>
export default {
  name: 'App',
  computed: {
    layout() {
      return `${this.$route.meta.layout || 'default'}-layout`
    },
  },
    
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
