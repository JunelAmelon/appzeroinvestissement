@extends('layouts.app')

@section('title', 'Administration')
@section('page-title', 'Espace Administration')
@section('page-subtitle', 'Gestion de tous les projets')

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
        color: #6A00B8;
    }

    .stat-card.orange {
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
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .stats-section {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        height: 100%;
    }

    .table {
        margin: 0;
    }

    .table thead th {
        background: #f8f9fa;
        color: #2c3e50;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border: none;
        padding: 1.25rem 1.5rem;
    }

    .table tbody td {
        padding: 1.25rem 1.5rem;
        vertical-align: middle;
        border-color: #f0f0f0;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    .badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
        font-size: 0.85rem;
    }

    .badge-type {
        background: #e3f2fd;
        color: #1976d2;
    }

    .badge-pending {
        background: #fff3e0;
        color: #f57c00;
    }

    .badge-approved {
        background: #e8f5e9;
        color: #388e3c;
    }

    .badge-rejected {
        background: #ffebee;
        color: #d32f2f;
    }

    .btn-sm {
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
        border-radius: 6px;
    }

    .btn-success {
        background: #4caf50;
        border: none;
    }

    .btn-success:hover {
        background: #388e3c;
    }

    .btn-danger {
        background: #f44336;
        border: none;
    }

    .btn-danger:hover {
        background: #d32f2f;
    }

    .project-description {
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
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
            grid-template-columns: repeat(2, 1fr);
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
        
        .table thead th,
        .table tbody td {
            padding: 0.75rem 0.5rem;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 576px) {
        .welcome-banner {
            padding: 1.25rem;
        }
        
        .welcome-banner h3 {
            font-size: 1.1rem;
        }
        
        .stats-container {
            grid-template-columns: 1fr;
        }
        
        .stat-card {
            width: 90px;
            height: 90px;
        }
    }
</style>

<div class="container-fluid">
    <!-- Welcome Banner -->
    <div class="welcome-banner">
        <h3>🛡️ Espace Administration</h3>
        <p>Gérez tous les projets soumis sur la plateforme</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Statistiques avec cercles colorés -->
    <div class="stats-container">
        <div class="stats-section">
            <div class="stat-wrapper">
                <div class="stat-card purple">
                    <div class="stat-number">{{ $totalProjects }}</div>
                </div>
                <div class="stat-header">TOTAL PROJETS</div>
            </div>
        </div>
        <div class="stats-section">
            <div class="stat-wrapper">
                <div class="stat-card orange">
                    <div class="stat-number">{{ $pendingProjects }}</div>
                </div>
                <div class="stat-header">EN ATTENTE</div>
            </div>
        </div>
        <div class="stats-section">
            <div class="stat-wrapper">
                <div class="stat-card green">
                    <div class="stat-number">{{ $approvedProjects }}</div>
                </div>
                <div class="stat-header">PROJETS VALIDÉS</div>
            </div>
        </div>
        <div class="stats-section">
            <div class="stat-wrapper">
                <div class="stat-card red">
                    <div class="stat-number">{{ $rejectedProjects }}</div>
                </div>
                <div class="stat-header">PROJETS REJETÉS</div>
            </div>
        </div>
    </div>

    <!-- Tableau des projets -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-list"></i>Tous les Projets Soumis
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 30%;">Projet</th>
                            <th style="width: 25%;">Soumis par</th>
                            <th style="width: 20%;">Date/Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>
                                    <span class="badge badge-type mb-2">{{ $project['type'] }}</span>
                                    <div>
                                        <strong>
                                            <a href="{{ route('admin.project.show', ['type' => $project['type_key'], 'id' => $project['id']]) }}" 
                                               style="color: var(--primary-color); text-decoration: none;">
                                                {{ $project['name'] }}
                                                <i class="fas fa-external-link-alt ms-1" style="font-size: 0.8rem;"></i>
                                            </a>
                                        </strong>
                                    </div>
                                    <small class="text-muted" style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $project['description'] }}</small>
                                </td>
                                <td>
                                    <div>{{ $project['user']->name }}</div>
                                    <small class="text-muted" style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $project['user']->email }}</small>
                                </td>
                                <td>
                                    <div class="mb-1"><small>{{ $project['created_at']->format('d/m/Y') }}</small></div>
                                    @if($project['status'] === 'En attente')
                                        <span class="badge badge-pending">En attente</span>
                                    @elseif($project['status'] === 'Validé')
                                        <span class="badge badge-approved">Validé</span>
                                    @elseif($project['status'] === 'Rejeté')
                                        <span class="badge badge-rejected">Rejeté</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-5">
                                    <i class="fas fa-inbox fa-3x text-muted mb-3 d-block"></i>
                                    <p class="text-muted mb-0">Aucun projet soumis pour le moment</p>
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
@endsection
