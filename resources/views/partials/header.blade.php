<header class="fixed top-0 w-full px-10 py-5">
  <nav class="flex justify-between items-center">
    <a href="#">
      <img src="{{url('/img/logo-qw-light.png')}}" alt="Qwords">
    </a>
    <div>
      <ul class="flex gap-x-8">
        @foreach ($menu as $m)
        <li>
          <a href="#{{$m->link}}" class="hover:text-main-color font-semibold">{{$m->nama_menu}}</a>
        </li>
        @endforeach
      </ul>
    </div>
    <button class="border border-main-color px-3 py-2 rounded-full text-main-color hover:bg-main-color hover:text-white font-bold">Log In</button>
  </nav>
</header>