<template>
    <sequential-entrance delay="1500" class="body">
  <div class="main" @click="goDetail()">
    <b-card :img-src=this.item.img img-alt="Card image" img-left class="card mb-3">
      <b-card-text>
        <div class="caption">{{this.caption}}</div>
        <textarea disabled v-model="content" class="content"/>
      </b-card-text>
    </b-card>
</div>
</sequential-entrance>
</template>

<script>
export default {
    props:{
        item:{
            type:Object
        }
    },
    methods:{
        goDetail(){
            window.open(this.link);  
        }
    },
    data(){
        return{
            caption: this.item.caption.split('\n')[0], //제목
            content:'',
            link : this.item.link
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
  width: 350px;
  height: 350px;
  
}
.card:hover{
    cursor: pointer;
    background-color: rgb(224, 224, 224);
}
.main{
    cursor: pointer;
}

.caption{
    font-weight: bold;
    font-size: large;
    margin-bottom: 5%;
}
.content{
  width: 490px;
  height: 200px;
  margin: 0 0 0 0;
}
.content:disabled{
    cursor: pointer;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 10;
  resize: none;
  border: none;
  background: transparent;
  text-overflow: ellipsis;
  overflow: hidden;
  height: 250px;
  padding: 3%;
}
b-card-body{
    padding:  0 0 0 0;
    display: flex;
}
</style>