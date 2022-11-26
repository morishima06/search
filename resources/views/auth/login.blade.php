<x-guest-layout>
    <x-auth-card>
        <h1 class="text-2xl   font-semibold text-center w-full mb-10">ログイン</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('')" />

                <x-input id="email" class="block mt-1 h-9 w-full" type="email" name="email" :value="old('email')" placeholder="メールアドレス/email"  required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-label for="password" :value="__('')" />

                <x-input id="password" class="block mt-1 h-9 w-full"
                                type="password"
                                name="password"
                                placeholder="パスワード/password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class=" mt-2   ">
                    <x-button class=" w-full  flex justify-center">
                        {{ __('ログイン') }}
                    </x-button>

                <div class="flex h-12">
                        <a class="w-full  text-center  my-2 py-2 mr-1 bg-blue-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase  hover:bg-blue-300  disabled:opacity-25 transition ease-in-out duration-150  " href="{{ route('register') }}">
                            {{ __('新規登録はこちら') }}
                        </a>
                    @if (Route::has('password.request'))
                        <a class=" w-full text-center    my-2 py-2 ml-1 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400   disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('password.request') }}">
                            {{ __('パスワード忘れた方はこちら') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
