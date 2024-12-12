<?php

use function Laravel\Folio\name;

name('home');

?>

<x-base-layout>
    <div class="py-16 bg-white">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-1 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                <livewire:blog.show-posts />
            </div>
        </div>
    </div>
</x-base-layout>
