<div class="card">
    <div class="card-body">
        <h5>Change your bio</h5>
        <hr>
        <div class="contact-info-section d-flex mt-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center fw-bold">Your Bio</th>
                        <th style="width: 30%" class="text-center  fw-bold">Your Image</th>
                    </tr>
                </thead>
                @foreach ($abouts as $about)
                    <tbody>
                        <tr>
                            <td style="text-align: justify;">{{ $about->description }}</td>
                            <td style="width: 50px"><img src="{!! asset('storage/' . $about->image) !!}" alt="User Image" width="150px"></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <button type="button" class="btn btn-block mb-4" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop"
            style="background-color: #50017d; color:white">Update info</button>
            @if ($abouts->isEmpty())
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

    <div wire:ignore.self class="modal fade modal-lg" id="staticBackdrop" tabindex="-1"
        aria-labelledby="staticBackdropLabel"aria-hidden="true" data-mdb-backdrop="static"
        data-mdb-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 style="padding-right:150px">Update Details</h5>
                    <hr>
                    <form wire:submit.prevent="update_bio">
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="form4Example3">About</label>
                                    <textarea wire:model="aboutText" class="form-control" id="form4Example3" rows="4"></textarea>
                                    @error('aboutText')
                                        <span class="text-danger">this field is required</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form">
                                    <label class="form-label" for="created">Add your picture</label>
                                    <input type="file" id="created" class="form-control" accept="image/*"
                                        wire:model="image" />
                                    @error('image')
                                        <span class="text-danger">this field is required</span>
                                    @enderror
                                </div>
                                <div wire:loading wire:target="image">
                                    <img src="{!! asset('images/Rolling-0.7s-105px.svg') !!}" alt="User Image" width="50px">
                                </div>
                                @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="preview" class="mt-2" style="width: 80px">
                            @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                        <button type="button" class="btn btn-secondary btn-block"
                            data-mdb-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('UpdateError', event => {
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
