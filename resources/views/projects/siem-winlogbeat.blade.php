@extends('layouts.app')

@section('content')
<section class="py-5 bg-dark text-light">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Mise en Place de Winlogbeat avec la Stack ELK</h1>

        <p class="lead text-center mb-5 text-muted">
            Solution de collecte et centralisation des logs Windows pour supervision en cybersécurité.
        </p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-info-circle me-2"></i>1. Introduction</h4>
                    <h5 class="text-light mb-2">Objectif du projet</h5>
                    <p class="small">
                        L'objectif est de mettre en place une solution de collecte et de centralisation des journaux Windows à l'aide de Winlogbeat, intégrée à une stack ELK (Elasticsearch, Logstash, Kibana).
                        Cette configuration permet de surveiller les événements système Windows dans un contexte de cybersécurité et de supervision, en centralisant les logs pour une analyse facile.
                    </p>
                    <h5 class="text-light mb-2">Environnement utilisé</h5>
                    <ul class="small text-light">
                        <li>Système client : Windows</li>
                        <li>Outil de collecte : Winlogbeat 9.2.2</li>
                        <li>Serveur ELK : Elasticsearch, Logstash, Kibana</li>
                        <li>Réseau local (LAN)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/projects/winlogbeat-architecture.png') }}" alt="Schéma architecture Winlogbeat ELK" class="img-fluid rounded shadow border border-green">
                <p class="text-center small text-muted mt-2">Schéma de l'architecture : Winlogbeat → Logstash → Elasticsearch → Kibana</p>
            </div>
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4 mb-5">
            <h4 class="text-green mb-3"><i class="fas fa-sitemap me-2"></i>2. Architecture de la Solution</h4>
            <p class="small">
                Le fonctionnement repose sur un flux simple : Winlogbeat collecte les logs Windows (Security, System, Application) et les envoie vers Logstash via le port 5044. Logstash traite et transmet les données à Elasticsearch. Kibana permet la visualisation.
            </p>
            <p class="small text-muted">Adresse IP du serveur ELK + ports utilisés (ex: 5044 pour Logstash input).</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/projects/winlogbeat-install.png') }}" alt="Installation Winlogbeat Windows" class="img-fluid rounded shadow border border-green">
                <p class="text-center small text-muted mt-2">Extraction archive Winlogbeat sous Windows</p>
            </div>
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-download me-2"></i>3. Installation de Winlogbeat sur Windows</h4>
                    <p class="small">
                        Téléchargement depuis Elastic.co sous forme ZIP. Extraction dans C:\Program Files\Winlogbeat\.
                        Correction d'une erreur de dossier imbriqué en déplaçant les fichiers.
                    </p>
                    <h5 class="text-light mb-2">4. Configuration de Winlogbeat</h5>
                    <p class="small">
                        Édition de winlogbeat.yml pour collecter channels (System, Security, Application) et output vers Logstash (hosts: ["ip:5044"]).
                    </p>
                </div>
            </div>
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4 mb-5">
            <h4 class="text-green mb-3"><i class="fas fa-play-circle me-2"></i>5. Lancement de Winlogbeat</h4>
            <p class="small">
                Lancement en mode administrateur via PowerShell : .\winlogbeat.exe -e.
                Les logs confirment la collecte et l'envoi des événements.
            </p>
            <h5 class="text-light mb-2">6. Problème Rencontré et Résolution</h5>
            <p class="small">
                Erreur : "connection refused".
                Analyse : Logstash non à l'écoute sur 5044.
                Solution : Vérification service Logstash, redémarrage, vérification port. Correction réussie.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card bg-darker border border-secondary shadow-lg p-4">
                    <h4 class="text-green mb-3"><i class="fas fa-check me-2"></i>7. Test de la Connexion Winlogbeat → Logstash</h4>
                    <p class="small">
                        Commande de test : .\winlogbeat.exe test output -e.
                        Résultat : "talk to server... OK" – Connexion confirmée.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/projects/kibana-logs.png') }}" alt="Visualisation logs Kibana" class="img-fluid rounded shadow border border-green">
                <p class="text-center small text-muted mt-2">Kibana Discover avec logs Winlogbeat</p>
            </div>
        </div>

        <div class="card bg-darker border border-secondary shadow-lg p-4 mb-5">
            <h4 class="text-green mb-3"><i class="fas fa-eye me-2"></i>8. Visualisation des Logs dans Kibana</h4>
            <p class="small">
                Accès Kibana via http://ip:5601.
                Index "winlogbeat-*" avec période "Last 15 minutes". Les événements Windows sont affichés pour analyse.
            </p>
            <h5 class="text-light mb-2">9. Sécurité et Remarques</h5>
            <p class="small">
                Communication sans TLS (acceptable en test, à sécuriser en prod avec SSL). Suggestion : Ajouter Sysmon pour logs sécurité enrichis.
            </p>
            <h5 class="text-light mb-2">10. Conclusion</h5>
            <p class="small">
                Projet a permis de comprendre ELK, mettre en place collecte centralisée logs Windows, et acquérir compétences en installation, config et dépannage.
            </p>
        </div>

        <div class="text-center mt-5">
            <a href="{{ asset('pdf/projet-siems-winlogbeat-elk.pdf') }}" download class="btn btn-cyber btn-lg me-3">
                <i class="fas fa-file-pdf me-2"></i> Télécharger le PDF (8 pages)
            </a>
            <a href="/projects/homelab-pentest" class="btn btn-outline-light btn-lg">
                ← Retour à Homelab
            </a>
        </div>
    </div>
</section>

<style>
    .shadow-lg:hover { box-shadow: 0 0 30px rgba(126, 231, 135, 0.4) !important; border-color: #7ee787; transition: all 0.3s; }
    .btn-cyber { background-color: #238636; color: white; }
    .btn-cyber:hover { background-color: #2ea043; }
    .bg-darker { background-color: #0d1117; }
</style>
@endsection
