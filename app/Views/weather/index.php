<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>
    <i class="fas fa-cloud-sun text-primary"></i>
    Data Cuaca
</h2>

<hr>

<div class="row mb-3">

    <div class="col-md-3">

        <div class="small-box bg-info">

            <div class="inner">
                <h3><?= count($weather) ?></h3>
                <p>Total Dataset</p>
            </div>

            <div class="icon">
                <i class="fas fa-database"></i>
            </div>

        </div>

    </div>

</div>

<div class="card mb-3">
    <div class="card-body">

        <div class="d-flex align-items-center flex-wrap">

            <!-- Tombol Tambah -->
            <a href="<?= base_url('weather/create') ?>" class="btn btn-primary mr-2 mb-2">
                <i class="fas fa-plus"></i>
                Tambah Data
            </a>

            <!-- Form Import -->
            <form action="<?= base_url('weather/import') ?>"
                  method="post"
                  enctype="multipart/form-data"
                  class="d-flex align-items-center mb-2">

                <input
                    type="file"
                    name="file_csv"
                    accept=".csv"
                    class="form-control form-control-sm mr-2"
                    style="width:260px;"
                    required>

                <button type="submit" class="btn btn-success mr-2">
                    <i class="fas fa-file-csv"></i>
                    Import CSV
                </button>

            </form>

            <!-- Refresh -->
            <a href="<?= base_url('weather') ?>" class="btn btn-secondary">
                <i class="fas fa-sync-alt"></i>
                Refresh
            </a>

        </div>

    </div>
</div>


<div class="card">
<div class="card-body">

<table id="datatable"
class="table table-bordered table-hover table-striped">

<thead class="bg-primary text-white">
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Suhu</th>
    <th>Kelembaban</th>
    <th>Curah Hujan</th>
    <th>Potensi</th>
    <th width="120">Aksi</th>
</tr>
</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($weather as $row): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $row['tanggal'] ?></td>

<td><?= $row['suhu'] ?></td>

<td><?= $row['kelembaban'] ?></td>

<td><?= $row['curah_hujan'] ?></td>

<td>

<?php if($row['potensi_banjir']=="Rendah"): ?>

<span class="badge badge-success px-3 py-2">Rendah</span>

<?php elseif($row['potensi_banjir']=="Sedang"): ?>

<span class="badge badge-warning px-3 py-2">Sedang</span>

<?php else: ?>

<span class="badge badge-danger px-3 py-2">Tinggi</span>

<?php endif; ?>

</td>

<td>

<a href="<?= base_url('weather/edit/'.$row['id']) ?>"
class="btn btn-warning btn-sm mr-1">
<i class="fas fa-edit"></i>
</a>

<a href="<?= base_url('weather/delete/'.$row['id']) ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">

<i class="fas fa-trash"></i>

</a>

</td>

</tr>

<?php endforeach ?>

</tbody>

</table>

</div>
</div>

<?= $this->endSection() ?>