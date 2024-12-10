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
      <h2 class="font-caveat text-6xl font-bold text-dark-brown">Register</h2>
      <form
        action="../backend/registerController.php"
        class="flex flex-col gap-5"
        method="POST"
      >
        <input
          type="email"
          name="email"
          id=""
          placeholder="Enter email..."
          class="h-12 px-5 rounded-xl border-solid border-2 w-80"
        />
        <input
          type="text"
          name="username"
          id=""
          placeholder="Enter username..."
          class="h-12 px-5 rounded-xl border-solid border-2 w-80"
        />
        <select
          name="gender"
          id=""
          class="border-solid border-2 w-36 h-12 rounded-xl px-5"
        >
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <input
          type="password"
          name="password"
          id=""
          placeholder="Enter password..."
          class="h-12 px-5 rounded-xl border-solid border-2"
        />
        <input
          type="submit"
          value="Sign up"
          class="bg-light-brown rounded-2xl text-slate-50 font-semibold font-sans h-12"
        />
      </form>
      <div class="flex gap-5">
        <p>Already have an account?</p>
        <a href="login.jsp" class="text-blue-400">Login</a>
      </div>
    </div>
  </body>
</html>
