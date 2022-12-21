<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
        <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

    </head>
    <body class="antialiased b-40">
    @include('layouts.header')

       
 <section class="md:flex  pt-20 ">
 <nav class="md:hidden relative w-full">
            <ul class="w-full">
                <div class="slide_nav1 responsive-nav1 flex justify-between border-b mx-3 border-gray-700 py-2 cursor-pointer">
                    <li class="text-gray-700 font-semibold">絞り込み</li>
                    <span class="mt-1 border-gray-700 border-solid border-t-2 border-r-2 w-3 h-3 mr-3 rotate-45  inline-block "></span>
                </div>
            </ul>


             <!-- レスポンシブナビゲーション -->
            <div class="z-10 bg-white  h-screen  slide_contents1 fixed transition ease-in-out delay-100 w-full top-0  left-full  ">
            <form action="{{route('brands',$brand)}}" method="get">
                <!--   あとで上に戻す-->
                    <!-- 目次 -->
                    <div class="flex py-3 ">
                        <span class="return_nav  cursor-pointer mt-1 border-gray-700 border-solid border-l-2 border-b-2 w-3 h-3 ml-4 rotate-45  inline-block "></span>

                        <h1 class="w-full text-center text-lg font-semibold ">絞り込み</h1>
                    </div>
                    <div class="accodion_box w-full">
                    <ul class="px-3">
                        <!-- accordion1 -->
                        <div class="accordion1  border-slate-300  border-y">
                            <!-- header -->
                            <div class="accordion-header flex justify-between  cursor-pointer border-gray-300   py-3 ">
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
                                        <input type="checkbox" id="{{$group_color->color}}" name="color" class="ml-2 my-0.5" <?php if($group_color->color == $color){echo 'checked';}?>  value="{{$group_color->color}}">  
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
                                    <input type="checkbox" id="{{$group_color->color}}" name="color" class="selector ml-2 my-0.5" <?php if($group_color->color == $color){echo 'checked';}?>  value="{{$group_color->color}}">  
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
            <?php if(isset($brand)){
                echo $brand;
                }?>
        
        </h2>
    </div>

    <div class="mb-3 sm:mb-0">
        <ul class="flex flex-wrap">
        @foreach($products as $product)
        <div class="w-1/3  lg:w-1/4 relative border-box border  border-slate-100">
            <li class="">
                <a href="{{route('product', ['id' => $product->id]  )}}"><img src="{{asset($product->image_path1)}}" class=" aspect-[12/12] p-2 object-fill h-full w-full" alt=""></a>
            </li>
            <div class="w-full pl-2  pb-1">
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
    @include('layouts.footer')

    
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
    @if(app('env')=='local')
    <script src="{{ asset('/js/accordion/accordion.js') }}"></script>
    <script src="{{ asset('/js/input/disabled.js') }}"></script>
    <script src="{{ asset('/js/input/submit.js') }}"></script>
    <script src="{{ asset('/js/slide/responsive_slide.js') }}"></script>
    @endif

    @if(app('env')=='production')
    <script src="{{ secure_asset('/js/accordion/accordion.js') }}"></script>
    <script src="{{ secure_asset('/js/input/disabled.js') }}"></script>
    <script src="{{ secure_asset('/js/input/submit.js') }}"></script>
    <script src="{{ secure_asset('/js/slide/responsive_slide.js') }}"></script>
    @endif



    </body>
</html>






