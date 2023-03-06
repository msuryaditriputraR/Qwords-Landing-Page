<section id="domain"
    class="bg-main-color text-center py-10 text-white bg-[url('/img/search-domain-bg.png')] bg-[length:90%] bg-no-repeat">
    <h2 class="text-4xl font-bold">Cari Nama Domainmu</h2>
    <p class="w-[55ch] mx-auto text-xl mt-5">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda.
        Pilih
        nama yang
        paling mencerminkan
        bisnis, produk, atau layanan Anda.</p>
    <form action="" class="flex justify-center gap-x-8 w-3/5 mx-auto text-black mt-12">
        <input type="text" placeholder="Cari nama domain Anda" class="basis-[80%] rounded-3xl p-4 outline-none">
        <select name="" id="" class="basis-[10%] rounded-3xl px-4 outline-none">
            @foreach ($domains as $domain)
                <option value="{{ $domain->id }}">.{{ $domain->nama_domain }}</option>
            @endforeach
        </select>
        <button type="submit"
            class="basis-[10%] bg-black text-white rounded-3xl px-10 outline-none font-bold uppercase">Cari</button>
    </form>
    <div class="flex justify-center gap-x-12 mt-10">
        <div class="border-r border-gray-300 pr-6 border-solid">
            <span class="text-lg font-semibold">.com</span>
            <p class="text-2xl font-bold">Rp 165.000</p>
        </div>
        <div class="border-r border-gray-300 pr-6 border-solid">
            <span class="text-lg font-semibold">.id</span>
            <p class="text-2xl font-bold">Rp 225.000</p>
        </div>
        <div>
            <span class="text-lg font-semibold">.dev</span>
            <p class="text-2xl font-bold">Rp 255.000</p>
        </div>
    </div>
</section>
