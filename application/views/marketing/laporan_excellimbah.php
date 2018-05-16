<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

  <tr>
    <th>Nama Perusahaan</th>
    <th>Jenis Perusahaan</th>
    <th>Alamat Perusahaan</th>
    <th>Provinsi</th>
    <th>Kabupaten</th>
    <th>Kode pos</th>
    <th>Email</th>
    <th>Jenis Limbah</th>
    <th>No telepom</th>
    <th>Fax</th>
    <th>Keterangan</th>
    <th>Date</th>
    <th>Progres</th>
  </tr>

</thead>

<tbody>

  <?php
    $no = 1;
    foreach($user as $u){
        ?>
        <tr>
            <td><?php echo $u->nama_perusahaan ?></td>
            <td><?php echo $u->jenis_perusahaan ?></td>
            <td><?php echo $u->alamat_perusahaan ?></td>
            <td><?php echo $u->provinsi ?></td>
            <td><?php echo $u->kabupaten ?></td>
            <td><?php echo $u->kode_pos ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->jenis_limbah ?></td>
            <td><?php echo $u->no_telp ?></td>
            <td><?php echo $u->fax ?></td>
            <td><?php echo $u->keterangan ?></td>
            <td><?php echo $u->date ?></td>
            <td><?php echo $u->status?></td>
        </tr>
        <?php $no++; } ?>

</tbody>

</table>
