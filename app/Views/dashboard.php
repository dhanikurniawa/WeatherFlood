<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">

<div class="col-lg-3">
<div class="small-box bg-info">
<div class="inner">
<h3><?= $totalDataset ?></h3>
<p>Dataset</p>
</div>
<div class="icon">
<i class="fas fa-database"></i>
</div>
</div>
</div>

<div class="col-lg-3">
<div class="small-box bg-success">
<div class="inner">
<h3><?= $totalPrediksi ?></h3>
<p>Prediksi</p>
</div>
<div class="icon">
<i class="fas fa-cloud-rain"></i>
</div>
</div>
</div>

<div class="col-lg-3">
<div class="small-box bg-warning">
<div class="inner">
<h3><?= $totalRiwayat ?></h3>
<p>Riwayat</p>
</div>
<div class="icon">
<i class="fas fa-history"></i>
</div>
</div>
</div>

<div class="col-lg-3">
<div class="small-box bg-danger">
<div class="inner">
<h3>DT</h3>
<p>Decision Tree</p>
</div>
<div class="icon">
<i class="fas fa-project-diagram"></i>
</div>
</div>
</div>

</div>

<div class="card-body">

<div class="alert alert-primary">
    <i class="fas fa-bell"></i>
    <?= $notification ?>
</div>

<h2>Selamat Datang 👋</h2>

<p>
Aplikasi Prediksi Hujan dan Potensi Banjir Berbasis Machine Learning.
</p>

<div class="card-header">

<h3>Dashboard WeatherFlood</h3>

</div>


</div>

<?= $this->endSection() ?>