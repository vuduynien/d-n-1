<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION SHOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="../admin/views/css/styles.css">
    <link rel="icon" href="./view/images/logo.jpg" type="image/x-icon" style="width: 50px; height: 50px;" />
</head>

<body>
    <header class="">
        <section class="flex items-center justify-between w-[75%] mx-auto py-5">
            <a href='index.php'>
            <img src="./view/images//logo.jpg" alt="" style="width: 300px; height: 100px;">
            </a>
            <section class="flex items-center gap-x-5">
                <!-- search -->
                <section class="">
                    <form action="index.php?opt=shop" method="post">
                        <!-- <button class="border border-gray-500 flex items-center justify-between rounded-[19px]">
                            <input class="placeholder:text-gray-500 placeholder:text-[font-sans] ml-3 w-52 h-10 outline-none" type="text" placeholder="Searching here..." name="kyw">
                            <svg id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line w-16" width="20" height="20" name="search">
                                <path id="primary" d="M17,10a7,7,0,1,1-7-7A7,7,0,0,1,17,10Zm4,11-6-6" style="fill: none; stroke: rgb(234, 47, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3;">
                                </path>
                            </svg>
                        </button> -->
                        <div class="border border-gray-500 flex items-center justify-between rounded-[19px]">
                            <input class="placeholder:text-gray-500 placeholder:text-[font-sans] ml-3 w-52 h-10 outline-none" type="text" placeholder="Searching here..." name="kyw">
                            <button name="search">
                                <svg id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line w-16" width="20" height="20">
                                    <path id="primary" d="M17,10a7,7,0,1,1-7-7A7,7,0,0,1,17,10Zm4,11-6-6" style="fill: none; stroke: rgb(234, 47, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3;">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </section>
                <!-- Contact us -->
                <a href="index.php?opt=lienhe">
                    <section class="border border-[#EA2F38] flex items-center h-10 rounded-full hover:bg-gray-100">
                        <p class="text-[#EA2F38] font-sans font-[500] mx-3 ">LIÊN HỆ
                        <p>
                            <svg id="phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-[-1px] ml-[-1px] icon line border border-[#EA2F38] h-10 w-10 p-1 rounded-full bg-[#EA2F38]" width="48" height="48">
                                <path id="primary" d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" style="fill: none; stroke: rgb(255,255,255); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                                </path>
                            </svg>
                        </p>
                        </p>
                    </section>
                </a>
                <!-- Đăng nhập -->
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a class="dropbtn" href="
                            <?php
                            if (isset($_SESSION['name_user'])) {
                                echo 'index.php?opt=account';
                            } else
                                echo 'index.php?opt=login';
                            ?>">
                                <section class="border border-[#EA2F38] bg-[#EA2F38] rounded-full w-10 h-10 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8  text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </section>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Giỏ hàng -->
                <a href="index.php?opt=viewcart">
                    <section class="border border-[#EA2F38] bg-[#EA2F38] rounded-full w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </section>
                </a>
                <a href="./admin/index.php">
                    <section class="border border-[#EA2F38] bg-[#EA2F38] rounded-full w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>

                    </section>
                </a>
            </section>
        </section>
    </header>

    <!-- Menu -->
    <nav class="sticky top-0 bg-black menu1">
        <ul class="w-[75%] mx-auto flex items-center gap-x-8s">
            <a class="text-white font-[500] text-[17px] first-letter:uppercase" href="index.php" style="margin-left: 330px;">
                <li class="menu py-3 px-8 hover:bg-[#ef222d]">
                    home
                </li>
            </a>
            <a class="text-white font-[500] text-[17px] first-letter:uppercase" href="index.php?opt=shop">
                <li class="menu py-3 px-8 hover:bg-[#ef222d]">
                    shop
                </li>
            </a>
            <a class="text-white font-[500] text-[17px] first-letter:uppercase" href="index.php?opt=gioithieu">
                <li class="menu py-3 px-8 hover:bg-[#ef222d]">
                    about us
                </li>
            </a>
            <a class="text-white font-[500] text-[17px] first-letter:uppercase" href="index.php?opt=tintuc">
                <li class="menu py-3 px-8 hover:bg-[#ef222d]">
                    news
                </li>
            </a>
            

        </ul>
    </nav>