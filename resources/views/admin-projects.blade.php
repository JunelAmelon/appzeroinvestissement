@extends('layouts.app')

@section('title', 'Gestion des Projets')
@section('page-title', 'Gestion des Projets')
@section('page-subtitle', 'Examiner et gérer tous les projets soumis')

@section('content')
<style>
    .card {
        border-radius: 16px;
        border: none;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        margin-bottom: 2rem;
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

    .table {
        margin: 0;
    }

    .table thead th {
        background: #f8f9fa;
        color: #2c3e50;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        border: none;
        padding: 1rem 0.75rem;
    }

    .table tbody td {
        padding: 1rem 0.75rem;
        vertical-align: middle;
        border-color: #f0f0f0;
        font-size: 0.9rem;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    .badge {
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-weight: 500;
        font-size: 0.75rem;
        white-space: nowrap;
    }

    .badge-type {
        background: #e3f2fd;
        color: #1976d2;
        font-size: 0.7rem;
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

    .btn-view {
        background: var(--primary-color);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .btn-view:hover {
        background: #5a00a0;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(106, 0, 184, 0.3);
    }

    .filter-tabs {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .filter-tab {
        padding: 0.75rem 1.5rem;
        border: 2px solid #e0e0e0;
        border-radius: 25px;
        background: white;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        color: #555;
        font-weight: 500;
    }

    .filter-tab:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }

    .filter-tab.active {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    .project-description {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    @media (max-width: 1200px) {
        .card-header {
            padding: 1.25rem 1.5rem;
            font-size: 1.1rem;
        }
    }

    @media (max-width: 992px) {
        .filter-tabs {
            gap: 0.75rem;
        }
        
        .filter-tab {
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 768px) {
        .card-header {
            padding: 1rem 1.25rem;
            font-size: 1rem;
        }
        
        .filter-tab {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            flex: 1 1 calc(50% - 0.5rem);
            text-align: center;
        }
        
        .filter-tab i {
            display: none;
        }
        
        .table thead th,
        .table tbody td {
            padding: 0.75rem 0.5rem;
            font-size: 0.8rem;
        }
        
        .badge {
            padding: 0.3rem 0.6rem;
            font-size: 0.7rem;
        }
        
        .badge-type {
            font-size: 0.65rem;
        }
    }

    @media (max-width: 576px) {
        .filter-tabs {
            gap: 0.5rem;
        }
        
        .filter-tab {
            padding: 0.5rem 0.75rem;
            font-size: 0.75rem;
            flex: 1 1 calc(50% - 0.25rem);
        }
        
        .table thead th {
            font-size: 0.65rem;
            padding: 0.6rem 0.4rem;
        }
        
        .table tbody td {
            padding: 0.75rem 0.4rem;
            font-size: 0.75rem;
        }
        
        .btn-view {
            padding: 0.4rem 0.6rem !important;
            font-size: 0.75rem !important;
        }
    }
</style>

<div class="container-fluid">
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

    <!-- Filtres -->
    <div class="filter-tabs">
        <a href="{{ route('admin.projects') }}" class="filter-tab {{ !request('status') ? 'active' : '' }}">
            <i class="fas fa-list me-2"></i>Tous ({{ $totalProjects }})
        </a>
        <a href="{{ route('admin.projects', ['status' => 'En attente']) }}" class="filter-tab {{ request('status') === 'En attente' ? 'active' : '' }}">
            <i class="fas fa-clock me-2"></i>En attente ({{ $pendingProjects }})
        </a>
        <a href="{{ route('admin.projects', ['status' => 'Validé']) }}" class="filter-tab {{ request('status') === 'Validé' ? 'active' : '' }}">
            <i class="fas fa-check-circle me-2"></i>Validés ({{ $approvedProjects }})
        </a>
        <a href="{{ route('admin.projects', ['status' => 'Rejeté']) }}" class="filter-tab {{ request('status') === 'Rejeté' ? 'active' : '' }}">
            <i class="fas fa-times-circle me-2"></i>Rejetés ({{ $rejectedProjects }})
        </a>
    </div>

    <!-- Tableau des projets -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-folder-open"></i>
            @if(request('status'))
                Projets {{ request('status') }}
            @else
                Tous les Projets
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Projet</th>
                            <th style="width: 20%;">Soumis par</th>
                            <th style="width: 15%;">Date/Statut</th>
                            <th style="width: 10%;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>
                                    <span class="badge badge-type mb-2">{{ $project['type'] }}</span>
                                    <div><strong>{{ $project['name'] }}</strong></div>
                                    <small class="text-muted" style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $project['description'] }}</small>
                                </td>
                                <td>
                                    <div style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $project['user']->name }}</div>
                                    <small class="text-muted" style="display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $project['user']->email }}</small>
                                </td>
                                <td>
                                    <div class="mb-1">{{ $project['created_at']->format('d/m/Y') }}</div>
                                    @if($project['status'] === 'En attente')
                                        <span class="badge badge-pending">En attente</span>
                                    @elseif($project['status'] === 'Validé')
                                        <span class="badge badge-approved">Validé</span>
                                    @elseif($project['status'] === 'Rejeté')
                                        <span class="badge badge-rejected">Rejeté</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.project.show', ['type' => $project['type_key'], 'id' => $project['id']]) }}" 
                                       class="btn-view" style="padding: 0.5rem 1rem; font-size: 0.85rem; display: inline-block;">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <i class="fas fa-inbox fa-3x text-muted mb-3 d-block"></i>
                                    <p class="text-muted mb-0">Aucun projet trouvé</p>
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
                            <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="?page={{ $currentPage - 1 }}{{ request('status') ? '&status='.request('status') : '' }}" aria-label="Précédent">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>

                            @for($i = 1; $i <= $totalPages; $i++)
                                <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                                    <a class="page-link" href="?page={{ $i }}{{ request('status') ? '&status='.request('status') : '' }}">{{ $i }}</a>
                                </li>
                            @endfor

                            <li class="page-item {{ $currentPage == $totalPages ? 'disabled' : '' }}">
                                <a class="page-link" href="?page={{ $currentPage + 1 }}{{ request('status') ? '&status='.request('status') : '' }}" aria-label="Suivant">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="text-center text-muted mb-3">
                    <small>Page {{ $currentPage }} sur {{ $totalPages }} ({{ $filteredCount }} projet(s))</small>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
