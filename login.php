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
</head>
<body class="min-h-screen w-full flex justify-center items-center bg-[#1a0d1a] p-4">
  <div class="flex flex-col lg:flex-row overflow-hidden w-full max-w-4xl min-h-[500px] bg-[#5e3b5e] rounded-2xl shadow-lg">
    <!-- Left Image -->
    <div class="hidden lg:block lg:w-1/2 lg:min-h-full">
      <img src="./assets/left.jpg" alt="Banner" class="w-full h-full object-cover rounded-l-2xl">
    </div>

    <!-- Right Panel -->
    <div class="flex flex-col items-center w-full lg:w-1/2 p-6 lg:p-10 justify-center">
      <!-- Tabs -->
      <div class="flex items-center overflow-hidden relative bg-zinc-950 w-full max-w-sm justify-around px-6 rounded-md py-2 text-purple-900 mb-8">
        <p id="loginTab" class="tab-btn z-10 px-4 py-2 cursor-pointer text-purple-900 select-none">Login</p>
        <p id="signupTab" class="tab-btn z-10 px-4 py-2 cursor-pointer text-white select-none">Sign Up</p>
        <div id="tabIndicator" class="absolute top-0 bottom-0 bg-[#f5d1fd] rounded-md w-1/2 left-0 transition-all duration-300"></div>
      </div>

      <!-- Login Form -->
      <form id="loginForm" class="flex flex-col w-full max-w-sm gap-4" action="signin.php" method="POST">
        <input class="bg-white text-zinc-950 px-4 py-3 rounded-md placeholder-gray-500 w-full focus:outline-none focus:ring-2 focus:ring-purple-400" type="email" name="email" placeholder="Enter your email" required />
        <input class="bg-white text-zinc-950 px-4 py-3 rounded-md placeholder-gray-500 w-full focus:outline-none focus:ring-2 focus:ring-purple-400" type="password" name="password" placeholder="Enter your password" required />
        <button class="bg-[#2d0032] hover:bg-[#4e2a50] hover:scale-105 transition-all duration-200 w-full px-4 py-3 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-purple-400" type="submit">Login</button>
      </form>

      <!-- Signup Form -->
      <form id="signupForm" class="hidden flex-col w-full max-w-sm gap-4" action="signup.php" method="POST">
        <input class="bg-white text-zinc-950 px-4 py-3 rounded-md placeholder-gray-500 w-full focus:outline-none focus:ring-2 focus:ring-purple-400" type="text" name="username" placeholder="Enter a username" required />
        <input class="bg-white text-zinc-950 px-4 py-3 rounded-md placeholder-gray-500 w-full focus:outline-none focus:ring-2 focus:ring-purple-400" type="email" name="email" placeholder="Enter your email" required />
        <input class="bg-white text-zinc-950 px-4 py-3 rounded-md placeholder-gray-500 w-full focus:outline-none focus:ring-2 focus:ring-purple-400" type="password" name="password" placeholder="Enter your password" required />
        <button class="bg-[#2d0032] hover:bg-[#4e2a50] hover:scale-105 transition-all duration-200 w-full px-4 py-3 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-purple-400" type="submit">Sign Up</button>
      </form>
    </div>
  </div>

  <script src="login.js"></script>
</body>
</html>