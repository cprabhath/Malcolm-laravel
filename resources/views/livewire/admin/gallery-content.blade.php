<div>
    <div class="card">
        <div class="card-body">
            <div class="my-contact-section d-flex mt-2">
                <h5 style="padding-right:150px">Albem Details</h5>
                <form style="width: 70%" wire:submit.prevent="personal_details">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form">
                                <label class="form-label" for="name">Title</label>
                                <input type="text" id="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form">
                                <label class="form-label" for="created">Description</label>
                                <textarea type="text" id="created" class="form-control" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form">
                                <label class="form-label" for="created">Upload your albem</label>
                                <input type="file" id="created" class="form-control" multiple accept="image/*"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block mt-4"
                        style="background-color: #50017d; color:white">Save</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <h5>Customize your Albem experience</h5>
            <hr>
            <div class="contact-info-section mt-2">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="width: 10%">Heading</th>
                            <th style="width: 30%">Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($albems as $Albem)
                            <tr>
                                <td>{{ $Albem->id }}</td>
                                <td>{{ $Albem->heading }}</td>
                                <td>{{ $Albem->description }}</td>
                                <td>
                                    <div wire:loading>
                                        <img src="{!! asset('images/Rolling-0.7s-105px.svg') !!}" alt="User Image" width="50px">
                                    </div>
                                    <img wire:loading.class="d-none" src="{!! asset($Albem->image) !!}" alt="Welcome Image" style="width: 250px"
                                        loading="lazy">
                                </td>
                                <td>
                                    <button class="btn btn-primary" wire:click="updateWelcome({{ $Albem->id }})"><i
                                            class='bx bx-pencil me-2'></i>Update</button>
                                    <button class="btn btn-danger" wire:click="deleteWelcome({{ $Albem->id }})"><i
                                            class='bx bx-trash me-2'></i>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $albems->links() }}
            </div>
        </div>
    </div>
</div>
