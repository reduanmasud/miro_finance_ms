<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Members extends Component
{

    public $issuedMembers;
    public $unIssuedMembers;    

    public $newMember = [];
    protected $listeners = ['refreshTable' => '$refresh'];


    public function mount(){
        $this->issuedMembers = Member::all()->where('issued', true);
        $this->unIssuedMembers = Member::all()->where('issued', false);
    }

    public function render()
    {
        return view('livewire.members');
    }

    public function resetForm()
    {
        $this->newMember = [];
    }
    public function submit()
    {
        $this->validate([
            'newMember.first_name' => 'required',
            'newMember.last_name' => 'required',
            'newMember.mobile1' => 'required'
        ]);

        $this->newMember['user_id'] = Auth::user()->id;
        //dd($this->newMember);
        Member::create($this->newMember);
        $this->dispatchBrowserEvent('closeNewModal');
        $this->resetForm();
        $this->emit('refreshTable');
        session()->flash('memberAdded', 'Member Success fully added');
    }
    public function addNewMember()
    {
        
        $this->dispatchBrowserEvent('openNewModal');
    }
}
