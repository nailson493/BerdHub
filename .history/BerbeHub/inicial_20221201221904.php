<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inicial.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <!-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> -->
    <link rel="canonical" href="https://flowbite.com/docs/components/navbar/">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet"
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

  
   
</head>
<body>


<header>    
<nav class="border-gray-200 px-2 sm:px-4 py-2.5  ">
    <div class="container justify-between  flex flex-wrap items-center mx-auto">
    <a href="https://flowbite.com/" class="flex items-center">
        <img src="img/logo.png" class="mr-3 h-6 sm:h-9" id="logo" alt="Flowbite Logo">
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
    </a>
    <div class="flex md:order">
      <button type="button" data-collapse-toggle="navbar-default" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVring-gray-700 rounded-lg text-sm p-2.5 mr-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        <span class="sr-only">Search</span>
      </button>
      <!-- search -->
      <div class="hidden relative md:block mr-30">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
          <span class="sr-only">Search icon</span>
        </div>
        <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar">
      </div>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
        <span class="sr-only">Open menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <!-- ocultado search -->
      <!-- <div class="hidden relative justify-between items-center w-full md:flex md:w-auto md:order-1 ">
        <div class="relative mt-3 md:hidden" >
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
          </div>
          <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        <div id="navbar-search" >
        <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white	text-base	rounded md:bg-transparent md:text-blue-500 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white text-base	rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-500 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVborder-gray-700">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white	text-base	rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-500 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV border-gray-700">Services</a>
          </li>
        </ul>
      </div>
      </div> -->


      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <div class="relative mt-3 md:hidden">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
          </div>
          <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div>
        <ul class="flex flex-col p-4 mt-4  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVAbout">Falta</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVServices"> about</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVPricing">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVContact"> algumna</a>
          </li>
        </ul>
      </div>




      <!-- boneco -->
      <!-- <div class="flex items-center md:order-2">
        <button type="button"  class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full " src="/img/icon.png" alt="user photo">
        </button>
        </div> -->
         <div class="flex relative items-center lg:order-2" id="text-header">
            <a href="/BerbeHub/login.html" class="text-zinc-400 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
            <a href="#" class="text-zinc-400 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Get started</a>
             <!-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>  -->
        </div>
        <!-- Dropdown menu -->
        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 310px);">
          <div class="py-3 px-4">
            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
            <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
          </div>
          <ul class="py-1" aria-labelledby="user-menu-button">
            <li>
              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
          </ul>
        </div>
    </div>
    </div>
    </div>
</nav>
</header>



<div id="container">
  <div class="liss"> 
      <div class="bloco">
        <div id="carouselExampleCaptions1" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions1"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions1"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions1"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
          <div class="carousel-item active relative float-left w-full">
            <img
              src="img/pexels-dmitry-zvolskiy-1805600.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-luis-quintero-1453005 (1).jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-mídia-897251.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions1"
          data-bs-slide="prev"
        >
          <i class="fa-solid fa-chevron-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions1"
          data-bs-slide="next"
        >
          <i class="fa-solid fa-chevron-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
    
      </div>
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
      </div>
  </div>

  <div class="liss"> 
    <div class="bloco">
        <div id="carouselExampleCaptions2" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions2"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions2"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions2"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
          <div class="carousel-item active relative float-left w-full">
            <img
              src="img/pexels-dmitry-zvolskiy-1805600.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-luis-quintero-1453005 (1).jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-mídia-897251.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions2"
          data-bs-slide="prev"
        >
          <i class="fa-solid fa-chevron-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions2"
          data-bs-slide="next"
        >
          <i class="fa-solid fa-chevron-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
    
      </div>
    </div>
    
    <div class="text-card">
      <a href=""> 
        <table id="table">
          <tr class="p-1">
            <td>Erick Barber <i class="fa-solid fa-star"></i></td>
            <td class="l-2">4,5</td>
          </tr>
          <tr class="p-2">
            <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
            <td class="p2-line2">30 KM</td>
          </tr>
        </table>
      </a>
  </div>
  
  <div class="liss"> 
    <div class="bloco">
        <div id="carouselExampleCaptions3" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions3"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions3"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions3"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
          <div class="carousel-item active relative float-left w-full">
            <img
              src="img/pexels-dmitry-zvolskiy-1805600.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-luis-quintero-1453005 (1).jpg"
              class="block w-full"
              alt="..."
            />
          </div>
          <div class="carousel-item relative float-left w-full">
            <img
              src="img/pexels-mídia-897251.jpg"
              class="block w-full"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
          type="button"
          data-bs-target="#carouselExampleCaptions3"
          data-bs-slide="prev"
        >
          <i class="fa-solid fa-chevron-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
          type="button"
          data-bs-target="#carouselExampleCaptions3"
          data-bs-slide="next"
        >
          <i class="fa-solid fa-chevron-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
    
      </div>
    </div>
    
    <div class="text-card">
      <a href=""> 
        <table id="table">
          <tr class="p-1">
            <td>Erick Barber <i class="fa-solid fa-star"></i></td>
            <td class="l-2">4,5</td>
          </tr>
          <tr class="p-2">
            <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
            <td class="p2-line2">30 KM</td>
          </tr>
        </table>
      </a>
  </div>

</div>





</div>

<div class="liss"> 
  <div class="bloco">
      <div id="carouselExampleCaptions4" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions4"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions4"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions4"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="img/pexels-dmitry-zvolskiy-1805600.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-luis-quintero-1453005 (1).jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-mídia-897251.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptions4"
        data-bs-slide="prev"
      >
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptions4"
        data-bs-slide="next"
      >
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
   
    </div>
  </div>
  
  <div class="text-card">
    <a href=""> 
      <table id="table">
        <tr class="p-1">
          <td>Erick Barber <i class="fa-solid fa-star"></i></td>
          <td class="l-2">4,5</td>
        </tr>
        <tr class="p-2">
          <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
          <td class="p2-line2">30 KM</td>
        </tr>
      </table>
    </a>
</div>







</div>




<div class="liss"> 
  <div class="bloco">
      <div id="carouselExampleCaptions5" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions5"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions5"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions5"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="img/pexels-dmitry-zvolskiy-1805600.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-luis-quintero-1453005 (1).jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-mídia-897251.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptions5"
        data-bs-slide="prev"
      >
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptions5"
        data-bs-slide="next"
      >
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
   
    </div>
  </div>
  
  <div class="text-card">
    <a href=""> 
      <table id="table">
        <tr class="p-1">
          <td>Erick Barber <i class="fa-solid fa-star"></i></td>
          <td class="l-2">4,5</td>
        </tr>
        <tr class="p-2">
          <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
          <td class="p2-line2">30 KM</td>
        </tr>
      </table>
    </a>
</div>







</div>

<div class="liss"> 
  <div class="bloco">
      <div id="carouselExampleCaptions6" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions6"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions6"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions6"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="img/pexels-dmitry-zvolskiy-1805600.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-luis-quintero-1453005 (1).jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-mídia-897251.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptions6"
        data-bs-slide="prev"
      >
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptions6"
        data-bs-slide="next"
      >
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
   
    </div>
  </div>
  
  <div class="text-card">
    <a href=""> 
      <table id="table">
        <tr class="p-1">
          <td>Erick Barber <i class="fa-solid fa-star"></i></td>
          <td class="l-2">4,5</td>
        </tr>
        <tr class="p-2">
          <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
          <td class="p2-line2">30 KM</td>
        </tr>
      </table>
    </a>
</div>







</div>

<div class="liss"> 
  <div class="bloco">
      <div id="carouselExampleCaptions7" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions7"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions7"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions7"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="img/pexels-dmitry-zvolskiy-1805600.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-luis-quintero-1453005 (1).jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-mídia-897251.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptions7"
        data-bs-slide="prev"
      >
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptions7"
        data-bs-slide="next"
      >
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
   
    </div>
  </div>
  
  <div class="text-card">
    <a href=""> 
      <table id="table">
        <tr class="p-1">
          <td>Erick Barber <i class="fa-solid fa-star"></i></td>
          <td class="l-2">4,5</td>
        </tr>
        <tr class="p-2">
          <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
          <td class="p2-line2">30 KM</td>
        </tr>
      </table>
    </a>
</div>







</div>

<div class="liss"> 
  <div class="bloco">
      <div id="carouselExampleCaptions8" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions8"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions8"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions8"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner relative w-full overflow-hidden">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="img/pexels-dmitry-zvolskiy-1805600.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-luis-quintero-1453005 (1).jpg"
            class="block w-full"
            alt="..."
          />
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="img/pexels-mídia-897251.jpg"
            class="block w-full"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
        type="button"
        data-bs-target="#carouselExampleCaptions8"
        data-bs-slide="prev"
      >
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
        type="button"
        data-bs-target="#carouselExampleCaptions8"
        data-bs-slide="next"
      >
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
      </button>
   
    </div>
  </div>
  
  <div class="text-card">
    <a href=""> 
      <table id="table">
        <tr class="p-1">
          <td>Erick Barber <i class="fa-solid fa-star"></i></td>
          <td class="l-2">4,5</td>
        </tr>
        <tr class="p-2">
          <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
          <td class="p2-line2">30 KM</td>
        </tr>
      </table>
    </a>
</div>

</div>
</div>
<div class="box">
  <div class="line">
    <hr />
  </div>
  
  <nav id="navegation-bar" aria-label="Page navigation example">
    <ul class="inline-flex items-center -space-x-px">
      <li>
        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <span class="sr-only">Previous</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        </a>
      </li>
      <li>
        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
      </li>
      <li>
        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
      </li>
      <li>
        <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
      </li>
      <li>
        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
      </li>
      <li>
        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
      </li>
      <li>
        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <span class="sr-only">Next</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </li>
    </ul>
  </nav>
  
</div>

</div>
<div>
  
</div>


<?php

include "footer.php";

?>

<!-- <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900">
  <div class="md:flex md:justify-between">
      <div class="mb-6 md:mb-0">
          <a href="https://flowbite.com/" class="flex items-center">
              <img src="img/logo.png" class="mr-3 h-8" alt="FlowBite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
      </div>
      <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
              <ul class="text-gray-600 dark:text-gray-400">
                  <li class="mb-4">
                      <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                  </li>
                  <li>
                      <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-600 dark:text-gray-400">
                  <li class="mb-4">
                      <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                  </li>
                  <li>
                      <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
              <ul class="text-gray-600 dark:text-gray-400">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Privacy Policy</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
  <div class="sm:flex sm:items-center sm:justify-between -mt-4">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV"></span>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <i class="fa-brands fa-facebook"></i>
              <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <i class="fa-brands fa-instagram"></i>
              <span class="sr-only">Instagram page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <i class="fa-brands fa-twitter"></i>
              <span class="sr-only">Twitter page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <i class="fa-brands fa-github"></i>
              <span class="sr-only">GitHub account</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              <i class="fa-brands fa-dribbble"></i>
              <span class="sr-only">Dribbbel account</span>
          </a>
      </div>
  </div>
</footer> -->



</body>
</html>