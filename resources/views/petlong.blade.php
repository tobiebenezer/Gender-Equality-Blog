<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>

  <body>
    <div class="bg-white shadow-md" x-data="{ isOpen: false }">
      <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
          <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
            href="#">
            Blog
          </a>
          <!-- Mobile menu button -->
          <div @click="isOpen = !isOpen" class="flex md:hidden">
            <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
              aria-label="toggle menu">
              <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                <path fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                </path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="isOpen ? 'flex' : 'hidden'"
          class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
            href="#">Home</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
            href="#">About Us</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
            href="#">Login</a>
          <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
            href="#">Register</a>
          <div>
          </div>
        </div>
      </nav>
    </div>
    <!-- Main Hero Content -->
    <div
      class="container max-w-lg px-6 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('{{asset('img/pix.jpg')}}');">
      <h1
        class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Welcome To Our Blog</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
        culpa excepturi quae commodi quaerat,
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <!-- <a href="#_" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Buy Now
          </a> -->
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">OUR STORY
              </h3>
              <h2 class="text-4xl text-green-600">Welcome</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                Repellendus mollitia quaerat est voluptas!
              </p>
              <div class="relative flex">
                <a href="#_"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
             <img src="{{url('/img/pix3.jpg')}}" alt="Image"/>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">About Us</h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                WHAT WE DO</h2>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
              class="mx-auto sm:max-w-sm lg:max-w-full"
              src="{{url('/img/pix2.jpg')}}" alt="Image"/></div>
        </div>
      </div>
    </section>
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">UPDATES</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          TODAY'S POSTS</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src=""    alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="" alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
        </div>    
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="" alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
          
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src=""  alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src=""   alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            <div class="flex items-center justify-between p-4">
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="" src="">
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Post</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Post</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
          </div>
          </div>

        </div>
      </div>
    </section>
    <!-- <section class="pt-4 pb-12 bg-gray-50">
      <div class="my-8 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Blog Posts</h2>
        <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="container grid gap-4 mx-auto lg:grid-cols-3">
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2013/07/12/19/20/sushi-154590__340.png" alt="image">
        </div>
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2015/08/20/19/18/market-897990__340.jpg" alt="image">
        </div>
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2014/10/19/20/59/hamburger-494706__340.jpg" alt="image">
        </div>
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2016/02/19/11/30/pizza-1209748_960_720.jpg" alt="image">
        </div>
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2015/07/12/14/26/coffee-842020__340.jpg" alt="image">
        </div>
        <div class="w-full rounded">
          <img src="https://cdn.pixabay.com/photo/2016/11/23/18/31/pasta-1854245__340.jpg" alt="image">
        </div>
      </div>
    </section> -->

    <section class="pt-4 pb-12 bg-gray-800">
      <div class="my-16 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Other Posts</h2>
        <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="grid gap-2 lg:grid-cols-3">
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Article</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Article</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Article</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
      </div>
    </section>

    <div class="max-w-lg rounded-lg shadow-md shadow-blue-600/50">
  <form action="" class="w-full p-4" method="">
    <div class="mb-2">
      <label for="comment" class="text-3xl font-semibold text-gray-800">Add a comment</label>
      <textarea
        class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="comment"
        placeholder=""></textarea>
    </div>
    <div>
      <button class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400">Comment</button>
    </div>
  </form>
</div>

    <section class="pt-12 pb-12 bg-red-50">
      <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
        <div class="w-full">

          <h1
            class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            Book A Mentoring Session
          </h1>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                Your Name
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Name" />
            </div>
            <div class="w-full">
              <label class="block text-base">
                Your Number
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Number" />
            </div>
          </div>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                State your situation
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Type in here" />
            </div>
            <div class="w-full">
              <label class="block text-base">
                Booking Date
              </label>
              <input type="date"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Number" />
            </div>
          </div>
          <div class="">
          
          </div>
          <button
            class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
            href="#">
            Book Now
          </button>

        </div>
      </div>
    </section>
    <footer class="bg-gray-800 border-t border-gray-200">
      <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
        <div class="flex flex-wrap justify-center">
          <ul class="flex items-center space-x-4 text-white">
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
            <li>Terms</li>
          </ul>
        </div>
        <div class="flex justify-center mt-4 lg:mt-0">
          <a>
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </div>
      </div>
    </footer>
    <div class='container'>
        @yield('body')

    </div>
  </body>

</html>