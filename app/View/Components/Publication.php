<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Publication extends Component
{
    public $id;
    public $url;
    public $title;

    public function __construct($url, $title, $id = null )
    {
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.publication');
    }
}
