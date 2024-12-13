<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafeshop</title>
    <link href="./output.css" rel="stylesheet" />
  </head>
  <body>
    <section id="nav">
      <div
        class="flex justify-between items-center px-8 py-2 shadow-lg fixed top-0 w-full z-1000 bg-white"
      >
        <div class="flex items-center gap-3">
          <img src="../asset/image/cafelogo.png" alt="" class="w-20" />
          <h1 class="text-dark-brown font-bold text-2xl">Cafe Shop</h1>
        </div>
        <nav
          class="lg:w-2/5 sm:w-3/5 hidden sm:flex sm:gap-3 sm:bg-white sm:static fixed top-20 right-1 bg-slate-200 shadow-md py-5 px-8 rounded-lg w-1/2 sm:flex-row flex-col-reverse sm:shadow-none sm:py-0 sm:px-0 gap-5"
          id="menu"
        >
          <ul class="sm:navbar-b navbar-s">
            <li class="h-9">
              <a href="#home" class="nav-text">Home</a>
            </li>
            <li>
              <a href="shop.php" class="nav-text">Shop</a>
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
          <div
            class="hover:border-light-brown hover:border-2 rounded-xl px-3 py-2 cursor-pointer active:bg-light-brown sm:flex flex flex-col items-center justify-center"
            id="account"
          >
            <?php include '../backend/userHandler.php'?>
            <div
              class="hidden absolute right-10 sm:top-24 top-28 bg-white rounded-xl shadow-lg border-red-950 border-2"
              id="accountMenu"
            >
              <a
                href=""
                class="flex gap-2 py-4 px-5 text-dark-brown hover:text-light-brown hover:border-light-brown hover:border-2 rounded-xl active:bg-light-brown active:text-white"
                ><img src="../asset/icon/account-setting.svg" alt="" />Account
                setting</a
              >
              <a
                href="login.php"
                class="flex gap-2 py-4 px-5 text-dark-brown hover:text-light-brown hover:border-light-brown hover:border-2 rounded-xl active:bg-light-brown active:text-white"
                ><img src="../asset/icon/logout.svg" alt="" />Log out</a
              >
            </div>
          </div>
        </nav>

        <button class="block sm:hidden" aria-expanded="false" id="menubtn">
          <img src="../asset/icon/menu.svg" alt="" width="36" height="36" />
        </button>
      </div>
    </section>
    <section id="home">
      <div class="md:grid md:px-8 pt-32 md:grid-cols-2 grid grid-cols-1 px-10">
        <div
          class="md:px-20 md:order-first order-last sm:flex sm:justify-center sm:flex-col"
        >
          <h4 class="title text-dark-brown font-caveat">
            Start your day <br />with a cub of
            <span class="title text-light-brown">coffee.</span>
          </h4>
          <p class="my-3 text-2xl font-semibold text-dark-brown font-caveat">
            Boost your productivity and build your mood with a cub of coffee
          </p>
          <div>
            <button
              class="border-solid border-2 border-light-brown bg-light-brown rounded-3xl py-3 px-8 text-white font-bold my-3 hover:bg-white hover:text-light-brown w-36 h-16"
            >
              Buy now
            </button>
          </div>
        </div>
        <div class="flex justify-center items-center">
          <img
            src="../asset/image/coffeeprofile.jpg"
            alt="coffee-image"
            width="120%"
            class="rounded-xl"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <div
        class="md:grid md:grid-cols-2 md:px-8 md:gap-10 grid grid-cols-1 gap-5 pt-32 px-8"
      >
        <div class="flex items-center justify-center md:py-0">
          <img
            src="../asset/image/aboutus.jpg"
            alt="Cafe-image"
            class="rounded-3xl"
            width="98%"
          />
        </div>
        <div class="">
          <h1 class="font-poppin text-3xl font-bold text-dark-brown">
            About Us
          </h1>
          <p class="text-light-brown md:text-lg font-poppin my-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti id
            assumenda neque quae exercitationem repellat voluptates quasi sunt
            quam accusantium voluptas, a suscipit excepturi repellendus dolorem
            nisi sed? Praesentium, sapiente. Voluptas unde blanditiis maiores,
            commodi optio fugiat officia odit pariatur, dolores delectus saepe
            impedit sint suscipit qui exercitationem earum itaque enim error.
          </p>
        </div>
      </div>
      <div class="py-3 px-8 mt-10">
        <div class="flex justify-center">
          <h2 class="title font-caveat text-dark-brown">
            Why People choose us?
          </h2>
        </div>
        <div
          class="md:grid md:grid-cols-2 lg:grid-cols-4 flex flex-col gap-10 pt-14 items-center"
        >
          <div class="w-72 px-10 py-8 shadow-lg rounded-2xl bg-light-brown">
            <div class="flex items-center gap-2">
              <img
                src="../asset/icon/thumpup.svg"
                alt="icon"
                width="36"
                height="36"
              />
              <h3 class="font-bold text-xl text-slate-200">Hight Quality</h3>
            </div>
            <div>
              <p class="text-base text-slate-200">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat
                ab perferendis voluptates possimus id facere ullam pariatur.
              </p>
            </div>
          </div>
          <div class="w-72 px-10 py-8 shadow-lg rounded-2xl bg-slate-200">
            <div class="flex items-center gap-2">
              <img
                src="../asset/icon/onlineshop.svg"
                alt="icon"
                width="36"
                height="36"
              />
              <h3 class="font-bold text-xl text-dark-brown">Online Order</h3>
            </div>
            <div>
              <p class="text-base text-amber-700 font-medium">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat
                ab perferendis voluptates possimus id facere ullam pariatur.
              </p>
            </div>
          </div>
          <div class="w-72 px-10 py-8 shadow-lg rounded-2xl bg-light-brown">
            <div class="flex items-center gap-2">
              <img
                src="../asset/icon/update.svg"
                alt="icon"
                width="36"
                height="36"
              />
              <h3 class="font-bold text-xl text-slate-200">24/7 Service</h3>
            </div>
            <div>
              <p class="text-base text-slate-200">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat
                ab perferendis voluptates possimus id facere ullam pariatur.
              </p>
            </div>
          </div>
          <div class="w-72 px-10 py-8 shadow-lg rounded-2xl bg-slate-200">
            <div class="flex items-center gap-2">
              <img
                src="../asset/icon/delivery_truck_speed_30dp_E8EAED_FILL0_wght400_GRAD0_opsz24.svg"
                alt="icon"
                width="36"
                height="36"
              />
              <h3 class="font-bold text-xl text-dark-brown">Fast Delivery</h3>
            </div>
            <div>
              <p class="text-base text-amber-700 font-medium">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat
                ab perferendis voluptates possimus id facere ullam pariatur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="review" class="pt-24">
      <div class="flex justify-center">
        <h2 class="font-caveat sm:text-6xl text-5xl font-bold text-dark-brown">
          What People Say?
        </h2>
      </div>
      <div
        class="my-12 lg:flex lg:justify-center lg:flex-row gap-5 flex flex-col items-center"
      >
        <div
          class="sm:max-w-100 max-w-100 min-w-80 h-52 border-solid bg-slate-200 px-8 py-5 shadow-sm mx-3"
        >
          <div class="flex gap-2 items-center">
            <img
              src="../asset/image/user.jpg"
              alt="profile"
              width="46"
              height="46"
              class="rounded-full"
            />
            <h4 class="text-dark-brown font-poppin text-lg">Username</h4>
          </div>

          <p class="text-dark-brown font-poppin text-sm mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum
            molestias perferendis ut dolore quo quia vel quis dolor cumque fugit
            vero ipsum nam sint ad, repellendus neque ipsa laborum.
          </p>
        </div>
        <div
          class="sm:min-w-100 max-w-100 min-w-80 h-52 border-solid bg-slate-200 px-8 py-5 shadow-sm mx-3"
        >
          <div class="flex gap-2 items-center">
            <img
              src="../asset/image/user.jpg"
              alt="profile"
              width="46"
              height="46"
              class="rounded-full"
            />
            <h4 class="text-dark-brown font-poppin text-lg">Username</h4>
          </div>

          <p class="text-dark-brown font-poppin text-sm mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum
            molestias perferendis ut dolore quo quia vel quis dolor cumque fugit
            vero ipsum nam sint ad, repellendus neque ipsa laborum.
          </p>
        </div>
      </div>
      <div class="flex justify-center">
        <form action="" class="flex flex-col items-end">
          <textarea
            name=""
            id=""
            placeholder="Add your comment..."
            class="sm:w-100 h-52 border-solid border-2 p-3 w-80"
          ></textarea>
          <input
            type="submit"
            value="Post"
            class="my-2 py-3 px-5 bg-blue-600 text-white font-semibold rounded-2xl shadow-lg"
          />
        </form>
      </div>
    </section>
    <footer id="contact" class="mt-10">
      <hr />
      <div
        class="md:flex md:items-center md:justify-between py-2 px-8 grid grid-cols-2"
      >
        <div class="flex items-center gap-3 flex-col">
          <img
            src="../asset/image/cafelogo.png"
            alt="logo"
            width="56"
            height="56"
          />
          <h2 class="text-dark-brown font-bold text-xl">Cafe Shop</h2>
        </div>
        <div>
          <div class="flex justify-center">
            <h3 class="font-semibold text-xl mb-3">Follow Us</h3>
          </div>
          <div class="flex flex-col gap-2 items-center">
            <a href=""
              ><img
                src="../asset/image/facebook.png"
                alt="facebook"
                width="26"
                height="26"
            /></a>
            <a href=""
              ><img
                src="../asset/image/instagram_PNG10.png"
                alt="Instagram"
                width="26"
                height="26"
            /></a>
            <a href=""
              ><img
                src="../asset/image/tiktok.png"
                alt="Tiktok"
                width="26"
                height="26"
            /></a>
          </div>
        </div>
        <div>
          <h3 class="font-semibold text-xl">Contact Us</h3>
          <h4 class="font-semibold text-base">Adress</h4>
          <p class="text-sm">
            Cafe shop, street327, Khan Toul Kouk, Phnom Penh Cambodia
          </p>
          <h4 class="font-semibold text-base">Call</h4>
          <p class="text-sm">+855 96 34 53 234</p>
          <h4 class="font-semibold text-base">Email</h4>
          <p class="text-sm">cafeshop@gmail.com</p>
        </div>
        <div class="flex justify-center">
          <div class="flex flex-col gap-2">
            <a href="#home" class="text-dark-brown">Home</a>
            <a href="" class="text-dark-brown">Shop</a>
            <a href="#about" class="text-dark-brown">About</a>
            <a href="#review" class="text-dark-brown">Review</a>
            <a href="#contact" class="text-dark-brown">Contact</a>
          </div>
        </div>
      </div>
    </footer>
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
    </script>
  </body>
</html>
