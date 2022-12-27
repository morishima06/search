<x-app-layout>
    <div class=" w-full md:w-4/5 mx-3   sm:mr-0 flex justify-center">
        <div class="w-full">
            <h3 class=" md:ml-0 text-2xl mb-4 font-semibold text-slate-700 	">アカウント</h3>
            <div class="flex ">
                <img src="{{ asset('image/account.png') }}" alt="" class="w-32 h-32 hidden sm:inline-block ">
                <div class="w-full ">
                    <div class="flex     h-16  text-base  items-center ">
                    <img src="{{ asset('image/account.png') }}" alt="" class="h-16 sm:hidden  ">
                        <p class=" text-[15px] sm:text-[17px] ">ユーザー名: {{$auth->user_name}}</p>
                    </div>
                    <hr class=" border-black ">
                    <div class="flex  ml-4 sm:ml-8 h-12 sm:h-16 text-base items-center  ">
                        <p class="mt-1  sm:ml-0 md:mt-0 text-[15px] sm:text-[17px]">email: {{$auth->email}}</p>
                        <button onclick="location.href='{{route('edit')}}'" class="mt-1  md:mt-0 ml-3  bg-slate-500 h-6 md:h-7 px-3 text-xs md:text-sm rounded text-white" >アカウント詳細</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

   <span class="justify-center items-center  /  align-middle   "></span>
</x-app-layout>
