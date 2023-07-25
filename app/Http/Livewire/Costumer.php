<?php

namespace App\Http\Livewire;

use App\Models\Costumer as ModelsCostumer;
use Livewire\Component;
use Livewire\WithPagination;

class Costumer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['deleteConfirmed'=>'deleteCostumer'];
    public $delete_id;

    public $perPage = 5;
    public $search;
    public $status = null;
    protected $queryString = ['status'];
    public $selectedRows = [];
    public $selectPageRows = false;

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

    // Untuk mengubah perubahan data yang dipilih
    public function updatedselectPageRows($value)
    {
        if($value){
            $this->selectedRows = $this->costumers->pluck('id')->map(function($id){
                return (string) $id;
            });
        } else {
            $this->reset(['selectedRows', 'selectPageRows']);
        }
    }

    // Untuk menghapus semua data yang dipilih
    public function deleteSelectedRows()
    {
        ModelsCostumer::whereIn('id', $this->selectedRows)->delete();

        $this->dispatchBrowserEvent('costumerDeleted', ['message' => 'Semua data yang dipilih berhasil dihapus']);

        $this->reset(['selectPageRows', 'selectedRows']);
    }

    // Untuk mengubah status data appointment menjadi scheduled
    public function markAllAsNewCostumer()
    {
        ModelsCostumer::whereIn('id', $this->selectedRows)->update(['status' => 'NEW COSTUMER']);

        $this->dispatchBrowserEvent('updated', ['message' => 'Semua data yang dipilih berhasil diubah status menjadi NEW COSTUMER']);

        $this->reset(['selectPageRows', 'selectedRows']);
    }

    // Untuk mengubah status data appointment menjadi closed
    public function markAllAsLoyalCostumer()
    {
        ModelsCostumer::whereIn('id', $this->selectedRows)->update(['status' => 'LOYAL COSTUMER']);

        $this->dispatchBrowserEvent('updated', ['message' => 'Semua data yang dipilih berhasil diubah status menjadi LOYAL COSTUMER']);

        $this->reset(['selectPageRows', 'selectedRows']);
    }

    // Filter data berdasarkan status
    public function filterCostumersByStatus($status = null)
    {
        $this->resetPage();

        $this->status = $status;
    }

    // Mengambil data dari database
    public function getCostumersProperty()
    {
        return ModelsCostumer::where('user_id', auth()->user()->id)
        ->when($this->status, function ($query, $status){
            return $query->where('status', $status);
        })
        ->search(trim($this->search))
        ->paginate($this->perPage);
    }

    public function render()
    {
        // $costumerAllCount = ModelsCostumer::where('user_id', auth()->user()->id)->count();
        // $newCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'NEW COSTUMER')->count();
        // $loyalCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'LOYAL COSTUMER')->count();

        // return view('livewire.costumer',[
        //     'costumers' => ModelsCostumer::where('user_id', auth()->user()->id)
        //     ->when($this->filter, function($query){
        //         $query->where('status', $this->filter);
        //     })
        //     ->search(trim($this->search))
        //     ->paginate($this->perPage)
        // ], compact('costumerAllCount', 'newCostumerCount', 'loyalCostumerCount'));

        $costumers = $this->costumers;

        $costumerAllCount = ModelsCostumer::where('user_id', auth()->user()->id)->count();
        $newCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'NEW COSTUMER')->count();
        $loyalCostumerCount = ModelsCostumer::where('user_id', auth()->user()->id)->where('status', 'LOYAL COSTUMER')->count();

        return view('livewire.costumer',[
            'costumers' => $costumers,
            'costumerAllCount' => $costumerAllCount,
            'newCostumerCount' => $newCostumerCount,
            'loyalCostumerCount' => $loyalCostumerCount,
        ]);
    }
}
