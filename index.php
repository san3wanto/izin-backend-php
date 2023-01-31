<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <a href="login.php">LOGIN</a>
    <H2>DASHBOARD</H2>
    <table>
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>STATUS</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no=1;
            $data = mysqli_query($koneksi,"select * from data_pegawai");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nip']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>