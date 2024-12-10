<nav class="flex flex-col items-center">
  <a class="flex gap-3" href="#">
    <img src="../asset/image/cafelogo.png" alt="" width="46" height="46" />
    <h1 class="text-dark-brown text-xl font-bold">CafeShop</h1></a
  >
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#"
        ><img src="./asset/icon/" alt="" />Home</a
      >
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"
        ><img src="./asset/icon/drink.png" alt="" />Drink</a
      >
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"
        ><img src="./asset/icon/fast-food.png" alt="" />Food</a
      >
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./cart.php"
        ><img src="./asset/icon/cart.png" alt="" />Cart</a
      >
    </li>
  </ul>
  <div class="user">
    <div class="user-profile"><img src="./asset/icon/user.png" alt="" /></div>
    <div class="user-name">user1</div>
  </div>
</nav>
<section id="nav">
  <div
    class="flex justify-between items-center px-8 py-2 shadow-lg fixed top-0 w-full z-1000 bg-white"
  >
    <div class="flex items-center gap-3">
      <img src="../asset/image/cafelogo.png" alt="" class="w-20" />
      <h1 class="text-dark-brown font-bold text-2xl">Cafe Shop</h1>
    </div>
    <nav class="lg:w-2/5 sm:w-3/5 hidden sm:block bg-white" id="menu">
      <ul class="sm:navbar-b navbar-s">
        <li>
          <a href="#home" class="nav-text">Home</a>
        </li>
        <li>
          <a href="" class="nav-text">Shop</a>
        </li>
        <li>
          <a href="#about" class="nav-text">About</a>
        </li>
        <li>
          <a href="#review" class="nav-text">Review</a>
        </li>
        <li>
          <a href="#contact" class="nav-text">Contact</a>
        </li>
      </ul>
    </nav>
    <button class="block sm:hidden" aria-expanded="false" id="menubtn">
      <img src="../asset/icon/menu.svg" alt="" width="36" height="36" />
    </button>
  </div>
</section>
