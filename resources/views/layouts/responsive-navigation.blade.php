 <ul class="ml-2 mb-3  pt-24 flex justify-center md:hidden">
            <li class="mb-1  mr-2 md:mr-4  hover:text-gray-500 {{ request()->route()->named('dashboard*') ? 'font-bold	' : '' }}"><a class="" href="{{ route('dashboard') }}">アカウント情報</a></li>
            <li class="mb-1  mr-2 md:mr-4 hover:text-gray-500 {{ request()->route()->named('add_product*') ? 'font-bold	' : '' }}"><a href="{{ route('add_product') }}">出品</a></li>
            <li class="mb-1  mr-2 md:mr-4 hover:text-gray-500  {{ request()->route()->named('product*') ? 'font-bold	' : '' }}"><a href="{{ route('product') }}">出品一覧</a></li>
            <li class="mb-1  mr-2 md:mr-4 hover:text-gray-500  {{ request()->route()->named('profile*') ? 'font-bold	' : '' }}"><a href="{{ route('profile') }}">アカウント情報変更</a></li>
</ul>