<table border="1">
    <thead>
        <tr>
            <td>Judul</td>
            <td>Edisi</td>
            <td>Cetakan</td>
            <td>Sinopsis</td>
            <td>Kategori</td>
            <td>Penerbit</td>
            <td>ISBN</td>
            <td>Penulis</td>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_buku as $baris):?>
            <tr>
                <td><?=$baris['judul']?></td>
                <td><?=$baris['edisi']?></td>
                <td><?=$baris['cetakan']?></td>
                <td><?=$baris['sinopsis']?></td>
                <td><?=$baris['tb_kategori_id']?></td>
                <td><?=$baris['tb_penerbit_id']?></td>
                <td><?=$baris['isbn']?></td>
                <td><?=$baris['penulis']?></td>
                
            </tr>
        <?php endforeach;?>
    </tbody>
</table>