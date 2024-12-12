<?php

use function Laravel\Folio\name;

name('blog.show');

?>

<x-base-layout>
    <div class="px-6 py-32 bg-white lg:px-8">
        <div class="mx-auto max-w-3xl">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500">
                            <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="text-gray-400 size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <p class="ml-4 text-sm font-medium text-gray-500">{{ $post->title }}</p>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="mx-auto mt-8 max-w-3xl text-gray-700 text-base/7">
            <h1 class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 text-pretty sm:text-5xl">
                {{ $post->title}}
            </h1>
            <p class="mt-6 text-xl/8">{{ $post->excerpt }}</p>
            <div class="mt-10 max-w-2xl">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
</x-base-layout>
