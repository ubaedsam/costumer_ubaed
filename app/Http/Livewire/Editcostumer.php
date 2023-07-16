<?php

namespace App\Http\Livewire;

use App\Mail\EditCostumerMail;
use App\Models\Costumer;
use Livewire\Component;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Mail;

class Editcostumer extends Component
{
    // Data yang di simpan
    public $user_id;
    public $name;
    public $email;
    public $status;
    public $costumer_id;

    public function mount($costumer_id)
    {
        $costumer = Costumer::find($costumer_id);
        $costumer->user_id = Auth::guard('web')->user()->id;
        $this->name = $costumer->name;
        $this->email = $costumer->email;
        $this->status = $costumer->status;
        $this->costumer_id = $costumer->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'status' => 'required|in:NEW COSTUMER,LOYAL COSTUMER',
        ],[
            'name.required' => 'Data nama wajib di isi',
            'email.required' => 'Data email wajib di isi',
            'status.required' => 'Data status wajib di isi',
        ]);
    }

    public function ubahCostumer()
    {
        // proses validasi data untuk menambah data
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required|in:NEW COSTUMER,LOYAL COSTUMER',
        ],[
            'name.required' => 'Data nama wajib di isi',
            'email.required' => 'Data email wajib di isi',
            'status.required' => 'Data status wajib di isi',
        ]);

        $result = $this->status;

        if ($result === 'LOYAL COSTUMER') {
            $costumer = Costumer::find($this->costumer_id);
            $costumer->user_id = Auth::guard('web')->user()->id;
            $costumer->name = $this->name;
            $costumer->email = $this->email;
            $costumer->status = $result;
            $costumer->save();

            $this->sendCostumerConfirmationMail($costumer);
            return redirect()->route('user.costumer')->with('success','Data costumer berhasil diubah');
        } elseif($result === 'NEW COSTUMER') {
            $costumer = Costumer::find($this->costumer_id);
            $costumer->user_id = Auth::guard('web')->user()->id;
            $costumer->name = $this->name;
            $costumer->email = $this->email;
            $costumer->status = $result;
            $costumer->save();

            return redirect()->route('user.costumer')->with('success','Data costumer berhasil diubah');
        }
    }

    public function sendCostumerConfirmationMail($costumer)
    {
        Mail::to($costumer->email)->send(new EditCostumerMail($costumer));
    }

    public function render()
    {
        return view('livewire.editcostumer');
    }
}
