<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Tambah Data Cuaca</h2>

<form action="<?= base_url('weather/store') ?>" method="post">

<div class="form-group">
<label>Tanggal</label>
<input type="date"
name="tanggal"
class="form-control"
required>
</div>

<div class="form-group">
<label>Suhu</label>
<input
type="number"
name="suhu"
class="form-control"
required>
</div>

<div class="form-group">
<label>Kelembaban</label>
<input
type="number"
name="kelembaban"
class="form-control"
required>
</div>

<div class="form-group">
<label>Curah Hujan</label>
<input
type="number"
name="curah_hujan"
class="form-control"
required>
</div>

<div class="form-group">
<label>Potensi</label>

<select
name="potensi_banjir"
class="form-control">

<option value="Rendah">Rendah</option>

<option value="Sedang">Sedang</option>

<option value="Tinggi">Tinggi</option>

</select>

</div>

<br>

<button
type="submit"
class="btn btn-primary">

<i class="fas fa-save"></i>

Simpan

</button>

<a href="<?= base_url('weather') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

<?= $this->endSection() ?>