<x-users.layout>
    <div class="max-w-6xl mx-auto px-14 py-8 bg-[#F5F5F5] min-w-full min-h-full">
        <!-- start: Hero Section -->
        <div class="flex flex-row items-center justify-between py-20 px-6 md:px-12">
            <div class="flex flex-col md:w-1/2 gap-4 justify-center">
                <h1 class="heading text-5xl font-extrabold leading-[1.1] text-[#12294A]">
                    Scalable <span class="text-[#0165FF]">Virtual Hosting Solutions</span> for Enterprises & Startups
                </h1>
                <p class="elementor-column richtext font-medium leading-[1.3] text-[#161519] w-3/4">
                    Transform your vision into reality with a secure, highly functional, and affordable web hosting
                    platform.
                </p>
                <div class="elementor-column btn-login flex">
                    <a href="#"
                        class="signup-button text-base flex items-center text-center font-medium rounded-full text-white bg-[#0165FF] hover:bg-[#12294A] duration-200 py-0 px-6 h-11 w-fit">
                        Get Hosting</a>
                </div>
            </div>
            <div class="md:w-1/2 md:mt-0 bg-[#12294A] rounded-tl-[60px] rounded-tr-lg rounded-br-lg rounded-bl-lg">
                <img alt="Illustration of virtual server hosting with servers, laptop, and mobile devices in neon colors"
                    height="900" src="images/icon-hosting.png" width="600" />
            </div>
        </div>
        <!-- end: Hero Section -->

        <!-- start: Product Section -->
        <div class="product-section py-12">
            <div class="text-center py-12">
                <h2 class="heading text-4xl font-bold text-[#12294A] xs:text-3xl sm:text-3xl">
                    Ready to get started?
                </h2>
                <p class="richtext leading-7 text-base xs:text-sm sm:text-sm">
                    14 days unlimited free trial. No contract or credit card required.
                </p>
            </div>
            <div class="flex flex-wrap mx-3 justify-between">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <a href="{{ route('detailProduct', $product->id_product) }}">

                            <h3 class="richtext text-[#12294A] text-lg font-semibold pb-2">
                                {{ $product->name_product }}
                            </h3>
                            <p class="richtext text-[#12294A] pb-2">
                                <span class="text-2xl font-bold">
                                    Rp {{ number_format($product->price_product, 2, ',', '.') }}/mth
                                </span>
                            </p>
                            <p class="richtext text-gray-500 text-sm pb-4 w-56 whitespace-normal">
                                Experience Peace of Mind with Our Reliable Security Features, Safeguarding Your Website.
                            </p>
                            <ul class="richtext text-gray-700 pb-8">
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    Standard Performance
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    1 website hosting provided
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    Free 1-click install
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    Standard Performance
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    1 website hosting provided
                                </li>
                                <li class="flex items-center mb-2">
                                    <i class="fas fa-check-circle text-[#0165FF] mr-2">
                                    </i>
                                    Free 1-click install
                                </li>
                            </ul>

                            <div class="text-center pb-4">
                                <div class="elementor-column btn-login flex">
                                    <a href="{{ route('detailProduct', $product->id_product) }}"
                                        class="signup-button text-base flex justify-center items-center text-center font-medium rounded-full text-white bg-[#0165FF] hover:bg-[#12294A] duration-200 py-0 px-6 h-11 w-full">
                                        Choose</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end: Product Section -->

    </div>
</x-users.layout>
