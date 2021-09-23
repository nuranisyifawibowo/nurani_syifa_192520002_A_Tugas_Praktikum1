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
        $alamat = "Kemiri,purworejo";
        $email = "nuranisyifa01@gmail.com";
        ?>
        <tr>
            <th colspan="3">
                <h3>Biodata<h3>
            </th>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo "$nama"; ?></td>
            <td rowspan="4"><img src="foto.jpg"></td>
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
    </table>
</body>

</html>