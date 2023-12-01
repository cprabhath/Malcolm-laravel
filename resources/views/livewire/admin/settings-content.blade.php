<div class="card mb-4">
    <div class="card-body">
        <div class="contact-info-section d-flex mt-2">
            <h5 style="padding-right:140px">Personal Details</h5>
            <form style="width: 70%" wire:submit.prevent="personal_details">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" id="name" class="form-control"
                                value="{{ Auth::user()->name }}" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" id="email" class="form-control" value="{{ Auth::user()->email }}"
                                disabled />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="created">Created At</label>
                            <input type="text" id="created" class="form-control"
                                value="{{ Auth::user()->created_at }}" disabled />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="updated">Updated At</label>
                            <input type="text" id="updated" class="form-control"
                                value="{{ Auth::user()->updated_at }}" disabled />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    info</button>
            </form>
        </div>
        <hr class="mb-4">
        <div class="password-info-section d-flex mt-2">
            <h5 style="padding-right:120px">Change Password</h5>
            <form style="width: 70%" wire:submit.prevent="change_password">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="name">Current Password</label>
                            <input wire:model="current_pass" type="text" id="name" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="created">New Password</label>
                            <input wire:model="new_pass" type="text" id="created" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label class="form-label" for="updated">Confirm Password</label>
                            <input wire:model="confirm_pass" type="text" id="updated" class="form-control" />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    Password</button>
            </form>
        </div>
        <hr class="mb-4">
        <div class="password-info-section d-flex mt-2">
            <h5 style="padding-right:120px">Change Currency</h5>
            <form style="width: 70%" wire:submit.prevent="change_password">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Menu</option>
                                <option value="1">LKR</option>
                                <option value="2">USD</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    info</button>
            </form>
        </div>
        <hr class="mb-4">
        <div class="password-info-section d-flex mt-2">
            <h5 style="padding-right:170px">Notifications</h5>
            <form style="width: 70%" wire:submit.prevent="change_password">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form d-flex justify-content-between">
                            Send newly added albems info to the subscribers
                            <div class="form-check form-switch ">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    info</button>
            </form>
        </div>

        <hr class="mb-4">
        <div class="password-info-section d-flex mt-2">
            <h5 style="padding-right:170px">Backup Codes</h5>
            <form style="width: 70%" wire:submit.prevent="change_password">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form d-flex justify-content-between">
                            Send newly added albems info to the subscribers
                            <div class="form-check form-switch ">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block mb-4" style="background-color: #50017d; color:white">Save
                    info</button>
            </form>
        </div>
    </div>
</div>
