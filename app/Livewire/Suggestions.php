<?php

namespace App\Livewire;

use Livewire\Component;

class Suggestions extends Component
{
    public $title;

    public array $list = [];

    public function buttonAction()
    {
        $this->list[] = $this->title . rand(1000, 9999);
    }

    public function buttonAction2()
    {
        $this->list = ['aaa', 'bbb', 'ccc'];
    }

    public function render()
    {
        return view('livewire.suggestions');
    }
}
