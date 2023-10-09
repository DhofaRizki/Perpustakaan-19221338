<form method="post" action="<?=base_url('/peminjaman/Save')?>">
    <label>Tgl. Peminjaman</label>
        <input type="date" name="tgl_peminjaman">
    <label>Tgl. Harus Kembali</label>
        <input type="date" name="tgl_harus_kembali">
    <label>Tgl. Kembali</label>
        <input type="date" name="tgl_kembali">
    <label>Id. Peminjam</label>
        <input type="text" name="tb_pengguna_id_peminjaman">
    <label>Id. Pengembali</label>
        <input type="text" name="tb_pengguna_id_pengembalian">
    <label>Id. Anggota</label>
        <input type="text" name="tb_anggota_id">
    <label>Id. Koleksi Buku</label>
        <input type="text" name="tb_koleksibuku_id">
    <label>Denda</label>
        <input type="text" name="denda">

    <button>Save</button>
        
</form>