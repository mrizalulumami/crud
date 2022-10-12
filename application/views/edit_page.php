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
    <form action="<?= base_url('crud/edit_data/') . $du->id_user; ?>" method="POST">
        <table>
            <thead>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="nama" value="<?= $du->nama; ?>" placeholder="Masukan nama"></td>
                    <td><input type="text" name="alamat" value="<?= $du->alamat; ?>" placeholder="Masukan Alamat"></td>
                    <td><input type="text" name="pekerjaan" value="<?= $du->pekerjaan; ?>"
                            placeholder="Masukan Pekerjaan"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Simpan</button>
    </form>

</body>

</html>