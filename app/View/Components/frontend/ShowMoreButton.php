<?php

namespace App\View\Components\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowMoreButton extends Component
{
    /**
     * Create a new component instance.
     */
public $text;
public $bg;

public function __construct($text = 'Show More', $bg = '#39b54a')
{
    $this->text = $text;
    $this->bg = $bg;
}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.show-more-button');
    }
}
