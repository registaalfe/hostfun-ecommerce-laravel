<x-auth.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto min-h-screen">
        <div class="flex items-center justify-center min-h-screen">
            <div class="flex w-96 h-[440px]">
                <div class="flex flex-col justify-center items-center border shadow-lg rounded-3xl bg-white">
                    <div class="flex text-white bg-[#0165FF] rounded-2xl w-12 h-12 px-1.5 items-center shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 21v-2h7V5h-7V3h7q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm-2-4l-1.375-1.45l2.55-2.55H3v-2h8.175l-2.55-2.55L10 7l5 5z" />
                        </svg>
                    </div>
                    <div class="flex flex-col mt-4 mb-6 items-center">
                        <h3 class="font-sans font-semibold text-2xl text-[#12294A]">Get Started Now</h3>
                        <p class="font-sans text-sm text-[#12294A] mx-16 text-center mt-0.5">Sign in to
                            access to your
                            dashboard,
                            setting and
                            projects.
                        </p>
                    </div>

                    <form action="{{ route('auth') }}" method="POST">
                        @csrf
                        <div class="flex flex-col gap-3">
                            <div class="form-group flex flex-row w-80 gap-1">
                                <div
                                    class="input-group flex flex-row w-80 items-center justify-center bg-[#EFF2F6] rounded-md px-2 py-2 text-gray-500 focus-within:ring-1 focus-within:shadow-md focus-within:ring-[#0165FF] focus-within:border-[#0165FF] hover:shadow-[0_0_0_2px] hover:duration-300 hover:shadow-blue-200">
                                    <span class="icon-input-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
                                        </svg>
                                    </span>
                                    <input
                                        class="font-sans w-full border-none rounded-md px-2 py-0 bg-[#EFF2F6] placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"
                                        type="email" name="email" id="email" placeholder="Email"
                                        :value="old('email')" required autofocus autocomplete="email">
                                </div>
                            </div>

                            <div class="form-group flex flex-row w-80 gap-1">
                                <div
                                    class="input-group flex flex-row w-80 items-center justify-center bg-[#EFF2F6] rounded-md px-2 py-2 text-gray-500 focus-within:ring-1 focus-within:shadow-md focus-within:ring-[#0165FF] focus-within:border-[#0165FF] hover:shadow-[0_0_0_2px] hover:duration-300 hover:shadow-blue-200">
                                    <span class="icon-input-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                                        </svg>
                                    </span>
                                    <input
                                        class="font-sans w-full border-none rounded-md px-2 py-0 bg-[#EFF2F6] placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"
                                        type="password" name="password" id="password" placeholder="Password" required
                                        autocomplete="current-password">
                                </div>
                            </div>


                            <!-- Submit Button -->
                            <button
                                class="font-sans bg-[#0165FF] hover:bg-[#12294A] duration-300 text-white font-medium mt-4 py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"
                                type="submit">Sign in</button>

                            <div class="text-center">
                                <span class="font-sans text-sm text-gray-500">Dont have an account? <a
                                        class="font-sans text-sm text-[#0165FF] hover:underline"
                                        href="{{ route('register') }}">Sign
                                        Up</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</x-auth.layout>
