@extends('users.layout')

@section('content')
    <section class="elementor-section elementor-top-section container flex mx-auto bg-[#F5F5F5] min-w-full min-h-full">

        <!-- Start of Hero Section -->
        <div class="elementor-container relative flex flex-col mb-16 min-h-full top-[60px]">
            <div class="elementor-content flex flex-col left-1/2 gap-8">
                <div class="elementor-column btn-login text-center">
                    <a href="#"
                        class="signup-button text-sm text-center font-medium rounded-full text-[#0165FF] bg-[#EEF7FF] py-2 px-4 focus:outline-none max-sm:hidden duration-500">best
                        hosting in the world👜</a>
                </div>
                <h1
                    class="elementor-column heading text-center text-5xl font-extrabold leading-[1.1] text-[#12294A] xs:mx-6 xs:text-4xl sm:mx-12 sm:text-5xl md:mx-20 md:text-5xl lg:mx-64 xl:mx-64">
                    Boost Your Site's <span class="text-[#0165FF]">Performance</span> to the Next Level.
                </h1>
                <p
                    class="elementor-column richtext text-center font-medium leading-[1.3] text-[#161519] xs:mx-12 xs:text-sm sm:mx-24 sm:text-sm md:text-base md:mx-36 lg:mx-72 lg:text-base xl:mx-96 xl:text-base">
                    Hosting Solutions Worldwide. We provide 24/7 expert support to keep your website running smoothly🎉
                </p>

                <div class="elementor-column btn-login flex justify-center text-center">
                    <a href="#"
                        class="signup-button text-base flex items-center text-center font-medium rounded-full mb-16 text-white bg-[#0165FF] hover:bg-[#12294A] duration-200 py-0 px-6 h-11 w-fit">Our
                        Pricing</a>
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
        <div
            class="elementor-container flex container mx-auto min-h-full min-w-full justify-center px-28 py-10 my-14 xs:flex-col xs:px-10 xs:mx-0 xs:my-10 xs:py-5 sm:flex-col sm:px-10 sm:mx-0 sm:my-10 sm:py-5 md:flex-col md:px-20 md:mx-0 md:my-10 md:py-5">
            <div
                class="elementor-column flex-none w-3/6 text-center xs:w-full xs:shrink-0 sm:w-full sm:shrink-0 md:w-full md:shrink-0 md:px-5">
                <img class="max-w-full h-auto rounded-2xl object-cover" src="images/img-aboutus.png" alt="">
            </div>

            <div
                class="elementor-column flex-none w-3/6 flex-col ml-10 xs:m-0 xs:my-8 xs:flex xs:w-full sm:m-0 sm:my-8 sm:flex sm:w-full md:m-0 md:my-8 md:flex md:w-full">
                <div class="elementor-widget-container md:px-5">
                    <h2 class="heading text-4xl font-bold text-[#12294A] xs:text-3xl sm:text-3xl">What we provide:</h2>
                    <p class="richtext my-4 leading-7 text-base xs:text-sm sm:text-sm"><strong>Hostfun.</strong> has
                        partnered with other companies and individuals from multiple industries to ensure that our services
                        are not limited but growing. By helping brands navigate rapidly changing markets and pushing
                        emerging businesses to be heard, we aim to create a solid digital communication that matters.</p>
                </div>

                <div class="elementor-widget-wrap pt-5 w-auto flex flex-row gap-8 md:px-5">
                    <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                        <div class="elementor-widget-container pt-8">
                            <span class="number heading text-4xl font-medium text-[#12294A]">1</span>
                            <span class="heading text-4xl font-medium text-[#12294A]">Billion</span>
                            <span class="heading text-2xl font-black text-[#12294A]">+</span>
                        </div>
                        <span class="richtext text-[#7A7A7A] text-base">Views</span>
                    </div>
                    <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                        <div class="elementor-widget-container pt-8">
                            <span class="number heading text-4xl font-medium text-[#12294A]">18</span>
                            <span class="heading text-2xl font-black text-[#12294A] lg:text-2xl">+</span>
                        </div>
                        <span class="richtext text-[#7A7A7A] text-base">Digital Product</span>
                    </div>
                    <div class="elementor-element border-solid border-t-[1.5px] border-[#635D6FA6]">
                        <div class="elementor-widget-container pt-8">
                            <span class="number heading text-4xl font-medium text-[#12294A]">150</span>
                            <span class="heading text-2xl font-black text-[#12294A] lg:text-2xl">+</span>
                        </div>
                        <span class="richtext text-[#7A7A7A] text-base">Brands Collaboration</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Section -->

    <!-- Start of Faq Section -->
    <section class="elementor-section elementor-top-section relative flex bg-[#12294A] min-h-full justify-self-auto">
        <div
            class="elementor-container flex pl-20 pr-28 py-10 my-10 xs:flex-col xs:px-10 xs:mx-0 xs:my-10 xs:py-5 sm:flex-col sm:px-10 sm:mx-0 sm:my-10 sm:py-5 md:px-2">
            <div
                class="elementor-column flex flex-col w-3/6 p-5 border-r-[1px] border-[#FFFFFF14] xs:w-full xs:border-none xs:p-0 sm:w-full sm:border-none sm:px-0 md:px-8">
                <div class="elementor-element title mb-5 xs:mb-0 sm:mb-0 md:mb-0">
                    <h2 class="heading text-4xl font-bold text-white xs:w-[90%] xs:text-3xl sm:text-3xl">End-to-End Hosting
                        Solutions for Your Site's</h2>
                </div>
                <div class="elementor-element btn-contact mt-5 xs:mt-8 sm:mt-8">
                    <a href="#"
                        class="signup-button flex text-base text-center font-bold rounded-full mb-16 text-[#12294A] bg-[#F5F5F5] h-[48px] py-0 px-6 w-fit justify-center items-center xs:w-full xs:mb-8 sm:w-full sm:mb-8 hover:bg-[#0165FF] hover:text-white duration-300">Contact
                        Us</a>
                </div>
            </div>

            <div class="elementor-column w-3/6 accordion flex flex-col px-5 xs:w-full xs:px-0 sm:w-full sm:px-0">
                <div class="elementor-element accordion-item relative">
                    <input type="checkbox" id="accordion-1" class="accordion-checkbox appearance-none peer">
                    <label for="accordion-1"
                        class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center xs:px-0 xs:py-2 sm:px-0 sm:py-2 md:py-2 after:absolute after:content-['+'] after:right-5 after:text-2xl after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                        <h4 class="heading text-xl font-bold text-white">Develop New Store</h4>
                    </label>
                    <div
                        class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                        <div class="accordion-body px-5 py-1 xs:p-0 xs:my-2 sm:p-0 sm:my-2
                    ">
                            <p class="text-base text-[#7A7A7A] xs:text-sm sm:text-sm">Advertise your brand to large
                                audience through our talents social media.</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element accordion-item relative">
                    <input type="checkbox" id="accordion-2" class="accordion-checkbox appearance-none peer">
                    <label for="accordion-2"
                        class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center xs:px-0 sm:px-0 after:absolute after:content-['+'] after:right-5 after:text-xl after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                        <h4 class="heading text-xl font-bold text-white">Audit & Technial Support</h4>
                    </label>
                    <div
                        class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                        <div class="accordion-body px-5 py-1 xs:p-0 xs:my-2 sm:p-0 sm:my-2
                    ">
                            <p class="text-base text-[#7A7A7A] xs:text-sm sm:text-sm">Helped clients with complex
                                technical issues, fixing problems quickly to keep their systems running smoothly.</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element accordion-item relative">
                    <input type="checkbox" id="accordion-3" class="accordion-checkbox appearance-none peer">
                    <label for="accordion-3"
                        class="accordion-button flex flex-row justify-between py-3 px-5 cursor-pointer items-center xs:px-0 sm:px-0 after:absolute after:content-['+'] after:right-5 after:text-2xl after:text-white peer-checked:after:transform peer-checked:after:rotate-45 after:duration-300">
                        <h4 class="heading text-xl font-bold text-white">Manual & Automated QA</h4>
                    </label>
                    <div
                        class="element-widget-container accordion-collapse h-0 overflow-hidden transition ease-in-out peer-checked:h-full">
                        <div class="accordion-body px-5 py-1 xs:p-0 xs:my-2 sm:p-0 sm:my-2
                    ">
                            <p class="text-base text-[#7A7A7A] xs:text-sm sm:text-sm">Participated in the design and
                                maintenance of automated test frameworks, enhancing the efficiency and reliability of
                                automated QA processes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Faq Section -->

    <!-- Start of Services Section -->
    <section class="elementor-section elementor-top-section flex bg-[#F5F5F5] min-h-full">
        <div
            class="elementor-container flex flex-col container mx-auto min-h-full min-w-full justify-center px-28 my-10 py-10 gap-16 xs:px-10 xs:mx-0 xs:my-10 xs:py-5 xs:gap-10 sm:px-10 sm:mx-0 sm:my-10 sm:py-5 sm:gap-10 md:px-20 md:mx-0 md:my-10 md:py-5 md:gap-10">
            <div class="elementor-column text-center container mx-auto">
                <h2 class="heading text-4xl font-bold text-[#12294A] xs:text-3xl sm:text-3xl">Our Capabilities</h2>
            </div>

            <div
                class="elementor-column flex flex-row justify-between w-full pb-10 items-center gap-12 xs:flex-col xs:border xs:border-gray-200 xs:rounded-xl xs:pb-0 sm:flex-col sm:border sm:border-gray-200 sm:rounded-xl sm:pb-0 md:flex-col md:border md:border-gray-200 md:rounded-xl md:pb-0">
                <div
                    class="elementor-element flex flex-col xs:text-left xs:w-full xs:px-4 xs:py-5 sm:text-left sm:w-full sm:px-4 sm:py-5 md:text-left md:w-full md:px-4 md:py-5 lg:w-3/6 xl:w-3/6">
                    <div class="flex flex-col mb-5">
                        <h2 class="heading text-3xl font-bold text-[#12294A] mb-5 xs:text-2xl sm:text-2xl md:text-2xl">
                            Faster Loading</h2>
                        <p class="richtext leading-7 text-base xs:text-sm xs:w-72 sm:text-sm sm:w-72 md:w-72">Maximize your
                            website's performance with our Faster Loading Hosting Services. Designed to deliver rapid load
                            times, our hosting solutions use cutting-edge technology, optimized servers, and advanced
                            caching techniques.
                    </div>
                    <div class="elementor-column flex btn-login xs:order-3 sm:order-3 md:order-3">
                        <a href="#"
                            class="signup-button flex text-base font-medium rounded-full mb-16 text-white bg-[#0165FF] hover:bg-[#12294A] duration-300 h-[48px] py-0 px-6 w-fit justify-center items-center xs:mb-0 xs:text-sm sm:text-sm sm:mb-0 md:mb-0">Our
                            Pricing</a>
                    </div>
                    <div class="elementor-element flex flex-col xs:order-2 sm:order-2 md:order-2 lg:hidden xl:hidden">
                        <img class="w-[449px] h-[449px] rounded-2xl" src="images/img-faq1.png" alt="">
                    </div>
                </div>
                <div class="elementor-element w-[40%] flex-col xs:hidden sm:hidden md:hidden lg:w-3/6 xl:w-3/6">
                    <img class="w-[489px] h-auto rounded-2xl" src="images/img-faq1.png" alt="">
                </div>
            </div>

            <div
                class="elementor-column flex flex-row justify-between w-full pb-10 items-center gap-12 xs:flex-col xs:border xs:border-gray-200 xs:rounded-xl xs:pb-0 sm:flex-col sm:border sm:border-gray-200 sm:rounded-xl sm:pb-0 md:flex-col md:border md:border-gray-200 md:rounded-xl md:pb-0 lg:flex-row-reverse xl:flex-row-reverse">
                <div
                    class="elementor-element flex flex-col xs:text-left xs:w-full xs:px-4 xs:py-5 sm:text-left sm:w-full sm:px-4 sm:py-5 md:text-left md:w-full md:px-4 md:py-5 lg:w-3/6 xl:w-3/6">
                    <div class="flex flex-col mb-5">
                        <h2 class="heading text-3xl font-bold text-[#12294A] mb-5 xs:text-2xl sm:text-2xl md:text-2xl">
                            Advanced Protection Systems</h2>
                        <p class="richtext leading-7 text-base xs:text-sm xs:w-72 sm:text-sm sm:w-72 md:w-72">Benefit from
                            advanced firewalls, real-time threat monitoring, and robust DDoS protection that work seamlessly
                            to prevent unauthorized access and cyber-attacks.Trust our Advanced Protection Systems to
                            provide the highest level of security, keeping your website and data secure 24/7.
                    </div>
                    <div class="elementor-column flex btn-login xs:order-3 sm:order-3 md:order-3">
                        <a href="#"
                            class="signup-button flex text-base font-medium rounded-full mb-16 text-white bg-[#0165FF] hover:bg-[#12294A] duration-300 h-[48px] py-0 px-6 w-fit justify-center items-center xs:mb-0 xs:text-sm sm:text-sm sm:mb-0 md:mb-0">Our
                            Pricing</a>
                    </div>
                    <div class="elementor-element flex flex-col xs:order-2 sm:order-2 md:order-2 lg:hidden xl:hidden">
                        <img class="w-[449px] h-[449px] rounded-2xl" src="images/img-faq2.png" alt="">
                    </div>
                </div>
                <div class="elementor-element w-[40%] flex-col xs:hidden sm:hidden md:hidden lg:w-3/6 xl:w-3/6">
                    <img class="w-[489px] h-auto rounded-2xl" src="images/img-faq2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services Section -->

    <!-- Start of Contact Section -->
    <section
        class="elementor-section elementor-top-section container mx-auto relative flex bg-[#12294A] min-w-full min-h-full">
        <div class="elementor-container relative min-w-full text-center py-[100px]">
            <div class="elementor-column flex flex-col items-center">
                <div class="elementor-element flex flex-col items-center">
                    <p class="richtext leading-7 text-lg text-white pb-4 xs:text-sm sm:text-sm md:text-base">Still Not Sure
                        What To Get?</p>
                    <h2
                        class="heading text-5xl font-bold text-white mb-5 max-w-[700px] xs:text-3xl xs:mx-36 sm:text-3xl sm:mx-36 md:text-4xl md:mx-36">
                        Get Discount Up to 60% With The Promo Code</h2>
                </div>
                <div class="elementor-element btn-login mt-4">
                    <a href="#"
                        class="signup-button flex text-base font-semibold rounded-full text-[#12294A] bg-[#F5F5F5] hover:text-white hover:bg-[#0165FF] duration-300 h-[48px] py-0 px-6 w-fit justify-center items-center xs:text-sm xs:h-[42px] sm:text-sm sm:h-[42px]">Our
                        Pricing</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Section -->

    <!-- Start of Footer Section -->
    <footer class="elementor-section elementor-top-section relative flex flex-col bg-[#F5F5F5] min-h-full">
        <div
            class="elementor-container flex container mx-auto max-w-5xl text-center px-0 pb-16 xs:px-10 sm:px-10 md:px-20 lg:px-20">
            <div
                class="footer-content flex justify-between w-full text-left pt-24 xs:flex-col xs:gap-4 sm:flex-col sm:gap-4 md:flex-col md:gap-4">
                <div
                    class="left-footer flex flex-col xs:self-center xs:w-full sm:self-center sm:w-full md:self-center md:w-full">
                    <div class="flex pb-6 xs:self-center sm:self-center md:self-center">
                        <img class="h-5 w-auto" src="images/img-icon.png" alt="hostfun">
                    </div>
                    <div class="footer-tagline xs:self-center sm:self-center md:self-center">
                        <p
                            class="richtext leading-7 text-base xs:text-sm xs:text-center xs:mb-2 sm:text-sm sm:text-center sm:mb-2 md:text-center md:mb-2">
                            Partnership@hostfun.com</p>
                        <p
                            class="richtext leading-7 text-base xs:text-sm xs:text-center xs:mb-2 sm:text-sm sm:text-center sm:mb-2 md:text-center md:mb-2">
                            Araya, Malang Regency</p>
                        <p
                            class="richtext leading-7 text-base xs:text-sm xs:text-center xs:mb-2 sm:text-sm sm:text-center sm:mb-2 md:text-center md:mb-2">
                            East Java, INA 65152</p>
                    </div>
                    <div
                        class="footer-socmed flex gap-2 pt-8 justify-center overflow-hidden xs:hidden sm:hidden md:hidden">
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition hover:bg-[#12294A] hover:text-white">
                            <i class="socmed-icon fa-brands fa-dribbble fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition hover:bg-[#12294A] hover:text-white">
                            <i class="socmed-icon fa-brands fa-instagram fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition hover:bg-[#12294A] hover:text-white">
                            <i class="socmed-icon fa-brands fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition hover:bg-[#12294A] hover:text-white">
                            <i class="socmed-icon fa-brands fa-twitter fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition hover:bg-[#12294A] hover:text-white">
                            <i class="socmed-icon fa-brands fa-linkedin-in fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="right-footer flex flex-col gap-2 w-[25%] xs:w-full sm:w-full md:w-full">
                    <div
                        class="menu-container xs:self-center xs:text-center xs:w-full sm:self-center sm:w-full sm:text-center md:self-center md:w-full md:text-center">
                        <ul class="menu-secondary flex flex-col gap-4">
                            <li class="px-2 pb-1">
                                <a class="richtext leading-7 text-base text-[#020b1f] hover:text-[#525252] xs:text-sm sm:text-sm"
                                    href="#">Home</a>
                            </li>
                            <li class="px-2 pb-1">
                                <a class="richtext leading-7 text-base text-[#020b1f] hover:text-[#525252] xs:text-sm sm:text-sm"
                                    href="#">Hosting</a>
                            </li>
                            <li class="px-2 pb-1">
                                <a class="richtext leading-7 text-base text-[#020b1f] hover:text-[#525252] xs:text-sm sm:text-sm"
                                    href="#">Domain</a>
                            </li>
                            <li class="px-2 pb-1">
                                <a class="richtext leading-7 text-base text-[#020b1f] hover:text-[#525252] xs:text-sm sm:text-sm"
                                    href="#">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-socmed flex gap-2 pt-8 justify-center overflow-hidden lg:hidden xl:hidden">
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition">
                            <i class="socmed-icon fa-brands fa-dribbble fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition">
                            <i class="socmed-icon fa-brands fa-instagram fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition">
                            <i class="socmed-icon fa-brands fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition">
                            <i class="socmed-icon fa-brands fa-twitter fa-lg"></i>
                        </a>
                        <a href="#"
                            class="flex border-2 w-12 h-12 border-[#ededef] rounded-full justify-center transition">
                            <i class="socmed-icon fa-brands fa-linkedin-in fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer-copyright flex justify-center items-center w-full pt-7 pb-6">
            <p class="richtext leading-7 text-sm text-[#020b1f] lg:text-base">2024 © Hostfun. All rights reserved.</p>
        </div>
    </footer>
    <!-- End of Footer Section -->
@endsection
