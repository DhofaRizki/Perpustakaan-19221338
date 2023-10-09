<a href="<?=base_url('/peminjaman/form')?>">Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <td>Tgl. Peminjaman</td>
            <td>Tgl. Harus Kembali</td>
            <td>Tgl. Kembali</td>
            <td>Id. Peminjam</td>
            <td>Id. Pengembali</td>
            <td>Id. Anggota</td>
            <td>Id. Koleksi Buku</td>
            <td>Denda</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data_peminjaman as $baris):?>
            <tr>
                <td><?=$baris['tgl_peminjaman']?></td>
                <td><?=$baris['tgl_harus_kembali']?></td>
                <td><?=$baris['tgl_kembali']?></td>
                <td><?=$baris['tb_pengguna_id_peminjaman']?></td>
                <td><?=$baris['tb_pengguna_id_pengembalian']?></td>
                <td><?=$baris['tb_anggota_id']?></td>
                <td><?=$baris['tb_koleksibuku_id']?></td>
                <td><?=$baris['denda']?></td>
                <td><a href="<?=base_url('peminjaman/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Are u sure want to delete this data?')" method="post" action="<?=base_url('peminjaman/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>