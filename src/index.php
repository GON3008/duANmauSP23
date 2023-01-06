<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<!-- <style>
    .absolutes{
        position: relative;
    }
    .relations{
        position: absolute;
        left: 50px;
        top: 10px;
    }
</style> -->

<body>
    <div class="border rounded-md bg-neutral-200 ">
        <div id="onScroll" class="stick w-full sticky inset-0 bg-neutral-100 border border-neutral-200 py-5">
            <div class=" container mx-auto md:flex justify-between">
                <div class="flex gap-1">
                    <img class="w-14 h-14" src="image/NFT Logo PNG Vector (EPS) Free Download.png" alt="">
                    <h1 class="pt-3 font-bold text-cyan-500 text-xl">ONLINE NFT</h1>
                </div>
                <label class="text-black pt-2">
                    <button class="cursor-pointer absolute" id="btn-search">
                        <svg id="search" class="  w-6 h-6 pt-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                    <input type="text" name="" class="text-center py-1 bg-white rounded-lg border border-gray-300 px-6" placeholder="search">
                </label>
                <div class="justify-between font-medium">
                    <ul class="flex">
                        <li class="hover:border hover:rounded-lg hover:border-cyan-500 hover:bg-cyan-500 m-2 mb-4 px-4 py-2"><a href="#">Explore</a>
                            <ul class=" bg-slate-50  absolute px-8 hidden" style="top: 14%;">
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">All NFT</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Art</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Game</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Music</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Photography</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Video</a></li>
                                <li class="hover:border hover: rounded-md hover:bg-slate-300 mb-4"><a href="#">Event</a></li>
                            </ul>
                        </li>
                        <li class="hover:border hover:rounded-lg hover:border-cyan-500 hover:bg-cyan-500 m-2 mb-4 px-4 py-2"><a href="#">Stats</a></li>
                        <ul class="bg-slate-50 absolute px-8 hidden" style="top:14%;margin-left: 90px;">
                            <li class=" hover:border hover:rounded-md hover:bg-slate-300 mb-4"><a href="#">Ranking</a></li>
                            <li class=" hover:border hover:rounded-md hover:bg-slate-300 mb-4"><a href="#">Latest Transactions</a></li>
                        </ul>
                        <li class="hover:border hover:rounded-lg hover:border-cyan-500 hover:bg-cyan-500 m-2 mb-4 px-4 py-2"><a href="#">Resources</a></li>
                        <ul class="bg-slate-50 absolute px-8 hidden" style="top:14% ; margin-left: 170px;">
                            <li class="hover:border hover:rounded-md hover:bg-slate-300 mb-4"><a href="#">Help Center</a></li>
                            <li class="hover:border hover:rounded-md hover:bg-slate-300 mb-4"><a href="#">New Campaign</a></li>
                        </ul>
                        <li class="hover:border hover:rounded-lg hover:border-cyan-500 hover:bg-cyan-500 m-2 mb-4 px-4 py-2"><a href="#">Create</a></li>
                    </ul>
                </div>
                <button class="">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>

                </button>
                <button>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </button>
                <button>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                    </svg>

                </button>
            </div>

            <script>
                window.onscroll = function() {
                    myFunction()
                };

                var scroller = document.getElementById("onScroll");
                var stick = scroller.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > stick) {
                        scroller.classList.add("stick");
                    } else {
                        scroller.classList.remove("stick");
                    }

                }
            </script>
        </div>
        <div class="container mx-auto">
            <div class=" flex  justify-between">
                <div class=" pt-20 absolutes">
                    <img class="" style="width: 280px; height: 380px;" src="image/bg_nft.png" alt="">
                    <!-- <div class="relations flex">
            <img class="" src="image/bg_nft1.png" alt="">
            <img class="" src="image/bg_nft1.png" alt="">
            </div> -->
                </div>
                <div class="pt-20">
                    <div class="font-bold text-4xl flex gap-2">
                        <h2>DO </h2>
                        <h3 class="text-cyan-500">Creative & Earn </h3>
                    </div>
                    <div class="font-medium text-xl">
                        <ul class="list-disc">
                            <li class="m-5">Where millions of NFT ideas to be born</li>
                        </ul>
                        <ul class="list-disc">
                            <li class="m-5">Where not only to satisfy your creative passion but also to earn money</li>
                        </ul>
                        <ul class="list-disc">
                            <li class="m-5">Where the attraction of NFTs shows by the number of users participating every day</li>
                        </ul>
                        <ul class="list-disc">
                            <li class="m-5">The birthplace of quality KOLs in the NFTs market</li>
                        </ul>
                    </div>
                    <div class="flex gap-8">
                        <button class="border rounded-full bg-cyan-400 px-6 py-4 text-white font-medium text-lg">Create NFTs</button>
                        <button class="border border-cyan-400 rounded-full bg-slate-50 px-4 py-4 text-cyan-400 font-medium text-lg">Explore Event</button>
                    </div>
                    <div class="pt-6">
                        <button class="flex text-cyan-400 font-medium">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                            </svg>
                            Learn more about OpenLive NFT
                        </button>
                    </div>
                </div>
            </div>
            <div class="pt-8">
                <img class="w-full" src="https://openlivenft.io/static/media/banner-hello-section.5dc4bbbccb5f5c2448db.png" alt="">
            </div>
            <h4 class="font-bold text-4xl py-4">Hot Auctions</h4>
            <div class="flex">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                </button>
                <ul class="flex gap-4 text-center">
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-1.d7177fc1720af111bc0d.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-2.6a82748cc39ccd1dc64c.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-3.e1cd348e1593d8665733.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"><img src="https://openlivenft.io/static/media/hot-4.d2278a1181b317932f6e.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                </ul>

                <ul id="" class="flex gap-4 text-center hidden">
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-1.d7177fc1720af111bc0d.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-2.6a82748cc39ccd1dc64c.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-3.e1cd348e1593d8665733.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"><img src="https://openlivenft.io/static/media/hot-4.d2278a1181b317932f6e.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                </ul>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </button>
            </div>
        </div>
    </div>
</body>
<script src="onscroll.js"></script>

</html>