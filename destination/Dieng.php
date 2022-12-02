<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enjoy when travel to indonesia">
    <meta name="keywords" content="explore, enjoy, travel, indonesia">

    <title>Dieng - Enjoy travel</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
     
    <link href="../tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="app" class="hidden">
        <nav class="main_nav fixed w-full bg-transparent py-1 z-50">
            <div class="container mx-auto px-14">
                <div class="flex justify-between">
                    <div class="flex content-center">
                        <a href="../index.php" class="link_nav_detail text-white flex content-center space-x-2">
                            <img src="../images/logo.png" class="w-1/6 hidden md:flex">
                            <h1 class="flex self-center text-white text-xl link_nav_logo">ENJOY TRAVEL</h1>
                        </a>
                    </div>
                    <div class="flex content-center space-x-3 sm:space-x-10 self-center">
                        <a href="index.php" class="link_nav_detail text-white">Destination</a>
                        <a href="../about.php" class="link_nav_detail text-white px-3">About</a>
                        <a href="../contact.php" class="link_nav_detail text-white">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="h-screen w-screen">
            <img src="../images/bag dieng.jpg" class="w-full h-full">
        </div>

        <div class="container mx-auto px-14 h-screen py-20 flex">
            <div class="w-1/2 pr-4 flex flex-col self-center">
                <div class="flex">
                    <h1 class="text-3xl mb-3 border-b-2 border-indigo-500">Dieng</h1>
                </div>
                <p>Dataran Tinggi Dieng berlokasi di Jawa Tengah, Dataran Tinggi Dieng merupakan kawasan kaldera yang dikelilingi oleh gunung-gunung, dengan aktifitas vulkanis di bawah datarannya yang masih aktif hingga saat ini. Berada di ketinggian 2.000 mdl, kawasan wisata ini mernawarkan udara yang dingin serta bebas dari polusi perkotaan, pemandangan alam yang menakjubkan dan keunikan budaya. Banyak hal menarik yang dapat dilihat dan dinikmati di kawasan ini, mulai dari telaga multi- warna, sumber air panas, kawah, dan kompleks candi Hindu kuno.</p>
                <div class="flex">
                    <a href="https://google.com/search?q=dieng" class="py-3 px-7 outline-none rounded-full mt-8 bg-transparent border-2 border-indigo-500 text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white focus:ring ring-indigo-400" target="_blank">More detail on google</a>
                </div>
            </div>
            <div class="w-1/2 flex self-center">
                <img src="../images/Dieng.jpeg" class="w-full rounded-md">
            </div>
        </div>
    </div>
    <div id="loading" class="h-screen w-screen flex justify-center flex-col">
        <h1 class="text-7xl flex self-center"><span class="text-indigo-500">Wait</span>&nbsp;and enjoy..</h1>
        <div class="w-1/12 flex self-center">
            <img src="../images/Pulse-1.8s-177px.gif">
        </div>
    </div>

    <footer class="w-full bg-gray-800">
        <div class="flex content-center justify-center py-10">
            <h1 class="text-white">Copyright &copy; Liza - all right reversed </h1>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../script.js"></script>
</body>
</html>