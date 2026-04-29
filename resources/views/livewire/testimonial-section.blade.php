<section class="py-16 mt-20 overflow-hidden">
    <div class="container mx-auto mb-6">

        


    </div>

    {{-- Wrapper Marquee --}}
    <div class="relative flex overflow-hidden ">

        {{-- Track --}}
        <div class="marquee-track flex gap-6 w-max">

            {{-- Tampilkan 2x supaya loop terlihat mulus --}}
            @foreach ([1, 2] as $loop)
                @foreach ($testimonials as $testimonial)
                    <div class="card bg-white rounded-lg mb-6 shadow-md p-6 w-80 shrink-0">

                        {{-- Rating Bintang --}}
                        <div class="flex gap-1 mb-3">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $testimonial->rating)
                                    <span class="text-yellow-400">★</span>
                                @else
                                    <span class="text-gray-300">★</span>
                                @endif
                            @endfor
                        </div>

                        {{-- Isi Ulasan --}}
                        <p class="text-gray-600 mb-4 italic text-sm">
                            "{{ $testimonial->review }}"
                        </p>

                        {{-- Info Pelanggan --}}
                        <div class="flex items-center gap-3">

                            {{-- Foto / Avatar --}}
                            @if ($testimonial->photo)
                                <img src="{{ Storage::url($testimonial->photo) }}" alt="{{ $testimonial->name }}"
                                    class="w-10 h-10 rounded-full object-cover" />
                            @else
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold shrink-0">
                                    {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                </div>
                            @endif

                            {{-- Nama & Lokasi --}}
                            <div>
                                <p class="font-semibold text-sm text-gray-800">
                                    {{ $testimonial->name }}
                                </p>
                                @if ($testimonial->location)
                                    <p class="text-sm text-gray-400">
                                        {{ $testimonial->location }}
                                    </p>
                                @endif
                            </div>

                        </div>

                    </div>
                @endforeach
            @endforeach

        </div>
    </div>

</section>
