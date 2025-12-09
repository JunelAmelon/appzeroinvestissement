@extends('layouts.app')

@section('title', 'Détails du Projet')
@section('page-title', $projectData['name'])
@section('page-subtitle', 'Informations complètes du projet')

@section('content')
<style>
    .project-header {
        background: var(--primary-color);
        color: white;
        border-radius: 16px;
        padding: 2.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 20px rgba(106, 0, 184, 0.25);
    }

    .project-header h2 {
        margin: 0 0 0.5rem 0;
        font-size: 2rem;
        font-weight: 700;
    }

    .project-meta {
        display: flex;
        gap: 2rem;
        margin-top: 1rem;
        flex-wrap: wrap;
    }

    .project-meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .project-meta-item i {
        opacity: 0.9;
    }

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
        border-bottom: 3px solid var(--primary-color);
    }

    .card-header i {
        color: var(--primary-color);
        margin-right: 0.75rem;
    }

    .card-body {
        padding: 2rem;
    }

    .detail-row {
        padding: 1.25rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 2rem;
        align-items: start;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-weight: 600;
        color: #2c3e50;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .detail-label i {
        color: var(--primary-color);
        font-size: 0.9rem;
    }

    .detail-value {
        color: #555;
        line-height: 1.6;
        word-break: break-word;
    }

    .badge {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
        font-size: 0.85rem;
        display: inline-block;
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

    .action-buttons {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-back {
        background: #6c757d;
        color: white;
    }

    .btn-back:hover {
        background: #5a6268;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn-success {
        background: #28a745;
        color: white;
    }

    .btn-success:hover {
        background: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    }

    .btn-danger {
        background: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background: #c82333;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
    }

    @media (max-width: 1200px) {
        .detail-card {
            padding: 1.5rem;
        }
    }

    @media (max-width: 992px) {
        .detail-row {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }

        .project-header {
            padding: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .project-header {
            padding: 1.25rem;
        }

        .project-header h2 {
            font-size: 1.5rem;
        }

        .detail-row {
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        .project-meta {
            flex-direction: column;
            gap: 0.5rem;
        }

        .detail-card {
            padding: 1.25rem;
        }

        .detail-label {
            font-size: 0.85rem;
        }

        .detail-value {
            font-size: 0.9rem;
        }

        .btn-action {
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .project-header {
            padding: 1rem;
        }

        .project-header h2 {
            font-size: 1.25rem;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.35rem 0.75rem;
        }

        .detail-card {
            padding: 1rem;
        }

        .detail-label {
            font-size: 0.8rem;
        }

        .detail-value {
            font-size: 0.85rem;
        }

        .btn-action {
            padding: 0.6rem 1.2rem;
            font-size: 0.85rem;
        }

        .project-meta-item {
            font-size: 0.85rem;
        }
    }
</style>

<div class="container-fluid">
    <!-- En-tête du projet -->
    <div class="project-header">
        <div class="d-flex justify-content-between align-items-start">
            <div>
                <span class="badge badge-type mb-2">{{ $projectData['type'] }}</span>
                <h2>{{ $projectData['name'] }}</h2>
                <p class="mb-0" style="opacity: 0.95;">{{ $projectData['description'] }}</p>
            </div>
            <div>
                @if($projectData['status'] === 'En attente')
                    <span class="badge badge-pending">{{ $projectData['status'] }}</span>
                @elseif($projectData['status'] === 'Validé')
                    <span class="badge badge-approved">{{ $projectData['status'] }}</span>
                @elseif($projectData['status'] === 'Rejeté')
                    <span class="badge badge-rejected">{{ $projectData['status'] }}</span>
                @endif
            </div>
        </div>
        
        <div class="project-meta">
            <div class="project-meta-item">
                <i class="fas fa-user"></i>
                <span><strong>Soumis par:</strong> {{ $projectData['user']->name }}</span>
            </div>
            <div class="project-meta-item">
                <i class="fas fa-envelope"></i>
                <span>{{ $projectData['user']->email }}</span>
            </div>
            <div class="project-meta-item">
                <i class="fas fa-calendar"></i>
                <span>{{ $projectData['created_at']->format('d/m/Y à H:i') }}</span>
            </div>
        </div>
    </div>

    <!-- Détails du projet -->
    <div class="card">
        <div class="card-header">
            <i class="fas fa-info-circle"></i>Informations Détaillées
        </div>
        <div class="card-body">
            @foreach($projectData['details'] as $label => $value)
                @if($value !== null && $value !== '')
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-chevron-right"></i>
                        {{ $label }}
                    </div>
                    <div class="detail-value">
                        {{ $value }}
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Actions -->
    <div class="action-buttons">
        <a href="{{ route('admin') }}" class="btn btn-back">
            <i class="fas fa-arrow-left me-2"></i>Retour à la liste
        </a>

        @if($projectData['status'] !== 'Validé')
            <form action="{{ route('admin.updateStatus') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="type" value="{{ $projectData['type_key'] }}">
                <input type="hidden" name="id" value="{{ $projectData['id'] }}">
                <input type="hidden" name="status" value="Validé">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-check me-2"></i>Valider le projet
                </button>
            </form>
        @endif

        @if($projectData['status'] !== 'Rejeté')
            <form action="{{ route('admin.updateStatus') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="type" value="{{ $projectData['type_key'] }}">
                <input type="hidden" name="id" value="{{ $projectData['id'] }}">
                <input type="hidden" name="status" value="Rejeté">
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-times me-2"></i>Rejeter le projet
                </button>
            </form>
        @endif
    </div>
</div>
@endsection
