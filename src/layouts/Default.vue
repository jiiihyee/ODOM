<template>
    <div class="container-fluid">
      <div>layout</div>
  
      <div class="container">
        <slot />
      </div>
     
    </div>
</template>
  
  <script>
  export default {
    components: {
    },
  }
  </script>
  
  <style scoped>
  .container,
  .container-fluid {
    padding: 0px 0px;
    position: relative;
    min-height: 100vh;
  }
  </style>
  