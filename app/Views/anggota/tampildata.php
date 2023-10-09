<a href="<?=base_url('/anggota/form')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Email</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_anggota as $baris):?>
            <tr>
                <td><?=$baris['email']?></td>
                <td><?=$baris['nama_lengkap']?></td>
                <td><?=$baris['jeniskelamin']?></td>
                <td><?=$baris['alamat']?></td>
                <td><a href="<?=base_url('anggota/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('anggota/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>