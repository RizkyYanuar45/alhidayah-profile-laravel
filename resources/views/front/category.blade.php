@extends('front.master')
@section('content')
<body class="font-[Poppins] pb-[83px]">
	<x-navbar/>
    <!-- nav list -->
<x-navlist :categories="$categories"/>
        <!-- end nav list -->
<section id="Category-result" class="max-w-screen-xl mx-auto flex flex-col gap-8 mt-16 px-4">
    <h1 class="text-3xl md:text-4xl leading-tight font-bold text-center">
        Jelajahi <br />
        Artikel {{$category->name}}
    </h1>
    <div id="search-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($category->news as $news)
            <a href="{{route('front.details', $news->slug)}}" class="card">
                <div class="flex flex-col gap-4 p-6 transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-lg overflow-hidden bg-white">
                    <div class="thumbnail-container h-48 relative rounded-lg overflow-hidden">
                        <div class="badge absolute left-4 top-4 bg-white rounded-full p-2">
                            <p class="text-xs font-bold text-[#FF6B18]">{{$news->category->name}}</p>
                        </div>
                        <img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-bold">{{substr($news->name, 0, 50)}}{{strlen($news->name) > 50 ? '...' : ''}}</h3>
                        <p class="text-sm text-[#A3A6AE]">{{$news->created_at->format('M d,Y')}}</p>
                    </div>
                </div>
            </a>
        @empty
            <p class="text-center text-gray-500">Belum ada berita di kategori ini</p>
        @endforelse
    </div>
</section>
@if($banner)
<section id="Advertisement" class="max-w-screen-xl mx-auto flex flex-col items-center gap-4 mt-16 px-4">
    <a href="{{$banner->link}}" class="w-full max-w-3xl">
        <div class="w-full h-[120px] border border-[#EEF0F7] rounded-2xl overflow-hidden">
            <img src="{{Storage::url($banner->thumbnail)}}" class="object-cover w-full h-full" alt="Advertisement" />
        </div>
    </a>
    <p class="font-medium text-sm leading-5 text-[#A3A6AE] flex items-center gap-1 mt-2">
        Our Advertisement 
        <a href="#" class="w-5 h-5">
            <img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" class="w-full h-full" />
        </a>
    </p>
</section>
@endif
</body>

@endsection