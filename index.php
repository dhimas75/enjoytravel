<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Enjoy when travel to indonesia">
        <meta name="keywords" content="explore, enjoy, travel, indonesia">
        <meta name="author" content="Enjoy travel">

        <title>Enjoy travel - Refresh your life</title>

        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php
    session_start();
    if($_SESSION['status'] != "login"){
        header("location:signin.php?pesan=belum_login");
    }
    ?>

        <div id="app" class="hidden">
            <nav class="main_nav fixed w-full bg-transparent py-1 z-40">
                <div class="container mx-auto px-8 sm:px-14">
                    <div class="flex justify-between">
                        <div class="flex content-center">
                            <a href="#" class="link_nav_detail text-white flex content-center space-x-2">
                                <img src="images/logo.png" class="w-1/6 hidden md:flex">
                                <h1 class="flex self-center text-white text-xl link_nav_logo">ENJOY TRAVEL</h1>
                            </a>
                        </div>
                        <div class="flex content-center space-x-3 sm:space-x-10 self-center">
                            <a href="destination/index.php" class="link_nav_detail text-white">Destination</a>
                            <a href="about.php" class="link_nav_detail text-white">About</a>
                            <a href="contact.php" class="link_nav_detail text-white">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div style="background-image: url('images/bag\ pulau\ seribu\ in\ nusa\ penida\ bali.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="flex h-screen w-full" >
                <div class="bg-black bg-opacity-50 flex h-screen w-full">
                    <div class="flex content-center container mx-auto px-8 sm:px-14">
                        <div class="w-full sm:w-1/2 flex self-center flex-col">
                            <h1 class="text-6xl mb-5 text-white"><span class="text-indigo-500">Refresh</span> your life with travel to indonesia</h1>
                            <div class="flex">
                                <!-- <a href="destination/index.php" class="py-3 px-7 outline-none rounded-full mt-8 bg-transparent border-2 border-indigo-500 text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white focus:ring ring-indigo-400">Explore all destination</a> -->
                                <a href="destination/index.php" class="py-3 px-7 outline-none rounded-full mt-8 bg-indigo-500 text-white focus:outline-none focus:ring ring-indigo-400">Explore all destination</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-8 sm:px-14 mb-20 mx-auto w-full h-full flex flex-col sm:flex-row py-20">
                <div class="w-full sm:w-1/2 flex flex-col pr-10">
                    <img src="images/Labuan Bajo 2.jpeg" class="w-9/12 rounded-2xl flex self-start shadow-2xl">
                    <img src="images/Labuan Bajo.jpeg" class="w-9/12 rounded-2xl flex self-end shadow-2xl -mt-32">
                </div>
                <div class="w-full sm:w-1/2 pt-20">
                    <h1 class="text-3xl mb-5">Destination <span class="text-indigo-500">favorite</span></h1>
                    <p>One of the most favorite destination in Indonesia is LABUAN BAJO. Labuan Bajo is located in Lombok Island, There are numerous snorkling points in the islands close to Labuan Bajo. Kanawa and Seraya Islands, for example, offer good diving and snorkeling sites. Be carefull for the scenery YOU WILL BE STUNNED</p>
                    <div class="flex">
                        <a href="destination/Labuan_Bajo.php" class="bg-indigo-500 py-3 px-7 focus:outline-none rounded-md mt-8 text-white focus:ring ring-indigo-400">Explore</a>
                    </div>
                </div>
            </div>


            <div class="container px-8 sm:px-14 mb-20 mx-auto w-full h-full">
                <div class="flex justify-center my-12">
                    <h1 class="text-3xl">Destination Highlight</h1>
                </div>
                <div class="flex flex-wrap justify-between space-y-3">
                    <!-- <div class="w-auto h-full flex justify-between flex-col sm:flex-row mb-5">
                    </div> -->
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Dieng.php">
                            <img src="images/Dieng.jpeg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Dieng</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Labuan_Bajo.php">
                            <img src="images/Labuan Bajo.jpeg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Labuan Bajo</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Bali.php">
                            <img src="images/bali.jpeg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Bali</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Danau_Toba.php">
                            <img src="images/danau toba.jpeg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Danau Toba</h1>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="w-auto h-full flex justify-between flex-col sm:flex-row">
                    </div> -->
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Taman_Laut_Bunaken.php">
                            <img src="images/bunaken.jpeg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Taman Laut Bunaken</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Bromo.php">
                            <img src="images/bromo.jpg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Bromo</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Raja_Ampat.php">
                            <img src="images/Raja-Ampat-Wayag-Diving.jpg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Raja Ampat</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                        <a href="destination/Borobudur.php">
                            <img src="images/Borobudur.jpg" class="w-full h-full z-10">
                            <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                                <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                    <h1 class="text-center my-3">Borobudur</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="container px-8 sm:px-14 mx-auto w-full h-screen hidden" id="search_result">
                <div class="flex justify-start my-12">
                    <h1 class="text-3xl">Result</h1>
                </div>

            </div>

            <div class="h-screen">
                <div class="flex flex-col-reverse sm:flex-row justify-between h-full container mx-auto py-28 px-8 sm:px-14 -mb-20 sm:-mb-0">
                    <div class="z-30 w-full sm:w-2/5 h-4/5 flex self-center justify-center">
                        <div class="rounded-2xl bg-white shadow-2xl p-5 sm:-mr-14">
                            <h1 class="text-3xl py-8">We have top <span class="text-indigo-500">Destination</span></h1>
                            <p>Our top destination is RAJA AMPAT. You want to spend time in one of the most beautiful beach in Indonesia? Then visit RAJA AMPAT. There is a fascinating under sea ecosystem that you can dive or snorkling, BBQ party in the beach, and there is lot of spot that waiting for you to come visit.</p>
                            <div class="flex">
                                <a href="destination/Raja_Ampat.php" class="bg-indigo-500 py-3 px-7 focus:outline-none rounded-md mt-8 text-white focus:ring ring-indigo-400">Explore</a>
                            </div>
                        </div>
                    </div>
                    <div class="z-20 w-full sm:w-3/5 flex justify-center mb-1 sm:mb-0">
                        <div class="bg-white p-1 w-11/12 shadow-2xl overflow-hidden flex flex-wrap rounded-3xl -left-16">
                            <img src="images/Raja-Ampat-Wayag-Diving.jpg" class="w-full rounded-3xl">
                        </div>
                    </div>
                </div>
                <div class="flex relative h-screen w-full -top-96 justify-center">
                    <div class="w-11/12 -top-44 h-2/3 absolute bg-gray-200 rounded-2xl z-0 transform -rotate-1">
                        <div class="my-72"></div>
                    </div>
                    <div class="w-11/12 -top-44 h-2/3 absolute bg-gradient-to-r from-indigo-400 to-indigo-500 rounded-2xl z-10 transform -rotate-2">
                        <div class="my-72"></div>
                    </div>
                </div>
            </div>

            <div class="container px-8 sm:px-14 py-20 flex flex-col-reverse sm:flex-row justify-between mx-auto">
                <div class="w-full sm:w-7/12 flex flex-col self-center pt-5 sm:pt-0">
                    <svg width="45" height="36" class="mb-5 fill-current text-indigo-200"><path d="M13.415.001C6.07 5.185.887 13.681.887 23.041c0 7.632 4.608 12.096 9.936 12.096 5.04 0 8.784-4.032 8.784-8.784 0-4.752-3.312-8.208-7.632-8.208-.864 0-2.016.144-2.304.288.72-4.896 5.328-10.656 9.936-13.536L13.415.001zm24.768 0c-7.2 5.184-12.384 13.68-12.384 23.04 0 7.632 4.608 12.096 9.936 12.096 4.896 0 8.784-4.032 8.784-8.784 0-4.752-3.456-8.208-7.776-8.208-.864 0-1.872.144-2.16.288.72-4.896 5.184-10.656 9.792-13.536L38.183.001z"></path></svg>
                    <h1 class="text-3xl sm:text-5xl">Indonesia is so <span class="text-indigo-500">amazing</span> for me. in first time to indonesia i feel like in heaven</h1>
                    <h1 class="text-xl sm:text-3xl pt-10">~ Stevan wiliie</h1>
                </div>
                <div class="w-full sm:w-4/12 flex justify-center self-center">
                    <img src="images/pexels-andrea-piacquadio-842548.jpg" class="h-4/5 object-cover w-full rounded-2xl mb-1 sm:rounded-tl-none sm:rounded-bl-none sm:mb-0 sm:rounded-br-3xl sm:rounded-tr-3xl shadow-2xl">
                </div>
            </div>

            <div class="h-screen">
                <div class="flex justify-center h-full container mx-auto py-28 px-8 sm:px-14 -mb-20 sm:-mb-0">
                    <div class="z-30 w-full h-4/5 flex self-center">
                        <div class="rounded-2xl bg-white shadow-2xl p-5 flex flex-col self-center">
                            <h1 class="text-3xl py-8">Want to get news <span class="text-indigo-500">information</span>?</h1>
                            <p>Do you like to receive more info? We will send you more info via Email, info about new destination and more. Make sure to subscribe our website! So you dont miss our attractive and interesting info.</p>
                            <div class="w-full bg-green-300 px-5 py-3 text-white rounded-md mt-5 hidden" id="alert">
                                <div class="flex justify-between">
                                    <h1>E-mail subscribe success! we will send the news every week to your mail!</h1>
                                    <button class="bg-transparent text-white text-lg" id="close_alert">x</button>
                                </div>
                            </div>
                            <div class="flex w-full flex-col sm:flex-row justify-center my-5">
                                <div class="w-10/12 flex flex-col">
                                    <input type="email" class="px-7 py-3 rounded-md text-lg shadow-lg  focus:outline-none z-40 border-2 border-gray-200 w-full focus:ring ring-indigo-400" placeholder="Enter your E-mail" id="subscribe_mail" required>
                                    <small class="pl-7 text-red-500" id="error_mail_subs"></small>
                                </div>
                                <div class="w-2/12 flex self-start justify-start mt-3 sm:mt-0">
                                    <button class="sm:ml-2 mt-1 bg-indigo-500 px-7 py-3 focus:outline-none rounded-md text-white focus:ring ring-indigo-400" id="subs_button" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex relative h-screen w-full -top-96 justify-center">
                    <div class="w-11/12 -top-44 h-2/3 absolute bg-gray-200 rounded-2xl z-0 transform -rotate-1">
                        <div class="my-72"></div>
                    </div>
                    <div class="w-11/12 -top-44 h-2/3 absolute bg-gradient-to-r from-indigo-400 to-indigo-500 rounded-2xl z-10 transform -rotate-2">
                        <div class="my-72"></div>
                    </div>
                </div>
            </div>
            
            <footer class="w-full bg-gray-800">
                <div class="flex content-center justify-center py-10">
                    <h1 class="text-white">Copyright &copy; Liza - all right reversed </h1>
                </div>
            </footer>
        </div>

        <div id="loading" class="h-screen w-screen flex justify-center flex-col">
            <h1 class="text-7xl hidden sm:flex self-center"><span class="text-indigo-500">Wait</span>&nbsp;and enjoy..</h1>
            <div class="w-1/12 flex self-center">
                <img src="images/Pulse-1.8s-177px.gif">
            </div>
        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>