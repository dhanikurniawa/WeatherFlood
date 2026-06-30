<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

<div class="card-header">
<h2><i class="fas fa-chart-line"></i> Visualisasi Data Cuaca</h2>
</div>

<div class="card-body">

<div class="card mb-4">
    <div class="card-header">
        <h4>🌡 Grafik Suhu</h4>
    </div>
    <div class="card-body">
        <canvas id="chartSuhu"></canvas>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h4>💧 Grafik Kelembaban</h4>
    </div>
    <div class="card-body">
        <canvas id="chartKelembaban"></canvas>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>🌧 Grafik Curah Hujan</h4>
    </div>
    <div class="card-body">
        <canvas id="chartCurah"></canvas>
    </div>
</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const labels = [

<?php foreach($weather as $row): ?>

'<?= $row['tanggal'] ?>',

<?php endforeach; ?>

];

const suhu = [

<?php foreach($weather as $row): ?>

<?= $row['suhu'] ?>,

<?php endforeach; ?>

];

const kelembaban = [

<?php foreach($weather as $row): ?>

<?= $row['kelembaban'] ?>,

<?php endforeach; ?>

];

const curah = [

<?php foreach($weather as $row): ?>

<?= $row['curah_hujan'] ?>,

<?php endforeach; ?>

];

// Grafik Suhu
new Chart(document.getElementById('chartSuhu'), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Suhu (°C)',
            data: suhu,
            borderColor: '#007bff',
            backgroundColor: 'rgba(0,123,255,0.2)',
            fill: true,
            tension: 0.3
        }]
    }
});

// Grafik Kelembaban
new Chart(document.getElementById('chartKelembaban'), {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'Kelembaban (%)',
            data: kelembaban,
            borderColor: '#28a745',
            backgroundColor: 'rgba(40,167,69,0.2)',
            fill: true,
            tension: 0.3
        }]
    }
});

// Grafik Curah Hujan
new Chart(document.getElementById('chartCurah'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Curah Hujan (mm)',
            data: curah,
            backgroundColor: '#ffc107'
        }]
    }
});

</script>

<?= $this->endSection() ?>