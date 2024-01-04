<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo-small.svg" type="image/svg+xml" />
    <title>Document</title>
    <meta
      name="description"
      content="Admin Toolkit is a modern admin dashboard template based on Tailwindcss. It comes with a variety of useful ui components and pre-built pages"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <script>
      if (
        localStorage.getItem('theme') === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      ) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
  </head>

  <body>
    <div id="app" class="flex min-h-screen w-full items-center justify-center">
      <!-- Main Content Starts -->
      <main class="container flex-grow p-4 sm:p-6">
        <div class="card mx-auto w-full max-w-md">
          <div class="card-body px-10 py-12">
            <div class="flex flex-col items-center justify-center">
                <x-application-logo class=" fill-current text-gray-500" />
                <h5 class="mt-4">Welcome Back</h5>
              <p class="text-sm text-slate-500 dark:text-slate-400">Please enter your details</p>
            </div>

            <div class="mt-6 flex flex-col gap-5">
              <!-- Email -->
              <div>
                <label class="label mb-1">Email Or Username</label>
                <input type="text" class="input" placeholder="Enter Your Email" />
              </div>
              <!-- Password-->
              <div class="">
                <label class="label mb-1">Password</label>
                <input type="password" class="input" placeholder="Password" />
              </div>
            </div>
            <!-- Remember & Forgot-->
            <div class="mt-2 flex items-center justify-between">
              <div class="flex items-center gap-1.5">
                <input
                  type="checkbox"
                  class="h-4 w-4 rounded border-slate-300 bg-transparent text-primary-500 shadow-sm transition-all duration-150 checked:hover:shadow-none focus:ring-0 focus:ring-offset-0 enabled:hover:shadow disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-600"
                  id="remember-me"
                />
                <label for="remember-me" class="label">Remember Me</label>
              </div>
              <a href="#" class="text-sm text-primary-500 hover:underline">Forgot Password</a>
            </div>
            <!-- Login Button -->
            <div class="mt-8">
              <button class="btn btn-primary w-full py-2.5">Login</button>
              <div class="relative mt-4 flex h-6 items-center justify-center py-4">
                <div class="h-[1px] w-full bg-slate-200 dark:bg-slate-600"></div>
                <div class="t absolute w-10 bg-white text-center text-xs text-slate-400 dark:bg-slate-800">Or</div>
              </div>
              <button class="btn btn-outline-primary mt-4 w-full gap-3 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                  <path
                    fill="#FFC107"
                    d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"
                  />
                  <path
                    fill="#FF3D00"
                    d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"
                  />
                  <path
                    fill="#4CAF50"
                    d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"
                  />
                  <path
                    fill="#1976D2"
                    d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"
                  />
                </svg>
                <span>Continue With Google</span>
              </button>
            </div>
            <!-- Don't Have An Account -->
            <div class="mt-4 flex justify-center">
              <p class="text-sm text-slate-600 dark:text-slate-300">
                Don't Have an Account?
                <a href="./register.html" class="text-sm text-primary-500 hover:underline">Sign up</a>
              </p>
            </div>
          </div>
        </div>
      </main>
      <!-- Main Content Ends -->
    </div>
  </body>
</html>
