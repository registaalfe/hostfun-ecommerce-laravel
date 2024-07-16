@extends('layout')

@section('content')
<section class="container flex mx-auto bg-[#F5F5F5] min-w-full min-h-full">

    <!-- Start of Hero Section -->
    <div class="elementor-section elementor-top-section relative flex flex-col mb-16 min-h-full">
        <div class="elementor-container">
            <div class="elementor-column btn-login text-center mt-12 mb-2">
                <a href="#" class="signup-button text-sm text-center font-medium rounded-full text-[#0165FF] bg-[#EEF7FF] py-2 px-4 focus:outline-none max-sm:hidden duration-500">best hosting in the world👜</a>
            </div>
            <h1 class="elementor-column heading text-center font-extrabold leading-[1.1] text-[#12294A] pt-8 pb-4 xs:mx-6 xs:text-4xl sm:mx-12 sm:text-5xl md:mx-20 md:text-5xl lg:mx-64 lg:text-6xl xl:mx-80 xl:text-6xl">
                Boost Your Site's <span class="text-[#0165FF]">Performance</span> to the Next Level.
            </h1>
            <p class="elementor-column richtext text-center font-medium leading-[1.3] text-[#161519] pb-8 pt-4 xs:mx-12 xs:text-base sm:mx-24 sm:text-base md:text-lg md:mx-36 lg:mx-72 lg:text-lg xl:mx-96 xl:text-lg">
                Hosting Solutions Worldwide. We provide 24/7 expert support to keep your website running smoothly🎉
            </p>

            <div class="elementor-column btn-login text-center mt-4 mb-8">
                <a href="#" class="signup-button text-base text-center font-extrabold rounded-full mb-16 text-white bg-[#0165FF] py-4 px-12 focus:outline-none max-sm:hidden duration-500">Our Pricing</a>
            </div>
        </div>

        <!-- Start card slider feature -->
        <!-- <div class="container flex mx-auto flex-row min-w-full justify-evenly self-center">
            <div class="icon-group z-[222222] self-center">
                <button id="prev"
                    class="w-12 h-12 rounded-md rotate-45 border border-[#684A90] transition hover:bg-[#6B60DB]"><i
                        class="icon-left fa-solid fa-angle-up"></i></button>
            </div>
            <div id="slide" class="slide mt-14">
                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">Domain Solutions
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Find the perfect domain to match your unique vision
                            and goals effortlessly.</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider1.png"
                            alt="Domain Solutions">
                    </div>
                </div>

                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">Hosting Packages
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Ready to launch your website? Get hosting from us
                            and get online with easily!</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider2.png"
                            alt="Domain Solutions">
                    </div>
                </div>

                <div class="item bg-[#121733] border-2 border-[#793E6F] w-[310px] h-[384px] inline-block relative">
                    <div class="content">
                        <div class="heading-slider flex border-b-[1px] mx-6 my-4 self-center">
                            <h3 class="text-white font-semibold text-left text-2xl w-32 pb-4">VPS Purchase
                            </h3>
                            <button id="next-up"
                                class="w-12 h-12 rounded-[50%] bg-white transition hover:bg-gray-300 ml-20 mt-1"><i
                                    class="fa-lg fa-solid fa-arrow-right fa-rotate-by"
                                    style="--fa-rotate-angle: -45deg;"></i></button>
                        </div>

                        <p class="text-left text-gray-300 mx-6 my-4">Upgrade to VPS hosting for better speed, security,
                            and reliability with our product.</p>
                        <img class="rounded-2xl w-[280px] h-[168px] mx-[15px]" src="/img/img-slider3.png"
                            alt="Domain Solutions">
                    </div>
                </div>
            </div>
            <div class="icon-group z-[222222] self-center">
                <button style="left: 20%" id="next"
                    class="w-12 h-12 rounded-md rotate-45 border border-[#684A90] transition hover:bg-[#6B60DB]"><i
                        class="icon-next fa-solid fa-angle-right"></i></button>
            </div>
        </div> -->
        <!-- End card slider feature -->
    </div>
    <!-- End of Hero Section -->
</section>

<!-- Start of About Section -->
<section class="elementor-section elementor-top-section relative flex bg-[#F5F5F5] min-h-full">
    <div class="elementor-container flex pl-20 pr-28 py-10 my-10">
        <div class="elementor-column flex-none w-3/6">
            <img class="w-[560px] h-96 rounded-2xl" src="images/img-aboutus.png" alt="">
        </div>

        <div class="elementor-column flex-none w-3/6 flex-col ml-10">
            <div class="elementor-widget-container">
                <h2 class="heading text-5xl font-bold text-[#12294A]">What we provide:</h2>
                <p class="richtext my-4 leading-7"><strong>Hostfun.</strong> has partnered with other companies and individuals from multiple industries to ensure that our services are not limited but growing. By helping brands navigate rapidly changing markets and pushing emerging businesses to be heard, we aim to create a solid digital communication that matters.</p>
            </div>

            <div class="elementor-widget-wrap pt-5 w-auto flex flex-row justify-between">
                <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                    <div class="elementor-widget-container pt-8">
                        <span class="number heading text-5xl font-medium text-[#12294A]">1</span>
                        <span class="heading text-4xl font-bold text-[#12294A]">Billion</span>
                        <span class="heading text-3xl font-black text-[#12294A]">+</span>
                    </div>
                    <span class="richtext text-[#7A7A7A] text-base">Views</span>
                </div>
                <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                    <div class="elementor-widget-container pt-8">
                        <span class="number heading text-5xl font-medium text-[#12294A]">18</span>
                        <span class="heading text-3xl font-black text-[#12294A]">+</span>
                    </div>
                    <span class="richtext text-[#7A7A7A] text-base">Digital Product</span>
                </div>
                <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                    <div class="elementor-widget-container pt-8">
                        <span class="number heading text-5xl font-medium text-[#12294A]">150</span>
                        <span class="heading text-3xl font-black text-[#12294A]">+</span>
                    </div>
                    <span class="richtext text-[#7A7A7A] text-base">Brands Collaboration</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->

<!-- Start of Faq Section -->
<section class="elementor-section elementor-top-section relative flex bg-[#12294A] min-h-full">
    <div class="elementor-container flex pl-20 pr-28 py-10 my-10">
        <div class="elementor-column flex flex-col w-3/6 p-5 border-r-[1px] border-[#FFFFFF14]">
            <div class="elementor-element title mb-5">
                <h2 class="heading text-5xl font-bold text-white">End-to-End Hosting Solutions for Your Site's</h2>
            </div>
            <div class="elementor-element btn-contact mt-5">
                <a href="#" class="signup-button text-base text-center font-bold rounded-full mb-16 text-[#12294A] bg-[#F5F5F5] py-4 px-12 focus:outline-none max-sm:hidden duration-500">Contact Us</a>
            </div>
        </div>

        <div class="elementor-column accordion flex flex-col px-5">
            <div class="elementor-element accordion-item relative">
                <input type="checkbox" id="accordion-1" class="accordion-checkbox appearance-none peer">
                <label for="accordion-1" class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center after:absolute after:content-['+'] after:right-5 after:text-2xl after:font-semibold after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                    <h4 class="heading text-2xl font-bold text-white">Develop New Store</h4>
                </label>
                <div class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                    <div class="accordion-body px-5 py-1
                    ">
                        <p class="text-base text-[#FFFFFF82]">Advertise your brand to large audience through our talents social media.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element accordion-item relative">
                <input type="checkbox" id="accordion-2" class="accordion-checkbox appearance-none peer">
                <label for="accordion-2" class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center after:absolute after:content-['+'] after:right-5 after:text-2xl after:font-semibold after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                    <h4 class="heading text-2xl font-bold text-white">Audit & Technial Support</h4>
                </label>
                <div class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                    <div class="accordion-body px-5 py-1
                    ">
                        <p class="text-base text-[#FFFFFF82]">Helped clients with complex technical issues, fixing problems quickly to keep their systems running smoothly.</p>
                    </div>
                </div>
            </div>
            <div class="elementor-element accordion-item relative">
                <input type="checkbox" id="accordion-3" class="accordion-checkbox appearance-none peer">
                <label for="accordion-3" class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center after:absolute after:content-['+'] after:right-5 after:text-2xl after:font-semibold after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                    <h4 class="heading text-2xl font-bold text-white">Manual & Automated QA</h4>
                </label>
                <div class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                    <div class="accordion-body px-5 py-1
                    ">
                        <p class="text-base text-[#FFFFFF82]">Participated in the design and maintenance of automated test frameworks, enhancing the efficiency and reliability of automated QA processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Faq Section -->

<!-- Start of Services Section -->
<section class="elementor-section elementor-top-section relative flex bg-[#F5F5F5] min-h-full">
    <div class="elementor-container">
        <div class="elementor-column">

        </div>
    </div>
</section>
<!-- End of Services Section -->

@endsection