<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Sistem Informasi Rumah Kost</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav>
            

        <div class="nav-container">
            <div class="logo" data-aos="zoom-in" data-aos-duration="1000">
                <span>Sistem Informasi Rumah Kost</span>
            </div>
            <div class="navbar">
                <div class="links">
                  <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <a href="http://127.0.0.1:8000">Home</a>
                  </div>
                  <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <a href="http://127.0.0.1:8000">About</a>
                  </div>
                  <div class="link contact-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <a href="http://127.0.0.1:8000/rumahkost/login">Login </a>
                  </div>
                </div>
                <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
              </div>
              
              <div class="dropdown" id="dropdown">
                <div class="links">
                  <a href="#">Home</a>
                  <a href="#">About</a>
                  <a href="#">Contact Us</a>
                  <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
                </div>
              </div>              
        </div>
    </nav>
        <section>
            <div class="main-container">
                <div class="profile">
                    <div class="profile" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900"></div>
                    <img src="{{ asset('storage/' . $profile1->foto_profile) }}" alt="Foto Profil 1">
                    <h3>{{ $profile1->nim }}</h3>
                </div>
                <div class="profile">
                    <img src="{{ asset('storage/' . $profile2->foto_profile) }}" alt="Foto Profil 2">
                    <h3>{{ $profile2->nim }}</h3>
                </div>
                <div class="image" data-aos="zoom-in-right" data-aos-duration="2500">
                    <img src="main.png" alt="">
                </div>
                <div class="content">
                    <div class="typewriter" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900"> <span></span></div>
                    <p data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">Sistem Informasi Rumah Kost adalah website yang kami buat untuk membantu pengusaha kost dan orang yang memerlukan kost dengan mudah, cepat, dan aman.</p>
                    <div class="social-links" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="1200">
                        <a href="https://github.com" ><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({offset:0});
        </script>
        <script>
            function hamburg(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(0px)"
            }
            function cancel(){
                const navbar = document.querySelector(".dropdown")
                navbar.style.transform = "translateY(-500px)"
            }
        </script>
</body>
</html>