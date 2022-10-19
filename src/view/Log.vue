
<template>
    <div>
        <div class="card-box">
           <Card v-for="item in this.pushData" :item="item" :key="item.id" class="cards" id="cards-list"/>
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
            url:"https://graph.instagram.com/17841450481745795/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJYZA1VoR2RvcTBXaFhyenByV195TzQ2aXJzZAkdhZAzYwc09sazlLWDJSUFJSWUhNWXFKamVsMkdDNjZAPNkN0V2lFRk51MlNuZAFN5OWl3MDVLTUdYamhsWW1JczZADRGZAzcVRfUmNB",
            pushData:[]        
        }
    } ,
    created(){
        this.$store.dispatch('fetch_Data', this.url)
        .then( this.pushData = this.datas)
        console.log('pushData', this.pushData)
    }, 
    methods:{  

    }
}
</script>

<style>
.container{
    display: flex;
    flex-direction: column;
    align-items: flex-end
    
}
.card-box{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2%;
}
</style>