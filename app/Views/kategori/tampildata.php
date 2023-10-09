<a href="<?=base_url('/kategori/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Kategori</td>
            <td>Kode DDC</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data_kategori as $baris):?>
            <tr>
                <td><?=$baris['kategori']?></td>
                <td><?=$baris['kode_ddc']?></td>
                <td><a href="<?=base_url('kategori/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('kategori/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>