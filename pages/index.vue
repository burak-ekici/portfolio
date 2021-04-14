<template>
  <div
    id="fond"
    class="px-32 py-10 w-screen h-screen flex flex-row items-center  overflow-hidden">
  
    <div class="z-10 relative flex flex-col pl-10">
      <h1 class="text-6xl font-bold mb-3"><span class="font-bold -mt-1 b-bien font-mono">B</span>ienvenue,</h1>
      <p class="text-5xl font-bold mb-4">Je m'apelle <span class="font-bold -mt-1 text-5xl font-mono">B</span>urak ekici,</p>
      <p class='text-3xl font-bold'>Je suis developpeur front-end .</p>
      <NuxtLink to='/contact'  class="px-6 py-2 text-xs font-medium leading-6 text-center text-blue-400 uppercase transition bg-transparent border-2 border-blue-400 rounded absolute z-20 top-full left-10 mt-5 text-xl focus:outline-none hover:bg-blue-400 hover:text-black">Contactez moi !</NuxtLink>
    </div>

    <div class="z-10 bubu">
      <p id="bubu" data-text="B" class="font-bold -mt-1font-mono relative">B</p>
    </div>

    <div class="w-screen h-screen absolute left-0 top-0 overflow-hidden">
      <div class="star">
        <div class="span"></div>
      </div>
      <div id="star2" class="star">
        <div class="span"></div>
      </div>
      <div id="star3" class="star">
        <div class="span"></div>
      </div>
      <div id="star4" class="star">
        <div class="span"></div>
      </div>
      <div id="star5" class="star">
        <div class="span"></div>
      </div>
      <div id="star6" class="star">
        <div class="span"></div>
      </div>
      <div id="star7" class="star">
        <div class="span"></div>
      </div>
      <div id="star8" class="star">
        <div class="span"></div>
      </div>
      <div id="star9" class="star">
        <div class="span"></div>
      </div>
      <div id="star10" class="star">
        <div class="span"></div>
      </div>
    </div>
      
      
      
    


    
  </div>

  
</template>

<script>


export default {
  mounted(){
    let bubu = document.querySelector('#bubu');
    let shadow = '';
    for (let i = 0; i<30 ; i++){
      shadow += ( shadow ? ',' : '' ) + -i*1+ 'px ' + i*1 + 'px 0 rgb(238, 27, 27)'
    }
    bubu.style.textShadow= shadow
  }
  
};
</script>

<style scoped>
#fond {
  background-color: rgb(34, 34, 34);
  color: white;
}
#bubu:before{
  content: attr(data-text);
  position:absolute;
  top:60px;
  left:-60px;
  color:rgb(99,179,237,0.3);
  text-shadow:none;
  filter:blur(10px);
  z-index:-1;
}
span {
  color:#63B3ED;  
  text-shadow: 5px 0px 0px rgb(238, 27, 27);
  margin-right:4px;
}
.bubu{
  color:#63B3ED;  
  text-shadow: 20px 0px 0px rgb(238, 27, 27);
  font-size:30rem;
  padding-left:15rem;
  transform: rotate(-20deg) skew(25deg);
}
.b-bien{
  font-size:7rem;
}
.span{
  width:170px;
  height:2px;
  display:block;
  background-image: linear-gradient(90deg, rgba(238,27,27,1) 0%, rgba(193,99,237,1) 32%, rgba(99,179,237,1), transparent);
  margin:50px;
  margin-bottom:150px;
  position:relative;
  animation: shooting 2s linear infinite;
  opacity:0;
}
.span::before{
  content:'';
  position:absolute;
  bottom:0;
  left:0;
  width:3px;
  height:3px;
  background-color: #fff;
  color:#63B3ED;
  text-shadow: 2px 0px 0px rgb(238, 27, 27);
  box-shadow: 0 0 6px #fff;
  border-radius:50px;
  
}
.span::after{
  position:absolute;
  content:'B';
  color:#63B3ED;
  text-shadow: 2px 0px 0px rgb(238, 27, 27);
  font-size:1rem;
  content:'B';
  color:#63B3ED;
  text-shadow: 2px 0px 0px rgb(238, 27, 27);
  font-size:1rem;
  bottom:-16px;
  left:-5px;
  font-size:1.5rem;
}
.star{
  position:absolute;
  top:0;
  right:0;
  transform:rotate(45deg)
}
#star2{
  right:450px;
}
#star2 .span{
  animation-delay: 1.7s;
}
#star3{
  right:100px;
}
#star3 .span{
  animation-delay: 1s;
}
#star4{
  right:-150px;
}
#star4 .span{
  animation-delay: 2.4s;
}
#star5{
  right:-350px;
}
#star5 .span{
  animation-delay: 2s;
  animation-duration: 2s;
}
#star6 {
   right:850px;
   
}
#star6 .span{
  
  animation:shooting 6.3s linear infinite;
}
#star7 {
   right:300px;
}
#star7 .span{
  animation-delay: 1s;
  animation-duration: 3.4s;
  animation:shooting  linear infinite;
}
#star7 {
   right:950px;
}
#star7 .span{
  animation-delay: 0.5s;
  animation:shooting 4.6s linear infinite;
}
#star8 {
   right:1300px;
}
#star8 .span{
  
  animation:shooting 2.6s linear infinite ;
}
#star9 {
   right:400px;
}
#star9 .span{
  animation:shooting 3.7s linear infinite ;
}
#star10 {
   right:1150px;
}
#star10 .span{
  animation:shooting 4.3s linear infinite ;
}
@keyframes shooting{
  0%{
    transform:translate(0,-200px) rotate(-90deg);
    opacity: 1;
  }
  100%{
    transform:translate(0,1300px) rotate(-90deg);
    opacity: 0;
  }
}


</style>
