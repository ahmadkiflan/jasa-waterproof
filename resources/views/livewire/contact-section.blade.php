<!-- Contact Us -->
<div id="contact" class="max-w-full bg-gray-50  px-4 pt-20 sm:px-6 lg:px-0  mx-auto">
    <div class="max-w-2xl lg:max-w-5xl mx-auto">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">
                Hubungi Kami
            </h1>

        </div>

        <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
            <!-- Card -->
            <div class="flex flex-col bg-white border border-gray-200 rounded-xl p-4 sm:p-6 lg:p-8">
                <h2 class="mb-8 text-xl font-semibold text-gray-800">
                    Fill in the form
                </h2>

                <!-- Alert -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 mb-4" role="alert"
                        tabindex="-1" aria-labelledby="hs-with-list-label">
                        <div class="flex">
                            <div class="shrink-0">
                                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                {{-- <div class="ms-auto">
                                    <button type="button" data-hs-remove-element="#dismiss-toast"
                                        class="shrink-0 flex justify-center items-center size-5 text-teal-800 opacity-50 hover:opacity-100 focus:outline-hidden dark:text-teal-400"
                                        aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18" />
                                            <path d="m6 6 12 12" />
                                        </svg>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                        <!-- End Toast -->
                    @endif
                </div>
                <!-- End Toast -->


                <form wire:submit="save" class="mt-4">
                    <div class="grid gap-4">
                        <!-- Grid -->
                        <div class="grid grid-cols-1  gap-4">
                            <div>
                                <label for="name" class="sr-only">Name</label>
                                <input wire:model="name" type="text" name="name" id="name"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    placeholder="Name">
                            </div>

                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input wire:model="email" type="email" name="email" id="email" autocomplete="email"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Email">
                        </div>

                        <div>
                            <label for="phone" class="sr-only">Phone Number</label>
                            <input wire:model="phone" type="text" name="phone" id="phone"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Phone Number">
                        </div>

                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea wire:model="message" id="message" name="message" rows="4"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white border-gray-200 rounded-lg sm:text-sm text-gray-800 placeholder:text-gray-500 focus:border-blue-700 focus:ring-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-4 grid">
                        <flux:button variant="primary" color="indigo" type="submit" :loading="true">
                            Send message
                        </flux:button>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </div>
                </form>
            </div>
            <!-- End Card -->

            <div class="divide-y divide-gray-200">
                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                        <path d="M12 17h.01" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800">Knowledgebase</h3>
                        <p class="mt-1 text-sm text-gray-500">We're here to help with any questions or code.</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-blue-700 focus:outline-hidden focus:text-blue-700"
                            href="#">
                            Contact support
                            <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800">FAQ</h3>
                        <p class="mt-1 text-sm text-gray-500">Search our FAQ for answers to anything you might ask.</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-blue-700 focus:outline-hidden focus:text-blue-700"
                            href="#">
                            Visit FAQ
                            <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m7 11 2-2-2-2" />
                        <path d="M11 13h4" />
                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800">Developer APIs</h3>
                        <p class="mt-1 text-sm text-gray-500">Check out our development quickstart guide.</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-blue-700 focus:outline-hidden focus:text-blue-700"
                            href="#">
                            Contact sales
                            <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800">Contact us by email</h3>
                        <p class="mt-1 text-sm text-gray-500">If you wish to write us an email instead please use</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-blue-700 focus:outline-hidden focus:text-blue-700"
                            href="#">
                            example@site.com
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Us -->
