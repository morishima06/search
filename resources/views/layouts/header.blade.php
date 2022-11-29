<header  class="fixed w-full bg-white  pt-3    border-b border-black z-10    ">
    <div class=" flex items-center px-3">

        <a href="{{route('home')}}"><h1 class="title text-4xl ">SEARCH</h1></a>

            <!-- 検索ボタン -->
            <div class="search-header cursor-pointer transition flex  space-x-1  items-center h-14  ml-auto ">
                <i class="fa-solid fa-magnifying-glass"></i>
                <p>検索</p>
            </div>

            <!-- responsiveハンバーガー -->
            <div class="flex items-center h-10 mr-2 ml-1 md:hidden ">
                <div class="hamburger relative z-10 w-4  h-4 mx-2">
                    <span class="absolute top-0 bg-black h-0.5 w-5 inline-block"></span>
                    <span class="absolute top-2 bg-black h-0.5 w-5 inline-block"></span>
                    <span class="absolute top-4 bg-black h-0.5 w-5 inline-block"></span>

                </div>
            </div>

            <div class="hamburger_contents fixed  w-full ml-10   z-20 bg-white  top-0  right-0 bottom-0 overflow-y-auto   left-full ">
            <!-- -->

                    <div class="border-b border-slate-300">

                        @if (Route::has('login'))
                            <div class="flex text-center  top-0 right-0 py-2 text-xs ">
                        @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <p class="text-sm mt-4 mb-3 ml-3 flex items-center justify-center w-32 h-12  text-white bg-black"><a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    ログアウト
                                </a></p>
                            </form>                      
                            @else
                            <p class="text-sm mt-4 mb-3 mx-3  flex items-center justify-center  w-32 h-12   text-white bg-black "><a href="{{ route('login') }}" class="text-sm ">ログイン</a></p>

                            @if (Route::has('register'))
                            <p class="text-sm mt-4 mb-3  flex items-center justify-center  w-32 h-12  bg-white border border-slate-300"><a href="{{ route('register') }}" class=" text-sm ">新規登録</a></p>
                            @endif
                        @endauth
                            </div>
                        @endif
                        <div class="drop_button">
                            <span class="absolute top-0 right-0 mr-14 pr-3 mt-4 inline-block border-l border-black h-6 rotate-45"></span>
                            <span class="absolute top-0 right-0 mr-14 pr-3 mt-2 inline-block border-l border-black h-6 -rotate-45"></span>
                        </div>
                    </div>

                    <div class="">


                        <div class="ml-3">
                            <h2 class="mt-4 mb-2 font-semibold">カテゴリー</h2>
                            <div class="mb-1"><a class=" hover:text-gray-500" href="{{route('category', ['category' => 'wear',])}}"> ウェア</a></div>
                                <div class="mb-1"><a class="hover:text-gray-500" href="{{route('category', ['category' => 'shoes',])}}"> シューズ</a></div>
                                <div class="mb-1"><a class="hover:text-gray-500" href="{{route('category', ['category' => 'accessories',])}}"> アクセサリー</a></div>
                                <div class="mb-1"><a class="hover:text-gray-500" href="{{route('category', ['category' => 'lifestyle',])}}"> ライフスタイル</a></div>


                        </div>

                        <div class="ml-3">
                            <h2 class="mt-3 mb-2 font-semibold">その他</h2>
                            <p class="mb-1   hover:text-gray-500 {{ request()->route()->named('dashboard*') ? 'font-bold	' : '' }}"><a class="" href="{{ route('dashboard') }}">アプリ</a></p>
                            <p class="mb-1   hover:text-gray-500 {{ request()->route()->named('upload*') ? 'font-bold	' : '' }}"><a href="{{ route('upload') }}">お問い合わせ</a></p>
                            <p class="mb-1   hover:text-gray-500  {{ request()->route()->named('show*') ? 'font-bold	' : '' }}"><a href="{{ route('show') }}">当サイトについて</a></p>
                            <p class="mb-1   hover:text-gray-500  {{ request()->route()->named('edit*') ? 'font-bold	' : '' }}"><a href="{{ route('edit') }}">メルマガ登録</a></p>

                        </div>
                        <div class="ml-3">
                            <p>2022 LIMITED.無断転載を禁止します。</p>
                            <p>利用規約プライバシーポリシーGDPR</p>
                        </div>

                    </div>
                    
            </div>

            <!-- PCアカウント表示 -->
            <div class="h-14 flex items-center">
                <div class="group relative bg-white  text-center   mr-8 hidden md:inline-block">
                    <i class="fa-solid fa-user px-3"></i>

                    <div class="absolute w-28 bg-white text-black top-8 -left-10 border-black border opacity-0  group-hover:opacity-100 md:items-center md:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden text-center  top-0 right-0 py-2 text-xs md:block">
                @auth
                    <p class="py-1"><a href="{{ url('/dashboard') }}">アカウント情報</a></p>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <p class="py-1"><a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            ログアウト
                        </a></p>
                    </form>                      
                    @else
                    <p class="py-1"><a href="{{ route('login') }}" class="text-sm underline">ログイン</a></p>

                    @if (Route::has('register'))
                    <p class="py-1"><a href="{{ route('register') }}" class=" text-sm underline">新規登録</a></p>
                    @endif
                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
    </div>

    <!-- 検索のdropdown -->
     <div class="search-content  pt-0  max-h-0 overflow-hidden mb-2 mx-2">
         <form action="{{route('search')}}" method="get"  >
            
            <input type="text" id="search-content-child" name="q"  class="w-full border-blue-500 h-9 "  placeholder="検索 ">
         </form>
     </div>
       
        
        

</header>
<script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>

@if(app('env')=='local')
<script src="{{ asset('/js/header/header.js') }}"></script>
@endif

@if(app('env')=='production')
<script src="{{ asset('/js/header/header.js') }}"></script>
@endif


