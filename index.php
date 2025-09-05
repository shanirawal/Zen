<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="preload" href="./fonts/cinemasundaydemofont-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/cinemasundaydemofont-Regular.woff" as="font" type="font/woff" crossorigin>


  <title>Zenstar</title>
</head>

<body>
  <div class=" w-full min-h-screen  ">

    <nav class="pointer-events-auto fixed left-1/2 top-6 z-50 w-[90%] max-w-5xl -translate-x-1/2">
      <div
        class=" flex items-center justify-between h-18   rounded-full border border-white/10 bg-white/5 text-white backdrop-blur px-4 py-2  ">

        <div class='cursor-pointer w-16 h-12 '>

          <img src='./assets/zenstar1.png' alt="Zenstar" class=" w-full rounded-full h-full object-contain" />
        </div>

        <div id="nav-get-started"
          class='bg-[#70507E] px-4 py-3 rounded mr-2 cursor-pointer hover:text-zinc-300 hover:scale-105 transition-all duration-200'>
          <p class='text-[0.9rem] '>Get started</p>
        </div>
      </div>
    </nav>

    <!-- hero section -->
    <section style="background-image: url('./assets/bg1.jpg');"
      class="hero-section  bg-cover bg-center   flex flex-col justify-center items-center min-h-screen min-w-full relative ">

      <div id="starfield"></div>

      <div class="flex flex-col  items-center justify-center w-full h-full z-10 relative">
        <div class="w-[80%]  flex flex-col gap-3 items-center">
          <h1 class="text-4xl mb-3 font-cinema    text-center">
            Discover Your Cosmic Path with <br />
            <span style='font-size:4rem; ' class="text-[#70507E] font-bold">
              ZenStar
            </span>
          </h1>
          <p class="text-md text-zinc-400 w-[60%] font-light   text-center ">
            Step into a world where the stars speak your truth.
            <br /> ZenStar blends ancient astrology with modern insight to
            guide you through life’s questions — with clarity, calm, and
            cosmic wisdom.
          </p>
        </div>

        <div id="hero-get-started"
          class="bg-[#70507E] flex items-center gap-2 mt-10 px-4 py-3 rounded mr-2 cursor-pointer hover:text-zinc-300 hover:scale-105 transition-all duration-200">
          <p class="text-[0.9rem] ">Get started</p>

        </div>

        <div class=" absolute right-[20%] -top-36 -z-1">
          <img src='./assets/planet1.png' alt="" class="w-[200px] animate-planet-updown " />
        </div>
        <div class=" absolute left-[18%] top-32 -z-1">
          <img src='./assets/planet2.png' alt="" class="w-[200px] animate-planet-downup" />
        </div>
      </div>

    </section>

    <!-- features section  -->
    <div class="min-h-screen min-w-full flex flex-col items-center  relative  ">
      <p class='mt-[2rem] font-cinema text-[5rem] text-neutral-400'>Features</p>

      <!-- Particle Background -->
      <div class="particles" id="particles"></div>

      <!-- Main Content -->
      <div class="max-w-7xl mx-auto px-4 py-16 relative z-10">



        <!-- Feature Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

          <!-- Lucky Days & Colours -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float">
            <div class="flex justify-center mb-5">
              <img src="./assets/lucky.png" alt="Lucky Days & Colours" class="w-24 h-24 icon-glow cursor-pointer" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Lucky Days & Colours</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Discover your most auspicious days, colors, and numbers for harmony and success.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

          <!-- Planetary Allies -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float delay-100">
            <div class="flex justify-center mb-5">
              <img src="./assets/p-traits.png" alt="Planetary Allies" class="w-24 h-24 icon-glow cursor-pointer" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Planetary Allies</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Know which planets support you and which challenge your path.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

          <!-- Lo Shu Grid -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float delay-200">
            <div class="flex justify-center mb-5">
              <img src="./assets/loshugrid.png" alt="Lo Shu Grid" class="w-24 h-24 icon-glow cursor-pointer" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Lo Shu Grid</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Decode your birth date’s energy chart to reveal strengths and life challenges.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

          <!-- Chaldean Numerology -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float delay-300 col-span-1 md:col-span-2 lg:col-span-1">
            <div class="flex justify-center mb-5">
              <img src="./assets/chandlean.png" alt="Chaldean Numerology" class="w-24 h-24 icon-glow cursor-pointer" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Chaldean Numerology</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Uncover the spiritual meaning of your name and birth date using ancient number wisdom.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

          <!-- Remedies -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float delay-400">
            <div class="flex justify-center mb-5">
              <img src="./assets/remedies.png" alt="Remedies" class="w-24 h-24 icon-glow cursor-pointer" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Remedies</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Powerful, simple remedies to balance energies and attract abundance.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

          <!-- Personality Traits -->
          <div
            class="group relative bg-gray-900/80 backdrop-blur-sm border border-purple-900/50 rounded-2xl p-6 shadow-2xl card-glow animate-float delay-500">
            <div class="flex justify-center mb-5">
              <img src="./assets/personality.png" alt="Personality Traits" class="w-24 h-24 icon-glow" />
            </div>
            <h3 class="text-xl font-bold text-purple-300 mb-2">Personality Traits</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
              Understand your talents, growth areas, and soul purpose through astrology.
            </p>
            <div
              class="mt-4 w-full h-1 bg-gradient-to-r from-transparent via-purple-500 to-transparent group-hover:from-purple-500 group-hover:to-purple-500 transition-all duration-500">
            </div>
          </div>

        </div>

        <!-- CTA Button -->
        <div class="text-center mt-16">
          <button
            class="bg-primary cursor-pointer text-white font-semibold py-4 px-10 rounded-full shadow-2xl transform transition hover:scale-105 hover:shadow-purple-500/30">
            Begin Your Cosmic Journey
          </button>
        </div>
      </div>

    </div>


    <div>
      <!-- Background -->
      <div class="absolute inset-0 bg-gradient-to-br from-purple-950 via-black to-indigo-950 -z-10"></div>

      <!-- Container -->
      <div class="max-w-7xl mx-auto px-6 py-16">

        <!-- Section Header -->
        <div class="text-center mb-14">
          <h2
            class="text-3xl md:text-5xl font-bold bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent">
            Meet the Celestial Guides
          </h2>
          <p class="mt-4 text-gray-400 text-lg max-w-2xl mx-auto">
            Our team blends ancient wisdom with modern insight to guide your journey through the stars.
          </p>
        </div>

        <!-- Team Grid (4 Cards) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

          <!-- Member 1 -->
          <div
            class="group bg-gray-800/70 backdrop-blur-sm border border-purple-800/40 rounded-2xl overflow-hidden hover:bg-gray-700/90 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-purple-500/20">
            <img src="https://i.pravatar.cc/400?img=1" alt="Aria Moonweaver" class="w-full h-48 object-cover" />
            <div class="p-5 text-center">
              <h3 class="text-xl font-semibold text-white">Aria Moonweaver</h3>
              <p class="text-purple-400 font-medium text-sm">Chief Astrologer</p>
              <p class="mt-3 text-gray-300 text-sm">Guides with lunar intuition and deep cosmic knowledge.</p>
              <div class="mt-4 flex justify-center space-x-3">
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Instagram</a>
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Email</a>
              </div>
            </div>
          </div>

          <!-- Member 2 -->
          <div
            class="group bg-gray-800/70 backdrop-blur-sm border border-purple-800/40 rounded-2xl overflow-hidden hover:bg-gray-700/90 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-purple-500/20">
            <img src="https://i.pravatar.cc/400?img=2" alt="Orion Starfall" class="w-full h-48 object-cover" />
            <div class="p-5 text-center">
              <h3 class="text-xl font-semibold text-white">Orion Starfall</h3>
              <p class="text-purple-400 font-medium text-sm">Numerologist</p>
              <p class="mt-3 text-gray-300 text-sm">Decodes the universe’s language through sacred numbers.</p>
              <div class="mt-4 flex justify-center space-x-3">
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">LinkedIn</a>
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Website</a>
              </div>
            </div>
          </div>

          <!-- Member 3 -->
          <div
            class="group bg-gray-800/70 backdrop-blur-sm border border-purple-800/40 rounded-2xl overflow-hidden hover:bg-gray-700/90 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-purple-500/20">
            <img src="https://i.pravatar.cc/400?img=3" alt="Luna Solis" class="w-full h-48 object-cover" />
            <div class="p-5 text-center">
              <h3 class="text-xl font-semibold text-white">Luna Solis</h3>
              <p class="text-purple-400 font-medium text-sm">Energy Healer</p>
              <p class="mt-3 text-gray-300 text-sm">Aligns your aura with planetary rhythms and moon cycles.</p>
              <div class="mt-4 flex justify-center space-x-3">
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Healing</a>
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Events</a>
              </div>
            </div>
          </div>

          <!-- Member 4 -->
          <div
            class="group bg-gray-800/70 backdrop-blur-sm border border-purple-800/40 rounded-2xl overflow-hidden hover:bg-gray-700/90 transition-all duration-500 shadow-lg hover:shadow-xl hover:shadow-purple-500/20">
            <img src="https://i.pravatar.cc/400?img=4" alt="Cassio Vega" class="w-full h-48 object-cover" />
            <div class="p-5 text-center">
              <h3 class="text-xl font-semibold text-white">Cassio Vega</h3>
              <p class="text-purple-400 font-medium text-sm">Tech Alchemist</p>
              <p class="mt-3 text-gray-300 text-sm">Builds digital tools infused with cosmic intelligence.</p>
              <div class="mt-4 flex justify-center space-x-3">
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">GitHub</a>
                <a href="#" class="text-purple-300 hover:text-purple-200 text-xs font-medium">Twitter</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>


    <script src="script.js"></script>
</body>

</html>