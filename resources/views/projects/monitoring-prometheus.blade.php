@extends('layouts.app')

@section('content')
<section class="py-5 bg-dark text-light">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Projet Monitoring Local avec Prometheus, Windows Exporter et Grafana</h1>

        <p class="lead text-center mb-5 text-muted">
            Mise en place d'une solution de supervision locale pour suivre les ressources système (CPU, mémoire, disque) en temps réel.
        </p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-info-circle me-2"></i>1. Introduction</h4>
                    <p class="small">
                        Objectif : Mettre en place une solution de supervision locale pour suivre les ressources système de mon PC personnel. Grâce à l'installation de Prometheus, Windows Exporter et Grafana, j'ai pu collecter, visualiser et surveiller en temps réel les métriques de base telles que le CPU, la mémoire vive et l'utilisation du disque.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/image/grafana.avif') }}" alt="Introduction au projet" class="img-fluid rounded shadow border border-green" style="height: 250px; object-fit: cover;">
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <img src="{{ asset('image/monitoring/Picture1.png') }}" alt="Environnement de travail" class="img-fluid rounded shadow border border-green" style="height: 250px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-cogs me-2"></i>2. Environnement de travail</h4>
                    <ul class="small text-light">
                        <li><strong>Système d'exploitation :</strong> Windows 10 / 11</li>
                        <li><strong>Outils utilisés :</strong> Prometheus, Windows Exporter, Grafana</li>
                        <li><strong>Type d'installation :</strong> Locale (tout sur ma propre machine)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4 mb-5">
            <h4 class="text-green mb-3"><i class="fas fa-download me-2"></i>3. Installation et configuration</h4>
            <h5 class="text-light mb-2">3.1 Installation de Prometheus</h5>
            <p class="small text-muted">Téléchargement depuis https://prometheus.io, extraction dans C:\Prometheus, configuration prometheus.yml, lancement avec prometheus.exe --config.file=prometheus.yml.</p>
            <h5 class="text-light mb-2">3.2 Installation de Windows Exporter</h5>
            <p class="small text-muted">Téléchargement depuis GitHub, lancement windows_exporter.exe, vérification URL localhost:9182/metrics.</p>
            <h5 class="text-light mb-2">3.3 Installation de Grafana</h5>
            <p class="small text-muted">Téléchargement depuis https://grafana.com, installation standard Windows, accès http://localhost:3000, ajout Prometheus comme data source.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-chart-line me-2"></i>4. Création du dashboard Grafana</h4>
                    <h5 class="text-light mb-2">4.1 Panels intégrés</h5>
                    <p class="small text-muted">Dashboard "Monitoring Local PC" avec :</p>
                    <ul class="small text-light">
                        <li>Utilisation CPU (Graphique + Jauge)</li>
                        <li>Mémoire RAM utilisée</li>
                        <li>Espace disque disponible</li>
                        <li>Taux de charge CPU par cœur</li>
                    </ul>
                    <h5 class="text-light mb-2">4.2 Design et lisibilité</h5>
                    <p class="small text-muted">Panels pour memory user, panel cpu user, disk space. Utilisation de métriques comme windows_memory_cache_bytes, process_cpu_seconds_total, windows_logical_disk_idle_seconds_total.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('image/monitoring/Taux de charge CPU .png') }}" alt="Dashboard Grafana" class="img-fluid rounded shadow border border-green">
            </div>
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4 mb-5">
            <h4 class="text-green mb-3"><i class="fas fa-bell me-2"></i>5. Alertes et notifications</h5>
            <h5 class="text-light mb-2">5.1 Seuils d'alerte définis</h5>
            <table class="table table-dark table-bordered small">
                <thead>
                    <tr>
                        <th>Ressource</th>
                        <th>Condition</th>
                        <th>Seuil</th>
                        <th>Justification</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CPU</td>
                        <td>avg(rate(process_cpu_seconds_total[1m])) > 0.8</td>
                        <td>&gt; 80%</td>
                        <td>Charge élevée à surveiller</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>windows_os_physical_memory_free_bytes < 1Go</td>
                        <td>&lt; 1 Go</td>
                        <td>Risque de saturation mémoire</td>
                    </tr>
                    <tr>
                        <td>Disque</td>
                        <td>windows_logical_disk_free_bytes < 5Go</td>
                        <td>&lt; 5 Go</td>
                        <td>Manque d'espace sur le disque</td>
                    </tr>
                </tbody>
            </table>
            <h5 class="text-light mb-2">5.2 Configuration des alertes</h5>
            <p class="small text-muted">Création dans Prometheus ou Grafana Alerts.</p>
            <h5 class="text-light mb-2">5.3 Notification par email (ou Slack)</h5>
            <p class="small text-muted">Configuration canal SMTP, test d'alerte (simulation charge CPU).</p>
        </div>

        <div class="text-center mb-5">
            <img src="{{ asset('image/monitoring/Picture13.png') }}" alt="Exemple d'alerte" class="img-fluid rounded shadow border border-green" style="max-width: 600px;">
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4">
            <h4 class="text-green mb-3"><i class="fas fa-check-circle me-2"></i>6. Conclusion</h4>
            <p class="small text-muted">
                Grâce à ce projet, j'ai mis en place une solution complète de monitoring local. Cette infrastructure me permet de surveiller l'état de santé de mon PC en temps réel, d'anticiper les problèmes de ressources, et d'améliorer la visibilité sur l'utilisation du système. Malgré une difficulté rencontrée pour conclure, ce projet m'a permis de mieux comprendre les outils de monitoring open-source.
            </p>
        </div>
        <br>
    @php
    $pdfPath = public_path('image/pdf/projet-monitoring-prometheus-grafana.pdf');
@endphp

@if (file_exists($pdfPath))
    <a href="{{ asset('image/pdf/projet-monitoring-prometheus-grafana.pdf') }}"
       download
       class="btn btn-lg btn-cyber shadow">
        <i class="fas fa-file-pdf me-2"></i>
        Télécharger le PDF du projet
        ({{ number_format(filesize($pdfPath) / 1024 / 1024, 1) }} Mo)
    </a>
@else
    <p class="text-danger">PDF indisponible</p>
@endif


        <div class="text-center mt-5">
            <a href="/projects/homelab-pentest" class="btn btn-outline-light btn-lg">
                <i class="fas fa-arrow-left me-2"></i> Retour à Homelab Pentest
            </a>
        </div>
    </div>
</section>

<style>
    .shadow-lg:hover { box-shadow: 0 0 30px rgba(126, 231, 135, 0.4) !important; border-color: #7ee787; transition: all 0.3s; }
    .text-green { color: #7ee787 !important; }
    .border-green { border-color: #7ee787 !important; }
    .btn-green { background-color: #238636; color: white; }
    .bg-darker { background-color: #0d1117; }

.btn-cyber {
    background-color: #238636;
    color: white;
    border: none;
    transition: all 0.3s ease;
}
.btn-cyber:hover {
    background-color: #2ea043;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(46, 160, 67, 0.4);
}

</style>
@endsection
