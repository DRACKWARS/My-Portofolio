<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Dion Pratama Putra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0b0b0f; /* Warna latar sangat gelap, bukan hitam pekat */
            color: #e0e0e0;
        }

        /* Warna Aksen Custom */
        :root {
            --accent-color: #7B61FF;
            --accent-hover: #5a3edb;
            --card-bg: #14141d;
        }

        .text-accent { color: var(--accent-color); }
        .bg-accent { background-color: var(--accent-color); color: #fff; }
        
        .btn-accent {
            background-color: var(--accent-color);
            color: white;
            border-radius: 8px;
            padding: 10px 24px;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
        }
        .btn-accent:hover {
            background-color: var(--accent-hover);
            color: white;
        }

        .btn-outline-accent {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-outline-accent:hover {
            background-color: var(--accent-color);
            color: white;
        }

        /* Navigasi */
        .navbar-brand { font-weight: 700; font-size: 1.5rem; }
        .nav-link { font-weight: 400; color: #ccc !important; margin: 0 10px; }
        .nav-link:hover, .nav-link.active { color: var(--accent-color) !important; }

        /* Custom Cards */
        .custom-card {
            background-color: var(--card-bg);
            border: 1px solid #232336;
            border-radius: 16px;
            transition: transform 0.3s ease;
        }
        .custom-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent-color);
        }

        /* Gambar Hero Asimetris (Modifikasi dari desain asli) */
        .hero-img {
            border-radius: 80% 10% 70% 30% / 60% 20% 80% 70%;
            background: linear-gradient(45deg, var(--accent-color), #232336);
            padding: 10px;
            box-shadow: 0 10px 30px rgba(123, 97, 255, 0.2);
        }

        /* Ikon Lingkaran */
        .icon-circle {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 2px solid var(--accent-color);
            background-color: rgba(123, 97, 255, 0.1);
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: var(--accent-color);
        }
        .bg-purple{
            background:#6f42c1;
        }

        .modal-content{
            border-radius:18px;
        }

        .modal-body p{
            line-height:1.8;
        }

        .badge{
            font-size:.85rem;
            font-weight:600;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top" style="background-color: rgba(11, 11, 15, 0.9); backdrop-filter: blur(10px);">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list text-white fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#home">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#project">Project</a></li>
                </ul>
                <a href="#contact" class="btn btn-outline-accent">Contact Me</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="container py-5 mt-5">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 text-center text-lg-start mt-4 mt-lg-0">
                <h5 class="fw-light mb-2">Hello</h5>
                <h1 class="display-4 fw-bold mb-3">I am <span class="text-accent">Dion Pratama Putra</span></h1>
                <p class="text-secondary mb-4 lh-lg">
                    I'm a Computer Engineering Fresh graduate at Padang State Polytechnic. I am highly motivated person equipment with integrity and goal.
                    During my college year, i actively participanted in external and internal organizations which honed my soft skills such as problem-solving and working in a team.
                    I am very interested in creating websites, especially in the backend section.
                </p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 mb-4">
                    <a href="#" class="btn btn-accent"><i class="bi bi-download me-2"></i> Download CV</a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://0ih3lxtivqmpf53e.public.blob.vercel-storage.com/images/Fprofile.png" alt="Profile" class="img-fluid hero-img" style="max-width: 550px;">
            </div>
        </div>
    </section>

    <!-- Services / What I Do -->
    <section class="container py-5 my-5 text-center">
        <h6 class="text-accent mb-2">WHAT I DO</h6>
        <h2 class="fw-bold mb-5">Create A Design That's<br>Oriented Towards Client Needs</h2>
        
        <div class="row">
            <div class="">
                <div class="custom-card p-4 h-100">
                    <i class="bi bi-window display-4 text-secondary mb-3"></i>
                    <h4>Web Design</h4>
                </div>
            </div>
        </div>
    </section>


    <!-- Latest Projects (Dimodifikasi menjadi Grid) -->
    <section id="project" class="container py-5 text-center">
        <h2 class="fw-bold mb-5">Latest Project</h2>
        <div class="row g-4 text-start">

        @foreach($projects as $project)

            <div class="col-md-4">
                <div class="custom-card p-3">
                    <div class="bg-white rounded mb-3 overflow-hidden" style="height: 220px;">
                        <img src="{{ $image->image }}
                                {{  $project->thumbnail}}"
                            alt="{{ $project->name }}"
                            class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                    <h5 class="text-center">{{ $project->name }}</h5>
                    <a href="#"
                        class="btn btn-sm btn-accent mt-2 w-100"
                        data-bs-toggle="modal"
                        data-bs-target="#projectModal{{ $project->id }}">
                        View Details
                    </a>
                </div>
            </div>

            <div class="modal fade"
                id="projectModal{{ $project->id }}"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-md">

                    <div class="modal-content bg-dark text-white">

                        <div class="modal-header border-0">
                            <h5 class="modal-title">
                                {{ $project->name }}
                            </h5>

                            <button type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="modal">
                            </button>
                        </div>

                        <div class="modal-body">

                        @if($project->images->count())

                            <div id="carouselProject{{ $project->id }}"
                                class="carousel slide mb-4"
                                data-bs-ride="carousel">

                                <div class="carousel-inner rounded">

                                    @foreach($project->images as $image)

                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                            <div class="bg-white rounded d-flex justify-content-center align-items-center"
                                                style="height:250px;">

                                                <img src="{{ $image->image }}"
                                                    class="img-fluid"
                                                    style="max-height:230px; max-width:100%; object-fit:contain;">

                                            </div>

                                        </div>

                                    @endforeach

                                </div>

                                @if($project->images->count() > 1)

                                    <button class="carousel-control-prev"
                                            type="button"
                                            data-bs-target="#carouselProject{{ $project->id }}"
                                            data-bs-slide="prev">

                                        <span class="carousel-control-prev-icon"></span>

                                    </button>

                                    <button class="carousel-control-next"
                                            type="button"
                                            data-bs-target="#carouselProject{{ $project->id }}"
                                            data-bs-slide="next">

                                        <span class="carousel-control-next-icon"></span>

                                    </button>

                                @endif

                            </div>

                        @endif
                            <!-- About -->
                            <div class="mb-4">
                                <h6 class="text-uppercase text-secondary fw-bold small mb-2">
                                    About
                                </h6>

                                <p class="text-white fs-6 mb-0">
                                    {{ $project->about }}
                                </p>
                            </div>

                            <!-- Key Takeaways -->
                            <div class="mb-4">
                                <h6 class="text-uppercase text-secondary fw-bold small mb-2">
                                    Key Takeaways
                                </h6>

                                    <ul class="text-white ps-3 mb-0">

                                        @foreach(explode('|', $project->key_takeaways) as $item)

                                            <li class="mb-2">
                                                {{ trim($item) }}
                                            </li>

                                        @endforeach

                                    </ul>
                            </div>

                            <!-- Tech Stack -->
                            <div class="mb-4">

                                <h6 class="text-uppercase text-secondary fw-bold small mb-3">
                                    Tech Stack
                                </h6>

                                @foreach(explode(',', $project->tech_stack) as $tech)

                                    @php
                                        $tech = trim($tech);
                                    @endphp

                                    @switch($tech)

                                        @case('Laravel')
                                            <span class="badge bg-danger px-3 py-2 me-2 mb-2">
                                                {{ $tech }}
                                            </span>
                                        @break

                                        @case('MySQL')
                                            <span class="badge bg-primary px-3 py-2 me-2 mb-2">
                                                {{ $tech }}
                                            </span>
                                        @break

                                        @case('Bootstrap')
                                            <span class="badge bg-purple px-3 py-2 me-2 mb-2">
                                                {{ $tech }}
                                            </span>
                                        @break

                                        @case('JavaScript')
                                            <span class="badge bg-warning text-dark px-3 py-2 me-2 mb-2">
                                                {{ $tech }}
                                            </span>
                                        @break

                                        @default
                                            <span class="badge bg-secondary px-3 py-2 me-2 mb-2">
                                                {{ $tech }}
                                            </span>

                                    @endswitch

                                @endforeach

                            </div>

                            <hr class="border-secondary">

                            @if($project->repo_link)

                            <a href="{{ $project->repo_link }}"
                                target="_blank"
                                class="btn btn-outline-light w-100">

                                <i class="bi bi-github me-2"></i>
                                Open GitHub Repository

                            </a>

                            @else

                            <button
                                class="btn btn-outline-secondary w-100"
                                disabled>

                                <i class="bi bi-lock-fill me-2"></i>
                                Private Repository

                            </button>

                            @endif

                        </div>

                    </div>

                </div>

            </div>
            
        @endforeach
        </div>

        <!-- Call to Action -->
        <div class="custom-card p-4 mt-5 d-flex flex-column flex-md-row justify-content-between align-items-center text-start">
            <div>
                <h4 class="mb-1">Have any project in mind?</h4>
                <p class="text-secondary mb-0">I'm available for freelancing.</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="#" class="text-white text-decoration-none me-3">More Projects</a>
                <a href="#" class="btn btn-accent">Hire Me</a>
            </div>
        </div>
    </section>

    <!-- Why Hire Me -->
    <section class="container py-5 my-5 text-center">
        <h2 class="fw-bold mb-5">Why Hire Me</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="icon-circle"><i class="bi bi-briefcase-fill"></i></div>
                <h5 class="fw-bold">Workaholic</h5>
                <p class="text-secondary small">I'm a hard worker who is very committed to my job.</p>
            </div>
            <div class="col-md-3">
                <div class="icon-circle"><i class="bi bi-chat-dots-fill"></i></div>
                <h5 class="fw-bold">Communicative</h5>
                <p class="text-secondary small">I have broad knowledge and am always active in communicating.</p>
            </div>
            <div class="col-md-3">
                <div class="icon-circle"><i class="bi bi-people-fill"></i></div>
                <h5 class="fw-bold">Cooperative</h5>
                <p class="text-secondary small">I am able to adapt to new environments easily.</p>
            </div>
            <div class="col-md-3">
                <div class="icon-circle"><i class="bi bi-shield-check"></i></div>
                <h5 class="fw-bold">Perfectionist</h5>
                <p class="text-secondary small">I always try to provide the best quality and detail in my work.</p>
            </div>
        </div>
    </section>

        <!-- Tools & Skills -->
        <section class="container py-5 text-center">
            <h3 class="fw-bold mb-4">Tools and Skills</h3>

            <div class="d-flex justify-content-center flex-wrap gap-4">

                <!-- Visual Studio Code -->
                <div class="custom-card p-3 d-flex align-items-center justify-content-center"
                    style="width: 80px; height: 80px;">
                    <i class="devicon-vscode-plain colored fs-1"></i>
                </div>

                <!-- MySQL -->
                <div class="custom-card p-3 d-flex align-items-center justify-content-center"
                    style="width: 80px; height: 80px;">
                    <i class="devicon-mysql-original colored fs-1"></i>
                </div>

                <!-- HTML -->
                <div class="custom-card p-3 d-flex align-items-center justify-content-center"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-filetype-html text-warning fs-1"></i>
                </div>

                <!-- CSS -->
                <div class="custom-card p-3 d-flex align-items-center justify-content-center"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-filetype-css text-primary fs-1"></i>
                </div>

            </div>
        </section>

    <!-- Footer / Get In Touch -->
    <footer id="contact" class="container py-5 mt-5 border-top border-secondary">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold mb-3">Get In Touch</h3>
                <p class="text-secondary mb-4">For business or partnerships, please contact me below:</p>
                
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-telephone text-accent fs-4 me-3"></i>
                    <div>
                        <small class="text-secondary d-block">Phone</small>
                        <span>0897-3595-135</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-envelope text-accent fs-4 me-3"></i>
                    <div>
                        <small class="text-secondary d-block">Email</small>
                        <span>dionpratama153@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-md-end text-center text-secondary">
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
