<html lang="en" class="color-theme-blue color-theme-teal">
<head>
    <title>Zakat Online Excel <?=$baz->name?></title>
    <?php
        $filename =$baz->url.'.xls';
        $contents = "testdata1 \t testdata2 \t testdata3 \t \n";
        header('Content-type: application/ms-excel');
        header('Content-Disposition: attachment; filename='.$filename);
    ?>
</head>
<body>

                <table class="table" width="100%" border="1px">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>No HP</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Rekening</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($muzaki as $row) { ?>
                  <tr>
                    <td><?=$no++?>.</td>
                    <td>
                        <?=$row->name ?>
                    </td>
                    <td><?=$row->phone?></td>
                    <td><?=$row->category_name?></td>
                    <td><?=$row->amount?></td>
                    <td><?=$row->bank_name?></td>
                    <td><?php if($row->status==0) { echo "Menunggu Konfirmasi"; } else if($row->status==1) { echo "Lunas"; } else if($row->status==2) { echo "Pending"; } else { echo "Di Batalkan"; }  ?></td>
                    <td><?=$row->notes?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>

</body>

</html>
