<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>WeatherFlood</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- DataTables -->
<link rel="stylesheet"
href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

<link rel="icon" type="image/png" href="<?= base_url('logo.png') ?>">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">

<li class="nav-item">

<a class="nav-link" data-widget="pushmenu" href="#">

<i class="fas fa-bars"></i>

</a>

</li>

</ul>

</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="<?= base_url('/') ?>" class="brand-link">

<span class="brand-text font-weight-light">

🌧️ WeatherFlood

</span>

</a>

<div class="sidebar">

<nav class="mt-2">

<ul class="nav nav-pills nav-sidebar flex-column">

<li class="nav-item">

<a href="<?= base_url('/') ?>" class="nav-link">

<i class="nav-icon fas fa-home"></i>

<p>Dashboard</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('weather') ?>" class="nav-link">

<i class="nav-icon fas fa-cloud-rain"></i>

<p>Data Cuaca</p>

</a>

</li>

<li class="nav-item">

<a href="<?= base_url('visualisasi') ?>" class="nav-link">

<i class="nav-icon fas fa-chart-line"></i>

<p>Visualisasi</p>

</a>

</li>

<li class="nav-item">
    <a href="<?= base_url('prediction') ?>" class="nav-link">
        <i class="nav-icon fas fa-water"></i>
        <p>Prediksi</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?= base_url('history') ?>" class="nav-link">
        <i class="nav-icon fas fa-history"></i>
        <p>Riwayat</p>
    </a>
</li>

</ul>

</nav>

</div>

</aside>

<div class="content-wrapper">

<section class="content pt-4">

<div class="container-fluid">

<?= $this->renderSection('content') ?>

</div>

</section>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script>
$(function () {
    $('#datatable').DataTable({
        responsive: true,
        pageLength: 5,
        lengthMenu: [5,10,25,50],
        language: {
            search: "Cari :",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            paginate:{
                previous:"Sebelumnya",
                next:"Berikutnya"
            }
        }
    });
});
</script>

</body>


</html>