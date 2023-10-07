<form method="post" action="<?=base_url('/anggota')?>">

    <div class="container">
        <h2 align="center" class="text">Form Anggota</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" name="katasandi">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="nama_lengkap">
            </div>
        </div>

        <div class="form-group row">
            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-6">
                <select name="jeniskelamin">
                    <option value="" disabled selected>-</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea name="alamat"></textarea>
            </div>
        </div>
        <br>

        </div>
        <div class="card-body" align="center">
            <input type="submit"></input>

                
        </div>
        </div>
        </div>
        </div>
    </div>
    
</form>