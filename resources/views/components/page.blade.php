@props([
    'brand' => null,
    'headerPrepend' => '',
    'headerAppend' => '',
])

@php($config = config('laravel-spa'))

<div {{ $attributes->class($config['prefix'].'-page')->merge(config('laravel-spa')['attributes']['page']) }}>
    @php($attributes->setAttributes($config['attributes']['header']))
    <div {{ $attributes->class($config['prefix'].'-header') }}>
        {{ $headerPrepend }}
        @php($attributes->setAttributes($config['attributes']['brand']))
        @if($brand)
            <div {{ $attributes->class($config['prefix'].'-brand') }}>
                {{ $brand }}
            </div>
        @endif
        @php($attributes->setAttributes($config['attributes']['navigation']))
        <div {{ $attributes->class($config['prefix'].'-navigation') }}>
            @stack('navigation')
        </div>
        {{ $headerAppend }}
    </div>
    @stack('content:prepend')
    <div {{ $attributes->class($config['prefix'].'-content') }}>
        {{ $slot }}
    </div>
</div>
