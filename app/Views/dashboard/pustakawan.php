<div>
    <h4>Selamat datang Pustakawan <?=$pengguna['nama_lengkap'] ?? ''?> - 
    <?php if( ($pengguna['tingkat'] ?? '') == 'PUS'){
            echo "Pustakawan";

        }else{
            echo "Administrator";
        } ?></h4>
    
    <ol>
        <h3>Menu Aplikasi</h3>
        <li><a href="<?=base_url('anggota')?>">Data Anggota</a></li>
        <li><a href="<?=base_url('buku')?>">Data Buku</a></li>
        <li><a href="<?=base_url('penerbit')?>">Data Penerbit</a></li>
        <li><a href="<?=base_url('pengguna')?>">Data Pengguna</a></li>
        <li><a href="<?=base_url('peminjaman')?>">Data Peminjaman</a></li>
        <li><a href="<?=base_url('koleksibuku')?>">Data Koleksi Buku</a></li>
        <li><a href="<?=base_url('kategori')?>">Data Kategori</a></li>
        <br>
        <button><a href="<?=base_url('logout')?>">Log Out</a></button>

        
    </ol>
</div>