<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hervé TCHOUPE | Ingénieur Cybersécurité</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body { background-color: #0d1117; color: #c9d1d9; }
        .navbar { background-color: #161b22 !important; border-bottom: 1px solid #30363d; }
        .hero { background: linear-gradient(135deg, #0d1117, #1a2a3a); padding: 100px 0; }
        .skill-badge { background-color: #21262d; border: 1px solid #30363d; }
        .card { background-color: #161b22; border: 1px solid #30363d; }
        .btn-cyber { background-color: #238636; border: none; }
        .btn-cyber:hover { background-color: #2ea043; }
        .text-green { color: #7ee787; }


body {
    padding-top: 80px; /* Ajuste selon la hauteur de ta navbar (généralement 70-90px) */
}

@media (max-width: 992px) {
    body {
        padding-top: 70px; /* Moins haut sur mobile si la navbar collapse */
    }
}



    </style>
</head>
<body>
    @include('partials.nav')

    <main>
        @yield('content')
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.scroll-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href'); // ex: #projects
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                // Si on est déjà sur l'accueil → scroll direct
                window.scrollTo({
                    top: targetSection.offsetTop - 90, // compensation navbar fixe
                    behavior: 'smooth'
                });
            } else {
                // Si on est sur une autre page (ex: /about) → va d'abord à l'accueil puis scroll
                window.location.href = '/' + targetId;
            }
        });
    });

    // Gestion du cas où on arrive directement avec #projects ou #contact dans l'URL
    window.addEventListener('load', () => {
        if (window.location.hash) {
            const target = document.querySelector(window.location.hash);
            if (target) {
                setTimeout(() => {
                    window.scrollTo({
                        top: target.offsetTop - 90,
                        behavior: 'smooth'
                    });
                }, 300); // petit délai pour laisser la page charger
            }
        }
    });
</script>



    @include('partials.footer')
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-green" id="contactModalLabel">Laisse-moi une remarque</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control bg-secondary text-light border-secondary" id="name" name="name" required>
                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-secondary text-light border-secondary" id="email" name="email" required>
                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message / Remarques sur mon travail</label>
                        <textarea class="form-control bg-secondary text-light border-secondary" id="message" name="message" rows="5" required></textarea>
                        @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-green">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
