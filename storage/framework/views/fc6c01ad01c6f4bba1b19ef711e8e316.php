

<?php $__env->startSection('title', 'Tambah Jenis'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    body {
        background: linear-gradient(135deg, #eaf4ff 0%, #dcecff 50%, #f5f9ff 100%);
        min-height: 100vh;
    }

    .jenis-page {
        padding: 35px 0 60px;
    }

    .form-card {
        max-width: 700px;
        margin: 0 auto;
        background: rgba(255, 255, 255, .96);
        border: 1px solid #d6e6f7;
        border-radius: 22px;
        overflow: hidden;
        box-shadow:
            0 15px 40px rgba(52, 102, 153, .13),
            0 3px 8px rgba(52, 102, 153, .05);
    }

    .form-header {
        padding: 25px 28px;
        background: linear-gradient(135deg, #f8fbff, #eef6ff);
        border-bottom: 1px solid #dbe9f7;
    }

    .page-label {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: #cfe5ff;
        color: #367bc1;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 10px;
        box-shadow: 0 5px 15px rgba(71, 137, 202, .12);
    }

    .page-title {
        margin: 0;
        color: #214f7a;
        font-size: 28px;
        font-weight: 800;
    }

    .page-description {
        margin: 7px 0 0;
        color: #6583a0;
        font-size: 14px;
    }

    .form-body {
        padding: 28px;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #315c82;
        font-size: 13px;
        font-weight: 800;
    }

    .form-control {
        width: 100%;
        border: 1px solid #cfe0f1;
        border-radius: 13px;
        padding: 12px 14px;
        color: #365b7d;
        font-size: 13px;
        outline: none;
        transition: .25s ease;
        background: white;
    }

    .form-control:focus {
        border-color: #6da7df;
        box-shadow: 0 0 0 4px rgba(89, 151, 210, .12);
    }

    .form-control::placeholder {
        color: #91a9be;
    }

    .error-message {
        margin-top: 7px;
        color: #c66a76;
        font-size: 12px;
        font-weight: 600;
    }

    .form-footer {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        padding: 20px 28px;
        background: #f8fbff;
        border-top: 1px solid #e2edf7;
    }

    .btn-back,
    .btn-save {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 11px 18px;
        border-radius: 12px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: .2s ease;
        border: none;
        cursor: pointer;
    }

    .btn-back {
        background: #edf4fb;
        color: #58738c;
        border: 1px solid #d7e5f2;
    }

    .btn-back:hover {
        background: #dfeefa;
        color: #45677f;
    }

    .btn-save {
        background: linear-gradient(135deg, #5b9fe3, #4388ce);
        color: white;
        box-shadow: 0 8px 20px rgba(67, 136, 206, .25);
    }

    .btn-save:hover {
        color: white;
        transform: translateY(-2px);
        background: linear-gradient(135deg, #4d92da, #367fc7);
    }

    @media (max-width: 768px) {
        .jenis-page {
            padding: 22px 15px 40px;
        }

        .form-header,
        .form-body {
            padding: 22px;
        }

        .form-footer {
            padding: 18px 22px;
            flex-direction: column-reverse;
        }

        .btn-back,
        .btn-save {
            width: 100%;
        }
    }
</style>

<div class="container jenis-page">

    <div class="form-card">

        
        <div class="form-header">

            <div class="page-label">
                🏷️ Jenis Management
            </div>

            <h1 class="page-title">
                Tambah Jenis
            </h1>

            <p class="page-description">
                Tambahkan jenis produk baru ke dalam sistem.
            </p>

        </div>

        
        <form action="<?php echo e(route('jenis.store')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <div class="form-body">

                <div class="form-group">

                    <label for="nama_jenis" class="form-label">
                        Nama Jenis
                    </label>

                    <input
                        type="text"
                        name="nama_jenis"
                        id="nama_jenis"
                        class="form-control <?php $__errorArgs = ['nama_jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('nama_jenis')); ?>"
                        placeholder="Contoh: Makanan"
                        required
                    >

                    <?php $__errorArgs = ['nama_jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error-message">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

            </div>

            
            <div class="form-footer">

                <a href="<?php echo e(route('jenis.index')); ?>" class="btn-back">
                    ← Kembali
                </a>

                <button type="submit" class="btn-save">
                    💾 Simpan Jenis
                </button>

            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\dbsitnap\resources\views/jenis/create.blade.php ENDPATH**/ ?>