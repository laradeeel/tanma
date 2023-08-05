<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanma</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <nav>@include('navbar')</nav>


    <div class="container bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
              <button id="internal-tab" data-tabs-target="#internal" type="button" role="tab" aria-controls="internal" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-blue-100 focus:bg-grey-500 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Internal</button>
            </li>
            <li class="w-full">
              <button id="external-tab" data-tabs-target="#external" type="button" role="tab" aria-controls="external" aria-selected="true" class="inline-block w-full p-4 bg-gray-50 hover:bg-blue-100 focus:bg-grey-500 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">External</button>
            </li>
          </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="internal" role="tabpanel" aria-labelledby="internal-tab">
                    <div class="container relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Dokumen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Invoice
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pengirim
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penerima
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Rs. Sentosa</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        inv/22/2023
                                    </td>
                                    <td class="px-6 py-4">
                                        Stella
                                    </td>
                                    <td class="px-6 py-4">
                                        Airin
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 19:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Pt. Tugu tani</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        kfd/06/2023
                                    </td>
                                    <td class="px-6 py-4">
                                        gefin
                                    </td>
                                    <td class="px-6 py-4">
                                        konan
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 19:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Alexander Abraham</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        konan
                                    </td>
                                    <td class="px-6 py-4">
                                        angel
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 22:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nasution Napitapulu</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        Stella
                                    </td>
                                    <td class="px-6 py-4">
                                        Airin
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 14:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nasution Napitapulu</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        Stella
                                    </td>
                                    <td class="px-6 py-4">
                                        Airin
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 14:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nasution Napitapulu</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        Stella
                                    </td>
                                    <td class="px-6 py-4">
                                        Airin
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 14:00
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                            <ul class="inline-flex -space-x-px text-sm h-8">
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="external" role="tabpanel" aria-labelledby="external-tab">
                    <div class="container relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Dokumen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Invoice
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Pengirim
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penerima
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Belia Klinik</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        JBR-125214
                                    </td>
                                    <td class="px-6 py-4">
                                        nana
                                    </td>
                                    <td class="px-6 py-4">
                                        uli
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 19:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">RS. Siloam</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        29817239
                                    </td>
                                    <td class="px-6 py-4">
                                        mega
                                    </td>
                                    <td class="px-6 py-4">
                                        danang
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 19:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">Dadang Abdurahman</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        -
                                    </td>
                                    <td class="px-6 py-4">
                                        husba
                                    </td>
                                    <td class="px-6 py-4">
                                        malika
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 22:00
                                        </p>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="w-32 p-4">
                                        <button data-popover-target="popover-right" data-popover-placement="right" type="button" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">PT. Asosiasi</button>
                                        <div data-popover id="popover-right" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                                <h3 class="font-semibold text-gray-900 dark:text-white">Gambar dokumen</h3>
                                            </div>
                                            <div class="px-4 py-3">
                                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        db/22-1010
                                    </td>
                                    <td class="px-6 py-4">
                                        naya
                                    </td>
                                    <td class="px-6 py-4">
                                        mala
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="">22-07-2023 <br> 14:00
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                            <ul class="inline-flex -space-x-px text-sm h-8">
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
            </div>
        </div>
    </div>
    
    


</body>
<footer>@include('bottombar')</footer>


</html>