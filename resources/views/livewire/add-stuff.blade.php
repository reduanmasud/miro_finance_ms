    <div class="content-wrapper">
        <div class="content">
            <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFormTitle">Modal Title </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <pre>
                            {{ var_dump($userView)}}
                            </pre>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFormTitle">Modal Title </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form wire:submit.prevent='update'>
                            <div class="modal-body">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input name="name" value="Hello World" type="text"
                                                class="form-control @error('newUser.name') cus-error-border @enderror"
                                                id="name" wire:model.defer="userView.name">
                                            @error('newUser.name')
                                            <div class="invalid-feedback">
                                                {{  __($message) }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input name="address" type="text"
                                                class="form-control @error('newUser.address') cus-error-border @enderror"
                                                id="address" wire:model.defer="userView.address"
                                                placeholder="Enter addrss">
                                            @error('newUser.address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="role">Set A Role</label>
                                            <select
                                                class="form-control @error('newUser.role') cus-error-border @enderror"
                                                name="role" id="role" wire:model.defer="userView.role">
                                                <option value="">==SELECT ONE==</option>
                                                <option value="1">Manager</option>
                                                <option value="2">Branch Manager</option>
                                                <option value="3">Stuff</option>
                                            </select>
                                            @error('newUser.role')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="email"
                                                class="form-control @error('newUser.email') cus-error-border @enderror"
                                                id="email" wire:model.defer="userView.email" placeholder="Enter Email">
                                            @error('newUser.email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input name="mobile" value="Hello" type="text"
                                                class="form-control @error('newUser.mobile') cus-error-border @enderror"
                                                id="mobile" wire:model.defer="userView.mobile"
                                                placeholder="Enter Mobile">
                                            @error('newUser.mobile')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="password">Password</label>
                                            <input name="password" type="text" class="form-control @error('newUser.password') cus-error-border @enderror" id="password" wire:model.defer="newUser.password" placeholder="Enter password" />
                                            @error('newUser.password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                        </div> --}}

                                        {{-- <div class="form-footer float-right">
                                            <button type="submit" class="btn btn-primary btn-default">Add Stuff</button>
                                            <button type="reset" wire:click="resetForm" class="btn btn-secondary btn-default">Cancel</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add a new Stuff</h2>
        </div>
        <div class="card-body">
            @if (session()->has('userAdded'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                {{ session('userAdded') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <form wire:submit.prevent='submit'>
                @csrf
                <div class="row">
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text"
                                class="form-control @error('newUser.name') cus-error-border @enderror" id="name"
                                wire:model.defer="newUser.name" placeholder="Enter Name">
                            @error('newUser.name')
                            <div class="invalid-feedback">
                                {{  __($message) }}
                            </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text"
                                class="form-control @error('newUser.address') cus-error-border @enderror" id="address"
                                wire:model.defer="newUser.address" placeholder="Enter addrss">
                            @error('newUser.address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="role">Set A Role</label>
                            <select class="form-control @error('newUser.role') cus-error-border @enderror" name="role"
                                id="role" wire:model.defer="newUser.role">
                                <option value="">==SELECT ONE==</option>
                                <option value="1">Manager</option>
                                <option value="2">Branch Manager</option>
                                <option value="3">Stuff</option>
                            </select>
                            @error('newUser.role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email"
                                class="form-control @error('newUser.email') cus-error-border @enderror" id="email"
                                wire:model.defer="newUser.email" placeholder="Enter Email">
                            @error('newUser.email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input name="mobile" type="text"
                                class="form-control @error('newUser.mobile') cus-error-border @enderror" id="mobile"
                                wire:model.defer="newUser.mobile" placeholder="Enter Mobile">
                            @error('newUser.mobile')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="text"
                                class="form-control @error('newUser.password') cus-error-border @enderror" id="password"
                                wire:model.defer="newUser.password" placeholder="Enter password" />
                            @error('newUser.password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-footer float-right">
                            <button type="submit" class="btn btn-primary btn-default">Add Stuff</button>
                            <button type="reset" wire:click="resetForm"
                                class="btn btn-secondary btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if (session()->has('userUpdate'))
        <div class="alert alert-dismissible fade show alert-success" role="alert">
            {{ session('userUpdate') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>Expendable Data Table</h2>

                    <a href="https://datatables.net/examples/api/row_details.html" target="_blank"
                        class="btn btn-outline-primary btn-sm text-uppercase">
                        <i class=" mdi mdi-link mr-1"></i> Docs
                    </a>
                </div>
                <div class="card-body">
                    <div class="expendable-data-table">
                        <table id="hoverable-data-table" class="table hover nowrap" style="width:100%">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                                            <button wire:click="viewUser({{$user->id}})" class="btn btn-primary"><i class="mdi mdi-18px mdi-eye-outline"></i></button>
                                            <button wire:click="editUser({{$user->id}})" class="btn btn-warning" ><i class="mdi mdi-18px mdi-pencil"></i></button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#editModal"><i class="mdi mdi-18px mdi-trash-can-outline"></i> </button>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
