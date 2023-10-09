<a href="<?=base_url('/koleksibuku/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Buku</td>
            <td>Nomor Koleksi</td>
            <td>Status Koleksi</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_koleksibuku as $baris):?>
            <tr>
                <td><?=$baris['tb_buku_id']?></td>
                <td><?=$baris['nomor_koleksi']?></td>
                <td><?=$baris['status_koleksi']?></td>
                <td><a href="<?=base_url('koleksibuku/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('koleksibuku/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>