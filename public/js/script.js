
$('.tombolTambahData').on('click', function(){

    $('#formModalLabel').html('Tambah Data Siswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    
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
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#alamat').val(data.alamat);
                $('#no_telp').val(data.no_telp);
                
                $('#id').val(data.id);
            }
        })
        
    });

    $('.tombolTambahData').on('click', function(){

        $('#formModalLabel').html('Tambah Data Mapel');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
    });

    $('.tampilModalUbah').on('click', function(){

        $('#formModalLabel').html('Ubah Data Mapel');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mapel/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mapel/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama_mapel').val(data.nama_mapel);
                $('#jam_mulai').val(data.jam_mulai);
                $('#jam_selesai').val(data.jam_selesai);
                
                $('#id').val(data.id);
            }
        })
    });