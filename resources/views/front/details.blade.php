@extends('front.master')
@section('content')

<body class="font-[Poppins]">
    	<!-- nav logo search -->
		<x-navbar/>
  
  <!--end nav logo search -->
  <!-- nav list -->
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
  <!--end nav list -->
  <header class="flex flex-col items-center gap-[30px] mt-[50px] md:gap-[50px] md:mt-[70px]">
    <div id="Headline" class="max-w-[1130px] mx-auto flex flex-col gap-4 items-center text-center">
        <p class="w-fit text-[#A3A6AE] text-sm md:text-base">{{$article->created_at->format('M d,Y')}} - {{$article->category->name}}</p>
        <h1 id="Title" class="font-bold text-[32px] leading-[42px] md:text-[46px] md:leading-[60px]">{{$article->name}}</h1>
        <div class="flex flex-col md:flex-row items-center justify-center gap-[20px] md:gap-[70px]">
<a id="Author" href="{{ $article->teacher ? route('front.author', $article->teacher->slug) : '#' }}" class="w-fit h-fit">
    <div class="flex items-center gap-3">
        <div class="w-8 h-8 md:w-10 md:h-10 rounded-full overflow-hidden">
            @if($article->teacher && $article->teacher->avatar)
                <img src="{{ Storage::url($article->teacher->avatar) }}" class="object-cover w-full h-full" alt="avatar">
            @else
                <img src="{{ asset('assets/images/logos/logoalhidayah.png') }}" class="object-cover w-full h-full" alt="default avatar">
            @endif
        </div>
        <div class="flex flex-col text-center md:text-left">
            <p class="font-semibold text-sm leading-[21px]">{{ $article->teacher ? $article->teacher->name : 'Unknown Author' }}</p>
            <p class="text-xs leading-[18px] text-[#A3A6AE]">{{ $article->teacher ? $article->teacher->jabatan : 'Unknown Position' }}</p>
        </div>
    </div>
</a>

        </div>
    </div>
    <div class="w-full h-[250px] md:h-[500px] flex shrink-0 overflow-hidden">
        <img src="{{Storage::url($article->thumbnail)}}" class="object-cover w-full h-full" alt="cover thumbnail">
    </div>
</header>

<section id="Article-container" class="max-w-screen-xl mx-auto flex flex-col lg:flex-row gap-10 lg:gap-20 mt-8 lg:mt-12">
    <article id="Content-wrapper" class="w-full lg:w-2/3">
        {!! $article->content !!}
    </article>
    <div class="side-bar flex flex-col w-full lg:w-1/3 shrink-0 gap-10 mt-10 lg:mt-0">
    @if($square_banner_1)    
    <div class="ads flex flex-col gap-3 w-full">
            <a href="{{$square_banner_1->link}}">
                <img src="{{Storage::url($square_banner_1->thumbnail)}}"  class="object-contain w-full h-auto w-[100px] h-[100px]" alt="ads" />
            </a>
            <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
            </p>
    </div>
    @endif
        <div id="More-from-author" class="flex flex-col gap-4">
            <p class="font-bold">Lainnya dari guru ini</p>
            @forelse($author_news as $news)
            <a href="{{route('front.details', $news->slug)}}" class="card-from-author">
                <div class="rounded-lg ring-1 ring-[#EEF0F7] p-4 flex gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                    <div class="w-16 h-16 flex shrink-0 overflow-hidden rounded-2xl">
                        <img src="{{Storage::url($news->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="line-clamp-2 font-bold">{{$news->name}}</p>
                        <p class="text-xs text-[#A3A6AE]">{{$news->created_at->format('M d,Y')}} - {{$news->category->name}}</p>
                    </div>
                </div>
            </a>
            @empty
            <p>Tidak ada artikel lain</p>
            @endforelse
        </div>
        @if($square_banner_2)
        <div class="ads flex flex-col gap-3 w-full">
            <a href="{{$square_banner_2->link}}">
                <img src="{{Storage::url($square_banner_2->thumbnail)}}" class="object-contain w-full h-auto" alt="ads" />
            </a>
            <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
            </p>
        </div>
        @endif
    </div>
   
</section>

@if($banner)
<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-10 sm:mt-12 md:mt-16">
	<div class="flex flex-col gap-3 shrink-0 w-full sm:w-[900px] px-4 sm:px-0">
		<a href="{{$banner->link}}">
			<div class="w-full sm:w-[900px] h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
				<img src="{{Storage::url($banner->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
			</div>
		</a>
		<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
			Our Advertisement 
			<a href="#" class="w-[18px] h-[18px]"><img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
		</p>
	</div>
</section>
@endif

<section id="Up-to-date" class="w-full flex justify-center mt-16 py-12 bg-[#F9F9FC]">
    <div class="max-w-screen-lg mx-auto flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl lg:text-3xl leading-tight">
                Artikel lain
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($articles as $otherArticles)
            <a href="{{ route('front.details', $otherArticles->slug) }}" class="card">
                <div class="flex flex-col gap-4 p-6 transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-lg overflow-hidden bg-white">
                    <div class="thumbnail-container h-48 relative rounded-lg overflow-hidden">
                        <div class="badge absolute left-4 top-4 bg-white rounded-full px-4 py-2">
                            <p class="text-xs font-bold text-black">{{ $otherArticles->category->name }}</p>
                        </div>
                        <img src="{{ Storage::url($otherArticles->thumbnail) }}" alt="thumbnail photo" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-bold text-black">{{ $otherArticles->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $otherArticles->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </a>
            @empty
            <p class="text-center col-span-full">Tidak ada artikel lain</p>
            @endforelse
        </div>
    </div>
</section>



	
</body>
@endsection

@push('after-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    @endpush

    @push('after-scripts')
    <script src="js/two-lines-text.js"></script>
    @endpush