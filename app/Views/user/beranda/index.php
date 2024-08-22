<?= $this->extend('user/layout/app'); ?>
<?= $this->section('content'); ?>

<section class="banner">
    <div class="container"> <!-- Wrapped with container -->
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="hero-text text-center">
                        <h1><span class="highlight">Jago</span> Digital <span class="highlight">Marketing</span></h1>
                        <p>Jago Digital Marketing adalah pelatihan untuk meningkatkan keterampilan pemasaran digital,
                            mencakup dasar pemasaran online, strategi konten, dan penggunaan iklan digital.
                            Cocok untuk pemula dan profesional, program ini membantu peserta meningkatkan keterampilan
                            dan daya saing bisnis. Bergabunglah untuk membawa bisnis Anda ke level berikutnya!</p>
                        <a href="#section-id" class="btn btn-custom">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Video Section -->
            <div class="col-md-4">
                <div class="card">
                    <div class="hero-video">
                        <iframe
                            id="my-video"
                            class="embed-responsive-item rounded"
                            controls
                            preload="auto"
                            src="https://drive.google.com/file/d/1t9j65vDskKEkI4PZ0pEbPOq_rmoGJEa9/preview"
                            sandbox="allow-scripts allow-same-origin"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New section with gap and centered title -->
<section class="gap-section mb-5">
    <h1 class="text-center title">Apa sih kelebihan Jago Digital Marketing?</h1>
</section>

<section class="container-fluid features-section">
    <div class="content-wrapper">
        <div class="row feature-details">
            <div class="col-md-6 mt-5">
                <div class="feature-header">
                    <h1>Kenapa Jago Digital Marketing<br>Paling Tepat Buat Upskilling?</h1>
                    <p>Melalui Jago Digital Marketing kamu dapat meng-upgrade kemampuan kamu dalam hal softskill dibidang marketing.</p>
                    <p>Berikut beberapa alasan keren kenapa kamu harus ikut kegiatan Jago Digital Marketing :</p>
                    <hr>
                </div>
                <div class="feature-stats">
                    <h1>1087+</h1>
                    <p>Lulusan Pelatihan dengan berbagai background, mulai dari lulusan SMA sampai Professional.</p>
                </div>
                <div class="feature-stats">
                    <h1>630+</h1>
                    <p>Facilitator sudah berpartisipasi dalam mencetak talenta-talenta digital melalui Pelatihan.</p>
                </div>
                <div class="feature-stats">
                    <h1>120+</h1>
                    <p>Perusahaan hiring partner di Indonesia yang siap dikoneksikan dengan Pelatihan.</p>
                </div>
            </div>
            <div class="col-md-6 mt-5 d-flex flex-column align-items-center">
                <div class="card-custom"> <!-- Repeat this block for each card -->
                    <img src="<?= base_url('assets-new/images/bg1.jpg') ?>" alt="Image" class="profile-img">
                    <div class="card-body">
                        <h5 class="card-title">Judul Kartu 1</h5>
                        <p class="card-text">Ini adalah teks dalam kartu.</p>
                    </div>
                </div>
                <div class="card-custom"> <!-- Repeat this block for each card -->
                    <img src="<?= base_url('assets-new/images/bg1.jpg') ?>" alt="Image" class="profile-img">
                    <div class="card-body">
                        <h5 class="card-title">Judul Kartu 2</h5>
                        <p class="card-text">Ini adalah teks dalam kartu.</p>
                    </div>
                </div>
                <div class="card-custom"> <!-- Repeat this block for each card -->
                    <img src="<?= base_url('assets-new/images/bg1.jpg') ?>" alt="Image" class="profile-img">
                    <div class="card-body">
                        <h5 class="card-title">Judul Kartu 3</h5>
                        <p class="card-text">Ini adalah teks dalam kartu.</p>
                    </div>
                </div>
            </div>
        </div>
</section>



<style>
    .banner {
        position: relative;
        padding: 100px 15px;
        background: url('<?= base_url('assets-new/images/bg1.jpg') ?>') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .row.align-items-center {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1200px;
        flex-wrap: wrap;
        /* Allow wrapping of content on smaller screens */
    }

    .card {
        background-color: transparent;
        /* Fully transparent background */
        border: none;
        box-shadow: none;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .card-body {
        padding: 20px;
    }

    .hero-text {
        color: white;
        text-align: justify;
        padding: 20px;
        border-radius: 10px;
        max-width: 100%;
    }

    .hero-text .highlight {
        color: #ffb228;
    }

    .hero-text h1 {
        font-size: 2.5rem;
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .hero-text p {
        text-align: justify;
        font-size: 1rem;
        line-height: 1.5;
        color: #ffffff;
        margin-top: 15px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-text .btn-custom {
        margin-top: 20px;
        background-color: #ffd700;
        color: #000000;
        padding: 10px 20px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        transition: background-color 0.3s, color 0.3s;
    }

    .hero-text .btn-custom:hover {
        background-color: #ffa500;
        color: #ffffff;
    }

    .hero-video iframe {
        width: 100%;
        height: 200px;
        border-radius: 10px;
    }

    @media (min-width: 768px) {
        .hero-text h1 {
            font-size: 3rem;
        }

        .hero-video iframe {
            height: 250px;
        }
    }

    /* Responsive adjustments for small screens */
    @media (max-width: 767px) {
        .row.align-items-center {
            flex-direction: column;
            align-items: center;
        }

        .hero-text {
            margin-bottom: 20px;
        }

        .hero-text p {
            text-align: justify;
            /* Justify paragraph text for better readability */
        }
    }
</style>

<style>
    /* Gap below the banner */
    .gap-section {
        margin-top: 50px;
        /* Adjust the gap as needed */
    }

    /* Centered title with purple color */
    .title {
        font-size: 2rem;
        color: #933393;
        font-weight: 700;
        /* Purple color */
        margin-bottom: 20px;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .title {
            font-size: 1.5rem;
            font-weight: 600;
            /* Smaller font size and lighter weight for small screens */
        }
    }
</style>


<!-- css for section kelebihan -->
<style>
    .features-section {
        background-color: #77287d;
        color: #ffffff;
        padding: 0 2rem;
    }

    .feature-header h1,
    .feature-stats h1 {
        font-size: 2rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 20px;
        margin-left: 150px;
    }

    .feature-header p,
    .feature-stats p {
        font-size: 1rem;
        color: #ffffff;
        margin-left: 150px;
    }

    .feature-header {
        margin-bottom: 20px;
    }

    .feature-stats {
        margin-bottom: 20px;
    }

    .feature-stats h1 {
        margin-bottom: 10px;
    }

    .card-custom {
        display: flex;
        align-items: center;
        color: #121212;
        height: 70%;
        width: 100%;
        max-width: 350px;
        margin-bottom: 30px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 20px;
    }

    .card-custom img.profile-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        margin-right: 15px;
        border-radius: 50%;
        margin-left: 2rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #333;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }

    .gap-section {
        margin-top: 50px;
    }

    .title {
        font-size: 2rem;
        color: #933393;
        font-weight: 700;
    }

    .content-wrapper {
        padding: 0px;
    }

    @media (max-width: 768px) {

        .feature-header h1,
        .feature-stats h1 {
            font-size: 1.5rem;
            margin-left: 0;
            text-align: center;
            /* Center align text on small screens */
        }

        .feature-header p,
        .feature-stats p {
            font-size: 0.9rem;
            margin-left: 0;
            text-align: center;
            /* Center align text on small screens */
        }
    }

    @media (min-width: 992px) {
        .content-wrapper {
            padding: 20px;
        }
    }
</style>



<?= $this->endsection('content'); ?>