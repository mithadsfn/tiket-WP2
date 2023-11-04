<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <?php foreach ($tiket_online as $u) : ?>
            <form action="<?= base_url(). 'tiket/update'; ?>"
            method="post"
            enctype="multipart/form-data">
            <pre>
                <b>TIKET ONLINE JAKARTA - MALAYSIA</b>

            <input type="hidden" name="id" value="<?= $u->id; ?>">
            <label for="username">Nama  : <input type="text" name="nama" id="username" placeholder="Masukan Nama" value="<?= $u->nama; ?>"></label>
            
            <label>Pilih Kode Pesawat : <select name="pesawat">
                <option value="Garuda">GRD (GARUDA)</option>
                <option value="Merpati">MPT (MERPATI)</option>
                <option value="Batavia">BTV (BATAVIA)</option>
                </select>
            </label>

            <label>Pilih Kelas  : </label> <label for="kelas"><input type="radio" name="kelas" id="kelas" value="Eksekutif">Eksekutif</label>
           <label for="kelas"><input type="radio" name="kelas" value="Bisnis">Bisnis</label>
           <label for="kelas"><input type="radio" name="kelas" value="Ekonomi">Ekonomi</label>

           <label>Pilih Kode Pesawat        : <select name="jumlah">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
           </select>
            </label>

            <input type="submit" value="simpan" /> <?= anchor('tiket', '<input type="button" value="batal" />'); ?>
            </pre>
            </form>
            <?php endforeach; ?>
    </body>
</html>