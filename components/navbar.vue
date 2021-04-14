<template>
  <div id="navbar" class="z-50 relative h-full flex flex-col justify-between">
    <div class="bg-black flex flex-col items-center">
      <h1 class="font-bold mt-2 text-5xl font-mono">B</h1>
      <p class="-mt-2 font-bold text-xs pb-4">Burak</p>
    </div>

    <div>
      <nav class="flex flex-col items-center">
        <NuxtLink class="my-5" to="/"><div id="acceuil"></div></NuxtLink>
        <NuxtLink class="my-5" to="/about"><div id="apropos"></div></NuxtLink>
        <NuxtLink class="my-5" to="/skills"
          ><div id="competences"></div
        ></NuxtLink>
        <NuxtLink class="my-5" to="/projets"><div id="projets"></div></NuxtLink>
        <NuxtLink class="my-5" to="/contact"><div id="contact"></div></NuxtLink>
      </nav>
    </div>

    <div class="flex justify-center my-4 flex-col items-center">
      <a
        class="text-2xl hover:text-blue-400"
        href="https://www.linkedin.com/in/burak-ekici-757463204/"
        ><i class="fab fa-linkedin"></i
      ></a>
      <a
        class="text-2xl hover:text-blue-400"
        href="https://www.facebook.com/burak.ekici.5667/"
        ><i class="fab fa-facebook-square"></i
      ></a>
      <a class="text-2xl hover:text-blue-400" href=""
        ><i class="fab fa-github"></i
      ></a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>

<style scoped>
#navbar {
  width: 4%;
  color: lightgray;
  background-color: rgb(20, 20, 20);
  height: 100vh;
}
h1 {
  color: #63b3ed;
  text-shadow: 5px 0px 0px rgb(238, 27, 27);
}

#acceuil {
  display: flex;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  flex-flow: row nowrap;
  align-items: center;
  position: relative;
}
#acceuil:before {
  content: "\f015";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.2rem;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  transition: 0.3s;
}
#acceuil:after {
  content: "Acceuil";
  display: block;
  opacity: 0;
  transition: 0.3s;
  width: 100%;
  color: #63b3ed;
  font-weight: bold;
  height: 25px;
}
#acceuil:hover:before {
  opacity: 0;
}
#acceuil:hover:after {
  opacity: 1;
  text-align: center;
  font-size: 0.8rem;
  height: 25px;
  padding-top: 6px;
}
#apropos {
  display: flex;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  flex-flow: row nowrap;
  align-items: center;
  position: relative;
}
#apropos:before {
  content: "\f007";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.2rem;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  transition: 0.3s;
}
#apropos:after {
  content: "A propos";
  display: block;
  opacity: 0;
  transition: 0.3s;
  width: 100%;
  color: #63b3ed;
  font-weight: bold;
  height: 25px;
}
#apropos:hover:before {
  opacity: 0;
}
#apropos:hover:after {
  opacity: 1;
  text-align: center;
  font-size: 0.8rem;
  height: 25px;
  padding-top: 6px;
}
#competences {
  display: flex;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  flex-flow: row nowrap;
  align-items: center;
  position: relative;
}
#competences:before {
  content: "\f666";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.2rem;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  transition: 0.3s;
}
#competences:after {
  content: "Technos";
  display: block;
  opacity: 0;
  transition: 0.3s;
  width: 100%;
  color: #63b3ed;
  font-weight: bold;
  height: 25px;
}
#competences:hover:before {
  opacity: 0;
}
#competences:hover:after {
  opacity: 1;
  text-align: center;
  font-size: 0.8rem;
  height: 25px;
  padding-top: 6px;
}
#projets {
  display: flex;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  flex-flow: row nowrap;
  align-items: center;
  position: relative;
}
#projets:before {
  content: "\f518";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.2rem;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  transition: 0.3s;
}
#projets:after {
  content: "Projets";
  display: block;
  opacity: 0;
  transition: 0.3s;
  width: 100%;
  color: #63b3ed;
  font-weight: bold;
  height: 25px;
  font-size: 0.8rem;
}
#projets:hover:before {
  opacity: 0;
}
#projets:hover:after {
  opacity: 1;
  text-align: center;
  font-size: 0.8rem;
  height: 25px;
  padding-top: 6px;
}
#contact {
  display: flex;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  flex-flow: row nowrap;
  align-items: center;
  position: relative;
}
#contact:before {
  content: "\f0e0";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 1.2rem;
  position: absolute;
  display: block;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  transition: 0.3s;
}
#contact:after {
  content: "Contact";
  display: block;
  opacity: 0;
  transition: 0.3s;
  width: 100%;
  color: #63b3ed;
  font-weight: bold;
  height: 25px;
  font-size: 0.8rem;
}
#contact:hover:before {
  opacity: 0;
}
#contact:hover:after {
  opacity: 1;
  text-align: center;
  font-size: 0.8rem;
  height: 25px;
  padding-top: 6px;
}
</style>