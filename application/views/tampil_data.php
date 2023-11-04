<!DOCTYPE html>
<html>
    <head>
        <title>Tampil Data</title>
    </head>
    <body>
        <pre>
            <b>PEMESANAN TIKET ONLINE JAKARTA - MALAYSIA</b>

            <?php
            $no = 1;
            foreach ($tiket_online as $u) : ?>
            No tiket    : <?= $no++; ?><br>
            Nama        : <?= $u->nama ?><br>
            Nama Pesawat: <?= $u->pesawat ?><br>
            Kelas       : <?= $u->kelas ?><br>
            Harga Tiket : <?= $u->harga ?><br>
            Jumlah Tiket: <?= $u->jumlah ?><br>
            Total Bayar : <?= $u->harga*$u->jumlah ?><br>

            <?= anchor('tiket/edit/'.$u->id, '<input type="button" name="submit" value="edit" />'); ?> <?= anchor('tiket/hapus/'.$u->id, '<input type="button" name="submit" value="hapus" />'); ?>
        
            <?php endforeach; ?>
                <?= anchor('tiket/tambah', '<input type="button" value="tambah data" /> ');?>
        </pre>
    </body>
</html>