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

      <div class="footer title-header-2">
        <div class="main-title-2" @click="goHome()"> ODOM </div>
        <div class="footer-info"> 
          <span>대표 : 이 건</span>
          <span class="kakao-chat" @click="kakaoChat()">카톡 상담 하기 &nbsp;<i class="fa-regular fa-comments"></i></span>
          <span>이메일 문의 : 1minute.art.history@gmail.com</span>
          <span>&nbsp;</span>
          <span>Copyright © 2022.ODOM. ALL rights reserved.</span>
        </div>
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
        },
        kakaoChat(){ //채팅 상담하기 
        window.Kakao.Channel.chat({
            channelPublicId: '_DxipPb' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
            });
    },
    }
  }
  </script>
  
  <style scoped>
  .container,
  .container-fluid {
    padding: 0px 0px 0px 0px;
    position: relative;
    min-height: 100vh;
    height: 100%;
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
  .title-header-2{
    color: white;
    background-color: black;
    display: flex;
    flex-direction: row-reverse;
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
.main-title-2{
  cursor: pointer;
  font-size: 35px;
    font-weight: 700;
    height: 100px;
    font-family: 'establishRetrosansOTF';
    font-weight: normal;
    font-style: normal;
    margin-top: 3%;
   
}
.kakao-chat{
  cursor: pointer;
}
.footer-info{
  display: flex;
  flex-direction: column;
  margin-left: 5%;
}
  </style>
  