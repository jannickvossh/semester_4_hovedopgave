@php
    $classes = 'form__label'
@endphp

<label
    {{
        $attributes->merge([
            'class' => ''
        ])
    }}
>{{ $slot }}</label>
