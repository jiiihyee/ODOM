<template>
  <component :is="layout" id="common">
  <transition name="fade">
    <router-view></router-view>
  </transition>
  <div class="btn-space"><FloatBtn class="float-btn" /></div>
  </component>
</template>

<script>
import FloatBtn from '@/components/FloatBtn.vue'
export default {
  name: 'App',
  components:{
        FloatBtn
    },
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

.float-btn{
    position: fixed;
    margin-bottom: 0.3%;
    margin-right:-10%;
    z-index: 9999;
    overflow: initial;
    
    /* padding-bottom: 10%; */
}
</style>
