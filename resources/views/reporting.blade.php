@extends('layouts.app')

@section('content')
<section id="reporting" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 display-5 fw-bold text-green">Reporting & Data</h1>

        <p class="lead text-center mb-5">Mon niveau de maîtrise pour les outils de reporting, visualisation et requêtage de données.</p>

        <div class="row justify-content-center">
            <!-- Excel -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Microsoft_Excel-Logo.wine.png') }}" alt="Microsoft Excel" width="100" class="mb-3">
                    <h5>Excel</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Tableaux croisés dynamiques, formules avancées, macros.</p>
                </div>
            </div>

            <!-- Power BI -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/Microsoft-Power-BI (1).jpg') }}" alt="Microsoft Power BI" width="100" class="mb-3">
                    <h5>Power BI</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="far fa-star text-muted"></i><i class="far fa-star text-muted"></i>
                    </div>
                    <p class="small">Bases : visualisation de données, dashboards simples.</p>
                </div>
            </div>

            <!-- SQL -->
            <div class="col-md-4 mb-4">
                <div class="skill-card p-4 rounded shadow text-center">
                    <img src="{{ asset('image/561-5615364_icon-azure-sql-database-hd-png-download.png') }}" alt="SQL" width="100" class="mb-3">
                    <h5>SQL</h5>
                    <div class="stars mb-2">
                        <i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i><i class="fas fa-star text-green"></i>
                    </div>
                    <p class="small">Requêtes complexes, joints, sous-requêtes, optimisation.</p>
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
        filter: brightness(0.9);
    }
    .skill-card:hover img {
        filter: brightness(1) drop-shadow(0 0 15px #7ee787);
    }
</style>
@endsection
