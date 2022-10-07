<script src="https://kit.fontawesome.com/deed898c4d.js" crossorigin="anonymous"></script>
<template>
    <div class="container-fluid">
      <div class="title-header">
        <div class="main-title" @click="goHome()"> ODOM </div>
        <Nav class="nav-bar"/>
        <SNScompo class="sns"/>
    </div>
      <div class="container">
        <slot />
      </div>
     
    </div>
</template>

  
  <script>
import SNScompo from '../components/layout/SNS.vue'
import Nav from '../components/layout/NavBar.vue'
  export default {
    components:{
        SNScompo,
        Nav
    },
    methods:{
        goInsta(){
            window.open("https://www.instagram.com/1minute_art_history_aesthetics/", "_blank");  
        },
        goKakao(){
            window.open("https://pf.kakao.com/_DxipPb", "_blank");  
        },
        goBlog(){
            window.open("https://blog.naver.com/1minute_art_history", "_blank");  
        },
        goHome(){
            this.$router.push({ name: 'mainhome' });
        }
    }
  }
  </script>
  
  <style scoped>
  .container,
  .container-fluid {
    padding: 0px 0px;
    position: relative;
    min-height: 100vh;
  }
  .title-header{
    color: white;
    background-color: black;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 5px 20px;
  }
  .main-title{
    font-size: 50px;
    font-weight: 700;
    height: 100px;
    font-family: 'establishRetrosansOTF';
    font-weight: normal;
    font-style: normal;
    margin-top: 2.3%;
  }
@font-face {
    font-family: 'establishRetrosansOTF';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2112@1.0/establishRetrosansOTF.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
.sns{
  margin-right: 5%;
}
.main-title{
    cursor: pointer;
}
  </style>
  