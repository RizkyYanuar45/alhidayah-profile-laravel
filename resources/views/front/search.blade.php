@extends('front.master')
@section('content')
	<body class="font-[Poppins]">
		<x-navbar/>
<x-navlist :categories="$categories"/>
<section id="heading" class="max-w-screen-xl mx-auto flex flex-col items-center gap-8 mt-16 px-4">
    <h1 class="text-4xl font-bold leading-tight text-center">
        Daftar Artikel
    </h1>
    <form action="{{route('front.search')}}" class="w-full max-w-2xl">
        <label for="search-bar" class="flex items-center gap-3 p-3 border border-gray-200 rounded-full transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FF6B18]">
            <div class="w-5 h-5 flex items-center justify-center">
                <img src="{{asset('assets/images/icons/search-normal.svg')}}" alt="search icon" />
            </div>
            <input
                autocomplete="off"
                type="text"
                id="search-bar"
                name="keyword"
                placeholder="Cari artikel"
                class="w-full appearance-none font-semibold placeholder:font-normal placeholder:text-gray-500 outline-none"
            />
        </label>
    </form>
</section>

<section id="search-result" class="max-w-[1130px] mx-auto flex items-start flex-col gap-[30px] mt-[70px] mb-[100px]">
    <h2 class="text-[26px] leading-[39px] font-bold">
        Search Result: <span>{{ucfirst($keyword)}}</span>
    </h2>
    <div id="search-cards" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[30px]">
        @forelse($articles as $article)
        <a href="{{route('front.details', $article->slug)}}" class="card">
            <div class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
                <div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
                    <div class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
                        <p class="text-xs text-[#FF6B18] leading-[18px] font-bold">{{$article->category->name}}</p>
                    </div>
                    <img src="{{Storage::url($article->thumbnail)}}" alt="thumbnail photo" class="w-full h-full object-cover" />
                </div>
                <div class="flex flex-col gap-[6px]">
                    <h3 class="text-lg leading-[27px] font-bold">{{substr($article->name,0,50)}}{{strlen($article->name) > 50 ? '...' : ''}}</h3>
                    <p class="text-sm leading-[21px] text-[#A3A6AE]">{{$article->created_at->format('M d,Y')}}</p>
                </div>
            </div>
        </a>
        @empty
        <p>Belum ada artikel</p>
        @endforelse
    </div>
</section>

	</body>

@endsection