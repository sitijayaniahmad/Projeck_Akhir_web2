<?php if ($level == "Admin") : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Data Mahasiswa</h5>
                    <hr>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#formMahasiswa">
                    <i class="bi bi-person-plus"></i> Tambah Mahasiswa
                    </button>
                    <table class="mt-2 table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>JURUSAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = $con->query("SELECT * FROM mahasiswa");
                            while ($row = $sql->fetch()) {
                                echo "<tr>
                                    <td>$row[nim]</td>
                                    <td>$row[nama]</td>
                                    <td>$row[jurusan]</td>
                                    <td>$row[alamat]</td>
                                    <td>
                                        <a href='index.php?page=mahasiswa_edit&nim=$row[nim]' class='btn btn-sm btn-warning'>Edit</a>
                                        <a href='index.php?page=mahasiswa_delete&nim=$row[nim]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus data ini?')\">Delete</a>
                                    </td>
                                </tr>";

                                // delete -> nim -> delete where nim
                                // edit -> nim -> cari data where nim -> tampilkan ke form -> update
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?page=mahasiswa_save" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="jurusan" id="" class="form-select">
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Manajemen Informatika</option>
                                <option>Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan Alamat.."></textarea>
                        </div>
                        <hr>
                        <div class="mb-2">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>