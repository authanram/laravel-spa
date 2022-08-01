@props(['name'])

@php($id = \Illuminate\Support\Str::kebab($name))

@push('navigation')
    <x-laravel-spa::anchor id="{{ $id }}">{{ $name }}</x-laravel-spa::anchor>
@endpush

<div {{ $attributes->merge(config('laravel-spa.attributes.section'))->merge([
    'class' => config('laravel-spa.prefix').'-section',
    'id' => $id
])}}>{{ $slot }}</div>
