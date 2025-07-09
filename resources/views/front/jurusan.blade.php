@extends('front.master')
@section('content')
<body class="font-[Poppins]">
    
<x-navbar/>
<x-navlist :categories="$categories"/>

<div class="max-w-screen-xl mx-auto flex flex-col gap-10 mt-12 px-4">
    @forelse($data as $item)

   <h1 class="mx-auto font-bold text-3xl eo">{{$item->name}}</h1>
  <img src="{{ Storage::url($item->image) }}" alt="Gambar {{ $item->name }}" class=" rounded-xl scale-90">

   <a href="{{$item->elearning}}">
   <div class=" mx-auto bg-[#FF6B18] rounded-lg w-fit text-white p-2 hover:bg-orange-700">e-learning</div>
   </a>
   
        <article class="prose lg:prose-xl mx-14">
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