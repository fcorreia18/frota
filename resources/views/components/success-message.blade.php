<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('{{$slot}}', function(message) {
            Swal.fire({
                icon: 'success',
                text: message,
                title: 'Cadastro bem sucedido',
                showConfirmButton: false,
                timer: 1500
            })
        });

      
    });
</script>