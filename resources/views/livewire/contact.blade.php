<section class="bg-white dark:bg-gray-900">
    <div class="py-8 md:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Kontak Kami
        </h2>

        @if (session('success'))
            <div class="flex justify-center my-10">
                <div id="toast-success"
                    class="flex items-center w-full max-w-sm p-4 text-body bg-neutral-primary-soft rounded-base shadow-xs border border-default"
                    role="alert">
                    <div
                        class="inline-flex items-center justify-center shrink-0 w-7 h-7 text-fg-success bg-success-soft rounded">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
                    <button type="button"
                        class="ms-auto flex items-center justify-center text-body hover:text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded text-sm h-8 w-8 focus:outline-none"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif


        @if ($errors->any())
            <div class="flex p-4 mb-4 text-sm text-fg-danger-strong rounded-base bg-danger-soft border border-danger-subtle"
                role="alert">
                <svg class="w-4 h-4 me-2 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                    <span class="font-medium">Pastikan persyaratan ini terpenuhi:</span>
                    <ul class="mt-2 list-disc list-outside space-y-1 ps-2.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif


        <form wire:submit="save" class="space-y-8">
            @csrf
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    name</label>
                <input wire:model="name" type="text" name="name" id="name"
                    class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Contoh: Budi Santoso">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    phone</label>
                <input wire:model="phone" type="text" id="phone" name="phone"
                    class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Contoh: 0812 3456 7890">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    email (opsional)</label>
                <input wire:model="email" type="email" id="email" name="email"
                    class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Contoh: budi@gmail.com">
            </div>
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject
                    (opsional)</label>
                <input wire:model="subject" type="text" id="subject"
                    class="block p-3 w-full text-sm text-gray-900  rounded-md border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Contoh: Konsultasi Waterproof Atap" name="subject">
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                    message</label>
                <textarea wire:model="message" id="message" rows="6"
                    class="block p-2.5 w-full text-sm text-gray-900  rounded-md shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Contoh: Halo, saya ingin konsultasi mengenai kebocoran atap rumah saya..." name="message"></textarea>
            </div>
            <flux:button type="submit" class="shadow-sm shadow-gray-500 rounded-md" variant="primary" color="zinc"
                icon:trailing="arrow-right">
                Kirim Pesan
            </flux:button>
        </form>
    </div>
</section>
