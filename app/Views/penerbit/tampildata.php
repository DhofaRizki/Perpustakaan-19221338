<a href="<?=base_url('/penerbit/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Penerbit</td>
            <td>Kota</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_penerbit as $baris):?>
            <tr>
                <td><?=$baris['penerbit']?></td>
                <td><?=$baris['kota']?></td>
                <td><a href="<?=base_url('penerbit/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('penerbit/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>