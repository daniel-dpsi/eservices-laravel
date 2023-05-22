<title>Domov | e-Storitve</title>
<x-app-layout>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=05a16224-4c34-4db8-a343-d130a788414c"> </script>
            <main class="font-mono">
            <h1 class="mt-8 text-5xl font-semibold text-gray-900" style="text-align: center ">
            STORITVENI OBRAZEC
            </h1>
            <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">© 2023 | e-Storitve.com</p>
            <br>
            <hr/>
            <br>
            <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700 w-80" role="alert" style="margin:0 auto; text-align:center">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                    <span class="font-medium">NOVO:</span> Vsi oglasi imajo rok trajanja 30 dni.
                </div>
            </div>
            <br>
            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700 w-80" role="alert" style="margin:0 auto; text-align:center">
                <div>
                    <span class="font-medium">Opozorilo!</span> Oglasi z neprimerno vsebino bodo odstranjeni in imetniki računa bodo sankcionirani.
                </div>
            </div>
            <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 border-gray-200">

                        <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">Polja označena z * so obvezna!</p>
        <div class="mx-auto mt-11 w-130 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
            <img class="h-64 w-full object-cover object-center" src="https://cdn.discordapp.com/attachments/923643835073060886/1109214672764289185/estoritve.jpg" alt="e-Storitve" />
            <div class="p-4">
              <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-900">Vaša storitev (Naslov)</h2>

              <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-900">> Regija,<!--,--> Kraj</h3>

              <p class="mb-2 text-semibold dark:text-gray-300 text-gray-700">Vaš opis storitve (Opis)</p>

              <p class="mb-2 text-base dark:text-gray-300 text-gray-700">031 300 300 (GSM)</p>

              <a href="https://e-storitve.com/"><p class="mb-2 text-blue-600">https://e-storitve.com/ (Povezava)</p></a>

              <div class="flex items-center">
                <p class="mr-2 text-lg text-gray-900 dark:text-white">
                16.00€ / Po dogovoru (Pustite polje "Cena" prazno za izbor cene "Po dogovoru")
                </p>
              </div>
            </div>
          </div>

        <form action="/create" method="POST" enctype="multipart/form-data">
            @csrf
            <br>
            <!--<label class="mt-8 text-base leading-4 text-gray-800">Uporabnik</label>-->
            <div class="mt-2">
                <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="hidden" name="user_id" value="{{ auth()->id() }}">

        </div>
            <br>
        <label class="mt-8 text-base leading-4 text-gray-800">Storitev*</label>
        <div class="mt-2">
            <select name="type" class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600">
                @foreach ($typeOptions as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
           <!-- <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="name" name="name" id="" placeholder="Insert name" required/> -->

        </div>

        <br>
        <label class="mt-8 text-base leading-4 text-gray-800">Naslov*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="title" id="" placeholder="Presnemavanje VHS" required/>
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">Cena (pustite prazno za po dogovoru)</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="number" name="price" id="" placeholder="0.00€ / Po dogovoru"/>
        </div>

        <br>
        <label class="mt-8 text-base leading-4 text-gray-800">Regija*</label>
        <div class="mt-2">
            <select name="region" class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600">
                @foreach ($regionOptions as $region)
                    <option value="{{ $region }}">{{ $region }}</option>
                @endforeach
            </select>
           <!-- <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="name" name="name" id="" placeholder="Insert name" required/> -->

        </div>

        <br>

        <!--<label class="mt-8 text-base leading-4 text-gray-800">Občina</label>
        <div class="mt-2">


        </div>
        <br>-->

        <label class="mt-8 text-base leading-4 text-gray-800">Kraj*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="city" id="" placeholder="Ljubljana" required/>
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">Kratek opis*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="description" id="" placeholder="Nudimo storitve iz področja video produkcije..." required/>
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">Povezava*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="url" id="" placeholder="http://vasastoritev.si/" />
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">GSM*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="phone" id="" placeholder="041 040 040" required/>
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">E-Pošta*</label>
        <div class="mt-2">
            <input class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600" type="text" name="email" id="" placeholder="info@storitev.si" required/>
        </div>

        <br>

        <label class="mt-8 text-base leading-4 text-gray-800">Slika*</label>
        <label class="">
            <br>
            <input type="file" name="image" class="mt-2 w-full text-sm text-slate-500
              file:mr-4 file:py-2 file:px-4
              file:border-0
              file:text-sm file:font-semibold
              file:bg-white file:text-blue-500
              hover:file:bg-gray-100
            "/ required>
          </label>
        </div>


        <button class="mt-8 border border-transparent hover:border-gray-300 dark:bg-blue-600 dark:hover:bg-gray-900 dark:text-white dark:hover:text-white dark:border-transparent bg-gray-900 hover:bg-indigo-600 text-white hover:text-white flex justify-center items-center py-4 rounded w-full">
            <div>
                <p class="text-base leading-4">Objavi storitev</p>
            </div>
        </button>
    </div>
    </form>

</section>

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
          </div>
        </div>
      </div>
                </div>
            </div>

        </div>

                </main>


            </div>
        </div>
    </div>
</x-app-layout>
