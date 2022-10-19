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
     
     <img src="../assets/loco_white.png" fluid   alt="Responsive image" class="main-img" /> 
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
    padding: 0px 0px 0px 0px;
    position: relative;
    min-height: 100vh;
    height: 100%;
    margin: 0% 0% 0% 0%;
}
.box{
    margin: 0% 0% 0% 0%;
    width: 100vw;
    
}
.main-img{
    padding: 5% 3% 0 0;
    margin-left: 20%;
    width: 400px;
}
.wave-box{
    display: flex;
    align-items: center;
    height: 100vh;
    width: 100vw;
    left: 0;
}

</style>