<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Bintangg</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <a href="#" class="logo">Bin <span>.Tangs</span> </a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navlist">
            <li><a href="#"></a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

    </header>

    <section class="hero" id="home">
        <div class="main-content" data-aos="fade-in">
            <h4>Helloo teman teman!</h4>
            <h1>Nama saya <span>Bintang Novian Pramesrawan !</span></h1>
            <p>saya lahir di bogor pada tanggal 21 November 2007, Saya anak pertama dari 2 bersaudara.</p>
            <div class="social">
                <a href="https://www.instagram.com/binznvn_/" target="_blank"><i class="ri-instagram-fill"></i></a>
                <a href="tel:+6289638496338"><i class="ri-whatsapp-fill"></i></a>
                <a href="https://maps.app.goo.gl/hMCyZRkLiyXjbnj7A" target="_blank"><i class="ri-map-pin-user-fill"></i></a>
                <a href="mailto:bintangnovianpramesrawan@smkwikrama.sch.id"><i class="ri-mail-open-fill"></i>></a>
            </div>

            <div class="main-btn">
                <a href="#about" class="btn">Me</a>
                <a href="#contact" class="btn btn2">Contact Me</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="asset/asset/binnn.jpg">
        </div>
        <div class="about-text" data-aos="zoom-in-up">
            <h2>Saya calon<span> Front-end <br> & back-end develover</span>
            </h2>
            <div class="exp-area">
                <p class="exp"></p>
                <p class="exp">
                    spesialis :
                    <span>Back-end</span>
                </p>
                <p class="exp">
                    Tempat tinggal :
                    <span>Tajur, Bogor Timur, Kota Bogor.</span>
                </p>
                <p class="exp">
                    Email :
                    <span>bintangnovianpramesrawan@gmail.com</span>
                </p>
                <p class="exp">
                    No.telepon :
                    <span>0896-3849-6338</span>
                </p>
            </div>
            <a href="#portofolio" class="btn">project</a>
        </div>
    </section>

    

    <section class="portofolio" id="portofolio">
        <div class="center-text" data-aos="zoom-in-down">
            <h2>My<span> Portofolio </span></h2>
        </div>
        <div class="portofolio-content" data-aos="zoom-in-up">
            <div class="row">
                <img src="asset/asset/dicoding 1.png" class="bisa">
                <div class="main-row">
                
                    
                    <h4>Dicoding Pemrograman Dasar</h4>
                </div>
            </div>
            <div class="row">
                <img src="asset/asset/dicoding frontend.png" class="bisa">
                <div class="main-row">
                    <h4>Dicoding FrontEnd Pemula</h4>
                </div>
            </div>
            <div class="row">
                <img src="asset/asset/Bahanbakar.png" class="bisa">
                <div class="main-row">
                    <h4>Project Bahan Bakar<h4>
                </div>
            </div>
            <div class="row">
                <img src="asset/asset/rental.png" class="bisa">
                <div class="main-row">
                    <h4>Project Rental</h4>
                </div>
            </div>
            <div class="row">
                <img src="asset/asset/Dasis.png" class="bisa">
                <div class="main-row">
                    <h4>Project Data Siswa</h4>
                </div>
            </div>
            <div class="row">
                <img src="asset/asset/kasir.png" class="bisa">
                <div class="main-row">
                    <h4>Project Kasir</h4>
                </div>
            </div>
            </div>

        
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="center-text" data-aos="zoom-in-down">
            <h2>Contact<span> Me </span></h2>
        </div>
        <div class="contact-form" data-aos="zoom-in-up">
            <form action="">
                <input type="text" placeholder="Your-name" required>
                <input type="email" placeholder="Email Address.." required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..." required></textarea>
                <input type="submit" name="" value="Send Message" class="send-btn">
            </form>
        </div>
    </section>

    <div class="footer">
        <div class="copyright">
            <p>&copy; copyright, 2024, Bintang Novian, All Right Reserved!</p>
        </div>
        <a href="#home" class="scroll-top">
            <i class="ri-arrow-up-double-fill"></i>
        </a>
    </div>

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 250,
        duration: 1000,
      });
    </script>
    
</body>
</html>