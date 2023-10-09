<a href="<?=base_url('/pengguna/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Email</td>
            <td>Nama Lengkap</td>
            <td>Tingkat</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data_pengguna as $baris):?>
            <tr>
                <td><?=$baris['email']?></td>
                <td><?=$baris['nama_lengkap']?></td>
                <td><?=$baris['tingkat']?></td>
                <td><a href="<?=base_url('pengguna/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('pengguna/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>