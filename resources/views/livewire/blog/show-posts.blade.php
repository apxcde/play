<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;
use Illuminate\Support\Collection;
use App\Models\Post;

new class extends Component {
    public int $on_page = 5;

    #[Computed]
    public function posts(): Collection
    {
        return Post::latest()->take($this->on_page)->get();
    }

    public function loadMore(): void
    {
        $this->on_page += 5;
    }
}

?>

<div class="pt-10 mt-10 space-y-16 border-t border-gray-200">
    @forelse($this->posts as $post)
        <article class="flex flex-col justify-between items-start max-w-xl">
            <div class="relative group">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="{{ route('blog.show', [ 'post' => $post ]) }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-2 text-sm leading-6 text-gray-600 line-clamp-3">
                    {{ $post->excerpt }}
                </p>
            </div>

            <div class="flex relative gap-x-4 mt-3 items-cent er">
                <img src="{{ Avatar::create($post->user->name)->toBase64() }}"
                     alt="{{ $post->user->name }}" class="w-8 h-8 bg-gray-50 rounded-full">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $post->user->name }}
                        </a>
                    </p>
                </div>
            </div>
        </article>
    @empty
        <article class="flex flex-col justify-between items-start max-w-xl">
            <div class="relative group">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    No Posts Found
                </h3>
            </div>
        </article>
    @endforelse

    @if($this->posts->count() >= $on_page)
        <div x-intersect.full="$wire.loadMore()" class="p-4">
            <div wire:loading wire:target="loadMore" class="flex justify-center items-center w-full bg-white rounded dark:bg-gray-900">
                <div class="text-gray-600 dark:text-gray-400">
                    Loading more conversations...
                </div>
            </div>
        </div>
    @endif
</div>
