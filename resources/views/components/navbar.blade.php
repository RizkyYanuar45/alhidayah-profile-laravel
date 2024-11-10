<nav id="Navbar" class="max-w-[1130px] mx-auto flex flex-wrap justify-between items-center mt-[20px] px-4">
    <div class="flex flex-col sm:flex-row gap-[15px] sm:gap-[30px] items-center w-full">
        <div class="logo-container flex flex-col sm:flex-row gap-[15px] sm:gap-[30px] items-center w-full sm:w-auto">
            <a href="{{route('front.index')}}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/logoalhidayah.png')}}" alt="logo" width="137px" height="46px" class="scale-50 sm:scale-100"/>
            </a>
            <h1 class="text-center sm:text-left font-[Poppins] font-bold text-base sm:text-xl">SMK AL-HIDAYAH PURI</h1>
        </div>
        <form method="GET" action="{{route('front.search')}}" class="w-full sm:w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[10px] sm:p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300 mt-4 sm:mt-0">
            @csrf    
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg ')}}" alt="icon" />
            </button>
            <input type="text" name="keyword" id="" class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE] text-sm sm:text-base" placeholder="cari informasi..." />
        </form>
        <div class="flex justify-center mt-4 sm:mt-0 w-full sm:w-auto">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdy_VyKb38sVi9pzTtrrekc_GLUKG_-Qj4aabhJfoLPhXHhXQ/viewform" class="rounded-full p-[10px_16px] sm:p-[12px_22px] flex gap-[10px] font-bold transition-all duration-300 bg-[#FF6B18] text-white hover:shadow-[0_10px_20px_0_#FF6B1880] text-sm sm:text-base">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" />
                </div>
                <span>PPDB</span>
            </a>
        </div>
    </div>
</nav>
