@props([
    'name' => ''
])

@php
    $classes = 'form__input form__input--text'
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
    type="text"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name) }}"
>
