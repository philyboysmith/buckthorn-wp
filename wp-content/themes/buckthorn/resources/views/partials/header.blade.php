<header class=" p-4 md:p-4 sticky z-10 top-0 bg-white">
<div class="m-auto w-full max-w-screen-2xl">
            <div class="flex justify-between ">
                <div>
                    <a href="/">
                        <img alt="Buckhorn Partners LLP" class="header-logo" src="/assets/images/logo.png"/>
                    </a>
                </div>
                <div class="flex items-end lg:block header-contact text-right">
                    <div class="md:flex md:justify-end items-end md:mb-4">
                        <a class="text-grey px-4 py-1 pr-8 mr-4 rounded-full hidden arrow-link document-rep-btn" href="/document-repository/">
                            Document Repository
                        </a>
                        <form action="/" class="flex relative search-form">
                            <input class="font-normal px-4 py-1 pr-10 rounded-full hidden lg:inline-block" placeholder="Search" type="text" name="s" >
                                <button class="rounded-full lg:absolute search-button" type="submit">
                                    <img alt="search" class="p-1" src="/assets/images/icon-search.svg">
                                    </img>
                                </button>
                            </input>
                        </form>
                    </div>
                    <div class="left_menu">
                        <input id="main_menu" name="main_menu" type="checkbox"/>
                        <label for="main_menu">
                            <span aria-controls="main_menu" aria-label="Menu" class="hamburger hamburger--elastic">
                                <span class="hamburger-box font-bold uppercase text-grey">
                                    <span class="hamburger-inner hamburger-open block">
                                        Menu
                                    </span>
                                    <span class="hamburger-inner hamburger-close block">
                                        ✕ Close
                                    </span>
                                </span>
                            </span>
                        </label>
                        <nav class="menu font-bold uppercase text-grey block float-right lg:block lg:bg-none">
                            @if (has_nav_menu('primary_navigation'))
                                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}

                            @endif

                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </header>
