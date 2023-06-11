<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>

</head>

<body bgcolor=#dcdcdc>
    <nav>
        <a>Home</a> |
        <a>Pemasukan</a> |
        <a>Pengeluaran</a> |
    </nav>
    <hr />
    <header style="text-align:center;">
        <h1>LAPORAN KEUANGAN</h1>
        <h2>PT LANGGENG JAYA ABADI</h2>
        <p>31 Desember 2022</p>
    </header>
    <table style="margin-left:auto;margin-right:auto" border="1" cellspacing="0" cellpadding="10" width="900px">
        <tr bgcolor="light sea green">
            <th>NO</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Kredit</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($data_laporan as $row): ?>
            <tr align="center" bgcolor=#f8f8ff>
                <td>
                    <?= $i++; ?>
                </td>
                <td align="left">
                    <?php echo $row['keterangan'] ?>
                </td>
                <td>
                    <?= $row['debit'] ?>
                </td>
                <td>
                    <?= $row['kredit'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <hr>
    <footer style="text-align: center;" cellspacing="10" cellpadding="10">
        <p>Copyright &copy; 2023 PT Langgeng Jaya Abadi...</p>
    </footer>
</body>

</html>