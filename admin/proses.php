<?php
    class Proses {
        private $pdo;
// =============================================================
        public function __construct() {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db   = "db_ta10";

            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
                $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                print("Koneksi bermasalah : " . $e -> getMessage() . "<br>");
            }
        }
// =============================================================
        public function tambah_data($nim, $nama_depan, $nama_belakang, $email, $kelas, $hobby, $genre, $wisata, $tgl_lahir){
            $list_hobby = implode(", ", $hobby);
            $list_genre = implode(", ", $genre);
            $list_wisata = implode(", ", $wisata);

            $stmt = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa WHERE nim = '$nim'");
            $stmt -> execute();

            $row = $stmt -> rowcount();
            if ($row == 0) {
                $sql = $this->pdo -> prepare("INSERT INTO tb_mahasiswa VALUES ('$nim','$nama_depan', '$nama_belakang','$email','$kelas','$list_hobby','$list_genre','$list_wisata','$tgl_lahir')");
                $sql -> execute();

                if ($sql) {
                    ?>
                    <script>
                        alert("Data berhasil ditambah..!");
                        location = "index.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Data gagal ditambah..!");
                        location = "index.php?hal=tambah_data";
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("NIM telah terpakai..!");
                    location = "index.php?hal=tambah_data";
                </script>
                <?php
            }
        }
// =============================================================
        public function delete($nim){
            $sql = $this->pdo -> prepare("DELETE FROM tb_mahasiswa WHERE nim = '$nim'");
            $sql -> execute();

            if ($sql) {
                ?>
                <script>
                    alert("Hapus data berhasil..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Hapus data Gagal..");
                    location = "index.php";
                </script>
                <?php
            }
        }
// =============================================================
        public function edit_profile($id, $old_password, $new_password, $confirm_password){
            $stmt = $this->pdo -> prepare("SELECT * FROM tb_account WHERE id = '$id'");
            $stmt -> execute();
    
            $data = $stmt -> fetch(PDO::FETCH_ASSOC);
            if (md5($old_password) == $data['password']) {
                if ($new_password == $confirm_password) {
                    $sql = $this->pdo -> prepare("UPDATE tb_account SET password = md5('$new_password') WHERE id = '$id'");
                    $sql -> execute();
    
                    if ($sql) {
                        ?>
                        <script>
                            alert("Password berhasil di update..");
                            location = "index.php";
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            alert("Password gagal di update..!");
                            location = "index.php";
                        </script>
                        <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Confirm Password harus sama dengan New Password..!");
                        location = "index.php?hal=EditProfile";
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("Old Password tidak sama dengan yang sebelumnya..");
                    location = "index.php?hal=EditProfile";
                </script>
                <?php
            }
        }
// =============================================================
        public function edit_data($nim, $nama_depan, $nama_belakang, $email, $kelas, $hobby, $genre, $wisata, $tgl_lahir){
            $list_hobby = implode(", ", $hobby);
            $list_genre = implode(", ", $genre);
            $list_wisata = implode(", ", $wisata);

            $sql = $this->pdo -> prepare("UPDATE tb_mahasiswa SET nama_depan = '$nama_depan', nama_belakang = '$nama_belakang', email = '$email', kelas = '$kelas', hobby = '$list_hobby', genre = '$list_genre', wisata = '$list_wisata', tgl_lahir = '$tgl_lahir' WHERE nim = '$nim'");
            $sql -> execute();

            if ($sql) {
                ?>
                <script>
                    alert("Data berhasil diubah..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal diubah..!");
                    location = "index.php";
                </script>
                <?php
            }
        }
// =============================================================
        public function view($search){
            $query = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa WHERE nim LIKE '%$search%'");
            $query -> execute();
            return $query;
        }
// =============================================================
        public function view_data($nim){
            $query = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa WHERE nim = '$nim'");
            $query -> execute();
            return $query;
        }
// =============================================================
        public function view_profile($id){
            $query = $this->pdo -> prepare("SELECT * FROM tb_account WHERE id = '$id'");
            $query -> execute();
            return $query;
        }
    }

    $data = new Proses();
    if (isset($_GET['tambah_data'])) {
        $data -> tambah_data($_POST['nim'], $_POST['nama_depan'], $_POST['nama_belakang'], $_POST['email'], $_POST['kelas'], $_POST['hobby'], $_POST['genre'], $_POST['wisata'], $_POST['tgl_lahir']);
    }
    if (isset($_GET['edit_data'])) {
        $data -> edit_data($_POST['nim'], $_POST['nama_depan'], $_POST['nama_belakang'], $_POST['email'], $_POST['kelas'], $_POST['hobby'], $_POST['genre'], $_POST['wisata'], $_POST['tgl_lahir']);
    }
    if (isset($_GET['delete'])) {
        $data -> delete($_GET['delete']);
    }
    if (isset($_GET['edit_profile'])) {
        $data -> edit_profile($_GET['edit_profile'], $_POST['old_password'], $_POST['new_password'], $_POST['confirm_password']);
    }
?>