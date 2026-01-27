@extends('layouts.app')

@section('content')
<section id="programming" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Programmation & Scripting</h1>

        <p class="lead text-center mb-5">Mon niveau de maîtrise en langages et frameworks de développement.</p>

        <div class="row justify-content-center">
            <!-- Python -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/208-2081301_python-programming-language-computer-programming-computer-python-programming.png') }}" alt="Python" width="100" class="mb-3">
                    <h5>Python</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Scripting, automation, FastAPI.</p>
                </div>
            </div>

            <!-- Bash -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/bashfull_colored_dark.svg') }}" alt="Bash" width="100" class="mb-3">
                    <h5>Bash</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Scripts d'administration Linux.</p>
                </div>
            </div>

            <!-- PHP -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/PHP-logo.svg.png') }}" alt="PHP" width="100" class="mb-3">
                    <h5>PHP</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Développement web backend.</p>
                </div>
            </div>

            <!-- Node.js -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/nodejs-1-logo-png-transparent.png') }}" alt="Node.js" width="100" class="mb-3">
                    <h5>Node.js</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">API REST, Express, JavaScript backend.</p>
                </div>
            </div>

            <!-- FastAPI -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/fastAPI.png') }}" alt="FastAPI" width="100" class="mb-3">
                    <h5>FastAPI</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">API modernes en Python.</p>
                </div>
            </div>

            <!-- Symfony -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Symfony.jpg') }}" alt="Symfony" width="100" class="mb-3">
                    <h5>Symfony</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Framework PHP robuste.</p>
                </div>
            </div>

            <!-- Laravel -->
            <div class="col-md-4 offset-md-2 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/laravel-1-logo-png-transparent.png') }}" alt="Laravel" width="100" class="mb-3">
                    <h5>Laravel</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Framework PHP élégant – ce portfolio est fait avec !</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .stars { font-size: 1.4rem; }
    .skill-card {
        background-color: #161b22;
        border: 1px solid #30363d;
        transition: all 0.4s ease;
    }
    .skill-card:hover {
        transform: scale(1.15) translateY(-10px) rotate(2deg);
        box-shadow: 0 0 30px rgba(126, 231, 135, 0.6);
        border-color: #7ee787;
    }
    .skill-card img {
        transition: all 0.4s ease;
        filter: brightness(0.9);
    }
    .skill-card:hover img {
        filter: brightness(1) drop-shadow(0 0 15px #7ee787);
    }
</style>
@endsection
