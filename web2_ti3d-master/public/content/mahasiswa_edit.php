<?php if (isset($_GET['nim'])) : ?>
    <?php
    $nim = $_GET['nim'];
    $sql = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $data = $sql->fetch();
    ?>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5>Edit Mahasiswa</h5>
                    <form action="index.php?page=mahasiswa_update" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" value="<?= $data['nim'] ?>" readonly>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="jurusan" id="" class="form-select">
                                <option <?= ($data['jurusan'] == "Teknik Informatika" ? "selected" : "") ?>>Teknik Informatika</option>
                                <option <?= ($data['jurusan'] == "Sistem Informasi" ? "selected" : "") ?>>Sistem Informasi</option>
                                <option <?= ($data['jurusan'] == "Manajemen Informatika" ? "selected" : "") ?>>Manajemen Informatika</option>
                                <option <?= ($data['jurusan'] == "Komputerisasi Akuntansi" ? "selected" : "") ?>>Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan Alamat.."><?= $data['alamat'] ?></textarea>
                        </div>
                        <hr>
                        <div class="mb-2">
                            <a href="index.php?page=mahasiswa" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>