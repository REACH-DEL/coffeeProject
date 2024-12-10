<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./output.css" />
  </head>
  <body class="flex justify-center items-center bg-dark-brown h-screen">
    <div
      class="w-100 px-10 py-10 shadow-lg rounded-2xl bg-red-50 flex flex-col items-center gap-5"
    >
      <h2 class="font-caveat text-6xl font-bold text-dark-brown">Login</h2>
      <form
        action="../backend/loginController.php"
        method="post"
        class="flex flex-col gap-5"
      >
        <input
          type="text"
          name="username"
          id=""
          placeholder="Enter username..."
          class="h-12 px-5 rounded-xl border-solid border-2 w-80"
        />
        <input
          type="password"
          name="password"
          id=""
          placeholder="Enter password..."
          class="h-12 px-5 rounded-xl border-solid border-2"
        />
        <input
          type="submit"
          value="Login"
          class="bg-light-brown rounded-2xl text-slate-50 font-semibold font-sans h-12"
        />
      </form>
      <div class="flex gap-5">
        <p>Create new account?</p>
        <a href="signup.php" class="text-blue-400">Sign up</a>
      </div>
    </div>
  </body>
</html>
