<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <title>Zenstar</title>
</head>
<body>
  <div class=" w-full min-h-screen  ">
    
    <nav class="pointer-events-auto fixed left-1/2 top-6 z-50 w-[90%] max-w-5xl -translate-x-1/2">
      <div class=" flex items-center justify-between h-18   rounded-full border border-white/10 bg-white/5 text-white backdrop-blur px-4 py-2  ">
        
          <div class='cursor-pointer w-16 h-12 '>

          <img src='./assets/zenstar1.png' alt="Zenstar" class=" w-full rounded-full h-full object-contain" />
          </div>
         
         <div id="nav-get-started" class='bg-[#70507E] px-4 py-3 rounded mr-2 cursor-pointer hover:text-zinc-300 hover:scale-105 transition-all duration-200'>
          <p  class='text-[0.9rem] '>Get started</p>
         </div>
      </div>
    </nav>

    <!-- hero section -->
    <section style="background-image: url('./assets/bg1.jpg');" class="hero-section  bg-cover bg-center   flex flex-col justify-center items-center min-h-screen min-w-full relative ">

        <div id="starfield"></div>
        
        <div class="flex flex-col  items-center justify-center w-full h-full z-10 relative">
          <div class="w-[80%] flex flex-col gap-3 items-center">
            <h1 class="text-4xl mb-5 font-cinzel    text-center">
              Discover Your Cosmic Path with <br />
              <span class="text-[#70507E] text-[3rem] font-bold">
                ZenStar
              </span>
            </h1>
            <p class="text-md text-zinc-400 w-[60%] font-lato  text-center ">
              Step into a world where the stars speak your truth.
              <br /> ZenStar blends ancient astrology with modern insight to
              guide you through life’s questions — with clarity, calm, and
              cosmic wisdom.
            </p>
          </div>

          <div
            id="hero-get-started"
            class="bg-[#70507E] flex items-center gap-2 mt-10 px-4 py-3 rounded mr-2 cursor-pointer hover:text-zinc-300 hover:scale-105 transition-all duration-200"
          >
            <p class="text-[0.9rem] ">Get started</p>
            
          </div>

          <div class=" absolute right-[20%] -top-36 -z-1">
            <img src='/assets/planet1.png' alt="" class="w-[200px] animate-planet-updown " />
          </div>
          <div class=" absolute left-[18%] top-32 -z-1">
            <img src='/assets/planet2.png' alt="" class="w-[200px] animate-planet-downup" />
          </div>
        </div>
      
    </section>

    <!-- features section  -->
    
  </div>


  <script src="script.js"></script>
</body>
</html>