<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryForm extends Component
{
    public $category;

    public function __construct($category = null)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('components.category-form');
    }
}