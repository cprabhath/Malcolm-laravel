<div class="card m-4" style="width: 500px;">
    <div class="card-body">
        <div class="card-header display-6 mb-2 text-center">Login to continue</div>
        <form wire:submit.prevent="submit">
            {{-- <div class="form mb-4">
                <label class="form-label" for="pass">Name</label>
                <input wire:model="form.name" type="text" id="pass" class="form-control"autocomplete="off" />
                @error('form.name')
                <span class="text-danger">Name is required</span>
                @enderror
            </div> --}}

            <div class="form mb-3">
                <label class="form-label" for="email">Email address</label>
                <input wire:model="form.email" type="email" id="email" class="form-control" autocomplete="off" />
                @error('form.email')
                    <span class="text-danger">Email is required</span>
                @enderror
            </div>

            <div class="form mb-4">
                <label class="form-label" for="pass">Password</label>
                <input wire:model="form.password" type="password" id="pass" class="form-control"
                    autocomplete="off" />
                @error('form.password')
                    <span class="text-danger">Password is required</span>
                @enderror
            </div>
            <button wire:loading.attr="disabled" class="btn btn-block btn-lg" type="submit" style="background-color: #50017d; color:white">
                <span wire:loading.class="spinner-border" class="spinner-border-sm me-2" role="status"
                    aria-hidden="true"></span>
                Login
            </button>
        </form>
        <div class="row mt-4">
            <div class="text-center">
                <a href="/admin/reset-method" wire:navigate>Forgot password?</a>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('loginError', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })
</script>
