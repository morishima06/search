@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-sm border border-black   text-black placeholder-slate-700 outline-none pl-2']) !!}>
