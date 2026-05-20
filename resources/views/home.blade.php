<!DOCTYPE html>
<html>

<head>

<title>Richard Portfolio</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body
class="text-light"
style="
background:
linear-gradient(
135deg,
#0f172a,
#111827,
#1e293b
);
min-height:100vh;
">

<nav class="navbar navbar-expand-lg navbar-dark bg-black shadow">

<div class="container">

<a class="navbar-brand fw-bold" href="#">
Richard Portfolio
</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#nav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="nav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#about">
About
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#skills">
Skills
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#projects">
Projects
</a>
</li>

<li class="nav-item">

<a
href="/login"
class="btn btn-primary ms-3">

Admin Login

</a>

</li>

</ul>

</div>

</div>

</nav>

<div class="container">

<div class="row align-items-center min-vh-100">

<div class="col-lg-6">

<h1 class="display-3 fw-bold">

Richard Pangihutan Simanjuntak

</h1>

<p class="lead">

Mahasiswa Informatika • Web Developer • Laravel Developer

</p>

<a href="#projects"
class="btn btn-primary btn-lg">

View Projects

</a>

</div>

<div class="col-lg-6 text-center">

<img
src="{{ asset('images/profile.jpg') }}"
class="rounded-circle shadow"
width="400">

</div>

</div>

</div>

<!-- ABOUT SECTION -->

<section
id="about"
class="container py-5">

<div class="row align-items-center">

<div class="col-lg-5 text-center">

<img
src="https://picsum.photos/500"
class="img-fluid rounded shadow">

</div>

<div class="col-lg-7">

<h2 class="mb-4">

About Me

</h2>

<p class="lead">

Saya adalah mahasiswa Informatika yang fokus pada
pengembangan website modern menggunakan Laravel,
Bootstrap, Tailwind CSS, dan teknologi web lainnya.

</p>

<p>

Saya suka membangun aplikasi web,
dashboard admin, dan sistem informasi
yang responsive serta dapat dihosting
di berbagai platform.

</p>

<a
href="#projects"
class="btn btn-outline-light">

See My Projects

</a>

</div>

</div>

</section>

<!-- SKILLS SECTION -->

<section
id="skills"
class="container py-5">

<h2 class="text-center fw-bold mb-5 display-6">

My Skills

</h2>

<div class="row g-4">

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>Laravel</h4>

<p>Backend Framework</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>PHP</h4>

<p>Server Side Language</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>Bootstrap</h4>

<p>Responsive UI</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>Tailwind CSS</h4>

<p>Modern Styling</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>JavaScript</h4>

<p>Interactive Website</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>MySQL</h4>

<p>Database Management</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>Git & GitHub</h4>

<p>Version Control</p>

</div>

</div>

<div class="col-md-3 col-6">

<div class="skill-box text-center p-4">

<h4>UI/UX Design</h4>

<p>Modern Interface</p>

</div>

</div>

</div>

</section>
<!-- PROJECT SECTION -->

<section
id="projects"
class="container py-5">

<h2 class="text-center fw-bold mb-5 display-6">

My Projects

</h2>

<div class="row">

<div class="row g-4">

<!-- PROJECT 1 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
🌐
</div>

<h4 class="fw-bold text-light">
Portfolio Website
</h4>

<p class="text-secondary">
Website portfolio modern dengan tampilan responsive dan animasi interaktif.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

<!-- PROJECT 2 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
🛒
</div>

<h4 class="fw-bold text-light">
E-Commerce Website
</h4>

<p class="text-secondary">
Website toko online lengkap dengan cart, checkout, dan payment system.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

<!-- PROJECT 3 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
📚
</div>

<h4 class="fw-bold text-light">
Library Management System
</h4>

<p class="text-secondary">
Sistem informasi perpustakaan untuk mengelola peminjaman dan pengembalian buku.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

<!-- PROJECT 4 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
🔐
</div>

<h4 class="fw-bold text-light">
Login Authentication
</h4>

<p class="text-secondary">
Sistem login dan register menggunakan Laravel Authentication.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

<!-- PROJECT 5 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
📊
</div>

<h4 class="fw-bold text-light">
Admin Dashboard
</h4>

<p class="text-secondary">
Dashboard admin modern dengan statistik data dan chart analytics.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

<!-- PROJECT 6 -->
<div class="col-lg-4 col-md-6">

<div class="card project-card h-100 p-4">

<div class="project-icon mb-4">
☁️
</div>

<h4 class="fw-bold text-light">
Weather Application
</h4>

<p class="text-secondary">
Aplikasi cuaca realtime menggunakan API dan JavaScript.
</p>

<div class="mt-auto">

<a href="#" class="btn btn-outline-primary w-100">
View Details
</a>

</div>

</div>

</div>

</div>

</div>

</section>


<!-- CONTACT SECTION -->

<section
id="contact"
class="container py-5">

<h2 class="text-center fw-bold mb-5 display-6">

Contact Me

</h2>

<div class="row justify-content-center">

<div class="col-lg-7">

<div class="contact-card p-5">

<form>

<div class="mb-4">

<label class="form-label fw-semibold">

Your Name

</label>

<input
type="text"
class="form-control custom-input"
placeholder="Enter your name">

</div>

<div class="mb-4">

<label class="form-label fw-semibold">

Email Address

</label>

<input
type="email"
class="form-control custom-input"
placeholder="Enter your email">

</div>

<div class="mb-4">

<label class="form-label fw-semibold">

Message

</label>

<textarea
class="form-control custom-input"
rows="5"
placeholder="Write your message"></textarea>

</div>

<button
class="btn btn-primary w-100 py-3 fw-bold">

Send Message

</button>

</form>

</div>

</div>

</div>

</section>


<style>

.skill-box{

background:
rgba(255,255,255,0.05);

border:
1px solid rgba(255,255,255,0.1);

border-radius:20px;

backdrop-filter:
blur(10px);

transition:0.3s;

height:100%;

}

.skill-box:hover{

transform:
translateY(-10px);

background:
rgba(59,130,246,0.15);

box-shadow:
0 15px 35px rgba(0,0,0,0.3);

}

.skill-box h4{

font-weight:bold;

margin-bottom:10px;

}

.skill-box p{

color:#9ca3af;

margin:0;

}   

.project-card{

background:
rgba(255,255,255,0.05);

border:
1px solid rgba(255,255,255,0.1);

border-radius:25px;

backdrop-filter:
blur(12px);

transition:0.4s;

display:flex;

flex-direction:column;

height:100%;

}

.project-card:hover{

transform:
translateY(-10px);

box-shadow:
0 20px 40px rgba(0,0,0,0.4);

background:
rgba(59,130,246,0.08);

}

.project-icon{

font-size:50px;

margin-bottom:20px;

}