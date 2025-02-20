@extends('front.master')
@section('content')
	<body class="font-[Poppins] pb-[72px] ">
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
		<!-- carousel -->
		<section id="Featured" class="mt-[20px] px-4">
    <div class="main-carousel w-full relative">
        @forelse($featured_articles as $articles)
        <div class="featured-news-card relative w-full h-[300px] sm:h-[550px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($articles->thumbnail)}}" class="thumbnail absolute w-full h-full object-cover" alt="icon" />
            <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10"></div>
            <div class="card-detail max-w-[1130px] w-full mx-auto flex flex-col sm:flex-row items-end justify-between pb-4 sm:pb-10 relative z-20">
                <div class="flex flex-col gap-[8px] sm:gap-[10px]">
                    <p class="text-white text-sm sm:text-base">Unggulan</p>
                    <a href="{{route('front.details', $articles->slug)}}" class="font-bold text-2xl sm:text-4xl leading-[28px] sm:leading-[45px] text-white two-lines hover:underline transition-all duration-300">{{$articles->name}}</a>
                    <p class="text-white text-xs sm:text-sm">{{$articles->created_at->format('M d,Y')}} - {{$articles->category->name}}</p>
                </div>
                <div class="prevNextButtons flex items-center gap-2 sm:gap-4 mt-4 sm:mt-0 mb-[30px] sm:mb-[60px] absolute bottom-4 left-1/2 transform -translate-x-1/2">
                    <button class="button--previous appearance-none w-[30px] h-[30px] sm:w-[38px] sm:h-[38px] flex items-center justify-center rounded-full ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                        <img src="assets/images/icons/arrow.svg" alt="arrow" />
                    </button>
                    <button class="button--next appearance-none w-[30px] h-[30px] sm:w-[38px] sm:h-[38px] flex items-center justify-center rounded-full ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 rotate-180">
                        <img src="assets/images/icons/arrow.svg" alt="arrow" />
                    </button>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500">Belum ada data terbaru........</p>
        @endforelse
    </div>
</section>

		<!--end carousel -->
		<!-- bio -->
		<h1 class="m-6 sm:m-10 md:m-20 text-center text-base sm:text-lg md:text-xl lg:text-2xl px-4">
    SMK swasta ini pertama kali berdiri pada tahun 2013 dan sudah menggunakan kurikulum merdeka. Beralamat di Desa Tampungrejo, RT 1 / RW 2, Dusun Tirim Kidul, Kec. Puri, Kab. Mojokerto, Jawa Timur, Kode Pos 61363. Berdiri di atas tanah seluas 7,050 m².
</h1>

		<!-- end bio -->
		 <!-- visi misi -->
		 <section id="visi-misi" class="mt-10 mx-auto px-4 max-w-screen-lg">
    <div class="flex flex-col sm:flex-row justify-center w-full gap-6">
<details class="group [&_summary::-webkit-details-marker]:hidden w-1/2 mx-auto" close>
    <summary
      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-[#FFECE1] p-4 text-gray-900"
    >
      <h2 class="font-medium mx-auto text-[#FF6B18]">Visi</h2>

      <svg
        class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </summary>

    <p class="mt-4 px-4 leading-relaxed text-gray-700">
    Menjadi SMK unggul yang melaksanakan pendidikan dari pelatihan berstandar nasional
    </p>
</details>
<details class="group [&_summary::-webkit-details-marker]:hidden w-1/2 mx-auto" close>
    <summary
      class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-[#FFECE1] p-4 text-gray-900"
    >
      <h2 class="font-medium mx-auto text-[#FF6B18]">Misi</h2>

      <svg
        class="size-5 shrink-0 transition duration-300 group-open:-rotate-180"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </summary>

    <p class="mt-4 px-4 leading-relaxed text-gray-700">
    1. Memberikan layanan pendidikan untuk menghasilkan tamatan yang beriman dan bertaqwa kepada Tuhan yang Maha Esa.<br>
                2. Menyelenggarakan pendidikan berbasis industri sesuai dengan program keahlian.<br>
                3. Memberikan layanan produksi dan jasa bagi masyarakat.<br>
                4. Mengembangkan pendidikan yang berwawasan lingkungan.
    </p>
</details>
       
        
    </div>
</section>

		<!-- end visi misi -->
		<!-- not featured -->
		<section id="Up-to-date" class="max-w-screen-xl mx-auto px-4 py-8">
    <div class="flex flex-col gap-6 mt-8">
        <div class="flex flex-col sm:flex-row justify-between items-center">
            <h2 class="font-bold text-2xl sm:text-3xl leading-tight">
                Artikel Terbaru <br />
                Dari Sekolah
            </h2>
            <p class="badge-orange rounded-full p-2.5 bg-[#FFECE1] font-bold text-xs sm:text-sm text-[#FF6B18] w-fit">
                UP TO DATE
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($articless as $article)
            <a href="{{route('front.details', $article->slug)}}" class="card-news">
                <div class="rounded-lg ring-1 ring-[#EEF0F7] p-6 flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                    <div class="thumbnail-container w-full h-48 rounded-lg flex shrink-0 overflow-hidden relative">
                        <p class="badge-white absolute top-4 left-4 rounded-full p-2 bg-white font-bold text-xs leading-4">{{$article->category->name}}</p>
                        <img src="{{Storage::url($article->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail" />
                    </div>
                    <div class="card-info flex flex-col gap-2">
                        <h3 class="font-bold text-lg leading-tight">{{$article->name}}</h3>
                        <p class="text-sm leading-5 text-[#A3A6AE]">{{$article->created_at->format('M d, Y')}}</p>
                    </div>
                </div>
            </a>
            @empty
            <p class="text-center text-gray-500">Belum ada data terbaru.....</p>
            @endforelse
        </div>
    </div>
</section>

		<!--end not featured -->
		<section id="Best-authors" class="max-w-screen-xl mx-auto px-4 py-8">
    <div class="text-center mb-8">
        <p class="badge-orange rounded-full p-2.5 bg-[#FFECE1] font-bold text-xs sm:text-sm text-[#FF6B18] w-fit mx-auto">
            WARGA SEKOLAH
        </p>
        <h2 class="font-bold text-2xl sm:text-3xl leading-tight mt-2">
            Guru
        </h2>
    </div>

    <!-- list guru -->

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
        @forelse($teacher as $authors)
        <a href="{{route('front.author', $authors->slug)}}" class="card-authors">
            <div class="rounded-lg border border-[#EEF0F7] p-4 flex flex-col items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                <div class="w-20 h-20 flex shrink-0 rounded-full overflow-hidden">
                    <img src="{{Storage::url($authors->avatar)}}" class="object-cover w-full h-full" alt="avatar" />
                </div>
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-semibold text-base">{{$authors->name}}</p>
                    <p class="text-sm leading-5 text-[#A3A6AE]">{{$authors->jabatan}}</p>
                </div>
            </div>
        </a>
        @empty
        <p class="text-center text-gray-500">Belum ada data terbaru.....</p>
        @endforelse
    </div>
</section>

			<!-- end list guru -->
		<!-- banner section -->
		


		<!-- end banner section -->
		<section id="Latest-entertainment" class="max-w-screen-xl mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="font-bold text-2xl sm:text-3xl leading-tight">
            Kilas <br />
            Artikel Informasi
        </h2>
        <a href="/category/informasi" class="rounded-full px-4 py-2 flex items-center font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
            Lihat Semua
        </a>
    </div>
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Featured Article -->
        @if($informasi_articles_featured)
    <div class="relative w-full lg:w-1/2 h-[424px] flex flex-col rounded-lg overflow-hidden">
        <img src="{{ Storage::url($informasi_articles_featured->thumbnail) }}" class="absolute inset-0 w-full h-full object-cover" alt="Featured Article" />
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[rgba(0,0,0,0.9)]"></div>
        <div class="relative z-10 flex flex-col justify-end p-6">
            <p class="text-white mb-2">Unggulan</p>
            <a href="{{ route('front.details', $informasi_articles_featured->slug) }}" class="text-white font-bold text-xl sm:text-2xl leading-tight hover:underline transition-all duration-300">
                {{ $informasi_articles_featured->name }}
            </a>
            <p class="text-white mt-2">{{ $informasi_articles_featured->created_at->format('M d,Y') }}</p>
        </div>
    </div>
@endif

        
        <!-- Latest Articles -->
        <div class="w-full lg:w-1/2 h-[424px] px-4 lg:px-5 overflow-y-scroll relative custom-scrollbar">
            <div class="flex flex-col gap-6">
                @forelse($informasi_articles as $articles)
                <a href="{{route('front.details', $articles->slug)}}" class="card py-2">
                    <div class="rounded-lg border border-[#EEF0F7] p-4 flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                        <div class="w-32 h-24 flex-shrink-0 rounded-lg overflow-hidden">
                            <img src="{{Storage::url($articles->thumbnail)}}" class="object-cover w-full h-full" alt="Thumbnail" />
                        </div>
                        <div class="flex flex-col justify-center gap-1">
                            <h3 class="font-bold text-base sm:text-lg leading-tight">{{substr($articles->name, 0, 50)}}{{strlen($articles->name) > 50 ? '...' : ''}}</h3>
                            <p class="text-sm leading-5 text-[#A3A6AE]">{{$articles->created_at->format('M d,Y')}}</p>
                        </div>
                    </div>
                </a>
                @empty
                <p class="text-center text-gray-500">Belum ada artikel</p>
                @endforelse
            </div>
            <div class="sticky bottom-0 w-full h-[100px] bg-gradient-to-b from-transparent to-white"></div>
        </div>
    </div>
</section>

		<!-- jurusan list -->
		 
		<div id="jurusan" class="mx-auto max-w-screen-xl py-12 px-4">
    <h1 class="text-center font-bold text-4xl mb-12">Jurusan</h1>
    <div class="flex flex-wrap gap-6 justify-center">
    @forelse ($jurusan as $data)
    <div class="card card-compact  w-full sm:w-80 lg:w-1/4 shadow-xl">
        <figure class=" max-h-32">
            <img
                src="{{  Str::startsWith($data->image, 'storage/') ? Storage::url($data->image) : asset($data->image) }}"
                alt="{{ $data->name }}"
                class="h-full w-full object-cover"
            />
        </figure>
        <div class="card-body flex flex-col justify-between h-36">
            <h2 class="card-title text-xl">{{ $data->name }}</h2>
            
            <div class="card-actions justify-end">
                <button 
                    class="btn hover:bg-[#FF6B18] text-[#FF6B18] hover:drop-shadow-xl hover:text-white outline bg-transparent outline-[#FF6B18] outline-1">
                    <a href="{{ $data->elearning }}">E-Learning</a>
                </button>
            </div>
        </div>
    </div>
    @empty
    <p class="text-center text-gray-500">Belum ada jurusan</p>
    @endforelse
</div>

</div>

		<!-- end jurusan list -->
<section id="Latest-business" class="max-w-screen-xl mx-auto flex flex-col gap-8 mt-16 px-4">
    <div class="flex justify-between items-center">
        <h2 class="font-bold text-2xl leading-8">
            Kilas <br />
            Artikel Acara
        </h2>
        <a href="/category/acara" class="rounded-full py-2 px-4 flex items-center gap-2 font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
            Lihat semua
        </a>
    </div>
    <div class="flex flex-col lg:flex-row gap-6">
        @if($acara_articles_featured)
        <div class="featured-news-card relative w-full lg:w-2/3 h-[424px] flex rounded-xl overflow-hidden">
            <img src="{{Storage::url($acara_articles_featured->thumbnail)}}" class="absolute inset-0 w-full h-full object-cover" alt="icon" />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#000000e6] z-10"></div>
            <div class="relative z-20 flex items-end p-6 w-full h-full">
                <div class="flex flex-col gap-2">
                    <p class="text-white text-sm">Unggulan</p>
                    <a href="{{route('front.details', $acara_articles_featured->slug)}}" class="font-bold text-2xl leading-8 text-white hover:underline transition-all duration-300">
                        {{$acara_articles_featured->name}}
                    </a>
                    <p class="text-white text-sm">{{$acara_articles_featured->created_at->format('M d,Y')}}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="w-full lg:w-1/3 h-[424px] px-5 overflow-y-auto relative custom-scrollbar">
            <div class="flex flex-col gap-5">
                @forelse($acara_articles as $articles)
                    <a href="{{route('front.details', $articles->slug)}}" class="card py-2">
                        <div class="rounded-xl border border-[#EEF0F7] p-4 flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                            <div class="w-[130px] h-[100px] rounded-xl overflow-hidden flex-shrink-0">
                                <img src="{{Storage::url($articles->thumbnail)}}" class="object-cover w-full h-full" alt="thumbnail" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <h3 class="font-bold text-lg leading-6">{{substr($articles->name,0,50)}}{{strlen($articles->name) > 50 ? '...' : ''}}</h3>
                                <p class="text-sm text-[#A3A6AE]">{{$articles->created_at->format('M d,Y')}}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>Belum ada artikel</p>
                @endforelse
            </div>
            <div class="sticky z-10 bottom-0 w-full h-24 bg-gradient-to-b from-transparent to-white"></div>
        </div>
    </div>
</section>

		
		
	</body>
@endsection
@push('after-styles')

	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
@endpush

@push('after-scripts')

		<script src="{{ asset('customjs/two-lines-text.js')}}"></script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<!-- JavaScript -->
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="{{ asset('customjs/carousel.js')}}"></script>
@endpush