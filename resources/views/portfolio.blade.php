<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhanu Almer Arganto | Portfolio</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Portfolio of Bhanu Almer Arganto, a Bachelor of Information Systems graduate from Gunadarma University, specializing in Data Analysis and Machine Learning.">
    <meta name="keywords" content="Bhanu Almer Arganto, Data Analyst, Machine Learning, Information Systems, Gunadarma University, Portfolio">
    <meta name="author" content="Bhanu Almer Arganto">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!--================ BACKGROUND BLOBS ================-->
<div class="glowing-blob blob-1"></div>
<div class="glowing-blob blob-2"></div>
<div class="glowing-blob blob-3"></div>

<!--================ NAVBAR ================-->
<header>
    <a href="#home" class="logo">
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

    <div class="header-right">
        <a href="{{ asset('assets/cv.pdf') }}" class="btn-nav" download>
            Download CV
        </a>
    </div>
</header>

<!--================ HERO ================-->
<section class="hero" id="home">
    <div class="hero-content">
        <div class="hero-text fade-up-init">
            <p class="hero-subtitle">Hello, I'm</p>
            <h1 class="hero-title">Bhanu Almer Arganto</h1>
            <p class="description">
                Fresh Graduate in Information Systems from Gunadarma University with expertise in information technology (IT), skilled in data analysis, data processing, and analytical reporting.
            </p>

            <div class="hero-button">
                <a href="#projects" class="btn">
                    View Projects <i class="fas fa-arrow-right" style="margin-left: 8px; font-size: 13px;"></i>
                </a>
                <a href="#contact" class="btn-outline">
                    Contact Me
                </a>
            </div>

            <div class="social">
                <a href="https://www.linkedin.com/in/bhanualmer/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="mailto:bhanu.almer26@gmail.com" aria-label="Email">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!--================ ABOUT ================-->
<section class="about reveal-section" id="about">
    <h2 class="section-title">About Me</h2>

    <div class="about-grid">
        <div class="about-left reveal-element">
            <div class="about-card">
                <p>
                    I hold a Bachelor's degree in Information Systems from Gunadarma University with expertise in information technology (IT). I am skilled in data analysis, data processing, and analytical reporting. 
                </p>
                <p style="margin-top: 15px;">
                    I am capable of working individually and in teams to complete projects, and I am interested in a career focused on technology and information systems.
                </p>
            </div>
        </div>
        <div class="about-right reveal-element">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
                    <span class="stat-num">3.72</span>
                    <span class="stat-label">GPA / IPK</span>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
                    <span class="stat-num">4</span>
                    <span class="stat-label">Tahun Studi</span>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-certificate"></i></div>
                    <span class="stat-num">10+</span>
                    <span class="stat-label">Sertifikasi & Pelatihan</span>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fas fa-code-branch"></i></div>
                    <span class="stat-num">2+</span>
                    <span class="stat-label">Proyek Utama</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ EDUCATION ================-->
<section class="education reveal-section" id="education">
    <h2 class="section-title">Education</h2>

    <div class="timeline-container">
        <div class="timeline-item reveal-element">
            <div class="timeline-dot"><i class="fas fa-university"></i></div>
            <div class="timeline-card">
                <div class="timeline-card-header">
                    <div class="edu-brand-wrapper">
                        <img src="{{ asset('assets/gunadarma.jpg') }}" alt="Gunadarma University Logo" class="timeline-logo">
                        <div>
                            <h3>Gunadarma University</h3>
                            <h4>S1 Information System</h4>
                        </div>
                    </div>
                    <span class="edu-date-badge">Sep 2021 - Aug 2025</span>
                </div>

                <div class="timeline-card-body">
                    <p class="gpa-highlight">GPA: <span>3.72 / 4.00</span></p>
                    
                    <div class="subjects-box">
                        <h5>Relevant Subjects:</h5>
                        <div class="subjects-tags">
                            <span>Algorithms and Programming</span>
                            <span>Database Systems</span>
                            <span>Operating Systems</span>
                            <span>Data Structure and Organization</span>
                            <span>Graphs and Algorithmic Analysis</span>
                            <span>Data Mining Concepts</span>
                            <span>Web Based Programming</span>
                            <span>Object Based Programming</span>
                            <span>Human and Computer Interaction</span>
                            <span>Statistics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ SKILLS ================-->
<section class="skills reveal-section" id="skills">
    <h2 class="section-title">Skills</h2>

    <!-- Skills Category Filter Tabs -->
    <div class="skills-tabs reveal-element">
        <button class="tab-btn active" onclick="filterSkills('all')">All Skills</button>
        <button class="tab-btn" onclick="filterSkills('analysis')">Data Analysis</button>
        <button class="tab-btn" onclick="filterSkills('visualization')">Visualization</button>
        <button class="tab-btn" onclick="filterSkills('programming')">Programming</button>
        <button class="tab-btn" onclick="filterSkills('database')">Database</button>
        <button class="tab-btn" onclick="filterSkills('ml')">Machine Learning</button>
    </div>

    <div class="skills-container reveal-element">
        <!-- 1. Python -->
        <div class="skill-card" data-category="analysis programming ml">
            <div class="skill-header">
                <i class="fab fa-python"></i>
                <h3>Python</h3>
            </div>
            <p>Data analysis, data processing, and Machine Learning models</p>
        </div>

        <!-- 2. SQL -->
        <div class="skill-card" data-category="analysis database">
            <div class="skill-header">
                <i class="fas fa-database"></i>
                <h3>SQL</h3>
            </div>
            <p>SQL Server & Oracle Database management and queries</p>
        </div>

        <!-- 3. Microsoft Excel -->
        <div class="skill-card" data-category="analysis visualization">
            <div class="skill-header">
                <i class="fab fa-microsoft"></i>
                <h3>Microsoft Office</h3>
            </div>
            <p>Microsoft Excel, Word & PowerPoint for data analysis, reporting, and presentations</p>
        </div>

        <!-- 4. Machine Learning -->
        <div class="skill-card" data-category="ml">
            <div class="skill-header">
                <i class="fas fa-brain"></i>
                <h3>Machine Learning</h3>
            </div>
            <p>CRISP-DM method, model analysis, and implementation</p>
        </div>

        <!-- 5. HTML5 & CSS -->
        <div class="skill-card" data-category="programming visualization">
            <div class="skill-header">
                <i class="fab fa-html5"></i>
                <h3>HTML5 & CSS</h3>
            </div>
            <p>Fundamental web programming and website building</p>
        </div>

        <!-- 7. Soft Skills -->
        <div class="skill-card" data-category="all">
            <div class="skill-header">
                <i class="fas fa-people-arrows"></i>
                <h3>Soft Skills</h3>
            </div>
            <p>Communication, Teamwork, Time Management, Adaptive, Analytical Thinking</p>
        </div>

        <!-- 8. Languages -->
        <div class="skill-card" data-category="all">
            <div class="skill-header">
                <i class="fas fa-language"></i>
                <h3>Languages</h3>
            </div>
            <p>Indonesian (Native)<br>English (Basic)</p>
        </div>
    </div>
</section>

<!--================ CERTIFICATIONS ================-->
<section class="certifications reveal-section" id="certifications">
    <h2 class="section-title">Training and Certification</h2>

    <!-- Featured BNSP Data Analyst Card -->
    <a href="{{ asset('sertifikat/Sertifikat Data Analyst BNSP.pdf') }}" target="_blank" rel="noopener noreferrer" class="featured-cert-link reveal-element">
        <div class="featured-cert">
            <div class="featured-cert-glow"></div>
            <div class="featured-cert-header">
                <div class="featured-cert-title-area">
                    <div class="award-icon"><i class="fas fa-award"></i></div>
                    <div>
                        <h3>Data Analyst Certificate</h3>
                        <p>LSP Gunadarma (Accredited by BNSP)</p>
                    </div>
                </div>
                <div class="featured-cert-meta">
                    <span class="edu-date">Sept 2025</span>
                    <span class="view-pdf-btn"><i class="fas fa-external-link-alt"></i> View PDF</span>
                </div>
            </div>
            <ul class="featured-cert-bullets">
                <li>Certified professional data analyst validation based on Indonesia's National Occupational Skills Standards (SKKNI).</li>
                <li>Competencies include: Identifying data management needs, collecting and reviewing data, validating data integrity, and determining data objects.</li>
                <li>Skilled in building Business Intelligence solutions and preparing comprehensive analysis results reports for stakeholders.</li>
            </ul>
        </div>
    </a>

    <!-- Technical Certifications Grid -->
    <h3 class="tech-certs-title reveal-element">Technical Certifications - Lepkom Gunadarma</h3>
    <div class="tech-certs-grid reveal-element">
        
        <!-- 1. HTML5 -->
        <a href="{{ asset('sertifikat/33f03857dc5dee2c31f6e327ee1be882.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fab fa-html5"></i></div>
                <div class="tech-cert-info">
                    <h4>Certificate of Building Websites Using HTML5</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Mar 2025</span>
            </div>
        </a>

        <!-- 2. Creating BI -->
        <a href="{{ asset('sertifikat/signed_c77135f35b8f547715ef6b0f500de0ba.pdf.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-chart-bar"></i></div>
                <div class="tech-cert-info">
                    <h4>Creating Business Intelligence</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">May 2025</span>
            </div>
        </a>

        <!-- 3. Data Prep -->
        <a href="{{ asset('sertifikat/aae45709590ffe358f681269128e28af.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-tools"></i></div>
                <div class="tech-cert-info">
                    <h4>Data Preparation for Business Processes</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Sept 2024</span>
            </div>
        </a>

        <!-- 4. Oracle Intermediate -->
        <a href="{{ asset('sertifikat/928f330dee7bcf17fca7b1dd25e862b0.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-database"></i></div>
                <div class="tech-cert-info">
                    <h4>Oracle For Intermediate</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Aug 2024</span>
            </div>
        </a>

        <!-- 5. SQL Server Intermediate -->
        <a href="{{ asset('sertifikat/eeae5ac97a6c56417fa60036e104e4ad.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-server"></i></div>
                <div class="tech-cert-info">
                    <h4>SQL Server For Intermediate</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Apr 2024</span>
            </div>
        </a>

        <!-- 6. Oracle Beginner -->
        <a href="{{ asset('sertifikat/80a53ee94a7a5cfc0aec0955d6072f99.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-database"></i></div>
                <div class="tech-cert-info">
                    <h4>Oracle For Beginner</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Nov 2023</span>
            </div>
        </a>

        <!-- 7. SQL Server Beginner -->
        <a href="{{ asset('sertifikat/fa42cbb2511b25dd85652b009633e201.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-server"></i></div>
                <div class="tech-cert-info">
                    <h4>SQL Server For Beginner</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Jun 2023</span>
            </div>
        </a>

        <!-- 8. DBMS -->
        <a href="{{ asset('sertifikat/62a447e1b26178e8a2dffc2d51e35e6d.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-table"></i></div>
                <div class="tech-cert-info">
                    <h4>Fundamental DBMS</h4>
                    <p>Lepkom Gunadarma</p>
                </div>
                <span class="tech-cert-date">Nov 2022</span>
            </div>
        </a>

        <!-- 9. Fundamental Web -->
        <a href="{{ asset('sertifikat/70ae71bbc9c7ffff94b590c28f5b4ac4.pdf') }}" target="_blank" rel="noopener noreferrer" class="tech-cert-link">
            <div class="tech-cert-item">
                <div class="tech-cert-icon"><i class="fas fa-code"></i></div>
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
<section class="projects reveal-section" id="projects">
    <h2 class="section-title">Project / Assignment</h2>

    <div class="project-container">

        <!-- PROJECT 1 -->
        <div class="project-card reveal-element">
            <div class="project-image-wrapper">
                <img src="{{ asset('assets/wasting.png') }}" alt="Wasting Status Prediction" class="proj-img-zoom">
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
                    View project notes <i class="fas fa-arrow-right" style="margin-left: 6px; font-size: 11px;"></i>
                </button>
            </div>
        </div>

        <!-- PROJECT 2 -->
        <div class="project-card reveal-element">
            <div class="project-image-wrapper">
                <img src="{{ asset('assets/retail.png') }}" alt="Inventory Management Website" class="proj-img-zoom">
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
                    View project notes <i class="fas fa-arrow-right" style="margin-left: 6px; font-size: 11px;"></i>
                </button>
            </div>
        </div>

    </div>
</section>

<!--================ CONTACT ================-->
<section class="contact reveal-section" id="contact">
    <h2 class="section-title">Contact Me</h2>
    <p class="contact-subtitle reveal-element">Let's connect and discuss collaboration opportunities or project ideas.</p>

    <div class="contact-container reveal-element">
        <a href="mailto:bhanu.almer26@gmail.com" class="contact-card-btn">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="contact-text-box">
                <h3>Email</h3>
                <span>bhanu.almer26@gmail.com</span>
            </div>
            <div class="contact-arrow"><i class="fas fa-chevron-right"></i></div>
        </a>

        <a href="https://www.linkedin.com/in/bhanualmer/" target="_blank" rel="noopener noreferrer" class="contact-card-btn">
            <div class="contact-icon"><i class="fab fa-linkedin"></i></div>
            <div class="contact-text-box">
                <h3>LinkedIn</h3>
                <span>Bhanu Almer Arganto</span>
            </div>
            <div class="contact-arrow"><i class="fas fa-chevron-right"></i></div>
        </a>
    </div>
</section>

<!--================ FOOTER ================-->
<footer>
    <p>© 2026 Bhanu Almer Arganto | All Rights Reserved.</p>
</footer>

<!--================ MODAL SKRIPSI ================-->
<div id="modal-skripsi" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2><i class="fas fa-file-alt" style="color: var(--primary); margin-right: 10px;"></i>Project Notes - Wasting Status Prediction</h2>
            <button class="modal-close-btn" onclick="closeModal('modal-skripsi')">&times;</button>
        </div>
        <div class="modal-body">
            <!-- Project Meta Cards -->
            <div class="modal-meta-grid">
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-tag"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Kategori</span>
                        <span class="meta-value">Tugas Akhir / Skripsi</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Role</span>
                        <span class="meta-value">ML & Full Stack Developer</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-cogs"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Metode</span>
                        <span class="meta-value">CRISP-DM / LogReg</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-database"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Database</span>
                        <span class="meta-value">MySQL Relational</span>
                    </div>
                </div>
            </div>

            <div class="modal-section-card">
                <h3><i class="fas fa-info-circle"></i> Ringkasan Skripsi</h3>
                <p>Proyek akhir/skripsi ini bertujuan untuk memetakan dan memprediksi status gizi buruk (wasting) pada balita secara otomatis menggunakan machine learning. Sistem ini menggunakan berat badan dan tinggi badan anak untuk menghitung Z-score WHO secara real-time sebelum diklasifikasikan oleh model.</p>
            </div>
            
            <div class="modal-section-card">
                <h3><i class="fas fa-brain"></i> Metodologi Machine Learning</h3>
                <ul class="modal-bullet-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Model Klasifikasi:</strong> Regresi Logistik (Logistic Regression) yang dioptimasi untuk klasifikasi multiklas (6 kategori status gizi).</div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Penyeimbangan Data (Oversampling):</strong> Menggunakan teknik <strong>SMOTE</strong> (Synthetic Minority Over-sampling Technique) karena target kategori gizi buruk, gizi lebih, dan obesitas sangat minoritas dalam dataset asli.</div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Normalisasi Fitur:</strong> StandardScaler digunakan untuk penskalaan tinggi badan dan berat badan sebelum dilatih.</div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Dataset Acuan:</strong> Menggunakan data historis balita Guatemala (<code>DATASET_GUATEMALA.csv</code>).</div>
                    </li>
                </ul>
            </div>
            
            <div class="modal-section-card">
                <h3><i class="fas fa-database"></i> Struktur Tabel Database (MySQL)</h3>
                <p>Aplikasi menggunakan skema database relasional untuk mencatat data prediksi gizi balita yang terintegrasi dengan akun pengguna:</p>
                <ul class="modal-bullet-list">
                    <li>
                        <i class="fas fa-info-circle"></i>
                        <div><strong>Tabel Prediksi:</strong> Menyimpan atribut krusial seperti tanggal lahir, tanggal tes, berat, tinggi, cara ukur (berdiri/telentang), nilai kalkulasi WHZ (Z-Score), dan kategori status gizi akhir.</div>
                    </li>
                    <li>
                        <i class="fas fa-link"></i>
                        <div><strong>Relasi Akun:</strong> Terhubung langsung dengan tabel data pengguna (User) melalui relasi kunci asing (*Foreign Key*) untuk memfasilitasi pencatatan riwayat tes secara personal.</div>
                    </li>
                </ul>
            </div>

            <div class="modal-section-card">
                <h3><i class="fas fa-calculator"></i> Algoritma Perhitungan Z-score (Python)</h3>
                <p>Kalkulasi nilai Weight-for-Height Z-score (WHZ) dilakukan secara real-time berdasarkan standar acuan WHO (World Health Organization):</p>
                <ul class="modal-bullet-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Metode Box-Cox:</strong> Menggunakan parameter L (Box-Cox power), M (median), dan S (koefisien variasi) yang disesuaikan secara dinamis dengan profil jenis kelamin dan umur balita.</div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Logika Kondisional:</strong> Jika parameter L bernilai nol, Z-score dihitung menggunakan fungsi logaritma rasio berat terhadap median. Jika parameter L tidak bernilai nol, Z-score dihitung menggunakan formula transformasi pangkat Box-Cox standar.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--================ MODAL STOCK BARANG ================-->
<div id="modal-stock" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2><i class="fas fa-file-alt" style="color: var(--primary); margin-right: 10px;"></i>Project Notes - Inventory Management Website</h2>
            <button class="modal-close-btn" onclick="closeModal('modal-stock')">&times;</button>
        </div>
        <div class="modal-body">
            <!-- Project Meta Cards -->
            <div class="modal-meta-grid">
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-tag"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Kategori</span>
                        <span class="meta-value">Tugas Penulisan Ilmiah</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Role</span>
                        <span class="meta-value">Full Stack Developer</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-sync"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Logika</span>
                        <span class="meta-value">Stock Auto-Updates</span>
                    </div>
                </div>
                <div class="meta-card">
                    <div class="meta-icon"><i class="fas fa-database"></i></div>
                    <div class="meta-content">
                        <span class="meta-label">Database</span>
                        <span class="meta-value">MySQL Relational</span>
                    </div>
                </div>
            </div>

            <div class="modal-section-card">
                <h3><i class="fas fa-info-circle"></i> Ringkasan Tugas Penulisan Ilmiah</h3>
                <p>Sistem informasi inventaris retail ini dirancang untuk mencatat pergerakan barang masuk, barang keluar, dan status stok saat ini secara terintegrasi untuk mencegah kesalahan pencatatan manual di gudang.</p>
            </div>
            
            <div class="modal-section-card">
                <h3><i class="fas fa-database"></i> Logika Bisnis Database (MySQL)</h3>
                <p>Sistem inventaris ini dirancang menggunakan lima tabel utama yang saling berelasi di MySQL untuk menjaga integritas data logistik:</p>
                <ul class="modal-bullet-list">
                    <li>
                        <i class="fas fa-archive"></i>
                        <div><strong>Tabel Master (Stock):</strong> Menyimpan data identitas barang gudang seperti nama barang, deskripsi spesifikasi, lokasi rak penyimpanan, jumlah persediaan, dan harga satuan.</div>
                    </li>
                    <li>
                        <i class="fas fa-exchange-alt"></i>
                        <div><strong>Tabel Transaksi (Masuk & Keluar):</strong> Mencatat mutasi inventaris secara berkala yang memuat informasi tanggal transaksi, keterangan pengirim/penerima, dan jumlah barang mutasi.</div>
                    </li>
                    <li>
                        <i class="fas fa-shield-alt"></i>
                        <div><strong>Proteksi Data (Cascade):</strong> Dilengkapi dengan batasan kunci asing (*Foreign Key*) bersistem <code>ON DELETE CASCADE</code> guna menjamin tidak adanya data transaksi yatim (*orphan data*) jika data master barang dihapus.</div>
                    </li>
                </ul>
            </div>

            <div class="modal-section-card">
                <h3><i class="fas fa-cogs"></i> Otomasi Stok (PHP Backend)</h3>
                <p>Perhitungan stok dikelola secara realtime di file backend <code>function.php</code>:</p>
                <ul class="modal-bullet-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Barang Masuk:</strong> Memicu query UPDATE untuk menambahkan stok baru ke tabel <code>stock</code> berdasarkan kuantitas masuk.</div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div><strong>Barang Keluar:</strong> Melakukan validasi ketersediaan barang. Jika stok mencukupi, query UPDATE mengurangi stok. Jika tidak mencukupi, sistem memicu javascript alert <code>"Stock tidak mencukupi"</code> dan membatalkan transaksi.</div>
                    </li>
                </ul>
            </div>
            
            <div class="modal-section-card">
                <h3><i class="fas fa-file-export"></i> Fitur Ekspor Laporan</h3>
                <p>Sistem memiliki file eksportir khusus (seperti <code>exportstock.php</code> dan <code>exportmasuk.php</code>) yang menggunakan HTML table wrapper untuk mencetak halaman laporan ke format PDF peramban serta file Excel secara instan.</p>
            </div>
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
