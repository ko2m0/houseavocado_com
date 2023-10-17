<?php require 'lang.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      House of Avocado :: 
    </title>
    <meta name="description" content="Tu Socio de Confianza en las Importaciones de Aguacate Mexicano" />
    <meta name="keywords" content="" />
    <meta name="author" content="Ko2m0" />
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
            <a class="">
              <i class="fa fa-map-marker"></i>
              Keystone Cold, Pharr, TX
            </a>
          </li>
          <li class="mr-4">
            <i class="fa fa-phone"></i>
            (925)-558-5243
          </li>
          <li class="mr-4">
            <i class="fa-brands fa-linkedin "></i>
          </li>
         </ul>
        </div>
       </div>
        <div class="pl-4 flex-1 items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl hidden lg:block" href="index.php" x-cloak>
            <!-- Logo Big -->
            <img src="./src/img/HoA_logo_color.svg" alt="" class="max-w-[70%] md:max-w-[90%] lg:max-w-[70%]">
          </a>
          <!-- Logo SMall -->
          <a href="index.php" class="lg:hidden block">
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
              <a class="inline-block py-2 px-4 text-black no-underline" href="#growersinfo" @click="openMenu = !openMenu"><?= __('Growers/Exporters') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#importersinfo" @click="openMenu = !openMenu"><?= __('Importers/Distributors') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#salesteam" @click="openMenu = !openMenu" ><?= __('Contact Us') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="aboutus.php" @click="openMenu = !openMenu" ><?= __('About Us') ?></a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="aboutus.php?lang=en" data-reload>ENG</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="aboutus.php?lang=es" data-reload>ESP</a>
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
    <div class="pt-32">
      <div class="container px-3 mx-auto flex flex-wrap flex-col-reverse md:flex-row items-center">
        <!---->
        <div class="w-full py-24">
        <h1 class="text-7xl font-bold py-12 text-center"><?= __('About Us') ?></h1>
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
    
    <!-- -->
    <section class="bg-white border-b py-8 px-2">
      <div class="container max-w-5xl mx-auto m-8">
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed">
              <?= __('Like every entrepreneur, we&apos;ve experienced ups and downs, sometimes more downs than ups.') ?>
              <br><br>
              <?= __('However, giving up is not in our DNA. We&apos;ve learned from our mistakes and strive to be better in the next season.') ?> 
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
              <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed text-right">
                  <?= __('Throughout this journey, we&apos;ve learned that price, no matter how low, or the brevity of the supply chain between the field and the customer, or even quality, mean nothing without service and relationships.') ?>
                <br><br>
            </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed">
              <?= __('That&apos;s why, when we talk about a new negotiation, it&apos;s not just a sale or a purchase for us; it&apos;s the beginning of a friendship. In our house, you&apos;re family.') ?>
              <br><br>
              
          </p>
          </div>
          <div class="w-full sm:w-1/3 p-6 hidden md:block">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Our Mission -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#ffffff">
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
    <section class="container mx-auto text-center py-8 px-2">
      <h2 class="my-4 lg:text-4xl text-2xl leading-loose">
        <?= __('Our Mission is to provide the highest quality fresh produce to our customers while ensuring fair compensation for our farmers.') ?>
        <br>
        <br>
        <?= __('We distinguish ourselves through our friendly and humble approach, fostering strong and lasting relationships with both our customers and collaborators.') ?>
      </h2>
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
    <!-- -->
    <section class="bg-white border-b py-8 px-2">
      <div class="container max-w-5xl mx-auto m-8">
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed">
                <strong>
              <?= __('What we&apos;ve learned during this time:') ?>
              </strong>
               <br><br>
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
              <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed text-right">
                  <?= __('No matter what happens in the exporting country, our customers require us to solve their fruit needs; the business can&apos;t stop.') ?>
                   <br><br>
            </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed">
              <?= __('It&apos;s better to acknowledge and rectify an error than to deny it.') ?>
               <br><br>
              
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
              <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed text-right">
                  <?= __('Honesty and friendship are what our customers and suppliers value most.') ?>
                   <br><br>
            </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap py-6">
          <div class="w-full md:w-2/3 p-4 lg:p-6">
            <p class="text-gray-600 mb-8 lg:text-3xl leading-relaxed">
              <?= __('Price is nothing without quality, quality is nothing without compliance, compliance is nothing without quality, and vice versa.') ?>
               <br><br>
              
          </p>
          </div>
          <div class="w-full sm:w-1/3 p-6 hidden md:block">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Our Vision -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#ffffff">
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
    <section class="container mx-auto text-center py-8 px-2">
      <h2 class="my-4 lg:text-4xl text-2xl leading-loose">
        <?= __('Our Vision is to be leaders in the produce industry in America, providing quality, transparency, and lasting relationships to both our customers and suppliers, ensuring our consistency and relationships endure over time.') ?>
        </h2>
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
    <!-- -->
    <!-- -->
    <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          <?= __('Our Values') ?></h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 ">
            <h2 class="text-5xl  leading-tight text-center text-gray-800"><?= __('Loyalty') ?></h2>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 ">
            <h2 class="text-5xl  leading-tight text-center text-gray-800"><?= __('Commitment') ?></h2>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 ">
            <h2 class="text-5xl  leading-tight text-center text-gray-800"><?= __('Humility') ?></h2>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Change the colour #f8fafc to match the previous section colour -->
    
    
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
                 <div class="flex items-center justify-end">
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
                    <img src="./src/img/paulette1.png" alt="Paulette" class="mx-auto md:max-w-[100%] max-w-[70%]">
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
                    <img src="./src/img/memo1.png" alt="Arturo Larios" class="mx-auto md:max-w-[100%] max-w-[70%]">
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
        <!-- CONTACT CARD 3 -->
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
                    <img src="./src/img/jorge1.png" alt="Arturo Larios" class="mx-auto md:max-w-[100%] max-w-[70%]">
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
                 <div class="flex items-center justify-end">
                  <div class="mr-4">
                    <a href="tel:+524521287338">
                      <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      <?= __('Call') ?>
                        </button>
                    </a>
                    
                  </div>
                  <div class="">
                    <a href="mailto:Arturo@casadelaguacate.com">
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
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0 hidden">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-300 md:mb-6" id="dosdiv">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container mx-auto text-center">
        <small class="text-gray-300">This website is made with &hearts; by Kozmo &copy; 2023</small>
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
