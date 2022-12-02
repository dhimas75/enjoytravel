<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy when travel to indonesia">
    <meta name="keywords" content="explore, enjoy, travel, indonesia">

    <title>Contact - Enjoy travel</title>

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
                        <a href="destination/index.php" class="link_nav">Destination</a>
                        <a href="about.php" class="link_nav">About</a>
                        <a href="#" class="link_nav border-b-2 border-indigo-500">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="flex container px-14 mx-auto h-screen w-screen">
            <div class="w-full sm:w-1/2 flex flex-col self-center pr-5">
                <h1 class="text-6xl mb-5"><span class="text-indigo-500">Our</span> detail is here!</h1>
                <div class="flex space-x-3 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h1>service@enjoy_travel.com</h1>
                </div>
                <div class="flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <h1>0812 - 9351 - 6491</h1>
                </div>
            </div>
            <div class="w-1/2 hidden sm:flex flex-col self-center">
                <img src="images/undraw_contact_us_15o2.svg" class="w-full">
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