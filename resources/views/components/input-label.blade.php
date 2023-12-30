{{-- @props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label> --}}

@props(['value'])

<label {{ $attributes->merge(['class' => 'font-openSans text-black-light opacity-80 font-medium text-sm tracking-tight ']) }}>
    {{ $value ?? $slot }}
</label>