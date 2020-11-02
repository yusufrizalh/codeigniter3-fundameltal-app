<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Records</title>
</head>
<body>
    <h3>Menampilkan Records </h3>
    <table width="600" border="1" cellspacing="5" cellpadding="5">
        <tr style="background:#CCC">
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Alamat Email</th>
            <th>Mobile Phone</th>
        </tr>
        <?php
        $i = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->email . "</td>";
            echo "<td>" . $row->mobile . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
</body>
</html>