<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo-small.svg" type="image/svg+xml" />
    <title>500 - Admin Toolkit</title>
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
      <main>
        <div class="flex flex-col items-center justify-center">
          <p class="text-6xl font-semibold text-primary-500">500</p>
          <p class="card-title mt-2">Opps! Server Error!</p>
          <p class="text-xs font-semibold">Something went wrong</p>
          <a href="{{route('admin.dashboard')}}"><button class="btn btn-primary mt-8 px-8 py-2">Back to Home</button></a>
        </div>
      </main>
      <!-- Main Content Ends -->
    </div>
  </body>
</html>
