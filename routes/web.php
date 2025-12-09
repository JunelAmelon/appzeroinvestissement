<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectSubmitted;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', [ClientController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', function () {
    return view('projects');
})->middleware(['auth', 'verified'])->name('projects');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/siteapp', [ClientController::class, 'showsiteapp'])->name('siteapp');
Route::post('/siteappsave', [ClientController::class, 'regsiteapp'])->name('siteapp.save');

Route::get('/franchise', [ClientController::class, 'showfranchise'])->name('franchise');
Route::post('/franchisesave', [ClientController::class, 'regfranchise'])->name('franchise.save');

Route::get('/marketplace', [ClientController::class, 'showmarketplace'])->name('marketplace');
Route::post('/marketplacesave', [ClientController::class, 'regmarketplace'])->name('marketplace.save');

Route::get('/marketplace-depot', [ClientController::class, 'showMarketplaceDepot'])->name('marketplace.depot');
Route::post('/marketplace-depot/save', [ClientController::class, 'regMarketplaceDepot'])->name('marketplace.depot.save');

Route::get('/marketplace-achat', [ClientController::class, 'showMarketplaceAchat'])->name('marketplace.achat');
Route::post('/marketplace-achat/save', [ClientController::class, 'regMarketplaceAchat'])->name('marketplace.achat.save');

Route::get('/incubateur-zero', [ClientController::class, 'showIncubateurZero'])->name('incubateur.zero');
Route::post('/incubateur-zero/save', [ClientController::class, 'regIncubateurZero'])->name('incubateur.zero.save');

// Routes Admin (protégées par middleware admin)
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin', [ClientController::class, 'showAdmin'])->name('admin');
    Route::get('/admin/projects', [ClientController::class, 'manageProjects'])->name('admin.projects');
    Route::post('/admin/update-status', [ClientController::class, 'updateProjectStatus'])->name('admin.updateStatus');
    Route::get('/admin/project/{type}/{id}', [ClientController::class, 'showProject'])->name('admin.project.show');
});

// Route de test pour l'envoi du mail (à supprimer en production)
Route::get('/test-email', function () {
    $projectType = 'Web/App';
    $projectName = 'Application Mobile Innovante';
    $projectDescription = 'Une application révolutionnaire qui simplifie la gestion quotidienne des tâches avec une interface intuitive et des fonctionnalités d\'intelligence artificielle avancées.';
    $userName = 'Jean Dupont';
    $userEmail = 'jean.dupont@example.com';

    Mail::to('admin@appzeroinvestissement.com')->send(
        new ProjectSubmitted(
            $projectType,
            $projectName,
            $projectDescription,
            $userName,
            $userEmail
        )
    );

    return 'Email de test envoyé avec succès ! Vérifiez votre boîte mail.';
})->name('test.email');

require __DIR__.'/auth.php';
