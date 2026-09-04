

<?php $__env->startSection('title', 'Biodata'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

/* =========================
   BACKGROUND
========================= */
body {
    background: linear-gradient(
        135deg,
        #eaf4ff 0%,
        #dcecff 50%,
        #f5f9ff 100%
    ) !important;

    min-height: 100vh;
}


/* =========================
   BIODATA PAGE
========================= */
.biodata-page {
    padding: 35px 0 60px;
}


/* =========================
   PAGE HEADER
========================= */
.biodata-header {
    margin-bottom: 25px;
}

.biodata-label {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    padding: 7px 15px;

    background: #cfe5ff;
    color: #367bc1;

    border-radius: 30px;

    font-size: 12px;
    font-weight: 700;

    box-shadow: 0 5px 15px rgba(71, 137, 202, .12);
}

.biodata-title {
    margin-top: 12px;
    margin-bottom: 5px;

    color: #214f7a;

    font-size: 34px;
    font-weight: 800;

    letter-spacing: -.8px;
}

.biodata-subtitle {
    margin: 0;

    color: #6583a0;

    font-size: 14px;
}


/* =========================
   MAIN CARD
========================= */
.biodata-card {
    background: rgba(255, 255, 255, .97) !important;

    border: 1px solid #d6e6f7 !important;

    border-radius: 22px !important;

    overflow: hidden;

    box-shadow:
        0 15px 40px rgba(52, 102, 153, .13),
        0 3px 8px rgba(52, 102, 153, .05) !important;
}


/* =========================
   PROFILE AREA
========================= */
.profile-section {
    text-align: center;

    padding: 38px 25px 30px;

    background: linear-gradient(
        135deg,
        #f8fbff,
        #eef6ff
    );

    border-bottom: 1px solid #dce9f6;
}


/* =========================
   PROFILE AVATAR
========================= */
.profile-avatar {
    width: 115px;
    height: 115px;

    margin: 0 auto 18px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #dcecff;

    border: 5px solid white;

    box-shadow:
        0 8px 25px rgba(70, 135, 200, .18);

    overflow: hidden;
}


/* FOTO PROFILE */
.profile-avatar img {
    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center;
}


/* =========================
   PROFILE NAME
========================= */
.profile-name {
    margin: 0;

    color: #214f7a;

    font-size: 25px;
    font-weight: 800;
}

.profile-role {
    margin-top: 6px;
    margin-bottom: 0;

    color: #6b89a4;

    font-size: 14px;
}


/* =========================
   CONTENT
========================= */
.biodata-content {
    padding: 30px;
}


/* =========================
   SECTION
========================= */
.bio-section {
    margin-bottom: 30px;
}

.section-title {
    display: flex;
    align-items: center;
    gap: 10px;

    margin-bottom: 12px;

    color: #315c82;

    font-size: 18px;
    font-weight: 800;
}

.section-icon {
    width: 34px;
    height: 34px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: #dcecff;
    color: #4388ce;

    font-size: 15px;
}

.section-description {
    margin: 0;

    color: #67839d;

    font-size: 14px;

    line-height: 1.8;
}


/* =========================
   CONTACT GRID
========================= */
.contact-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 15px;
}


/* =========================
   CONTACT CARD
========================= */
.contact-card {
    display: block;

    padding: 18px;

    background: #f5f9ff;

    border: 1px solid #e0edf9;

    border-radius: 15px;

    text-decoration: none;

    transition: all .25s ease;
}

.contact-card:hover {
    background: #eaf4ff;

    border-color: #c8def2;

    transform: translateY(-4px);

    box-shadow:
        0 10px 25px rgba(67, 136, 206, .12);
}


/* =========================
   CONTACT ICON
========================= */
.contact-icon {
    width: 42px;
    height: 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 12px;

    border-radius: 12px;

    background: #dcecff;

    color: #4388ce;

    font-size: 17px;
}

.contact-icon i {
    font-size: 19px;
}


/* =========================
   CONTACT TEXT
========================= */
.contact-label {
    margin-bottom: 4px;

    color: #7a94aa;

    font-size: 12px;
}

.contact-value {
    color: #315c82;

    font-size: 14px;

    font-weight: 700;

    word-break: break-word;
}


/* =========================
   CONTACT ARROW
========================= */
.contact-arrow {
    float: right;

    color: #6aa2d6;

    font-size: 14px;

    transition: .2s;
}

.contact-card:hover .contact-arrow {
    transform: translateX(3px);

    color: #397db9;
}


/* =========================
   DIVIDER
========================= */
.bio-divider {
    border: 0;

    border-top: 1px solid #e1edf7;

    margin: 0 0 28px;
}


/* =========================
   FOOTER
========================= */
.bio-footer {
    margin-top: 25px;

    padding: 15px;

    text-align: center;

    background: #f5f9ff;

    border-radius: 12px;

    color: #7b95aa;

    font-size: 12px;
}


/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {

    .biodata-page {
        padding: 22px 15px 40px;
    }

    .biodata-title {
        font-size: 28px;
    }

    .biodata-content {
        padding: 22px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }

    .profile-section {
        padding: 30px 20px 25px;
    }

}

/* Sugar Bloom profile layout */
.biodata-page {
    max-width: 1100px;
    padding-top: 28px;
}

.biodata-header {
    text-align: center;
}

.biodata-label {
    display: none;
}

.biodata-title {
    color: #214f7a;
    font-size: 30px;
    letter-spacing: 0;
}

.biodata-card {
    display: grid;
    grid-template-columns: minmax(290px, 40%) 1fr;
    align-items: stretch;
    border: 0 !important;
    border-radius: 16px !important;
    overflow: visible;
    background: transparent !important;
    box-shadow: none !important;
    gap: 20px;
}

.profile-section {
    min-height: 100%;
    padding: 28px 24px;
    background: #fff;
    border: 1px solid #d6e6f7;
    border-radius: 16px;
    box-shadow: 0 8px 22px rgba(52, 102, 153, .10);
}

.profile-avatar {
    width: 120px;
    height: 120px;
    border-color: #fff;
}

.profile-name {
    color: #214f7a;
    font-size: 24px;
}

.profile-divider {
    margin: 16px 0 14px;
    border: 0;
    border-top: 1px solid #dce9f6;
}

.profile-description {
    margin: 0;
    color: #67839d;
    font-size: 14px;
    line-height: 1.5;
}

.profile-description strong {
    color: #315c82;
}

.biodata-content {
    padding: 22px 0 0;
}

.bio-section {
    margin-bottom: 20px;
    padding: 22px;
    background: #fff;
    border: 1px solid #d6e6f7;
    border-radius: 16px;
    box-shadow: 0 8px 22px rgba(52, 102, 153, .10);
}

.bio-divider,
.bio-footer {
    display: none;
}

.section-title {
    color: #214f7a;
    font-size: 20px;
}

.section-description {
    line-height: 1.65;
}

.developer-details p,
.technology-list p {
    margin: 0 0 12px;
}

.developer-details p:last-child,
.technology-list p:last-child {
    margin-bottom: 0;
}

.developer-details span {
    display: block;
    margin-bottom: 2px;
    color: #7a94aa;
    font-size: 12px;
}

.developer-details strong,
.technology-list strong {
    color: #315c82;
}

.technology-list {
    color: #67839d;
    font-size: 14px;
    line-height: 1.6;
}

.contact-grid {
    grid-template-columns: repeat(3, 1fr);
}

.application-section {
    margin-top: 20px;
}

.instagram-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 18px;
    padding: 8px 14px;
    border-radius: 20px;
    background: #dcecff;
    color: #4388ce;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
}

.instagram-link:hover {
    background: #cfe5ff;
    color: #315c82;
}

@media (max-width: 768px) {
    .biodata-card {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .biodata-content {
        padding-top: 0;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }
}

</style>


<div class="container biodata-page">


    
    <div class="biodata-header">

        <div class="biodata-label">
            <i class="fas fa-user"></i>
            Profil Pengembang
        </div>

        <h1 class="biodata-title">
            Tentang Sugar Bloom
        </h1>

        <p class="biodata-subtitle">
            Profil pengembang dan informasi aplikasi Sugar Bloom
        </p>

    </div>


    
    <div class="biodata-card">


        
        <div class="profile-section">

            <div class="profile-avatar">

                
                <img
                    src="<?php echo e(asset('images/profile.jpg')); ?>"
                    alt="Foto Mega wati putri"
                >

            </div>

            <h2 class="profile-name">
                Mega wati putri
            </h2>

            <p class="profile-role">
                Pengembang Aplikasi
            </p>

            <a
                class="instagram-link"
                href="https://www.instagram.com/stnfshalazizahh/"
                target="_blank"
                rel="noopener noreferrer"
            >
                <i class="fab fa-instagram"></i>
                @stnfshalazizahh
            </a>

            <hr class="profile-divider">

            <p class="profile-description">
                Saya merupakan pengembang dari aplikasi <strong>Sugar Bloom</strong>.
                Aplikasi ini dibuat sebagai project untuk membantu proses
                pengelolaan produk dan transaksi penjualan.
            </p>

        </div>


        <div class="biodata-content">


            
            <div class="bio-section">

                <div class="section-title">

                    <div class="section-icon">
                        <i class="fas fa-hand-wave"></i>
                    </div>

                    Informasi Pengembang

                </div>

                <div class="developer-details section-description">
                    <p><span>Nama</span><strong>Siti Nafisah Al Azizah</strong></p>
                    <p><span>Bidang</span><strong>Pengembangan Website</strong></p>
                    <p><span>Project</span><strong>Sugar Bloom - POS</strong></p>
                </div>

            </div>


            <hr class="bio-divider">


            <div class="bio-section">

                <div class="section-title">

                    <div class="section-icon">
                        <i class="fas fa-code"></i>
                    </div>

                    Teknologi yang Digunakan

                </div>

                <div class="technology-list">
                    <p><strong>Bahasa Pemrograman:</strong> PHP, JavaScript</p>
                    <p><strong>Framework:</strong> Laravel</p>
                    <p><strong>Frontend:</strong> HTML, CSS, Bootstrap</p>
                    <p><strong>Database:</strong> MySQL</p>
                    <p><strong>Tools:</strong> Visual Studio Code, Git</p>
                </div>

            </div>


            
            <div class="bio-footer">

                © <?php echo e(date('Y')); ?> Sugar Bloom · Web Developer

            </div>


        </div>

    </div>


    <div class="bio-section application-section">

        <div class="section-title">

            <div class="section-icon">
                <i class="fas fa-store"></i>
            </div>

            Tentang Aplikasi

        </div>

        <p class="section-description">
            <strong>Sugar Bloom</strong> adalah aplikasi Point of Sale (POS)
            untuk membantu pengelolaan produk, stok, pengguna, kasir, dan
            transaksi penjualan dengan lebih mudah dan teratur.
        </p>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\siti\dbsitnap\resources\views\tentang.blade.php ENDPATH**/ ?>