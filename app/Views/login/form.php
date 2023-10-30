<form method="post" action="<?=base_url('login')?>">
<div class="container">
        <h2 align="center" class="text">Form Anggota</h2>
    </div>

    <div align="center" class="card text-white bg-success mb-3">
        <div class="card-header"></div>
        <div class="card-body">

                <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email" value="<?=$data['email']?? ''?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" name="katasandi" value="<?=$data['password']?? ''?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
            <div class="col-sm-6">
                <select name="tingkat" value="<?=$data['tingkat']?? ''?>">
                    <option value="" disabled selected>-</option>
                    <option value="AGT">Anggota</option>
                    <option value="PUS">Pustakawan</option>
                    <option value="ADM">Administrator</option>
                </select>
            </div>
        </div>
        <br>
        <button>Login</button>

        </div>
    </div>

    

</form>