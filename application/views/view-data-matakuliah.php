<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <th>Kode Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>