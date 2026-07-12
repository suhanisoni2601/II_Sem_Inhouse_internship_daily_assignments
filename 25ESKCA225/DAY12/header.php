<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Training Portal</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f8f9fa;
        }

        .navbar{
            box-shadow:0 2px 10px rgba(0,0,0,.1);
            background-color: black;
        }

        .nav-link{
            font-weight:bold;
            transition:.3s;
            color: black !important;
            position: relative;
        }

        .nav-link:hover{
            color:#0d6efd !important;
        }

        .nav-link::after{
             content: "";
             position: absolute;
             left: 0;
             bottom: 0;
             width: 0%;
             height: 2px;
             background-color: #0d6efd;
             transition: 0.3s ease;
        }

        .hero{
            background:linear-gradient(rgba(13,110,253,.8),rgba(13,110,253,.8)),
            url("https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1600&auto=format&fit=crop");
            background-size:cover;
            background-position:center;
            color:white;
            padding:120px 0;
            text-align:center;
        }

        .hero h1{
            font-size:55px;
            font-weight:bold;
        }

        .card{
            border: solid 2px #4d535b;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-10px);
            box-shadow:0 10px 25px rgba(69, 54, 56, 0.2);
        }

        

        

        footer{
            background:#212529;
            color:white;
            text-align:center;
            padding:20px;
        }

    </style>

</head>
<body>

<!-- Navbar -->

<header class="bg-white">

<div class="container">

<div class="d-flex justify-content-between align-items-center py-3">

<img src="https://static.vecteezy.com/system/resources/thumbnails/043/212/462/small/logo-design-for-a-company-featuring-a-central-building-structure-within-a-minimalist-and-industrial-theme-a-minimalist-logo-incorporating-elements-of-industrial-design-free-vector.jpg" style=" width:90px; height:80px;">

<nav >

<ul class="nav" style="gap:60px; ">

<li class="nav-item">
<a href="index.php" class="nav-link active">Home</a>
</li>

<li class="nav-item">
<a href="aboutus.html" class="nav-link active">About Us</a>
</li>

<li class="nav-item">
<a href="ourservices.html" class="nav-link active">Services</a>
</li>

<li class="nav-item">
<a href="contactus.html" class="nav-link active">Contact Us</a>
</li>

</ul>

</nav>

<a href="login.php" class="btn btn-outline-primary">
Login
</a>

</div>

</div>

</header>

<!-- Hero -->

<section class="hero">

<div class="container">

<h1>Industrial Training Portal</h1>

<p class="lead mt-4">
Enhance Your Skills, Build Real Projects and Get Industry Ready.
</p>

<a href="https://www.mystudentclub.com" class="btn btn-light btn-lg mt-3">
Get Started
</a>

</div>

</section>

<!-- Features -->

<section class="container py-5">

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card text-center shadow p-4 h-100">
                <h3>Industrial Training</h3>
                <p>
                    Gain practical knowledge with expert guidance and real-world experience.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow p-4 h-100">
                <h3>Live Projects</h3>
                <p>
                    Work on real-time projects to improve your technical and problem-solving skills.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center shadow p-4 h-100">
                <h3>Placement Support</h3>
                <p>
                    Get resume guidance, interview preparation and career support.
                </p>
            </div>
        </div>

    </div>

</section>

