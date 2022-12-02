<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy when travel to indonesia">
    <meta name="keywords" content="explore, enjoy, travel, indonesia">

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <title>Destination - Enjoy travel</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
     
    <link href="../tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="app" class="hidden">
        <nav class="main_nav fixed w-full bg-transparent py-1 z-50">
            <div class="container mx-auto px-10 sm:px-14">
                <div class="flex justify-between">
                    <div class="flex content-center">
                        <a href="../index.php" class="link_nav_detail text-white flex content-center space-x-2">
                            <img src="../images/logo.png" class="w-1/6 hidden md:flex">
                            <h1 class="flex self-center text-white text-xl link_nav_logo">ENJOY TRAVEL</h1>
                        </a>
                    </div>
                    <div class="flex content-center space-x-3 sm:space-x-10 self-center">
                        <a href="#" class="link_nav_detail text-white border-b-2 border-indigo-500">Destination</a>
                        <a href="../about.php" class="link_nav_detail text-white">About</a>
                        <a href="../contact.php" class="link_nav_detail text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <div style="background-image: url('../images/bag\ bromo.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="flex h-screen w-full ">
            <div class="flex h-screen w-full bg-black bg-opacity-50 ">
                <div class="flex content-center container mx-auto px-10 sm:px-14">
                    <div class="w-full sm:w-1/2 flex self-center flex-col">
                        <h1 class="text-6xl mb-5 text-white">The <span class="text-indigo-500">destination</span> you are looking for is here!</h1>
                        <h1 class="text-white">Feel The Exotic Indonesia, VISIT INDONESIA</h1>
                        <div class="flex">
                            <a href="../index.php" class="py-3 px-7 outline-none rounded-full mt-8 bg-indigo-500 text-white focus:outline-none focus:ring ring-indigo-400">Home</a>
                            <!-- <a href="../index.php" class="py-3 px-7 outline-none rounded-full mt-8 bg-transparent border-2 border-indigo-500 text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white focus:ring ring-indigo-400 mt-8">Home</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-10 sm:px-14 mb-20 mx-auto w-full h-full">
            <div class="flex justify-center my-12">
                <h1 class="text-4xl">All destination</h1>
            </div>
            <div class="flex flex-wrap justify-between space-y-3">
                <!-- <div class="w-auto h-full flex justify-between flex-col sm:flex-row mb-5">
                </div> -->
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Dieng.php">
                        <img src="../images/Dieng.jpeg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Dieng</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Labuan_Bajo.php">
                        <img src="../images/Labuan Bajo.jpeg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Labuan Bajo</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Bali.php">
                        <img src="../images/bali.jpeg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Bali</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Danau_Toba.php">
                        <img src="../images/danau toba.jpeg" class="w-full h-full z-10">
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
                    <a href="Taman_Laut_Bunaken.php">
                        <img src="../images/bunaken.jpeg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Taman Laut Bunaken</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Bromo.php">
                        <img src="../images/bromo.jpg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Bromo</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Raja_Ampat.php">
                        <img src="../images/Raja-Ampat-Wayag-Diving.jpg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Raja Ampat</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="percent_24 min-h-full shadow-2xl rounded-lg overflow-hidden">
                    <a href="Borobudur.php">
                        <img src="../images/Borobudur.jpg" class="w-full h-full z-10">
                        <div class="-mt-12 h-12 w-full flex content-center justify-center z-20">
                            <div class="flex flex-col self-center bg-gray-200 bg-opacity-50 w-full h-full">
                                <h1 class="text-center my-3">Borobudur</h1>
                            </div>
                        </div>
                    </a>
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
            <img src="../images/Pulse-1.8s-177px.gif">
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>