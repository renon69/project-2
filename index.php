<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="grid grid-cols-2">
    <!-- sign up form -->
<div class="bg-white p-16 rounded shadow-2xl w-2/3 ">

<h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

<form class="space-y-5 h-10" action="" method="post">
<!-- username  -->
  <div>
    <label class="block mb-1 font-bold text-gray-500">Username</label>
    <input name="username" 
    type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
  </div>
<!-- email -->
  <div>
    <label class="block mb-1 font-bold text-gray-500">Email</label>
    <input name="password" 
    type="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
  </div>
<!-- pass -->
  <div>
    <label class="block mb-1 font-bold text-gray-500">Password</label>
    <input name="password" 
    type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
  </div>
  <!-- repeat pass -->
  <div>
    <label class="block mb-1 font-bold text-gray-500">Repeat Password</label>
    <input name="repeat_password" 
    type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
  </div>

  <div class="flex items-center">
    <input type="checkbox" id="agree">
    <label for="agree" class="ml-2 text-gray-700 text-sm">I agree to the terms and privacy.</label>
  </div>

  <button class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Sign Up</button>

</form>

</div>
<!-- log in form -->
<div class="flex items-center h-screen w-full">
    <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
    <span class="block w-full text-xl uppercase font-bold mb-4">Login</span>      
      <form class="mb-4" action="/" method="post">
        <div class="mb-4 md:w-full">
          <label for="email" class="block text-xs mb-1">Username or Email</label>
          <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="email" name="email" id="email" placeholder="Username or Email">
        </div>
        <div class="mb-6 md:w-full">
          <label for="password" class="block text-xs mb-1">Password</label>
          <input class="w-full border rounded p-2 outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="Password">
        </div>
        <button class="bg-green-500 hover:bg-green-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded">Login</button>
      </form>
      <a class="text-blue-700 text-center text-sm" href="/login">Forgot password?</a>
  </div>
</div>
</div>


</body>
</html>