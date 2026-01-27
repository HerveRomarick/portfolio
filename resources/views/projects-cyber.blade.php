@extends('layouts.app')

@section('content')
<section class="py-5 bg-dark text-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-green">Mes Projets Cybersécurité</h1>
            <p class="lead text-muted mt-3">
                Travaux pratiques en pentesting, détection d'intrusions, hardening réseau et développement d'outils personnalisés.
            </p>
        </div>

        <!-- Timeline des projets -->
        <div class="timeline">
            <!-- Projet 1 -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">2023-2025</div>
                <div class="card bg-darker border border-secondary shadow">
                    <div class="card-body">
                        <h5 class="text-green">Homelab Pentest avec Kali Linux</h5>
                        <p class="text-muted small">
                            Audit et exploitation de vulnérabilités sur Metasploitable 2 & DVWA.
                        </p>
                        <ul class="small text-light">
                            <li>Scan réseau (Nmap), analyse web (Burp Suite, OWASP ZAP)</li>
                            <li>Exploitation SQLi, XSS, RCE, LFI (Metasploit, sqlmap)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Mai 2023 - Déc. 2023</div>
                <div class="card bg-darker border border-secondary shadow">
                    <div class="card-body">
                        <h5 class="text-green">Mise en place d'un SOC local</h5>
                        <p class="text-muted small">Matrix Telecom, Yaoundé</p>
                        <ul class="small text-light">
                            <li>Configuration pare-feu Fortinet + IDS/IPS</li>
                            <li>Tests d'intrusion et détection (Nmap)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Fév. 2024 - Août 2024</div>
                <div class="card bg-darker border border-secondary shadow">
                    <div class="card-body">
                        <h5 class="text-green">Infrastructure réseau simulée GNS3</h5>
                        <p class="text-muted small">Orange Cameroun, Yaoundé</p>
                        <ul class="small text-light">
                            <li>Routeurs, VLAN, routage dynamique (OSPF, RIP, BGP)</li>
                            <li>Audit sécurité (Nmap, sqlmap, Burp Suite)</li>
                            <li>Sécurisation + VPN (OpenVPN/WireGuard)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projet 4 -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">2025 (en cours)</div>
                <div class="card bg-darker border border-secondary shadow">
                    <div class="card-body">
                        <h5 class="text-green">Honeypot Cowrie SSH/Telnet</h5>
                        <p class="text-muted small">Master Expert IT – Ecole IRIS</p>
                        <ul class="small text-light">
                            <li>Déploiement dans VM</li>
                            <li>Observation en temps réel des attaques automatisées</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projet 5 -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">2024-2025</div>
                <div class="card bg-darker border border-secondary shadow">
                    <div class="card-body">
                        <h5 class="text-green">Sniffer de paquets avec Scapy</h5>
                        <p class="text-muted small">Titre RNCP – ECOLE-IT</p>
                        <ul class="small text-light">
                            <li>Capture HTTP, DNS, identifiants non chiffrés</li>
                            <li>Analyse trafic réseau en lab</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Projet 3 : Monitoring Prometheus -->
<div class="timeline-item mb-5">
    <div class="card bg-darker border border-secondary shadow">
        <div class="card-body">
            <h5 class="card-title text-green">Monitoring Local avec Prometheus, Windows Exporter & Grafana</h5>
            <p class="card-text">
                Solution de supervision locale pour CPU, RAM, disque. Alertes et dashboards.
            </p>
        </div>
        <div class="card-footer">
            <a href="/projects/monitoring-prometheus" class="btn btn-green btn-sm">
                Voir détails →
            </a>
        </div>
    </div>
</div>

<br>

        <!-- Projet SIEM Winlogbeat ELK -->
<div class="timeline-item mb-5">
    <div class="card bg-darker border border-secondary shadow">
        <div class="card-body">
            <h5 class="card-title text-green">SIEM Winlogbeat avec ELK</h5>
            <p class="card-text">
                Collecte logs Windows pour supervision cybersécurité.
            </p>
        </div>
        <div class="card-footer">
            <a href="/projects/siem-winlogbeat" class="btn btn-green btn-sm">
                Voir détails →
            </a>
        </div>
    </div>
</div>

        <div class="text-center mt-5">
            <a href="/" class="btn btn-outline-light btn-lg">← Retour à l'accueil</a>
        </div>
    </div>
</section>

<style>
    .timeline { position: relative; padding-left: 40px; max-width: 900px; margin: 0 auto; }
    .timeline::before { content: ''; position: absolute; width: 4px; background: #30363d; top: 0; bottom: 0; left: 20px; }
    .timeline-item { position: relative; margin-bottom: 2.5rem; }
    .timeline-date { position: absolute; left: -140px; width: 120px; text-align: right; top: 8px; font-weight: bold; color: #7ee787; }
    .card { transition: all 0.3s ease; background: #161b22; }
    .card:hover { transform: translateY(-5px); box-shadow: 0 0 25px rgba(126, 231, 135, 0.3); border-color: #7ee787; }
    @media (max-width: 768px) { .timeline-date { position: static; text-align: left; margin-bottom: 0.5rem; } }
</style>
@endsection
