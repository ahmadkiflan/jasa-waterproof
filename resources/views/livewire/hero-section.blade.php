<!-- Hero -->
<div class="relative overflow-hidden ">
    <div class="max-w-7xl w-full  mx-auto py-20 px-4 sm:px-6 md:py-25 md:px-8 lg:px-0">
        <div class="md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
            <!-- Title -->
            <h1 class="text-3xl text-gray-800 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight">
                Proteksi Total <span class="text-blue-600">Bangunan Anda</span>
            </h1>
            <p class="mt-3 text-base text-gray-500">
                Dapatkan survei lokasi gratis dan konsultasi solusi anti-bocor yang tepat sasaran.
            </p>
            <!-- End Title -->

            <div class="mt-8 grid">
                <a href="https://wa.me/6281585215933" target="_blank"
                    class="py-3 px-3 inline-flex justify-center items-center gap-x-2 text-sm  rounded-lg bg-white border border-gray-200 text-gray-500 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    <img src="{{ asset('img/Apple_App_Icon_Light_2026.png') }}" width="40" alt="">
                    <span class="text-gray-500 text-center text-sm">Hubungi via WhatsApp</span>
                </a>
            </div>

            <div
                class="py-6 flex items-center text-sm text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                Or</div>

            <!-- Contact Us -->
            <div class="max-w-full   sm:px-6 lg:px-0  mx-auto">

                <span class="text-gray-500 text-center text-sm flex justify-center mb-2">Hubungi kami via Form</span>

                <div class=" max-w-full mx-auto">
                    <!-- Card -->
                    <div class="flex flex-col bg-white border border-gray-200 rounded-xl p-4 sm:p-6 lg:p-8">


                        <!-- Alert -->
                        @if ($errors->any())
                            <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 mb-4"
                                role="alert" tabindex="-1" aria-labelledby="hs-with-list-label">
                                <div class="flex">
                                    <div class="shrink-0">
                                        <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="m15 9-6 6" />
                                            <path d="m9 9 6 6" />
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h3 id="hs-with-list-label" class="text-sm font-semibold">
                                            Telah terjadi masalah saat anda mengirimkan data.
                                        </h3>
                                        <div class="mt-2 text-sm text-red-800">
                                            <ul class="list-disc space-y-1 ps-5">
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- End Alert -->

                        <!-- Toast -->
                        <div id="dismiss-toast">
                            @if (session('success'))
                                <!-- Toast -->
                                <div class="max-w-full w-full bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg dark:bg-teal-500/20 dark:border-teal-900 dark:text-teal-400"
                                    role="alert" tabindex="-1" aria-labelledby="hs-toast-soft-color-teal-label">
                                    <div id="hs-toast-soft-color-teal-label" class="flex p-4">
                                        {{ session('success') }}
                                    </div>
                                </div>
                                <!-- End Toast -->
                            @endif
                        </div>
                        <!-- End Toast -->

                        <form wire:submit="save" class="mt-4">
                            @csrf
                            <div class="grid gap-4">
                                <!-- Grid -->
                                <div class="grid grid-cols-1  gap-4">
                                    <div>
                                        <label for="name" class="sr-only">Name</label>
                                        <input wire:model="name" type="text" name="name" id="name"
                                            class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                            placeholder="Contoh: Ahmad Kiflan">
                                    </div>

                                </div>
                                <!-- End Grid -->

                                <div>
                                    <label for="email" class="sr-only">Email</label>
                                    <input wire:model="email" type="email" name="email" id="email"
                                        autocomplete="email"
                                        class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Contoh: nama@email.com">
                                </div>

                                <div>
                                    <label for="phone" class="sr-only">Phone Number</label>
                                    <input wire:model="phone" type="text" name="phone" id="phone"
                                        class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Contoh: 081234567890">
                                </div>

                                <div>
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea wire:model="message" id="message" name="message" rows="4"
                                        class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Ceritakan masalah kebocoran Anda (Contoh: Dak lantai 2 rembes)"></textarea>
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div class="mt-4 grid">
                                <flux:button variant="primary" color="indigo" type="submit" :loading="true">
                                    Kirim pesan
                                </flux:button>
                            </div>

                            <div class="mt-3 text-center">
                                <p class="text-sm text-gray-500">
                                    Kami akan menghubungi anda kembali dalam 1-2 hari kerja
                                </p>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>


            </div>
            <!-- End Contact Us -->
        </div>
    </div>

    <div class="hidden md:block md:absolute md:top-0 md:inset-s-1/2 md:inset-e-0 h-full bg-no-repeat bg-center bg-cover"
        style="background-image: url('{{ asset('img/fiqih-alfarish-Z5-vI_pTIhA-unsplash (1).jpg') }}')">
    </div>
    <!-- End Col -->
</div>
<!-- End Hero -->
