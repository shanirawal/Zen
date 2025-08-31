<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login / Signup</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
  <style>
    
    
  </style>
</head>
<body class="h-screen  w-screen flex justify-center items-center">
  <div class="flex overflow-hidden h-[60%] w-[70%] bg-primary rounded-2xl shadow-lg">
    <!-- Left Image -->
    <div class="w-[45%]">
      <img src="./assets/left.jpg" alt="Banner" class="w-full h-full ">
    </div>

    <!-- Right Panel -->
    <div class="flex flex-col items-center w-[55%] px-5 py-10">
      <!-- Tabs -->
      <div class="flex items-center overflow-hidden relative bg-zinc-950 w-[70%] justify-between px-16 rounded-md py-2 text-purple-900 h-[15%]">
        <p id="loginTab" class="tab-btn z-10 px-4 py-2 cursor-pointer text-purple-900">Login</p>
        <p id="signupTab" class="tab-btn z-10 px-4 py-2 cursor-pointer text-white">Sign Up</p>
        <div id="tabIndicator" class="absolute top-0 bottom-0 bg-[#f5d1fd] rounded-md w-1/2 left-0 transition-all duration-300"></div>
      </div>

      <!-- Login Form -->
      <form id="loginForm" class="flex flex-col mt-12 w-[90%] gap-4" action="signin.php" method="POST">
        <input class="bg-white text-zinc-950 px-4 py-4 rounded-md placeholder-gray-500" type="email" name="email" placeholder="Enter your email" />
        <input class="bg-white text-zinc-950 px-4 py-4 rounded-md placeholder-gray-500" type="password" name="password" placeholder="Enter your password" />
        <button class="bg-[#2d0032] hover:bg-[#4e2a50] hover:scale-105 transition-all duration-200 w-[30%] self-center px-4 py-4 rounded-md text-white" type="submit">Login</button>
      </form>

      <!-- Signup Form -->
      <form id="signupForm" class="hidden    flex-col mt-12 w-[90%] gap-4" action="signup.php" method="POST">
        <input class="bg-white text-zinc-950 px-4 py-4 rounded-md placeholder-gray-500" type="text" name="username" placeholder="Enter a username" />
        <input class="bg-white text-zinc-950 px-4 py-4 rounded-md placeholder-gray-500" type="email" name="email" placeholder="Enter your email" />
        <input class="bg-white text-zinc-950 px-4 py-4 rounded-md placeholder-gray-500" type="password" name="password" placeholder="Enter your password" />
        <button class="bg-[#2d0032] hover:bg-[#4e2a50] hover:scale-105 transition-all duration-200 w-[30%] self-center px-4 py-4 rounded-md text-white" type="submit">Sign-up</button>
      </form>
    </div>
  </div>

  <script src="login.js">
    
  </script>
</body>
</html>
