<!doctype html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    img {
        height: 250px;
        width: 250px;
    }
</style>

<body>

    <table style="Width:50%">
        <?php
        $nama = "Nurani Syifa Wibowo";
        $nim = "192520002";
        $alamat = "Kemiri,Purworejo";
        $email = "nuranisyifa01@gmail.com";
        $Minat_TI = "Memperluas pengalaman";
        $Universitas = "Universitas Muhammadiyah Purworejo";
        ?>
        <tr>
            <th colspan="3">
                <h3>Biodata<h3>
            </th>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo "$nama"; ?></td>
            <td rowspan="6"><img src="foto.jpg"></td>
        </tr>
        <tr>
            <td><b>Nim</b></td>
            <td><?php echo "$nim"; ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td><?php echo "$alamat"; ?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><?php echo "$email"; ?></td>
        </tr>
        <tr>
            <td><b>Minat_TI</b></td>
            <td><?php echo "$Minat_TI"; ?></td>
        </tr>
        <tr>
            <td><b>Universitas</b></td>
            <td><?php echo "$Universitas"; ?></td>
        </tr>
    </table>
</body>

</html>