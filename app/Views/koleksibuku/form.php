<form method="post" action="<?=base_url('/koleksibuku/Save')?>">
<label>Buku</label>
    <input type="text" name="buku">
<label>Nomor Koleksi</label>
    <input type="text" name="nomor_koleksi">
<label>Status Koleksi</label>
    <select name="status_koleksi">
        <option value="" disabled selected>-</option>
        <option value="A">A</option>
        <option value="P">P</option>
        <option value="H">H</option>
        <option value="R">R</option>
    </select>
<button>Save</button>
</form>