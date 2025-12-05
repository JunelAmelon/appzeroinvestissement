@component('mail::message')
{{-- Header avec logo et couleurs de la marque --}}
<div style="text-align: center; padding: 30px 0; background: linear-gradient(135deg, #6A00B8, #00d4ff); border-radius: 8px 8px 0 0; margin: -40px -40px 30px -40px;">
    <div style="background: white; padding: 8px 20px; border-radius: 8px; display: inline-block;">
        <span style="font-size: 28px; font-weight: 700; background: linear-gradient(135deg, #6A00B8, #00d4ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
            ZeroInvestissement
        </span>
    </div>
</div>

<div style="padding: 0 20px;">
    <h1 style="color: #6A00B8; font-size: 24px; margin-bottom: 10px;">
        Nouveau Projet Soumis
    </h1>

    <p style="color: #666; font-size: 16px; line-height: 1.6;">
        Bonjour,<br><br>
        Un nouveau projet vient d'être soumis sur la plateforme <strong style="color: #6A00B8;">ZeroInvestissement</strong>.
    </p>

    {{-- Carte du projet --}}
    <div style="background: #f8f9fa; border-left: 4px solid #6A00B8; padding: 20px; margin: 25px 0; border-radius: 4px;">
        <h2 style="color: #6A00B8; font-size: 18px; margin: 0 0 15px 0;">
            Détails du projet
        </h2>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px 0; color: #666; font-weight: 600;">Type de projet :</td>
                <td style="padding: 8px 0; color: #333;">{{ $projectType }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #666; font-weight: 600;">Nom du projet :</td>
                <td style="padding: 8px 0; color: #333; font-weight: 700;">{{ $projectName }}</td>
            </tr>
        </table>
        
        <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #dee2e6;">
            <p style="color: #666; font-weight: 600; margin: 0 0 8px 0;">Description :</p>
            <p style="color: #333; margin: 0; line-height: 1.6;">{{ Str::limit($projectDescription, 200) }}</p>
        </div>
    </div>

    {{-- Informations du soumissionnaire --}}
    <div style="background: linear-gradient(135deg, rgba(106, 0, 184, 0.05), rgba(0, 212, 255, 0.05)); padding: 20px; margin: 25px 0; border-radius: 8px;">
        <h2 style="color: #6A00B8; font-size: 18px; margin: 0 0 15px 0;">
            Informations du soumissionnaire
        </h2>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px 0; color: #666; font-weight: 600;">Nom :</td>
                <td style="padding: 8px 0; color: #333;">{{ $userName }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #666; font-weight: 600;">Email :</td>
                <td style="padding: 8px 0;">
                    <a href="mailto:{{ $userEmail }}" style="color: #6A00B8; text-decoration: none;">{{ $userEmail }}</a>
                </td>
            </tr>
        </table>
    </div>

    {{-- Bouton d'action --}}
    <div style="text-align: center; margin: 35px 0;">
        @component('mail::button', ['url' => config('app.url') . '/admin', 'color' => 'primary'])
            Consulter le Dashboard Admin
        @endcomponent
    </div>

    {{-- Footer --}}
    <div style="margin-top: 40px; padding-top: 20px; border-top: 2px solid #e9ecef; text-align: center; color: #999; font-size: 14px;">
        <p style="margin: 0;">
            Cet email a été envoyé automatiquement par la plateforme<br>
            <strong style="color: #6A00B8;">ZeroInvestissement</strong>
        </p>
        <p style="margin: 10px 0 0 0; font-size: 12px;">
            © {{ date('Y') }} ZeroInvestissement. Tous droits réservés.
        </p>
    </div>
</div>
@endcomponent
