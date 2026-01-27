@extends('layouts.app')

@section('content')
<section id="home" class="hero text-center">
    <div class="container">
       <img src="{{ asset('image/tchoupe.jpg') }}" alt="Hervé TCHOUPE - Photo de profil" class="rounded-circle mb-4" width="200">
        <h1 class="display-4 fw-bold text-green">Hervé TCHOUPE</h1>
        <p class="lead">Ingénieur en Cybersécurité | Pentester | Blue Team</p>
        <p>Spécialiste en protection des systèmes, détection d'intrusions et tests d'intrusion éthiques.</p>

<br>

<div class="text-center mt-5">
    <a href="/projects-cyber" class="btn btn-cyber btn-lg">
        <i class="fas fa-shield-alt me-2"></i> Voir tous mes projets cybersécurité
    </a>
</div>
<div class="text-center mt-5">
        <a href="#contact" class="btn btn-outline-light btn-lg">Me contacter</a>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-green">Compétences & Certifications</h2>
        <div class="row text-center">
            <div class="col-md-3"><i class="fas fa-shield-alt fa-3x text-green mb-3"></i><p>Pentesting</p></div>
            <div class="col-md-3"><i class="fas fa-lock fa-3x text-green mb-3"></i><p>SIEM & SOC</p></div>
            <div class="col-md-3"><i class="fas fa-fire fa-3x text-green mb-3"></i><p>Firewall / IDS</p></div>
            <div class="col-md-3"><i class="fas fa-cloud fa-3x text-green mb-3"></i><p>Cloud Security</p></div>
        </div>
        <div class="text-center mt-4">
            <span class="badge skill-badge me-2">OSCP</span>
            <span class="badge skill-badge me-2">CEH</span>
            <span class="badge skill-badge me-2">CompTIA Security+</span>
            <span class="badge skill-badge me-2">TryHackMe Top 1%</span>
        </div>
    </div>
</section>

<div class="text-center mb-5">
    <h1 class="display-5 fw-bold text-green">CARRIERE</h1>

   @section('content')
<section class="py-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Colonne gauche : Photo entière -->
            <div class="col-lg-5 text-center text-lg-start">
                <div class="position-relative overflow-hidden rounded shadow-lg border border-green" style="max-width: 400px; margin: 0 auto;">
                    <img src="{{ asset('image/TCHOUPE1.jpg') }}"
                         alt="Hervé Romarick TCHOUPE TATOU"
                         class="img-fluid w-100"
                         style="object-fit: cover; height: auto;">
                    <!-- Effet glow subtil autour de la photo -->
                    <div class="position-absolute top-0 start-0 end-0 bottom-0 glow-effect" style="background: linear-gradient(to bottom right, rgba(126,231,135,0.15), transparent); pointer-events: none;"></div>
                </div>

                <h3 class="mt-4 text-green fw-bold">Hervé Romarick TCHOUPE TATOU</h3>
                <p class="text-muted lead">Ingénieur Cybersécurité & Réseaux</p>
                <p class="small text-muted">Saint-Jean-de-la-Ruelle (45140) · Disponible immédiatement</p>
            </div>

            <!-- Colonne droite : Texte -->
            <div class="col-lg-7">
                <div class="bg-darker border border-secondary rounded p-5 shadow-lg">
                    <p class="lead text-light mb-4">
                        Dans un monde hyperconnecté, la cybersécurité est devenue un enjeu stratégique majeur pour les États, les entreprises et les citoyens.
                        Les cyberattaques explosent : ransomware, phishing sophistiqué, fuites de données massives, espionnage étatique et vulnérabilités zero-day coûtent des milliers de milliards d'euros chaque année (plus de 10 500 milliards $ estimés en 2025 selon Cybersecurity Ventures).
                        La digitalisation accélérée, l'essor du cloud, de l'IoT, de l'IA et du télétravail multiplient les surfaces d'attaque, rendant indispensable une protection proactive, une détection en temps réel et une réponse rapide aux incidents.
                    </p>

                    <p class="lead text-light mb-4">
                        Mes projets et compétences s'inscrivent pleinement dans cette réalité : pentesting éthique (Burp Suite, Metasploit, Nmap, sqlmap), mise en place de SIEM (ELK Stack, Winlogbeat, Suricata, Wazuh), monitoring système (Prometheus, Grafana), analyse de trafic (Scapy), honeypots (Cowrie), et participation à des CTF sur HackTheBox et TryHackMe (top 30%).
                        Formé à la méthode EBIOS Risk Manager, titulaire CompTIA Security+, CEH et en préparation OSCP, je maîtrise les approches offensives et défensives pour sécuriser les systèmes critiques et anticiper les menaces.
                    </p>

                    <p class="lead text-green fw-bold mt-4">
                        Actuellement en recherche active d’opportunités professionnelles :
                        <strong>stage, CDI, CDD, intérim ou contrat de professionnalisation</strong> en cybersécurité, réseaux, SOC, pentest ou administration systèmes.
                        Disponible immédiatement en Île-de-France, Centre-Val de Loire ou en télétravail.
                    </p>
                </div>
            </div>
        </div>


        </div>
    </div>
</section>

<section id="projects" class="py-5 bg-dark">
    <div class="container">
        <h2 class="text-center mb-5 text-green fw-bold display-6">Projets Cybersécurité</h2>

        <div class="row g-4 justify-content-center">
            <!-- Carte 1 : Homelab Pentest -->
            <div class="col-md-4">
                <div class="card h-100 border border-secondary shadow-lg project-card">
                    <div class="card-body">
                        <h5 class="card-title text-green">Homelab Pentest avec Kali</h5>
                        <p class="card-text small">
                            Scan et exploitation de vulnérabilités (Metasploitable, DVWA) avec Burp Suite & Metasploit.
                        </p>
                        <p class="text-muted small"><strong>Outils :</strong> Kali Linux, Nmap, Burp Suite</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between gap-2">
                        <a href="https://github.com/HerveRomarick" target="_blank" class="btn btn-outline-green btn-sm flex-fill">
                            Write-up GitHub
                        </a>

                    </div>
                </div>
            </div>


            <!-- Carte 3 : CTF & Challenges -->
            <div class="col-md-4">
                <div class="card h-100  border border-secondary shadow-lg project-card">
                    <div class="card-body">
                        <h5 class="card-title text-green">CTF & Challenges</h5>
                        <p class="card-text small">
                            Top 30% sur HackTheBox et TryHackMe (Web, Crypto, Reverse).
                        </p>
                        <p class="text-muted small"><strong>Plateformes :</strong> HTB, TryHackMe, CTFtime</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between gap-2">
                        <a href="https://academy.hackthebox.com/dashboard?_gl=1*10pae5n*_gcl_au*MjgyMjU5NzA0LjE3Njc1NzEwOTk." target="_blank" class="btn btn-outline-green btn-sm flex-fill">
                            Profil HTB
                        </a>
                        <a href=https://tryhackme.com/dashboard target="_blank" class="btn btn-green btn-sm flex-fill">
                            Profil TryHackMe
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .project-card {
        transition: all 0.4s ease;
        background-color: #161b22;
        border: 1px solid #30363d;
    }
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 0 30px rgba(126, 231, 135, 0.6);
        border-color: #7ee787;
    }
    .btn-cyber {
        background-color: #238636;
        color: white;
        border: none;
    }
    .btn-cyber:hover {
        background-color: #2ea043;
    }
    .btn-outline-green {
        border-color: #7ee787;
        color: #7ee787;
    }
    .btn-outline-green:hover {
        background-color: #7ee787;
        color: #0d1117;
    }
</style>
</section>

<style>
    .glow-effect {
        opacity: 0.4;
        pointer-events: none;
    }
    .border-green { border-color: #7ee787 !important; }
    .btn-cyber {
        background-color: #238636;
        color: white;
        transition: all 0.3s ease;
    }
    .btn-cyber:hover {
        background-color: #2ea043;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(46, 160, 67, 0.4);
    }
    .bg-darker { background-color: #0d1117; }
</style>
@endsection



