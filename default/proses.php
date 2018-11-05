<?php
    session_start();

    class Proses {
        private $pdo;
// =============================================================
        public function __construct(){
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
        public function login($username, $password){

            $stmt = $this->pdo -> prepare("SELECT * FROM tb_account WHERE username = '$username' AND password = md5('$password')");
            $stmt -> execute();

            $row = $stmt -> rowcount();
            $data = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($row != 0) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['sukses'] = "Sukses";
                header("Location: ../admin/index.php");
            } else {
                ?>
                <script>
                    alert("Username atau Password Salah..!");
                    location = "../index.php";
                </script>
                <?php
            }
        }
// =============================================================
        public function register($username, $password, $confirm_password){
            if ($password != $confirm_password) {
                ?>
                <script>
                    alert("Confirm Password tidak sama dengan Password..!");
                    location = "../index.php?hal=Register";
                </script>
                <?php
            } else {
            // =============================================================
                $stmt = $this->pdo -> prepare("SELECT * FROM tb_account WHERE username = '$username' AND password = md5('$password')");
                $stmt -> execute();

                $row = $stmt -> rowcount();
                if ($row == 0) {
                    $sql = $this->pdo -> prepare("INSERT INTO tb_account(username, password) VALUES ('$username',md5('$password'))");
                    $sql -> execute();

                    if ($sql) {
                        ?>
                        <script>
                            alert("Register Berhasil..");
                            location = "../index.php";
                        </script>
                        <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Akun telah terpakai..!");
                        location = "../index.php?hal=Register";
                    </script>
                    <?php
                }
            // =============================================================
            }
        }
    }

    $data = new Proses();
// =============================================================
    if (isset($_GET['login'])){
        $data -> login($_POST['username'], $_POST['password']);
    } 
    if(isset($_GET['register'])){
        $data -> register($_POST['username'], $_POST['password'], $_POST['confirm_password']);
    }
// =============================================================
?>