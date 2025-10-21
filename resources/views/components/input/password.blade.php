@props([
    'name' => ''
])

@php
    $classes = 'form__input form__input--password'
@endphp

@error($name)
{{ $classes .= ' form__input--invalid' }}
@enderror

<input
    {{
        $attributes->merge([
            'class' => $classes
        ])
    }}
    type="password"
    name="{{ $name }}"
    id="{{ $name }}"
>
