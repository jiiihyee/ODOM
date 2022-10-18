
<template>
    <div class="container">
        <div>
           <Card v-for="item in datas" :item="item" :key="item.id" class="lists" id="camList"/>
        </div>
    </div>
   </template>

<script>
import Card from '@/components/Card.vue'
import { mapGetters } from 'vuex'

export default {
    computed:{
        ...mapGetters({
            datas: 'fetchdata'
        })
    },
    components:{
        Card
    },
    data(){
        return{
            url:"https://graph.instagram.com/17841450481745795/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJYZA1VoR2RvcTBXaFhyenByV195TzQ2aXJzZAkdhZAzYwc09sazlLWDJSUFJSWUhNWXFKamVsMkdDNjZAPNkN0V2lFRk51MlNuZAFN5OWl3MDVLTUdYamhsWW1JczZADRGZAzcVRfUmNB"        
        }
    } ,
    created(){
        this.$store.dispatch('fetch_Data', this.url)
        console.log('dd', this.datas)
    }, 
    methods:{  

    }
}
</script>

<style>
.container{
    display: flex;
    flex-direction: column;
}
.my_instagram {list-style:none; padding:0; margin:0; display:block;}
.my_instagram li {float:left; width:20%;}
.my_instagram li img {max-width:100%;}
.my_instagram li a {display:block;}
</style>