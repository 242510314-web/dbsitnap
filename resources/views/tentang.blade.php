@extends('layouts.app')

@section('title', 'Biodata')

@section('content')

@include('layouts.navbar')

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

</style>


<div class="container biodata-page">


    {{-- =========================
         HEADER
    ========================== --}}
    <div class="biodata-header">

        <div class="biodata-label">
            👤 Profile
        </div>

        <h1 class="biodata-title">
            Biodata
        </h1>

        <p class="biodata-subtitle">
            Sedikit tentang saya
        </p>

    </div>


    {{-- =========================
         MAIN CARD
    ========================== --}}
    <div class="biodata-card">


        {{-- =========================
             PROFILE
        ========================== --}}
        <div class="profile-section">

            <div class="profile-avatar">

                {{-- FOTO PROFILE --}}
                <img
                    src="{{ asset('images/profile.jpg') }}"
                    alt="Foto Siti Nafisah Al Azizah"
                >

            </div>

            <h2 class="profile-name">
                Siti Nafisah Al Azizah
            </h2>

            <p class="profile-role">
                Web Developer
            </p>

        </div>


        <div class="biodata-content">


            {{-- =========================
                 TENTANG SAYA
            ========================== --}}
            <div class="bio-section">

                <div class="section-title">

                    <div class="section-icon">
                        👋
                    </div>

                    Tentang Saya

                </div>

                <p class="section-description">

                    Saya adalah pengembang aplikasi yang memiliki ketertarikan
                    dalam bidang web development dan teknologi. Saya senang
                    mempelajari hal baru, mencoba berbagai hal dalam proses
                    pengembangan aplikasi, serta mengembangkan ide menjadi
                    sebuah tampilan yang menarik dan mudah digunakan.
                    Bagi saya, setiap project adalah kesempatan untuk belajar,
                    berkembang, dan meningkatkan kemampuan dalam dunia teknologi.

                </p>

            </div>


            <hr class="bio-divider">


            {{-- =========================
                 KONTAK
            ========================== --}}
            <div class="bio-section">

                <div class="section-title">

                    <div class="section-icon">
                        📇
                    </div>

                    Kontak

                </div>


                <div class="contact-grid">


                    {{-- =========================
                         EMAIL
                    ========================== --}}
                    <a
                        href="mailto:242510314@smkn4-tsm.sch.id"
                        class="contact-card"
                    >

                        <div class="contact-icon">
                            📧
                        </div>

                        <div class="contact-label">
                            Email
                        </div>

                        <div class="contact-value">

                            SITI NAFISAH AL AZIZAH

                            <span class="contact-arrow">
                                →
                            </span>

                        </div>

                    </a>


                    {{-- =========================
                         WHATSAPP
                    ========================== --}}
                    <a
                        href="https://wa.me/628xxxxxxxxxx"
                        class="contact-card"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <div class="contact-icon">
                            📱
                        </div>

                        <div class="contact-label">
                            WhatsApp
                        </div>

                        <div class="contact-value">

                            085861471529

                            <span class="contact-arrow">
                                →
                            </span>

                        </div>

                    </a>


                    {{-- =========================
                         INSTAGRAM
                    ========================== --}}
                    <a
                        href="https://www.instagram.com/stnfshalazizahh/"
                        class="contact-card"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <div class="contact-icon">
                            📸
                        </div>

                        <div class="contact-label">
                            Instagram
                        </div>

                        <div class="contact-value">

                            @stnfshalazizahh

                            <span class="contact-arrow">
                                →
                            </span>

                        </div>

                    </a>


                </div>

            </div>


            {{-- =========================
                 FOOTER
            ========================== --}}
            <div class="bio-footer">

                © {{ date('Y') }}
                Siti Nafisah Al Azizah
                · Web Developer

            </div>


        </div>

    </div>

</div>


@endsection