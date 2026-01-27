@extends('layouts.app')

@section('content')
<section id="security-network" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Sécurité et Réseaux</h1>

        <p class="lead text-center mb-5">Voici mon niveau de maîtrise pour les outils et compétences en cybersécurité et réseaux. Les étoiles représentent mon expertise auto-évaluée (sur 5).</p>

        <div class="row justify-content-center">
            <!-- Sqlmap -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-database fa-4x text-green mb-3"></i>
                    <h5>Sqlmap</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="far fa-star text-muted"></i> <!-- 4/5 -->
                    </div>
                    <p class="small">Outil pour tests d'injections SQL automatisés.</p>
                </div>
            </div>

            <!-- Burp Suite -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-bug fa-4x text-green mb-3"></i>
                    <h5>Burp Suite</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="far fa-star text-muted"></i> <!-- 4/5 -->
                    </div>
                    <p class="small">Proxy pour audits web et tests de vulnérabilités (XSS, etc.).</p>
                </div>
            </div>

            <!-- Firewall -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-shield-alt fa-4x text-green mb-3"></i>
                    <h5>Firewall</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 -->
                    </div>
                    <p class="small">Configuration de pare-feu (Fortinet, règles de filtrage).</p>
                </div>
            </div>

            <!-- Wazuh -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-search fa-4x text-green mb-3"></i>
                    <h5>Wazuh</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 -->
                    </div>
                    <p class="small">SIEM open-source pour détection d'intrusions.</p>
                </div>
            </div>

            <!-- Linux -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fab fa-linux fa-4x text-green mb-3"></i>
                    <h5>Linux</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 (assumé basé sur CV) -->
                    </div>
                    <p class="small">Administration Debian, scripts Bash, hardening.</p>
                </div>
            </div>

            <!-- Metasploit Framework -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-explosion fa-4x text-green mb-3"></i>
                    <h5>Metasploit Framework</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 -->
                    </div>
                    <p class="small">Framework pour pentests et exploits.</p>
                </div>
            </div>

            <!-- OpenVAS -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-search-location fa-4x text-green mb-3"></i>
                    <h5>OpenVAS</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 -->
                    </div>
                    <p class="small">Scanner de vulnérabilités open-source.</p>
                </div>
            </div>

            <!-- Snort -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <i class="fas fa-network-wired fa-4x text-green mb-3"></i>
                    <h5>Snort</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i>
                        <i class="fas fa-star text-green"></i> <!-- 5/5 -->
                    </div>
                    <p class="small">IDS/IPS pour détection d'intrusions réseau.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .stars { font-size: 1.2rem; }
    .skill-card {
        background-color: #161b22;
        border: 1px solid #30363d;
        transition: all 0.4s ease;
        cursor: default;
    }
    .skill-card:hover {
        transform: scale(1.15) translateY(-10px) rotate(2deg);
        box-shadow: 0 0 30px rgba(126, 231, 135, 0.6); /* Glow vert néon */
        border-color: #7ee787;
        z-index: 10;
    }
    .skill-card i {
        transition: all 0.4s ease;
    }
    .skill-card:hover i {
        color: #ffffff;
        text-shadow: 0 0 20px #7ee787;
    }
</style>
@endsection
