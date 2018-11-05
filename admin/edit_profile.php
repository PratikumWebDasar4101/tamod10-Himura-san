<?php
    require("proses.php");
    $id = $_SESSION['id'];
    $sql = $data -> view_profile($id);

    $data = $sql -> fetch(PDO::FETCH_ASSOC);
?>
<div class="container w-25">
    <div class="row">
        <div class="col p-3">
            <h1 class="text-center">Edit Profile</h1>
            <hr>
            <form action="proses.php?edit_profile=<?php echo $id; ?>" method="post">
                <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" name="id" class="form-control" id="inputID" value="<?php echo $data['id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" name="username" class="form-control" id="inputUsername" value="<?php echo $data['username']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputOldPassword">Old Password</label>
                    <input type="password" name="old_password" class="form-control" id="inputOldPassword" required>
                </div>
                <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" name="new_password" class="form-control" minlength="6" id="inputNewPassword" required>
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" minlength="6" id="inputConfirmPassword" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="change" class="btn btn-primary" value="Change">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>