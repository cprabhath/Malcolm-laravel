<div class="card m-4" style="width: 500px;">
    <div class="card-body">
        <div class="card-header display-6 mb-2 text-center">Enter a Backup code</div>
        <form wire:submit.prevent="validateCode">
            <div class="form mb-4 d-flex justify-content-center">
                <input wire:model="code" type="text" id="code" class="form-control" autocomplete="falase"
                    style="font-size: 35px; width:150px" maxlength="6" />
            </div>
            @error('code')
                <span class="text-danger">* Sorry! Backup code must have 6 characters</span>
            @enderror
            <button wire:loading.attr="disabled" class="btn btn-block btn-lg mt-2" type="submit"
                style="background-color: #50017d; color:white">
                <span wire:loading.class="spinner-border" class="spinner-border-sm me-2" role="status"
                    aria-hidden="true"></span>
                Reset Password
            </button>
            <a href="{{ route('login') }}" class="btn btn-block btn-outline-dark" wire:navigate>Back</a>
        </form>
    </div>
</div>
<script>
    window.addEventListener('codeError', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })
</script>
