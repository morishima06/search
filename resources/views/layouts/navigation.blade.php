<div class="md:w-1/5  md:flex md:justify-center hidden px-3">
    <ul>
        <div class="">
            <li class="mb-1   hover:text-gray-500 {{ request()->route()->named('dashboard*') ? 'font-bold	' : '' }}"><a class="" href="{{ route('dashboard') }}">アカウント情報</a></li>
            <li class="mb-1   hover:text-gray-500 {{ request()->route()->named('upload*') ? 'font-bold	' : '' }}"><a href="{{ route('upload') }}">出品</a></li>
            <li class="mb-1   hover:text-gray-500  {{ request()->route()->named('show*') ? 'font-bold	' : '' }}"><a href="{{ route('show') }}">出品一覧</a></li>
            <li class="mb-1   hover:text-gray-500  {{ request()->route()->named('edit*') ? 'font-bold	' : '' }}"><a href="{{ route('edit') }}">アカウント情報変更</a></li>
        </div>

    </ul>
</div>