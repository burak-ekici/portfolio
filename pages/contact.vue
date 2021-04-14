<template>
  <div id="fond" class="w-screen h-screen flex justify-center items-center">
    <form
      id="contact-me"
      class="w-full mx-auto max-w-3xl bg-white shadow p-8 text-gray-700"
    >
      <h2 class="w-full my-2 text-3xl font-bold leading-tight my-5">
        Formulaire de contact
      </h2>
      <!-- name field -->
      <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
          <input
            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
            id="name"
            type="text"
            placeholder="Votre nom"
            required
          />
          <label
            for="name"
            class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text"
          >
            Votre nom
          </label>
        </div>
      </div>
      <!-- email field -->
      <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
          <input
            class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
            id="name"
            type="text"
            placeholder="Votre mail"
            required
          />
          <label
            for="name"
            class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text"
          >
            Votre mail
          </label>
        </div>
      </div>
      <!-- Message field -->
      <div class="flex flex-wrap mb-6">
        <div class="relative w-full appearance-none label-floating">
          <textarea
            class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500"
            id="message"
            type="text"
            placeholder="Message..."
          ></textarea>
          <label
            for="message"
            class="absolute tracking-wide py-2 px-4 mb-4 opacity-0 leading-tight block top-0 left-0 cursor-text"
            >Message...
          </label>
        </div>
      </div>

      <button
        class="float-right relative z-50 px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded shadow focus:outline-none hover:shadow-lg bg-green-600"
      >
        Envoyer
      </button>
    </form>
  </div>
</template>

<script>
export default {
  mounted() {
    //RED BORDER ON INVALID INPUT
    document.getElementById("contact-me").addEventListener(
      "invalid",
      function (event) {
        this.classList.add("check");
      },
      true
    );

    // TEXT AREA AUTO EXPAND
    var textarea = document.querySelector("textarea.autoexpand");

    textarea.addEventListener("keydown", autosize);

    function autosize() {
      var el = this;
      setTimeout(function () {
        el.style.cssText = "height:auto; padding: 1.4rem .2rem .5rem";

        el.style.cssText = "height:" + el.scrollHeight + "px";
      }, 0);
    }
  },
};
</script>

<style scoped>
#fond {
  background-color: rgb(34, 34, 34);
  color: white;
}
/* RED BORDER ON INVALID INPUT */
.check input:invalid {
  border-color: red;
}

/* FLOATING LABEL */
.label-floating input:not(:placeholder-shown),
.label-floating textarea:not(:placeholder-shown) {
  padding-top: 1.4rem;
}
.label-floating input:not(:placeholder-shown) ~ label,
.label-floating textarea:not(:placeholder-shown) ~ label {
  font-size: 0.8rem;
  transition: all 0.2s ease-in-out;
  color: #1f9d55;
  opacity: 1;
}
</style>