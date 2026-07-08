<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhanu Almer Arganto | Data Analyst Portfolio</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Portfolio of Bhanu Almer Arganto, a Bachelor of Information Systems graduate from Gunadarma University, specializing in Data Analysis and Machine Learning.">
    <meta name="keywords" content="Bhanu Almer Arganto, Data Analyst, Machine Learning, Information Systems, Gunadarma University, Portfolio">
    <meta name="author" content="Bhanu Almer Arganto">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!--================ NAVBAR ================-->

<header>

    <a href="#home" class="logo" style="color: inherit;">
        Bhanu<span>.</span>
    </a>

    <nav>

        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#education">Education</a>
        <a href="#skills">Skills</a>
        <a href="#certifications">Certificates</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>

    </nav>

    <a href="{{ asset('assets/cv.pdf') }}" class="btn-nav" download>
        Download CV
    </a>

</header>

<!--================ HERO ================-->

<section class="hero" id="home">

    <div class="hero-text">

        <p>Hello, I'm</p>

        <h1>Bhanu Almer Arganto</h1>

        <h2>Data Analyst & Machine Learning Enthusiast</h2>

        <p class="description">

            Fresh Graduate in Information Systems from Gunadarma University with expertise in information technology (IT), skilled in data analysis, data processing, and analytical reporting.

        </p>

        <div class="hero-button">

            <a href="#projects" class="btn">
                View Projects
            </a>

            <a href="#contact" class="btn-outline">
                Contact Me
            </a>

        </div>

        <div class="social">

            <a href="https://www.linkedin.com/in/bhanualmer/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>

            <a href="mailto:bhanu.almer26@gmail.com"><i class="fas fa-envelope"></i></a>

        </div>

    </div>



</section>

<!--================ ABOUT ================-->

<section class="about" id="about">

    <h2 class="section-title">
        About Me
    </h2>

    <div class="about-content">

        <p>

            I hold a Bachelor's degree in Information Systems from Gunadarma University with expertise in information technology (IT). I am skilled in data analysis, data processing, and analytical reporting. 
            
            I am capable of working individually and in teams to complete projects, and I am interested in a career focused on technology and information systems.

        </p>

    </div>

</section>

<!--================ EDUCATION ================-->

<section class="education" id="education">

    <h2 class="section-title">
        Education
    </h2>

    <div class="education-content">

        <div class="edu-card">
            
            <div class="edu-brand">
                <img src="{{ asset('assets/gunadarma.jpg') }}" alt="Gunadarma University Logo" class="edu-logo">
                <div class="edu-info">
                    <div class="edu-header" style="margin-bottom: 0;">
                        <h3>Gunadarma University</h3>
                        <span class="edu-date">Sep 2021 - Aug 2025</span>
                    </div>
                    <h4 style="margin: 5px 0 0 0;">S1 Information System (Bachelor of Information Systems)</h4>
                </div>
            </div>
            
            <p class="gpa" style="margin-top: 15px;">GPA: <strong>3.72 / 4.00</strong></p>
            
            <div class="subjects">
                <h5>Relevant Subjects:</h5>
                <p>Algorithms and Programming, Database Systems, Operation Systems, Data Structure and Organization, Graphs and Algorithmic Analysis, Data Mining Concepts, Web Based Programming, Object Based Programming, Human And Computer Interaction, Statistics.</p>
            </div>

        </div>

    </div>

</section>

<!--================ SKILLS ================-->

<section class="skills" id="skills">

    <h2 class="section-title">

        Skills

    </h2>

    <div class="skills-container">

        <div class="skill-card">
            <i class="fab fa-python"></i>
            <h3>Python</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Data analysis, data processing, and Machine Learning models</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-database"></i>
            <h3>SQL</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">SQL Server & Oracle Database management and queries</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-file-excel"></i>
            <h3>Microsoft Excel</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Data preparation, reporting, and office workflow</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-brain"></i>
            <h3>Machine Learning</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">CRISP-DM method, model analysis, and implementation</p>
        </div>

        <div class="skill-card">
            <i class="fab fa-html5"></i>
            <h3>HTML5 & CSS</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Fundamental web programming and website building</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-file-powerpoint"></i>
            <h3>Office Software</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Microsoft Word & PowerPoint presentation</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-people-arrows"></i>
            <h3>Soft Skills</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Communication, Teamwork, Time Management, Adaptive, Analytical Thinking</p>
        </div>

        <div class="skill-card">
            <i class="fas fa-language"></i>
            <h3>Languages</h3>
            <p style="font-size:12px; margin-top:5px; color:var(--text);">Indonesian (Native)<br>English (Basic)</p>
        </div>

    </div>

</section>

<!--================ CERTIFICATIONS ================-->

<section class="certifications" id="certifications">

    <h2 class="section-title">
        Training and Certification
    </h2>

    <!-- Featured BNSP Data Analyst Card -->
    <a href="{{ asset('sertifikat/Sertifikat Data Analyst BNSP.pdf') }}" target="_blank" rel="noopener noreferrer" class="featured-cert-link" style="text-decoration: none; display: block; color: inherit;">
        <div class="featured-cert">
            <div class="featured-cert-header">
                <div class="featured-cert-title-area">
                    <i class="fas fa-award"></i>
                    <div>
                        <h3>Data Analyst Certificate</h3>
                        <p>LSP Gunadarma (Accredited by BNSP)</p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <span class="edu-date" style="margin: 0;">Sept 2025</span>
                    <span style="font-size: 13px; color: var(--primary); font-weight: 500;"><i class="fas fa-eye"></i> View PDF</span>
                </div>
            </div>
            <ul class="featured-cert-bullets">
                <li>Certified professional data analyst validation based on Indonesia's National Occupational Skills Standards (SKKNI).</li>
                <li>Competencies include: Identifying data management needs, collecting and reviewing data, validating data integrity, and determining data objects.</li>
                <li>Skilled in building Business Intelligence solutions and preparing comprehensive analysis results reports for stakeholders.</li>
            </ul>
        </div>
    </a>

    <!-- Technical Certifications Grid from Lepkom Gunadarma -->
    <h3 class="tech-certs-title">Technical Certifications - Lepkom Gunadarma</h3>
    <div class="tech-certs-grid">
        
        <!-- 1. HTML5 -->
        <a href="{{ asset('sertifikat/33f03857dc5dee2c31f6e327ee1be882.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Certificate of Building Websites Using HTML5</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Mar 2025</span>
            </div>
        </a>

        <!-- 2. Creating BI -->
        <a href="{{ asset('sertifikat/signed_c77135f35b8f547715ef6b0f500de0ba.pdf.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Creating Business Intelligence</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">May 2025</span>
            </div>
        </a>

        <!-- 3. Data Prep -->
        <a href="{{ asset('sertifikat/aae45709590ffe358f681269128e28af.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Data Preparation for Business Processes</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Sept 2024</span>
            </div>
        </a>

        <!-- 4. Oracle Intermediate -->
        <a href="{{ asset('sertifikat/928f330dee7bcf17fca7b1dd25e862b0.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Oracle For Intermediate</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Aug 2024</span>
            </div>
        </a>

        <!-- 5. SQL Server Intermediate -->
        <a href="{{ asset('sertifikat/eeae5ac97a6c56417fa60036e104e4ad.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>SQL Server For Intermediate</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Apr 2024</span>
            </div>
        </a>

        <!-- 6. Oracle Beginner -->
        <a href="{{ asset('sertifikat/80a53ee94a7a5cfc0aec0955d6072f99.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Oracle For Beginner</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Nov 2023</span>
            </div>
        </a>

        <!-- 7. SQL Server Beginner -->
        <a href="{{ asset('sertifikat/fa42cbb2511b25dd85652b009633e201.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>SQL Server For Beginner</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Jun 2023</span>
            </div>
        </a>

        <!-- 8. DBMS -->
        <a href="{{ asset('sertifikat/62a447e1b26178e8a2dffc2d51e35e6d.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Fundamental DBMS</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Nov 2022</span>
            </div>
        </a>

        <!-- 9. Fundamental Web -->
        <a href="{{ asset('sertifikat/70ae71bbc9c7ffff94b590c28f5b4ac4.pdf') }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: block;">
            <div class="tech-cert-item">
                <div class="tech-cert-info">
                    <h4>Fundamental Web</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">May 2022</span>
            </div>
        </a>

    </div>

</section>

<!--================ PROJECTS ================-->

<section class="projects" id="projects">

    <h2 class="section-title">
        Project / Assignment
    </h2>

    <div class="project-container" style="grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));">

        <!-- PROJECT 1 -->

        <div class="project-card">

            <div class="project-image-wrapper">
                <img src="{{ asset('assets/wasting.png') }}" alt="Wasting Status Prediction">
            </div>

            <div class="project-info">

                <span class="category">Final Project – Undergraduate Thesis</span>

                <h3>Wasting Status Prediction</h3>

                <p class="project-desc">
                    A Flask-based child wasting status prediction system using a Logistic Regression model trained on SMOTE-balanced WHO weight-for-height datasets.
                </p>

                <div class="proj-summary-container">
                    <span class="proj-summary-tag"><i class="fas fa-file-alt"></i> Project notes</span>
                    <span class="proj-summary-tag"><i class="fas fa-tools"></i> 4 tools listed</span>
                    <span class="proj-summary-tag"><i class="fas fa-bullseye"></i> 3 focus points</span>
                </div>

                <div class="tech">
                    <small>Python</small>
                    <small>Flask</small>
                    <small>Scikit-Learn</small>
                    <small>SMOTE</small>
                    <small>MySQL</small>
                </div>

                <div class="proj-heading">What I worked on / explored</div>
                <div class="proj-bullet-list">
                    <div class="proj-bullet"><span class="plus">+</span>Menerapkan algoritma Logistic Regression dengan preprocessing StandardScaler dan penyeimbangan data via SMOTE.</div>
                    <div class="proj-bullet"><span class="plus">+</span>Membangun modul interpolasi Z-Score Weight-for-Height (WHZ) berdasarkan tabel standar antropometri WHO.</div>
                    <div class="proj-bullet"><span class="plus">+</span>Menghubungkan aplikasi web Flask dengan sistem database MySQL untuk pencatatan riwayat prediksi gizi anak.</div>
                </div>

                <button class="proj-notes-btn" onclick="openModal('modal-skripsi')">
                    View project notes
                </button>

            </div>

        </div>

        <!-- PROJECT 2 -->

        <div class="project-card">

            <div class="project-image-wrapper">
                <img src="{{ asset('assets/retail.png') }}" alt="Inventory Management Website">
            </div>

            <div class="project-info">

                <span class="category">Scientific Writing Course Assignment</span>

                <h3>Inventory Management Website</h3>

                <p class="project-desc">
                    A native PHP retail inventory system featuring real-time stock logs, transaction tracking, supplier mapping, and PDF/Excel report exports.
                </p>

                <div class="proj-summary-container">
                    <span class="proj-summary-tag"><i class="fas fa-file-alt"></i> Project notes</span>
                    <span class="proj-summary-tag"><i class="fas fa-tools"></i> 5 tools listed</span>
                    <span class="proj-summary-tag"><i class="fas fa-bullseye"></i> 3 focus points</span>
                </div>

                <div class="tech">
                    <small>PHP</small>
                    <small>MySQLi</small>
                    <small>HTML5 & CSS</small>
                    <small>Excel & PDF</small>
                    <small>Bootstrap</small>
                </div>

                <div class="proj-heading">What I worked on / explored</div>
                <div class="proj-bullet-list">
                    <div class="proj-bullet"><span class="plus">+</span>Mengembangkan logika pembaruan stok barang otomatis saat terjadi pencatatan transaksi masuk dan keluar.</div>
                    <div class="proj-bullet"><span class="plus">+</span>Membangun sistem ekspor laporan dinamis ke format PDF printable layout dan Microsoft Excel sheet.</div>
                    <div class="proj-bullet"><span class="plus">+</span>Mengimplementasikan otorisasi admin multi-user berbasis sesi PHP untuk mengamankan data gudang.</div>
                </div>

                <button class="proj-notes-btn" onclick="openModal('modal-stock')">
                    View project notes
                </button>

            </div>

        </div>

    </div>

</section>

<!--================ CONTACT ================-->

<section class="contact" id="contact">

    <h2 class="section-title">
        Contact Me
    </h2>


    <div class="contact-container">

        <a href="mailto:bhanu.almer26@gmail.com">

            <i class="fas fa-envelope"></i>

            <div>
                <h3>Email</h3>
                <span>bhanu.almer26@gmail.com</span>
            </div>

        </a>

        <a href="https://www.linkedin.com/in/bhanualmer/"
           target="_blank"
           rel="noopener noreferrer">

            <i class="fab fa-linkedin"></i>

            <div>
                <h3>LinkedIn</h3>
                <span>Bhanu Almer Arganto</span>
            </div>

        </a>

    </div>

</section>

<!--================ FOOTER ================-->

<footer>

    <p>

        © 2026 Bhanu Almer Arganto | Portfolio

    </p>

</footer>

<!--================ MODAL SKRIPSI ================-->
<div id="modal-skripsi" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Project Notes - Wasting Status Prediction</h2>
            <button class="modal-close-btn" onclick="closeModal('modal-skripsi')">&times;</button>
        </div>
        <div class="modal-body">
            <h3>Ringkasan Skripsi</h3>
            <p>Proyek akhir/skripsi ini bertujuan untuk memetakan dan memprediksi status gizi buruk (wasting) pada balita secara otomatis menggunakan machine learning. Sistem ini menggunakan berat badan dan tinggi badan anak untuk menghitung Z-score WHO secara real-time sebelum diklasifikasikan oleh model.</p>
            
            <h3>Metodologi Machine Learning</h3>
            <ul>
                <li><strong>Model Klasifikasi:</strong> Regresi Logistik (Logistic Regression) yang dioptimasi untuk klasifikasi multiklas (6 kategori status gizi).</li>
                <li><strong>Penyeimbangan Data (Oversampling):</strong> Menggunakan teknik <strong>SMOTE</strong> (Synthetic Minority Over-sampling Technique) karena target kategori gizi buruk, gizi lebih, dan obesitas sangat minoritas dalam dataset asli.</li>
                <li><strong>Normalisasi Fitur:</strong> StandardScaler digunakan untuk penskalaan tinggi badan dan berat badan sebelum dilatih.</li>
                <li><strong>Dataset Acuan:</strong> Menggunakan data historis balita Guatemala (<code>DATASET_GUATEMALA.csv</code>).</li>
            </ul>
            
            <h3>Struktur Tabel Database (MySQL)</h3>
            <p>Aplikasi ini memiliki skema relasional untuk merekam prediksi balita yang terhubung dengan akun user:</p>
            <pre><code>-- Tabel Prediksi Gizi
CREATE TABLE prediction (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal_lahir DATE NOT NULL,
    tanggal_tes DATE NOT NULL,
    umur INT NOT NULL, -- Umur dalam bulan
    jenis_kelamin INT NOT NULL, -- 0 = Perempuan, 1 = Laki-laki
    berat FLOAT NOT NULL,
    tinggi FLOAT NOT NULL,
    cara_ukur VARCHAR(20) NOT NULL, -- berdiri / telentang
    whz FLOAT NOT NULL, -- Z-score hasil hitung WHO
    hasil VARCHAR(50) NOT NULL, -- Status Gizi Akhir
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(id)
);</code></pre>

            <h3>Algoritma Perhitungan Z-score (Python)</h3>
            <p>Nilai WHZ dihitung menggunakan interpolasi tabel referensi antropometri WHO (L, M, S) berdasarkan jenis kelamin dan cara pengukuran:</p>
            <pre><code># Potongan kode kalkulasi Z-score pada app.py
if L == 0:
    zscore = log(bb / M) / S
else:
    zscore = ((bb / M) ** L - 1) / (L * S)</code></pre>
        </div>
    </div>
</div>

<!--================ MODAL STOCK BARANG ================-->
<div id="modal-stock" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Project Notes - Inventory Management Website</h2>
            <button class="modal-close-btn" onclick="closeModal('modal-stock')">&times;</button>
        </div>
        <div class="modal-body">
            <h3>Ringkasan Tugas Penulisan Ilmiah</h3>
            <p>Sistem informasi inventaris retail ini dirancang untuk mencatat pergerakan barang masuk, barang keluar, dan status stok saat ini secara terintegrasi untuk mencegah kesalahan pencatatan manual di gudang.</p>
            
            <h3>Logika Bisnis Database (MySQL)</h3>
            <p>Sistem ini dirancang menggunakan lima tabel utama yang saling berelasi di MySQL:</p>
            <pre><code>-- Tabel Stok Barang
CREATE TABLE stock (
    idbarang INT AUTO_INCREMENT PRIMARY KEY,
    namabarang VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    lokasi VARCHAR(50),
    stock INT DEFAULT 0,
    harga INT NOT NULL
);

-- Tabel Transaksi Barang Masuk
CREATE TABLE masuk (
    idmasuk INT AUTO_INCREMENT PRIMARY KEY,
    idbarang INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    keterangan VARCHAR(100), -- nama pengirim / penerima
    qty INT,
    FOREIGN KEY (idbarang) REFERENCES stock(idbarang) ON DELETE CASCADE
);</code></pre>

            <h3>Otomasi Stok (PHP Backend)</h3>
            <p>Perhitungan stok dikelola secara realtime di file backend <code>function.php</code>:</p>
            <ul>
                <li><strong>Barang Masuk:</strong> Memicu query UPDATE untuk menambahkan stok baru ke tabel <code>stock</code> berdasarkan kuantitas masuk.</li>
                <li><strong>Barang Keluar:</strong> Melakukan validasi ketersediaan barang. Jika stok mencukupi, query UPDATE mengurangi stok. Jika tidak mencukupi, sistem memicu javascript alert <code>"Stock tidak mencukupi"</code> dan membatalkan transaksi.</li>
            </ul>
            
            <h3>Fitur Ekspor Laporan</h3>
            <p>Sistem memiliki file eksportir khusus (seperti <code>exportstock.php</code> dan <code>exportmasuk.php</code>) yang menggunakan HTML table wrapper untuk mencetak halaman laporan ke format PDF peramban serta file Excel secara instan.</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
<script>
    function openModal(id) {
        document.getElementById(id).classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    function closeModal(id) {
        document.getElementById(id).classList.remove('active');
        document.body.style.overflow = 'auto';
    }
</script>

</body>
</html>
