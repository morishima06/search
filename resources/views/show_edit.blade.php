
<x-app-layout>
<div class="w-4/5  ">
        <form action="{{route('show_edit_check')}}" method="post" enctype="multipart/form-data" >
        @foreach($products as  $product)
                @csrf
            <h3 class="text-2xl  font-semibold bg-white text-slate-700 pb-12 h-10 pl-7 " >出品内容</h3>
            <div class="flex">

            <div class="bg-slate-100  rounded border mr-7 mt-7 ml-7" >
                <h4 class="text-xl pt-8 ml-7 text-slate-700 ">商品画像</h4>

                    <!-- uploderフレーム -->
                    <div class="flex justify-evenly rounded bg-slate-100    ">
                        <!-- 画像upload1 -->
                        <div class="relative my-8 aspect-square	 w-1/4 ml-7 mr-3  ">

                            <div id="" class="removeImg  absolute  right-0  w-8 h-8 <?php if(!$product->image_path1){ echo 'hidden';} ?> ">
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full" >

                                <div id="" class="inputArea w-fill h-full  <?php if($product->image_path1){ echo 'hidden';} ?> ">
                                    <p>
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile1"    class="uploadfile hidden">
                                        </label>
                                    </p>
                                </div>
                                <div class="previewBox">
                                    @if($product->image_path1)
                                    <img src="{{asset($product->image_path1)}}" alt="">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- 画像upload2 -->
                        <div class="relative my-8  aspect-square w-1/4 mx-3  ">


                            <div id="" class="removeImg  absolute  right-0  w-8 h-8 <?php if(!$product->image_path2){ echo 'hidden';} ?> "  >
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>

                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300 w-full h-full  bg-white   " >

                                <div id="" class="inputArea w-full h-full <?php if($product->image_path2){ echo 'hidden';} ?>">
                                    <p>
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile2"    class="uploadfile hidden">
                                        </label>
                                    </p>
                                </div>
                                <div class="previewBox">
                                @if($product->image_path2)

                                    <img src="{{asset($product->image_path2)}}" alt="">
                                @endif
                                </div>
                            </div>
                        </div>
                        <!-- 画像upload3 -->
                        <div class="relative  my-8 aspect-square w-1/4 mx-3 ">
                        

                            <div id="" class="removeImg  absolute  right-0  w-8 h-8 <?php if(!$product->image_path3){ echo 'hidden';} ?>">
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full ">

                                <div id="" class="inputArea w-fill h-full <?php if($product->image_path3){ echo 'hidden';} ?>">
                                    <p>
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile3"   class="uploadfile hidden">
                                        </label>

                                    </p>
                                
                                </div>
                                <div class="previewBox">
                                @if($product->image_path3)

                                    <img src="{{asset($product->image_path3)}}" alt="">
                                @endif
                                </div>
                            </div>
                        </div>

                        
                    



                        <!-- 画像upload4 -->
                        <div class="relative  my-8  w-1/4 ml-3 mr-7 ">
                        

                            <div id="" class="removeImg  absolute  right-0  w-8 h-8 <?php if(!$product->image_path4){ echo 'hidden';} ?> ">
                                <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                            </div>
                            <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                            <div id=""   class="preview border border-gray-300  bg-white  w-full h-full  ">

                                <div id="" class="inputArea w-fill h-full <?php if($product->image_path4){ echo 'hidden';} ?>">
                                    <p>
                                        ここにファイルをドロップしてください<br>またはdrug&drop
                                        <button><i class="fa-solid fa-camera"></i></button>
                                        <label for="uploadfile" class="bg-blue-200"> 
                                            <input type="file" id="uploadfile" name="uploadfile4"    class="uploadfile hidden">
                                        </label>

                                    </p>
                                
                                </div>
                                <div class="previewBox">
                                    <img src="{{asset($product->image_path4)}}" alt="">
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    @if ($errors->first('uploadfile1')) 
                         <p class="text-orange-400  ml-8 text-sm font-semibold">※{{$errors->first('uploadfile1')}}</p>
                    @endif




                    <div class="ml-8 mt-3 mr-8">

                        <input type="text" value="{{$id}}" class="hidden" name="id">

                        <label for="product_name" class="text-slate-700">商品名</label>
                        <input type="text"  id="product_name" name="product_name" class="border h-8 w-full focus:border-none   border-gray-300 rounded-lg " value="{{$product->product_name}}">
                        @if ($errors->first('product_name')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('product_name')}}</p>
                        @endif

                    </div>

                    <div class=" ml-8  mt-3 mr-8">
                        <label for="" class="block text-slate-700">カテゴリー(変更不可)</label>
                        <p>{{$product->category}}>{{$product->category_item}}</p>
                       
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
                        <label for="brand_name" class="block text-slate-700">ブランド名(変更不可)</label>
                        <p>{{$product->brand_name}}</p>

                        @if ($errors->first('brand_name')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('brand_name')}}</p>
                        @endif

                    </div>


                    <div class="ml-8  mt-3 pr-8">
                        <label for="color" class="block text-slate-700">カラー</label>
                        <select name="color" id="color" class=" border w-full border-gray-300 h-8 rounded-lg pl-3 focus:border-none">
                            <div><option class="bg-slate-300 text-xl" value="">色指定なし</option></div>
                            <option value="白色系" <?php if($product->color == "白色系"){echo 'selected="selected"';}?>>ホワイト(白)系</option>
                            <option value="黒色系" <?php if($product->color == "黒色系"){echo 'selected="selected"';}?>>ブラック(黒)系</option>
                            <option value="灰色系" <?php if($product->color == "灰色系"){echo 'selected="selected"';}?>>グレー(灰色)系</option>
                            <option value="茶色系" <?php if($product->color == "茶色系"){echo 'selected="selected"';}?>>ブラウン(茶)系</option>
                            <option value="緑色系" <?php if($product->color == "緑色系"){echo 'selected="selected"';}?>>グリーン(緑)系</option>
                            <option value="青色系" <?php if($product->color == "青色系"){echo 'selected="selected"';}?>>ブルー(青)系</option>
                            <option value="赤色系" <?php if($product->color == "赤色系"){echo 'selected="selected"';}?>>レッド(赤)系</option>
                            <option value="黄色系" <?php if($product->color == "黄色系"){echo 'selected="selected"';}?>>イエロー(黄)系</option>
                        </select>
                        @if ($errors->first('color')) 
                            <p class="text-orange-400  text-sm font-semibold">※{{$errors->first('color')}}</p>
                        @endif

                    </div>

                    <div class="ml-8  mt-3 relative mr-8 mb-12 ">
                            <label for="price" class="block text-slate-700 ">価格</label>
                            <span class="absolute top-7 h-6 before:left-4 left-2 z-10">¥</span>
                            <input type="text" id="price" name="price" placeholder="0"  class="absolute w-full pl-8 h-8 border border-gray-300 rounded-lg focus:border-none"  value="{{$product->price}}">
                            @if ($errors->first('price')) 
                                <p class="text-orange-400 mt-8  text-sm font-semibold">※{{$errors->first('price')}}</p>
                            @endif

                    </div>

                    <div class="flex justify-center py-7">
                    <button type="submit" class="hover:bg-zinc-500 border hover:text-white  border-gray-200 rounded mb-4 bg-white	w-48 h-10">変更</button>
                    </div>



            </div>

                @endforeach
        </form>

    </div>













    <style>
     .dragover {
        background: gray;
        color:#fff;
    }
    </style>

    <script>
            // ドラッグ&ドロップエリアの取得
            var preview = document.getElementsByClassName('preview');
            // input[type=file]の取得
            var fileInput = document.getElementsByClassName('uploadfile');
            //inputタグ含む文字等の取得
            var inputArea = document.getElementsByClassName('inputArea');
            //画像表示エリアの取得
            var previewBox =  document.getElementsByClassName("previewBox");
            //画像削除ボタンの取得
            var removeImg = document.getElementsByClassName('removeImg');


            //画像アップロードから削除までのループ
            for(let i=0; i<preview.length; i++){

            // ドラッグオーバー時の処理
            preview[i].addEventListener('dragover', function(e){
                e.preventDefault();
                this.classList.add('dragover');
            });

            // ドラッグアウト時の処理
            preview[i].addEventListener('dragleave', function(e){
                e.preventDefault();
                this.classList.remove('dragover');
            });

            // ドロップ時の処理
            preview[i].addEventListener('drop', function(e){
                e.preventDefault();
                this.classList.remove('dragover');

                var files = e.dataTransfer.files;

                // 取得したファイルをinput[type=file]へ
                fileInput[i].files = files;

                files = files[0]

                var reader = new FileReader();

                if(!previewBox[i].innerHTML== ''){
                    previewBox[i].innerHTML= ''
                }
           
                reader.onload = function(event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                img.setAttribute("class", "previewImage");
                previewBox[i].appendChild(img);
                }
                reader.readAsDataURL(files);

                //削除ボタンの表示
                if(removeImg[i].classList.contains('hidden')){
                    removeImg[i].classList.remove('hidden')
                    inputArea[i].classList.add('hidden')                   
                }
            })

            //inputへの発火
            preview[i].addEventListener('click', function(){
            if (document.createEvent) {
                var evt = document.createEvent('MouseEvents');
                // イベントの初期化
                evt.initEvent('click', false, true);
                // イベントを発生させる
                var elm = document.getElementsByClassName('uploadfile');
                elm[i].dispatchEvent(evt);
                }
                 else {
                // for IE8
                document.getElementsByClassName('uploadfile').fireEvent('onclick');
                }
            })

            //クリックからの画像プレヴュー
            fileInput[i].addEventListener('change', function(e){

                files = event.target.files[0];

                if(!previewBox[i].innerHTML== ''){
                    previewBox[i].innerHTML= ''
                }

                var reader = new FileReader();                
           
                reader.onload = function(event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                img.setAttribute("class", "previewImage");
                previewBox[i].appendChild(img);
                }
                reader.readAsDataURL(files);

                //削除ボタンの表示
                if(removeImg[i].classList.contains('hidden')){
                    removeImg[i].classList.remove('hidden')
                    inputArea[i].classList.add('hidden')                   
                }
            })

            ///画像と削除ボタンの削除
            removeImg[i].addEventListener('click', function(){
                if(fileInput[i].value != null){
                    fileInput[i].value = '';
                }
                if(!previewBox[i].innerHTML== ''){
                    previewBox[i].innerHTML= ''
                }
                if(!removeImg[i].classList.contains('hidden')){
                    removeImg[i].classList.add('hidden') 
                    inputArea[i].classList.remove('hidden')   
                }
            })
        }//forの閉じタグ

    </script>


</x-app-layout>
