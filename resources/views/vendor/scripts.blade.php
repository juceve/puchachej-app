<script>
    $(document).ready(function() {

        $('.select2').select2({
            theme: 'bootstrap4',
        });


    });

    Livewire.on('success', msg => {
        Swal.fire({
            title: "Excelente!",
            text: msg,
            icon: "success"
        });
    })
    Livewire.on('error', msg => {
        Swal.fire({
            title: "Error",
            text: msg,
            icon: "error"
        });
    })
    Livewire.on('warning', msg => {
        Swal.fire({
            title: "Atención!",
            text: msg,
            icon: "warning"
        });
    })
</script>
