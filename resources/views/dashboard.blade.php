@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Vue d\'ensemble de votre activité')

@section('header-actions')
    <a href="/projects" class="btn btn-primary">
        <i class="fas fa-plus-circle me-2"></i>Soumettre un projet
    </a>
@endsection

@section('content')
<style>
    .welcome-banner {
        background: var(--primary-color);
        color: white;
        border-radius: 16px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 20px rgba(106, 0, 184, 0.25);
        position: relative;
        overflow: hidden;
    }

    .welcome-banner::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .welcome-banner h3 {
        margin-bottom: 0.5rem;
        font-size: 2rem;
        font-weight: 700;
        position: relative;
        z-index: 1;
    }

    .welcome-banner p {
        margin: 0;
        opacity: 0.95;
        position: relative;
        z-index: 1;
    }

    .card {
        border-radius: 16px;
        border: none;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .card-header {
        background: white;
        color: #2c3e50;
        border: none;
        padding: 1.5rem 2rem;
        font-weight: 600;
        font-size: 1.25rem;
        border-bottom: 1px solid #f0f0f0;
    }

    .card-header i {
        color: var(--primary-color);
        margin-right: 0.75rem;
    }

    .card-body {
        padding: 0;
    }

    .stat-card {
        background: white;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 0 auto 0.8rem;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 50%;
        border: 8px solid currentColor;
        opacity: 0.3;
    }

    .stat-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 50%;
        border: 8px solid currentColor;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 0;
        color: #333;
        position: relative;
        z-index: 1;
    }

    .stat-header {
        font-size: 0.8rem;
        color: #666;
        text-align: center;
        margin-top: 0.3rem;
        font-weight: 500;
    }

    .stat-card.purple {
        color: #ff9800;
    }

    .stat-card.green {
        color: #4caf50;
    }

    .stat-card.red {
        color: #f44336;
    }

    .stat-wrapper {
        text-align: center;
    }

    .stats-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 0;
    }

    .stats-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .stats-section h5 {
        font-size: 1rem;
        color: #333;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }

    .stats-section p {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 1.5rem;
    }

    .chart-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .income-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }

    .income-amount {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 0.8rem;
    }

    .chart-bars {
        height: 120px;
        display: flex;
        align-items: flex-end;
        gap: 6px;
        padding: 0.8rem 0;
    }

    .chart-bar {
        flex: 1;
        background: linear-gradient(to top, #ff9800, #ffc107);
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .chart-bar:hover {
        opacity: 0.8;
    }

    .chart-labels {
        display: flex;
        justify-content: space-between;
        font-size: 0.75rem;
        color: #888;
        margin-top: 0.5rem;
    }

    .circle-stat {
        text-align: center;
        padding: 1.5rem 1rem;
    }

    .circle-container {
        width: 120px;
        height: 120px;
        margin: 0 auto 1rem;
        position: relative;
    }

    .circle-progress {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: conic-gradient(#B57EFF 0deg, #B57EFF var(--progress), #e8e8e8 var(--progress), #e8e8e8 360deg);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .circle-progress::before {
        content: '';
        width: 90px;
        height: 90px;
        background: white;
        border-radius: 50%;
        position: absolute;
    }

    .circle-text {
        position: relative;
        z-index: 1;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-color);
    }

    .circle-stat h6 {
        font-size: 0.9rem;
        color: #666;
        margin: 0;
    }

    .income-stat {
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid;
        margin-bottom: 1.5rem;
    }

    .income-stat.success {
        border-left-color: var(--success-color);
    }

    .income-stat.danger {
        border-left-color: var(--danger-color);
    }

    .income-stat h6 {
        font-size: 0.85rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
        opacity: 0.8;
    }

    .income-stat h3 {
        margin: 0;
        font-weight: 700;
    }

    .income-stat {
        padding: 1.5rem;
        background: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid;
        margin-bottom: 1.5rem;
    }

    .income-stat.success {
        border-left-color: var(--success-color);
    }

    .income-stat.danger {
        border-left-color: var(--danger-color);
    }

    .income-stat h6 {
        font-size: 0.85rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
        opacity: 0.8;
    }

    .income-stat h3 {
        margin: 0;
        font-weight: 700;
    }

    .datatable {
        font-size: 0.95rem;
        margin: 0;
    }

    .datatable thead th {
        background: #fafafa;
        color: #6c757d;
        font-weight: 600;
        border: none;
        padding: 1rem 2rem;
        text-transform: uppercase;
        font-size: 0.7rem;
        letter-spacing: 1px;
        white-space: nowrap;
    }

    .datatable tbody td {
        padding: 1.5rem 2rem;
        vertical-align: middle;
        border-bottom: 1px solid #f5f5f5;
    }

    @media (max-width: 1200px) {
        .welcome-banner h3 {
            font-size: 1.5rem;
        }
        
        .welcome-banner {
            padding: 2rem;
        }
    }

    @media (max-width: 992px) {
        .stats-container {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .card-header {
            padding: 1.25rem 1.5rem;
            font-size: 1.1rem;
        }
        
        .datatable thead th,
        .datatable tbody td {
            padding: 1rem 1.25rem;
        }
    }

    @media (max-width: 768px) {
        .welcome-banner {
            padding: 1.5rem;
        }
        
        .welcome-banner h3 {
            font-size: 1.25rem;
        }
        
        .welcome-banner p {
            font-size: 0.9rem;
        }
        
        .stats-container {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }
        
        .stat-card {
            width: 80px;
            height: 80px;
        }
        
        .stat-number {
            font-size: 1.5rem;
        }
        
        .stat-header {
            font-size: 0.7rem;
        }
        
        .card-header {
            padding: 1rem 1.25rem;
            font-size: 1rem;
        }
        
        .datatable thead th,
        .datatable tbody td {
            padding: 0.75rem 1rem;
            font-size: 0.85rem;
        }
        
        .chart-bars {
            height: 100px;
        }
        
        .income-stat {
            padding: 1rem;
        }
    }

    @media (max-width: 576px) {
        .welcome-banner {
            padding: 1.25rem;
        }
        
        .welcome-banner h3 {
            font-size: 1.1rem;
        }
        
        .stat-card {
            width: 90px;
            height: 90px;
        }
        
        .datatable thead th {
            font-size: 0.65rem;
            padding: 0.75rem 0.5rem;
        }
        
        .datatable tbody td {
            padding: 0.75rem 0.5rem;
            font-size: 0.8rem;
        }
    }

    .datatable tbody tr {
        transition: all 0.2s ease;
        background: white;
    }

    .datatable tbody tr:hover {
        background: #fafbff;
    }

    .datatable tbody tr:last-child td {
        border-bottom: none;
    }

    .project-number {
        width: 40px;
        height: 40px;
        background: #f8f9fa;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .badge-type {
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: capitalize;
        display: inline-block;
    }

    .badge-webapp {
        background: #6A00B8;
        color: white;
    }

    .badge-marketplace {
        background: #11998e;
        color: white;
    }

    .badge-marketplace-depot {
        background: #4ECDC4;
        color: white;
    }

    .badge-marketplace-achat {
        background: #FFA500;
        color: white;
    }

    .badge-incubateur {
        background: #00d4ff;
        color: white;
    }

    .badge-franchise {
        background: #f093fb;
        color: white;
    }

    .badge-status {
        padding: 0.5rem 1.1rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        white-space: nowrap;
    }

    .badge-status::before {
        content: '';
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
    }

    .badge-pending {
        background: #fff4e6;
        color: #ff9800;
        border: 1px solid #ffe0b2;
    }

    .badge-pending::before {
        background: #ff9800;
    }

    .badge-approved {
        background: #e8f5e9;
        color: #4caf50;
        border: 1px solid #c8e6c9;
    }

    .badge-approved::before {
        background: #4caf50;
    }

    .badge-rejected {
        background: #ffebee;
        color: #f44336;
        border: 1px solid #ffcdd2;
    }

    .badge-rejected::before {
        background: #f44336;
    }

    .project-name {
        font-weight: 600;
        color: #1a1a1a;
        font-size: 1rem;
        margin-bottom: 0.25rem;
        display: block;
    }

    .project-description {
        color: #8e8e93;
        font-size: 0.875rem;
        margin: 0;
    }

    .project-date {
        color: #6c757d;
        font-size: 0.875rem;
        font-weight: 500;
    }
</style>

<!-- Welcome Banner -->
<div class="welcome-banner">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3><i class="fas fa-wave-hand me-2"></i>Bienvenue, {{ Auth::user()->name }} !</h3>
            <p>Voici un aperçu de votre activité et de vos projets en cours</p>
        </div>
    </div>
</div>

<!-- Main Content Row -->
<div class="row mb-4 g-4">
    <!-- Stats Overview -->
    <div class="col-lg-6">
        <div class="stats-section">
            <h5>Aperçu des statistiques</h5>
            <p>Daily information about statistics in system</p>
            
            <div class="stats-container">
                <div class="stat-wrapper">
                    <div class="stat-card purple">
                        <div class="stat-number">{{ $totalProjects }}</div>
                    </div>
                    <div class="stat-header">Total projet soumis</div>
                </div>
                <div class="stat-wrapper">
                    <div class="stat-card green">
                        <div class="stat-number">{{ $approvedProjects }}</div>
                    </div>
                    <div class="stat-header">Total projet validé</div>
                </div>
                <div class="stat-wrapper">
                    <div class="stat-card red">
                        <div class="stat-number">{{ $rejectedProjects }}</div>
                    </div>
                    <div class="stat-header">Total rojet rejeté</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="col-lg-6">
        <div class="chart-section">
            <h5 style="font-size: 1rem; color: #333; margin-bottom: 1.5rem; font-weight: 600;">Statistiques des projets</h5>
            
            <div style="display: flex; gap: 2rem; align-items: center;">
                <!-- Stats Text -->
                <div style="flex: 0 0 auto;">
                    <div style="margin-bottom: 1.5rem;">
                        <div class="income-label" style="color: #4caf50;">PROJETS VALIDÉS</div>
                        <div class="income-amount">{{ $approvedProjects }}</div>
                    </div>
                    
                    <div style="margin-bottom: 0;">
                        <div class="income-label" style="color: #f44336;">PROJETS REJETÉS</div>
                        <div class="income-amount">{{ $rejectedProjects }}</div>
                    </div>
                </div>
                
                <!-- Chart -->
                <div style="flex: 1;">
                    <div class="chart-bars">
                        @foreach($weeklyStats as $stat)
                            @php
                                $maxCount = collect($weeklyStats)->max('count') ?: 1;
                                $height = $stat['count'] > 0 ? ($stat['count'] / $maxCount * 100) : 10;
                            @endphp
                            <div class="chart-bar" style="height: {{ $height }}%;" title="{{ $stat['period'] }}: {{ $stat['count'] }} projet(s)"></div>
                        @endforeach
                    </div>
                    
                    <div class="chart-labels">
                        @foreach($weeklyStats as $stat)
                            <span>{{ $stat['label'] }}</span>
                        @endforeach
                    </div>
                    
                    <div style="text-align: center; margin-top: 0.8rem;">
                        <small style="color: #888; font-size: 0.75rem;">Projets soumis ce mois (par semaine)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projects Table -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-table me-2"></i>Bilan des Projets
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 30%;">Projet</th>
                                <th scope="col" style="width: 18%;">Type</th>
                                <th scope="col" style="width: 18%;">Statut</th>
                                <th scope="col" style="width: 15%;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $index => $project)
                            <tr>
                                <td>
                                    <span class="project-name">{{ $project['name'] }}</span>
                                    <span class="project-description" style="display: block; max-width: 300px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; line-height: 1.4;">{{ $project['description'] }}</span>
                                </td>
                                <td>
                                    @if($project['type'] == 'Web/App')
                                        <span class="badge-type badge-webapp">Web/App</span>
                                    @elseif($project['type'] == 'Marketplace')
                                        <span class="badge-type badge-marketplace">Marketplace</span>
                                    @elseif($project['type'] == 'Marketplace Dépôt')
                                        <span class="badge-type badge-marketplace-depot">Vente Business</span>
                                    @elseif($project['type'] == 'Marketplace Achat')
                                        <span class="badge-type badge-marketplace-achat">Achat Business</span>
                                    @elseif($project['type'] == 'Incubateur Zéro')
                                        <span class="badge-type badge-incubateur">Incubateur</span>
                                    @else
                                        <span class="badge-type badge-franchise">Franchise</span>
                                    @endif
                                </td>
                                <td>
                                    @if($project['status'] == 'Validé')
                                        <span class="badge-status badge-approved">Validé</span>
                                    @elseif($project['status'] == 'Rejeté')
                                        <span class="badge-status badge-rejected">Rejeté</span>
                                    @else
                                        <span class="badge-status badge-pending">En attente</span>
                                    @endif
                                </td>
                                <td><span class="project-date">{{ $project['created_at']->format('d/m/Y') }}</span></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <div style="color: #8e8e93;">
                                        <i class="fas fa-inbox fa-3x mb-3" style="opacity: 0.3;"></i>
                                        <p class="mb-0">Aucun projet pour le moment</p>
                                        <small>Commencez par soumettre votre premier projet !</small>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($totalPages > 1)
                    <div class="d-flex justify-content-center align-items-center mt-4 mb-3">
                        <nav>
                            <ul class="pagination mb-0">
                                {{-- Bouton Précédent --}}
                                <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="?page={{ $currentPage - 1 }}" aria-label="Précédent">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>

                                {{-- Numéros de page --}}
                                @for($i = 1; $i <= $totalPages; $i++)
                                    <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                        <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Bouton Suivant --}}
                                <li class="page-item {{ $currentPage == $totalPages ? 'disabled' : '' }}">
                                    <a class="page-link" href="?page={{ $currentPage + 1 }}" aria-label="Suivant">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="text-center text-muted mb-3">
                        <small>Page {{ $currentPage }} sur {{ $totalPages }} ({{ $totalProjects }} projet(s) au total)</small>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
