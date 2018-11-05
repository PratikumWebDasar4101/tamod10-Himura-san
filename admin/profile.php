<?php
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
?>
<div class="container w-25">
    <div class="row">
        <div class="col p-3">
            <h1 class="text-center">Profile</h1>
            <hr>
            <form method="post">
                <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" name="id" class="form-control" id="inputID" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername" value="<?php echo $username; ?>" readonly>
                </div>
            </form>
        </div>
    </div>
</div>