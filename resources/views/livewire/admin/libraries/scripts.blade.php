<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    window.addEventListener('ConfirmMessage', event => {
        Swal.fire({
            title: event.detail[0].title,
            icon: event.detail[0].type,
            text: event.detail[0].text,
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonColor: '#50017d',
            cancelButtonColor: '#bdc3c7',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                window.Livewire.dispatch('logged-out')
            }
        })
    })
</script>
