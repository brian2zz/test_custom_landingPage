<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageNavbar extends Component
{
    public $title;
    public $links;
    public $href;

    public function __construct($title, $links,$href)
    {
        $this->title = $title;
        $this->links = $links;
        $this->href = $href;
        // dd($this->links);
    }

    public function render()
    {
        return view('components.page-navbar');
    }
}
