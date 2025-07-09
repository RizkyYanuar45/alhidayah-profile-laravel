<h1 class="text-center mt-5 font-bold text-lg">Daftar Kategori</h1>
<nav id="Category" class="max-w-[1130px] mx-auto flex justify-center items-center gap-4 mt-[30px]">

            @foreach($categories as $category)
			<a href="{{route('front.category',$category->slug)}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
				
				<span>{{$category->name}}</span>
			</a>
		@endforeach
</nav>