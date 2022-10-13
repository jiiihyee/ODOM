<template>
    <vue-fab mainBtnColor="#4C4C4C" :scrollAutoHide =false 
    size="big">
        <fab-item @clickItem="kakaoLink()" :idx="0" title="카톡 링크보내기" icon="link" color="black"/>
        <fab-item @clickItem="kakaoChat()" :idx="1" title="카톡 상담하기" icon="chat" color="black"/>
        <fab-item @clickItem="kakaoAdd()" :idx="2" title="카톡 채널 추가하기" icon="add" color="black"/>
    </vue-fab>
</template>

<script>
export default {
    methods:{
    kakaoLink(){ // 링크 보내기
      window.Kakao.Link.sendDefault({
        objectType: 'text',
        text:
          '기본 템플릿으로 제공되는 텍스트 템플릿은 텍스트를 최대 200자까지 표시할 수 있습니다. 텍스트 템플릿은 텍스트 영역과 하나의 기본 버튼을 가집니다. 임의의 버튼을 설정할 수도 있습니다. 여러 장의 이미지, 프로필 정보 등 보다 확장된 형태의 카카오링크는 다른 템플릿을 이용해 보낼 수 있습니다.',
        link: {
          mobileWebUrl:
            'https://developers.kakao.com',
          webUrl:
            'https://developers.kakao.com'
        }
      }
      )
    },

    kakaoChat(){ //채팅 상담하기 
        window.Kakao.Channel.chat({
            channelPublicId: '_DxipPb' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
            });
    },

    kakaoAdd(){ // 채널 추가하기
        window.Kakao.Channel.addChannel({
                channelPublicId: '_DxipPb'
         });
    }


  }
}
</script>

<style>

</style>