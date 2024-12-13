<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="./output.css" rel="stylesheet" />
     <title>Shop </title>
</head>

<body>
     <section id="nav">
          <div
               class="flex justify-between items-center px-8 py-2 shadow-lg w-full z-1000 bg-white top-0 fixed h-[80px]">
               <div class="flex items-center gap-3">
                    <img src="../asset/image/cafelogo.png" alt="" class="w-20" />
                    <h1 class="text-dark-brown font-bold text-2xl">Cafe Shop</h1>
               </div>
               <nav
                    class="lg:w-2/5 sm:w-3/5 hidden sm:flex sm:gap-3 sm:bg-white sm:static fixed top-20 right-1 bg-slate-200 shadow-md py-5 px-8 rounded-lg w-1/2 sm:flex-row flex-col-reverse sm:shadow-none sm:py-0 sm:px-0 gap-5"
                    id="menu">
                    <ul class="sm:navbar-b navbar-s">
                         <li>
                              <a href="#home" class="nav-text">Home</a>
                         </li>
                         <li>
                              <a href="shop.php" class="nav-text">Cart</a>
                         </li>
                         <li>
                              <a href="#about" class="nav-text">wallet</a>
                         </li>
                    </ul>
                    <!-- login logic  -->
                    <div
                         class="hover:border-light-brown hover:border-2 rounded-xl px-3 py-2 cursor-pointer active:bg-light-brown sm:flex flex flex-col items-center justify-center"
                         id="account">
                         <?php include '../../../backend/userHandler.php' ?>
                         <div
                              class="hidden absolute right-10 sm:top-24 top-28 bg-white rounded-xl shadow-lg border-red-950 border-2"
                              id="accountMenu">
                              <a
                                   href=""
                                   class="flex gap-2 py-4 px-5 text-dark-brown hover:text-light-brown hover:border-light-brown hover:border-2 rounded-xl active:bg-light-brown active:text-white"><img src="../../asset/icon/account-setting.svg" alt="" />Account
                                   setting</a>
                              <a
                                   href="login.php"
                                   class="flex gap-2 py-4 px-5 text-dark-brown hover:text-light-brown hover:border-light-brown hover:border-2 rounded-xl active:bg-light-brown active:text-white"><img src="../../asset/icon/logout.svg" alt="" />Log out</a>
                         </div>
                    </div>
               </nav>
               <button class="block sm:hidden" aria-expanded="false" id="menubtn">
                    <img src="../asset/icon/menu.svg" alt="" width="36" height="36" />
               </button>
          </div>
     </section>
     <!-- end navbar -->

     <!-- cart section -->
     <section class="bg-dark text-white pt-[100px] px-5">
          <!-- Category Section -->
          <div class="flex justify-between items-center mb-6">
               <!-- Hamburger button for categories -->
               <button
                    class="block md:hidden"
                    aria-expanded="false"
                    id="categoryBtn">
                    <img src="../asset/icon/menu.svg" alt="" width="36" height="36" />
               </button>
               <!-- Category-->
               <div
                    id="categories"
                    class="hidden absolute top-[150px] left-4 md:static bg-slate-200 md:bg-transparent lg:bg-transparent shadow-lg md:shadow-none lg:shadow-none rounded-lg px-3 py-4 w-1/2 md:w-auto flex-col md:flex md:flex-row md:gap-4 gap-3 text-sm font-medium self-start z-2">
                    <button class="py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white">
                         Pizza
                    </button>
                    <button class="py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white">
                         Burger
                    </button>
                    <button class="py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white">
                         Sandwich
                    </button>
                    <button class="py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white">
                         Chicken
                    </button>
                    <button class="py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white">
                         Sushi
                    </button>
               </div>
               <!-- Searchbox -->
               <div
                    class="flex w-full md:w-1/3 border-2 rounded-3xl px-3 py-1 bg-transparent border-light-brown">
                    <img
                         class="h-[30px] w-[30px] mr-2"
                         src="../asset/icon/search.png"
                         alt="" />
                    <input
                         class="text-black outline-none w-full"
                         type="text"
                         placeholder="SEARCH" />
               </div>
          </div>

          <!-- Items Grid -->
          <div class="grid grid-cols-3 gap-6">
               <!-- Item Card -->
               <div class="bg-dark-brown rounded-lg shadow-lg h-[200px] w-100 overflow-hidden">
                    <img src="../asset/image/aboutus.jpg" class="rounded-lg bg-center bg-cover" alt="Cafe">
               </div>
          </div>

          <!-- Best Restaurants -->
          <h2 class="text-xl font-bold mb-4 text-black">Best Restaurants</h2>
          <div class="">
               <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-6 h-[700px] lg:h-[300px] md:h-[300px] sm:h-[500px] ">
                    <!-- Restaurant Card -->
                    <div class=" relative rounded-lg">
                         <img src="../asset/menuItems/coffee.jpeg" class="w-full h-full rounded-lg" alt="milk-shark">
                         <h3 class="font-bold text-sm absolute rounded-bl-2xl top-0 right-0 py-2 px-2  glassEffect"><img src="../asset/icon/love.png" alt=""></h3>
                         <p class="text-sm font-extrabold absolute rounded-tr-2xl bottom-0 left-0 py-2 px-2 glassEffect">$2.99</p>
                    </div>

                    <div class=" relative rounded-lg ">
                         <img src="../asset/menuItems/burger.jpeg" class="w-full h-full rounded-lg" alt="burger">
                         <h3 class="font-bold text-sm absolute rounded-bl-2xl top-0 right-0 py-2 px-2  glassEffect"><img src="../asset/icon/love.png" alt=""></h3>
                         <p class="text-sm font-extrabold absolute rounded-tr-2xl bottom-0 left-0 py-2 px-2 glassEffect">$2.99</p>
                    </div>
               </div>
          </div>

     </section>



     <!-- script for make navbar interactive -->
     <script>
          const menubtn = document.getElementById("menubtn");
          const menu = document.getElementById("menu");
          menubtn.addEventListener("click", () => {
               menu.classList.toggle("hidden");
               menu.classList.toggle("flex");
          });
          const accMenu = document.getElementById("accountMenu");
          const acc = document.getElementById("account");
          acc.addEventListener("click", () => {
               accMenu.classList.toggle("hidden");
          });
          // getegory btn 
          // Category toggle functionality
          const categoryBtn = document.getElementById("categoryBtn");
          const categories = document.getElementById("categories");

          categoryBtn.addEventListener("click", () => {
               categories.classList.toggle("hidden");
               categories.classList.toggle("flex");
          });
     </script>
</body>

</html>