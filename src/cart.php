<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>Cart</title>
  </head>

  <body>
    <!-- cart  -->
    <div
      class="w-screen h-screen bg-light-brown flex items-center justify-center"
    >
      <div
        class="container w-[80%] h-[90%] bg-dark-brown px-10 py-5 rounded-xl"
      >
        <div class="flex justify-between">
          <h1 class="text-white font-extrabold w-full text-3xl">
            Shoping Cart
          </h1>
          <a href="" class="text-white text-3xl">History</a>
        </div>

        <div class="w-full h-[75%] overflow-scroll no-scrollbar">
          <table class="w-[800px]">
            <!-- row 1  -->
            <tr class="text-center">
              <td class="w-[500px] py-2">
                <img
                  src="../asset/menuItems/burger.jpeg"
                  class="mx-auto rounded-xl h-[125px] w-[150px]"
                  alt=""
                />
              </td>
              <td class="w-[500px] text-start">
                <p class="text-white">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="text-green-600 font-extrabold">$3.0</p>
              </td>
              <td class="w-[400px]">
                <div class="flex items-center justify-center">
                  <button class="px-2 py-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/minus.png" alt="" />
                  </button>
                  <h1 class="text-white mx-3">1</h1>
                  <button class="p-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/plus.png" alt="" />
                  </button>
                </div>
              </td>
              <td class="w-[200px]">
                <div class="flex flex-col items-start">
                  <span class="text-green-600 font-extrabold">$3.0</span>
                  <button class="underline text-red-600">Remove</button>
                </div>
              </td>
            </tr>
            <!-- row 2  -->
            <tr class="text-center">
              <td class="w-[500px] py-2">
                <img
                  src="../asset/menuItems/coffee.jpeg"
                  class="mx-auto rounded-xl h-[125px] w-[150px]"
                  alt="coffee"
                />
              </td>
              <td class="w-[500px] text-start">
                <p class="text-white">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="text-green-600 font-extrabold">$3.0</p>
              </td>
              <td class="w-[400px]">
                <div class="flex items-center justify-center">
                  <button class="px-2 py-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/minus.png" alt="" />
                  </button>
                  <h1 class="text-white mx-3">1</h1>
                  <button class="p-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/plus.png" alt="" />
                  </button>
                </div>
              </td>
              <td class="w-[200px]">
                <div class="flex flex-col items-start">
                  <span class="text-green-600 font-extrabold">$3.0</span>
                  <button class="underline text-red-600">Remove</button>
                </div>
              </td>
            </tr>
            <tr class="text-center">
              <td class="w-[500px] py-2">
                <img
                  src="../asset/menuItems/burger.jpeg"
                  class="mx-auto rounded-xl h-[125px] w-[150px]"
                  alt=""
                />
              </td>
              <td class="w-[500px] text-start">
                <p class="text-white">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="text-green-600 font-extrabold">$3.0</p>
              </td>
              <td class="w-[400px]">
                <div class="flex items-center justify-center">
                  <button class="px-2 py-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/minus.png" alt="" />
                  </button>
                  <h1 class="text-white mx-3">1</h1>
                  <button class="p-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/plus.png" alt="" />
                  </button>
                </div>
              </td>
              <td class="w-[200px]">
                <div class="flex flex-col items-start">
                  <span class="text-green-600 font-extrabold">$3.0</span>
                  <button class="underline text-red-600">Remove</button>
                </div>
              </td>
            </tr>
            <tr class="text-center">
              <td class="w-[500px] py-2">
                <img
                  src="../asset/menuItems/burger.jpeg"
                  class="mx-auto rounded-xl h-[125px] w-[150px]"
                  alt=""
                />
              </td>
              <td class="w-[500px] text-start">
                <p class="text-white">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="text-green-600 font-extrabold">$3.0</p>
              </td>
              <td class="w-[400px]">
                <div class="flex items-center justify-center">
                  <button class="px-2 py-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/minus.png" alt="" />
                  </button>
                  <h1 class="text-white mx-3">1</h1>
                  <button class="p-2 bg-white rounded-full">
                    <img width="14" src="../asset/icon/plus.png" alt="" />
                  </button>
                </div>
              </td>
              <td class="w-[200px]">
                <div class="flex flex-col items-start">
                  <span class="text-green-600 font-extrabold">$3.0</span>
                  <button class="underline text-red-600">Remove</button>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <hr />
        <div class="flex items-end flex-col w-full p-2 gap-3">
          <div class="flex gap-2">
            <h2 class="text-4xl font-semibold text-white">total</h2>
            <h2 class="text-4xl text-green-500 font-semibold">$5</h2>
          </div>
          <button
            class="px-8 py-3 rounded-xl bg-gradient-to-r from-light-brown to-pink-500 shadow-lg text-2xl font-bold text-white"
          >
            Order
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
