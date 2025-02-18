@extends('front.master')
@section('content')

<body class="font-[Poppins] pb-[83px]">
	<x-navbar/>
<nav id="Category" class="max-w-[1130px] mx-auto flex flex-wrap justify-center items-center gap-4 mt-[20px] px-4">
    <a href="{{route('front.index')}}" class="rounded-full p-[10px_18px] flex gap-[8px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] text-sm sm:text-base">
        <span>Home</span>
    </a>
    <a href="{{route('front.jurusan')}}" class="rounded-full p-[10px_18px] flex gap-[8px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] text-sm sm:text-base">
        <span>Jurusan</span>
    </a>
    @foreach($categories as $category)
    <a href="{{route('front.category',$category->slug)}}" class="rounded-full p-[10px_18px] flex gap-[8px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] text-sm sm:text-base">
        <span>{{$category->name}}</span>
    </a>
    @endforeach
</nav>
<section id="author" class="max-w-screen-xl mx-auto flex flex-col gap-8 mt-16 px-4">
    <div id="title" class="flex items-center gap-6">
        <h1 class="text-4xl font-bold">Artikel Oleh Guru</h1>
        <h1 class="text-4xl font-bold">/</h1>
        <div class="flex gap-4 items-center">
            <div class="w-16 h-16 flex-shrink-0 rounded-full overflow-hidden">
                <img src="{{Storage::url($teacher->avatar)}}" alt="profile photo" class="w-full h-full object-cover" />
            </div>
            <div class="flex flex-col">
                <p class="text-lg font-semibold">{{$teacher->name}}</p>
                <span class="text-gray-500">{{$teacher->jabatan}}</span>
            </div>
        </div>
    </div>
    <div id="content-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($teacher->news as $news)
        <a href="{{route('front.details', $news->slug)}}" class="card">
            <div class="flex flex-col gap-4 p-6 transition-all duration-300 ring-1 ring-gray-200 hover:ring-2 hover:ring-[#FF6B18] rounded-lg overflow-hidden bg-white">
                <div class="thumbnail-container h-48 relative rounded-lg overflow-hidden">
                    <div class="badge absolute left-4 top-4 flex p-2 bg-white rounded-full">
                        <p class="text-xs font-bold">{{$news->category->name}}</p>
                    </div>
                    <img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo" class="w-full h-full object-cover" />
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-lg font-bold">{{substr($news->name,0,50)}}{{strlen($news->name) > 50 ? '...' : ''}}</h3>
                    <p class="text-sm text-gray-500">{{$news->created_at->format('M d,Y')}}</p>
                </div>
            </div>
        </a>
        @empty
        <p>Belum ada artikel yang diterbitkan...</p>
        @endforelse
    </div>
</section>

<section id="Advertisement" class="max-w-screen-xl mx-auto flex flex-col items-center gap-4 mt-16 px-4">
   
<div class="flex flex-col gap-3 items-center w-full">
@if($banner) 
        <a href="{{$banner->link}}" class="w-full">
            <div class="w-full max-w-4xl h-[120px] border border-gray-200 rounded-2xl overflow-hidden">
                <img src="{{Storage::url($banner->thumbnail)}}" class="object-cover w-full h-full" alt="Advertisement" />
            </div>
        </a>
        <p class="font-medium text-sm text-gray-500 flex items-center gap-1">
            Our Advertisement 
            <a href="#" class="w-4 h-4">
                <img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" class="w-full h-full" />
            </a>
        </p>
        @endif
    </div>
    
</section>

</body>

