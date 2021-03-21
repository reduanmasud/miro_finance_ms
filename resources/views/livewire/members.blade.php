<div class="content-wrapper">
    <div class="modal fade" aria-labelledby="exampleModalFormTitle" id="newModal" tabindex="-1" role="dialog"
        arial-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="model-title">Add New Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='submit'>
                    <div class="modal-body">

                        @csrf
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input required name="first_name" type="text"
                                        class="form-control @error('newMember.first_name') cus-error-border @enderror"
                                        id="first_name" wire:model.defer="newMember.first_name"
                                        placeholder="Enter First Name">
                                    @error('newMember.first_name')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input name="last_name" type="text"
                                        class="form-control @error('newMember.last_name') cus-error-border @enderror"
                                        id="last_name" wire:model.defer="newMember.last_name"
                                        placeholder="Enter Last Name">
                                    @error('newMember.last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input name="date_of_birth" type="date"
                                        class="form-control @error('newMember.date_of_birth') cus-error-border @enderror"
                                        id="date_of_birth" wire:model.defer="newMember.date_of_birth"
                                        placeholder="Enter Date OF Birth">
                                    @error('newMember.date_of_birth')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="national_id_no">National ID</label>
                                    <input name="national_id_no" type="text"
                                        class="form-control @error('newMember.national_id_no') cus-error-border @enderror"
                                        id="national_id_no" wire:model.defer="newMember.national_id_no"
                                        placeholder="Enter Natibirth_certificate">
                                    @error('newMember.national_id_no')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="birth_certificate">Birth Certificates</label>
                                    <input name="birth_certificate" type="text"
                                        class="form-control @error('newMember.birth_certificate') cus-error-border @enderror"
                                        id="birth_certificate" wire:model.defer="newMember.birth_certificate"
                                        placeholder="Enter addrss">
                                    @error('newMember.birth_certificate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control @error('newMember.gender') cus-error-border @enderror"
                                        name="gender" id="gender" wire:model.defer="newMember.gender">
                                        <option value="" default>==SELECT ONE==</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('newMember.gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <select class="form-control @error('newMember.religion') cus-error-border @enderror"
                                        name="religion" id="religion" wire:model.defer="newMember.religion">
                                        <option value="" default>==SELECT ONE==</option>
                                        <option value="islam">Male</option>
                                        <option value="hindu">Female</option>
                                        <option value="buddho">Buddho</option>
                                        <option value="khristan">Khristan</option>
                                        <option value="buddho">Other</option>
                                    </select>
                                    @error('newMember.religion')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    <select class="form-control @error('newMember.role') cus-error-border @enderror"
                                        name="marital_status" id="marital_status"
                                        wire:model.defer="newMember.marital_status">
                                        <option value="" default>==SELECT ONE==</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                    @error('newMember.marital_status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="email"
                                        class="form-control @error('newMember.email') cus-error-border @enderror"
                                        id="email" wire:model.defer="newMember.email" placeholder="Enter Email">
                                    @error('newMember.email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile1">Mobile 1</label>
                                    <input name="mobile1" type="text"
                                        class="form-control @error('newMember.mobile1') cus-error-border @enderror"
                                        id="mobile1" wire:model.defer="newMember.mobile1" placeholder="Enter Mobile1"
                                        required>
                                    @error('newMember.mobile1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile2">Mobile 2</label>
                                    <input name="mobile2" type="text"
                                        class="form-control @error('newMember.mobile2') cus-error-border @enderror"
                                        id="mobile2" wire:model.defer="newMember.mobile2" placeholder="Enter Mobile1">
                                    @error('newMember.mobile2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile3">Mobile 3</label>
                                    <input name="mobile3" type="text"
                                        class="form-control @error('newMember.mobile3') cus-error-border @enderror"
                                        id="mobile3" wire:model.defer="newMember.mobile3" placeholder="Enter Mobile1">
                                    @error('newMember.mobile3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-md-6">
                                <h5 class="bg-secondary text-light p-2 rounded-left mb-1">Permanent Address</h5>

                                <div class="form-group">
                                    <label for="permanent_village">Village/Town</label>
                                    <input name="permanent_village" type="text"
                                        class="form-control @error('newMember.permanent_village') cus-error-border @enderror"
                                        id="permanent_village" wire:model.defer="newMember.permanent_village"
                                        placeholder="Enter Name">
                                    @error('newMember.permanent_village')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="permanent_thana">Thana</label>
                                    <input name="permanent_thana" type="text"
                                        class="form-control @error('newMember.permanent_thana') cus-error-border @enderror"
                                        id="permanent_thana" wire:model.defer="newMember.permanent_thana"
                                        placeholder="Enter Name">
                                    @error('newMember.permanent_thana')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="permanent_sub_district">Sub District</label>
                                    <input name="permanent_sub_district" type="text"
                                        class="form-control @error('newMember.permanent_sub_district') cus-error-border @enderror"
                                        id="permanent_sub_district" wire:model.defer="newMember.permanent_sub_district"
                                        placeholder="Enter Name">
                                    @error('newMember.permanent_sub_district')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="permanent_district">District</label>
                                    <input name="permanent_district" type="text"
                                        class="form-control @error('newMember.permanent_district') cus-error-border @enderror"
                                        id="permanent_district" wire:model.defer="newMember.permanent_district"
                                        placeholder="Enter Name">
                                    @error('newMember.permanent_district')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="permanent_address">Address</label>
                                    <input name="permanent_address" type="text"
                                        class="form-control @error('newMember.permanent_address') cus-error-border @enderror"
                                        id="permanent_address" wire:model.defer="newMember.permanent_address"
                                        placeholder="Enter Name">
                                    @error('newMember.permanent_address')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>


                            </div>


                            <div class="col col-md-6">

                                <h5 class="bg-secondary text-light p-2 rounded-right mb-1">Present Address</h5>
                                <div class="form-group">
                                    <label for="present_village">Village/Town</label>
                                    <input name="present_village" type="text"
                                        class="form-control @error('newMember.present_village') cus-error-border @enderror"
                                        id="present_village" wire:model.defer="newMember.present_village"
                                        placeholder="Enter Name">
                                    @error('newMember.present_village')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="present_thana">Thana</label>
                                    <input name="present_thana" type="text"
                                        class="form-control @error('newMember.present_thana') cus-error-border @enderror"
                                        id="present_thana" wire:model.defer="newMember.present_thana"
                                        placeholder="Enter Name">
                                    @error('newMember.present_thana')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="present_sub_district">Sub District</label>
                                    <input name="present_sub_district" type="text"
                                        class="form-control @error('newMember.present_sub_district') cus-error-border @enderror"
                                        id="present_sub_district" wire:model.defer="newMember.present_sub_district"
                                        placeholder="Enter Name">
                                    @error('newMember.present_sub_district')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="present_district">District</label>
                                    <input name="present_district" type="text"
                                        class="form-control @error('newMember.present_district') cus-error-border @enderror"
                                        id="present_district" wire:model.defer="newMember.present_district"
                                        placeholder="Enter Name">
                                    @error('newMember.present_district')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="present_address">Address</label>
                                    <input name="present_address" type="text"
                                        class="form-control @error('newMember.present_address') cus-error-border @enderror"
                                        id="present_address" wire:model.defer="newMember.present_address"
                                        placeholder="Enter Name">
                                    @error('newMember.present_address')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <h5 class="bg-secondary text-light p-2 rounded mb-1">Admission Date</h5>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="adimssion_date">Date</label>
                                    <input name="adimssion_date" type="date"
                                        class="form-control @error('newMember.adimssion_date') cus-error-border @enderror"
                                        id="adimssion_date" wire:model.defer="newMember.adimssion_date" value="today()"
                                        placeholder="Enter Name">
                                    @error('newMember.adimssion_date')
                                    <div class="invalid-feedback">
                                        {{  __($message) }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Member</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <div class="content">
        <button type="submit" wire:click="addNewMember" class="btn btn-success btn-lg mb-2">Admit New Member</button>
        @if (session()->has('memberAdded'))
        <div class="alert alert-dismissible fade show alert-success" role="alert">
            {{ session('memberAdded') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">

            <div class="col col-md-8">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h4>Unissued Mamber</h4>
                    </div>
                    <div class="card-body">
                        <div class="expendable-data-table">
                            <table id="hoverable-data-table" class="table hover nowrap" style="width:100%">
    
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
    
                                <tbody>
                                    @foreach ($unIssuedMembers as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->first_name }} {{$user->last_name}}</td>
                                        <td>{{ $user->mobile1 }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                                                <button wire:click="viewUser({{$user->id}})" class="btn btn-primary"><i class="mdi mdi-18px mdi-eye-outline"></i></button>
                                                @can('admin')
                                                <button wire:click="editUser({{$user->id}})" class="btn btn-warning" ><i class="mdi mdi-18px mdi-pencil"></i></button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#editModal"><i class="mdi mdi-18px mdi-trash-can-outline"></i> </button>
                                                @endcan
                                                
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


            <div class="col col-md-4">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h4>Issued Mamber</h4>
                    </div>
                    <div class="card-body">
        
        
                        <div class="form-footer float-right">
                            {{-- <button type="submit" class="btn btn-primary btn-default">Add Stuff</button>
                            <button type="reset" wire:click="resetForm" class="btn btn-secondary btn-default">Cancel</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            

        </div>

    </div>
</div>
</div>
</div>
