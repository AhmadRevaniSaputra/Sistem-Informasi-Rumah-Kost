<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Rumah Kost</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background-image: url('images/download.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header-shortcuts {
    display: flex;
    justify-content: center; /* Center the items horizontally */
    align-items: center;     /* Align the items vertically */
    padding: 10px 20px;
    background-color: #dcdcdc; /* Light gray background for the header */
}

.header-shortcuts {
    display: flex;
    justify-content: center; /* Center the items horizontally */
    align-items: center;     /* Align the items vertically */
    padding: 10px 0;
    background-color: #dcdcdc; /* Light gray background for the header */
}

.header-shortcuts a {
    color: #000000; /* Black text color */
    text-decoration: none;
    font-size: 16px;
    margin: 0 15px; /* Space between each link */
    display: flex;
    align-items: center; /* Align icon and text vertically */
}

.header-shortcuts {
    display: flex;
    justify-content: center; /* Center the items horizontally */
    align-items: center;     /* Align the items vertically */
    padding: 10px 20px;
    background-color: #dcdcdc; /* Light gray background for the header */
}

.header-shortcuts {
    display: flex;
    justify-content: center; /* Center the items horizontally */
    align-items: center;     /* Align the items vertically */
    padding: 10px 20px;
    background-color: #dcdcdc; /* Light gray background for the header */
}

.header-shortcuts a {
    color: #000000; /* Black text color */
    text-decoration: none;
    font-size: 16px;
    margin: 0 20px; /* Space between each link */
    display: flex;
    align-items: center; /* Align icon and text vertically */
}

.header-shortcuts a:hover {
    color: #000000; /* Keep the color black on hover */
}

.header-shortcuts i {
    margin-right: 10px; /* Space between icon and text */
    font-size: 18px; /* Adjust icon size */
}
    </style>
</head>
<body>
    <div class="header-shortcuts text-center">
        <a href="#"><i class="fas fa-mobile-alt"></i> Download App</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Sewa Kos</a>
        <a href="#"><i class="fas fa-bullhorn"></i> Promosikan Iklan Anda</a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi Rumah Kost</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fasilitas">Fasilitas Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kamar">Kamar Kost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kategori">Kategori</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div>
            <h1>Selamat Datang di Sistem Informasi Rumah Kost</h1>
            <p>Temukan kamar kost yang sesuai dengan kebutuhan Anda</p>
        </div>
    </section>

    <section id="fasilitas" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fasilitas Kost</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Fasilitas 1">
                        <div class="card-body">
                            <h5 class="card-title">Fasilitas 1</h5>
                            <p class="card-text">Deskripsi fasilitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Fasilitas 2">
                        <div class="card-body">
                            <h5 class="card-title">Fasilitas 2</h5>
                            <p class="card-text">Deskripsi fasilitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Fasilitas 3">
                        <div class="card-body">
                            <h5 class="card-title">Fasilitas 3</h5>
                            <p class="card-text">Deskripsi fasilitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kamar" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Kamar Kost</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Kamar Kost 1">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Kost 1</h5>
                            <p class="card-text">Rp 1.500.000 / bulan</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Kamar Kost 2">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Kost 2</h5>
                            <p class="card-text">Rp 2.000.000 / bulan</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Kamar Kost 3">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Kost 3</h5>
                            <p class="card-text">Rp 2.500.000 / bulan</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Sistem Informasi Rumah Kost. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
