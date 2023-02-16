<div class="row">
    <div class="col-12">
        <h2>User</h2>
        <div class="card">
            <div class="card-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-2 row">
                        <div class="col-6">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Level</label>
                        <select name="level" class="form-select" id="">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM user");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$no</td>
                                    <td>$row[username]</td>
                                    <td>$row[level]</td>
                                    <td>
                                        <a href='index.php?page=user_edit&username=$row[username]' class='btn btn-warning btn-sm'>Edit</a>
                                        <a href='index.php?page=user_delete&username=$row[username]' onclick=\"return confirm('Hapus Data?')\" class='btn btn-danger btn-sm'>Delete</a>
                                    </td>
                                </tr>";

                            $no++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>