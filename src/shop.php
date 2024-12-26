<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>Shop</title>
  </head>

  <body>
    <section id="nav">
      <div
        class="flex justify-between items-center px-8 py-2 shadow-lg w-full z-1000 bg-white top-0 fixed h-[80px]"
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
            <li>
              <a href="index.php" class="nav-text">Home</a>
            </li>
            <li>
              <a href="cart.php" class="nav-text">Cart</a>
            </li>
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
          </ul>
        </nav>
        <button class="block sm:hidden" aria-expanded="false" id="menubtn">
          <img src="../asset/icon/menu.svg" alt="" width="36" height="36" />
        </button>
      </div>
    </section>
    <!-- end navbar -->

    <!-- cart section -->
    <section class="bg-dark text-white pt-[100px] px-5 block">
      <!-- Category Section -->
      <div class="flex flex-col items-center mb-6">
        <!-- Hamburger button for categories -->
        <!-- Category-->
        <div
          class="flex w-full md:w-1/2 border-2 rounded-3xl px-3 py-1 bg-transparent border-light-brown"
        >
          <img
            class="h-[30px] w-[30px] mr-2"
            src="../asset/icon/search.png"
            alt=""
          />
          <input
            class="text-black outline-none w-full"
            type="text"
            placeholder="SEARCH"
            oninput="fetchSearch()"
            id="search"
          />
        </div>
        <div
          id="categories"
          class="bg-slate-200 bg-transparent shadow-none rounded-lg px-3 py-4 w-full flex gap-4 text-sm font-medium md:justify-center justify-start items-center md:snap-none overflow-x-scroll no-scrollbar"
        >
          <button
            class="typeBtn py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white"
            value="0"
          >
            All
          </button>
          <button
            class="typeBtn py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white"
            value="1"
          >
            Caffee
          </button>
          <button
            class="typeBtn py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white"
            value="2"
          >
            Snack
          </button>
          <button
            class="typeBtn py-2 px-4 bg-light-brown text-dark rounded hover:bg-dark hover:text-white"
            value="3"
          >
            Dessert
          </button>
        </div>
        <!-- Searchbox -->
      </div>
      <!-- Best Restaurants -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-black">Menu</h2>
        <div class="grid grid-cols-5 gap-3" id="productContent">
          <!-- Restaurant Card -->

          <?php include '../backend/coffeeContent.php'?>
        </div>
      </div>
    </section>

    <!-- script for make navbar interactive -->
    <script>
      const accMenu = document.getElementById("accountMenu");
      const acc = document.getElementById("account");
      acc.addEventListener("click", () => {
        accMenu.classList.toggle("hidden");
      });
      const menubtn = document.getElementById("menubtn");
      const menu = document.getElementById("menu");
      menubtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
      });
      document.querySelectorAll(".typeBtn").forEach((btn) => {
        btn.addEventListener("click", function () {
          let type = btn.getAttribute("value");
          fetch("../backend/coffeeContent.php?type=" + type)
            .then((response) => response.text())
            .then((data) => {
              document.getElementById("productContent").innerHTML = data;
            })
            .catch((err) => {
              console.log("Error: " + err);
            });
        });
      });

      function fetchSearch() {
        let search = document.getElementById("search").value;
        fetch("../backend/coffeeContent.php?search=" + search)
          .then((response) => response.text())
          .then((data) => {
            document.getElementById("productContent").innerHTML = data;
          })
          .catch((err) => err);
      }
      function addItem(id) {
        i = parseInt(document.getElementById("qty-" + id).value);
        if (i > 9) {
          i = 1;
        }
        i++;
        document.getElementById("qty-" + id).value = i;
      }
      function removeItem(id) {
        i = parseInt(document.getElementById("qty-" + id).value);
        if (i > 1) {
          i--;
        }
        document.getElementById("qty-" + id).value = i;
      }
      function addToCard(id) {
        let qty = document.getElementById("qty-" + id).value;
        let url = "pid=" + id + "&&qty=" + qty;
        fetch("../backend/orderHandler.php?" + url)
          .then((rs) => rs.text())
          .then((data) => {
            if (data.includes("success")) {
              document.getElementById("qty-" + id).value = 1;
              alert("Item added to cart");
            }else{
              alert("Fail to add item");
            }
          })
          .catch((err) => console.log("Error: " + err));
      }
    </script>
  </body>
</html>
