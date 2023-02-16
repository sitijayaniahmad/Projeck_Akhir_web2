<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    $delete = $con->prepare("DELETE FROM user WHERE username = ?");
    $delete->bindParam(1, $username);
    $delete->execute();

    if ($delete->rowCount() > 0) {
        echo "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'index.php?page=user';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal dihapus');
            window.location.href = 'index.php?page=user';
        </script>";
    }
}