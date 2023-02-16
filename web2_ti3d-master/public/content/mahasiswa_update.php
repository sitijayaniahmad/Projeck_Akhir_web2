<?php
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);

//cek kosong
if (empty($nim) || empty($nama) || empty($alamat)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
} else {

    //update 
    $sql = "UPDATE mahasiswa SET nama = :nama, jurusan = :jurusan, alamat = :alamat WHERE nim = :nim";
    $simpan = $con->prepare($sql);
    #bind
    $simpan->bindParam('nama', $nama);
    $simpan->bindParam('jurusan', $jurusan);
    $simpan->bindParam('alamat', $alamat);
    $simpan->bindParam('nim', $nim);
    # execute
    $simpan->execute();

    if ($simpan->rowCount() > 0) {
        echo "<script>
            alert('data berhasil diubah');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diubah');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
}
