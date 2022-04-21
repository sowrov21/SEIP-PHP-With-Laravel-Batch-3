<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{

    public $btnName;

    public function __construct($btnName)
    {
        $this->btnName = $btnName;
    }


    public function render()
    {
        return view('components.button');
    }
}
