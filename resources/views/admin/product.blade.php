<x-app-layout>
    <!-- フラッシュメッセージ -->
 <div class="w-full md:w-4/5   mx-3  sm:ml-2 sm:mx-0 sm:px-2 ">
    @if (session('flash_message'))
    <div class="message w-full bg-slate-400 text-white h-12 flex justify-center items-center mb-4  rounded-md relative">
            <div class="close_button  w-12 h-12 absolute top-0 left-0  cursor-pointer ml-1 ">
                <span class="inline-block  border-l rotate-45 border-white  h-6 top-3 ml-6 absolute"></span>
                <span class="inline-block  border-r -rotate-45 border-white  h-6 top-3 ml-6 absolute"></span>
            </div>
             {{'新規出品完了しました'}}
         </div>

    @endif

    <h3 class="text-2xl mb-4 font-semibold text-slate-700">出品一覧</h3>
    <table class="w-full mt-10">
        <tbody>
            <th class=" pb-1 w-20"><p class="text-sm"> 商品画像</p></th>
            <th class=" pb-1"><p class="text-sm">商品名</p></th>
            <th class=" pb-1"><p class="text-sm">商品ID</p></th>
            <th class=" pb-1"><p class="text-sm">価格</p></th>
            <th class=" pb-1"><p class="text-sm">数量</p></th>
            <th class=" pb-1"><p class="text-sm">出品日</p></th>
            @foreach($products as $product)
                <tr class="h-24 border-y hover:bg-slate-100 cursor-pointer px-1"  onclick="location.href='{{route('edit_product', ['id' => $product->id] )}}' ">
                    <td class="w-32  px-2"><img src="{{asset($product->image_path1)}}" alt="" class="h-20 w-full object-cover" ></td>
                    <td class="w-32 px-1 text-center"  >
                       <p class="text-xs sm:text-base ">{{$product->product_name}}</p> 
                    </td >
                    <td class="px-3  text-center text-xs sm:text-base ">
                        <p class="text-xs sm:text-base px-1">{{$product->id}}</p> 
                    </td>
                    <td class="px-1 text-center"><p class="text-xs sm:text-base">￥{{$product->price}}</p> </td>
                    <td class="px-1 text-center"><p class="text-xs sm:text-base">{{$product->qty}}</p> </td>

                    <td class="px-1 text-center" > <p class="text-xs sm:text-base">{{$product->created_at}}</td></p>
                      <td ><button class="border-radious"><a href="{{route('delete_product_confirm', ['id' => $product->id])}}" class=" ml-1 sm:ml-2 text-sm sm:text-base text-blue-600  hover:text-blue-400 w-10 " >削除</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>

<style>
    a{
        display: block;
    }
</style>
<script>
   const message = document.querySelector('.message');
   const button = document.querySelector('.close_button');
   button.addEventListener('click', function(){
    message.classList.add('hidden')
   });
</script>
</x-app-layout>

