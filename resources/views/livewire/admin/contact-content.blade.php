<div class="card">
    <div class="card-body">
        <div class="my-contact-section mt-2">
            <h5>Change Contact Details</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="fw-bold">Display Phone No</th>
                        <th class="fw-bold">Display Email</th>
                        <th class="fw-bold">Display Address</th>
                        <th class="fw-bold">Action</th>
                    </tr>
                </thead>
                @foreach ($contacts as $con)
                    <tbody>
                        <tr>
                            <td>{{ $con->phone }}</td>
                            <td>{{ $con->email }}</td>
                            <td>{{ $con->address }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                                    data-mdb-target="#view_inquiry" wire:click="show_inquiry({{ $con->id }})">
                                    <i class='bx bx-pencil me-2'></i>
                                    Update Contact
                                </button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <hr style="mb-3">
        <div class="my-contact-section mt-2">
            <h5>Inquiries</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="fw-bold">Full Name</th>
                        <th class="fw-bold">Email</th>
                        <th class="fw-bold">Contact No</th>
                        <th class="fw-bold">Subject</th>
                        <th class="fw-bold">Status</th>
                        <th class="fw-bold">Action</th>
                    </tr>
                </thead>
                @foreach ($inquiries as $inquire)
                    <tbody>
                        <tr>
                            <td>{{ $inquire->firstName . ' ' . $inquire->lastName }}</td>
                            <td>{{ $inquire->email }}</td>
                            <td>{{ $inquire->contactNo }}</td>
                            <td>{{ $inquire->subject }}</td>
                            <td>{{ $inquire->status }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                                    data-mdb-target="#view_inquiry" wire:click="show_inquiry({{ $inquire->id }})">
                                    <i class='bx bx-show me-2'></i>
                                    View Inquiry
                                </button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                {{ $inquiries->links() }}
            </table>
        </div>
    </div>
    <div wire:ignore.self class="modal fade modal-lg" id="view_inquiry" tabindex="-1"
        aria-labelledby="staticBackdropLabel"aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 style="padding-right:150px">Inquiry Details</h5>
                    <hr>
                    <form wire:submit.prevent="view_inquiry">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="form6Example2">Subject</label>
                                    <p>{{ $form['subject'] }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="form6Example1">Full name</label>
                                    <p>{{ $form['firstName'] . ' ' . $form['lastName'] }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="form6Example1">Email</label>
                                    <p>{{ $form['email'] }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="form6Example6">Phone</label>
                                    <p>{{ $form['contactNo'] }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form mb-4">
                            <label class="form-label" for="form6Example7">Message information</label>
                            <p>{{ $form['Message'] }}</p>
                        </div>
                        <div class="form d-flex justify-content-end">
                            Mark as Read
                            <div class="form-check form-switch mx-2">
                                <input wire:model="form.status" class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" />
                            </div>
                        </div>
                        <div class="row mb-4">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                        <button type="button" class="btn btn-secondary btn-block"
                            data-mdb-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
