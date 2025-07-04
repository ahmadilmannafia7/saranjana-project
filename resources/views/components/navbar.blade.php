<nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-10">
    <div class="container max-w-[1130px] mx-auto flex items-center justify-between h-[74px]">
        <div class="flex items-center gap-[26px]">
            <a href="{{ route('front.index') }}" class="flex w-[154px] shrink-0 items-center">
                <div
                    class="text-[27px] font-bold text-transparent bg-gradient-to-r from-[#a18cd1] via-[#fbc2eb] to-[#8ec5fc] bg-clip-text">
                    Saranjana.
                </div>
            
                <!-- <img src="{{asset('images/logos/logo.svg')}}" alt="logo"> -->
            </a>
            <ul class="flex gap-5 items-center">
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="{{ route('front.index') }}" >Home</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300 relative">
                    <button id="menu-button" class="flex items-center gap-1 focus:text-belibang-light-grey">
                        <span>Categories</span>
                        <img src="{{asset('images/icons/arrow-down.svg')}}" alt="icon">
                    </button>
                    <div
                        class="dropdown-menu hidden absolute top-[52px] grid grid-cols-2 p-4 gap-[10px] w-[526px] rounded-[20px] bg-[#1E1E1E] border border-[#414141] z-10">
                        <div
                            class="col-span-2 flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{asset('images/icons/cart.svg')}}" alt="icon">
                                </a>
                                <a href="{{ route('front.index') }}" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">All Products</p>
                                    <p class="text-xs text-belibang-grey">Everything in One Place</p>
                                </a>
                            </div>
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{asset('images/icons/crown.svg')}}" alt="icon">
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="{{ route('front.category', 3) }}"
                                    class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{asset('images/ic_template.svg')}}" alt="icon">
                                </a>
                                <a href="{{ route('front.category', 3) }}" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">Templates</p>
                                    <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                                </a>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="{{ route('front.category', 2) }}"
                                    class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{asset('images/ic_course.svg')}}" alt="icon">
                                </a>
                                <a href="{{ route('front.category', 2) }}" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">Courses</p>
                                    <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                                </a>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="{{ route('front.category', 1) }}"
                                    class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{asset('images/ic_ebook.svg')}}" alt="icon">
                                </a>
                                <a href="{{ route('front.category', 1) }}" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">Ebooks</p>
                                    <p class="text-xs text-belibang-grey">Read and Learn</p>
                                </a>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="{{ route('front.category', 4) }}"
                                    class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{asset('images/ic_font.svg')}}" alt="icon">
                                </a>
                                <a href="{{ route('front.category', 4) }}" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">Fonts</p>
                                    <p class="text-xs text-belibang-grey">Typography Selection</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">Stories</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">Benefits</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">About</a>
                </li>
            </ul>
        </div>
        <div class="flex gap-6 items-center">
            @guest
                <a href="{{ route('login') }}"
                    class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">Log
                    in</a>
                <a href="{{ route('register') }}"
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                    up</a>
            @endguest

            @auth
                <a href="{{ route('admin.dashboard') }}"
                    class="inline-flex items-center p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300"><img
                        src="{{ Storage::url(Auth::user()->avatar) }}"
                        class="w-[36px] h-[36px] mr-2 object-cover rounded-[5px] " alt="">{{ Auth::user()->name }}</a>
            @endauth
        </div>
    </div>
</nav>