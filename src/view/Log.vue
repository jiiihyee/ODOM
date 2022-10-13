<template>
    <div class="container">
      
    </div>
   </template>

<script>
export default {
    data(){
        return{
            url:'https://graph.instagram.com/17841454624204667/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJVeVJHaGpkS01lSDB6VGFPNk1MeEppbkhYTUtONjFpaHJBQlU0Q1FoOVdGY3FvN0JtSjJndXlRN0VEM1N0ZAlNDZA0VaTlI4Vnc0NXpJeWE1dy1DLU5CYVpMbDlyU2tYVW5SYUJfX1ZAFOXJ2eHZAKdU9nYm1RdExCenFB'
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