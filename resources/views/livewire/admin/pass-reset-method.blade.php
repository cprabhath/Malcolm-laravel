<div class="card m-4" style="width: 500px;">
    <div class="card-body">
        <div class="card-header display-6 mb-2 text-center">Select your password reset method</div>
        <a href="#" class="btn btn-outline-primary btn-block" wire:click="sendCode"><i class='bx bx-envelope me-2'></i> Reset via Email</a>
        <a href="{{ route('code-require') }}" class="btn btn-outline-primary btn-block"><i class='bx bx-check-shield me-2'></i> Reset via Backup Code</a>
        <a href="{{ route('login') }}"  class="btn btn-block btn-outline-dark mt-4" wire:navigate>Back</a>
    </div>
</div>
<script>
window.addEventListener('SendEmail', event => {
        Swal.fire({
            icon: event.detail[0].type,
            title: event.detail[0].title,
            text: event.detail[0].text,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
        })
    })
</script>
