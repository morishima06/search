@extends('layouts.front')

@section('content')
    <!-- 表示アニmーション -->
    <div class="loading w-screen h-screen  bg-white fixed z-40 flex justify-center items-center -mt-20">
        <div class="w-20 ">
            <div class="animate-loader border-slate-300 w-12 h-12 border-t border-r m-auto rounded-full"></div>
            <p class="loading-content text-center text-slate-500 text-sm mt-3 m-auto ">Loading</p>
        </div>
    </div>

    <section class="load-content hidden">
            <div class="px-3">
            <h1 class="w-full  text-lg text-black font-bold border-b  mb-3  border-black">カテゴリー</h1>

            </div>
            <!-- スライダーのコンテナ -->
                <div class="swiper  ">
                    <!-- 必要に応じたwrapper -->
                    <div class="swiper-wrapper ">
                    <!-- スライド -->
                        <div class="swiper-slide   h-full    px-3 ">
                                <a href="{{route('category', ['category' => 'wear' ])}}" class=" bg-slate-400"> <img src="{{ asset('image/apparel.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                                <h2 class=" px-1 text-white font-semibold bg-black  inline-block  "> ウエア</h2>
                        </div>
                        <div class="swiper-slide   w-full  px-3 ">
                                <a href="{{route('category', ['category' => 'shoes'])}}" class=" bg-slate-400"> <img src="{{ asset('image/shoes.jpg')}}" class="h-80 sm:h-96 object-cover w-full " alt=""></a>
                                <h2 class="px-1 text-white font-semibold bg-black inline-block  "> シューズ</h2>
                        </div>
                        <div class="swiper-slide   w-full  px-3">
                                <a href="{{route('category', ['category' => 'accessories'])}}" class=" bg-slate-400"> <img src="{{ asset('image/accessories.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                                <h2 class="px-1 text-white font-semibold bg-black inline-block  "> アクセサリー</h2>
                        </div>
                        <div class="swiper-slide   w-full   px-3">
                            <a  href="{{route('category', ['category' => 'lifestyle'])}}" class=" bg-slate-400"> <img src="{{ asset('image/lifestyle.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                            <h2 class="px-1 text-white font-semibold bg-black  inline-block  ">ライフスタイル</h2>
                        </div>
                    </div>
                    <div class="swiper-button-prev after:bg-[url('/image/left_button.png')] after:bg-no-repeat after:w-12 after:h-12  after:bg-contain w-10 h-10   pl-2 pb-1  sm:pt-6"></div>
                    <div class="swiper-button-next  after:bg-[url('/image/right_button.png')] after:bg-no-repeat after:w-12 after:h-12   after:bg-contain w-10 h-10   pr-2 pb-1  sm:pt-6"></div>
                </div>

            <div class="flex justify-center items-center mt-8 sm:mt-12 mb-5 ">
                <h2 class=" border-black border   text-sm font-semibold"><a  href="{{route('category', ['category' => 'all'])}}" class="p-2 inline-block w-full h-wull" href="">全てのカテゴリーの商品</a></h2>
            </div>
            
            <div class="px-3">
                <h1 class="w-full text-lg text-black font-bold border-b pb mb-3 mt-12  border-black">ブランド</h1>
                <!-- <h2 class="text-sm  text-slate-600 font-semibold  mb-2 line-through"><span class="  w-full h-wull border-b border-slate-600 pb-1 " href="">全てのブランド</span> </h2> -->
            
                <div class="flex mb-16">
                    <div class="sm:flex w-1/2 inline-block">
                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">#</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => '1017 ALYX 9SM'])}}">1017 ALYX 9SM</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => '424'])}}">424</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">A</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'APC'])}}">APC</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'ADIDAS'])}}">ADIDAS</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">B</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'BURBERRY'])}}">BURBERRY</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">C</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'C.P COMPANY'])}}">C.P COMPANY</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'CONVERSE'])}}">CONVERSE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">E</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'EAST PACK'])}}">EAST PACK</a></li>
                            </ul>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">F</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'FEAR OF GOD'])}}">FEAR OF GOD</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'FOLK'])}}">FOLK</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">H</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'HUMAN MADE'])}}">HUMAN MADE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">J</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'JIL SANDER'])}}">JIL SANDER</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">L</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'LACOSTE'])}}">LACOSTE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">M</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MAISON MALGELA'])}}">MAISON MALGELA</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MAISON KITUNE'])}}">MAISON KITUNE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MONCLER'])}}">MONCLER</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sm:flex w-1/2 inline-block">
                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">N</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NANAMICA'])}}">NANAMICA</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NEIGHBORHOOD'])}}">NEIGHBORHOOD</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NEW BALANCE'])}}">NEW BALANCE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NIKE'])}}">NIKE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">O</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'OFF-WHITE'])}}">OFF-WHITE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'OAMC'])}}">OAMC</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">P</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'PALM ANGLES'])}}">PALM ANGLES</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'PRADA'])}}">PRADA</a></li>
                            </ul>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">R</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'RAF SIMONS'])}}">RAF SIMONS</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'RHUDE'])}}">RHUDE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">S</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'STUSSY'])}}">STUSSY</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'STONE ILAND'])}}">STONE ILAND</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">U</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'UNDER COVER'])}}">UNDER COVER</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">V</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'VANS'])}}">VANS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @endsection

    @section('script')
    <script src="{{ asset('/js/swiper/single_config.js') }}"></script>
    @endsection

