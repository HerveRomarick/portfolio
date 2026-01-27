@extends('layouts.app')

@section('content')
<h2 class="mb-4 text-center">Mes Projets</h2>

<div class="row">

    {{-- Projet 1 --}}
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <h5 class="card-title">Monitoring système avec Prometheus & Grafana</h5>
                <p class="card-text">
                    Mise en place d’un système de monitoring local pour suivre
                    l’utilisation CPU, mémoire et disque avec alertes.
                </p>
                <p><strong>Technos :</strong> Linux, Prometheus, Grafana</p>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
            </div>
        </div>
    </div>

    {{-- Projet 2 --}}
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <h5 class="card-title">API REST Kanban</h5>
                <p class="card-text">
                    Développement d’une API REST pour gérer des colonnes,
                    cartes et catégories sans interface graphique.
                </p>
                <p><strong>Technos :</strong> Node.js, Express, Sequelize</p>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
            </div>
        </div>
    </div>

    {{-- Projet 3 --}}
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
            <div class="card-body">
                <h5 class="card-title">Déploiement Docker & Docker Compose</h5>
                <p class="card-text">
                    Conteneurisation d’un site web avec Nginx, PHP, MySQL
                    et monitoring intégré.
                </p>
                <p><strong>Technos :</strong> Docker, Docker Compose, Nginx</p>
            </div>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
            </div>
        </div>
    </div>

</div>
@endsection
