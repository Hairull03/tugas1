<!DOCTYPE html>
<html>
<title>Status Pegawai</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 50%;
    }

    td {
        padding: 8px;
        text-align: left;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin: 4px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nama Pegawai:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td>
                    <label>Jabatan</label>
                    <select name="Jabatan">
                        <option value="Manager">Manager</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Kabag">Kabag</option>
                        <option value="Staff">Staff</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="radio" name="Status" value="Menikah">Menikah</td>
                <td><input type="radio" name="Status" value="Belum menikah">Belum menikah</td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $agama = $_POST["agama"];
        $Jabatan = $_POST["Jabatan"];
        $Status = $_POST["Status"];

        echo "<h2>Status Pegawai</h2>";
        echo "<p>Nama Pegawai: $nama</p>";
        echo "<p>Agama: $agama</p>";
        echo "<p>Jabatan: $Jabatan</p>";
        echo "<p>Status: $Status</p>";

        if ($Status === "Menikah") {
            echo "<p> Jumlah anak: 4 </p>";
        }
    }
    ?>
</body>

</html>