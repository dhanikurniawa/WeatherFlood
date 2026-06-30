<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

<div class="card-header">
<h3>
<i class="fas fa-cloud-rain"></i>
Prediksi Potensi Banjir
</h3>
</div>

<div class="card-body">

<form action="<?= base_url('prediction/process') ?>" method="post">

<div class="form-group">
    <label>Suhu (°C)</label>
    <input type="number" step="0.1" name="suhu" class="form-control" required>
</div>

<div class="form-group">
    <label>Kelembaban (%)</label>
    <input type="number" step="0.1" name="kelembaban" class="form-control" required>
</div>

<div class="form-group">
    <label>Tekanan Udara (hPa)</label>
    <input type="number" step="0.1" name="tekanan_udara" class="form-control" required>
</div>

<div class="form-group">
    <label>Kecepatan Angin (km/jam)</label>
    <input type="number" step="0.1" name="kecepatan_angin" class="form-control" required>
</div>

<div class="form-group">
    <label>Curah Hujan (mm)</label>
    <input type="number" step="0.1" name="curah_hujan" class="form-control" required>
</div>

<div class="form-group">
    <label>Status Hujan</label>

    <select name="hujan" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
    </select>

</div>

<button class="btn btn-success">
<i class="fas fa-search"></i>
Prediksi
</button>

</form>

</div>

</div>

<?= $this->endSection() ?>