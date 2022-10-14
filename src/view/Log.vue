
<template>
    <div class="container">
        <b-img :src="this.img"></b-img>
        </div>
   </template>

<script>

export default {

  
    data(){
        return{
            url:"https://graph.instagram.com/17841454624204667/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJVeVJHaGpkS01lSDB6VGFPNk1MeEppbkhYTUtONjFpaHJBQlU0Q1FoOVdGY3FvN0JtSjJndXlRN0VEM1N0ZAlNDZA0VaTlI4Vnc0NXpJeWE1dy1DLU5CYVpMbDlyU2tYVW5SYUJfX1ZAFOXJ2eHZAKdU9nYm1RdExCenFB",
            Jdata:{
                "data": [
                {
                "id": "17934556958435588",
                "media_type": "CAROUSEL_ALBUM",
                "media_url": "https://scontent-gmp1-1.cdninstagram.com/v/t51.29350-15/306524157_1217518565762405_4307217853858010768_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=UjPPWsUXuLsAX-sFi_b&_nc_ht=scontent-gmp1-1.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AT9w1WZnPu0MtNLRbZmX026pWHYDDYcnQ1A9EUwYO2oWCg&oe=634C0899",
                "permalink": "https://www.instagram.com/p/CiZ3eyKPv_A/",
                "username": "pink.cooper",
                "caption": ".\n\uacfc\uc77c \ubaa8\uc74c\uc9d1\ud83c\udf52\ud83c\udf51\ud83e\udd5d\n.\n.\n.\n.\n.\n#\uadf8\ub9bc\uc2a4\ud0c0\uadf8\ub7a8 #\uadf8\ub9bc\uacc4\uc815 #\uadf8\ub9bc\ub9de\ud314 #\uc218\ucc44\ud654 #\uadf8\ub9bc\uacc4\uc815\ub9de\ud314 #\uadf8\ub9bc\uc77c\uae30 #\uadf8\ub9bc\uadf8\ub9ac\uae30 #\uadf8\ub9bc\uc7c1\uc774 #\uadf8\ub9bc\uc5f0\uc2b5 #\uadf8\ub9bc\uc5f0\uc2b5\uc911"
                },
                {
                "id": "17964799327777522",
                "media_type": "IMAGE",
                "media_url": "https://scontent-gmp1-1.cdninstagram.com/v/t51.29350-15/306306083_1073846909919241_7944739666955683689_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=HTDtLWgJNG8AX_qZF2l&_nc_ht=scontent-gmp1-1.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AT-6qSUKccXivsG9qibxmr1sKIyGqcSTUi2FaWLq2FE6NA&oe=634BFA72",
                "permalink": "https://www.instagram.com/p/CiZ2Vg1vInC/",
                "username": "pink.cooper",
                "caption": ".\n\ub0b4\uac00 \ub418\uace0 \uc2f6\uc740(?) \uc790\ud654\uc0c1\n\uac11\uc790\uae30 \uadf8\ub9bc \uadf8\ub9ac\uace0 \uc2f6\uc5b4\uc11c \uc2a5\uc2a5~~\n.\n.\n.\n.\n.\n.\n#\uc790\ud654\uc0c1 #\uadf8\ub9bc\uc2a4\ud0c0\uadf8\ub7a8 #\uadf8\ub9bc\uacc4\uc815\ub9de\ud314 #\uadf8\ub9bc\uc77c\uae30 #\uadf8\ub9bc\uacc4\uc815 #\uadf8\ub9bc\ub9de\ud314 #\uadf8\ub9bc\uadf8\ub9ac\uae30 #\uadf8\ub9bc\uc5f0\uc2b5 #\uadf8\ub9bc\uc7c1\uc774 #\uc544\uc774\ud328\ub4dc #\uc544\uc774\ud328\ub4dc\uadf8\ub9bc #\ud504\ub85c\ud06c\ub9ac\uc5d0\uc774\ud2b8"
                },
            ]
        },
         img:'',   
        }
    } ,
    created(){
        this.convert()
        this.loadData();
    }, 
    methods:{
        convert(){
            fetch(this.url)
                .then(res => res.json())
                .then((out) => {
                console.log('Checkout this JSON! ', out);
                })
                .catch(err => { throw err });
        },
        loadData(){
            
            this.img = this.Jdata.data[0].media_url
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