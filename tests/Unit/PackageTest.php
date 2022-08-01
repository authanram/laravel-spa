<?php /** @noinspection StaticClosureCanBeUsedInspection */

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('renders', function () {
    $blade = <<<EOF
        <x-laravel-spa::page>
            <x-slot:headerPrepend>Prepend</x-slot:headerPrepend>
            <x-slot:headerAppend>Append</x-slot:headerAppend>
            <x-slot:brand>Brand</x-slot:brand>
            <x-laravel-spa::section name="Foox" style="height:768px">this is foox</x-laravel-spa::section>
            <x-laravel-spa::section name="Quux" style="height:768px">this is quux</x-laravel-spa::section>
        </x-laravel-spa::page>
    EOF;

    assertMatchesSnapshot(Blade::render($blade));
});
