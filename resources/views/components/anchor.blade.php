@props(['id'])

<a {{ $attributes->merge(config('laravel-spa.attributes.anchor'))->merge([
    'class' => config('laravel-spa.prefix').'-anchor',
    'href' => "#$id",
]) }}>{{ $slot }}</a>
