<form method="post" action="<?=base_url('/buku/Save')?>">
<label>Judul</label>
    <input type="text" name="judul">
<label>Edisi</label>
    <input type="text" name="edisi">
<label>Cetakan</label>
    <input type="text" name="cetakan">
<label>Sinopsis</label>
    <textarea name="sinopsis"></textarea>
<label>Kategori</label>
    <input type="text" name="kategori">
<label>Penerbit</label>
    <input type="text" name="penerbit">
<label>ISBN</label>
    <input type="text" name="isbn">
<label>Penulis</label>
    <input type="text" name="penulis">

<button>Save</button>
</form>