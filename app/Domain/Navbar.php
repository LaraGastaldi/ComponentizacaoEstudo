<?php
 
namespace App\Domain;
 
use Livewire\Component;
 
class Navbar extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.navbar');
    }
}