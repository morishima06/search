var array = new Array();
array[''] = new Array({cd:"0", label:"選択してください"});
array["wear"]= new Array(
{cd:"", label:"選択してください"},
{cd:"t-shirt", label:"Tシャツ"},
{cd:"shirt", label:"シャツ"},
{cd:"tops", label:"トップス "},
{cd:"sweat", label:"スウェット"},
{cd:"hoodie", label:"パーカー"},
{cd:"outer", label:"アウター"},
{cd:"jacket", label:"ジャケット"},
{cd:"coat", label:"コート"},
{cd:"pants", label:"パンツ"},
{cd:"10", label:"ジーンズ"},
);

array["shoes"]= [
{cd:"", label:"選択してください"},
{cd:"sneaker", label:"スニーカー"},
{cd:"boot", label:"ブーツ"},
{cd:"sandal", label:"サンダル"},
]

array["accessories"]= [
{cd:"", label:"選択してください"},
{cd:"bag", label:"バッグ"},
{cd:"socks", label:"ソックス"},
{cd:"watch", label:"時計 "},
{cd:"wallet", label:"財布"},
{cd:"belt", label:"ベルト"},
{cd:"eyewear", label:"サングラス"},
]

array["lifestyle"]= [
{cd:"", label:"選択してください"},
{cd:"interior", label:"インテリア雑貨"},
{cd:"gardening", label:"ガーデニング雑貨"},
{cd:"home appliances", label:"家電・携帯グッズ"},
]

    document.getElementById('category').onchange = ()=>{
        categoryItem = document.getElementById('category_item');
        categoryItem.options.length = 0
        var  changedCategory = category.value  ;
        for(let i=0; i<array[changedCategory].length; i++){
        var op = document.createElement("option");
        value = array[changedCategory][i]
        op.value = value.cd;
        op.text = value.label;
        categoryItem.appendChild(op);}
        if(category.value ==""){
        categoryItem.classList.add('hidden');
        }else{
        categoryItem.classList.remove('hidden');
        }
    }

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
        img.setAttribute("class", "previewImage object-cover w-full h-full");
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
        img.setAttribute("class", "previewImage object-cover  w-full h-full ");

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

    //ブランド検索
    const searchForm = document.querySelector('#searchForm');
    const itemList = document.querySelectorAll('.item');
    const lists = document.querySelector('#lists');
    searchForm.addEventListener('keyup', () => {
    const keyWord = searchForm.value;
    itemList.forEach((elm) => {
        if (!keyWord || keyWord === "") {
        elm.classList.add('hidden');
        lists.classList.add('hidden')
        return;
        }
        const val = elm.dataset.set;
        let word = new RegExp(keyWord,"i");
        if (val.match(word)) {
        elm.classList.remove('hidden');
        lists.classList.remove('hidden')
        } else {
        elm.classList.add('hidden');
        }
    });
    });

    var items = document.querySelectorAll('.item');
    for (let i = 0; i < items.length; i++) {
        items[i].addEventListener('click',(e)=>{
    searchForm.value = e.target.dataset.set;
    lists.classList.add('hidden')
        })
    }
    searchForm.addEventListener('blur',(e)=>{
        if(e.relatedTarget === null){
        lists.classList.add('hidden')
        }
        else if(e.relatedTarget){
    console.log(e.relatedTarget.dataset.set)
    lists.style.remove('hidden')
        }
    })




