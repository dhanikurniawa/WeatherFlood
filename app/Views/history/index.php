<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

<div class="card-header">
<h3>
<i class="fas fa-history"></i>
Riwayat Prediksi
</h3>
</div>

<div class="card-body">
<?php if(isset($reportMessage)): ?>
<div class="alert alert-success">
    <?= $reportMessage; ?>
</div>
<?php endif; ?>

<table id="datatable" class="table table-bordered table-striped">

<thead>

<tr>

<th>No</th>
<th>Waktu</th>
<th>Suhu</th>
<th>Kelembaban</th>
<th>Curah Hujan</th>
<th>Potensi Banjir</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($history as $row): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $row['tanggal'] ?></td>

<td><?= $row['suhu'] ?> °C</td>

<td><?= $row['kelembaban'] ?> %</td>

<td><?= $row['curah_hujan'] ?> mm</td>

<td>

<?php if($row['hasil']=="Rendah"): ?>

<span class="badge badge-success">
Rendah
</span>

<?php elseif($row['hasil']=="Sedang"): ?>

<span class="badge badge-warning">
Sedang
</span>

<?php else: ?>

<span class="badge badge-danger">
Tinggi
</span>

<?php endif; ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

<?= $this->endSection() ?>