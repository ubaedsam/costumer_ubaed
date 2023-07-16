<?php

namespace App\Http\Livewire;

use App\Console\Commands\SendMail;
use App\Mail\AddCostumerMail;
use App\Models\Costumer;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Mail;

class Addcostumer extends Component
{
    // Data yang di simpan
    public $user_id;
    public $name;
    public $email;

    // proses validasi data untuk menambah data
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
        ],[
            'name.required' => 'Data nama wajib di isi',
            'email.required' => 'Data email wajib di isi',
        ]);
    }

    public function AddCostumer()
    {
        // proses validasi data untuk menambah data
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ],[
            'name.required' => 'Data nama wajib di isi',
            'email.required' => 'Data email wajib di isi',
        ]);

        $costumer = new Costumer();
        $costumer->user_id = Auth::guard('web')->user()->id;
        $costumer->name = $this->name;
        $costumer->email = $this->email;
        $costumer->status = 'NEW COSTUMER';

        $costumer->save();

        $this->sendCostumerConfirmationMail($costumer);

        return redirect()->route('user.costumer')->with('success', 'Data costumer berhasil ditambahkan');
    }

    public function sendCostumerConfirmationMail($costumer)
    {
        Mail::to($costumer->email)->send(new AddCostumerMail($costumer));
    }

    public function render()
    {
        return view('livewire.addcostumer');
    }
}
