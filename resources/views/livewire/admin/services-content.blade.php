<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h5>Customize Your Service Page Experience</h5>
            <button class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#add_new"><i
                    class='bx bx-plus me-2'></i>Add new</button>
        </div>
        <hr>
        <div class="contact-info-section d-flex mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Heading</th>
                        <th style="width: 40%">Features</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->heading }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->icon }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                                    data-mdb-target="#update" wire:click="edit_service({{ $service->id }})"><i
                                        class='bx bx-pencil me-2'></i>Update</button>
                                <button type="button" class="btn btn-danger"
                                    wire:click="delete_confirm({{ $service->id }})"><i
                                        class='bx bx-trash me-2'></i>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <div wire:ignore.self class="modal fade modal-lg" id="add_new" tabindex="-1"
                aria-labelledby="staticBackdropLabel"aria-hidden="true" data-mdb-backdrop="static"
                data-mdb-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5 style="padding-right:150px">Update Details</h5>
                            <hr>
                            <form wire:submit.prevent="add_service">
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form">
                                            <div class="form mb-3">
                                                <label class="form-label" for="form6Example1">Heading</label>
                                                <input wire:model="form.heading" type="text" id="form6Example1"
                                                    class="form-control" />
                                                @error('form.heading')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                            <div class="form mb-3">
                                                <label class="form-label" for="form6Example1">Icon</label>
                                                <select wire:model="form.icon" class="form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Select Menu</option>
                                                    <option value="bx bx-map-pin">Map Icon</option>
                                                    <option value="bx bxs-calendar">Calender Icon</option>
                                                    <option value="bx bxs-quote-alt-left">Quote Icon</option>
                                                    <option value="bx bxs-face">Face Icon</option>
                                                    <option value="bx bx-cool">Cool Icon</option>
                                                    <option value="bx bx-phone">Phone Icon</option>
                                                </select>
                                                @error('form.icon')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                            <div>
                                                <label class="form-label" for="form4Example3">Features</label>
                                                <textarea wire:model="form.description" class="form-control" id="form4Example3" rows="4"></textarea>
                                                @error('form.description')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                        </div>
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

            <div wire:ignore.self class="modal fade modal-lg" id="update" tabindex="-1"
                aria-labelledby="staticBackdropLabel"aria-hidden="true" data-mdb-backdrop="static"
                data-mdb-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h5 style="padding-right:150px">Update Details</h5>
                            <hr>
                            <form wire:submit.prevent="update_service">
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form">
                                            <div class="form mb-3">
                                                <label class="form-label" for="form6Example1">ID</label>
                                                <input disabled wire:model="form.id" type="text" id="form6Example1"
                                                    class="form-control" />
                                                @error('form.id')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                            <div class="form mb-3">
                                                <label class="form-label" for="form6Example1">Heading</label>
                                                <input wire:model="form.heading" type="text" id="form6Example1"
                                                    class="form-control" />
                                                @error('form.heading')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                            <div class="form mb-3">
                                                <label class="form-label" for="form6Example1">Icon</label>
                                                <select wire:model="form.icon" class="form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Select Menu</option>
                                                    <option value="bx bx-map-pin">Map Icon</option>
                                                    <option value="bx bxs-calendar">Calender Icon</option>
                                                    <option value="bx bxs-quote-alt-left">Quote Icon</option>
                                                    <option value="bx bxs-face">Face Icon</option>
                                                    <option value="bx bx-cool">Cool Icon</option>
                                                    <option value="bx bx-phone">Phone Icon</option>
                                                </select>
                                                @error('form.icon')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                            <div>
                                                <label class="form-label" for="form4Example3">Features</label>
                                                <textarea wire:model="form.description" class="form-control" id="form4Example3" rows="4"></textarea>
                                                @error('form.description')
                                                    <span class="text-danger">this field is required</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                                <button type="button" class="btn btn-secondary btn-block"
                                    data-mdb-dismiss="modal" wire:click="resetForm">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $services->links() }}
        @if ($services->isEmpty())
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                    aria-label="Warning:">
                    <path
                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Please add some information to display
                </div>
            </div>
        @endif
    </div>
</div>
<script>
    window.addEventListener('deleteConfirm', event => {
        Swal.fire({
            title: event.detail[0].title,
            text: event.detail[0].text,
            icon: event.detail[0].type,
            showCancelButton: true,
            confirmButtonColor: '#50017d',
            cancelButtonColor: '#bdc3c7',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.Livewire.dispatch('deleted', event.detail[0])

            }
        })
    })

    window.addEventListener('AddError', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })

    window.addEventListener('Added', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })

    window.addEventListener('Updated', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })
</script>
