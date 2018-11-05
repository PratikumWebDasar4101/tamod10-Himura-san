<div class="container w-50">
    <div class="row p-3">
        <div class="col">
            <h1 class="text-center">Tambah Data</h1>
            <hr>
            <form action="proses.php?tambah_data=data" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputNIM" class="col-form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" pattern="\d*" minlength="10" maxlength="10" id="inputNIM" placeholder="Masukkan NIM.." required autofocus>
                </div>
                <div class="form-group row">
                    <div class="col-6 pl-0">
                        <label for="inputNamaDepan" class="col-form-label">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" maxlength="25" id="inputNamaDepan" placeholder="Masukkan Nama Depan.." required>
                    </div>
                    <div class="col-6 pr-0">
                        <label for="inputNamaBelakang" class="col-form-label">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" maxlength="25" id="inputNamaBelakang" placeholder="Masukkan Nama Belakang.." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-form-label">Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._-]+@gmail.com" class="form-control" id="inputEmail" placeholder="Masukkan Email..">
                </div>
                <div class="form-group row">
                    <label for="inputKelas" class="col-form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="inputKelas" placeholder="Masukkan Kelas.." required>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hobby : </label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]" class="form-check-input" id="inputMakan" value="Makan">
                            <label class="form-check-label" for="inputMakan">Makan</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]" class="form-check-input" id="inputMain" value="Minum">
                            <label class="form-check-label" for="inputMain">Minum</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]" class="form-check-input" id="inputBasket" value="Basket">
                            <label class="form-check-label" for="inputBasket">Basket</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="hobby[]" class="form-check-input" id="inputFutsal" value="Futsal">
                            <label class="form-check-label" for="inputFutsal">Futsal</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Genre Film :</label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputHorror" value="Horror">
                            <label class="form-check-label" for="inputHorror">Horror</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputAnime" value="Anime">
                            <label class="form-check-label" for="inputAnime">Anime</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputAction" value="Action">
                            <label class="form-check-label" for="inputAction">Action</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="genre[]" class="form-check-input" id="inputDrama" value="Drama">
                            <label class="form-check-label" for="inputDrama">Drama</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tempat Wisata :</label>
                    <div class="col-sm-10">
                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputBali" value="Bali">
                            <label class="form-check-label" for="inputBali">Bali</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputJakarta" value="Jakarta">
                            <label class="form-check-label" for="inputJakarta">Jakarta</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputLombok" value="Lombok">
                            <label class="form-check-label" for="inputLombok">Lombok</label>
                        </div>

                        <div class="form-check float-left m-2">
                            <input type="checkbox" name="wisata[]" class="form-check-input" id="inputTanjung" value="Tanjung Selor">
                            <label class="form-check-label" for="inputTanjung">Tanjung Selor</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTanggal" class="col-form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="inputTanggal" required>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="tambah" class="btn btn-primary" value="Tambah">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>