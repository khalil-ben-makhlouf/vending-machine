<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
  <title>KSI VM</title>
</head>

<body class="text-gray-800 antialiased">

  <nav id="navbar">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between py-4">
      <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
        <a href="#" class=" fixe space-x-3 ">
          <img src="{{ asset('images/430782311_1624292464972968_7460054276945477992_n.png') }}" alt="Your Image" class="w-50 h-10 ">
        </a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
          <i class="text-gray-500 fas fa-bars"></i>
        </button>

      </div>

      <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
        <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
        <li class="flex items-center">
            <a class="text-gray-900 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#services">Services</a>
          </li>

          <li class="flex items-center">
            <a class="text-gray-900 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#aboutus">About us</a>
          </li>
        <li class="flex items-center">
            <a class="text-gray-900 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#contact">contact</a>
          </li>
          
          @if (Route::has('login'))
          @auth
          <li class="flex items-center">
            <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-600 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          @else
          <li class="flex items-center ">
            <a id="loginbutton" class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-600 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" href="{{ route('login') }}">Log in</a>
          </li>
          @if (Route::has('register'))
          <li class="flex items-center ml-2" id="signupbutton">
            <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none" href="{{ route('register') }}">Sign up</a>
          </li>
          @endif
          @endauth
          @endif

        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style='min-height: 75vh;'>
      <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('{{ asset('images/attachment-RS49268_GettyImages-177724257.jpg') }}'); background-size: cover;">
        <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
      </div>
      <div class="container relative mx-auto">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
            <div class="pr-12">
              <h1 class="text-white font-semibold text-5xl">
                Welcome to our Vending Machine Management Platform
              </h1>
              <p class="mt-4 text-lg text-gray-300">From the very beginning of the operation, our team has been dedicated to providing high-quality services. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style='height: 70px;'>
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <section class="pb-20 bg-gray-300 -mt-24">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
              <i class="fas fa-store-alt"></i>
            </div>
            <h6 class="text-xl font-semibold">Product Management</h6>
            <p class="mt-2 mb-4 text-gray-600">Effortlessly manage your vending machine products with our intuitive interface. Add, update, or remove products to optimize your offerings and maximize sales.</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
              <i class="fas fa-chart-line"></i>
            </div>
            <h6 class="text-xl font-semibold">Sales Analytics</h6>
            <p class="mt-2 mb-4 text-gray-600">Gain valuable insights into your vending machine sales performance with comprehensive analytics. Track revenue, monitor product popularity, and identify trends to make data-driven decisions.</p>
          </div>
        </div>
      </div>
      <div class="pt-6 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
          <div class="px-4 py-5 flex-auto">
            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
              <i class="fas fa-wallet"></i>
            </div>
            <h6 class="text-xl font-semibold">Finance Management</h6>
            <p class="mt-2 mb-4 text-gray-600">Track and manage your vending machine finances seamlessly. Monitor cash flow, view transaction history, and receive real-time updates on revenue to keep your business finances in check.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center mt-32">
      <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
        <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
          <i class="fas fa-user-friends text-xl"></i>
        </div>
        <h3 class="text-3xl mb-2 font-semibold leading-normal">
          Revolutionize Your Vending Business
        </h3>
        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
          Welcome to the future of vending machine management! Our platform offers a comprehensive solution for vending machine owners to optimize their operations, maximize profits, and streamline business processes.
        </p>
        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">With features such as intuitive product management, detailed sales analytics, and robust finance management tools, you'll have everything you need to succeed in the vending industry.</p>

        <a href="{{ route('register') }}" class="font-bold text-gray-800 mt-8">Get Started Today!</a>
      </div>
      <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
          <img alt="..." src="https://www.selecta.com/.imaging/mte/selecta/lg/dam/website/stage/clientsolutions-vendingmachines-snacksvending.jpg/jcr:content/clientsolutions-vendingmachines-snacksvending.jpg" class="w-full align-middle rounded-t-lg" />
          <blockquote class="relative p-8 mb-4">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
              <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
            </svg>
            <h4 class="text-xl font-bold text-white">
              Top Notch Services
            </h4>
            <p class="text-md font-light mt-2 text-white">
              Take advantage of our user-friendly interface, designed to make vending machine management a breeze for beginners and experts alike.
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="aboutus" class="relative py-20">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://en-provendingmachine.usa72.wondercdn.com/uploads/image/61c94341be8ab.jpg" />
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <div class="md:pr-12">
              <div class="mt-2 text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                <i class="fas fa-rocket text-xl"></i>
              </div>
              <h3 class="text-3xl font-semibold">A growing company</h3>
              <p class="mt-4 text-lg leading-relaxed text-gray-600">
                With a rich history of pioneering solutions and cutting-edge technology, we have established ourselves as the go-to choice for vending machine operators worldwide.
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-fingerprint"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">
                        Carefully crafted components
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">Revenue Optimization</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-money-check-alt"></i></span>
                    </div>
                    <div>
                      <h4 class="text-gray-600">Payment Solutions</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="pb-20 relative block bg-gray-900">
      <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
        <div class="flex flex-wrap text-center justify-center">
          <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-4xl font-semibold text-white">Services Provided</h2>
            <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            Our platform offers a range of essential services designed to streamline vending machine management and maximize business potential. Explore the following services provided            </p>
          </div>
        </div>
        <div class="flex flex-wrap mt-12 justify-center">
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
              <i class="fas fa-medal text-xl"></i>
            </div>
            <h6 class="text-xl mt-5 font-semibold text-white">
              Up Maintenance </h6>
            <p class="mt-2 mb-4 text-gray-500">
              Ensure your vending machines are always in peak condition with our proactive maintenance service. </p>
          </div>
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
              <i class="fas fa-poll text-xl"></i>
            </div>
            <h5 class="text-xl mt-5 font-semibold text-white">
              Grow your market
            </h5>
            <p class="mt-2 mb-4 text-gray-500">
              Expand your vending machine business into new markets with confidence, leveraging our cutting edge tools and insights.
            </p>
          </div>
          <div class="w-full lg:w-3/12 px-4 text-center">
            <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
              <i class="fas fa-exchange-alt text-xl"></i>
            </div>
            <h5 class="text-xl mt-5 font-semibold text-white">Online Transactions</h5>
            <p class="mt-2 mb-4 text-gray-500">
              Embrace the future of vending with our seamless online transaction capabilities.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="relative block py-24 lg:pt-0 bg-gray-900">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
          <div class="w-full lg:w-6/12 px-4 mt-2">
          <form method="POST"  class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
    @csrf
    <div class="flex-auto p-5 lg:p-10">
        <h4 class="text-2xl font-semibold">Want to know more?</h4>
        <p class="leading-relaxed mt-1 mb-4 text-gray-600">
            Complete this form and we will get back to you .
        </p>
        <div class="relative w-full mb-3">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label>
            <input type="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" required>
        </div>
        <div class="relative w-full mb-3 mt-8">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="subject">Subject</label>
            <input type="text" name="subject" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Subject" style="transition: all 0.15s ease 0s;" required>
        </div>
        <div class="relative w-full mb-3">
            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Message</label>
            <textarea name="message" rows="4" cols="80" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Type a message..." required></textarea>
        </div>
        <div class="text-center mt-6">
            <button type="submit" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" style="transition: all 0.15s ease 0s;">
                Send Message
            </button>
        </div>
    </div>
</form>
</div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="relative bg-gray-300 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
      style="height: 80px;">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4">
          <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
          <h5 class="text-lg mt-0 mb-2 text-gray-700">
            Find us on any of these platforms, we respond 1-2 business days.
          </h5>
          <div class="mt-6">
            <button
              class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button">
              <i class="flex fab fa-twitter"></i></button><button
              class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button">
              <i class="flex fab fa-facebook-square"></i>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
              <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://www.creative-tim.com/presentation">About Us</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://blog.creative-tim.com">Blog</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://www.github.com/creativetimofficial">Github</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-4/12 px-4">
              <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other Resources</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                    License</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://creative-tim.com/privacy">Privacy Policy</a>
                </li>
                <li>
                  <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                    href="https://creative-tim.com/contact-us">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-gray-400" />
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm text-gray-600 font-semibold py-1">
          © 2023 KSI VENDING MACHINE . All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>


<script>
  function toggleNavbar(collapseID) {
    var navbar = document.getElementById(collapseID);
    navbar.classList.toggle("hidden");
    navbar.classList.toggle("block");

    var signupButton = document.getElementById("signupbutton");
    signupButton.classList.toggle("mt-1");
    signupButton.classList.toggle("ml-2");

  }
</script>


</html>