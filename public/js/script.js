
$('.tombolTambahData').on('click', function(){

    $('#formModalLabel').html('Tambah Data Siswa');
    $('.modal-footer button[type=submit]').html('Tamabah Data');
    
});

$('.tampilModalUbah').on('click', function(){

        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })
        
    });
