@extends('front.master')
@section('content')
<body class="font-[Poppins]">
    
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

		<div class="max-w-screen-xl mx-auto flex flex-col gap-10 mt-12 px-4">
    @forelse($data as $item)
   <h1 class="mx-auto">{{$item->name}}</h1>
   <a href="{{$item->elearning}}">
   <div class=" mx-auto bg-[#FF6B18] rounded-lg w-fit text-white p-2 hover:bg-orange-700">e-learning</div>
   </a>
   
        <article class="prose lg:prose-xl mx-auto">
            {!! $item->description !!}
        </article>
    @empty
        <p class="text-center text-gray-500">Kosong</p>
    @endforelse
</div>

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