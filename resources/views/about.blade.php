<title>Nadzorna Plošča | e-Storitve</title>
<x-app-layout>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=05a16224-4c34-4db8-a343-d130a788414c"> </script>
                <main class="font-mono">
                    <h1 class="mt-8 text-5xl font-semibold text-gray-900" style="text-align: center ">
                        OGLASNA DESKA
                    </h1>
                    <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">© 2023 | e-Storitve.com</p>
                    <br>
                    <hr />
                    <div class="min-h-screen bg-gray-100 py-5">
                        <div class="overflow-x-auto w-full">
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
                            <br>
                            <hr />
                            <br>

                            <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">Vaši oglasi:</p>
                            <br>
                            <table class="mx-auto max-w-2xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden">
                                <thead class="bg-gray-900">
                                    <tr class="text-white text-left">
                                        <th class="font-semibold text-sm uppercase px-6 py-4"> Oglas </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4"> Kategorija </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Status </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Cena (€) </th>
                                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <!-- ENTRY POINT -->
                                    @foreach($services as $service)
                                    <tr>
                                        <td class="px-4 py-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="inline-flex w-10 h-10"> <img class="w-10 h-10 object-cover rounded-full" alt="e-Storitve" src="{{ asset('/storage/images/services/'. $service->image) }}" /> </div>
                                                <div>
                                                    <p> {{ $service->title }} ({{$service->user_id}}) </p>
                                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{ $service->region }},<!-- {{ $service->municipality }},--> {{ $service->city }} </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <p class=""> {{$service->type}} </p>
                                            <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{ $service->url }} </p>
                                        </td>
                                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Aktiven </span> </td>
                                        <td class="px-6 py-4 text-center"> {{ $service->price}} </td>
                                        <td class="px-6 py-4 text-center pt-8 text-red-800">
                                            <form method="POST" action="api/service/{{$service->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Briši</button>
                                        </form></td>

                                    </tr>
                                    @endforeach
                                    <!-- END POINT -->
                                </tbody>
                            </table>
                            <br>
                            <hr />
                            <br>
                            <p class="text-gray-700 font-semibold text-lg" style="text-align:center;">Zgled oglasa:</p>
                            <div class="mx-auto mt-11 w-80 transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                                <img class="h-64 w-full object-cover object-center" src="https://cdn.discordapp.com/attachments/923643835073060886/1109214672764289185/estoritve.jpg" alt="e-Storitve" />
                                <div class="p-4">
                                  <h2 class="mb-1 text-xl font-bold dark:text-white text-gray-900">Vaša storitev (Naslov)</h2>

                                  <h3 class="mb-2 text-lg font-normal dark:text-white text-gray-900">> Regija,<!--,--> Kraj</h3>

                                  <p class="mb-2 text-semibold dark:text-gray-300 text-gray-700">Vaš opis storitve (Opis)</p>

                                  <p class="mb-2 text-base dark:text-gray-300 text-gray-700">031 300 300 (GSM)</p>

                                  <a href="https://e-storitve.com/"><p class="mb-2 text-blue-600">https://e-storitve.com/ (Povezava)</p></a>

                                  <div class="flex items-center">
                                    <p class="mr-2 text-lg text-gray-900 dark:text-white">
                                    16.00€ / Po dogovoru
                                    </p>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>

</x-app-layout>
