<x-app-layout>

 <div class="md:w-4/5 ml-auto mr-auto px-2  pl-2  sm:px-2 ">
    <div class="">
    <h3 class="text-2xl mb-4 font-semibold text-slate-700">出品一覧</h3>
    <table class="w-full mt-10">
        <tbody >
            <th class="w-24 pb-1">商品画像</th>
            <th class="w-24 pb-1">商品名</th>
            <th class="pb-1">商品ID</th>
            <th class="pb-1">価格</th>
            <th class="pb-1">出品日</th>
            @foreach($products as $product)
            
            
               
                   
                <tr class="h-24 border-y hover:bg-slate-100 cursor-pointer "  onclick="location.href='{{route('show_edit', ['id' => $product->id]   )}}' ">
                        
                    <td class="w-24 h24"><img src="{{asset($product->image_path1)}}" alt="" ></td>
                    <td class="w-24 text-center">
                        {{$product->product_name}} 
                    </td >
                    <td class="w-24 text-center">
                        {{$product->id}}
                    </td>
                    <td class="w-24 text-center">￥{{$product->price}}</td>
                    <td class="w-40 text-center" >{{$product->created_at}}</td>
                      <td ><button class="border-radious"><a href="{{route('show_delete_confirm', ['id' => $product->id])}}" class="md:ml-20 bg-white text-blue-600  hover:text-blue-400    w-10 " >削除</a></button></td>
                   
                    
                
                </tr>
              
               
            
            @endforeach

        </tbody>
    </table>

    {{ $products->links() }}
    </div>
    


</div>
</x-app-layout>


<style>
    a{
        display: block;
    }
</style>