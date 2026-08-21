

<?php $__env->startSection('title', 'Biodata'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    .biodata-card {
        background: #ffffff;
        border: 1px solid #e8f0f8;
    }

    .profile-avatar {
        width: 110px;
        height: 110px;
        margin: auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf4ff;
        font-size: 45px;
    }

    .info-box {
        background: #f5f9ff;
        border-radius: 12px;
    }

    .info-label {
        font-size: 13px;
        color: #7a8998;
    }

    .info-value {
        color: #1f3c5b;
        font-weight: 600;
    }
</style>

<div class="container py-5">

```

<div class="text-center mb-4">
    <h1 class="fw-bold">Biodata</h1>
    <p class="text-muted">
        Sedikit tentang saya
    </p>
</div>

<div class="card biodata-card shadow-sm rounded-4 p-4">

    
    <div class="text-center mb-4">

        <div class="profile-avatar">
            👩🏻‍💻
        </div>

        <h3 class="fw-bold mt-3 mb-1">
            Siti Nafisah Al Azizah
        </h3>

        <p class="text-muted mb-0">
            Web Developer
        </p>

    </div>

    <hr>

    
    <div class="mt-4">
        <h5 class="fw-bold mb-2">
            Tentang Saya
        </h5>

        <p class="text-muted mb-0">
            Saya adalah pengembang aplikasi yang memiliki ketertarikan
            dalam bidang web development dan teknologi. Saya senang
            mempelajari hal baru dan mengembangkan aplikasi yang
            sederhana serta mudah digunakan.
        </p>
    </div>

    
    <div class="mt-4">

        <h5 class="fw-bold mb-3">
            Kontak
        </h5>

        <div class="row g-3">

            <div class="col-md-4">
                <div class="info-box p-3">
                    <div class="info-label">
                        📧 Email
                    </div>
                    <div class="info-value">
                        emailkamu@gmail.com
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-box p-3">
                    <div class="info-label">
                        📱 WhatsApp
                    </div>
                    <div class="info-value">
                        08xxxxxxxxxx
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-box p-3">
                    <div class="info-label">
                        📸 Instagram
                    </div>
                    <div class="info-value">
                        @username
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
```

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\dbsitnap\resources\views/tentang.blade.php ENDPATH**/ ?>