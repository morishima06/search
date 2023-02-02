@extends('layouts.front')

@section('content')
<div class ="product_data flex justify-center pt-10 w-full">
    <div class="md:flex  w-full md:max-w-4xl mx-2">
            <div class="w-full mr-3">
                <h1 class="text-2xl mb-2 font-bold">ショッピングカート</h1>
                @if(!session('cart'))
                <div class=" w-full mt-20 flex justify-center items-center ">
                <h2>カートには何も入っていません</h2>
                </div>
                <div class=" w-full  flex justify-center items-center ">
                    <button type="button" class="bg-slate-500 mt-3 w-64 rounded-md py-2 px-2 text-white" onclick="location.href='{{route('home')}}'"> ショッピングを続ける</button>

                </div>

                @endif


                @if(session('cart'))
                <table class="w-full ">
                <?php $total = 0 ?>

                @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                    <tr class="border-y border-slate-400 h-20 md:h-24 w-20 md:w-24">
                        <!-- 商品画像 -->
                        <td class=" py-2 h-20 md:h-24 w-20 md:w-24 ">
                            <div class="h-20 md:h-24 w-20 md:w-24 mr-3">
                                <img src="{{ $details['photo'] }}" class="object-fit h-20 md:h-24 w-20 md:w-24 "/>
                            </div>
                        </td>
                        <!-- 商品内容 -->
                        <td>
                            <div class="flex items-center ml-0 md:ml-8  w-32 md:w-52">
                                <p class="text-sm">{{ $details['product_name'] }}</p>
                                <input type="text" value="{{$id}} " class="hidden product_id">
                            </div>
                        </td>
                        <!-- 商品個数 -->
                        <td>
                        <div class="flex items-center  mr-1 md:mr-6">
                                <button type="button" class="dec-qty  w-6 h-6 border-y border-l border-gray-400 text-slate-900">-</button>
                                <p  data-id="{{ $details['quantity'] }}" readonly class=" quantity w-6 h-6 text-xs border-y border-gray-400 flex justify-center items-center text-slate-900" >{{ $details['quantity'] }}</p>
                                <button type="button" class="inc-qty  border-y border-r border-gray-400 w-6 h-6 flex items-center justify-center text-slate-900">+</button>
                            </div>
                        </td>
                        <td>
                        <!-- 価格 -->
                        <div class="flex items-center  mr-1 md:mr-4">
                            <p>¥{{ $details['price'] }}</p>
                        </div>
                        </td>
                        <!-- 商品削除 -->
                        <td>
                        <div class="flex justify-end">
                        <button class="delete-btn relative w-7 h-7 " >
                            <span class="absolute top-1 inline-block border-l border-black h-4 rotate-45"></span>
                            <span class="absolute top-1  inline-block border-l border-black h-4 -rotate-45"></span>
                        </button>
                        </div>

                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
            @if(session('cart'))
            <div class="w-full  ">
                <div class="w-full  px-2 mt-10 py-2   text-slate-800  bg-gray-100">
                    <div class="flex mt-2 mx-0.5">
                        <p class="text-sm">小計</p>
                        <p class="text-sm ml-auto">¥{{ $total }}</p>
                    </div>
                    <div class="flex mt-1 mx-0.5">
                        <p class="text-sm">配送料</p>
                        <p class="text-sm ml-auto">¥0</p>
                    </div>
                    <div class="flex mt-3 mx-0.5">
                        <p class=""><strong>商品小計</strong></p>
                        <p class="ml-auto"><strong>¥{{ $total }}</strong></p>
                    </div>
                    <div class="mt-3">
                        <button type="button" class="bg-zinc-900 text-white w-full mt-1 py-1 px-2 "><a href="{{route('checkout')}}">購入手続きへ</a></button>
                    </div>
                </div>
            </div>
            @endif
        @endif

    </div>

</div>
@endsection

@section('style')
<style>
    .cart-content + .cart-content{
        border-top:none;
    }
</style>

@endsection

@section('script')
    <script>
            $(document).ready(function(){
                $('.delete-btn').click(function(e){
                    e.preventDefault();

                    var product_id = $(this).closest('.product_data').find('.product_id').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method: "delete",
                    url: "/delete-to-cart",
                    data: { 'product_id' : product_id, '_method': 'DELETE'},
                    success: function(response){
                        window.location.reload();
                        alert(response.status)
                    }
                })
                })

                $('.dec-qty').click(function(e){
                    e.preventDefault();

                    var product_id = $(this).closest('.product_data').find('.product_id').val();

                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $.ajax({
                        method: "put",
                        url: "/dec-qty",
                        data: {
                            'product_id' : product_id,
                        },
                        success: function(response){
                            window.location.reload();
                            alert(response.status)
                        }

                    })
                    .done((res)=>{
                            console.log(res.message)
                        })
                        //通信が失敗したとき
                    .fail((error)=>{
                            console.log(error.statusText)
                        })
                    
                })

                $('.inc-qty').click(function(e){
                    e.preventDefault();

                    var product_id = $(this).closest('.product_data').find('.product_id').val();
                    console.log(product_id)

                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                        $.ajax({
                        method: "put",
                        url: "/inc-qty",
                        data: {
                            'product_id' : product_id,
                        },
                        success: function(response){
                            window.location.reload();
                            alert(response.status)
                        }
                    })
                })


            });
    </script>
@endsection