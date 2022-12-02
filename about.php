<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy when travel to indonesia">
    <meta name="keywords" content="explore, enjoy, travel, indonesia">

    <title>About - Enjoy travel</title>

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
    <div id="app" class="hidden">
        <nav class="main_nav fixed w-full bg-transparent py-1 z-50">
            <div class="container mx-auto px-8 sm:px-14">
                <div class="flex justify-between">
                    <div class="flex content-center">
                        <a href="index.php" class="link_nav_detail text-white flex content-center space-x-2">
                            <img src="images/logo.png" class="w-1/6 hidden md:flex">
                            <h1 class="flex self-center text-white text-xl link_nav_logo">ENJOY TRAVEL</h1>
                        </a>
                    </div>
                    <div class="flex content-center space-x-3 sm:space-x-10 self-center">
                        <a href="destination/index.php" class="link_nav_detail text-white">Destination</a>
                        <a href="#" class="link_nav_detail text-white border-b-2 border-indigo-500">About</a>
                        <a href="contact.php" class="link_nav_detail text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <div style="background-image: url('images/bag\ raja\ ampat.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="h-screen w-screen bg-black bg-opacity-50">
                <div class="flex container px-8 sm:px-14 mx-auto h-screen w-screen">
                    <div class="w-full sm:w-7/12 flex flex-col self-center">
                        <h1 class="text-6xl mb-5 text-white">The more you <span class="text-indigo-500">know</span> the more you <span class="text-indigo-500">understand!</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col container px-8 sm:px-14 mx-auto justify-center py-20">
            <div class="flex">
                <h1 class="text-3xl mb-4 border-b-2 border-indigo-500">About Us</h1>
            </div>
            <h2>We are Enjoy Travel that present about travel destination in Indonesia. We are willing to attract tourism to visit indonesia and we provide info about travel destination in Indonesia so tourism can Choose where is the suitable place for them to visit.</h2>
            <div class="flex">
                <a href="contact.php" class="py-3 px-7 outline-none rounded-full my-6 bg-transparent border-2 border-indigo-500 text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white focus:ring ring-indigo-400">Contact us</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>