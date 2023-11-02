<!DOCTYPE html>
<html>
<head>
    <title>Tabel</title>
</head>
<body>
    <h1>Ini adalah halaman data index</h1>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Adress</th>
        </tr>
        <?php while($data = mysqli_fetch_object($result)){
        ?>
        <tr>
            <td>1</td>
            <td><?php echo $data->nim ?></td>
            <td>Risas Daud Ibrahim</td>
            <td>Bandung</td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
