<!-- Vendor JS Files -->
<script src="{{asset('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/quill/quill.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('NiceAdmin/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('NiceAdmin/assets/js/main.js')}}"></script>

<script>
    const input = document.getElementById('foto_profil');
    const preview = document.getElementById('preview');

    input.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '100px'; // Atur ukuran gambar jika perlu
                preview.innerHTML = ''; // Kosongkan div preview sebelumnya
                preview.appendChild(img); // Tampilkan gambar di div preview
            }
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = 'Preview tidak tersedia';
        }
    });
</script>
