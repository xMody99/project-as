<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class AddProduct extends Component
{
    public $productId;
    public $quantity = 1;
    public $error = [];
    public $success = [];

    public function mount(int $productId)
    {
        $this->productId = $productId;
    }

    public function render()
    {
        return view('livewire.add-product');
    }

    public function descrease()
    {
        if ($this->quantity <= 1) {
            return;
        }

        $this->quantity--;
    }

    public function increase()
    {
        $this->quantity++;
    }

    public function check()
    {
        if ($this->quantity <= 1) {
            $this->quantity = 1;
        }
    }

    public function addToCart()
    {
        Cart::addOrUpdate($this->productId, $this->quantity);
        $this->emit('cartUpdated');
    }
}
