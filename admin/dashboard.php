<div class="container-fluid">
    <div class="row">
        <div class="col p-3">
            <h1 class="text-center mb-0">List Data</h1>
<!-- ============================================================= -->
            <form action="index.php" method="post">
                <div class="form-group row float-right">
                    <!-- ============================= -->
                    <div class="col-sm-7 p-0">
                        <input type="text" name="search" class="form-control">
                    </div>
                    <!-- ============================= -->
                    <div class="col-sm-1">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                    <!-- ============================= -->
                </div>
            </form>
<!-- ============================================================= -->
            <div class="form-group">
                <table class="table table-hover text-center w-100">
                    <!-- ============================= -->
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Hobby</th>
                            <th>Genre</th>
                            <th>Wisata</th>
                            <th>Tanggal Lahir</th>
                            <th colspan="2" width="5%">Option</th>
                        </tr>
                    </thead>
                    <!-- ============================= -->
                    <tbody>
                        <?php
                            require("proses.php");
                            @$search = $_POST['search'];
                            $result = $data -> view($search);

                            $no = 1;
                            $row = $result -> rowcount();
                            if ($row != 0) {
                                while ($data = $result -> fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <th><?php echo $no++; ?></th>
                                        <td><?php echo $data['nim'];?></td>
                                        <td><?php echo $data['nama_depan'] . " " . $data['nama_belakang'];?></td>
                                        <td><?php echo $data['email'];?></td>
                                        <td><?php echo $data['kelas'];?></td>
                                        <td><?php echo $data['hobby'];?></td>
                                        <td><?php echo $data['genre'];?></td>
                                        <td><?php echo $data['wisata'];?></td>
                                        <td><?php echo $data['tgl_lahir'];?></td>
                                        <td class="pr-1"><a href="index.php?hal=EditData&nim=<?php echo $data['nim'];?>"><button class="btn btn-primary">Edit</button></a></td>
                                        <td class="pl-1"><a href="proses.php?delete=<?php echo $data['nim'];?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya..?');"><button class="btn btn-danger">Delete</button></a></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="10"><h1>Data Tidak Ada</h1></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                    <!-- ============================= -->
                </table>
            </div>
<!-- ============================================================= -->
        </div>
    </div>
</div>