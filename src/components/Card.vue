<template>
  <div>
    <b-card :img-src=this.item.img img-alt="Card image" img-left class="mb-3">
      <b-card-text>
        <div class="caption">{{this.caption}}</div>
        <textarea disabled v-model="content" class="content"/>
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
            caption: this.item.caption.split('\n')[0], //제목
            content:'',
        }
    },
    created(){
        let con = this.item.caption.split('\n').splice(1).join('')
        this.content = con
    }

}
</script>

<style scoped>
img{
  width: 300px;
  height: 300px;
  
}
.caption{
    font-weight: bold;
    font-size: large;
    margin-bottom: 5%;
}
.content{
  width: 400px;
  height: 200px;
  margin: 0 0 0 0;
}
.content:disabled{
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 8;
  resize: none;
  border: none;
  background: transparent;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 200px;
  padding: 3%;
}
b-card-body{
    padding:  0 0 0 0;
    display: flex;
}
</style>