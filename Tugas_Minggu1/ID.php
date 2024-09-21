<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas_Minggu1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .foto img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1> Website Cari Jodoh </h1>
    <table>
        <thead>
            <tr>
            <th rowspan="2">Nama Lengkap</th>
                <th colspan="3"><p align="center">Gelar Pendidikan</p></th>
                <th rowspan="2">Jumlah Mantan</th>
                <th rowspan="2">WhatsApp</th>
                <th rowspan="2">Foto</th>
            </tr>
            <tr>
                <th>Sarjana</th>
                <th>Magister</th>
                <th>Doktor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $person = [
                'nama' => 'Ammar Pavel Zamora Siregar',
                'edukasi' => [
                    'sarjana' => 'S.Kom',
                    'magister' => 'M.Kom',
                    'doktor' => 'DCS'
                ],
                'jumlah_mantan' => 1,
                'whatsapp' => '+6281380701073',
                'foto' => 'pointer_ammarp.png'
            ];

            echo "<tr>";
            echo "<td>{$person['nama']}</td>";
            echo "<td>{$person['edukasi']['sarjana']}</td>";
            echo "<td>{$person['edukasi']['magister']}</td>";
            echo "<td>{$person['edukasi']['doktor']}</td>";
            echo "<td>{$person['jumlah_mantan']}</td>";
            echo "<td><a href='https://wa.me/{$person['whatsapp']}' target='_blank'>{$person['whatsapp']}</a></td>";
            echo "<td class='foto'><img src='{$person['foto']}' alt='Personal foto'></td>";
            echo "</tr>";
            ?>
        </tbody>
    </table>
</body>
</html>