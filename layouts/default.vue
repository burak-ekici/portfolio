<template>
  <div class="fond absolute w-full">
    <div class="absolute w-full h-full">
      <Navbar />
    </div>
    <Nuxt />
  </div>
</template>

<script>
import Navbar from "@/components/navbar";

export default {
  components: {
    Navbar,
  },
};
</script>

<style>
.fond {
  background-color: rgb(34, 34, 34);
  z-index: -50;
  overflow: hidden;
}
</style>
