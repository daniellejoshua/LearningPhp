<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mini Login Page</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

  <div class="w-full max-w-sm bg-white rounded-2xl shadow-lg p-6">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Login</h2>
    <form action="#" method="post" class="space-y-4">
      
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          required 
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Enter your email"
        />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          required 
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Enter your password"
        />
      </div>

      <button 
        type="submit" 
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"
      >
        Login
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-4">
      Don't have an account? 
      <a href="#" class="text-blue-600 hover:underline">Sign up</a>
    </p>
  </div>

</body>
</html>

<?php 
try{
    if(!empty($_POST["email"]) && !empty($_POST["password"])){
       $email = $_POST["email"];
       $hash_pass = password_hash($_POST["password"], PASSWORD_BCRYPT);
       $query = "SELECT * FROM users";
       mysqli_query($conn,$query);
       echo "<h2>User registered successfully</h2>";
    }
}catch(mysqli_sql_exception){
    echo "<h1>Please try again</h1>";
}

?>