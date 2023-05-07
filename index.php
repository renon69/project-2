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

<!-- login form -->
<div class="bg-white p-16 rounded shadow-2xl w-2/3">

  <h2 class="text-3xl font-bold mb-10 text-gray-800">Create Your Account</h2>

  <form class="space-y-5">

    <div>
      <label class="block mb-1 font-bold text-gray-500">Name</label>
      <input type="text" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
    </div>

    <div>
      <label class="block mb-1 font-bold text-gray-500">Email</label>
      <input type="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
    </div>

    <div>
      <label class="block mb-1 font-bold text-gray-500">Password</label>
      <input type="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
    </div>

    <div class="flex items-center">
      <input type="checkbox" id="agree">
      <label for="agree" class="ml-2 text-gray-700 text-sm">I agree to the terms and privacy.</label>
    </div>

    <button class="block w-full bg-yellow-400 hover:bg-yellow-300 p-4 rounded text-yellow-900 hover:text-yellow-800 transition duration-300">Sign Up</button>

  </form>

</div>


</body>
</html>