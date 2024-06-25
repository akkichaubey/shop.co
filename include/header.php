<div class="py-2 bg-black text-white relative z-[9]" x-data="{ notification: true }" x-show="notification" x-collapse>
    <div class="container items-center text-center relative">
        <p class="text-center mb-0 [&>a]:font-medium [&>a:not(:hover)]:underline max-md:text-xs lg:px-5">Sign up and
            get 20% off
            to your first
            order. <a href="#">Sign Up
                Now</a></p>
        <a href="javascript:;" class="absolute top-0 bottom-0 my-auto right-[15px] lg:right-2 w-6 h-6"
            @click="notification = ! notification" aria-label="notification close button">
            <svg class="icon w-6 h-6">
                <use xlink:href="#close-icon"></use>
            </svg>
        </a>
    </div>
</div>
<div class="header-wrap relative z-[9]" x-data="{ menu: false }">
    <header class="relative py-5 min-tabletpy-6">
        <div class="container flex items-center">
            <div class="pr-4 min-lg:hidden">
                <a href="javascript:;" @click="menu = ! menu" aria-label="menu bar button">
                    <svg class="icon w-6 h-6">
                        <use xlink:href="#menu-bar-icon"></use>
                    </svg>
                </a>
            </div>
            <div class="inline-flex shrink-0 [&>a]:inline-flex pr-3 min-lg:pr-10 [&>a>img]:lg:w-[126px]">
                <a href="index.html">
                    <img src="./vendors/images/logo.svg" alt="header logo" width="159" height="25">
                </a>
            </div>
            <div :class="['min-lg:shrink-0',
            'lg:fixed', 
            'lg:top-0', 
            'lg:bottom-0', 
            'lg:w-72',
            'lg:p-2', 
            'lg:t-transition',
            'lg:shadow-lg', 
            'lg:h-screen', 
            'lg:overflow-auto', 
            'lg:bg-white', menu ? 'lg:left-0':'lg:-left-72']">
                <div class="">
                    <div class="p-1 min-lg:hidden text-right">
                        <a href="javascript:;" class="inline-flex" @click="menu = ! menu"
                            aria-label="menu close button">
                            <svg class="icon w-6 h-6">
                                <use xlink:href="#close-icon"></use>
                            </svg>
                        </a>
                    </div>
                    <ul class="
                        flex flex-col min-lg:flex-row min-lg:items-center min-lg:gap-x-7 
                        [&>li]:relative 
                        [&>li]:flex 
                        [&>li]:lg:flex-wrap 
                        [&>li]:gap-x-1 
                        [&>li]:items-center
                        [&>li]:lg:border-b
                        [&>li]:lg:border-black
                        [&>li]:lg:border-opacity-10
                        [&>li>a]:block
                        [&>li>a]:w-full
                        [&>li>a]:p-2
                        [&>li:hover>ul]:min-lg:!block
						[&>li:hover>ul]:min-lg:!h-auto

						[&>li:hover>ul]:min-lg:opacity-100
						[&>li:hover>ul]:min-lg:translate-y-0
						[&>li:hover>ul]:min-lg:visible
                        " x-data="{ sub:0 }">
                        <li>
                            <a href="#">Shop</a>
                            <span
                                class="lg:w-[38px] lg:h-[38px] lg:grid lg:place-items-center lg:absolute lg:top-0 lg:right-0 cursor-pointer">
                                <svg class="icon w-4 h-4 t-transition" @click="sub !== 1 ? sub = 1 : sub = null"
                                    :class="sub == 1 ? 'lg:rotate-180' : ''">
                                    <use xlink:href="#chevron-down-icon"></use>
                                </svg>
                            </span>
                            <ul class=" 
                                px-2
                                min-lg:absolute 
                                min-lg:top-full 
                                min-lg:left-0 
                                min-lg:py-1
                                min-lg:px-0 
                                bg-white 
                                min-lg:shadow 
                                min-lg:rounded-xl 
                                min-lg:w-52 
                                w-full
                                min-lg:opacity-0
                                min-lg:translate-y-5
                                min-lg:invisible
                                min-lg:t-transition
                                
                                [&>li>a]:leading-none
                                [&>li]:text-black 
                                [&>li:not(:first-child)]:border-t 
                                [&>li]:border-grey-100 
                                [&>li:hover]:text-primary
                                
                                [&>li>a]:text-base
                                [&>li>a]:text-current
                                [&>li>a]:block
                                [&>li>a]:py-3
                                [&>li>a]:px-2
                                " x-show="sub == 1" x-collapse>
                                <li><a href="#">Audit</a></li>
                                <li><a href="#">Manage</a></li>
                                <li><a href="#">Secure</a></li>
                                <li><a href="#">Automate</a></li>
                            </ul>
                        </li>
                        <li><a href="product.html">On Sale</a></li>
                        <li><a href="product.html">New Arrivals</a></li>
                        <li><a href="product.html">Brands</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex gap-x-3 items-center ml-auto min-lg:w-full min-lg:pl-10">
                <div class="min-lg:pr-7 min-lg:w-full" x-data="{ expanded: false }">
                    <a href="javascript:;" class="inline-flex min-lg:hidden" @click="expanded = ! expanded"
                        aria-label="search button">
                        <svg class="icon w-6 h-6">
                            <use xlink:href="#search-icon"></use>
                        </svg>
                    </a>
                    <div class="
                    lg:absolute
                    lg:top-full
                    lg:left-0
                    lg:right-0
                    lg:px-5
                    lg:py-3
                    lg:bg-white
                    min-lg:!block
                    min-lg:!h-auto
                    min-lg:!overflow-visible
                    " x-show="expanded" x-collapse>
                        <form>
                            <div class="flex items-center px-4 py-3 bg-primary-light rounded-full">
                                <span class="inline-flex text-black text-opacity-40 shrink-0">
                                    <svg class="icon w-6 h-6">
                                        <use xlink:href="#search-icon"></use>
                                    </svg>
                                </span>
                                <input class="w-full bg-transparent px-3 outline-none"
                                    placeholder="Search for products...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="">
                    <a href="cart.html" class="inline-flex" aria-label="cart button">
                        <svg class="icon w-6 h-6">
                            <use xlink:href="#cart-icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="">
                    <a href="#" class="inline-flex" aria-label="user button">
                        <svg class="icon w-6 h-6">
                            <use xlink:href="#user-icon"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>