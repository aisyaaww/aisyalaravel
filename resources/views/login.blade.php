<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-500 to-blue-300 flex items-center justify-center h-screen">
  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-500">Login</h2>
    <form class="space-y-4">
      <div>
        <label for="username" class="block font-medium mb-1 text-blue-500">Username</label>
        <input type="text" id="username" class="border border-blue-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring focus:border-blue-500" placeholder="Enter your username" />
      </div>
      <div>
        <label for="password" class="block font-medium mb-1 text-blue-500">Password</label>
        <input type="password" id="password" class="border border-blue-300 rounded-md py-2 px-3 w-full focus:outline-none focus:ring focus:border-blue-500" placeholder="Enter your password" />
      </div>
      <button type="submit" class="bg-blue-500 text-white rounded-md py-2 px-4 w-full hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500">Login</button>
    </form>
  </div>
</body>
</html>