<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />

    <title>Document</title>
</head>
    <body class="min-h-screen flex flex-col">
        @include('layouts.header')
        <div class="pt-28 flex justify-center flex-1">
            <div class="">
                <form method="POST" action="{{ route('send') }}" class="">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                    <p class="flex justify-center font-semibold mb-3 ">以下の内容を送信してよろしでしょうか？</p>
                    <table>
                        <tr class="border-y ">
                            <th class="w-48 py-2">名前</th>
                            <td>{{ $inputs['name'] }}</td>
                            <input type="hidden" name="name" value="{{ $inputs['name'] }}">

                        </tr>
                        <tr class="border-b">
                            <th class="w-48 py-2">メールアドレス</th>
                            <td>{{ $inputs['email'] }}</td>
                            <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                        </tr>
                        <tr class="border-b">
                            <th class="w-48 py-2">お問い合わせ内容</th>
                            <td class="py-2  sm:max-w-2xl  break-all	"> {!! nl2br(e($inputs['content'])) !!}</td>
                            <input type="hidden" name="content" value="{{ $inputs['content'] }}">
                        </tr>
                    </table>
                    <div class="mt-2  flex justify-center">
                        <button type="button" onclick="location.href='{{ route('contact') }}' " class="mr-1 border-black rounded border mt-1  w-40  hover:border-slate-500 hover:text-slate-600">戻る</button>
                        <button  type="submit"  class="mt-1 ml-1  text-white text-base bg-blue-500 rounded w-40  hover:bg-blue-400">この内容で送信する</button>
                    </div>
                </form>
            </div>
        </div>
        @include('layouts.footer')
    </body>
</html>