<?php

namespace App\Http\Livewire;

use App\Models\Costumer as ModelsCostumer;
use Livewire\Component;

class Costumer extends Component
{
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleteCostumer'];

    public function hapusCostumer($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCostumer()
    {
        $costumer = ModelsCostumer::where('id', $this->delete_id)->first();
        $costumer->delete();

        $this->dispatchBrowserEvent('costumerDeleted');

        return redirect()->route('user.costumer');
    }

    public function render()
    {
        $costumerAllCount = ModelsCostumer::where('user_id', auth()->user()->id)->count();
        $newCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'NEW COSTUMER')->count();
        $loyalCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'LOYAL COSTUMER')->count();

        return view('livewire.costumer',[
            'costumers' => ModelsCostumer::where('user_id', auth()->user()->id)
            ->get()
        ], compact('costumerAllCount', 'newCostumerCount', 'loyalCostumerCount'));
    }
}
