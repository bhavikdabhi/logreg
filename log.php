<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link href="./css/styles.css" rel="stylesheet">
  <title>Login and Registration</title>
</head>
<body class="bg-tertiary-gradient text-forest-txtcol">
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-4 px-4 shadow sm:rounded-lg sm:px-10 border-forest-txtcol">

  <div class="sm:mx-auto sm:w-full sm:max-w-md pb-6">
    <h2 id="section-title" class="mt-4 text-center text-3xl font-extrabold text-forest-txtcol">
      Sign in to your account
    </h2>
    <p class="mt-2 text-center text-sm text-forest-primary max-w">
      Or
      <a href="#" id="toggle-section" class="font-medium text-forest-txtcol hover:text-forest-tertiaryDark">
       <u> create an account</u>
      </a>
    </p>
  </div>

      <!-- Login Section -->
      <form id="login-section" class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium text-forest-txtcol">
            Email address
          </label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required
                   class="appearance-none rounded-md relative block w-full px-3 py-2 border border-forest-secondary placeholder-forest-primary text-forest-txtcol focus:outline-none focus:ring-forest-primary focus:border-forest-primary sm:text-sm"
                   placeholder="Enter your email address">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-forest-txtcol">
            Password
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required
                   class="appearance-none rounded-md relative block w-full px-3 py-2 border border-forest-secondary placeholder-forest-primary text-forest-txtcol focus:outline-none focus:ring-forest-primary focus:border-forest-primary sm:text-sm"
                   placeholder="Enter your password">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox"
                   class="h-4 w-4 text-forest-primary focus:ring-forest-primary border-forest-secondary rounded">
            <label for="remember_me" class="ml-2 block text-sm text-forest-txtcol">
              Remember me
            </label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-forest-primary hover:text-forest-tertiaryDark">
              Forgot your password?
            </a>
          </div>
        </div>

        <div>
          <button type="submit"
                  class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white  bg-forest-tertiaryDark hover:bg-forest-tertiaryLight focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-forest-primary hover:scale-105 duration-300">
            Sign in
          </button>
        </div>
      </form>

      <!-- Registration Section -->
       <form id="register-section" class="space-y-6 hidden" action="#" method="POST">
  <div class=" bg-white ">
    <!-- Progress Bar -->
    <div class="progressbar flex justify-between relative mb-8">
    <div id="progress" class="progress absolute top-1/2 transform -translate-y-1/2 h-1 w-0 bg-forest-primary transition-all duration-300"></div>
    
    <div class="progress-step progress-step-active bg-forest-primary w-10 h-10 rounded-full flex justify-center items-center relative z-10 text-white font-bold" data-title="Intro"></div>
    <div class="progress-step bg-forest-secondary w-10 h-10 rounded-full flex justify-center items-center relative z-10 text-forest-txtcol font-bold" data-title="Contact"></div>
    <div class="progress-step bg-forest-secondary w-10 h-10 rounded-full flex justify-center items-center relative z-10 text-forest-txtcol font-bold" data-title="ID"></div>
    <div class="progress-step bg-forest-secondary w-10 h-10 rounded-full flex justify-center items-center relative z-10 text-forest-txtcol font-bold" data-title="Password"></div>
  </div>



    <!-- Form Steps -->
    <form id="multi-step-form px-5">
        <!-- Step 1 -->
        <div class="form-step form-step-active">
            <div class="input-group mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="input-group mb-4">
                <label for="position" class="block text-gray-700">Position</label>
                <input type="text" name="position" id="position" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex justify-end">
                <a href="#" class="btn-next bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Next</a>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="form-step hidden">
            <div class="input-group mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" name="phone" id="phone" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="input-group mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex justify-between">
                <a href="#" class="btn-prev bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Previous</a>
                <a href="#" class="btn-next bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Next</a>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="form-step hidden">
            <div class="input-group mb-4">
                <label for="dob" class="block text-gray-700">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="input-group mb-4">
                <label for="ID" class="block text-gray-700">National ID</label>
                <input type="text" name="ID" id="ID" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex justify-between">
                <a href="#" class="btn-prev bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Previous</a>
                <a href="#" class="btn-next bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Next</a>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="form-step hidden">
            <div class="input-group mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="input-group mb-4">
                <label for="confirmPassword" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword" class="w-full px-3 py-2 border rounded-md">
            </div>
            <div class="flex justify-between">
                <a href="#" class="btn-prev bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300">Previous</a>
                <input type="submit" value="Submit" class="bg-forest-primary text-white py-2 px-6 rounded-md shadow hover:bg-forest-secondary transition duration-300 cursor-pointer">
            </div>
        </div>
    </form>
</div>
   
        </form>   

      <div class="mt-4">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-forest-secondary"></div>
          </div>
          <div class="relative flex justify-center text-sm">
            <span class="px-2 bg-white text-forest-primary">
              Or continue with
            </span>
          </div>
        </div>

        <button class="bg-forest- border py-2 w-full  mt-2  flex justify-center items-center text-sm hover:scale-105 duration-300  border-transparent  font-medium rounded-md text-white bg-forest-tertiaryDark hover:bg-forest-tertiaryLight focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-forest-primary">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                        <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                        <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    Login with Google </button>
      </div>
    </div>
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
<script src="js/script.js" defer></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const steps = Array.from(document.querySelectorAll('.form-step'));
        const nextBtn = document.querySelectorAll('.btn-next');
        const prevBtn = document.querySelectorAll('.btn-prev');
        const progress = document.querySelector('.progress');
        let formStepIndex = 0;

        nextBtn.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                formStepIndex++;
                updateFormSteps();
                updateProgressBar();
            });
        });

        prevBtn.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                formStepIndex--;
                updateFormSteps();
                updateProgressBar();
            });
        });

        function updateFormSteps() {
            steps.forEach((step, index) => {
                step.classList.toggle('form-step-active', index === formStepIndex);
                step.classList.toggle('hidden', index !== formStepIndex);
            });
        }

        function updateProgressBar() {
            const progressSteps = document.querySelectorAll('.progress-step');
            progressSteps.forEach((step, index) => {
                if (index <= formStepIndex) {
                    step.classList.add('bg-forest-primary', 'text-white');
                } else {
                    step.classList.remove('bg-forest-primary', 'text-white');
                }
            });
        }

        // Initial setup to display the first step and progress bar
        updateFormSteps();
        updateProgressBar();
    });
</script>

</body>
</html>
