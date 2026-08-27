

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>

/* =====================================================
   BACKGROUND
===================================================== */

body {
    background: #eaf4ff;
}


/* =====================================================
   MAIN CONTAINER
===================================================== */

.dashboard-container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 25px 20px 50px;
}


/* =====================================================
   HEADER DASHBOARD
===================================================== */

.dashboard-header {
    text-align: center;
    margin-bottom: 38px;
}

.dashboard-title {
    color: #2c5d91;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 6px;
}

.dashboard-subtitle {
    color: #6f89a6;
    font-size: 15px;
    margin: 0;
}


/* =====================================================
   SECTION TITLE
===================================================== */

.section-title {
    color: #2c5d91;
    font-size: 23px;
    font-weight: 700;
    text-align: center;

    margin: 35px 0 20px;
}


/* =====================================================
   STATISTICS CARD
===================================================== */

.stat-card {
    background: #ffffff;

    border: 1px solid #d8eafd;
    border-radius: 16px;

    overflow: hidden;

    box-shadow:
        0 6px 18px rgba(80, 150, 220, 0.12);

    height: 100%;

    transition: all 0.25s ease;
}

.stat-card:hover {
    transform: translateY(-4px);

    box-shadow:
        0 10px 25px rgba(80, 150, 220, 0.18);
}


/* Header statistik */

.stat-card .card-header {
    background: #bfdcf8;

    color: #2c5d91;

    border: none;

    padding: 12px 15px;

    font-size: 14px;
    font-weight: 600;

    text-align: center;
}


/* Body statistik */

.stat-card .card-body {
    background: #ffffff;

    padding: 27px 15px;

    min-height: 105px;

    display: flex;
    align-items: center;
    justify-content: center;
}


/* Angka */

.stat-number {
    color: #2c5d91;

    font-size: 25px;

    font-weight: 700;

    white-space: nowrap;
}


/* =====================================================
   INVENTORY CARD
===================================================== */

.table-card {
    background: #ffffff;

    border: 1px solid #d8eafd;
    border-radius: 16px;

    box-shadow:
        0 6px 18px rgba(80, 150, 220, 0.10);

    padding: 18px;

    margin-bottom: 25px;

    height: 100%;
}


/* Judul tabel */

.table-title {
    color: #2c5d91;

    font-size: 19px;

    font-weight: 700;

    margin-bottom: 15px;
}


/* =====================================================
   TABLE
===================================================== */

.table {
    margin-bottom: 0;
}

.table thead {
    background: #e7f2fd;
}

.table thead th {
    color: #2c5d91;

    border: none;

    font-size: 14px;

    font-weight: 600;

    padding: 11px;
}

.table tbody td {
    color: #4f6d89;

    border-color: #edf4fa;

    padding: 11px;

    font-size: 14px;
}

.table tbody tr {
    transition: 0.2s;
}

.table tbody tr:hover {
    background: #f5faff;
}


/* =====================================================
   STOCK BADGE
===================================================== */

.stock-low {
    display: inline-block;

    background: #fff3df;

    color: #c77a20;

    padding: 4px 10px;

    border-radius: 20px;

    font-size: 12px;

    font-weight: 600;
}

.stock-empty {
    display: inline-block;

    background: #ffe8ed;

    color: #d64d68;

    padding: 4px 10px;

    border-radius: 20px;

    font-size: 12px;

    font-weight: 600;
}

.stock-safe {
    display: inline-block;

    background: #e6f7ed;

    color: #2d9364;

    padding: 4px 10px;

    border-radius: 20px;

    font-size: 12px;

    font-weight: 600;
}


/* =====================================================
   EMPTY STATE
===================================================== */

.empty-state {
    color: #7c93a9;

    padding: 25px !important;

    text-align: center;
}


/* =====================================================
   BEST SELLER
===================================================== */

.best-seller-card {
    background: #ffffff;

    border: 1px solid #d8eafd;

    border-radius: 16px;

    box-shadow:
        0 6px 18px rgba(80, 150, 220, 0.10);

    padding: 18px;

    margin-bottom: 25px;
}


/* =====================================================
   PAGINATION
===================================================== */

.pagination {
    justify-content: center;

    margin-top: 15px;

    margin-bottom: 0;
}

.page-link {
    color: #2c5d91;

    border: 1px solid #d8eafd;
}

.page-item.active .page-link {
    background: #7db8f4;

    border-color: #7db8f4;
}

.page-link:hover {
    background: #bfdcf8;

    color: #2c5d91;
}


/* =====================================================
   BOOTSTRAP OVERRIDE
===================================================== */

.bg-primary {
    background: #7db8f4 !important;
}

.btn-primary {
    background: #7db8f4;

    border-color: #7db8f4;
}

.btn-primary:hover {
    background: #69a9ed;

    border-color: #69a9ed;
}

.text-primary {
    color: #2c5d91 !important;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 992px) {

    .stat-number {
        font-size: 22px;
    }

}


@media (max-width: 768px) {

    .dashboard-container {
        padding: 20px 15px 40px;
    }

    .dashboard-title {
        font-size: 30px;
    }

    .section-title {
        font-size: 21px;
    }

    .stat-number {
        font-size: 23px;
    }

}


@media (max-width: 576px) {

    .stat-card .card-header {
        font-size: 13px;
    }

    .stat-number {
        font-size: 21px;
    }

}

</style>


<div class="dashboard-container">


    

    <div class="dashboard-header">

        <h1 class="dashboard-title">
            SUGAR BLOOM
        </h1>

        <p class="dashboard-subtitle">
            Ringkasan Hari Ini
            (<?php echo e($tanggalHariIni->translatedFormat('l, d F Y')); ?>)
        </p>

    </div>



    


    <h3 class="section-title">
        Ringkasan Hari Ini
    </h3>


    <div class="row g-3">


        

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-header">

                    💰 Total Penjualan Hari Ini

                </div>

                <div class="card-body text-center">

                    <div class="stat-number">

                        Rp <?php echo e(number_format($ringkasan['total_penjualan'])); ?>


                    </div>

                </div>

            </div>

        </div>



        

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-header">

                    🧾 Jumlah Transaksi Hari Ini

                </div>

                <div class="card-body text-center">

                    <div class="stat-number">

                        <?php echo e($ringkasan['total_transaksi']); ?>


                    </div>

                </div>

            </div>

        </div>



        

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-header">

                    💵 Pembayaran Tunai

                </div>

                <div class="card-body text-center">

                    <div class="stat-number">

                        Rp <?php echo e(number_format($ringkasan['total_cash'])); ?>


                    </div>

                </div>

            </div>

        </div>



        

        <div class="col-lg-3 col-md-6">

            <div class="card stat-card">

                <div class="card-header">

                    💳 Pembayaran Non Tunai

                </div>

                <div class="card-body text-center">

                    <div class="stat-number">

                        Rp <?php echo e(number_format($ringkasan['total_non_tunai'])); ?>


                    </div>

                </div>

            </div>

        </div>


    </div>




    

    <h3 class="section-title">

        Status Inventaris Kritis

    </h3>


    <div class="row g-4">


        

        <div class="col-md-6">

            <div class="table-card">


                <div class="table-title">

                    📦 Produk Stok Rendah

                </div>


                <div class="table-responsive">

                    <table class="table table-hover align-middle">


                        <thead>

                            <tr>

                                <th style="width: 50px;">
                                    #
                                </th>

                                <th>
                                    Nama
                                </th>

                                <th style="width: 80px;">
                                    Stok
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <?php $__empty_1 = true; $__currentLoopData = $produkStokRendah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                            <tr>

                                <td>

                                    <?php echo e($produkStokRendah->firstItem() + $index); ?>


                                </td>


                                <td>

                                    <?php echo e($produk->nama); ?>


                                </td>


                                <td>

                                    <span class="stock-low">

                                        <?php echo e($produk->stok); ?>


                                    </span>

                                </td>

                            </tr>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                            <tr>

                                <td colspan="3" class="empty-state">

                                    ✅ Semua produk dalam kondisi stok aman.

                                </td>

                            </tr>


                            <?php endif; ?>


                        </tbody>


                    </table>

                </div>


                <?php echo e($produkStokRendah->links()); ?>



            </div>

        </div>



        

        <div class="col-md-6">

            <div class="table-card">


                <div class="table-title">

                    ❌ Produk Habis Stok

                </div>


                <div class="table-responsive">

                    <table class="table table-hover align-middle">


                        <thead>

                            <tr>

                                <th style="width: 50px;">
                                    #
                                </th>

                                <th>
                                    Nama
                                </th>

                                <th style="width: 80px;">
                                    Stok
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <?php $__empty_1 = true; $__currentLoopData = $produkStokHabis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                            <tr>

                                <td>

                                    <?php echo e($produkStokHabis->firstItem() + $index); ?>


                                </td>


                                <td>

                                    <?php echo e($produk->nama); ?>


                                </td>


                                <td>

                                    <span class="stock-empty">

                                        Habis

                                    </span>

                                </td>

                            </tr>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                            <tr>

                                <td colspan="3" class="empty-state">

                                    ✅ Tidak ada produk yang kehabisan stok.

                                </td>

                            </tr>


                            <?php endif; ?>


                        </tbody>


                    </table>

                </div>


                <?php echo e($produkStokHabis->links()); ?>



            </div>

        </div>


    </div>



    

    <h3 class="section-title">

        🏆 Produk Terlaris

    </h3>


    <div class="best-seller-card">


        <div class="table-responsive">

            <table class="table table-hover align-middle">


                <thead>

                    <tr>

                        <th>
                            Nama Produk
                        </th>

                        <th>
                            Stok
                        </th>

                        <th>
                            Unit Terjual
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <?php $__empty_1 = true; $__currentLoopData = $produkTerlaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


                    <tr>

                        <td>

                            <?php echo e($produk->nama); ?>


                        </td>


                        <td>

                            <?php if($produk->stok <= 5): ?>

                                <span class="stock-low">

                                    <?php echo e($produk->stok); ?>


                                </span>

                            <?php else: ?>

                                <span class="stock-safe">

                                    <?php echo e($produk->stok); ?>


                                </span>

                            <?php endif; ?>

                        </td>


                        <td>

                            <strong style="color:#2C5D91;">

                                <?php echo e($produk->total_terjual); ?>


                            </strong>

                        </td>

                    </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                    <tr>

                        <td colspan="3" class="empty-state">

                            Belum ada data penjualan.

                        </td>

                    </tr>


                    <?php endif; ?>


                </tbody>


            </table>

        </div>


    </div>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\dbsitnap\resources\views/dashboard.blade.php ENDPATH**/ ?>