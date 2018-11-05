<div class="row p-3">
    <div class="col">
<!-- ============================================================= -->
        <h1 class="text-center">Login</h1>
        <hr>
<!-- ============================================================= -->
        <form action="default/proses.php?login=akun" method="post">
            <!-- ============================= -->
            <div class="form-group">
                <label for="inputUsername" class="col-form-label text-center w-100">Username</label>
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Masukkan Username.." required autofocus>
            </div>
            <!-- ============================= -->
            <div class="form-group">
                <label for="inputPassword" class="col-form-label text-center w-100">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Password.." required>
            </div>
            <!-- ============================= -->
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" name="login" value="Login">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
            <!-- ============================= -->
        </form>
<!-- ============================================================= -->
    </div>
</div>