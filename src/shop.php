<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>CAFE</title>
  </head>
  <body>
    <section class="">
      <div class="flex">
        <div class="flex gap-5">
          <img
            src="../asset/image/cafelogo.png"
            alt="cafelogo"
            width="46"
            height="46"
          />
          <h1 class="font-bold text-2xl text-dark-brown">CafeShop</h1>
        </div>
        <nav class="flex gap-5">
          <ul class="flex justify-between items-center">
            <li>
              <a href="index.php">
                <span>
                  <svg
                    class="fill-current text-dark-brown hover:text-light-brown w-9 h-9"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"
                    />
                    <path
                      d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"
                    />
                  </svg>
                </span>
              </a>
            </li>
            <li>
              <a href="">
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    class="fill-current text-dark-brown hover:text-light-brown w-9 h-9"
                  >
                    <path
                      d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"
                    />
                  </svg>
                </span>
              </a>
            </li>
          </ul>
          <div>
            <?php include '../backend/userHandler.php'?>
          </div>
        </nav>
      </div>
    </section>
  </body>
</html>
