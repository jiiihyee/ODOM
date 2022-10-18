<template>
  <div>
    <b-card :img-src=this.item.img img-alt="Card image" img-left class="mb-3">
      <b-card-text>
        {{item.caption}}
      </b-card-text>
    </b-card>
</div>
</template>

<script>
export default {
    props:{
        item:{
            type:Object
        }
    },
    data(){
        return{
            
        }
    }
}
</script>

<style scoped>
img{
  width: 500px;
  height: 500px;
  object-fit: cover;
}
b-card-text{
    text-overflow:ellipsis;
}
</style>