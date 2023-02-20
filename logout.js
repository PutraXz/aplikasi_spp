$('.logout_now').on('click', function() {
    var getLink = $(this).attr('href');
    Swal.fire({
        title: "Apakah Anda Yakin Ingin Logout??",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonColor: '#3085d6',
        cancelButtonText: "Batal"

    }).then(result => {
        //jika klik ya maka arahkan ke proses.php
        if (result.isConfirmed) {
            window.location.href = getLink
        }
    })
    return false;
});