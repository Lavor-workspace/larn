<?php

namespace App\View\Components\component\articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class normal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $category,
        public string $name,
        public string $downloads,
        public string $url,
        public string $itemId,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.articles.normal');
    }
}
