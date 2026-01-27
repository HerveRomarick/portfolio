@extends('layouts.app')

@section('content')
<section id="about" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Mon Parcours Professionnel</h1>

        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center">
                <img src="{{ asset('image/tchoupe.jpg') }}"
                     alt="Hervé Romarick TCHOUPE TATOU"
                     class="rounded-circle shadow"
                     width="250"
                     height="250">
            </div>
            <div class="col-md-8">
                <h3 class="text-green">Hervé Romarick TCHOUPE TATOU</h3>
                <p class="lead">Ingénieur en Cybersécurité et Réseaux | Saint-Jean-de-la-Ruelle (45140)</p>
                <p>Proactif, dynamique et sociable, j'aime apprendre de nouvelles choses au contact des gens que je rencontre, ce qui me pousse à toujours me dépasser. Mes études accentuées par des projets en informatique m'ont permis de développer mes capacités d'analyse et d'adaptation, ainsi que ma performance autodidacte afin de faire face à de nouveaux défis.</p>
                <p><strong>Contact :</strong> tchoupeherve94@gmail.com | +33 6 05 94 79 16 | <a href="https://www.linkedin.com/in/herve-tchoupe-924b23334" target="_blank">LinkedIn</a></p>
                <p><strong>Langues :</strong> Français (courant), Anglais</p>
                <p><strong>Soft Skills :</strong> Rigueur & organisation, Esprit d'analyse, Curiosité, Travail en équipe</p>
                <p><strong>Centres d'intérêt :</strong> Football, Padel, Musique</p>
            </div>
        </div>

        <h2 class="text-center mb-5 text-green">Timeline de mon parcours</h2>

        <div class="timeline">
            <!-- Formation BTS -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Septembre 2022 - Juin 2023</div>
                <div class="card">
                    <div class="card-body">
                        <h5>BTS in Network Administration</h5>
                        <p>University of Dschang, Yaoundé</p>
                    </div>
                </div>
            </div>

            <!-- Stage MINPOSTEL -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Juin 2022 - Septembre 2022 (3 mois)</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Assistant Stagiaire Administrateur Réseaux</h5>
                        <p>MINPOSTEL, Yaoundé</p>
                        <p>Configuration et gestion d'une infrastructure LAN/WAN. Installation et paramétrage des routeurs et commutateurs Cisco. Mise en place de serveurs DHCP/DNS, surveillance avec Wireshark. Audit des systèmes d'information.</p>
                    </div>
                </div>
            </div>

            <!-- Stage MATRIX TELECOM -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Mai 2023 - Décembre 2023 (7 mois)</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Stagiaire Ingénieur en Cybersécurité</h5>
                        <p>MATRIX TELECOM, Yaoundé</p>
                        <p>Mise en place d'un SOC (Security Operation Center) local. Mise en œuvre du pare-feu Fortinet et configuration des IDS/IPS. Réalisation de tests d'intrusion avec Nmap pour détecter des vulnérabilités.</p>
                    </div>
                </div>
            </div>

            <!-- Stage Orange Cameroun -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Février 2024 - Août 2024 (6 mois)</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Stagiaire en Réseau et Sécurité</h5>
                        <p>Orange Cameroun, Yaoundé</p>
                        <p>Mise en place d'une infrastructure réseau simulée (GNS3 : configuration de routeurs, commutateurs, VLAN, routage dynamique OSPF, RIP, BGP). Réalisation d'un audit de sécurité : scan avec Nmap, test d'injections SQL avec sqlmap, analyse des failles XSS avec Burp Suite / OWASP ZAP. Sécurisation d'un réseau local : mise en place d'un pare-feu, règles de filtrage, segmentation avec VLANs, test d'un VPN (OpenVPN/WireGuard). Déploiement et configuration de services réseau Debian (DNS, DHCP, FTP, SSH).</p>
                    </div>
                </div>
            </div>

            <!-- Titre RNCP -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Septembre 2024 - Juin 2025</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Titre RNCP36061 – Administrateur Systèmes et Réseaux</h5>
                        <p>ECOLE-IT, Orléans</p>
                        <p>Construire un outil pour sniffer le trafic réseau : Codez un sniffer de paquets avec Scapy et capturez HTTP, DNS et identifiants non chiffrés dans le réseau lab.</p>
                    </div>
                </div>
            </div>

            <!-- Certification Cyber Sécurité -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Mai 2025</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Certification en Cyber Sécurité</h5>
                        <p>Coursera / Méthode EBIOS Risk / Google</p>
                    </div>
                </div>
            </div>

            <!-- Mastere Expert IT -->
            <div class="timeline-item mb-5">
                <div class="timeline-date text-green">Novembre 2025 - En cours</div>
                <div class="card">
                    <div class="card-body">
                        <h5>Mastere Expert IT, Cyber Sécurité Réseau et Système</h5>
                        <p>Ecole IRIS, Paris</p>
                        <p>Mettre en place un honeypot basique pour piéger les attaquants : Déployez Cowrie SSH/Telnet honeypot dans une VM et observez en temps réel les scripts qui testent des identifiants par défaut.</p>
                    </div>
                </div>
            </div>
        </div>

    <h2 class="text-center mt-5 mb-5 text-green">Compétences Techniques</h2>
<div class="row text-center">
    <!-- Catégorie 1 : Sécurité et Réseaux (cliquable) -->
<div class="col-md-3 mb-4">
    <a href="/security-network" class="text-decoration-none">
        <div class="skill-card p-4 rounded shadow">
            <i class="fas fa-shield-alt fa-4x text-green mb-3"></i>
            <h5>Sécurité et Réseaux</h5>
            <p class="small">Sqlmap, Burp Suite, Firewall, Wazuh, Hashcat, Cryptographie, Linux, Metasploit Framework, OpenVAS, Snort</p>
        </div>
    </a>
</div>

    <!-- Catégorie 2 : Outils -->
<div class="col-md-3 mb-4">
    <a href="/tools" class="text-decoration-none">
        <div class="skill-card p-4 rounded shadow">
            <i class="fas fa-tools fa-4x text-green mb-3"></i>
            <h5>Outils</h5>
            <p class="small">Wireshark, Nmap, Nagios, Docker Desktop, AWS, Power BI, Grafana, Prometheus</p>
        </div>
    </a>
</div>

    <!-- Catégorie 3 : Programmation / Scripting -->
   <div class="col-md-3 mb-4">
    <a href="/programming" class="text-decoration-none">
        <div class="skill-card p-4 rounded shadow">
            <i class="fas fa-code fa-4x text-green mb-3"></i>
            <h5>Programmation / Scripting</h5>
            <p class="small">Python, Bash, PHP, Node.js, FastAPI, Symfony, Laravel</p>
        </div>
    </a>
</div>

    <!-- Catégorie 4 : Reporting -->
   <div class="col-md-3 mb-4">
    <a href="/reporting" class="text-decoration-none">
        <div class="skill-card p-4 rounded shadow">
            <i class="fas fa-chart-bar fa-4x text-green mb-3"></i>
            <h5>Reporting</h5>
            <p class="small">Excel, Power BI (bases), SQL</p>
        </div>
    </a>
</div>

   <!-- Bonus : Certification EBIOS -->
<div class="col-md-3 mb-4 offset-md-3">
    <div class="skill-card p-4 rounded shadow text-center">
        <i class="fas fa-certificate fa-4x text-green mb-3"></i>
        <h5>Certification</h5>
        <p class="small">
            EBIOS Risk Manager<br>
            Introduction à la méthode
        </p>

        <a href="{{ asset('image/Certificat - TCHOUPE TATOU Herve Romarick - 31_10_2025.pdf ') }}"
           download="Certification_EBIOS_Risk_Manager_Herve_Tchoupe.pdf"
           class="btn btn-cyber btn-lg">

            <i class="fas fa-download me-2"></i> Télécharger (PDF)
        </a>
    </div>
</div>

        </div>
    </div>
</div>

<style>
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
    a.text-decoration-none .skill-card {
        cursor: pointer;
    }
    a.text-decoration-none:hover .skill-card {
        transform: scale(1.15) translateY(-10px) rotate(2deg);
        box-shadow: 0 0 40px rgba(126, 231, 135, 0.8); /* Glow plus fort au hover */
    }
</style>
@endsection
