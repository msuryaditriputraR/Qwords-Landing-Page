<section id="services" class="py-10 text-center">
    <h2 class="font-bold text-5xl">Cloud Hosting <br> <span class="text-main-color">Diskon Hingga 50%</span>
    </h2>
    <p class="mt-5 mb-16 text-xl">Layanan unggulan dengan teknologi terbaik untuk website anda</p>
    <div class="flex justify-center text-left items-center gap-x-8">
        @foreach ($services as $service)
            <div class="rounded-2xl border border-solid border-slate-200 p-6 hover:shadow-xl">
                <div class="mb-4">
                    <span class="text-lg">{{ $service->desc }}</span>
                    <h3 class="font-bold text-2xl">{{ $service->nama_layanan }}</h3>
                </div>
                <div>
                    <span class="line-through text-gray-400">{{ $service['harga-full'] }}</span>
                    <p class="text-main-color text-2xl font-bold">{{ $service->harga }}</p>
                </div>
                <div class="my-6 pr-8">
                    <div class="flex items-center gap-x-4 mb-4">
                        <img src={{ url('/img/icons/disk.png') }} alt="" aria-hidden="true">
                        <div>
                            <p>Disk</p>
                            <p class="font-bold text-lg">{{ $service->disk }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-4 mb-4">
                        <img src={{ url('/img/icons/bandwidth.png') }} alt="" aria-hidden="true">
                        <div>
                            <p>Bandwidth</p>
                            <p class="font-bold text-lg">{{ $service->bandwidth }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-4 mb-4">
                        <img src={{ url('/img/icons/cpu.png') }} alt="" aria-hidden="true">
                        <div>
                            <p>Core CPU</p>
                            <p class="font-bold text-lg">{{ $service->core }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <img src={{ url('/img/icons/addon.png') }} alt="" aria-hidden="true">
                        <div>
                            <p>Addon / parked <br> domain</p>
                            <p class="font-bold text-lg">{{ $service->addon }}</p>
                        </div>
                    </div>

                </div>
                <a href="#"
                    class="bg-main-color text-white inline-block w-full py-2 text-center font-semibold rounded-full">Pesan
                    Sekarang</a>
            </div>
        @endforeach
    </div>
</section>
