
<template>
    <div>
        <div class="card-box">
           <Card v-for="item in datas" :item="item" :key="item.id" class="cards" id="cards-list"
           />
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
            url:"https://graph.instagram.com/17841450481745795/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJYM0phSWZAkZADhZAX1hWQXloVlJUWWs3X0h1Ym5LbkpSRm53U1ptaDg1dndMTFNlU0ZABTUJnWWVSUEZA2VF85TjBwRmRWdGk5d0RFYTJVTDhRcWI5b1dzUHZATR1A5SXgzeDhUaWNB",
            pushData:[]        
        }
    } ,
    created(){
        this.$store.dispatch('fetch_Data', this.url)
        .then( this.pushData = this.datas)
    }, 
    methods:{  
       
    }
}
</script>

<style scoped>
.container{
    display: flex;
    flex-direction: column;
    align-items: flex-end
}
.card-box{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10%;
}
</style>