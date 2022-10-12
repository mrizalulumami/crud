<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <h1><?= $title; ?></h1>
    <a href="<?= base_url('home/halaman_tambah') ?>">Tambah data</a>
    <table>
        <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $i = 1;
            if (isset($tabel_user)) {
                foreach ($tabel_user as $a) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $a->nama; ?></td>
                <td><?= $a->alamat; ?></td>
                <td><?= $a->pekerjaan; ?></td>
                <td>
                    <a href="<?= base_url('home/halaman_edit/') . $a->id_user ?>">Edit</a>
                    <a href="<?= base_url('crud/delete_data/') . $a->id_user ?>">Delete</a>
                </td>
            </tr>
            <?php }
            } ?>
        </tbody>
    </table>

</body>

</html>