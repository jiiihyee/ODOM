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