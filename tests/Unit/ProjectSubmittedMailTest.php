<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Mail\ProjectSubmitted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectSubmittedMailTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que le mail de soumission de projet est correctement construit
     */
    public function test_project_submitted_mail_content(): void
    {
        $projectType = 'Web/App';
        $projectName = 'Mon Application Innovante';
        $projectDescription = 'Une application révolutionnaire pour simplifier la vie quotidienne';
        $userName = 'Jean Dupont';
        $userEmail = 'jean.dupont@example.com';

        $mail = new ProjectSubmitted(
            $projectType,
            $projectName,
            $projectDescription,
            $userName,
            $userEmail
        );

        // Vérifier que les propriétés sont correctement assignées
        $this->assertEquals($projectType, $mail->projectType);
        $this->assertEquals($projectName, $mail->projectName);
        $this->assertEquals($projectDescription, $mail->projectDescription);
        $this->assertEquals($userName, $mail->userName);
        $this->assertEquals($userEmail, $mail->userEmail);
    }

    /**
     * Test que le sujet du mail est correct
     */
    public function test_project_submitted_mail_subject(): void
    {
        $projectType = 'Franchise';
        
        $mail = new ProjectSubmitted(
            $projectType,
            'Test Project',
            'Test Description',
            'Test User',
            'test@example.com'
        );

        $envelope = $mail->envelope();
        
        $this->assertEquals('🎯 Nouveau Projet Soumis - ' . $projectType, $envelope->subject);
    }

    /**
     * Test que le mail utilise la bonne vue markdown
     */
    public function test_project_submitted_mail_uses_correct_view(): void
    {
        $mail = new ProjectSubmitted(
            'Web/App',
            'Test Project',
            'Test Description',
            'Test User',
            'test@example.com'
        );

        $content = $mail->content();
        
        $this->assertEquals('emails.project-submitted', $content->markdown);
    }

    /**
     * Test que le mail peut être envoyé sans erreur
     */
    public function test_project_submitted_mail_can_be_sent(): void
    {
        Mail::fake();

        $adminEmail = 'admin@appzeroinvestissement.com';

        Mail::to($adminEmail)->send(new ProjectSubmitted(
            'Marketplace Dépôt',
            'Vente Business Innovant',
            'Un business unique à vendre',
            'Marie Martin',
            'marie.martin@example.com'
        ));

        // Vérifier qu'un mail a été envoyé
        Mail::assertSent(ProjectSubmitted::class, function ($mail) use ($adminEmail) {
            return $mail->hasTo($adminEmail);
        });
    }

    /**
     * Test que le mail contient les bonnes informations pour différents types de projets
     */
    public function test_project_submitted_mail_for_different_project_types(): void
    {
        $projectTypes = [
            'Web/App',
            'Franchise',
            'Marketplace Dépôt',
            'Marketplace Achat',
            'Incubateur Zéro'
        ];

        foreach ($projectTypes as $type) {
            $mail = new ProjectSubmitted(
                $type,
                'Projet Test ' . $type,
                'Description pour ' . $type,
                'Utilisateur Test',
                'user@test.com'
            );

            $this->assertEquals($type, $mail->projectType);
            $this->assertStringContainsString($type, $mail->envelope()->subject);
        }
    }

    /**
     * Test que le mail gère correctement les descriptions longues
     */
    public function test_project_submitted_mail_handles_long_descriptions(): void
    {
        $longDescription = str_repeat('Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 50);

        $mail = new ProjectSubmitted(
            'Web/App',
            'Projet avec description longue',
            $longDescription,
            'Test User',
            'test@example.com'
        );

        $this->assertEquals($longDescription, $mail->projectDescription);
    }

    /**
     * Test que le mail gère correctement les caractères spéciaux
     */
    public function test_project_submitted_mail_handles_special_characters(): void
    {
        $projectName = "Projet avec des caractères spéciaux: é, è, ê, à, ç, œ, €";
        $description = "Description avec des symboles: <>&\"'";

        $mail = new ProjectSubmitted(
            'Web/App',
            $projectName,
            $description,
            'Jean-François O\'Connor',
            'jean-francois@example.com'
        );

        $this->assertEquals($projectName, $mail->projectName);
        $this->assertEquals($description, $mail->projectDescription);
        $this->assertEquals('Jean-François O\'Connor', $mail->userName);
    }

    /**
     * Test d'envoi multiple de mails
     */
    public function test_multiple_project_submitted_mails_can_be_sent(): void
    {
        Mail::fake();

        $adminEmail = 'admin@appzeroinvestissement.com';

        // Envoyer 3 mails différents
        for ($i = 1; $i <= 3; $i++) {
            Mail::to($adminEmail)->send(new ProjectSubmitted(
                'Web/App',
                "Projet $i",
                "Description du projet $i",
                "User $i",
                "user$i@example.com"
            ));
        }

        // Vérifier que 3 mails ont été envoyés
        Mail::assertSent(ProjectSubmitted::class, 3);
    }

    /**
     * Test que le mail n'est pas mis en file d'attente par défaut
     */
    public function test_project_submitted_mail_is_not_queued_by_default(): void
    {
        $mail = new ProjectSubmitted(
            'Web/App',
            'Test Project',
            'Test Description',
            'Test User',
            'test@example.com'
        );

        // Vérifier que le mail utilise bien le trait Queueable mais n'implémente pas ShouldQueue
        $this->assertFalse($mail instanceof \Illuminate\Contracts\Queue\ShouldQueue);
    }
}
