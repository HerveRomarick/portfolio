<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #161b22; border-bottom: 1px solid #30363d;">
    <div class="container">
        <a class="navbar-brand fw-bold text-green" href="/">Hervé TCHOUPE</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active text-green fw-bold' : '' }}" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active text-green fw-bold' : '' }}" href="/about">À propos</a>
                </li>

   <li class="nav-item">
    <a class="nav-link {{ request()->is('projects-cyber') ? 'active text-green fw-bold' : '' }}" href="/projects-cyber">
        Projets Cybersécurité
    </a>
</li>

    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
</li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-link:hover, .nav-link.active {
        color: #7ee787 !important;
        text-shadow: 0 0 10px #7ee787;
    }
    .scroll-link {
        cursor: pointer;
    }
</style>



