<x-app-layout>
    <div class="md:w-4/5 ml-2 flex justify-center w-full">
        <div class="w-full">
            <h3 class="text-2xl mb-4 font-semibold text-slate-700 	">アカウント</h3>
            <div class="flex">
                <img src="{{ asset('image/banana.jpg') }}" alt="" class="w-32 h-32 ">
                <div class="w-full">
                    <div class="flex  ml-8  h-16  text-base  items-center ">
                        <p class="  ">ユーザー名: {{$auth->user_name}}</p>
                    </div>
                    <hr class="mx-4 border-black">
                    <div class="flex  between ml-8 h-16 text-base items-center place-content-between ">
                        <p>email: {{$auth->email}}</p>
                        <button onclick="location.href='{{route('edit')}}'" class="mr-20 bg-slate-500 h-8 px-3 py-0.5 rounded text-white" >アカウント詳細</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

   <span class="justify-center items-center  /  align-middle   "></span>
</x-app-layout>
