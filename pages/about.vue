<template>

  <div @mousemove='popo' id="fond" class="w-screen h-screen  relative overflow-hidden">
    <div data-speed="-2" id="contenue"
      class="absolute w-screen h-screen z-10 flex flex-col p-20 items-center justify-center"
    >
      <h1 class="tracking-wider mb-16 font-bold text-6xl">A propos</h1>
      <p class="tracking-wider mb-4 font-normal text-lg block w-1/2">
        Depuis peu, je suis devenu developpeur front end. 
        Auparavant, conducteur de bus
       chez Berthelet, chez Keolys Lyon ( TCL ), et enfin chauffeur uber.
      </p>
      <p class="tracking-wider mb-4 font-normal text-lg block w-1/2">
        Ayant passé la plupart de ma jeunesse sur l'ordinateur, 
        j'ai decidé de trouver un métier plus stimulant et qui me correspond d'avantage. Je me suis orienté
        vers le métier de developpeur qui me passionne depuis mon adolescance.
      
      </p>
      <p class="tracking-wider font-normal text-lg block w-1/2">
        Aujourd'hui je suis ambitieux, tout d'abord en commençant par le front end, puis le back-end. 
        J'aspire à devenir un developpeur accompli.
      </p>
    </div>

    <div class="z-0 absolute top-0 left-0 w-screen h-screen overflow-hidden">
      <i data-speed="-5" class="fas fa-car"></i><i data-speed="-5" class="fas fa-car"></i>
      <i data-speed="5" class="fas fa-laptop"></i><i data-speed="5" class="fas fa-laptop"></i>
      <i data-speed="2" class="fas fa-code"></i><i data-speed="2" class="fas fa-code"></i>
      <i data-speed="10" class="fas fa-user-tie"></i><i data-speed="10" class="fas fa-user-tie"></i>
      <i data-speed="8" class="fab fa-black-tie"></i><i data-speed="8" class="fab fa-black-tie"></i>
      <i data-speed="-2" class="fas fa-suitcase"></i><i data-speed="-2" class="fas fa-suitcase"></i>
      <i data-speed="4" class="fas fa-laptop-code"></i><i data-speed="4" class="fas fa-laptop-code"></i>
      <i data-speed="-9" class="fas fa-laptop"></i><i data-speed="-9" class="fas fa-laptop"></i>
      <i data-speed="6" class="fas fa-bus"></i><i data-speed="6" class="fas fa-bus"></i>
      <i data-speed="-7" class="fas fa-code"></i><i data-speed="-7" class="fas fa-code"></i>
      <i data-speed="-5" class="fas fa-mouse"></i><i data-speed="-5" class="fas fa-mouse"></i>
    </div>
  </div>
</template>

<script>
export default {
  
  methods:{
    popo(e){
      const elem = document.querySelectorAll('.fas');
      const elem2 = document.querySelectorAll('.fab');
      const elem3 = document.querySelector('#contenue')
      elem.forEach( fas => {
        const speed = fas.getAttribute('data-speed');
        const x = (window.innerWidth - e.pageX*speed) /100
        const y = (window.innerHeight - e.pageY*speed) /70
        fas.style.transform = `translate(${x}px,${y}px)`
      })
      elem2.forEach(fab => {
        const speed = fab.getAttribute('data-speed');
        const x = (window.innerWidth - e.pageX*speed) /100
        const y = (window.innerHeight - e.pageY*speed) /  100
        fab.style.transform = `translate(${x}px,${y}px)`
      })
      const speed = elem3.getAttribute('data-speed');
        const x = (window.innerWidth - e.pageX*speed) /100
        const y = (window.innerHeight - e.pageY*speed) / 50
        elem3.style.transform = `translate(${-x}px,${-y}px)`
    }
  }
};
</script>

<style scoped>
#fond {
  background-color: rgb(34, 34, 34);
  color: white;
}
h1 {
  color: #63b3ed;
  font-family: "Oswald", sans-serif;
  background-color: rgb(34, 34, 34);
  padding:20px;
  padding-top:10px;
  
  position:relative;
}
h1:before{
  content:"";
  position: absolute;
  left:-2px;
  right:-2px;
  top:-2px;
  bottom:-2px;
  background: linear-gradient(130deg, rgba(1,148,255,1) 0%, rgba(238,27,27,1) 100%);
  transform: skew(1deg,1deg);
  z-index:-1;
}


p {
  font-family: "Oswald", sans-serif;
}
i {
  font-size: 5rem;
  position: absolute;
}
i:nth-child(1) {
  color: rgb(96, 221, 125);
  top: 10%;
  left: 15%;
  font-size: 5rem;
  filter:blur(0.7rem)
}
i:nth-child(2) {
  color: rgb(96, 221, 125);
  top: 10%;
  left: 15%;
  font-size: 5rem;
}
i:nth-child(3) {
  color: rgb(203, 56, 208);
  top: 20%;
  left: 30%;
  font-size: 5rem;
  filter:blur(0.7rem);
  
}
i:nth-child(4) {
  color: rgb(203, 56, 208);
  top: 20%;
  left: 30%;
  font-size: 5rem;
}

i:nth-child(5) {
  color: rgb(150, 29, 39);
  top: 10%;
  left: 50%;
  font-size: 3rem;
  filter:blur(0.7rem)
}
i:nth-child(6) {
  color: rgb(150, 29, 39);
  top: 10%;
  left: 50%;
  font-size: 3rem;
}
i:nth-child(7) {
  color: rgb(68, 68, 68);
  top: 70%;
  left: 50%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(8) {
  color: rgb(68, 68, 68);
  top: 70%;
  left: 50%;
  font-size: 4.5rem;
}
i:nth-child(9) {
  color: rgb(40, 191, 224);
  top: 10%;
  left: 90%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(10) {
  color: rgb(40, 191, 224);
  top: 10%;
  left: 90%;
  font-size: 4.5rem;
}
i:nth-child(11) {
  color: rgb(187, 178, 48);
  top: 70%;
  left: 9%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(12) {
  color:  rgb(187, 178, 48);
  top: 70%;
  left: 9%;
  font-size: 4.5rem;
}
i:nth-child(13) {
  color: rgb(29, 233, 168);
   top: 50%;
  left: 18%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(14) {
  color:   rgb(29, 233, 168);
   top: 50%;
  left: 18%;
  font-size: 4.5rem;
}
i:nth-child(15) {
  color: rgb(201, 43, 122);
   top: 61%;
  left:85%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(16) {
  color:    rgb(201, 43, 122);
   top: 61%;
  left:85%;
  font-size: 4.5rem;
}
i:nth-child(17) {
  color: rgb(230, 153, 11);
   top: 76%;
  left:70%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(18) {
  color:    rgb(230, 153, 11);
   top: 76%;
  left:70%;
  font-size: 4.5rem;
}
i:nth-child(19) {
  color: rgb(29, 11, 230);
   top: 82%;
  left:25%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(20) {
  color:    rgb(29, 11, 230);
   top: 82%;
  left:25%;
  font-size: 4.5rem;
}
i:nth-child(21) {
  color: rgb(255, 0, 0);
  left: 72%;
  top:25%;
  font-size: 4.5rem;
  filter:blur(0.7rem)
}
i:nth-child(22) {
  color:    rgb(255, 0, 0);
  left: 72%;
  top:25%;
  font-size: 4.5rem;
}
</style>