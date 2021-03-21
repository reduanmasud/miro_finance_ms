<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AddStuff extends Component
{
    public $count = 0;
    public $usr;
    public $userView = null;
    public $newUser = [
        'id' => null,
        'name' => null,
        'email' => null,
        'mobile' => null,
        'role' => null,
        'password' => null,
        'address' => null
    ];
    // protected $listenters = [
    //     'refreshParent' => '$refresh',
    // ];
    protected $rules = [
        'newUser.name' => 'required',
        'newUser.email' => 'required',
        'newUser.password' => 'required|min:5',
        'newUser.address' => 'required',
        'newUser.mobile' => 'required',
        'newUser.role' => 'required',
    ];
    public $users;

    public function viewUser($id)
    {
        $viewUser = User::where('id', $id)->first();
        $this->userView['name'] = $viewUser->name;
        $this->userView['email'] = $viewUser->email;
        $this->userView['mobile'] = $viewUser->mobile;
        $this->userView['role'] = $viewUser->role;
        $this->userView['address'] = $viewUser->address;
        $this->dispatchBrowserEvent('openViewModal');
        //dd($this->userView);
    }

    public function editUser($id)
    {
        $viewUser = User::where('id', $id)->first();
        $this->userView['id'] = $viewUser->id;
        $this->userView['name'] = $viewUser->name;
        $this->userView['email'] = $viewUser->email;
        $this->userView['mobile'] = $viewUser->mobile;
        $this->userView['role'] = $viewUser->role;
        $this->userView['address'] = $viewUser->address;
        $this->dispatchBrowserEvent('openEditModal');
    }

    public function update()
    {
        User::where('id', $this->userView['id'])->first()->update($this->userView);
        session()->flash('userUpdate', 'User Successfully Updated..');
        $this->dispatchBrowserEvent('closeEditModal');
    }

    public function resetForm()
    {
        $this->newUser['name'] = null;
        $this->newUser['email'] = null;
        $this->newUser['mobile'] = null;
        $this->newUser['role'] = null;
        $this->newUser['password'] = null;
        $this->newUser['address'] = null;
    }

    public function setUsers()
    {
        if ($this->usr->role == 0) {
            $this->users = User::all()->where('role', '!=', 0);
        }

        if ($this->usr->role == 1) {
            $this->users = User::all()->where('role', 3);
        }

        if ($this->usr->role == 2) {
            $this->users = User::all()->where('role', 3);
        }
    }

    public function successAddMsg()
    {
        session()->flash('userAdded', 'User Success fully added');
    }

    public function mount()
    {
        $this->usr = Auth::user();
        $this->setUsers();
    }

    public function submit()
    {
        //dd($this->newUser);
        $this->validate();

        User::create([
            'name' => $this->newUser['name'],
            'email' => $this->newUser['email'],
            'mobile' => $this->newUser['mobile'],
            'password' => Hash::make($this->newUser['password']),
            'role' => $this->newUser['role'],
            'address' => $this->newUser['address'],
        ]);
        $this->resetForm();
        $this->successAddMsg();
        $this->setUsers();
    }

    public function render()
    {
        return view('livewire.add-stuff');
    }
}
