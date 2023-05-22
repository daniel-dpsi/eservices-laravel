<title>VIEWPANEL.ME | 2023</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('EXCHANGE') }}
        </h2>
    </x-slot>
    <main>
        <div class="py-12 bg-gray-600">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


    <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-gray-200 border-gray-200">

<div class="text-2xl font-bold text-gray-900" style="text-align: center; ">
CRYPTO EXCHANGE
</div>

<div class="mt-6 text-gray-500" style="text-align: center">
Decentralized P2P crypto exchange service powered by VIEWPANEL
<br><br>
No additional information required.</b>
<br><br>
<div style=""><b>EXCHANGE:</b> Please select an asset, network (eg. ERC-20, TRX...), amount and wallet address</div>
</div>
</div>


<div class=" bg-opacity-25 grid grid-cols-1 md:grid-cols-1 border-t border-gray-300 md:border-t-1 md:border-l md:border-r md:border-b">

<div class="">
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
<script src="https://shoppy.gg/api/embed.js"></script>
<section class="flex flex-col justify-center antialiased bg-gray-300">



<div class="bg-gray-300 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 border-t border-gray-200 md:border-t-1 md:border-l">
    <div class="p-6">
        <div class="flex items-center">
            <img fill="none" stroke="black" class="w-8 h-8 text-gray-400" src="https://img.icons8.com/fluency/48/ethereum.png">
            <div class="ml-4 text-lg text-black leading-7 font-semibold"><a href="https://laravel.com/docs">Withdraw</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm">
                Select your asset of choice, wallet address, amount (EUR -> auto conversion), network* (if applicable e.g ERC-20/TRX)
                <br><br>
                Withdrawals can be of a partial amount if criteria of min. withdrawal rate (25%) is met (e.g 100€ -> 25€ = OK) if NOT you will be notified.
                <br><br>
            </div>

            <a href="https://www.eea.europa.eu/en/countries">
                <div class="flex items-center text-sm font-semibold text-blue-500">
                        <div>Explore the regions in EU/EEA</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>

        </div>
    </div>

</div>
</div>

<div class="mt-5 text-2xl font-semibold" style="text-align: center; ">
    <p class="text-gray-900">EXCHANGE</p>
                <p class="font-normal text-base leading-normal sm:leading-4 text-gray-500 dark:text-white mt-2">All information regarding the service is available on the About page.</p>
    </div>
</section>

<div>
    <div class="py-10 px-4 md:px-6 2xl:px-0 flex justify-center items-center 2xl:mx-auto 2xl:container border-l-1 border-r-1 ">
<!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="flex flex-col justify-start items-start w-full space-y-9 bg-gray-700">

            <div class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-full">
                <div class="xl:w-3/5 flex flex-col sm:flex-row xl:flex-col justify-center items-center bg-gray-100 dark:bg-gray-800 py-7 sm:py-0 xl:py-10 px-10 xl:w-full">
                    <div class="flex flex-col justify-start items-start w-full space-y-4 ">
                        <p class="text-xl md:text-2xl leading-normal text-gray-800 dark:text-gray-50">Crypto Exchange</p>
                        <p class="text-base font-semibold leading-none text-gray-600 dark:text-white">© 2023 VIEWPANEL.ME</p>
                    </div>
                    <div class="mt-6 sm:mt-0 xl:my-10 xl:px-20 w-52 sm:w-96 xl:w-auto">
                        <img src="https://cdn-icons-png.flaticon.com/512/2821/2821694.png" alt="solution" />
                    </div>
                </div>

                <div class="p-8 bg-gray-100 dark:bg-gray-800 flex flex-col lg:w-full xl:w-3/5">


                    <div class="flex flex-row justify-center items-center mt-6">
                        <hr class="border w-full" />
                        <p class="flex flex-shrink-0 px-4 text-base leading-4 text-gray-600 dark:text-white">Details</p>
                        <hr class="border w-full" />
                    </div>

                    <form action="/create" method="POST" id="web">
                        @csrf
                        <br>
                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Crypto Asset</label>
                    <div class="mt-2">
                        <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="name" name="name" id="" placeholder="e.g BTC" required/>

                    </div>

                    <br>
                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Wallet Address</label>
                    <div class="mt-2">
                        <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="email" name="mail" id="" placeholder="1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa" required/>
                    </div>

                    <br>
                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Amount (EUR)</label>
                    <div class="mt-2 flex-col">
                        <div>
                            <input class="border rounded-tl rounded-tr border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="type" id="" placeholder="0.00€" required/>
                        </div>
                    </div>

                    <br>
                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Network (optional)</label>
                    <div class="mt-2 flex-col">
                        <div>
                            <input class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="offer" id="" placeholder="e.g ERC-20/TRC-20" required/>
                        </div>
                    </div>

                    <br>
                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Voucher ID</label>
                    <div class="mt-2 flex-col">
                        <div>
                            <textarea class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600" name="other" id="web" placeholder="Place your voucher code here"></textarea>
                        </div>
                    </div>


                    <button class="mt-8 border border-transparent hover:border-gray-300 dark:bg-white dark:hover:bg-gray-900 dark:text-gray-900 dark:hover:text-white dark:border-transparent bg-gray-900 hover:bg-indigo-600 text-white hover:text-white flex justify-center items-center py-4 rounded w-full">
                        <div>
                            <p class="text-base leading-4">Submit</p>
                        </div>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<!--Price plans-->

<!--<div class="bg-gray-100 antialiased w-full h-full text-gray-400 font-inter p-10">
<div class="container px-4 mx-auto">
<div>
<div id="title" class="text-center my-10">
  <h1 class="font-bold text-4xl text-black">Pricing Plans</h1>
  <p class="text-light text-gray-500 text-xl">
    Here are our pricing plans
  </p>
</div>
<div
  class="bg-gray-100 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 justify-evenly gap-10 pt-10"
>
  <div
    id="plan"
    class=" rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in md:border-t-2
    md:border-b-2 md:border-l-2 md:border-r-2"

  >
    <div id="title" class="w-full py-5 border-b border-gray-800">
      <h2 class="font-bold text-3xl text-black">Frontend UI</h2>
      <h3 class="font-normal text-black text-xl mt-2">
        80,00 EUR
      </h3>
    </div>
    <div id="content" class="">
      <div id="icon" class="my-5">
        <img
          class="h-12 w-12 mx-auto fill-stroke text-indigo-600"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          src="https://vuejs.org/images/logo.png"
        >
        <p class="text-gray-500 text-sm pt-2">
          User Interface
        </p>
      </div>
      <div id="contain" class="leading-8 mb-10 text-lg font-light" style="color:black">
        <ul>
          <li>Reactive</li>
          <li>Dynamic</li>
          <li>Adjustable</li>
          <li>Minimalistic</li>
        </ul>
        <div id="choose" class="w-full mt-10 px-6">
            <a
            href="#"
            class="w-full block text-white bg-blue-500 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-black"
            >Choose</a
          >
        </div>
      </div>
    </div>
  </div>
  <div
    id="plan"
    class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in md:border-t-2
    md:border-b-2 md:border-l-2 md:border-r-2"
  >
    <div id="title" class="w-full py-5 border-b border-gray-800">
      <h2 class="font-bold text-3xl text-black">Data System</h2>
      <h3 class="font-normal text-black text-xl mt-2">
        60,00 EUR
      </h3>
    </div>
    <div id="content" class="">
      <div id="icon" class="my-5">
        <img
          class="h-12 w-12 mx-auto fill-stroke text-indigo-600"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          src="https://cdn.freebiesupply.com/logos/large/2x/mysql-5-logo-png-transparent.png"
        >
        <p class="text-gray-500 text-sm pt-2">
          Relational Database
        </p>
      </div>
      <div id="contain" class="leading-8 mb-10 text-lg font-light" style="color:black">
        <ul>
          <li>Integrity</li>
          <li>Scaleable</li>
          <li>Accessible</li>
          <li>Conceptual</li>
        </ul>
        <div id="choose" class="w-full mt-10 px-6">
          <a
            href="#"
            class="w-full block text-white bg-blue-500 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-black"
            >Choose</a
          >
        </div>
      </div>
    </div>
  </div>
  <div
    id="plan"
    class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in md:border-t-2
    md:border-b-2 md:border-l-2 md:border-r-2"
  >
    <div id="title" class="w-full py-5 border-b border-gray-800">
      <h2 class="font-bold text-3xl text-black">Backend API</h2>
      <h3 class="font-normal text-black text-xl mt-2">
        95,00 EUR
      </h3>
    </div>
    <div id="content" class="">
      <div id="icon" class="my-5">
        <img
          class="h-12 w-12 mx-auto fill-stroke text-indigo-600"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
        >

        <p class="text-gray-500 text-sm pt-2">
          Endpoint API
        </p>
      </div>
      <div id="contain" class="leading-8 mb-10 text-lg font-light" style="color:black">
        <ul>
          <li>Uniform</li>
          <li>Readability</li>
          <li>Data caching</li>
          <li>Functionality</li>
        </ul>
        <div id="choose" class="w-full mt-10 px-6">
            <a
            href="#"
            data-shoppy-product="dNoHojt"
            class="w-full block text-white bg-blue-500 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-black"
            >Choose</a
          >
        </div>
      </div>
    </div>
  </div>
  <div
    id="plan"
    class="rounded-lg text-center overflow-hidden w-full transform hover:shadow-2xl hover:scale-105 transition duration-200 ease-in md:border-t-2
    md:border-b-2 md:border-l-2 md:border-r-2"
  >
    <div id="title" class="w-full py-5 border-b border-gray-800">
      <h2 class="font-bold text-3xl text-black">Premium</h2>
      <h3 class="font-normal text-black text-xl mt-2">
        200,00 EUR
      </h3>
    </div>
    <div id="content" class="">
      <div id="icon" class="my-5">
        <img
          class="h-12 w-12 mx-auto fill-stroke text-indigo-600"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          src="https://cdn-icons-png.flaticon.com/512/2920/2920329.png"
        >
        <p class="text-gray-500 text-sm pt-2">
          Includes everything
        </p>
      </div>
      <div id="contain" class="leading-8 mb-10 text-lg font-light" style="color:black">
        <ul>
          <li>Complete web application</li>
          <li>Support tickets <b>prioritized</b></li>
          <li>Extended warranty by 180 days</li>
          <li>Free <b>data analytics</b> for 1 month</li>
        </ul>
        <div id="choose" class="w-full mt-10 px-6">
          <a
            href="#"
            class="w-full block text-white bg-blue-500 font-medium text-xl py-4 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-black"
            >Choose</a
          >
        </div>
      </div>
    </div>
  </div>

  </div>-->
</div>
<p class="text-gray-900 font-semibold" style="text-align:center;">© 2023 VIEWPANEL.ME</p>

</div>
</div>
</div>
    </div>
</div>

</div>

    </main>

</x-app-layout>
