@props([
    'name' => ''
])

@php
    $classes = 'form__input form__input--email'
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
    type="email"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name) }}"
>
