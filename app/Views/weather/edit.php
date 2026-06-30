<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<h2>Edit Data Cuaca</h2>

<form action="<?= base_url('weather/update/'.$weather['id']) ?>" method="post">

<div class="mb-3">
<label>Tanggal</label>
<input type="date"
class="form-control"
name="tanggal"
value="<?= $weather['tanggal'] ?>">
</div>

<div class="mb-3">
<label>Suhu</label>
<input type="number"
class="form-control"
name="suhu"
value="<?= $weather['suhu'] ?>">
</div>

<div class="mb-3">
<label>Kelembaban</label>
<input type="number"
class="form-control"
name="kelembaban"
value="<?= $weather['kelembaban'] ?>">
</div>

<div class="mb-3">
<label>Curah Hujan</label>
<input type="number"
class="form-control"
name="curah_hujan"
value="<?= $weather['curah_hujan'] ?>">
</div>

<div class="mb-3">
<label>Potensi Banjir</label>

<select name="potensi_banjir" class="form-control">

    <option value="Rendah"
        <?= $weather['potensi_banjir']=='Rendah' ? 'selected' : '' ?>>
        Rendah
    </option>

    <option value="Sedang"
        <?= $weather['potensi_banjir']=='Sedang' ? 'selected' : '' ?>>
        Sedang
    </option>

    <option value="Tinggi"
        <?= $weather['potensi_banjir']=='Tinggi' ? 'selected' : '' ?>>
        Tinggi
    </option>

</select>

</div>

<button class="btn btn-primary">
Update
</button>

<a href="<?= base_url('weather') ?>"
class="btn btn-secondary">
Kembali
</a>

</form>

<?= $this->endSection() ?>