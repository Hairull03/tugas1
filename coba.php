<!DOCTYPE html>
<title>Penjualan</title>
</head>

<body>

    <h2>Penjualan</h2>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>No Transaksi</td>
                <td>:</td>
                <td> <input type="number" name="no_transaksi" value=""> </td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td> <input type="text" name="nama_pembeli" value=""> </td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td> <input type="text" name="judul_buku" value=""> </td>
            </tr>
            <tr>
                <td>Jumlah Buku</td>
                <td>:</td>
                <td> <input type="number" name="jumlah" value=""> </td>
            </tr>
            <tr>
                <td>Harga buku</td>
                <td>:</td>
                <td> <input type="number" name="harga_buku" value=""> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="" value="Proses">
                    <br>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>