<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amelia Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo" data-aos="zoom-in" data-aos-duration="1000">
                <span>Amelia</span>
            </div>
            <div class="links">
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><a href="{{ route('home') }}">Home</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><a href="#">About</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><a href="#">Skills</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a href="#">Services</a></div>
                <div class="link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"><a href="#">Blogs</a></div>
                <div class="link contact-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600"><a href="#">Contact Us</a></div>
            </div>
            <i class="fa-solid fa-bars hamburg" onclick="hamburg()"></i>
        </div>
        <div class="dropdown">
            <div class="links">
                <a href="{{ route('home') }}">Home</a>
                <a href="#">About</a>
                <a href="#">Skills</a>
                <a href="#">Services</a>
                <a href="#">Blogs</a>
                <a href="#">Contact Us</a>
                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </nav>

    <section>
        <div class="main-container">
            <div class="image" data-aos="zoom-in-right" data-aos-duration="2500">
                <img src="{{ asset('images/main.png') }}" alt="Main Image"> <!-- Adjust the path for your image -->
            </div>
            <div class="content">
                <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">Hey I'm <span>Amelia</span></h1>
                <div class="typewriter" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="900">I'm a <span></span></div>
                <p data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, perferendis quas consectetur possimus maxime consequatur cupiditate eos dolorum molestias praesentium error exercitationem rem labore illo, in dolor, odio corporis excepturi?
                </p>
                <div class="social-links" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="1200">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
                <div class="btn" data-aos="zoom-out-left" data-aos-duration="1000" data-aos-delay="1300">
                    <button>Download CV</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0});
    </script>
    <script>
        function hamburg() {
            const navbar = document.querySelector(".dropdown");
            navbar.style.transform = "translateY(0px)";
        }

        function cancel() {
            const navbar = document.querySelector(".dropdown");
            navbar.style.transform = "translateY(-500px)";
        }
    </script>
</body>
</html>