<x-app-layout>

 <div class="w-full md:w-4/5  mr-auto mx-3  sm:ml-2  sm:px-2 ">
    <h3 class="text-2xl mb-4 font-semibold text-slate-700">出品一覧</h3>
    <table class="w-full mt-10">
        <tbody >
            <th class=" pb-1"><p class="text-sm"> 商品画像</p></th>
            <th class=" pb-1"><p class="text-sm">商品名</p></th>
            <th class=" pb-1"><p class="text-sm">商品ID</p></th>
            <th class=" pb-1"><p class="text-sm">価格</p></th>
            <th class=" pb-1"><p class="text-sm">出品日</p></th>
            @foreach($products as $product)
            
                <tr class="h-24 border-y hover:bg-slate-100 cursor-pointer px-1"  onclick="location.href='{{route('show_edit', ['id' => $product->id]   )}}' ">
                        
                    <td class="w-24 h24"><img src="{{asset($product->image_path1)}}" alt="" class="w-24" ></td>
                    <td class="w-24 text-center" class="w-24 " >
                       <p class="text-xs sm:text-base ">{{$product->product_name}}</p> 
                    </td >
                    <td class="px-4 text-center text-xs sm:text-base ">
                    <p class="text-xs sm:text-base px-1">{{$product->id}}</p> 
                    </td>
                    <td class="w-24 text-center"><p class="text-xs sm:text-base">￥{{$product->price}}</p> </td>
                    <td class="w-40 text-center" > <p class="text-xs sm:text-base">{{$product->created_at}}</td></p>
                      <td ><button class="border-radious"><a href="{{route('show_delete_confirm', ['id' => $product->id])}}" class="md:ml-20 bg-white text-blue-600  hover:text-blue-400    w-10 " >削除</a></button></td>
                   
                    
                
                </tr>
              
               
            
            @endforeach

        </tbody>
    </table>

    {{ $products->links() }}
    


</div>
</x-app-layout>


<style>
    a{
        display: block;
    }
</style>