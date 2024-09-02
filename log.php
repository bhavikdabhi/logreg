<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <title>Auth Form</title>
</head>

<body class="bg-white text-[#081C15] min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 id="section-title" class="mt-6 text-center text-3xl font-extrabold">
      Sign in to your account
    </h2>
    <p class="mt-2 text-center text-sm max-w">
      Or
      <a href="#" id="toggle-section" class="font-medium text-[#355E3B] hover:text-[#014421]">
        create an account
      </a>
    </p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-[#8A9A5B] py-8 px-4 shadow-lg sm:rounded-lg sm:px-10">
      <!-- Login Section -->
      <form id="login-section" class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium">
            Email address
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required
              class="appearance-none rounded-md relative block w-full px-3 py-2 border border-[#014421] placeholder-[#355E3B] text-[#081C15] focus:outline-none focus:ring-[#014421] focus:border-[#014421] focus:z-10 sm:text-sm"
              placeholder="Enter your email address">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="appearance-none rounded-md relative block w-full px-3 py-2 border border-[#014421] placeholder-[#355E3B] text-[#081C15] focus:outline-none focus:ring-[#014421] focus:border-[#014421] focus:z-10 sm:text-sm"
              placeholder="Enter your password">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox"
              class="h-4 w-4 text-[#014421] focus:ring-[#014421] border-[#355E3B] rounded">
            <label for="remember_me" class="ml-2 block text-sm">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-[#355E3B] hover:text-[#014421]">
              Forgot your password?
            </a>
          </div>
        </div>

        <div>
          <button type="submit"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-[#8A9A5B] bg-[#014421] hover:bg-[#BCB88A] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#014421]">
            Sign in
          </button>
        </div>

        <!-- Social Login Section -->
        <div class="mt-6">
          <div class="relative">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-[#355E3B]"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-[#8A9A5B] text-[#355E3B]">
                Or continue with
              </span>
            </div>
          </div>

          <div class="mt-6 grid grid-cols-3 gap-3">
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-5 w-5" src="https://www.svgrepo.com/show/512120/facebook-176.svg" alt="Facebook">
              </a>
            </div>
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-5 w-5" src="https://www.svgrepo.com/show/513008/twitter-154.svg" alt="Twitter">
              </a>
            </div>
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-6 w-6" src="https://www.svgrepo.com/show/506498/google.svg" alt="Google">
              </a>
            </div>
          </div>
        </div>
      </form>

      <!-- Registration Section -->
      <form id="register-section" class="space-y-6 hidden" action="#" method="POST">
        <div>
          <label for="name" class="block text-sm font-medium">
            Full Name
          </label>
          <div class="mt-1">
            <input id="name" name="name" type="text" autocomplete="name" required
              class="appearance-none rounded-md relative block w-full px-3 py-2 border border-[#014421] placeholder-[#355E3B] text-[#081C15] focus:outline-none focus:ring-[#014421] focus:border-[#014421] focus:z-10 sm:text-sm"
              placeholder="Enter your full name">
          </div>
        </div>

        <div>
          <label for="register-email" class="block text-sm font-medium">
            Email address
          </label>
          <div class="mt-1">
            <input id="register-email" name="email" type="email" autocomplete="email" required
              class="appearance-none rounded-md relative block w-full px-3 py-2 border border-[#014421] placeholder-[#355E3B] text-[#081C15] focus:outline-none focus:ring-[#014421] focus:border-[#014421] focus:z-10 sm:text-sm"
              placeholder="Enter your email address">
          </div>
        </div>

        <div>
          <label for="register-password" class="block text-sm font-medium">
            Password
          </label>
          <div class="mt-1">
            <input id="register-password" name="password" type="password" autocomplete="new-password" required
              class="appearance-none rounded-md relative block w-full px-3 py-2 border border-[#014421] placeholder-[#355E3B] text-[#081C15] focus:outline-none focus:ring-[#014421] focus:border-[#014421] focus:z-10 sm:text-sm"
              placeholder="Create a password">
          </div>
        </div>

        <div>
          <button type="submit"
            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-[#8A9A5B] bg-[#014421] hover:bg-[#BCB88A] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#014421]">
            Register
          </button>
        </div>

        <!-- Social Login Section (Registration) -->
        <div class="mt-6">
          <div class="relative">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-[#355E3B]"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-[#8A9A5B] text-[#355E3B]">
                Or continue with
              </span>
            </div>
          </div>

          <div class="mt-6 grid grid-cols-3 gap-3">
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-5 w-5" src="https://www.svgrepo.com/show/512120/facebook-176.svg" alt="Facebook">
              </a>
            </div>
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-5 w-5" src="https://www.svgrepo.com/show/513008/twitter-154.svg" alt="Twitter">
              </a>
            </div>
            <div>
              <a href="#"
                class="w-full flex items-center justify-center px-8 py-3 border border-[#355E3B] rounded-md shadow-sm text-sm font-medium text-[#081C15] bg-white hover:bg-[#8A9A5B]">
                <img class="h-6 w-6" src="https://www.svgrepo.com/show/506498/google.svg" alt="Google">
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    const toggleSection = document.getElementById('toggle-section');
    const sectionTitle = document.getElementById('section-title');
    const loginSection = document.getElementById('login-section');
    const registerSection = document.getElementById('register-section');

    toggleSection.addEventListener('click', function (e) {
      e.preventDefault();
      if (loginSection.classList.contains('hidden')) {
        loginSection.classList.remove('hidden');
        registerSection.classList.add('hidden');
        sectionTitle.textContent = 'Sign in to your account';
        toggleSection.textContent = 'create an account';
      } else {
        loginSection.classList.add('hidden');
        registerSection.classList.remove('hidden');
        sectionTitle.textContent = 'Create a new account';
        toggleSection.textContent = 'sign in to your account';
      }
    });
  </script>
</body>

</html>
