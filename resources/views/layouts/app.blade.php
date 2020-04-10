<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="search" type="application/opensearchdescription+xml" href="/osd.xml" title="Stupid.Exposed">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="{{mix('js/app.js')}}" defer></script>
        <script src="{{route('translations',app()->getLocale())}}" ></script>

        <script data-ad-client="ca-pub-1296991168449447" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="bg-gray-200">
            <header class="hidden lg:block bg-gray-700 pb-32">
                <nav class="bg-gray-700">
                    <div class="max-w-7xl mx-auto px-6 lg:px-8">
                        <div class="border-b border-gray-700">
                            <div class="flex items-center justify-between h-16 px-0">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12" src="{{asset('img/logo_transparent_bg.png')}}" alt="STUPID.EXPOSED logo">
                                    </div>
                                    <div class="ml-10 flex items-baseline">
                                        <router-link :to="{name:'posts.index'}" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</router-link>
                                        <router-link :to="{name:'posts.index',params:{filter:'hot'}}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Hot</router-link>
                                        <router-link :to="{name:'categories.index'}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Categories</router-link>
                                        <router-link :to="{name:'posts.index',params:{filter:'latest'}}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Latest</router-link>
                                        <router-link :to="{name:'posts.random'}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Random</router-link>
                                    </div>
                                </div>
                                @guest
                                    <div class="ml-6 flex items-center">
                                        <a href="{{route('login')}}" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-pink-700 focus:outline-none focus:text-white focus:bg-pink-500">{{__('Log in')}}</a>
                                        <a href="{{route('register')}}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-white bg-pink-700 focus:outline-none focus:text-white focus:bg-pink-500">{{__('Register')}}</a>
                                    </div>
                                @else
                                <div class="ml-6 flex items-center">
                                    <button class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                        </svg>
                                    </button>
                                    <dropdown>
                                        <template v-slot:trigger>
                                            <button  class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                            </button>
                                        </template>
                                        <template v-slot:menu>
                                            <dropdown-menu>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                                            </dropdown-menu>
                                        </template>>
                                    </dropdown>
                                    <!--
                                    <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                                        <div>
                                            <button @click="open = !open" class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open">
                                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                            </button>
                                        </div>
                                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                            <div class="py-1 rounded-md bg-white shadow-xs">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                @endguest

                            </div>
                        </div>
                    </div>
                </nav>

            </header>
            <main class="pt-5 md:-mt-32">
                <div class="max-w-7xl pb-12 px-4 sm:px-6 lg:px-8 mx-auto">
                    <div class="mx-auto flex" >
                        <div class="hidden lg:block max-w-2xl w-1/6">
                        </div>
                        <div class="w-full  md:max-w-6x1 w-4/6">
                            @yield('content')
                        </div>
                        <div class="hidden lg:block w-1/4 max-w-2xl bg-white">
                           <!-- adds section -->
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <nav class="lg:hidden">

                </nav>
            </footer>
        </div>
    </body>
</html>

<script>
    window.config = @json(['translations'=>['test','test']]);
</script>
