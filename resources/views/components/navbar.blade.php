<nav id="Navbar" class="max-w-[1130px] mx-auto mt-[20px] px-4">
    <!-- Wrapper untuk Logo dan Search Bar -->
    <div class="flex flex-col sm:flex-row justify-center items-center space-x-6 mb-4">
        <!-- Logo Container -->
        <div class="flex flex-col sm:flex-row gap-[15px] sm:gap-[30px] items-center">
            <a href="{{route('front.index')}}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logoalhidayah.png')}}" alt="logo" width="137px" height="46px" class="scale-50 sm:scale-100"/>
            </a>
            <h1 class="text-center sm:text-left font-[Poppins] font-bold  text-base sm:text-xl">SMK AL-HIDAYAH PURI</h1>
        </div>
        
        <!-- Search Bar -->
        <form method="GET" action="{{route('front.search')}}" class="w-full sm:w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[10px] sm:p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
            @csrf    
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg ')}}" alt="icon" />
            </button>
            <input type="text" name="keyword" id="" class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE] text-sm sm:text-base" placeholder="cari informasi..." />
        </form>
    </div>
    
 
    <div class="flex justify-center space-x-6">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdy_VyKb38sVi9pzTtrrekc_GLUKG_-Qj4aabhJfoLPhXHhXQ/viewform" class="rounded-full p-[10px_16px] sm:p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880] text-sm sm:text-base">
            <div class="w-5 h-5 flex shrink-0">
                <img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" />
            </div>
            <span>PPDB</span>
        </a>
        <a href="{{route('front.index')}}" class="rounded-full p-[10px_16px] sm:p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880] text-sm sm:text-base">
            <div class="w-5 h-5 flex shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house text-white"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
            </div>
            <span>Home</span>
        </a>
        <a href="{{route('front.jurusan')}}" class="rounded-full p-[10px_16px] sm:p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880] text-sm sm:text-base">
            <div class="w-5 h-5 flex shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap-icon lucide-graduation-cap text-white"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
            </div>
            <span>Jurusan</span>
        </a>
    </div>
</nav>