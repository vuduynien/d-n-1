    <!-- footer -->
    <footer class="">
        <div class="w-[70%] mx-auto flex flex-row gap-x-20 my-24">
            <div class="basis-1/4">
                <img src="./view/images//logo.jpg" alt="" style="width: 250px; height: 100px;">
                <p class="mt-5 text-gray-400 text-[16px] font-[300]">What good will it be for
                    you to gain the world, yet forfeit your soul? Or what can you give in exchange for
                    your soul? Matthew 6:26</p>
            </div>
            <div class="basis-3/4">
                <div class="grid grid-cols-4 gap-x-10 pt-10">
                    <div>
                        <a href="#">
                            <p class="font-[500] text-gray-400 font-mono">SOLUTIONS</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Marketing</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Analytics</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Commerce</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Insights</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <p class="font-[500] text-gray-400 font-mono">SUPPORT</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Pricing</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Document</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Guides</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">API Status</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <p class="font-[500] text-gray-400 font-mono">COMPANY</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">About</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Blog</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Jobs</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Press</p>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <p class="font-[500] text-gray-400 font-mono">LEGAL</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Claim</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Privacy</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Policy</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-400 text-[16px] font-[300]">Terms</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- black-bar -->
        <div class="bg-black flex justify-center">
            <div class="bg-black h-10 pt-2 flex justify-between w-[70%]">
                <p class="text-white">© Fashion Shop - All Rights Reserved</p>
                <img src="./view/images/methods.png" class="max-h-5">
            </div>
        </div>
    </footer>
    </body>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    </html>