<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="preload" href="./fonts/cinemasundaydemofont-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/cinemasundaydemofont-Regular.woff" as="font" type="font/woff" crossorigin>


  <title>Zenstar</title>
</head>

<body>
  <div class=" w-full min-h-screen  ">

    <nav class="pointer-events-auto fixed left-1/2 top-6 z-50 w-[90%] max-w-5xl -translate-x-2/4">
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
  class="hero-section bg-cover bg-center flex flex-col justify-center items-center min-h-screen min-w-full relative">

  <div id="starfield"></div>

  <div class="flex flex-col items-center justify-center w-full h-full z-10 relative px-4 sm:px-6">
    <!-- Content container -->
    <div class="w-full max-w-4xl flex flex-col gap-3 items-center">
      <h1 class="text-3xl sm:text-4xl md:text-5xl mb-3 font-cinema text-center">
        Discover Your Cosmic Path with <br />
        <span class="text-[#70507E] font-bold text-4xl sm:text-5xl md:text-6xl">
          ZenStar
        </span>
      </h1>
      <p class="text-sm sm:text-md text-zinc-400 w-full max-w-2xl font-light text-center">
        Step into a world where the stars speak your truth.<br />
        ZenStar blends ancient astrology with modern insight to
        guide you through life’s questions — with clarity, calm, and
        cosmic wisdom.
      </p>
    </div>

    <div id="hero-get-started"
      class="bg-[#70507E] flex items-center gap-2 mt-8 sm:mt-10 px-4 py-3 rounded cursor-pointer hover:text-zinc-300 hover:scale-105 transition-all duration-200">
      <p class="text-[0.9rem]">Get started</p>
    </div>

    <!-- Planet 1: right side -->
    <div class="absolute top-0 right-0 -z-1 md:right-[20%] md:-top-36">
      <img src='./assets/planet1.png' alt="" class="w-24 sm:w-32 md:w-[200px] animate-planet-updown" />
    </div>

    <!-- Planet 2: left side -->
    <div class="absolute top-24 left-0 -z-1 md:left-[18%] md:top-32">
      <img src='./assets/planet2.png' alt="" class="w-24 sm:w-32 md:w-[200px] animate-planet-downup" />
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
          <button onclick="window.location.href='login.php'"
            class="bg-primary cursor-pointer text-white font-semibold py-4 px-10 rounded-full shadow-2xl transform transition hover:scale-105 hover:shadow-purple-500/30">
            Begin Your Cosmic Journey
          </button>
        </div>
      </div>

    </div>


   <footer class="bg-[#1f0f1f]  text-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <!-- Company Info -->
          <div class="col-span-1 md:col-span-2">
            <h3 class="text-3xl mb-4 font-cinema">Zenstar</h3>
            <p class="text-gray-400 mb-4 max-w-md">
              A comprehensive digital platform combining ancient numerology wisdom with modern technology to provide
              personalized insights for self-discovery and personal growth.

            </p>

            <!-- logos -->
            <!-- <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd" />
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <span class="sr-only">LinkedIn</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                </svg>
              </a>
            </div> -->
          </div>

          <!-- Quick Links -->
          <div>
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2">
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
              <!-- <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>

              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li> -->
            </ul>
          </div>

          <!-- Contact Info -->
          <div>
            <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
            <ul class="space-y-2 text-gray-400">
              <li class="flex items-start">
                <svg class="h-5 w-5 mr-2 mt-0.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Surat,Gujarat</span>
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 mr-2 mt-0.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span>+91 9773109686</span>
              </li>
              <!-- <li class="flex items-start">
                <svg class="h-5 w-5 mr-2 mt-0.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span>info@company.com</span>
              </li> -->
            </ul>
          </div>
        </div>

        <div class="border-t  border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-center items-center">
          <p class="text-gray-400 text-sm ">
            &copy; 2025 Zenstar. All rights reserved.
          </p>

        </div>
      </div>
    </footer>  


    <script src="script.js"></script>
</body>

</html>