<?php
    require("proses.php");
    $nim = $_GET['nim'];
    $sql = $data -> view_data($nim);
    $data = $sql -> fetch(PDO::FETCH_ASSOC);
    
    $list_hobby = explode(", ", $data['hobby']);
    $list_genre = explode(", ", $data['genre']);
    $list_wisata = explode(", ", $data['wisata']);
?>
<div class="container w-50">
    <div class="row p-3">
        <div class="col">
            <h1 class="text-center">Edit Data</h1>
            <hr>
            <form action="proses.php?edit_data=<?php echo $data['nim'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputNIM" class="col-form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="inputNIM" placeholder="Masukkan NIM.." value="<?php echo $data['nim']; ?>" readonly>
                </div>
                <div class="form-group row">
                    <div class="col-6 pl-0">
                        <label for="inputNamaDepan" class="col-form-label">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" maxlength="25" id="inputNamaDepan" placeholder="Masukkan Nama Depan.." value="<?php echo $data['nama_depan']; ?>" required>
                    </div>
                    <div class="col-6 pr-0">
                        <label for="inputNamaBelakang" class="col-form-label">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" maxlength="25" id="inputNamaBelakang" placeholder="Masukkan Nama Belakang.." value="<?php echo $data['nama_belakang']; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-form-label">Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._-]+@gmail.com" class="form-control" id="inputEmail" value="<?php echo $data['email']; ?>" placeholder="Masukkan Email.." required>
                </div>
                <div class="form-group row">
                    <label for="inputKelas" class="col-form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="inputKelas" placeholder="Masukkan Kelas.." value="<?php echo $data['kelas']; ?>" required>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hobby : </label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]"  class="form-check-input" id="inputMakan" value="Makan" <?php if(array_search("Makan", $list_hobby) > -1) { echo "checked"; }?>>
                            <label class="form-check-label" for="inputMakan">Makan</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]"  class="form-check-input" id="inputMain" value="Minum" <?php if(array_search("Minum", $list_hobby) > -1) { echo "checked"; }?>>
                            <label class="form-check-label" for="inputMain">Minum</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]"  class="form-check-input" id="inputBasket" value="Basket" <?php if(array_search("Basket", $list_hobby) > -1) { echo "checked"; }?>>
                            <label class="form-check-label" for="inputBasket">Basket</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]"  class="form-check-input" id="inputFutsal" value="Futsal" <?php if(array_search("Futsal", $list_hobby) > -1) { echo "checked"; }?>>
                            <label class="form-check-label" for="inputFutsal">Futsal</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Genre Film :</label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputHorror" value="Horror" <?php if(array_search("Horror", $list_genre) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputHorror">Horror</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputAnime" value="Anime" <?php if(array_search("Anime", $list_genre) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputAnime">Anime</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputAction" value="Action" <?php if(array_search("Action", $list_genre) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputAction">Action</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputDrama" value="Drama" <?php if(array_search("Drama", $list_genre) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputDrama">Drama</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tempat Wisata :</label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputBali" value="Bali" <?php if(array_search( "Bali", $list_wisata) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputBali">Bali</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputJakarta" value="Jakarta" <?php if(array_search( "Jakarta", $list_wisata) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputJakarta">Jakarta</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputLombok" value="Lombok" <?php if(array_search( "Lombok", $list_wisata) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputLombok">Lombok</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputTanjung" value="Tanjung Selor" <?php if(array_search( "Tanjung Selor", $list_wisata) > -1 ){ echo "checked"; }?>>
                            <label class="form-check-label" for="inputTanjung">Tanjung Selor</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTanggal" class="col-form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="inputTanggal" value="<?php echo $data['tgl_lahir']; ?>" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>