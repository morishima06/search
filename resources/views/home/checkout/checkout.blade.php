@extends('layouts.checkoutFrame')
    @section('content')
    <div class="flex justify-center">
        <div class="max-w-4xl w-2/3   ">
            <div class="flex justify-center mt-5">
                <div class="">
                    <div class="flex justify-center ">
                        <h3 class="text-lg font-bold">注文確認</h3>
                    </div>
                </div>
            </div>
            <div class="flex w-full mt-10 ">
                <div class="w-2/3 mr-5">
                  <div class="mb-2 ">
                    <h2 class="font-extrabold mb-2 text-lg">お届け先</h2>
                    <p>{{$userdetail->NameSei}} {{$userdetail->NameMei}}</p>
                    <p>〒{{$userdetail->zip}}</p>
                    <p>{{$userdetail->addr1}}{{$userdetail->addr2}}{{$userdetail->addr3}}{{$userdetail->addr4}}</p>
                    <span class="border-t border-slate-200 w-full inline-block "></span>
                  </div>

                  <div class="flex mb-2 items-center">
                    <p class="flex mr-2 items-center" ><input type="checkbox" class="ch-box"></p>
                    <p class=" font-semibold flex items-center">お届け先の変更</p>
                  </div>

                  <div class="ch-address hidden mb-3">
                    <div class="flex w-full">
                      <div class="w-1/2 pr-1">
                        <div>
                          <label for="">姓</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                      <div class="w-1/2 pr-1">
                        <div>
                          <label for="">名</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                    </div>

                    <div class="flex">
                      <div class="w-1/2 pr-1">
                        <div>
                          <label for="">郵便番号</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                      <div class="w-1/2 pr-1">
                        <div >
                          <label for="">都道府県</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                    </div>

                    <div class="flex">
                      <div class="w-1/2 pr-1">
                        <div>
                          <label for="">市区町村</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                      <div class="w-1/2 pr-1">
                        <div class="">
                        <label for="">町名</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                    </div>

                    <div class="flex">
                      <div class="w-1/2 pr-1">
                        <div>
                          <label for="">番地</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                      <div class="w-1/2 pr-1">
                        <div class="">
                          <label for="">電話番号</label>
                        </div>
                        <input type="text" class="w-full h-8">
                      </div>
                    </div>
                  </div>
                  <form action="{{route('pay')}}" method="POST">
                    @csrf
                    <button class="bg-zinc-900 text-white w-40 mt-1 py-1 px-2 mb-3 "> 会計に進む</a></button>
                   </form>
                </div>

                <div class="w-1/3 px-2 ">
                    <h2 class="font-extrabold text-lg">注文内容</h2>
                    <?php $total = 0 ?>
                    <div class=" max-h-32 overflow-scroll hover:opacity-70">

                      @foreach(session('cart') as $id => $details)
                      <?php $total += $details['price'] * $details['quantity'] ?>

                      <div class="flex mt-2">
                        <div class="mr-3 ">
                            <img src="{{ $details['photo'] }}" class="object-fit h-20 md:h-20 w-20 md:w-20 "/>
                        </div>
                        <div class="">
                          <p class="text-sm">{{ $details['product_name'] }}</p>
                          <p  data-id="{{ $details['quantity'] }}" readonly class="text-sm text-slate-900" >数量:{{ $details['quantity'] }}</p>
                          <p class="text-sm">¥{{ $details['price'] }}</p>
                        </div>
                      </div>

                      @endforeach
                    </div>
                    <div class="mt-2">
                      <div class="flex">
                        <p class="text-sm">小計</p>
                        <p class="text-sm ml-auto">¥{{ $total }}</p>
                      </div>
                      <div class="flex">
                        <p class="text-sm">配送料</p>
                        <p class="text-sm ml-auto">¥0</p>
                      </div>
                      <div class="flex">
                        <p class="text-sm">合計</p>
                        <p class="text-sm ml-auto">¥{{ $total }}</p>
                      </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    @endsection

