  @extends('layouts.front')
  @section('content')
   <section class="md:flex  flex-1 ">
                <!-- 絞り込みレスポンシブナビゲーション -->
                <nav class="md:hidden relative w-full">
                <ul class="w-full">
                    <div class="slide_nav1 responsive-nav1 flex justify-between border-b mx-3 border-gray-700 py-2 cursor-pointer">
                        <li class="text-gray-700 font-semibold">絞り込み</li>
                        <span class="mt-1 border-gray-700 border-solid border-t-2 border-r-2 w-3 h-3 mr-3 rotate-45  inline-block "></span>
                    </div>
                </ul>

                <div class="z-10 bg-white  h-screen  slide_contents1 fixed transition ease-in-out delay-100 w-full top-0  left-full  ">
                <form action="{{route('brands',$brand)}}" method="get">
                        <!-- 目次 -->
                        <div class="flex py-3 items-center">
                            <span class="return_nav  cursor-pointer border-gray-700 border-solid border-l-2 border-b-2 w-3 h-3 ml-4 rotate-45  inline-block "></span>
                            <h1 class="w-full text-center text-lg font-semibold ">絞り込み</h1>
                        </div>
                        <div class="accodion_box w-full">
                        <ul class="px-3">
                            <!-- accordion1 -->
                            <div class="accordion1  border-slate-300  border-y">
                                <!-- header -->
                                <div class="accordion-header flex justify-between  cursor-pointer border-gray-300  items-center  py-3 ">
                                    <li class="text-gray-700 font-semibold">カテゴリー</li>
                                    <span class="mt-1 border-gray-700 border-solid border-r-2 border-b-2 w-3 h-3 mr-3 rotate-45  inline-block "></span>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0  overflow-hidden max-h-0">
                                    <div class="leading-6 font-light  text-justify mb-3">
                                        <div><a class="select {{ $category == 'wear' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'wear', 'q' => $q,'min' => $min,'max' => $max,'brand' => $brand,'color' => $color ])}}"> ウェア</a></div>
                                        <div><a class="select {{ $category == 'shoes' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'shoes','q' => $q,'min' => $min, 'max' => $max,'brand' => $brand,'color' => $color])}}"> シューズ</a></div>
                                        <div><a class="select {{ $category == 'accessories' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'accessories','q' => $q,'min' => $min, 'max' => $max,'brand' => $brand,'color' => $color])}}"> アクセサリー</a></div>
                                        <div><a class="select {{ $category == 'lifestyle' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'lifestyle','q' => $q,'min' => $min, 'max' => $max,'brand' => $brand,'color' => $color])}}"> ライフスタイル</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion2 -->
                            <div class="accordion2  border-slate-300 w-full border-b">
                                <!-- header -->
                                <div class="accordion-header flex justify-between  cursor-pointer border-gray-300  py-3">
                                        <li class="text-gray-700 font-semibold">価格</li>
                                        <span class="mt-1 border-gray-700 border-solid border-r-2 border-b-2 w-3 h-3 mr-3 rotate-45  inline-block "></span>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                                    <div class="w-full">
                                        <div class=" flex leading-6 font-light pl-9 text-justify mb-3">
                                            <div><input type="number" name="min" class="no-spin border-slate-300 h-8 w-full rounded-sm  focus:ring-0 " id="tops" value="{{$min}}" placeholder="円" ></div>
                                            <div class="mx-1"> <span>-</span></div>
                                            <div><input type="number" name="max" class="no-spin h-8 border-slate-300 w-full rounded-sm  focus:ring-0 " id="shirt" value="{{$max}}" placeholder="円"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion4 -->
                            <div class="accordion4 border-slate-300 w-full border-b">
                            <!-- header -->
                            <div class="accordion-header flex justify-between  cursor-pointer border-gray-300  py-3">
                            
                            <li class="text-gray-700 font-semibold">カラー</li>
                            <span class="mt-1 border-gray-700 border-solid border-r-2 border-b-2 w-3 h-3 mr-3 rotate-45  inline-block "></span>
                            </div>
                            <!-- Content -->
                            <div class="accordion-content  pt-0 overflow-hidden max-h-0">
                                <p class="leading-6 font-light pl-9 text-justify">
                                <div class="w-full ">
                                            @foreach($group_colors as $group_color)
                                        <div>
                                            <input type="checkbox" id="{{$group_color->color}}" name="color[]" class="ml-2 my-0.5" <?php if(isset($color)){if(in_array($group_color->color,$color)){echo 'checked';}
                                             }
                                             ?>    value="{{$group_color->color}}">  
                                            <label for="{{$group_color->color}}">{{$group_color->color}}</label>
                                        </div>
                                            @endforeach
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            <div class="flex mt-3">
                            <button type="button" class="border-black border rounded-sm w-1/2 py-2 ml-4 mr-4"><a class="inline-block w-full h-full" href="{{route('brands', $brand)}}">クリア</a></button>
                                <button  type="submit" class="text-white bg-gray-700 rounded-sm w-1/2 py-2 mr-4">検索</button>
                            </div>

                        </ul>
                    </div>
                </form>
                </div>
            </nav>
            
        <form action="{{route('brands',$brand,$category)}}" method="get" class="selectForm">

            <!-- accordion section -->
            <div class="   md:w-60  lg:w-full  hidden md:inline-block p-5	">
                <div class="accordion_box ">
                    <h3 class="text-slate-800 text-lg mb-2 font-extrabold ">絞りこみ</h3>
                    <!-- accordion1 -->
                    <div class="accordion1 border-y border-slate-300 w-full">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex   justify-between items-center h-9 my-1 ">
                        
                            <h3 class="text-slate-500 font-semibold text-1xl">全てのカテゴリー</h3>
                            <i class="fa fa-angle-down arrow_b"  aria-hidden="true"></i>
                        </div>
                        <!-- Content -->
                        <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                            <p class="leading-6 font-light pl-9 text-justify">
                                    <div><a class="select {{ $category == 'wear' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'wear','brand' => $brand, 'min' => $min,'max' => $max,'color' => $color ])}}"> ウェア</a></div>
                                    <div><a class="select {{ $category == 'shoes' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'shoes','brand' => $brand, 'min' => $min,'max' => $max,'color' => $color ])}}"> シューズ</a></div>
                                    <div><a class="select {{ $category == 'accessories' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'accessories','brand' => $brand, 'min' => $min,'max' => $max,'color' => $color ])}}"> アクセサリー</a></div>
                                    <div><a class="select {{ $category == 'lifestyle' ? 'font-bold	' : '' }}" href="{{route('brands', ['category' => 'lifestyle','brand' => $brand, 'min' => $min,'max' => $max,'color' => $color ])}}"> ライフスタイル</a></div>
                            </p>
                        </div>
                    </div>

                    <!-- accordion2 -->
                    <div class="accordion2  border-b border-slate-300  ">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex   justify-between items-center h-9 my-1 ">
                        
                            <h3 class="text-slate-500 font-semibold text-1xl">価格</h3>
                            <i class="fa fa-angle-down arrow_b"  aria-hidden="true"></i>
                        </div>
                        <!-- Content -->
                        <div class="accordion-content  pt-0 overflow-hidden max-h-0">
                            <p class="leading-6 font-light pl-9 text-justify">
                                <div class="w-full flex">
                                    <div><input type="number" name="min" class="no-spin border-slate-300 h-8 w-full rounded-sm  focus:ring-0 " id="tops" value="{{$min}}" placeholder="円" ></div>
                                    <div class="mx-1"> <span>-</span></div>
                                    <div><input type="number" name="max" class="no-spin h-8 border-slate-300 w-full rounded-sm  focus:ring-0 " id="shirt" value="{{$max}}" placeholder="円"></div>
                                </div>
                                <div><button type="submit" class="w-full bg-slate-500 text-sm text-white my-3 py-1 -sm px-2" id="outer"  >検索</button></div>
                            </p>
                        </div>
                    </div>

                    <div class="accordion4  border-b border-slate-300  ">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex   justify-between items-center h-9 my-1 ">
                            <h3 class="text-slate-500 font-semibold text-1xl">カラー</h3>
                            <i class="fa fa-angle-down arrow_b"  aria-hidden="true"></i>
                        </div>
                        <!-- Content -->
                        <div class="accordion-content  pt-0 overflow-hidden max-h-0">
                            <p class="leading-6 font-light pl-9 text-justify">
                            <div class="w-full ">
                                @foreach($group_colors as $group_color)
                                        <div>
                                            <input type="checkbox" id="{{$group_color->color}}" name="color[]" class="selector ml-2 my-0.5"
                                            <?php if(isset($color)){
                                                if(in_array($group_color->color,$color)){echo 'checked';}
                                             }
                                             ?>  
                                              value="{{$group_color->color}}">  
                                            <label for="{{$group_color->color}}">{{$group_color->color}}</label>
                                        </div>
                                 @endforeach
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- section contents -->
        <div class="w-full bg-white  mb-3 sm:mb-0 px-3">
            <div class="w-full  sm:text-2xl md:text-3xl py-3 sm:py-5 font-bold">
            <h2 class="">
                @if(@isset($brand))
                    {{$brand}}
                @endif
            </h2>
        </div>

        <div class="mb-3 sm:mb-0">
            <ul class="flex flex-wrap">
            @foreach($products as $product)
            <div class="w-1/3  lg:w-1/4 relative border-box border  border-slate-100">
                <li class="">
                    <a href="{{route('product', ['id' => $product->id]  )}}"><img src="{{asset($product->image_path1)}}" class=" aspect-[12/12] p-2 object-fill h-full w-full" alt=""></a>
                </li>
                <div class="w-full px-2  pb-1">
                    <p class="font-semibold	text-sm sm:text-lg">{{$product->brand_name}}</p>
                    <p class="text-xs sm:text-sm line-clamp-1">{{$product->product_name}}</p>
                    <p class="font-bold text-sm sm:text-lg mt-1 sm:mt-2 ">¥{{$product->price}}</p>
                </div>
            </div>
            @endforeach
            </ul>
        </div>

        {{ $products->links() }}
    </section>
    @endsection
    
    @section('script')
    <style>
        *{
            margin:0;
            padding:0;
        }
        .no-spin::-webkit-inner-spin-button,
        .no-spin::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
            -moz-appearance:textfield;
        }
        .accordion-content {
        transition: max-height 0.2s ease-out, padding 0.2s ease;
        }
        .arrow_b{
            color:#c3c4c7;
        }

    </style>

    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <script src="{{ asset('/js/accordion/accordion.js') }}"></script>
    <script src="{{ asset('/js/input/input.js') }}"></script>
    <script src="{{ asset('/js/slide/responsive_slide.js') }}"></script>
    @endsection






