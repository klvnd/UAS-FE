<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel ="stylesheet" />
</head>
<style>
 html{
   scroll-behavior: smooth;
}
</style>
<body class="bg-gray-950">
<?php include("./includes/navbar.php") ?>



  

<section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url('img/bg-awal.png');">
    <div section id="beranda" class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Mobil Listrik, Mobil Masa Depan</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Membangkitkan Masa Depan, Menggerakkan Keberlanjutan: Temukan Revolusi Listrik bersama MobiListrik!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="../be/login.php" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Login
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
                    
            <button id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" data-dropdown-trigger="hover" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-blue-500 hover:bg-gray-700 focus:ring-4 focus:ring-gray-400" type="button">Jenis Mobil <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownDelay" class="z-10 hidden bg-gray-800 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
                    <li>
                        <a href="./detailmobil.php" class="block px-4 py-2  hover:bg-blue-500">Hyundai Ioniq 5</a>
                    </li>
                    <li>
                        <a href="./detailmobil.php" class="block px-4 py-2  hover:bg-blue-500">BMW F4</a>
                    </li>
                    <li>
                        <a href="./detailmobil.php" class="block px-4 py-2  hover:bg-blue-500">Mercedes</a>
                    </li>
                    <li>
                        <a href="./detailmobil.php" class="block px-4 py-2  hover:bg-blue-500">Honda</a>
                    </li>
                    </ul>
                </div>

                </div>
                    </div>
</section>


<section class="bg-gray-900 my-16 shadow-xl">
    <div section id="tentang" class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full " src="./img/ioniq5.png" alt="dashboard image">
        <!-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image"> -->
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl text-white font-extrabold">Mobil Listrik di Indonesia</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Industri mobil listrik di Indonesia telah mengalami perkembangan yang signifikan. Beberapa merek mobil listrik telah masuk ke pasar Indonesia, dan pemerintah juga telah mengambil langkah-langkah untuk mendukung penggunaan mobil listrik sebagai bagian dari upaya mengurangi emisi karbon.</p>
            <!-- <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> -->
        </div>
    </div>
</section>


<!-- alasan mobile listrik -->
<section class="bg-gray-900 my-16 shadow-xl">
  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-full mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white dark:text-white ">Kenapa Harus Beralih ke Mobil Listrik?</h2>
          <p class="text-gray-500 sm:text-xl text-center dark:text-gray-400">Menjalankan masa depan alami bebas emisi.</p>
      </div>    
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                <img src="img/flaticon-oil.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Lupakan Penggunaan BBM</h3>
              <p class="text-gray-500 dark:text-gray-400">Tidak perlu lagi menggunakan bahan bakar BBM. Mengisi baterai bisa dari rumah, melalui pemakaian listrik sehari-hari. Lebih praktis dan tidak memakan waktu harus antri isi bensin.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                <img src="img/flaticon-machine.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Perawatan</h3>
              <p class="text-gray-500 dark:text-gray-400">Mekanikal mobil listrik banyak berbeda dengan mobil konvensional. Beberapa komponen yang biasanya harus mendapat perawatan rutin, sudah tidak diperlukan lagi.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                 <img src="img/flaticon-green.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">                    
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Ramah Lingkungan</h3>
              <p class="text-gray-500 dark:text-gray-400">Mobil listrik tidak menghasilkan emisi gas buang sama sekali. Tidak seperti mesin konvensional yang mengeluarkan zat sisa pembakaran dari hasil olahan bahan bakar minyak. Jelas sangat ramah lingkungan.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
              <img src="img/flaticon-energy.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Efisiensi Energi</h3>
              <p class="text-gray-500 dark:text-gray-400">Beralihnya ke mobil listrik, pemakaian sumber energi tak tergantikan itu dapat berkurang drastis. Cadangan minyak pun selalu terjaga.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
              <img src="img/flaticon-energy2.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Teknologi Terbarukan</h3>
              <p class="text-gray-500 dark:text-gray-400">Penggunaan teknologi terbarukan dalam mobil listrik mendorong inovasi di sektor energi dan otomotif untuk masa depan yang lebih berkelanjutan.
</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
              <img src="img/flaticon-love.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Lebih Sehat</h3>
              <p class="text-gray-500 dark:text-gray-400">Ketika beralih ke mobil listrik, udara kian bersih dari polusi. Dampaknya tentu ke lingkungan sekitar dan kesehatan badan. Berbagai penyakit yang biasa ditimbulkan akibat polusi juga drastis berkurang.</p>
          </div>
      </div>
  </div>
</section>


<!-- harga di landing page -->
<section class="bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 grid grid-cols-3 place-items-center">
        <div class="w-full max-w-sm rounded-lg shadow bg-gray-800 border-gray-200 h-full">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="img/ioniq5.png" alt="product image" />
        </a>
        <div class="flex flex-col px-5 pb-5">
            <a href="#">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Hyundai Ioniq5</h1>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-white-900 dark:text-white">Rp 681,9 - 783,1 Juta</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Lihat detail</a>
            </div>
        </div>
    </div>

  <div class="w-full max-w-sm rounded-lg shadow bg-gray-800 border-gray-200 h-full">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="img/bmwi7.png" alt="product image" />
        </a>
        <div class="flex flex-col px-5 pb-5">
            <a href="#">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">BMW i7</h1>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900 dark:text-white">Rp 3,41 M</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>


  <div class="w-full max-w-sm rounded-lg shadow bg-gray-800 border-gray-200 h-full">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="img/mercyesv.png" alt="product image" />
        </a>
        <div class="flex flex-col px-5 pb-5">
            <a href="#">
                <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Mercedes Benz EQS SUV</h1>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900 dark:text-white">Rp 3,59 M</span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- komponen di mobil listrik -->
<section class="bg-gray-900 my-16 shadow-xl">
  <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-full mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white dark:text-white ">Komponen di Mobil Listrik</h2>
      </div>    
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                <img src="img/flaticon-baterai.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Baterai</h3>
              <p class="text-gray-500 dark:text-gray-400">Baterai adalah sumber energi utama di mobil listrik. Mengisi ulangnya bisa melalui listrik rumah atau stasiun pengisian khusus. Beberapa jenis baterai yang dipakai antara lain: Lithium-ion, Lead Acid dan Nickel Metal Hydride.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                <img src="img/flaticon-machine2.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Motor Elektrik</h3>
              <p class="text-gray-500 dark:text-gray-400">Fungsi motor bertugas menyalurkan daya menuju roda. Output dihasilkan pun berbeda-beda sesuai spesifikasi yang ingin dicapai pabrikan. Semakin besar, tentu akselerasinya juga tambah cepat. Kehebatan motor elektrik di mobil listrik, menghasilkan torsi besar tanpa terpengaruh putaran mesin.</p>
          </div>
          <div>
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-black lg:h-12 lg:w-12">
                 <img src="img/flaticon-charge.png" alt="bbm" class="w-5 h-5 text-white lg:w-6 lg:h-6 dark:text-primary-300">                    
              </div>
              <h3 class="mb-2 text-xl font-bold text-white">Charger</h3>
              <p class="text-gray-500 dark:text-gray-400">Mengisi baterai mobil listrik sama seperti proses charging baterai smarthphone. Dibutuhkan adaptor khusus untuk tersambung dengan sumber listrik. Biasanya berupa konverter tersendiri, agar aliran listrik yang masuk sesuai dengan yang dibutuhkan. Alat itu tersedia satu paket ketika membeli mobil listrik.</p>
          </div>
      </div>
  </div>
</section>


<!-- youtube -->
<section class="bg-gray-900 my-16 shadow-xl">
        <h2 class="pt-8 px-4 text-4xl tracking-tight font-extrabold text-center text-white dark:text-white ">Video Mobil Listrik</h2>
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 grid grid-cols-3 place-items-center">   

            <div class="max-w-sm   border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <iframe class="mx-auto w-full lg:max-w-md rounded-lg sm:h-56 shadow-xl" src="https://www.youtube.com/embed/KyiKhUA-wgc?si" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-4">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">We Love to Drive: Kami Bawa Mobil Listrik MG Keluar Kota</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Oto Driver</p>
                    </a>
                </div>
            </div>

            <div class="max-w-sm   border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <iframe class="mx-auto w-full lg:max-w-md rounded-lg sm:h-56 shadow-xl" src="https://www.youtube.com/embed/WmShPywC3Uc?si" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-4">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cobain Mobil Listrik Paling Hits di Eropa: MG4 EV</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ridwan Hanif Ramadhani</p>
                </div>
            </div>

            <div class="max-w-sm   border-gray-200 rounded-lg shadow bg-gray-800 dark:border-gray-700">
            <iframe class="mx-auto w-full lg:max-w-md rounded-lg sm:h-56 shadow-xl" src="https://www.youtube.com/embed/TqY-Hz4CSbo?si" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-4">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Wuling BINGUO : Mobil listrik baru lagi nih!</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">AutonetMagz</p>
    
                </div>
            </div>



        </div>
</section>





    <!-- Footer -->
    <?php include("../includes/footer.php") ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>