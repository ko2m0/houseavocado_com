<?php require 'lang.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      House Avocado :: Mexican Produce Imports to the US
    </title>
    <meta name="description" content="House Avocado is a leading importer of Mexican avocados, Persian limes and mangoes to the United States. Elevate your business with our fresh and quality products." />
    <meta name="keywords" content="Mexican produce imports, Importing Mexican fruits, Fresh avocados from Mexico, Mexican agriculture exports, Quality Mexican produce, US Mexican produce distribution,
    House of Avocado imports, Avocado importers in the US, Mexican agricultural trade, Mexican fruit distribution" />
    <meta name="author" content="Ko2m0" />
    <link rel="icon" href="./src/img/icons/favicon.ico">
    <link rel="stylesheet" href="./src/css/style.css"/>
    <!-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
      .gradient {
        background: linear-gradient(110deg, #568203 0%, #A8EB12 100%);
      }
    </style>
    <link rel="canonical" href="https://houseavocado.com/main/">
    <!-- -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Website",
  "name": "House Avocado",
  "url": "https://houseavocado.com",
  "description": "House Avocado is a leading importer of Mexican avocados, Persian limes and mangoes to the United States. Elevate your business with our fresh and quality products.",
  "keywords": "Mexican produce imports, Importing Mexican fruits, Fresh avocados from Mexico, Mexican agriculture exports, Quality Mexican produce, US Mexican produce distribution,
    House of Avocado imports, Avocado importers in the US, Mexican agricultural trade, Mexican fruit distribution",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://houseavocado.com/search?q={search_term}",
    "query-input": "required name=search_term"
  }
}
   </script>
  </head>
  <body class="leading-normal tracking-normal text-white gradient scroll-smooth" style="font-family: 'Poppins', sans-serif;" x-data="{ openMenu : false }">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-gray-800 bg-gray-100">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
        <!-- Top Info -->
        <div class="w-full container mx-auto  flex-wrap items-center justify-end mt-0 py-2 hidden lg:flex text-sm">
        <div class="pl-4 flex">
         <ul class="list-reset lg:flex justify-start flex-1 items-center">
          <li class="mr-4">
            <a href="https://maps.app.goo.gl/89xP4fniVFV4Gmft8" target="_blank">
              <i class="fa fa-map-marker"></i>
              Keystone Cold, Pharr, TX
            </a>
          </li>
          <li class="mr-4">
          <a href="tel:+19255585243">
            <i class="fa fa-phone"></i>
            (925)-558-5243
            </a>
          </li>
          <li class="mr-4">
            <a href="https://www.linkedin.com/company/avosontime/" target="_blank">
            <i class="fa-brands fa-linkedin "></i>
            </a>
          </li>
         </ul>
        </div>
       </div>
        <div class="pl-4 flex-1 items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl hidden lg:block" href="#" x-cloak>
            <!-- Logo Big -->
            <img src="./src/img/HoA_logo_color.svg" alt="" class="max-w-[70%] md:max-w-[70%] lg:max-w-[70%]">
          </a>
          <!-- Logo SMall -->
          <a href="#" class="lg:hidden block">
            <img src="./src/img/HoA_logo_color.svg" alt="" class="max-w-[40%] md:max-w-[20%]">
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition
           hover:scale-105 duration-300 ease-in-out"
           @click="openMenu = !openMenu">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto  mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20 text-sm"
          id="nav-content" :class="openMenu ? 'block' : 'hidden' " x-cloak x-show="true">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black no-underline font-semibold" href="#growersinfo" @click="openMenu = !openMenu"><?= __('Growers/Exporters') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 font-semibold" href="#importersinfo" @click="openMenu = !openMenu"><?= __('Importers/Distributors') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 font-semibold" href="#salesteam" @click="openMenu = !openMenu" ><?= __('Contact Us') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 font-semibold" href="aboutus.php" @click="openMenu = !openMenu" ><?= __('About Us') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 font-semibold" href="index.php?lang=en" data-reload>ENG</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 font-semibold" href="index.php?lang=es" data-reload>ESP</a>
            </li>
          </ul>
          <button
            id="navAction"
            class="hidden mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
          >
            Get a Quote
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="lg:pt-44 pt-36">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full"></p>
          <h1 class="lg:my-14 my-6 text-5xl lg:text-6xl font-bold leading-tight md:leading-normal" id="immaHeroIntro">
            <?= __('Your trusted partner in avocados and other fruits in Pharr, TX.') ?>
          </h1>
          <p class="leading-normal text-2xl mb-8">
            <?= __('We specialize in importing Mexican Produce to the United States.') ?>  
          </p>
          <div class="w-full py-6 z-10 flex flex-col md:flex-row align-center justify-center md:justify-start">
            <div class="">
              <a href="#growersinfo">
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <?= __('Growers / Exporters') ?>
                </button>
              </a>
            </div>
            <div class="px-4">
              <a href="#importersinfo">
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <?= __('Importers / Distributors') ?>
                </button>
              </a>
              
            </div>
          </div>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-2/5 py-6 text-center hidden md:block">
          <img class="w-full md:w-4/5 z-50" src="./src/img/avos4cover8.png" />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24 z-0">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <!-- -->
    <div class="bg-white py-8 px-2">
      <section class="container mx-auto text-center py-12 bg-white">
        <h2 class="w-full my-12 text-4xl/snug lg:text-5xl/relaxed font-bold text-center text-hoa-green-800">
          <?= __('We easily import, inspect and distribute your product anywhere in the US.') ?></h2>
      </section>
    </div>
    <!-- CERTS -->
    <div class="bg-gray-100 hidden lg:block">
      <section class="container mx-auto text-center py-12 ">
        <div class="container mx-auto flex align-middle">
          <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <img src="./src/img/certs/lot_2.png" alt="">
          </div>
          <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <img src="./src/img/certs/primus_logo1.png" alt="">
          </div>
          <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <img src="./src/img/certs/globalgap_logo1.png" alt="">
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <img src="./src/img/certs/apeamlogo1.png" alt="">
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <img src="./src/img/certs/fairtrade_logo1.png" alt="">
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <img src="./src/img/certs/senasicalogo1.png" alt="">
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <img src="./src/img/certs/afmlogo1.png" alt="">
            </div>  
        </div>
      </section>
    </div>
    <!-- Certs mobile -->
    <div class="bg-gray-100 block lg:hidden">
      <section class="container mx-auto text-center py-12">
        <div id="scrollContainer" class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start">
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="">
              <img class="object-cover"
                src="./src/img/certs/lot_2.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="aspect-w-16 aspect-h-9">
              <img class="object-cover"
                src="./src/img/certs/primus_logo1.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="aspect-w-16 aspect-h-9">
              <img class="object-cover"
                src="./src/img/certs/apeamlogo1.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="">
              <img class="object-cover"
                src="./src/img/certs/globalgap_logo1.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="aspect-w-16 aspect-h-9">
              <img class="object-cover"
                src="./src/img/certs/fairtrade_logo1.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="aspect-w-16 aspect-h-9">
              <img class="object-cover"
                src="./src/img/certs/senasicalogo1.png" alt=""/>
            </div>
          </div>
          <div class="flex-none w-1/3 mr-4 md:pb-4 ">
            <div class="aspect-w-16 aspect-h-9">
              <img class="object-cover"
                src="./src/img/certs/afmlogo1.png" alt=""/>
            </div>
          </div>
      </section>
    </div>

    <!---->
    <div id="growersinfo" class="bg-white">&nbsp;</div>
    <!-- -->
    <section class="bg-white border-b py-8 px-2">
      
      <div class="container max-w-7xl mx-auto m-8">
        <h2 class="w-full my-6 text-3xl lg:text-5xl font-bold leading-normal text-center text-gray-800">
          <?= __('Growers / Exporters') ?>
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full sm:w-1/2 p-4 lg:p-6">
            <h3 class="text-2xl lg:text-4xl text-gray-800 font-bold leading-normal mb-6">
              <?= __('Are you a farmer, packer or exporter in Mexico and looking for a business alliance?') ?></h3>
            <p class="text-gray-600 mb-8 text-xl lg:text-2xl">
              <?= __('House of Avocado is your strategic partner to promote imports from agricultural producers from Mexico throughout the United States.') ?> <br><br> <?= __('We understand the unique flavors and quality that Mexican avocados, Persian lemon and mango offer, and we are here to help you
    to showcase these qualities to American consumers.') ?>
              <br />
              <br />
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6">
            <img src="./src/img/avosgrowers3.jpg" alt="">
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <img src="./src/img/imgs4blogs_290322_1.jpg" alt="" class="w-full  mx-auto">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-2xl lg:text-4xl text-gray-800 font-bold leading-normal mb-3">
                  <?= __('Are you a farmer and/or packer and are you looking for new options or starting a new path in exporting?') ?>
        
              </h3>
              <p class="text-gray-600 mb-8 text-xl lg:text-2xl">
                  <?= __('We are not anonymous, we are here to establish strong business relationships. If you are looking for a genuine business alliance, count on us.') ?>
                <br>
                <br>
                  <?= __('We not only provide you with the names of our business partners who will receive your product, but We also give you the opportunity to interact directly with them. At House of Avocado, transparency and authenticity are our hallmark.') ?>
                <br>
                <br>
                  <?= __('With House of Avocado, you can be sure that your avocados, limes and mangoes will be in the hands of eager consumers when they are at their freshest and most delicious.') ?>
                  
                <br />
                <br />
                
              </p>
            </div>
          </div>
        </div>
        <div class="w-full  p-6">
              <div class="mr-4 text-left">
                <a aria-label="Chat on WhatsApp" href="https://wa.me/+524521287338">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <?= __('Chat with an Assistant') ?>
                    </button>
                </a>    
              </div>
            </div>
      </div>
      
    </section>
    <section class="bg-gray-100 border-b py-8">
      <div class="container  mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          <?= __('Products') ?></h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 px-6 py-6">
                <?= __('Avocado') ?>
              </div>
              <div class="w-full px-6">
                <img src="./src/img/avos1.jpg" alt="" class="object-contain">
              </div>
              <div class="w-full px-6 py-6 mb-5">
                <p class="text-gray-800 text-base text-xl lg:text-2xl">
                  <?= __('Mexican avocado, particularly the Hass variety, is a culinary and nutritional gem.
                  It is an essential ingredient in a balanced diet.') ?>
                  <br><br> 
                  <?= __('With <strong>House of Avocado</strong>, you have access to the freshness and quality of top-notch Mexican avocado.') ?> 
                </p>
              </div>
            </a>
          </div>
          <div class="hidden flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 py-6 px-6">
                <?= __('Persian Lemon') ?>
              </div>
              <div class="w-full px-6">
                <img src="./src/img/lime2.jpg" alt="" class="object-contain">
              </div>
              <div class="w-full px-6 py-6 mb-5">
                <p class="text-gray-800 text-base text-xl lg:text-2xl">
                  <?= __('Persian lemon is a citrus gem with unmatched benefits. Its juice is a flavor enhancer in dishes and drinks, and its fresh aroma adds vitality.') ?>
                  <br><br>
                  <?= __('<strong>House of Avocado</strong> offers fresh, quality Mexican lemons to elevate your culinary creations.') ?>
                </p>
              </div>
            </a>
          </div>
          <div class="hidden flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 px-6 py-6">
                Mango
              </div>
              <div class="w-full px-6">
                <img src="./src/img/mango1.jpg" alt="" class="object-contain">
              </div>
              <div class="w-full px-6 py-6 mb-5">
                <p class="text-gray-800 text-base text-xl lg:text-2xl">
                  <?= __('The Mexican mango is a tropical treasure. Its natural sweetness makes it a delicious snack option or versatile ingredient in sweet and savory dishes.') ?>
                  <br><br> <?= __('<strong>House of Avocado</strong> gives you access to fresh, quality Mexican mangoes to enjoy their exquisite flavor and nutritional benefits.') ?></p>
              </div>
            </a>
          </div>
          <div class="hidden flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing -->
    <section class="bg-gray-100 py-8 hidden">
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Pricing
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Free
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                £0
                <span class="text-base">for one user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
              <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-base font-bold">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-4xl font-bold text-center">
                £x.99
                <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
            <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Pro
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                £x.99
                <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Sign Up
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f1f1f4">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-8 px-2 mb-12">
      <h2 class="w-full my-2 text-3xl lg:text-5xl font-bold leading-tight text-center text-white">
        <?= __('Maximize Your Market Reach') ?></h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 lg:text-3xl text-2xl leading-tight">
        <?= __('Partner with us to explore new opportunities and expand your reach in the US market.') ?>
      </h3>
      <button class="hidden mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Action!
      </button>
    </section>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <!---->
    <div class="bg-white py-8 px-2">
      <section class="container mx-auto text-center py-12 bg-white">
        <div class="w-full my-2 text-2xl lg:text-4xl/relaxed font-bold leading-normal text-center text-hoa-green-800 ">
          <div class="flex align-middle justify-center">
            <img src="./src/img/usamap2.png" alt="">
          </div>  
        </div>
      </section>
    </div>
    <!---->
    <div id="importersinfo" class="bg-white">&nbsp;</div>
    <!---->
    <div class="bg-white py-8">
      <div class="container max-w-7xl mx-auto m-8">
        <h2 class="w-full my-6 text-3xl lg:text-5xl font-bold leading-normal text-center text-gray-800">
        <?= __('Importers / Distributors') ?>
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 p-6">
            <h3 class="text-2xl lg:text-4xl text-gray-800 font-bold leading-normal mb-6">
              <?= __('Do you distribute avocados or limes in the USA or Canada and load in the Rio Grande Valley every week?') ?>
            </h3>
            <p class="text-gray-600 mb-8 text-xl lg:text-2xl">
              <?= __('We take advantage of the Pharr Bridge, a main gateway for Mexican products, to ensure that your avocados are consistently available in the United States. This strategic location guarantees fast and reliable access to US markets.') ?>
              <br />
              <br />
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6">
              <img src="./src/img/trailer1.jpg" alt="">
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
              <img src="./src/img/export1.jpg" alt="">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-2xl lg:text-3xl text-gray-800 font-bold leading-normal mb-6">
                <?= __('Is avocado one of your main products but you don&apos;t purchase full loads in McAllen?') ?>
                
              </h3>
              <p class="text-gray-600 mb-8 text-xl lg:text-2xl">
                <?= __('We offer LTL (Less Than Truckload) services in some US cities, including Los Angeles, San Francisco, San Diego, Bronx, Philadelphia, Miami, Tampa, Phoenix, Las Vegas. However, we can explore new options for you; please contact us.') ?>
                <br />
                <br />
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="bg-white py-8 px-2">
      <section class="container mx-auto text-center py-12 mb-12 bg-white">
        <div class="w-full my-2  leading-normal text-center">
          <div class="flex align-middle justify-center">
            <img src="./src/img/calendario2esp.png" alt="">
          </div>
        </div>
      </section>
    </div>
    <!---->
    <div class="bg-white py-8 px-2">
      <section class="container mx-auto text-center py-12 mb-12 bg-white">
        <h2 class="w-full my-2 text-2xl lg:text-4xl/relaxed font-bold leading-normal text-center text-hoa-green-800 ">
          <?= __('Our team has extensive experience in the avocado import industry, ensuring that your products are handled with care and expertise.') ?></h2>
      </section>
    </div>
    <!---->
    <section class="bg-white border-b py-8 px-2">
      
      <div class="container max-w-7xl mx-auto m-8" id="growersinfo">
        <h2 class="w-full my-6 text-3xl lg:text-5xl font-bold leading-normal text-center text-gray-800">
          <?= __('About Us') ?>
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-2xl text-xl leading-relaxed">
              <?= __('We embarked on this journey in July 2020, right in the midst of Covid-19. We decided to establish this company in the United States. For nearly 2.5 years since the inception of CDA, we were based in California.') ?>
               <br><br>
              <?= __('However, throughout that time, the primary point of sale was always the Rio Grande Valley, specifically the city of Pharr.') ?> 
              <br />
              <br />
          </p>
          </div>
          <div class="w-full sm:w-1/3 p-6 hidden md:block">
            <img src="" alt="">
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/3 p-6 mt-6 hidden md:block">
            &nbsp;
          </div>
          <div class="w-full sm:w-2/3 p-6 mt-6">
            <div class="align-middle">
              <p class="text-gray-600 mb-8 lg:text-2xl text-xl leading-relaxed text-right">
                  <?= __('As such, at the beginning of 2023, we relocated to Pharr, TX. We redefined our business as a massive volume importer, focusing on distributors who come to replenish their produce in the Rio Grande Valley.') ?>
                   <br><br>
                   <?= __('We also serve those who may not have the time to coordinate logistics, offering both FTL and LTL delivery services.') ?>
                <br />
                <br />
            </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-2xl leading-relaxed text-xl">
              <?= __('Throughout this journey, we&apos;ve learned that price, no matter how low, or the brevity of the supply chain between the field and the customer, or even quality, mean nothing without service and relationships.') ?>
               <br><br>
               <?= __('That&apos;s why, when we talk about a new negotiation, it&apos;s not just a sale or a purchase for us; it&apos;s the beginning of a friendship. In our house, you&apos;re family.') ?>  
              <br />
              <br />
          </p>
          </div>
          
            <div class="w-full  p-6">
              <div class="mr-4 text-right">
                <a href="aboutus.php">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <?= __('More About Us') ?>
                    </button>
                </a>    
              </div>
            </div>
          
        </div>
      </div>
    </section>
    <!-- // -->
    <div id="salesteam" class="bg-white">&nbsp;</div>
    <!---->
    <section class="bg-gray-100 border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        <?= __('Contact Us') ?>
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <!-- CONTACT CARD 1 -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div  class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-3xl text-gray-800 px-6 py-6 text-center">
                <?= __('Sales') ?>
              </div>
              <!-- -->
              <div class="w-full">
                <div class="flex flex-col md:flex-row">
                  <div class="md:w-2/5 w-full p-6 mt-6">
                    <img src="./src/img/arturo3.png" alt="Arturo Larios" class="mx-auto md:max-w-[100%] max-w-[70%]">
                  </div>
                  <div class="md:w-3/5 w-full p-6 mt-6 text-gray-800">
                    <ul class="flex flex-col">
                      <li class="text-xl pb-2">
                        <p class="font-bold">Arturo Larios</p>
                      </li>
                      <li class="py-4">
                        <p class=""><a href="tel:+19255585243">(925)-558-5243</a></p>
                      </li>
                      <li class="py-2 block md:hidden">
                        <p><a href="mailto:Arturo@casadelaguacate.com">Artur@houseavocado.com</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!---->
            </div>
          </div>
                 <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow px-6">
                  <div class="flex items-center justify-center hidden md:block">
                    <p class="text-gray-800 my-4 text-center"><a href="mailto:Artur@houseavocado.com">Artur@houseavocado.com</a></p>
                  </div>
                 <div class="flex items-center flex-wrap justify-around lg:justify-end">
                  <div class="mr-4 flex block lg:hidden">
                  <a aria-label="Chat on WhatsApp" href="https://wa.me/+19255585243">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Chat on WhatsApp
                  </button>
                  </a>
                  </div>
                  <div class="mr-4">
                    <a href="tel:+19255585243">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <?= __('Call') ?>
                        </button>
                    </a>
                    
                  </div>
                  <div class="">
                    <a href="mailto:Artur@houseavocado.com">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Email
                          </button>
                    </a>
                  </div>
                
            </div>
          </div>
        </div>
        <!-- CONTACT CARD 2 -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div  class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-3xl text-gray-800 px-6 py-6 text-center">
              <?= __('Sales') ?>
              </div>
              <!-- -->
              <div class="w-full">
                <div class="flex flex-col md:flex-row">
                  <div class="md:w-2/5 w-full p-6 mt-6">
                    <img src="./src/img/paulette1.png" alt="Paulette House of Avocado Sales" class="mx-auto md:max-w-[100%] max-w-[70%]">
                  </div>
                  <div class="md:w-3/5 w-full p-6 mt-6 text-gray-800">
                    <ul class="flex flex-col">
                      <li class="text-xl pb-2">
                        <p class="font-bold">Paulette</p>
                      </li>
                      <li class="py-4">
                        <p class=""><a href="tel:+18057961694">(805)-796-1694</a></p>
                      </li>
                      <li class="py-2 block md:hidden">
                        <p><a href="mailto:paulette@casadelaguacate.com">paulette@casadelaguacate.com</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!---->
            </div>
          </div>
                 <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow px-6">
                  <div class="flex items-center justify-center hidden md:block">
                    <p class="text-gray-800 my-4 text-center"><a href="mailto:paulette@casadelaguacate.com">paulette@casadelaguacate.com</a></p>
                  </div>
                 <div class="flex items-center justify-end">
                  <div class="mr-4">
                    <a href="tel:+18057961694">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      <?= __('Call') ?>
                        </button>
                    </a>
                    
                  </div>
                  <div class="">
                    <a href="mailto:paulette@casadelaguacate.com">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Email
                          </button>
                    </a>
                  </div>
                
            </div>
          </div>
        </div>
         <!-- CONTACT CARD 3 -->
         <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div  class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-3xl text-gray-800 px-6 py-6 text-center">
              <?= __('Sales') ?>
              </div>
              <!-- -->
              <div class="w-full">
                <div class="flex flex-col md:flex-row">
                  <div class="md:w-2/5 w-full p-6 mt-6">
                    <img src="./src/img/memo1.png" alt="Guillermo" class="mx-auto md:max-w-[100%] max-w-[70%]">
                  </div>
                  <div class="md:w-3/5 w-full p-6 mt-6 text-gray-800">
                    <ul class="flex flex-col">
                      <li class="text-xl pb-2">
                        <p class="font-bold">Guillermo</p>
                      </li>
                      <li class="py-4">
                        <p class=""><a href="tel:+524434920041">(443)-492-0041</a></p>
                      </li>
                      <li class="py-2 block md:hidden">
                        <p><a href="mailto:guillermo@houseavocado.com">guillermo@houseavocado.com</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!---->
            </div>
          </div>
                 <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow px-6">
                  <div class="flex items-center justify-center hidden md:block">
                    <p class="text-gray-800 my-4 text-center"><a href="mailto:guillermo@houseavocado.com">guillermo@houseavocado.com</a></p>
                  </div>
                 <div class="flex items-center justify-end">
                  <div class="mr-4">
                    <a href="tel:+524434920041">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      <?= __('Call') ?>
                        </button>
                    </a>
                    
                  </div>
                  <div class="">
                    <a href="mailto:guillermo@houseavocado.com">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Email
                          </button>
                    </a>
                  </div>
                
            </div>
          </div>
        </div>
        <!-- CONTACT CARD 4 -->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 flex flex-col">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div  class="flex flex-wrap no-underline hover:no-underline">
              <p class="hidden w-full text-gray-600 text-xs md:text-sm px-6">
                xGETTING STARTED
              </p>
              <div class="w-full font-bold text-3xl text-gray-800 px-6 py-6 text-center">
              <?= __('Purchases') ?>
              </div>
              <!-- -->
              <div class="w-full">
                <div class="flex flex-col md:flex-row">
                  <div class="md:w-2/5 w-full p-6 mt-6">
                    <img src="./src/img/jorge1.png" alt="Jorge Manzo" class="mx-auto md:max-w-[100%] max-w-[70%]">
                  </div>
                  <div class="md:w-3/5 w-full p-6 mt-6 text-gray-800">
                    <ul class="flex flex-col">
                      <li class="text-xl pb-2">
                        <p class="font-bold">Jorge Manzo</p>
                      </li>
                      <li class="py-4">
                        <p class=""><a href="tel:+524521287338">(452)-128-7338</a></p>
                      </li>
                      <li class="py-2 block md:hidden">
                        <p><a href="mailto:jorge.manzo@casadelaguacate.com">jorge.manzo@casadelaguacate.com</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!---->
            </div>
          </div>
                 <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow px-6">
                  <div class="flex items-center justify-center hidden md:block">
                    <p class="text-gray-800 my-4 text-center"><a href="mailto:jorge.manzo@casadelaguacate.com">jorge.manzo@casadelaguacate.com</a></p>
                  </div>
                 <div class="flex items-center flex-wrap justify-around lg:justify-end">
                 <div class="mr-4 flex block lg:hidden">
                    <a aria-label="Chat on WhatsApp" href="https://wa.me/+524521287338">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Chat on WhatsApp
                        </button>
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="tel:+524521287338">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      <?= __('Call') ?>
                        </button>
                    </a>
                    
                  </div>
                  <div class="">
                    <a href="mailto:jorge.manzo@casadelaguacate.com">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Email
                          </button>
                    </a>
                  </div>
                
            </div>
          </div>
        </div>
        <!-- -->
      </div>
    </section>
    <!-- -->
    <section class="bg-white border-b py-8 px-2">
      
      <div class="container max-w-7xl mx-auto m-8">
        <h2 class="w-full my-6 text-3xl lg:text-5xl font-bold leading-normal text-center text-gray-800">
          <?= __('Find us') ?>
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full mb-4 px-6 py-3">
        <h2 class="mx-auto font-bold text-gray-800 text-2xl lg:text-3xl">We are located in:</h2>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap py-6 align-center justify-around">
          <div class="lg:w-1/3 w-full px-3 py-6">
            <ul>
              <li>
                <p class="text-gray-800 text-2xl">9801 S Keystone Dr,</p>
              </li>
              <li>
                <p class="text-gray-800">Pharr, TX 78577,</p>
              </li>
              <li>
                <p class="text-gray-800">United States</p>
              </li>
              <li>
                <a href="https://maps.app.goo.gl/89xP4fniVFV4Gmft8" target="_blank">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Get Directions</button>
                </a>
              </li>
              <li>
              <iframe class=" top-0 left-0 w-full h-full"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.8571442790517!2d-98.21939013898374!3d26.10358156818838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86650be33f60ca15%3A0xf3916e72b53de148!2sKeystone%20Cold%20LLC!5e0!3m2!1sen!2smx!4v1697759156377!5m2!1sen!2smx"
              frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
              </li>
            </ul>
          </div>
          <div class="lg:w-2/3 w-full lg:w-[50%]">
            <img src="./src/img/keystonecold1.jpg" alt="Keystone Cold LLC">
          </div>
        </div>
      </div>
    </section>
    
    <!--Footer-->
    <footer class="bg-hoa-green-800">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black align-middle justify-around">
            <a class="no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              <img src="./src/img/HoA_logo_white.svg" alt="" class="max-w-[50%]">  
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0 hidden">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6" id="dosdiv">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0 hidden">
                <a href="#" class="no-underline hover:underline text-gray-800 ">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="aboutus.php" class="no-underline hover:underline text-gray-800 ">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#salesteam" class="no-underline hover:underline text-gray-800 ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container mx-auto text-center">
        <small class="text-gray-300">This website is made with &hearts; by <a class="underline" href="https://linktr.ee/kozmo_">Kozmo</a> &copy; 2023</small>
      </div>
       
      <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500"></a>
    </footer>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list */
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8 */
/* 
      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      } */
    </script>
   

  </body>
</html>
