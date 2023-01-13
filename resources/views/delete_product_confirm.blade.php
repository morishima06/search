<x-app-layout>
    <div class="w-full md:w-4/5 pr-2 md:pr-0 pl-2 md:pl-4 ">
        <h2 class="text-2xl  font-semibold bg-white text-slate-700 pb-12 h-10 ">商品削除確認</h2>

    <p>この商品を削除してよろしいでしょうか？<br>
よろしければ、「この商品を削除する」ボタンをクリックしてください。
</p>
@foreach($products as $product)
    <div class="flex border my-4 mr-4">
        <h4 class="flex items-center bg-slate-200 w-auto md:w-1/4  pl-1 pr-1 h-9  text-sm md:text-base " >削除する商品</h4>
        <h4 class="flex items-center ml-3 w-auto md:w-3/4 h-9   text-sm md:text-base">商品ID : {{$product->id}} 商品名 : {{$product->product_name}}</h4>
    </div>

<!-- <button class="bg-slate-400 text-slate-100">戻る</button> -->
<form action="{{route('delete_product_check', ['id' => $product->id])}}" method="post">
    @csrf
    @method('delete')
    <input  type="submit" class="bg-slate-500 text-white h-9 px-2" value="この商品を削除する">
</form>
@endforeach
</div>
    






</x-app-layout>