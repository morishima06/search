<x-guest-layout>
    <x-auth-card>

        <div class="mb-4 text-sm text-gray-600">
        {{ __('ご登録いただいたメールアドレスに登録確認用のリンクをお送りしました。') }}
        {{ __('確認用リンクから会員登録を完了させてください。') }}

        {{ __('もし、確認用メールが送信されていない場合は、下記ボタンをクリックしてください。') }}
                </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-blue-600">
                {{ __('確認用のメールを再送しました。') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('確認メールを再送する') }}
                    </x-button>
                </div>
            </form>

            <!-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form> -->
        </div>
    </x-auth-card>
</x-guest-layout>
