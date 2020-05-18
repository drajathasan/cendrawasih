<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2020-05-06 18:50:20
 * @modify date 2020-05-06 18:50:42
 * @desc [description]
 */

// Main menu
$menu = [
    [
        'label' => 'Home',
        'url' => '/',
        'icon' => 'text-3xl mdi mdi-home-circle-outline'
    ],
    [
        'label' => 'Information',
        'url' => '/#',
        'icon' => 'text-3xl mdi mdi-information-outline'
    ],
    [
        'label' => 'News',
        'url' => '/#',
        'icon' => 'text-3xl mdi mdi-newspaper-variant-outline'
    ],
    [
        'label' => 'Help',
        'url' => '/#',
        'icon' => 'text-3xl mdi mdi-help-circle-outline'
    ],
    [
        'label' => 'Librarian',
        'url' => '/#',
        'icon' => 'text-3xl mdi mdi-account-tie-outline'
    ],
    [
        'label' => 'Memberarea',
        'url' => '/#',
        'icon' => 'text-3xl mdi mdi-account-group-outline'
    ]
]

?>
<!DOCTYPE Html>
<html>
    <head>
        <title>Cendrawasih</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/tailwind.min.css" rel="stylesheet"></link>
        <link href="assets/css/materialdesignicons.min.css" rel="stylesheet"></link>
    </head>
    <body class="bg-gray-300">
        <div class="flex flex-row">
            <div class="w-2/12 text-gray-700 p-3 text-left h-auto bg-white">
                <div class="w-full">
                    <svg class="inline-block fill-current text-blue-500 h-8 w-8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 118.4 135" style="enable-background:new 0 0 118.4 135;" xml:space="preserve">
                        <path d="M118.3,98.3l0-62.3l0-0.2c-0.1-1.6-1-3-2.3-3.9c-0.1,0-0.1-0.1-0.2-0.1L61.9,0.8c-1.7-1-3.9-1-5.4-0.1l-54,31.1
                        l-0.4,0.2C0.9,33,0.1,34.4,0,36c0,0.1,0,0.2,0,0.3l0,62.4l0,0.3c0.1,1.6,1,3,2.3,3.9c0.1,0.1,0.2,0.1,0.2,0.2l53.9,31.1l0.3,0.2
                        c0.8,0.4,1.6,0.6,2.4,0.6c0.8,0,1.5-0.2,2.2-0.5l53.9-31.1c0.3-0.1,0.6-0.3,0.9-0.5c1.2-0.9,2-2.3,2.1-3.7c0-0.1,0-0.3,0-0.4
                        C118.4,98.6,118.3,98.5,118.3,98.3z M114.4,98.8c0,0.3-0.2,0.7-0.5,0.9c-0.1,0.1-0.2,0.1-0.2,0.1l-20.6,11.9L59.2,92.1l-33.9,19.6
                        L4.6,99.7l0,0l0,0C4.2,99.5,4,99.2,4,98.8l0-62.5l0,0l0-0.1c0-0.4,0.2-0.7,0.5-0.9l20.8-12l33.9,19.6l33.9-19.6l20.6,11.9l0.1,0
                        c0.3,0.2,0.5,0.5,0.6,0.9l0,62.3L114.4,98.8L114.4,98.8z M95.3,68.6v39.4L23.1,66.4V26.9L95.3,68.6z"></path>
                    </svg>
                    <div class="inline-block font-semibold">
                        <div class="header">
                            <h1 class="text-lg uppercase">Senayan</h1>
                            <h2 class="text-xs">Open Source Library Management System</h2>
                        </div>
                        <div class="menu mt-5">
                            <ul>
                                <?php
                                foreach ($menu as $listmenu) {
                                    echo '<li class="flex flex-row hover:bg-blue-500 hover:text-white cursor-pointer text-center rounded rounded-xl">
                                          <span class="ml-5 block '.$listmenu['icon'].'"></span> 
                                          <span class="block py-3 px-2">'.$listmenu['label'].'</span>
                                          </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-6/12 text-gray-700 ml-1 bg-white">
                <div class="p-3 w-full">
                    <h3 class="font-semibold">OPAC</h3>
                </div>
                <div class="p-3">
                    <div class="flex flex-row">
                        <h3 class="text-3xl mdi mdi-search-web"></h3>
                        <input type="text" class="ppearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" placeholder="Enter keyword to search collection..."/>
                    </div>
                    <div class="flex flex-row">
                        <div class="w-6/12">
                            <span class="block">Search By : </span>
                            <a href="#" title="All"><i class="py-2 text-2xl mdi mdi-all-inclusive"></i></a>
                            <a href="#" title="Author"><i class="py-2 text-2xl mdi mdi-account-edit-outline"></i></a>
                            <a href="#" title="Subject"><i class="py-2 text-2xl mdi mdi-text-subject"></i></a>
                            <a href="#" title="ISBN/ISSN"><i class="py-2 text-2xl mdi mdi-numeric"></i></a>
                            <a href="#"><i class="py-2 text-2xl mdi mdi-slash-forward"></i> <span class="rounded-full p-2 hover:bg-blue-500 hover:text-white">Advance Search</span></a>
                        </div>
                        <div class="w-6/12">
                            <button class="float-right mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Search
                            </button>
                        </div>
                    </div>
                    <div class="w-full h-1 mt-3 bg-gray-300"></div>
                    <div>
                        <h1 class="text-3xl font-semibold py-3 px-2 block">Welcome to Our Library</h1>
                        <p class="block">We have many types of collections in our library, range from Fictions to Sciences Material, from printed material to digital collections such CD-ROM, CD, VCD and DVD. We also collect daily serials publications such as newspaper and also monthly serials such as magazines.</p>
                        <br/>
                        <span>This list on below is your latest search keyword : </span>
                        <ul class="w-full block">
                            <!-- <li class="flex flex-row mt-2">
                                <div class="img w-2/12">
                                    <img src="assets/images/book.png" class="h-32 w-full"/>                                    
                                </div>
                                <div class="ml-3 w-9/12">
                                    <h3 class="text-2xl font-semibold">Buku</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                            </li>
                            <li class="flex flex-row mt-2">
                                <div class="img w-2/12">
                                    <img src="assets/images/book.png" class="h-32 w-full"/>                                    
                                </div>
                                <div class="ml-3 w-9/12">
                                    <h3 class="text-2xl font-semibold">Buku</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-4/12 text-gray-700 ml-1 bg-white">
            </div>
        </div>
    </body>
</html>