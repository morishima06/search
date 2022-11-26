<x-guest-layout>
    <x-auth-card>


        <!-- Validation Errors -->
        <h1 class="text-2xl font-semibold text-center w-full mb-8">アカウント作成</h1>
        <x-auth-validation-errors class="" :errors="$errors" />


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('')" class="" />

                <x-input id="name" class="block mt-2 h-8 w-full" type="text" name="name" :value="old('name')" placeholder="お名前/name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-6">
                <x-label for="email" :value="__('')" />

                <x-input id="email" class="block mt-1 h-8 w-full" type="email" name="email" :value="old('email')" placeholder="メールアドレス/email" required />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-label for="password" :value="__('')" />

                <x-input id="password" class="block mt-1 h-8 w-full"
                                type="password"
                                name="password"
                                placeholder="パスワード/Password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-6">
                <x-label for="password_confirmation" :value="__('')" />

                <x-input id="password_confirmation" class="block mt-1 h-8 w-full"
                                type="password"
                                name="password_confirmation"
                                placeholder="パスワード確認/Confirm Password"
                                required />
            </div>

            <div class=" mt-4 ">

                <x-button class=" mt-3 w-full">
                    {{ __('登録') }}
                </x-button>

                    <a class=" w-full inline-block text-center  my-2 py-2 mr-1 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase  hover:bg-blue-300  disabled:opacity-25 transition ease-in-out duration-150   " href="{{ route('login') }}">
                         {{ __('会員の方はこちら') }}
                    </a>
            </div>



        </form>
    </x-auth-card>
</x-guest-layout>
