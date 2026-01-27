@extends('layouts.app')

@section('content')
<section id="tools" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Outils & Monitoring</h1>

        <p class="lead text-center mb-5">Mon niveau de maîtrise pour les outils de monitoring, analyse réseau et cloud.</p>

        <div class="row justify-content-center">
            <!-- Wireshark -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Wireshark-Logo.wine.png') }}" alt="Wireshark" width="100" class="mb-3">
                    <h5>Wireshark</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Analyse de paquets réseau avancée.</p>
                </div>
            </div>

            <!-- Nmap -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/nmap.jpeg') }}" alt="Nmap" width="100" class="mb-3">
                    <h5>Nmap</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Scan de ports et découverte réseau.</p>
                </div>
            </div>

            <!-- Nagios -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Nagios.webp') }}" alt="Nagios" width="100" class="mb-3">
                    <h5>Nagios</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Supervision d'infrastructure IT.</p>
                </div>
            </div>

            <!-- Docker Desktop -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/docker.webp') }}" alt="Docker Desktop" width="100" class="mb-3">
                    <h5>Docker Desktop</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Conteneurisation locale.</p>
                </div>
            </div>

            <!-- AWS -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Amazon_Web_Services_Logo.svg.png') }}" alt="AWS" width="100" class="mb-3">
                    <h5>AWS</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Services cloud (EC2, S3, etc.).</p>
                </div>
            </div>

            <!-- Power BI -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Microsoft-Power-BI.jpg') }}" alt="Power BI" width="100" class="mb-3">
                    <h5>Power BI</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Visualisation de données (bases).</p>
                </div>
            </div>

            <!-- Grafana -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/grafana.avif') }}" alt="Grafana" width="100" class="mb-3">
                    <h5>Grafana</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Dashboards de monitoring.</p>
                </div>
            </div>

            <!-- Prometheus -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Prometheus.png') }}" alt="Prometheus" width="100" class="mb-3">
                    <h5>Prometheus</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Collecte et alerting de métriques.</p>
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
        filter: brightness(0.8);
    }
    .skill-card:hover img {
        filter: brightness(1) drop-shadow(0 0 15px #7ee787);
    }
</style>
@endsection
