<template>
  <div id="fond" class="overflow-hidden w-full">
    <h1 class="w-full text-center block z-20 tracking-wider font-bold text-5xl">
      Mes projets
    </h1>
    <div>
      <div
        class="relative w-full pl-20 pr-10 flex flex-row flex-wrap items-center text-center box-border bg-transparent z-10"
      >
        <div
          v-for="projet in projets"
          :key="projet.link"
          class="w-1/3 p-10"
          id="cible"
        >
          <div
            class="shadow-lg group container rounded-md bg-white max-w-sm flex justify-center items-center mx-auto content-div"
          >
            <div class="w-full">
              <div class="w-full image-cover rounded-t-md"></div>
              <div
                class="py-8 px-4 bg-white rounded-b-md fd-cl group-hover:opacity-25"
              >
                <span
                  class="block text-lg text-gray-800 font-bold tracking-wide"
                  >{{ projet.name }}</span
                >
                <span class="block text-gray-600 text-sm">
                  {{ projet.description }}
                </span>
              </div>
            </div>
            <div class="absolute opacity-0 fd-sh group-hover:opacity-100">
              <span
                class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans"
                >{{ projet.name }}</span
              >
              <div class="pt-8 text-center">
                <button
                  class="text-center rounded-lg p-4 bg-white text-gray-700 font-bold text-lg"
                >
                  <a :href="projet.link">Voir le projet</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <canvas id="c"></canvas>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projets: [
        {
          link: "/permaprojet",
          name: "Projet permaculture",
          description: "Projet de validation du diplôme RNCP 3",
        },
        {
          link: "/Vueminiapp",
          name: "10 mini vue3 App",
          description: "Projet de mise en pratique de la librairie VUEJS 3",
        },
        {
          link: "/atila_terasse",
          name: "site vitrine",
          description: "Projet pratique de site vitrine ",
        },
        {
          link: "/",
          name: "Mon portfolio",
          description: "Projet réalisé avec NUXTJS ",
        },
        {
          link: "/EDM",
          name: "EDM",
          description: "refonte du site expertsdumontage.fr",
        },
      ],
    };
  },
  mounted() {
    var w = (c.width = window.innerWidth),
      h = (c.height = window.innerHeight),
      ctx = c.getContext("2d"),
      minDist = 10,
      maxDist = 30,
      initialWidth = 10,
      maxLines = 100,
      initialLines = 4,
      speed = 5,
      lines = [],
      frame = 0,
      timeSinceLast = 0,
      dirs = [
        // straight x, y velocity
        [0, 1],
        [1, 0],
        [0, -1],
        [-1, 0],
        // diagonals, 0.7 = sin(PI/4) = cos(PI/4)
        [0.7, 0.7],
        [0.7, -0.7],
        [-0.7, 0.7],
        [-0.7, -0.7],
      ],
      starter = {
        // starting parent line, just a pseudo line

        x: w / 2,
        y: h / 2,
        vx: 0,
        vy: 0,
        width: initialWidth,
      };

    function init() {
      lines.length = 0;

      for (var i = 0; i < initialLines; ++i) lines.push(new Line(starter));

      ctx.fillStyle = "#222";
      ctx.fillRect(0, 0, w, h);

      // if you want a cookie ;)
      // ctx.lineCap = 'round';
    }
    function getColor(x) {
      return "hsl( hue, 80%, 50% )".replace("hue", (x / w) * 360 + frame);
    }
    function anim() {
      window.requestAnimationFrame(anim);

      ++frame;

      ctx.shadowBlur = 0;
      ctx.fillStyle = "rgba(0,0,0,.02)";
      ctx.fillRect(0, 0, w, h);
      ctx.shadowBlur = 0.5;

      for (var i = 0; i < lines.length; ++i)
        if (lines[i].step()) {
          // if true it's dead

          lines.splice(i, 1);
          --i;
        }

      // spawn new

      ++timeSinceLast;

      if (
        lines.length < maxLines &&
        timeSinceLast > 10 &&
        Math.random() < 0.5
      ) {
        timeSinceLast = 0;

        lines.push(new Line(starter));

        // cover the middle;
        ctx.fillStyle = ctx.shadowColor = getColor(starter.x);
        ctx.beginPath();
        ctx.arc(starter.x, starter.y, initialWidth, 0, Math.PI * 2);
        ctx.fill();
      }
    }

    function Line(parent) {
      this.x = parent.x | 0;
      this.y = parent.y | 0;
      this.width = parent.width / 1.25;

      do {
        var dir = dirs[(Math.random() * dirs.length) | 0];
        this.vx = dir[0];
        this.vy = dir[1];
      } while (
        (this.vx === -parent.vx && this.vy === -parent.vy) ||
        (this.vx === parent.vx && this.vy === parent.vy)
      );

      this.vx *= speed;
      this.vy *= speed;

      this.dist = Math.random() * (maxDist - minDist) + minDist;
    }
    Line.prototype.step = function () {
      var dead = false;

      var prevX = this.x,
        prevY = this.y;

      this.x += this.vx;
      this.y += this.vy;

      --this.dist;

      // kill if out of screen
      if (this.x < 0 || this.x > w || this.y < 0 || this.y > h) dead = true;

      // make children :D
      if (this.dist <= 0 && this.width > 1) {
        // keep yo self, sometimes
        this.dist = Math.random() * (maxDist - minDist) + minDist;

        // add 2 children
        if (lines.length < maxLines) lines.push(new Line(this));
        if (lines.length < maxLines && Math.random() < 0.5)
          lines.push(new Line(this));

        // kill the poor thing
        if (Math.random() < 0.2) dead = true;
      }

      ctx.strokeStyle = ctx.shadowColor = getColor(this.x);
      ctx.beginPath();
      ctx.lineWidth = this.width;
      ctx.moveTo(this.x, this.y);
      ctx.lineTo(prevX, prevY);
      ctx.stroke();

      if (dead) return true;
    };

    init();
    anim();

    window.addEventListener("resize", function () {
      w = c.width = window.innerWidth;
      h = c.height = window.innerHeight;
      starter.x = w / 2;
      starter.y = h / 2;

      init();
    });
    const fond = document.querySelector("#fond");
    fond.style.overflow = "hidden";
  },
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
  padding: 20px;
  padding-top: 50px;
  position: relative;
}

#cible:nth-child(1) .content-div {
  background-image: url("../assets/img/permaculture.png");
  background-repeat: no-repeat;
  background-size: 250%;
  background-position: bottom;
}
#cible:nth-child(2) .content-div {
  background-image: url("../assets/img/mini.png");
  background-repeat: no-repeat;
  background-size: 0 -200px;
  background-position: bottom;
}
#cible:nth-child(3) .content-div {
  background-image: url("../assets/img/vitrine.png");
  background-repeat: no-repeat;
  background-size: 0 -200px;
  background-position: bottom;
}
#cible:nth-child(4) .content-div {
  background-image: url("../assets/img/portfolio.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: left;
}
#cible:nth-child(1) .content-div:hover {
  background-image: linear-gradient(
      to right,
      rgba(126, 213, 111, 0.801),
      hsla(160, 64%, 43%, 0.801)
    ),
    url("../assets/img/permaculture.png");
}
#cible:nth-child(2) .content-div:hover {
  background-image: linear-gradient(
      to right,
      rgba(126, 213, 111, 0.801),
      hsla(160, 64%, 43%, 0.801)
    ),
    url("../assets/img/mini.png");
}
#cible:nth-child(3) .content-div:hover {
  background-image: linear-gradient(
      to right,
      rgba(126, 213, 111, 0.801),
      hsla(160, 64%, 43%, 0.801)
    ),
    url("../assets/img/vitrine.png");
}
#cible:nth-child(4) .content-div:hover {
  background-image: linear-gradient(
      to right,
      rgba(126, 213, 111, 0.801),
      hsla(160, 64%, 43%, 0.801)
    ),
    url("../assets/img/portfolio.png");
}

.image-cover {
  height: 260px;
}
/*
-remove the classes below if you have the 'group-hover'property added in your tailwind config file
-also remove the class from the html template
*/
.content-div:hover .fd-cl {
  opacity: 0.25;
}
.content-div:hover .fd-sh {
  opacity: 1;
}
/* animation */
canvas {
  position: absolute;
  top: 0;
  left: 0;
  background-color: black;
  height: 200vh;
}
.fond {
  height: 200vh;
}
</style>