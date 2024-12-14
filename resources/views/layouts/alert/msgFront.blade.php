@if (session('message'))
    {{-- <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        })
        
        Toast.fire({
            icon: 'success',
            title: '{{ session('message') }}',
        })
    </script> --}}
    <script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: '{{ session('message') }}',
            timer: 6000
        });
    </script>
    {{-- <div class="alert alert-success" role="alert">{{ session('message') }}</div> --}}
@endif

@if (session('error'))
<script>
    Swal.fire({
        icon: "error",
        title: "Error!",
        text: '{{ session('error') }}',
        timer: 6000
    });
</script>
    {{-- <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-right',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        })
        
        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}',
        })
    </script> --}}
    {{-- <div class="alert alert-danger" role="alert">{{ session('error') }}</div> --}}
@endif