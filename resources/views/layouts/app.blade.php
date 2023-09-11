

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KYC SIMBA </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', ])
        <link rel="stylesheet" href='https://amk.sanaa.co/dist/css/app.css' />

        {{-- https://amk.sanaa.co/dist/maticlogo2.png
 --}}

        <!-- Styles -->
        @livewireStyles



    </head>
    <body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">




        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Sanaa fi" class="w-6" src="{{asset('storage/' . 'assets/matic-white-logo-1.png') }}">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>

            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="javascript:;.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>

                    </li>

                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0 overflow-hidden">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">

                    <img alt="Matic" class="w-10" src="{{ asset('storage/' . 'assets/matic-white-logo-1.png') }}">
                    <span class="hidden xl:block text-white text-lg ml-3"> SIMBA.</span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="#" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">

                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="Home"></i> </div>
                                    <div class="side-menu__title"> Statistique </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profiles')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title">Profilles  </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title">Real time Reports  </div>
                                </a>
                            </li>



                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="external-link"></i> </div>
                                    <div class="side-menu__title">Help Desk  </div>
                                </a>
                            </li>



                        </ul>
                    </li>



                    <li>
                        <a href="#" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Identification
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">


                            <li>
                                <a href="#" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title">Id Cards</div>
                                </a>
                            </li>




                            <li>
                                <a href="#" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title">Legal Docs</div>
                                </a>
                            </li>

                        </ul>
                    </li>


                     <li>
                        <a href="#" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Validation
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">


                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title">Document Management
                                    </div>
                                </a>
                            </li>




                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title"> Screening</div>
                                </a>
                            </li>

                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                                    <div class="side-menu__title"> Parking</div>
                                </a>
                            </li>

                        </ul>
                    </li>





                </ul>
            </nav>
            <!-- END: Side Menu -->

            <!-- BEGIN: Content -->
            <div class="content">
               <!-- Page Content -->

               <!-- BEGIN: Top Bar -->
<div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">


        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Application</a></li>


            <!-- Page Heading -->
            @if (isset($header))
            <li class="breadcrumb-item active" aria-current="page">{{ $header }}</li>
                {{-- <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    </div>
                </header> --}}
            @endif


        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
            <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
        </div>
        <a class="notification sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
        <div class="search-result">
             </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Sanaa fi" class="rounded-full" src="dist/images/profile-2.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Banks Loged in</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">all cards are still new, you will be notified when they're scaned </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="{{ Auth::user()->name }}" src="{{ asset('storage/' . 'assets/banks2.jpg') }}">

            {{-- profile_photo_path --}}
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Admin</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="{{route('profiles')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                </li>
                <li>
                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5" @click.prevent="$root.submit();"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a> --}}

                    <!-- Authentication -->
                <form method="POST" action="#" x-data>
                    @csrf

                    <x-responsive-nav-link href="#"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5" @click.prevent="$root.submit();"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a> --}}

                </form>

                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
            <main>
                @livewireScripts

<script>
    Livewire.on('showQRCodePreview', ticketId => {
        Livewire.emit('openModal', 'qr-code-preview', ticketId);
    });

    Livewire.on('closeModal', () => {
        Livewire.emit('closeModal', 'qr-code-preview');
    });
</script>


@livewireScripts


                {{-- {{ $slot }} --}}
                        @yield('content')

            </main>
            </div>
            <!-- END: Content -->
        </div>



        @stack('modals')
        {{-- @yield('modals') --}}

        {{-- @livewireScripts --}}

         <!-- BEGIN: JS Assets-->
         <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
         <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
         <script src="https://amk.sanaa.co/dist/js/app.js"></script>
    </body>


</html>








