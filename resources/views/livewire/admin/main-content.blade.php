<div class="card">
    <div class="card-body">
        <h5>Customize your Home page experience</h5>
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
                    @foreach ($welcomeHeadings as $welcomeHeading)
                        <tr>
                            <td>{{ $welcomeHeading->id }}</td>
                            <td>{{ $welcomeHeading->heading }}</td>
                            <td>{{ $welcomeHeading->description }}</td>
                            <td>
                                <div wire:loading>
                                    <img src="{!! asset('images/Rolling-0.7s-105px.svg') !!}" alt="User Image" width="50px">
                                </div>
                                <img wire:loading.class="d-none" src="{!! asset($welcomeHeading->image) !!}" alt="Welcome Image" style="width: 250px"
                                    loading="lazy">
                            </td>
                            <td>
                                <button class="btn btn-primary" wire:click="updateWelcome({{ $welcomeHeading->id }})"><i
                                        class='bx bx-pencil me-2'></i>Update</button>
                                <button class="btn btn-danger" wire:click="deleteWelcome({{ $welcomeHeading->id }})"><i
                                        class='bx bx-trash me-2'></i>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $welcomeHeadings->links() }}
        </div>
    </div>
</div>
