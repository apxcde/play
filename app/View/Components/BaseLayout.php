<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\View\Component;
use Illuminate\View\View;

class BaseLayout extends Component
{
    public function __construct(
        public string $title = 'Playground | ApexCode',
        public string $description = 'A place for experiments and learning. A playground to showcase this I have on the main blog.'
    ){}

    public function render(): Application|View
    {
        return view('layouts.base');
    }
}
