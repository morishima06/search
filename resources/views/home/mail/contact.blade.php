@extends('layouts.front')

@section('content')
    <form method="POST" action="{{ route('contact_confirm') }}" class="pt-5" >
        @csrf
        @method('POST')
        <div class="flex justify-center  w-full">
            <div class=" max-w-xl w-full px-2">
            <h1 class="text-2xl flex justify-center mt-5 mb-3 ">お問い合わせ</h1>
                <div class="mg-b_40 w-full">
                    <label for="name" class="required-tag">名前</label><br>
                    <input type="text" placeholder="山田太郎" id="name" name="name" value="{{ old('name') }}" class="w-full h-8 border-slate-600 ">
                    @if($errors->has('name'))
                    <p class="required">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="mg-b_40 w-full">
                    <div class="mt-2">
                        <label for="email" class="required-tag lg-label">メールアドレス</label><br>
                        <input type="email" placeholder="sample@example.com" id="mail" name="email" class="w-full h-8 border-slate-600 " value="{{ old('email') }}">
                    </div>
                    <div class="mt-1">
                        <input type="email" placeholder="確認のため再度入力してください" id="mail" name="email_confirmation" class="w-full h-8 border-slate-600 ">
                    </div>
                    @if($errors->has('email'))
                    <p class="required">{{ $errors->first('email') }}</p>
                    @endif
                    @if($errors->has('email2'))
                    <p class="required">{{ $errors->first('email2') }}</p>
                    @endif
                </div>
                <div class="mt-2">
                    <label for="content" class="lg-label">お問い合わせ内容</label><br>
                    <textarea name="content" id="content" cols="30" rows="5" placeholder="お問い合わせ内容を入力してください" class="w-full pl-3 border-slate-600 ">{{ old('content') }}</textarea>
                </div>
                <div>
                    <button onclick="submit();" type="button" class="border border-slate-600  rounded-sm px-2 mb-3 hover:text-slate-500 ">入力内容を確認する</button>
                </div>
            </div>
        </div>
    </form>
@endsection
