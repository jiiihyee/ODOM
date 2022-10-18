
<template>
    <div class="container">
            <li v-for="item in media" :key="item.caption">{{item.caption}}</li>
        </div>
   </template>

<script>
export default {
    data(){
        return{
            url:"https://graph.instagram.com/17841450481745795/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJYZA1VoR2RvcTBXaFhyenByV195TzQ2aXJzZAkdhZAzYwc09sazlLWDJSUFJSWUhNWXFKamVsMkdDNjZAPNkN0V2lFRk51MlNuZAFN5OWl3MDVLTUdYamhsWW1JczZADRGZAzcVRfUmNB",
        media:[],
        
        }
    } ,
    created(){
        this.loadData();
    }, 
    methods:{
        async loadData(){
            await fetch(this.url)
            .then((response) => response.json())
            .then((data) =>
                
              {  for( let i =0 ; i<data.data.length; i ++){
                const media_set = {}
                media_set.img = data.data[i].media_url
                media_set.caption = data.data[i].caption
                media_set.link = data.data[i].permalink
                
                this.media.push({...media_set})
                }            
            }    
            )
            .catch((error)=> console.log(error))
        }
        

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