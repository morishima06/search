
<x-app-layout>
    <div class="md:w-4/5  ">
        <form action="{{route('upload_check')}}" method="post" enctype="multipart/form-data" >
                @csrf
            <h3 class="text-2xl  font-semibold bg-white text-slate-700 pb-12 h-10 pl-7 " >新規出品</h3>

            <div class="bg-slate-100  rounded border mr-7 mt-7 ml-7 mb-2" >
                <h4 class="text-xl pt-8 ml-7 text-slate-700 mb-8">商品画像</h4>

                    <!-- uploderフレーム -->
                    <div class="flex justify-evenly   rounded bg-slate-100    ">
                        <!-- 画像upload1 -->
                        <div class="relative my-2 aspect-square h-auto w-1/4  ml-8 mr-2 ">

                            <div id="" class="removeImg hidden absolute  right-0  w-8 h-8"  >
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full " >

                                <div id="" class="inputArea w-full h-full ">
                                    <p class="text-xs  sm:text-sm">
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile1"    class="uploadfile hidden">
                                        </label>
                                    </p>
                                </div>
                                <div class="previewBox"></div>
                            </div>
                        </div>

                        <!-- 画像upload2 -->
                        <div class="relative my-2  aspect-square h-auto w-1/4 mx-2  ">

                            <div id="" class="removeImg hidden absolute  right-0  w-8 h-8"  >
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300 w-full h-full  bg-white   " >

                                <div id="" class="inputArea w-full h-full ">
                                    <p class="text-xs  sm:text-sm">
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile2"    class="uploadfile hidden">
                                        </label>
                                    </p>
                                </div>
                                <div class="previewBox"></div>
                            </div>
                        </div>
                        <!-- 画像upload3 -->
                        <div class="relative  my-2 md:aspect-square h-auto w-1/4 mx-2 ">
                        

                            <div id="" class="removeImg hidden absolute  right-0  w-8 h-8"  >
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full " >

                                <div id="" class="inputArea w-fill h-full ">
                                    <p class="text-xs  sm:text-sm">
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile3"   class="uploadfile hidden">
                                        </label>

                                    </p>
                                
                                </div>
                                <div class="previewBox"></div>
                            </div>
                        </div>

                        <!-- 画像upload4 -->
                        <div class="relative  my-2 md:aspect-square  aspect-square h-auto w-1/4 ml-2 mr-8 ">
                        

                            <div id="" class="removeImg hidden absolute  right-0  w-8 h-8"  >
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full " >

                                <div id="" class="inputArea w-fill h-full ">
                                    <p class="text-xs  sm:text-sm">
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile4"    class="uploadfile hidden">
                                        </label>

                                    </p>
                                
                                </div>
                                <div class="previewBox"></div>
                            </div>
                        </div>

                        
                    </div>
                    @if ($errors->first('uploadfile1')) 
                         <p class="text-orange-400  ml-8 text-sm font-semibold">※{{$errors->first('uploadfile1')}}</p>
                    @endif




                    <div class="ml-8 mt-3 mr-8">

                        <label for="product_name" class="text-slate-700">商品名</label>
                        <input type="text"  id="product_name" name="product_name" class="border h-8 w-full focus:border-none   border-gray-300 rounded-lg">
                        @if ($errors->first('product_name')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('product_name')}}</p>
                        @endif

                    </div>

                    <div class=" ml-8  mt-3 mr-8">
                        <label for="" class="block text-slate-700">カテゴリー</label>
                        <select name="category" id="category" class=" border w-full border-gray-300 h-8 rounded-lg pl-3">
                            <option value="" >選択してください</option>
                            <option value="wear">ウェア</option>
                            <option value="accessories">アクセサリー</option>
                            <option value="shoes">シューズ</option>
                            <option value="lifestyle">ライフスタイル</option>
                        </select>
                        @if ($errors->first('category')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('category')}}</p>
                        @endif


                        <select name="category_item" id="category_item" class="hidden border mt-3 w-full border-gray-300 h-8 pl-3 rounded-lg">
                            <option value="">選択してください</option>
                        </select>
                        @if ($errors->first('category_item')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('category_item')}}</p>
                        @endif

                    </div>

                    <div class="ml-8  mt-3 pr-8">
                        <label for="brand_name" class="block text-slate-700">ブランド名</label>
                        <input type="text" id="brand_name" name="brand_name" class="w-full border h-8 border-gray-300  rounded-lg focus:border-none ">
                        @if ($errors->first('brand_name')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('brand_name')}}</p>
                        @endif

                    </div>


                    <div class="ml-8  mt-3 pr-8">
                        <label for="color" class="block text-slate-700">カラー</label>
                        <select name="color" id="color" class=" border w-full border-gray-300 h-8 rounded-lg pl-3 focus:border-none">
                            <div><option class="bg-slate-300 text-xl" value="">色指定なし</option></div>
                            <option value="白色系">ホワイト(白)系</option>
                            <option value="黒色系">ブラック(黒)系</option>
                            <option value="灰色系">グレー(灰色)系</option>
                            <option value="茶色系">ブラウン(茶)系</option>
                            <option value="緑色系">グリーン(緑)系</option>
                            <option value="青色系">ブルー(青)系</option>
                            <option value="赤色系">レッド(赤)系</option>
                            <option value="黄色系">イエロー(黄)系</option>
                        </select>
                        @if ($errors->first('color')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('color')}}</p>
                        @endif

                    </div>

                    <div class="ml-8  mt-3 relative mr-8 mb-12 ">
                            <label for="price" class="block text-slate-700 ">価格</label>
                            <span class="absolute top-7 h-6 before:left-4 left-2 z-10">¥</span>
                            <input type="text" id="price" name="price" placeholder="0"  class="absolute w-full pl-8 h-8 border border-gray-300 rounded-lg focus:border-none ">
                            @if ($errors->first('price')) 
                                <p class="text-orange-400 mt-8  text-sm font-semibold">※{{$errors->first('price')}}</p>
                            @endif

                    </div>

                    <div class="flex justify-center py-7">
                    <button type="submit" class="hover:bg-zinc-500 border hover:text-white  border-gray-200 rounded mb-4 bg-white	w-48 h-10">出品する</button>
                    </div>



            </div>




        </form>

    </div>

    <style>
     .dragover {
        background: gray;
        color:#fff;
    }
    </style>

<script src="{{asset('/js/upload/upload.js') }}"></script>

</x-app-layout>
