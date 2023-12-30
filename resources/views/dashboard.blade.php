<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap h-max border-t-2 border-blue border-opacity-80 ">
        <div class="w-2/3 h-max">

            <div class="flex flex-wrap flex-col h-max ">


                <div
                    class="bg-blue-dark bg-opacity-25 h-1/6 w-full py-2  border-b-2 border-black-dark border-opacity-10 leading-tight">
                    <div class="sm:px-6 lg:px-8 flex gap-3 ">
                        <p class="w-1/3 font-extrabold ">Consumption |</p>
                        {{-- Previous --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide">
                            <p>Prev:</p>
                            {{-- <p>{{ $meterinfo->previous_reading }}</p> --}}<p class="text-red-dark">123</p>
                            <p>kw</p>
                        </div>
                        {{-- Present --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide">
                            <p>Pres:</p>
                            {{-- <p>{{ $meterinfo->present_reading }}</p> --}}<p class="text-red-dark">1412</p>
                            <p>kw</p>
                        </div>
                        {{-- Total --}}
                        <div class="w-1/2 flex font-extrabold opacity-75 tracking-wide ">
                            <p>Total kWh used:</p>
                            {{-- <p>{{ $meterinfo->present_reading - $meterinfo->previous_reading }}</p> --}}<p class="text-red-dark">132423</p>
                            <p>kW</p>
                        </div>
                    </div>
                </div>
                {{--  sa time ako na dito basta yung desing ilagay mo nalan kasi masisingitan to ng function pati sa chart i love you --}}


                {{-- Time --}}
                <div
                    class="bg-blue-dark bg-opacity-25 w-full py-2  border-b-2 border-black-dark border-opacity-10 leading-tight">
                    <div class="flex gap-3"style="padding-left: 5.9rem; padding-right: 5.9rem">
                        <p class="font-extrabold" style="width:23%">Time |</p>

                        {{-- 1 minute --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1m</p>
                            </button>
                        </div>

                        {{-- 1 hour --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1h</p>
                            </button>
                        </div>

                        {{-- 1 day --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1D</p>
                            </button>
                        </div>

                        {{-- 1 month --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1M</p>
                            </button>
                        </div>

                        {{-- 1 year --}}
                        <div class="font-extrabold opacity-75 tracking-wide" style="width:10%">
                            <button class="outline-none ">
                                <p class="hover:text-blue cursor-pointer transition ease-in-out duration-150 ">1Y</p>
                            </button>
                        </div>

                    </div>
                </div>


                {{-- Chart --}}
                <div class="bg-blue-dark bg-opacity-25 h-full w-full">Chart</div>
            </div>

        </div>


        {{-- Right Part --}}
        <div class=" w-1/3  border-l-2 border-black-dark border-opacity-15">
            <div class="flex flex-col">
                {{-- Present Date and Time --}}
                <div class="bg-white  flex flex-col flex-wrap border-b-2 border-black-dark border-opacity-15 ">
                    <div class="flex items-center justify-center space-x-14 relative">
                        <span class="flex space-x-2">
                            <x-application-date /> {{-- love nag-dagdag ako ng component pangit kasi pag andito i love you --}}
                            <span>{{ date('M. j, Y') }}</span>
                        </span>

                        <div class="border-l-2 border-black-dark border-opacity-15 h-11"></div>

                        <span class="flex space-x-2">
                            <x-application-clock /> {{-- love nag-dagdag ako ng component pangit kasi pag andito i love you --}}
                            <span>{{ date('g:i a') }}</span>
                        </span>
                    </div>
                </div>
            </div>

            {{-- Consumption Bill --}}
            <div class="bg-blue-dark bg-opacity-25 ">
                <div class="text-center text-xl font-glacial font-semibold opacity-70 tracking-normal py-1 ">Consumption
                    Bill</div>
            </div>

            {{-- Type and Rate --}}
            <div
                class="bg-white border-t-2 border-black-dark border-opacity-10 py-1 px-10  tracking-wide items-center text-lg">
                <div class="flex space-x-10">
                    <div class="flex">
                        <p class="font-extrabold">Type:</p>
                        <p class="font-normal">Residential</p>
                    </div>

                    <div class="flex ">
                        <p class="font-extrabold">Rate:</p>
                        <p class="font-normal text-green-dark">Php 11.21</p>
                        <p class="font-normal text-red-dark"> kWh</p>
                    </div>

                </div>
            </div>

            {{-- Year Selection --}}
            <div class=" border-b-2 border-t-2 border-black-dark border-opacity-10 bg-white">
                <label for="year_select" class="sr-only">Year Select</label>
                <select id="year_select"
                    class="block w-24 mx-auto py-1 text-center text-lg font-bold font-glacial opacity-80 bg-white border-none focus:ring-0 focus:border-gray-200 peer leading-tight"
                    onchange="toggleListVisibility()">
                    <option value="" disabled selected>Year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>

                <div class="border-b-2 border-black-dark border-opacity-10"></div>

                <ul id="list2021" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 115px;">
                    <!-- Your list content for the year 2021 goes here -->
                    <span class="flex space-x-10">
                        <li>January</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>February</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>March</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>April</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>May</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>June</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>July</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>August</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>September</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>October</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>November</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>December</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <!-- Add more list items as needed -->
                </ul>

                <ul id="list2022" class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 115px;">
                    <!-- Your list content for the year 2022 goes here -->
                    <span class="flex space-x-10">
                        <li>January</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>February</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>March</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>April</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>May</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>June</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>July</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>August</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>September</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>October</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>November</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>December</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <!-- Add more list items as needed -->
                </ul>

                <ul id="list2023"
                    class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 115px;">
                    <!-- Your list content for the year 2023 goes here -->
                    <span class="flex space-x-10">
                        <li>January</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>February</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>March</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>April</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>May</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>June</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>July</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>August</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>September</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>October</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>November</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>December</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <!-- Add more list items as needed -->
                </ul>

                <ul id="list2024"
                    class="hidden max-h-48 overflow-y-auto px-10 space-y-1 font-extrabold tracking-wide "
                    style="height: 115px;">
                    <!-- Your list content for the year 2024 goes here -->
                    <span class="flex space-x-10">
                        <li>January</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>February</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>March</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>April</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>May</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>June</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>July</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>August</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>September</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>October</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>November</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <span class="flex space-x-10">
                        <li>December</li>
                        <li class="text-green-dark font-normal">Php 3183.34</li>
                    </span>
                    <!-- Add more list items as needed -->
                </ul>
            </div>

            <script>
                function toggleListVisibility() {
                    var yearSelect = document.getElementById("year_select");
                    var list2021 = document.getElementById("list2021");
                    var list2022 = document.getElementById("list2022");
                    var list2023 = document.getElementById("list2023");
                    var list2024 = document.getElementById("list2024");

                    list2021.classList.add("hidden");
                    list2022.classList.add("hidden");
                    list2023.classList.add("hidden");
                    list2024.classList.add("hidden");

                    if (yearSelect.value === "2021") {
                        list2021.classList.remove("hidden");
                    } else if (yearSelect.value === "2022") {
                        list2022.classList.remove("hidden");
                    } else if (yearSelect.value === "2023") {
                        list2023.classList.remove("hidden");
                    } else if (yearSelect.value === "2024") {
                        list2024.classList.remove("hidden");
                    }
                }
            </script>
    
            {{-- Meter Status --}}
            <div class="bg-blue-dark bg-opacity-25  border-b-2 border-black-dark border-opacity-10">
                <div class="text-center text-xl font-glacial font-semibold opacity-70 tracking-normal py-1 ">
                    Meter Status</div>
            </div>

            {{-- Meter Status Details --}}
            <div class="bg-white  border-b-2 border-black-dark border-opacity-20 px-10 space-y-3 font-extrabold tracking-wide">
                <span class="flex space-x-2">
                    <p>Status:</p>
                    {{-- <p>{{ $meterinfo->status }}</p> --}}
                    <p class="text-green-dark font-normal">Active</p>
                </span>
                <span class="flex space-x-2">
                    <p>Owner:</p>
                    {{-- <p>{{ $meterinfo->Owner }}</p> --}}
                    <p class="text-green-dark font-normal">Donna Shane Ventura</p>
                </span>
                <span class="flex space-x-2">
                    <p>Address:</p>
                    {{-- <p>{{ $meterinfo->Address }}</p> --}}
                    <p class="text-green-dark font-normal">Soyung, Echague, Isabela</p>
                </span>
            </div>
            
        </div>
    </div>

</x-app-layout>
