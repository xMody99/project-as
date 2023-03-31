<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    public int $totalQuantity = 0;
    public $cart;
    public $showAll = false;
    public $total;

    protected $listeners = ['cartUpdated' => 'render'];

    public function render()
    {
        if (auth()->user()) {
            $this->cart = CartModel::getCartContent();
            $this->totalQuantity = count($this->cart);
            $this->total = $this->calculateTotal();
        }

        return view('livewire.cart');
    }

    public function changeStatus()
    {
        $this->showAll = !$this->showAll;
    }

    private function calculateTotal()
    {
        $amount = 0;

        foreach ($this->cart as $productElement) {
            $amount += $productElement->product->price * $productElement->quantity;
        }

        return $amount;
    }

    public function delete($id)
    {
        $cartElement = CartModel::where(['userId' => auth()->user()->id, 'id' => $id])->delete();
    }
}
