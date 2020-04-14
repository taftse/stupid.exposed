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
                                        <router-link :to="{name:'posts.index',params:{filter:'hot'}}" class="inline-flex items-center px-3 py-2 rounded-md text-sm font-medium text-orange-400 hover:text-white bg-red-800 focus:outline-none focus:text-white focus:bg-red-900">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 384 512" class="-ml-0.5 mr-2 h-4 w-4">
                                                <path fill="currentColor" d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z" class=""></path>
                                            </svg>
                                            Hot
                                        </router-link>
                                        <router-link :to="{name:'posts.index',params:{filter:'latest'}}" class="inline-flex items-center ml-4 px-3 py-2 rounded-md text-sm font-medium text-green-300 bg-blue-700 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 512 512" class="-ml-0.5 mr-2 h-4 w-4">
                                                <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z" class=""></path></path>
                                            </svg>
                                            Latest
                                        </router-link>
                                        <router-link :to="{name:'posts.index',params:{filter:'legendary'}}" class="inline-flex items-center ml-4 px-3 py-2 rounded-md text-sm font-medium text-yellow-400 bg-green-600 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 576 512" class="-ml-0.5 mr-2 h-4 w-4">
                                                <path fill="currentColor" d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 35.7 22.5 72.4 61.9 100.7 31.5 22.7 69.8 37.1 110 41.7C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6c40.3-4.6 78.6-19 110-41.7 39.3-28.3 61.9-65 61.9-100.7V88c0-13.3-10.7-24-24-24zM99.3 192.8C74.9 175.2 64 155.6 64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-15.1-5.2-29.2-12.4-41.7-21.4zM512 144c0 16.1-17.7 36.1-35.3 48.8-12.5 9-26.7 16.2-41.8 21.4 7-25 11.8-53.6 12.8-86.2H512v16z" class=""></path>
                                            </svg>
                                            Legendary
                                        </router-link>
                                        <router-link :to="{name:'tags.index'}" class="inline-flex items-center ml-4 px-3 py-2 rounded-md text-sm font-medium text-pink-300 bg-purple-500 hover:text-white  focus:outline-none focus:text-white focus:bg-gray-700">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 640 512" class="-ml-0.5 mr-2 h-4 w-4">
                                                <path fill="currentColor" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z" class=""></path>
                                            </svg>
                                            Tags
                                        </router-link>
                                        <router-link :to="{name:'post.create'}" class="inline-flex items-center ml-4 px-3 py-2 rounded-md text-sm font-medium text-white bg-pink-500 focus:outline-none focus:text-white focus:bg-pink-700">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 512 512" class="-ml-0.5 mr-2 h-4 w-4">
                                                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z" class=""></path>
                                            </svg>
                                            Add More Stupid
                                        </router-link>
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
