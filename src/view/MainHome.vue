<template>
 <div class="container">
    <sequential-entrance delay="1500" class="body">
    <div class="box"> 

    <div class="wave-box" v-wave = "{
                color: 'grey',
                initialOpacity: 0.5,
                duration: 2,
                easing: 'ease-in',
        }" >
     
     <b-img src="https://images-cdn.bridgemanimages.com/api/1.0/image/600wm.ATU.9096430.7055475/343730.jpg" fluid   alt="Responsive image" class="main-img" > 
    </b-img>
    <b-button
            class="kakao_btn"
           
            @click="kakaoLink()"
        >btn</b-button>
    <span class="main-content">
        <div>𝑨𝒓𝒕 𝒊𝒔 𝒂 𝒍𝒊𝒏𝒆 𝒂𝒓𝒐𝒖𝒏𝒅 𝒚𝒐𝒖𝒓 𝒕𝒉𝒐𝒖𝒈𝒉𝒕𝒔.</div>
        <div> &nbsp;</div>
        <div>하루에 1분만 투자해도 미술사, 미학, 현대미술 최근 미술계의 소식에까지 정통하게 될 수 있습니다. </div>
        <div>팔로우와 카카오톡 채널을 추가하고 매일 제공되는 소식을 받아보세요. </div>
    </span>

    </div>
</div>
    </sequential-entrance>
 </div>
</template>

<script>

export default {
    created(){
      this.kakaoLink();
  },
  methods:{
    // kakaoLink(){ // 링크 보내기
    //   window.Kakao.Link.sendDefault({
    //     objectType: 'text',
    //     text:
    //       '기본 템플릿으로 제공되는 텍스트 템플릿은 텍스트를 최대 200자까지 표시할 수 있습니다. 텍스트 템플릿은 텍스트 영역과 하나의 기본 버튼을 가집니다. 임의의 버튼을 설정할 수도 있습니다. 여러 장의 이미지, 프로필 정보 등 보다 확장된 형태의 카카오링크는 다른 템플릿을 이용해 보낼 수 있습니다.',
    //     link: {
    //       mobileWebUrl:
    //         'https://developers.kakao.com',
    //       webUrl:
    //         'https://developers.kakao.com'
    //     }
    //   }
    //   )
    // }

    // kakaoLink(){ //채팅 상담하기 
    //     window.Kakao.Channel.chat({
    //         channelPublicId: '_DxipPb' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
    //         });
    // }

    // kakaoLink(){ // 채널 추가하기
    //     window.Kakao.Channel.addChannel({
    //             channelPublicId: '_DxipPb'
    //      });
    // }


  }
}
</script>

<style>
.container {
    margin: 0% 0% 0% 0%;
}
.box{
    margin: 0% 0% 0% 0%;
    width: 100vw;
    
}
.main-img{
    padding: 5%;
}
.wave-box{
    display: flex;
    align-items: center;
    height: 100vh;
}
</style>