
<x-app-layout>
    <div class="w-3/4 bg-slate-200 ">
        <div class="bg-white mx-8 border border-gray-300 my-7" >
            <h3 class="ml-8 mt-8 text-2xl">新規出品</h3>

            <form action="{{route('upload_check')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="flex">
                    <div class="relative w-60 mt-8 ml-8 DropList">
                    

                        <div id="" class="remove-img hidden absolute  right-0  w-8 h-8" onclick="removeImg)" >
                            <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                        </div>
                        <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                        <div id=""  onclick="clickB('uploadfile1')" class="preview border border-gray-400  bg-white  w-40 h-40 " >

                            <div id="" class="inputArea w-fill h-full ">
                                <p  id="bf-contents " class="">
                                    ここにファイルをドロップしてください<br>またはdrug&drop
                                    <button><i class="fa-solid fa-camera"></i></button>
                                    <label for="uploadfile1" class="bg-blue-200"> 
                                        <input type="file" id="uploadfile1" name="uploadfile1"   onChange="preView(event)" class="uploadfile ">
                                    </label>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-60 mt-8 ml-8 DropList">
                    

                        <div id="" class="remove-img hidden absolute  right-0  w-8 h-8" onclick="removeImg)" >
                            <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                        </div>
                        <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                        <div id=""  onclick="clickB('uploadfile1')" class="preview border border-gray-400  bg-white  w-40 h-40 " >

                            <div id="" class="inputArea w-fill h-full ">
                                <p  id="bf-contents " class="">
                                    ここにファイルをドロップしてください<br>またはdrug&drop
                                    <button><i class="fa-solid fa-camera"></i></button>
                                    <label for="uploadfile1" class="bg-blue-200"> 
                                        <input type="file" id="uploadfile1" name="uploadfile1"   onChange="preView(event)" class="uploadfile ">
                                    </label>

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-60 mt-8 ml-8 DropList">
                    

                        <div id="" class="remove-img hidden absolute  right-0  w-8 h-8" onclick="removeImg)" >
                            <i class=" cursor-pointer fa-solid fa-xmark " ></i>
                        </div>
                        <!-- ドラッグ&ドロップエリア + プレヴューエリア-->
                        <div id=""  onclick="clickB('uploadfile1')" class="preview border border-gray-400  bg-white  w-40 h-40 " >

                            <div id="" class="inputArea w-fill h-full ">
                                <p  id="bf-contents " class="">
                                    ここにファイルをドロップしてください<br>またはdrug&drop
                                    <button><i class="fa-solid fa-camera"></i></button>
                                    <label for="uploadfile1" class="bg-blue-200"> 
                                        <input type="file" id="uploadfile1" name="uploadfile1"   onChange="preView(event)" class="uploadfile ">
                                    </label>

                                </p>
                            </div>
                        </div>
                    </div>





                    







                </div>



                </div>

                    

                    <div class="ml-8">
                    <h3>商品名</h3>
                    <input type="text" name="product_name" class="border border-gray-300 rounded-lg">
                    </div>

                    <div class="ml-8">
                        <select name="category" class="w-60 border border-gray-300 rounded-lg">
                            <label for="category">都道府県</label>
                            <option value="">選択してください</option>
                            <option value="トップス">トップス</option>
                            <option value="アウター">アウター</option>
                            <option value="ボトムス">ボトムス</option>
                        </select>
                    </div>

                    <div class="ml-8">
                    <h3>ブランド名</h3>
                    <input type="text" name="brand_name" class="border border-gray-300  rounded-lg">
                    </div>

                    <div class="ml-8">
                        <h3>価格</h3>
                        <div >
                            <span>¥</span>
                            <input type="text" name="price" placeholder="0" class="border border-gray-300 rounded-lg">
                        </div>
                    </div>

                    
                    <div class="ml-8">
                    <button type="submit" class="bg-white border border-gray-300 rounded-lg my-4	w-40 h-10">送信</button>
                    </div>
                    
            </form>
        </div>
    </div>

    <style>
     .dragover {
        background: gray;
        color:#fff;
    }
    </style>

    <script>
      var  DropList = document.getElementsByClassName('DropList');


            // ドラッグ&ドロップエリアの取得
            var fileArea = document.getElementsByClassName('preview');

            // input[type=file]の取得
            var fileInput = document.getElementsByClassName('uploadfile');

            for(let i=0; i<DropList.length; i++){


            


            // ドラッグオーバー時の処理
            fileArea[i].addEventListener('dragover', function(e){
                e.preventDefault();
                this.classList.add('dragover');
            });

            // ドラッグアウト時の処理
            fileArea[i].addEventListener('dragleave', function(e){
                e.preventDefault();
                this.classList.remove('dragover');
            });

                      



            // ドロップ時の処理
          
            fileArea[i].addEventListener('drop', function(e){
                e.preventDefault();
                this.classList.remove('dragover');

                var files = e.dataTransfer.files;

                // 取得したファイルをinput[type=file]へ
                fileInput[i].files = files;

                preView('onChanege',files[0]);
            })



           
            function preView(event, f = null) {

                for(let i=0; i<DropList.length; i++){

                var files = f;
               


                if(files === null){
                    files = event.target.files[0];
                }

                var reader = new FileReader();
                var fileArea = document.getElementsByClassName("preview");
                var previewImage = document.getElementsByClassName("previewImage");

                console.log(fileArea[i])



                if(previewImage[i] != null) {
                    preview[i].removeChild(previewImage[i]);
                }
           
                reader.onload = function(event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                img.setAttribute("id", "previewImage");
              
                preview[i].appendChild(img);
                }
           

                reader.readAsDataURL(files);

                //削除ボタンの表示
                var removeImg = document.getElementsByClassName('remove-img');
                var inputArea = document.getElementsByClassName('inputArea');
                if(removeImg[i].classList.contains('hidden')){
                    removeImg[i].classList.remove('hidden')
                    inputArea[i].classList.add('hidden')                   
                }

                             }//forの閉じタグ



            }


 }//forの閉じタグ
                   

            //inputのクリックを親要素にも発火
            // function clickB(uploadfile) {
            //     //イベントの作成
            //     if (document.createEvent) {
            //     var evt = document.createEvent('MouseEvents');
            //     // イベントの初期化
            //     evt.initEvent('click', false, true);
            //     // イベントを発生させる
            //     var elm = document.getElementById(uploadfile);
            //     elm.dispatchEvent(evt);
            //     } else {
            //     // for IE8
            //     document.getElementById(uploadfie).fireEvent('onclick');
            //     }
            // }

            // //画像の削除
            // function removeImg(){
            //     var uploadfile = document.getElementsByClassName('uploadfile');
            //     if(uploadfile.value != null){
            //         uploadfile.value = '';
            //     }

            //     var preview = document.getElementsByClassName("preview");
            //     var previewImage = document.getElementsByClassName("previewImage");
            //     if(previewImage[0] != null) {
            //         preview[0].removeChild(previewImage);
            //     }
            //     //xボタンの非表示
            //     var removeImg = document.getElementsByClassName('remove-img')
            //     var inputArea = document.getElementsByClassName('inputArea');
            //     if(!removeImg[0].classList.contains('hidden')){
            //         removeImg[0].classList.add('hidden')
            //         inputArea[0].classList.remove('hidden')
            //     }
            // }

    </script>


</x-app-layout>
