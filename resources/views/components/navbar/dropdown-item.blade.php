<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

{{-- Variabel {{ $attributes }} merupakan pewarisan sifat dari syntax blade yang akan diturunkan kedalam navbar-index begitu juga $href sedangkan $slot juga sama mengambil component yang ada. --}}
<a {{ $attributes }} class="{{ request() -> fullUrlIs(url($href)) ? "bg-gray-900 text-white" : "text-zinc-300 hover:bg-gray-700" }} block rounded-md px-3 py-2 text-base font-medium" aria-current="page">{{ $slot }}</a>