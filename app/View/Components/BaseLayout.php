<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\Component;
use Illuminate\View\View;

class BaseLayout extends Component
{
    public function __construct(
        public string $title = 'ApexCode | Automate and Grow Your Business.',
        public string $description = 'A one-man web agency that designs, develops, and maintains business web applications using laravel.'
    ){}

    public function render(): Application|View
    {
        return view('layouts.base');
    }
}
