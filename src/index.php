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

<body class="bg-white">
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
                <button onclick="moveSlide(-1)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                </button>
                <ul class="flex gap-4 text-center slide">
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-1.d7177fc1720af111bc0d.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-2.6a82748cc39ccd1dc64c.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-3.e1cd348e1593d8665733.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"><img src="https://openlivenft.io/static/media/hot-4.d2278a1181b317932f6e.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                </ul>

                <ul class="flex gap-4 text-center slide">
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-1.d7177fc1720af111bc0d.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-2.6a82748cc39ccd1dc64c.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"> <img src="https://openlivenft.io/static/media/hot-3.e1cd348e1593d8665733.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                    <li class="hover:border hover:rounded-md hover:bg-stone-50"><img src="https://openlivenft.io/static/media/hot-4.d2278a1181b317932f6e.png?resize=medium" alt="">Alexandra <p class=" font-bold">Colorful Born Head</p>
                    </li>
                </ul>
                <button onclick="moveSlide(1)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </button>
            </div>
            <div class="Collections">
                <h4 class="text-4xl font-bold py-14">Hot Collections</h4>
                <div class="flex">
                    <button onclick="moveSlider(-1)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>

                    </button>
                    <ul class="flex slider gap-4">
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/bb1beb4b-5d3c-4805-9bdf-28d1174e335f.jpeg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/ccf60867-75c9-4e3e-878b-f2cb80748593.jpeg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img class="h-[278px] w-[450px] " src="https://abcdefapi.openlivenft.io/storage/ba07afcb-a18e-4cc4-bdc0-2849f65b4131.jpeg?resize=medium?resize=medium" alt=""></a></li>
                    </ul>

                    <ul class="flex slider gap-4">
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/511e9b72-04ec-454e-9a44-30029240dcfd.jpeg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/3e33c675-2045-4d66-a487-45eec0daf98f.jpeg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img class="h-[278px] w-[450px] " src="https://abcdefapi.openlivenft.io/storage/4c462a2b-261f-4284-81f9-25b7805216f1.jpeg?resize=medium?resize=medium" alt=""></a></li>
                    </ul>

                    <ul class="flex slider gap-4">
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/f68f2c35-c53b-4d52-8f5e-c484bb3943a6.jpeg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img src="https://abcdefapi.openlivenft.io/storage/63e58589-29bd-4292-ad77-886b561c2d4c.jpg?resize=medium?resize=medium" alt=""></a></li>
                        <li><a href="#"><img class="h-[280px]" src="https://abcdefapi.openlivenft.io/storage/553f9caf-b9e4-4dcb-b42b-9ef301198067.png?resize=medium?resize=medium" alt=""></a></li>
                    </ul>
                    <button onclick="moveSlider(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </button>
                </div>


            </div>
            <div class="">
                <h4 class="text-4xl font-bold flex gap-2 pt-14">Top
                   <p class="text-cyan-400"> Collections </p></h4>
            </div>
            <div class="Trending">
                <h4 class="font-bold text-4xl py-14">Trending NFTs</h4>
                <div class="flex">
                <button onclick="moveSlides(-1)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                        </button>
                <ul class="flex slideShow gap-4">
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/a5619357-bca3-4fef-9f69-63e5d67efe21.jpg?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/480da8be-823c-4693-b781-d0523dce4ba4.jpg?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/960c2445-5f2c-451c-926d-c9bc4b7a773b.jpg?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/f9233669-d3a6-49da-b44d-78ddc823ff83.jpg?resize=medium" alt=""></a></li>
                </ul>

                <ul class="flex gap-4 slideShow">
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/55bc8d65-9f02-4db1-bb89-9eba77281cef.png?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/a6a01e34-8cc8-43fb-9e2f-dbfe0c10b6e3.jpg?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/dec0396d-4462-43e9-b4cf-805a25a22981.jpg?resize=medium" alt=""></a></li>
                    <li><a href="#"><img class="h-[350px] w-[320px]" src="https://abcdefapi.openlivenft.io/storage/12efbbb5-7d9c-470f-ad8c-f194e96a3cb0.png?resize=medium" alt=""></a></li>
                </ul>

                <button onclick="moveSlides(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </button>
                </div>
            </div>
            <div class="Brand">
                <h4 class="text-4xl font-bold py-12">Hot Brands</h4>
                <div class="">

                </div>
            </div>
        </div>
        <footer>
            <div class="bg-slate-200 py-6">
            <h5 class="text-4xl font-bold text-cyan-500 text-center">DESIGN LIFE BY YOUR WAY!</h5>
            </div>
<div class="bg-blue-50">
        <div class=" grid grid-cols-2">
        <div class="flex gap-1">
                    <img class="w-14 h-14" src="image/NFT Logo PNG Vector (EPS) Free Download.png" alt="">
                    <h1 class="pt-3 font-bold text-cyan-500 text-xl">ONLINE NFT</h1>
                </div>
        <h6 class="font-medium text-xl">Join Newsletter</h6>
        <p class="py-3">Subscribe our newsletter to get more information by chain</p>
        <div class="flex gap-2 pt-2">
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQHSURBVHgB7ZvJT1NRFMbPfbS1VGkEB+IQrVGTYly4EeJGxSHqyujaRNZGgzuntUZ3DP4BVl1LXOGCBOKCBBIjiQgaIRYiEjAMtkALLX3e75aHVct03qWYvv6STi8d7vfOOffc+zVP0AKBpq9bPV7fbVOIU0TmacoPulJC1PVf2BnKPChwF2weDqSE0WpK7ZSfhBNmqjp8aVcYLwzc5blgEHBLjchmvDAONw/X5Llgi4DL56vFE4OMolpyCMJMz1UGmeYxcgziNO4NciAF0U6hINopFEQ7hYJop+Ci/4A9xUV0fV8xnS/3yufpOPRGktQxPkehwRgNxeazfibb8dXAFl1V5lGDskvNfh/dD27553iF36VuV/d4qbF/mkIDscXfvbLbK5+ZdLc7ShxYov1uQS+Ob1WDaeybJi63Dm2mWwc30/K/ZdCDYAlVlXqoapuHSlyCIkmTLrePERdWTWMAAAPGwDkggisJzuRc+SYlGNz58FOmdkqlOAeW6GDJ7wThCl+LYItIIkWvhuLqpLee3E6VpW7ioGUigwAMADW2msmlQp40TpSQ6sgQ0NA3RU3f48SBFelswjDBvJR1fn1/8Yqfryixd64h+Gn/DHFhie6YSGQ9juhh0mk9uU1FxKrBbO/j0mhTMGBHerl2BVGPj/rp3dkd6hEnIFMot7+mP5siu7Dz7NHnKXp9omzF90GwVYdR2Wqw6LAWIBy+2ThhFqxfR9Qw+Ief1rY4QLpXlrltpbcOWKKvyhUR6hatozeapFwyFN+g9EZNIlq5jhj69NBGpXfLj1lVn7lGV1axREcSJj0L22sbHFpGZ0kH7Gk0NDiT83recNGI9o33kzkT3iO7hY4eDWw5JxjE5fZxueuJrLv40IC+crK94XgiV1wKM734WGrpaQcsSLibi2zYFt0TTaj19npix6jIhm1jEDaODttoKfDdOqMMtLihd7sjWtbEfwNbCN+tGy2iMaGdeTum9rk6xT/sjWqbsTPR6ntjnwvx1zonlK1jBzvOyEpoN/sxe8O1tLaTHBo0GAXLoc3sh9iagE/52Ny2hRqG4OcLHvd6sWbRldILgyQIg1EX3FJER/xutU+2Q08kQfc+RtU+fb1Zs+hO2UJuHvTJ9C2mvRq2lrmKbias9Ea9YZKplCYCPG+OePTfltE5OeHFcr5NZdc0WklTLK7Ew/M6t9MrbWD3orngz6hrtLG0P5aQa/R5ahmJa3FAuIjDb0Zy7wZsIF8ulovCn/JOoSDaKRREO4WCaKfgVNGijZyCoC48GKZwjugUiTo8GkmPq15uDcKU/4Sti9KMcHXppGGmqvNcuLoYzXrxh6+Da7TIMGrlvxV5cQWPSWYbyfJNzszUh68cmLSO/wIW65aNWZK3fAAAAABJRU5ErkJggg==" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQfSURBVHgB7ZtPSBRRHMd/b9zddGU3lVLKwA2TXOhQhAYdSimpTqF3wa6V2E2he3TUiM5KnRO6GGQoHaLykFBkUdIEmmj4h9Vcc7ed3ndqdXebPzvzZlfYmc9hZ2f2zTjf937ze9/3k2H0j8jo16pAefCWwth5IqWNSoPpFGODs5dqRzIPMnw0jy1EUkyaULh2Kk3khJJql68ckrEj4aPEBYOIn2tENGNHahpb6ClxwWkivmCwD18kksr6yCUw5W+ukkhRTpJrYG34lMiFeKLdgifaLXii3YIn2i24UrSPCsSRijJqDvnU7auVbfq4njRsX8/bddTuo7n4b5rhbef5tlA4KvpMTYAuHAxQR105F7EbRMPyJt35tGF4bm9jJXXVl+/sQ/TrlQSNft/i221yEtb0dFEhQaJhH90+HqLWGr/m77FEit5wAdGwP6szwEwsSetJRT2O0dYC5/a/jzky+p8v1zFh0bjRRy1VujfsFOi49hfLageJANHCiQxhWWjBIOyXqPdYJTmBkGiIzXwOC01PQ9CRDhYSjVEuNndPhEgU26KLPcppMENgKhTBtui9GOU0XYfFOtuW6LCf8bl4H+0ViLCQj5FdbIm+yJ2TyB8VBZkc7s0utkXnA+xkvm4qxudfK+07BfKJrYyAZGIE/HP31Cp3UCl1H27rwakqiuokIK32D1uqVd+uR1QgmVkeaQg2C+2Bd7EdAQDfr79d022fKTjdfoDbTiMQ4nq21wzLos16WPXZq4n/jkOI1koL4ZwpOA38tpnltDvalkWb9a7RjcYS1nwzOtCIaKhIIx32GZ8C06IX/rkrLKA3WriOmeVsLtZIa914LloLAxzTEqG3kOhpqCAz9vvtTZuWuyofw4+FASJifOmXuo8pzsiyqiu18jK1YIAowfn5JCm7i4+ClYsg0oo3t9peBK8amg+ilQsnMcvuelgW/SGWMPwdz3E/NydzAvUsWNJ7Xzbo8XzcsN1c3J5oy880nJKRRcQUBA/dPbXGk5OkJjEUDlEUDOtMZarv5p0JowJTgvN7IkG1qqoHOvXGtL7LM8J2YfBmY5CuRSoNLenp5z+yHge0zZyX8RtCdH5rd8SQkZ+crdG9LjpoWP5JI9/ith41FAZtZ+/7s5vqFIPpppX78dyRR2jm3hT2tSxqJijzPlvc4pk8e54WFZuJI3VvjArCGCGJkcQNXn25rOmp8wFFiolzB9TrIuTHl7Y1O9EOjtS9c4Fja60OqFEgAswJvLrZv4OsIhTeemB0R+NiggESWqHwzIlb8ES7BU+0W/BEuwVPtFvgotkkuQVG09hICnOP6BSxQWylZMA3xJfrMpU+cvqlNElur16TlFR7iQtXX0ZL72TVZPCOFklSHylUEm/wKKRMEn98k5ubQ3Ln0Z2C2h8F2Z6edoNWLwAAAABJRU5ErkJggg==" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOcSURBVHgB7ZtNTBNBFMffLAVqgUJ7gCgk1ghJJTGBAyZ4kUaNehHljAlnDeINP65C9AbixxXEqyJe8GAi8YABD5JABCPEJaESjRbaQkH7sc6buqYiCezsR5Od/SXsspsmO/997/3n7bRL4A+Bkc8VRW7PNYWQEwBKC9iD6QwhfYtnKodyTxLcBMdWAhkivVaodrAnclLJhORz+2U8kHBjc8FIoJBqxGzGA6lubKXD5oJVAi6Ppwv/kUAq6AJBIErWqyRQlAYQBtKCWwkExBEtCo5oUXBEi4IjWhSEFO0CHZS5CJyuckO125p7F95Kw2QkCeHNNOiBW3RnbQl0HPQw4VYzsLgBAwsbwAt3iOZiKcgHyzTKr779BD1oFt1W7YabwVJ24fMTP9ggrOJDLAmX3q3CciINDxvLofNwCfCgWTSmNP49b/YBrjbhIObi5kf9aXiTXmuNXfPFcT+cqixmAeBBs+hgWdYG6r2F8KSpgg2idSICQ0sJMIt7C+twYzbOromCq/cVsPPqXiu6bBcvOkojfrKyCHrm19ngjCSWUqB7Jgr3FxPMOIfpTTbCOHVNWYi3UIJHjRV/HTVOB3orWAZ6Qa+4Mh1l9XvnqBfaDvCl8k7oFq2CpoJR6KURn1pNwoOGcqjhTL/JyC+4PhsDLB0soSM0rY3E0K5CNbhYUsm6LIezD8oJZliYQWYIRgxvpXIN7sLbCIvaXrk9H4fej+vs5o02+7mNajdM6R9xsCgcnR6jtpuzo2G1T63C46VN6gelrA8wE8NqejtZ4T5mcOjs0WQGrtb+LwZLAEsBSwI/f8xvfDpvxzTRKmrXhM4+H0/DXerE6rSDXV33TAxqPHiDyk1L5+1Y8niEwtHNsb7V1hXn9Mvvo/QprZhF2CrBiOmRVkFx9V4/tNMaxw4O53NsOHj7Zz1YuoigGly916XrgUEvlkVaBYUPN/kgnzhrZKLgiN4LYQtXSnaDd9VGs2i961NGMqWhr89Fs+hB2kfjHJtvsF/HFpcHjvTOsKehfIKCe+ZibCw8cBnZSHgLQm++wzO6WGclKBZb2Vbayo584S8zUvfyq+5cte4bDr7I5vLpbBUxpCMzYjBW4szTouCIFgVHtCg4okXBES0Kooom4yAKBKZxJylEHNEZIH24l1JFrn76zZIM9kdWX0qT5JBvTVIyIZsLZy+jqQf//GoF39ECSeoCBWzxBo8CyjjQ8k0lEv3yxUNr6vnfALBXQxBqcCEAAAAASUVORK5CYII=" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIhSURBVHgB7ZtNSyMxGMf/iW3pVraseygs3UOXfcHDHvbkHtcugnjUT+BdpB4Fz4JH/Qh+Ao8iIoo3PRUEFUEcQREFXwv1pXVinuqgYhUFkxnmye+QmYRcfpPJw5OECNxRmNr6lEpnhpQQ/wDViXhQ9oUY3+zOTT5sFFS0T+8VfCHnlXZHPPFqyi96PV88qkgqYi5MFJLakf5mqsif03v9MRcOKCQymRK9SMiWEpgg1G2sklDqD9ggOqmUYIiT5oKT5oKT5kICIfL1Qws6PqeQT99/+90LH7vn1zir+Vir1GGCUKT/atHB761aOPliv18zBzCBdenBH60N4TCxOqe7cqnQhQmr0iPtHxEFrEnTPM7rwBUFrM3pjrbng9aOjtbDK2eNaF2pK5jGmvRLozy6XsHycQ22iERyMndwBZuELk2JiG1c7s0Ft+B4Lza6c6/uS1G9Wf/Z/UsMlE9hgsiO9LqhFRYRWelVjtIVvZ42RWSl1wyOtJFAttMk4cgmJbIJ8ar+tGtiMgc3Iv1/8fBJ29jvLPry6SftlJE1628Sl5xwwUlzwUlzwUlzwUlzwUlzwe2RmWRyu4qlo6vGQXwALSnD2Pe2Jk2bAiY3Bt6Cm9NccNJccNJc4CotFsAFgTI9pBJ8pH2IcXrKeioxoc8dPMQfL7iUJr1i24lUfjHm4o3LaEHl0eES3dGClCUoxOIGj4JagJ6+9Wp1wuv9dhK03wBvhKJp53feswAAAABJRU5ErkJggg==" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALkSURBVHgB7ZtPT9NgHMd/z8M2YIQ5ljCjkjijGEw08SDjKAtL1KPeTfYGyLx50BfAEcQX4KJnPKLRKFfnhcQDB1mshkkghkHnNrCzj/1Vmmy4tbRW+6xPP8n652mz9NP2efp92jwEDkk9/xSPDETvMUKuA7Bp8AerKiHzpRvJQmshwcnE8mZKJfQt09zBn0gKUzPSrVMSrlCc+FwYSYU1R7ybcYWOL2/mfC5skApFo3lcoED78iAIhP1uqygwdhWEgUzjlIKABNKiEEiLgpDSIXDAcIhALhWF3NmovrwmN6HwpQ5L5X3oBWxLnxnsg2eTcX1ucCkWgrnLMb1scb0GvGP79p49P9QmfHRbOhEG3rEtPWUhlR3tB96xLd3tKhvEwvy3jbaPcK3atNiuAO/Yll4qN7puk5sMXm8fAO/Yli58bsCj9e9/lKPw/Q97UG6owDuOntOPS3Uo7iiQTfZrdZjARuOnfjKqmngv4EgaKVYU/deLBDGUB6YSEZgZjcCJw0ffnqLC131Vf2q82/kBbmBb+s7pAZi7Euu6/eLL7bZ1lHg6Ge+4r6wJXXvzTV/OJiPwYGLYNAeUtbZjsVT764zPxZWevTCkR1gr8IS4kfE9rdOY3o4r3AruP6PdGU7xvCGzK2zwUKsKTunZ1htvcac9Ou6kMdnJxww5Tnt0XDRkKPlEqrWluvRIWH9KjJm05umEs3rNxZW++76iR9vWGItpD8vNGBt0dvieS7/aOtDfsXUCOy9mgcRp391z6WLFPGVhx8YMq5canfBcesOiK4opzG08l64q/7//HXzhEIVAWhQCaVEIpEUhkHYD/EjPO65L+/KrpRXykSwt/+Ns7eT/yfiLrd74AOUSH2+eJEFDJgqBtCgE0qKgSZMVEAUCqzijjIgjrQKZxzltRkILWlqWwP9IxqA0KmVGdilTMz4X1wejGSttXSIcowWU5oGBL0bwMGAroFXfZr2+IN0+t2uU/wI5d+04edxLRAAAAABJRU5ErkJggg==" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPESURBVHgB7ZvNT9NgHMe/LWOMIeMlEaKQOCMmkkiCByDxIlOM8SIBzibcDeJN/gEM3kANZzCcJfHCBSPxQOK8kGBgB4nFiEQSBmywIZurz69YLUs71me1bus+h42Wpumnz+/lebpUwG/8s59r3R7vI1kQbgByN4qDpZQgjK/daZjW7hTo48rcpj8liG9l5o7iRErIqYB095xEGyJ9FLkw4S9njhTNtCFentscLHJhFb/L6x2mP0SIZcNwCIJ8XKtEyHI7HIPQTZ8iHEhJ2imUpJ1CSdoplKSdggsFRle9G/3nPehprEAkkULg3TbMUhDSJHrrrBsDzZWodgl/9le7ysBD3kqT3KDfi646Nzrry3WPoZHmIa+kSfR2o0cJXyNRLavRJHjIC2mj8D2N1UiBSTdXlqGvyYPBC15D0UhSxvz3Q2X09Y4piJGmCx9oqkRPQ8Wp4TslxTD9JYbJ9hrDm5LX0to2c1r4rkQSeBLaR3AngZmOOrT6jItYKN+k1eqbKXy1UCg/+7SPl+tx5fixNl/GaOAdZcJSabPVV+V9+AgjHyPYiKeUc8x01BqOsEownAAvlkjzVl8a3cfLe3izdaRsZytM0I3ihVvaTFHSgwrV87UDRJm4er5shQlbw9tsrqbzNf4TI8sRpVCpNLH2RcL0nQ0rrD+rN4sH09Kvr9dnfXFaKJSnpAO8WIud2G9WmAhF+fOZML20nN/6AbNQ/vUublsifHy+3KRNj/Qo66FT6zF0soVAP5tRUREzQtuG0mn1uZQ+zJMiueQzwVXIqLXMxg8x++2QjZKoewMoIkZDUeXYdHoa3HjaVsNdE0L/Q1qL9gaQBFXzDXZh2kKlhW7O2FUfeOFdZGixdHJCFZXkjRhqqcLQpSrkQnCHvz+r2PaMzAphwoqRtk/aAmFaZBiljRlskebp63rkWrVVbJFutkg6GM59lAlbpH0crUmPXBYZWmyR1uvHxyusCF5txLM+jxX5TNjy5CQ9p2mC8WBpT6nE1OIoVx+2nMk4WbFqlAl7wrv8rwwJ3/+wc6L1TLNp6j02N6f/GWFFq1KxtXqrwnpTU9p3k/1EQ3N1PXgWOkbY1qczCWuhlRjlevp62ap2RdiS03oSmaA8p+nm5DX2JKXapYx+Lg8N0rFFmueCKSJ6F8P4F5R+lHcKJWmnUJJ2CiVpp+BUaWEBTkHAEn2JsuAc6RSEcfoWk27XBFvtSih+JPWlNFEK1O2KcipQ5OLKy2jqxonnM/SOFkRxGDKK4g0eGfICWPomY7EJqe/irrr/F0d4mfqi0WjqAAAAAElFTkSuQmCC" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMGSURBVHgB7ZtPaxNBFMDfTP7YpE2qPUQ0BSNaiDdP9mgDFfWo92K+QI03i949t9QP0H4BPVZQsHjTXgoKVTS4QmNRRGNi02jijvNiNiQFMfN2Nwk784Puv0OX37z5896EZdAm8/D90ehY/JZg7CKAmINgsG0ztly8nFrvfsjwkN3Yy9iMPxXSHYKJ1RB2zrp6wsIbjoeACyOZiHTE3ow3fGZjLx9wYYdMOB4v4AUHHiqAJjDxd67iIMR50AY2h0cOGmKkdcFI64KR1gUjrQtGWhe0lA6DC6ZjIbgwFYXsRAgmIxwSYQZJeU7L592kY/21benA7lxXGjZUm6L9/Dfsyj+8f/z5Z+veDSRplLt5dhxunIqDl3Q3Tm9DRTpXd7ITsPahBqvv9juNogqpe/shrEJevvuulKeiLI1dd5jCDtfTMcgmaKNTWfpS6giMCrNTEaBAiPToTPjnEgOSpr7ID3BCpaA8KJIR2ouWXlbgpOwlOBanDy1pVNLE/6McaWrrIveLNVjY+gYPSgfgBZPEAChLY/LhBkxAll5VIffsi2t5agAGGuluuuWff/0FFKgBGPpUjPILW2W4Lcf8rsv0sl9GZv35WLfBmz70f1wVHF4wKwuWxTPjsnAZ3FKoLI1JvhfjGpcbzJ/nXWR4WIlRUJbGFyXC9HUWGyyfibei6xZqlUWKNIWEnGkXZXWGFZJXK8D3xoCkcYalVDduSsF/UW3Surfy7F0htq4f7FSaQEFZ+nWV9iI/KNVp67qyNDV78oMncr+MgrL0joy0VwWDG9asWs9GogqkjOzemx+wLjfnhgUKrxb3gQqbefSJPDPhLsp8agyScgnCa6e+Tba3gx36rZ8P596l9rYv5gY4gWIveyGHV6lOizDy9spx5ioNxe41zIhTMT/r6IKR1gUjrQtGWheMtC4YaV2Q0mwTdIHBNp64YPpIy99QlvHMm9Hwiqx8LQg+lvNRGrdyx8pc2LmAi7c+RnNuenbd8Rst4LwAAgLxBY8AsQly+DZrtRXr2umy8/wPt+v5DdZP2TYAAAAASUVORK5CYII=" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAN9SURBVHgB7Zs/TBNRHMe/d7SVFlooRoxCQo0aW+LAIsZFIWqMkwFnArtRHBFWB0cQ3SW62saJQROYTICFgagDxJLwJ3HgTyst0nrn+x2UYLjDynuvPe76Ga7cBQqfe+/93u/3K6dgj0jie72vOvBUV5RbgN4BZzCrKcrwwr3GsYMXFTpEx1cjmqJO6MwdziSZ07XO5P1zSTpR6eBwYSLiZY40m+lEvTy+2udw4QIRTyDQT1+oUKv64RIUfTdWqdD1NrgGpYOOKlxIRdotVKTdgiulPSgT1xt8eHut/tD1qbUd9MxsQCa2G+lmfxVkYzvpJiYd9CiQiS3XdF9LADKxpXRvi98YcVnYUjrkVfGOBTlZ4rbdskhYlrit92kS/nAjjO6maojE9skJTfUXV0OYuHkag1dqcafxFHg5MRkZjXpfJMBuQBC8nLg0lEael0rBYQe+pHKIL2chE2kFBxUUt8/4jFy6MCXfLGbw6cevI38undcxMJfG6MIWHl+sYZHbD9EIlybZoWgtosHDbx1fLj6nXs5q+/LtYR9i7P1iITF/rjBpKhKGYkF0nxe7p5J8IruNBMQhRJqEKXuKhbzgJeiRH2aE/IYnl2qECBN1XrllJcEtTSlir+RSUDTc05sirBUpFonjS1l8TeeNCL6U/Q07wCVNkdqqCqL9lnpdtAXZDa7p3WURqWlEjyu8mZN/k7ikWy32zdH5rWOPcDqvQTZc0lZT+19ZV7nhkrbqWtpxHR+ES9pKTnYLlxcu6VTOfP0VkyNbBcGU3QPZ1FrO9Dq1dY6CYsHds+Ztn+n1HciGSzq+Yl73trKU9HVbnek0L3Q5rZZAKYIgV3IyzUaa1rWZAI1ka6gBY4u7GRl9T3vYi4fNfkth+vCOqirZcKehL+d/svrZvFlHozoYrUWxDMylUAq4Cw4aSRohXujmlWKUCSGl5aPZTa5i4j3rib1ayKBUCJGmbaZnZt1Yu/8LCT9jbaFSIqxNQVPzwec1Y5oWA5Wdz7+lSy5MCG8M0jRNrGwbzTxqMFBHJbQXrWkJTLP1/5FtS4XIXw6ktID3m3lM3o5UPuFwCxVpt1CRdgtMWpmEW1AwSy+qrrhHWoMyTK9q3ucZYflSEs4nWXgoTU12hjdUXet0uLjxMFrh5K8WBj2jBVXthw5HPMGjQ58EW775TGYk2XVh//+p/wC0gyXxbYUDDAAAAABJRU5ErkJggg==" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAVkSURBVHgB7Zvfb9tUFMePvSRLMmLWInVimbQgNqmVQOJlncYDrIIJeAF1PKP1HxjlbZP2ihB92xh/wCr23Gq8DAnQ9jSJ8jJpiFZiFR5KNq3S2i0ZSdakMffr9Lo3nhv7XtsVivOR8sOxG/t7z7nnnHvcaLRNafHvg5ls/itL094nsk7TYHC3o2mXVz8amxc/1PA0fvNRqaPptyymnQYTs2V1psxPXjexoeNpwAWDUppphDdjQz9+89HMgAvmlFL5/Cze6KTvm6WEoFndWKWTZb1DiUE7jWedEshQdFIYik4KiRSdoog4OZqhiULKfoyzh5HujmcxF2xca22Lqi3L2a40tth2h5Y2WvTz2gt7Oyq04z89tigEEHv+zQM0OZqmOFmoNOnq6r+hxf/18SEtlHvPHM3TDycOxi4YnC1m6dZ7r9H5YwcoLMrujZPDwiK/rW/ScrVNy7X2Sxbpum/H87uKuX2en2GqfHhoPx0R9uOc+J75Bw1SRcm9cUEYdU6ZCbx4r2rPvziYPpy1B1kU/+mddVphgyuLsnvPvWU47yH4i983YhMMFh827XOUBe+5NP4KqSItGlYW5/DV+wguHYoaWPbGqVH6lg1wIaXZ57j4R9XZjwCKz1WQFn1mbL/zHiMPK0QNghbm7oSRst8jYIKl9VZPrMA+FaRFi1b+5fELkgXWQYDqZ6nJkczu51zbOedEQS1rSEdvI7UzTkEDCcTNlPJ09nDupWIF0X7hYYOJ2XSsiG3RisjRHHEqBS183EiLlj0RXBPzczerwoUvGQV23JZdfEAg3PgCywbwCKQ/cQqJaa+Q2iPRImWf6sgrl+8GAiSCFl4RHCF00eO4SnNH9KtptUAm797pYKPLgxGnyoqTayYTwyzJLxyWnGbHfV7MOZ4QRfHhh7R/BEkTsJYoGB7x2Z0n9P1qvcdScN1vVp6zQuNJj9fgb1XTURBiWVqeGcs4pSUsjMKiXy7HPhyDUhXAm3iaioNYRJ8TLnih0ghUvOCYa2bd2Q6Sg71q9iBELtpgwUW8GDHd+LEgRGl8h5eLlyNYV0cuupjtHX2ZRYF7ZaZqST+GPbIoqDR7rYXWUVAmXMd6dUmMCKJ65KLR5xIvVlyg+CEGwD9ZecqjuUjQOqEfsbi3GLzOHc0Fmps4RozY8w/qvn+j2i+LRfT8P/WenHud9dH6Ccc+HMNBhF7a2KS4kBYdZHTh4l+v1Jxt3l5Cbc3nLdKR3Ull9fmP7472DEpcjQlOZH1vN6ixi1mdvjy209aB+/oVHd/dfx64MfGspda9DiW64BNU7FqbWczd1PMC5eqFe8/o17X+bi1G71pbzRukRUMEd8UjAdbWsBrmJ7ohaCS40xLaxnhgVeUVrd1EUbBIi0aQmaRum8Zdfe0GBmqx0bQHAHOZWwvWDSJURMz76LqoIB3IxLJSpTEHkVhe4iErGJwU+mXLtT0Sjf4VB+nog7EM7RUYZNG9VdOatGikI8xBztx2iydu7F7aeMHZDrpk9UKpOEHTXSw+bpwaUe5B+4EYgOh//cSIs9RELEATURXlW7XobYm3dwAKF+cGHpuz6HUFnbdubzG2++O4gSeuq3knRjWI4V6Wcp5G8VFjrj73tuFcFC4cD1xoHIQVzAlVe+NuA5p6mF9x0u2k1u3mYljBIPR/InBwEwAFiP0vGEZq+zP5AMfvY+O1XN+ypwoGVyW9eRHKvd04BQj9/xm2i5LCUHRSGIpOCky0dpuSgkZ38aJbWnJEd0i7jFe9nUldYZWzSYOPyX+UpptTI091qzM14MLtH6PxjZ4bQ/iNFun6LFk0EL/gsci6TWz6tuv1K+b0G0/55/8Bt+JpG13T8u8AAAAASUVORK5CYII=" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKpSURBVHgB7ZtPTxNBFMDfDNs/LGkjGCFaojVqAgcTLspRGiHGo3wB+AKkHk08m3iEi2ebeC5HDmjkCicORrwYl4RCJBEJNV1o1x3njS5pI7Ql7Ew3O/NLdre7e2h+OzNvdubtEPhHfvnblWTafs4IeQTApiAebPqELH59MlxqvkhwN7ayl/cJ/ci4O8QTp8H8gvP0uoMnFHcxF0byCe6ItRlP6L2VvfmYCwfkLdsu4g8KtK8ImkDY31hFgbEJ0AYyhXsKGmKkdcFI64KR1gULFDE9nILxTOvflXddqLg+qEaZ9PwtGx4OJVqurR/UeyKtrHqPZ5U9344okcZqnbEIRAUl0nO8akcJ6dK5/j6YzaUhSkiXfjORhaghVfr1/SwPYAmIGlJCKlZpLOEoCiOhSmO3NHfT7roNvxzLQNVj595/u12D9/snEDahSk9fS10oaHXqu8sVOd2cGXDoghllXZbP1QZvh+7p+cxIuu3r5+r3Ex7Izh9w7Li/QQahSn/Yr4stYLTf+m9k1UyJR+eNnw1QjWnTumCkdcFI64KR1gUjrZpRPtnQC0xJq+YxT/V0QsZ8uVTpTqOkmZEULNwdOPPe5FAS3j0YFOmgsJGaa2k3bAxYuDMAszfSsHXkifkyLNnJq8nTEsZ8V9hIlV7lk3rdZDdw9jSnMKhJrd4bBw0xZo4a0gPZqy+/WmZTooCS/OmLT1XYqnqiqnfbNx/x9l3ecUXiPmyUJY1L21ygciy+SMCojW24+csEjPQYyNZ/1MUEPz6kdomAy6A0U44Sy7vHYusl5o1MF4y0LhhpXeDSZA10gcAmHigj+kj7QBbxSL2ktcQHcQ7EHydYlEadwuAhZX4h5uJiMVpw0jIXg2u0gNIiMIjFCh4GbA148/VqtSXn2e3D4PofwbDHbv4u3ggAAAAASUVORK5CYII=" alt=""></a>
            </div>
            <div class="flex gap-2 py-3 w-32">
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAUrSURBVHgB7ZtLbBtFGMe/2diu7cZOQ6EVOFKNoCJGPaSHOrfSiCLgAkq4FpEzUhVuvM6t4NYSqVwT6JXkWCQipadKTQ9UomqMaIVTxa0CIgnrJG5q42X+s53Icfbtdbb1+if5sRuv7f/MN99rYkZPyc7+eSgWT36mMfYWkXaGOoPbdcYu3X/3yHTjSYa7wWuPsnWmzGtcO3UmxapWHym+/3IRBwruOlwwyEa5RlgzDpTj1x6Nd7hgSTaSTE7giUJKzwSFBKbpvkohTRui0MDO4F6hENIVHRa6osNCKEVHKEC+HuylsUyCFtUa3VWrtLBWpVLlP1os13Zec/71gzR+LCme/7KyTRcKZSrXNGqFQEWfPXKAUhFG+Rei4jae1c9DFAZCrdXFayRjmbg4d7GwQa0QmOh0lFEm0UM3V5/Qp7/+S7lUhHLpKA1z8YP8OQbBiLFX4s+v6OH+mHjEjGJmYdq4TS/pf4cFXDnZxwchRn4TmCPDbIKbXKgRGIiZ0uM956eWtqhVgpvppzMIx2XG7ENdNNZyOqrQT6UK/bBUoVYJTHQuHSG1WqdCg6c2AsKleL8IxLzhtLBmF20Et4tgRKd1A1tYrVIQBDbT4G5AM72vaxom3ccdknRihXIwM9020RD4Jk823n4pJkQOJHvEuUbmT7/IvXddePBlfltYe8KTlaqlR/cD30VDIIR+NJDYI9KITEIRtzxFRWgCSFimH2yJXLvVPNsIdvznFVfvitQRXy7Xq4/X3N/bIonA+W9PpE3TRy9gxmd4uJq8tymO5YCCwkbNMHmx44/3jjJXouF1r57q3zODmBkj8/ULiIfZS0toPH/u1rqr5QDRjr03ZvLKUJ+hMAxGuwTLz24WLM9fPXXI9Wc7Fo3qBx/yrIHv9E5D+ekEx44sE3cuWEWxsFwRTmiUz9CAw8HCdXMrun9wU125nQzHop2uG4Sej2+tiVAEJu9v0jcnUqJDYgWKiS/vlHeO4RC/P+nMdJddhjjH5g0v7SR8wNNKwZKLv1sX/Sg8GgUDpKgzJfuKSsZ3NzgWrVY1+vw31Va4kUXgWqvrzAoPRAU7Ju9t7BlkO1zl3nN/bdMHN/6xfI3RWsSaszJTWXUZXWfFOb6MZh9uk1tcFxx2o/rJscSuLyvaPkNpy2vQIEDXsxGzMOXmu5jhKQ2FqZrNHATMnz4s1iTW6vDhmCNnhDYvQg8ysFQPc5TG4v294Ek01q3scZnhJR3F7J5/7aCj10Kw17zcUz2NQiBo4F+84kk0KqB2VD9uQPz3iifRCEFTRetWLJr4H95YdTUjsvGPRysQv706MeC5nsZInz16YKf10wycENJKiMDWDDxxnoezdJNzUsUWTlUkNWj224UpJCMXWtzhcF1PN4KtmR95qWkmHM5m+kFF1L0yacnEdxtX6bE+Yxik8WxSeHEzr92c4nrBdT1tBIR/9UavbW6NEAazhUgZahDeMAhIaOy8Pa794o7akmDgi2jJKN9YQ4Ix4HP5CfP/jqeafuxsAIj2rUeGXQgk/nm+MeeHeIidKm7yDb2K75HC18YgTG+2om/D5Pv1Rh+2X3MpZx8jKiZuxvABKELaFRbb1gKWW68AjgnC4ZmbLQBCIQ5rdr9i/740++X+M60F09xvpvvfRWGhKzosdEWHhbCKZtcpLDC6jQdFY+ERXSd2CY9KLRa5zKvXInU+RfmjNKU40r+uaPWRDhcufowmD3a1KPAbLVKUCdKoI37Bo5F2nfjyrW1tXS6Ovrouz/8PWmFT8P86ZGwAAAAASUVORK5CYII=" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAASfSURBVHgB7ZvNaxNBGMbfWZPaxiaYHhStaETFRBS82OJJC4J6KvastGdB6k3Rqwe9+fUPiJ4rnhQq6ElJPCgoRtBikMbSHpKa2C8Ts+6z7epkdvJhd6YN2f4gaXbTpPvMO+87z7xpGK0Qe/x1a0dn6LLJ2Aki8yS1B+8qjN2eOL3tAX+S4S7+dCpWYcYL09JO7UmmZFYGMmd3ZHBg4K7NBYNY0NKI2YwD48DTqZE2F+wQC4RCo3hgkLFplHwCM5drlUGmeZR8AzuJe4N8yIZov7Ah2i/4UnSA1oj+ng7q6wlSojtAiUiQerv+jXe6UKbswm9K5Us0PrNkP9YJO/Bs2iRNhAOMRmIhGtkTsh83SypXorHvCzSWXSTVfD6znWmL9FBvJ12Ph/9LrANmhH2LdtC9iTnlkdci+uaRCA3t7JQ+VyibtohCqWIfR4IGJcLyy8DA9Vviz7+ZVSpcuegnx6N2zookc7/o3pc5ShfLVCy7M6ovGrRFDvV2VZ3v7dpEj45tVSpcafW+Hu92CZ60LvR8Kk8XrItGoZIJBnju6ociDb7O2a/hgfCbh8OkCmWiEaVhq2DxfCyUaPBVzhbULKjkF97kXYOD6j+8p4tUoEz0pX1bqo4RLUS3VmTrkV2o0I10Ufo3VlMYRZSIRpQxBXlqRevW4QhdO9jt+n2Rx98X7fznQdHDe3hFSSEb2lk97cayC3a0eMSKjoEafJ2vW5yeTy+5KvupbZvpuWVgvOA50pEgs9dUHtFU2FVZWMIQteHd9XP0kxBp0N8TJK94Fp0Iuy9CLFxivjtAeD0KknrQKC2aQYHo6umH9ZgHF6niQlXiWbRYTQul6ujsqiM4XWx+KVPJum4tk7n6oiOS5UmFK/MsOitxTzyTNS4S52WFiicu8eSTrSA6KRStQ5FA1ZTHoMgMSkrIfRmyNbllIi2aiEv7q6t1UiJwfKax6ETEHelGKdEMSnIaJoIHTQN+7ZYVs0aRxtous5ypfOPBaoQS0Q++zbtyLRxYfmuYl7hkWWvkyUWX57xOdHqrQYloLFPw2rzwTyvLUX/UnZfOgNQCUe6TOC9V7SNlTQREAMLhvuC0nIjILn6X1RTE1C3WcFwyB4cBxSZEBUrXaQhFI+Di2x9/z8lsKgblodUNEZc3VOtHkvMAA6oK7S3gvhobhENWhwUC0TRAxJH3smoN7n75qSSXHbSKrrXOOpFsxpdD8P2JeVKJVhsq63JeeV+w99uNcHprqgUDrZHGhp8HbV9sO3GDycAHAfzAYCuZtvpqqNKqipYMraLFHOWdG0ThhirubCyyi+ryth7aRCOCoqOStXlQxFbTPPSCtpyWWU9U6lZAm2hxqZpc+VSyFdAmWrSazWwl14o1m9749LFVWJN2kawPvp5oE83vuFopykCb6GJ5ObKqfbMKtImGUERbh430ijZzkrTaOuMz+qykF7SJbhUjImPjn+f8woZov2CJZi/JLzB6hx+GyfwjukLsNn4a5Y7AHWurn6H2J+N8Kc3IDERnDbMy0ObC7S+jOQdV/Rx8R4sMY5RMaotv8JhkviQrfcvz83cy5/bOOuf/ACM77qdEa9DAAAAAAElFTkSuQmCC" alt=""></a>
            <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAD0AAAA8CAYAAADVPrJMAAAACXBIWXMAABCcAAAQnAEmzTo0AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKGSURBVHgB7ZvNTxNBGId/M2wbWnSDHDSKhxogauLBgx9HqRf1ZPCMiVcTsd408WziEdQ/QPQuR7wQiQcT4SCJJpoIcU2sxA9s00praN1h3oUSDiR8zOwQduZJOtvZHqZP5307s7M7DKvkxr50ptuzdwRjFwDRj2QwEzI2PHfp4Oj6k4yKE+PzuZDxV0K6I5kEDRHmgyuHA6pwKhIuTORS0pGimSq8b3z+RsKFW+S8bLZAbzh4WwGWwMTKfxWHEKdhDayfSg4LcdK24KRtwUnbgpO2BQ+KnO9K4/nZTpgi/3oBxfp/qODC2xaUw/ubDLW3f5ZggmpToNIIoYqyNOXX9eky9hIup21By5D18JQPE1A+D06XotxWQVma6M6YCRhqx09xKe3G6W2j3NMUcqaGrFZ7qihLf6w23ZC1F3A5vRNO+h7uH98PU9x8V979Icv3OM51pWAKN2TtECdtC07aFpy0LeyadEVxgqGCcWm6IhucKuHMxC/cfV+JFhZNo2URYStQzz6a/YtnX+tr58a+/8NUaQkDR9pxu3cfTBG7NMk+DRYxKmU3mjMX6yGezNWiH2CopwPXujOIm1jD+0WxjqtvFiKpzS4SSP7eh6q8bfM79pCPpacpbx/PLsrQbWC7kPxFeb+KQn6otwNHM23QjVZp6qEHn6qY+Km+fEThTq9bPdko5HXKa5HeLG9ViCPfWd/LH0rf0k8xCAHtshtBS8CVhlBq6/PlQ0zDaqi5SQbluw7cNNQWnLQtOGlbsFWaTcIWGGbowAWzRzoEG6Yjb6a9EQYESD5Ba1MaD/IHylyE+YSLR5vRWhW2/hPaowXOCxBIxA4eATEJmb7NWm0kGDi29uTAMl7YAqjnYFwZAAAAAElFTkSuQmCC" alt=""></a>
        </div>
        </div>
        <div class="grid grid-cols-3 mx-auto container py-6">
    <ul>
        <h6 class="font-medium text-xl">Marketplace</h6>
        <li class="font-normal"><a href="#">Discover Event</a></li>
        <li class="font-normal"><a href="#">Help Center</a></li>
    </ul>
    <ul>
        <h6 class="font-medium text-xl">Links</h6>
        <li class="font-normal"><a href="#">About Us</a></li>
        <li class="font-normal"><a href="#">Docs</a></li>
        <li class="font-normal"><a href="#">Support </a></li>
    </ul>
        <label class="">
            <div class="pt-2 absolute">
            <button class="absolute border rounded-full bg-blue-400 ml-60 px-5 py-1 text-white">Submit</button>
            </div>
            <input type="email" placeholder="Your email address" class="px-20 py-3 border rounded-full ">
            
        </label>
    </ul>
    </div>
</div>  

<div class="border bg-blue-100 py-6 text-xs  font-medium">
<div class="mx-auto grid grid-cols-2 text-gray-500 text-center pt-2">
<p>Coppyright 2022 OPENLIVE NFT LLC. All rights reserved</p>
<p>We use cookies for better service.</p>
</div>
</div>
        </footer>
    </div>
</body>
<script src="onscroll.js"></script>
<script src="slide.js"></script>
<script src="slider.js"></script>
<script src="slideTred.js"></script>

</html>