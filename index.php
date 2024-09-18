<?php
include 'conn.php';
$result = mysqli_query($conn, "SELECT * FROM tb_karyawan ");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Apotik</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>


<body class="bg-gray-900 text-white">


  <!-- Navbar -->
  <nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <a href="#" class="text-3xl font-bold">Apotik</a>

      <!-- Menu -->
      <div class="hidden md:flex space-x-4">
        <a href="#" class="hover:text-gray-400">Home</a>
        <a href="#" class="hover:text-gray-400">Products</a>
        <a href="#" class="hover:text-gray-400">About</a>
        <a href="#" class="hover:text-gray-400">Contact</a>
      </div>

      <!-- Hamburger Menu (Mobile) -->
      <div class="md:hidden">
        <button id="menu-button" class="focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
      <a href="#" class="block py-2 px-4 hover:bg-gray-700">Home</a>
      <a href="#" class="block py-2 px-4 hover:bg-gray-700">Products</a>
      <a href="#" class="block py-2 px-4 hover:bg-gray-700">About</a>
      <a href="#" class="block py-2 px-4 hover:bg-gray-700">Contact</a>
    </div>
  </nav>

  <script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>

</html>