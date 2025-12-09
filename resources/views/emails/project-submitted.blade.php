<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Projet Soumis</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f4f4f9; line-height: 1.6;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f4f4f9;">
        <tr>
            <td style="padding: 40px 20px;">
                <table role="presentation" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background: #6A00B8; padding: 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px; text-align: center;">
                                Zero Investissement
                            </h1>
                            <p style="margin: 10px 0 0 0; color: rgba(255,255,255,0.9); font-size: 14px; font-weight: 400; text-align: center;">
                                Plateforme de gestion de projets innovants
                            </p>
                        </td>
                    </tr>

                    <!-- Notification Badge -->
                    <tr>
                        <td style="padding: 0; position: relative;">
                            <div style="margin: -25px auto 0; width: fit-content; background: #ffffff; padding: 12px 30px; border-radius: 50px; box-shadow: 0 4px 15px rgba(106,0,184,0.2); border: 2px solid #6A00B8;">
                                <span style="color: #6A00B8; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">
                                    🎯 Nouvelle Soumission
                                </span>
                            </div>
                        </td>
                    </tr>

                    <!-- Main Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h2 style="margin: 0 0 15px 0; color: #2c3e50; font-size: 24px; font-weight: 700; text-align: center;">
                                Nouveau Projet Soumis
                            </h2>
                            <p style="margin: 0 0 35px 0; color: #666; font-size: 15px; text-align: center; line-height: 1.6;">
                                Un nouveau projet vient d'être soumis sur votre plateforme.<br>
                                Consultez les détails ci-dessous.
                            </p>

                            <!-- Project Details Card -->
                            <table role="presentation" style="width: 100%; border-collapse: collapse; margin: 0 0 25px 0; background: #f8f9fa; border-radius: 12px; overflow: hidden;">
                                <tr>
                                    <td style="padding: 25px;">
                                        <div style="margin-bottom: 20px;">
                                            <div style="display: inline-block; background: #6A00B8; width: 40px; height: 40px; border-radius: 10px; text-align: center; line-height: 40px; font-size: 20px; margin-right: 12px; vertical-align: middle;">
                                                📁
                                            </div>
                                            <span style="color: #6A00B8; font-size: 18px; font-weight: 700; vertical-align: middle;">
                                                Détails du Projet
                                            </span>
                                        </div>

                                        <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                            <tr>
                                                <td style="padding: 12px 15px; background: rgba(106,0,184,0.08); color: #6A00B8; font-weight: 600; font-size: 14px; border-radius: 8px 0 0 0; width: 35%;">
                                                    📌 Type
                                                </td>
                                                <td style="padding: 12px 15px; background: #ffffff; color: #333; font-weight: 600; border-radius: 0 8px 0 0;">
                                                    {{ $projectType }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="height: 8px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 12px 15px; background: rgba(106,0,184,0.08); color: #6A00B8; font-weight: 600; font-size: 14px;">
                                                    ✨ Nom
                                                </td>
                                                <td style="padding: 12px 15px; background: #ffffff; color: #333; font-weight: 700; font-size: 16px;">
                                                    {{ $projectName }}
                                                </td>
                                            </tr>
                                        </table>

                                        <div style="margin-top: 20px; padding: 20px; background: #ffffff; border-radius: 10px;">
                                            <p style="margin: 0 0 10px 0; color: #6A00B8; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">
                                                📝 Description
                                            </p>
                                            <p style="margin: 0; color: #555; line-height: 1.7; font-size: 14px;">
                                                {{ Str::limit($projectDescription, 200) }}
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Submitter Info Card -->
                            <table role="presentation" style="width: 100%; border-collapse: collapse; margin: 0 0 30px 0; background: rgba(0,212,255,0.06); border-radius: 12px; overflow: hidden; border: 2px solid rgba(0,212,255,0.15);">
                                <tr>
                                    <td style="padding: 25px;">
                                        <div style="margin-bottom: 20px;">
                                            <div style="display: inline-block; background: #00d4ff; width: 40px; height: 40px; border-radius: 10px; text-align: center; line-height: 40px; font-size: 20px; margin-right: 12px; vertical-align: middle;">
                                                👤
                                            </div>
                                            <span style="color: #00a8cc; font-size: 18px; font-weight: 700; vertical-align: middle;">
                                                Soumis par
                                            </span>
                                        </div>

                                        <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                            <tr>
                                                <td style="padding: 12px 15px; background: rgba(0,212,255,0.12); color: #0099cc; font-weight: 600; font-size: 14px; border-radius: 8px 0 0 0; width: 30%;">
                                                    👨‍💼 Nom
                                                </td>
                                                <td style="padding: 12px 15px; background: #ffffff; color: #333; font-weight: 600; border-radius: 0 8px 0 0;">
                                                    {{ $userName }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="height: 8px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 12px 15px; background: rgba(0,212,255,0.12); color: #0099cc; font-weight: 600; font-size: 14px; border-radius: 0 0 0 8px;">
                                                    📧 Email
                                                </td>
                                                <td style="padding: 12px 15px; background: #ffffff; border-radius: 0 0 8px 0;">
                                                    <a href="mailto:{{ $userEmail }}" style="color: #6A00B8; text-decoration: none; font-weight: 600;">
                                                        {{ $userEmail }}
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- CTA Button -->
                            <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="text-align: center; padding: 20px 0;">
                                        <a href="{{ config('app.url') }}/admin" style="display: inline-block; background: #6A00B8; color: #ffffff; text-decoration: none; padding: 16px 40px; border-radius: 50px; font-weight: 700; font-size: 15px; box-shadow: 0 4px 15px rgba(106,0,184,0.3); transition: all 0.3s ease;">
                                            Accéder au Dashboard Admin
                                        </a>
                                        <p style="margin: 15px 0 0 0; color: #999; font-size: 13px;">
                                            Cliquez pour examiner le projet en détail
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 30px; background: #f8f9fa; text-align: center; border-top: 1px solid #e9ecef;">
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 13px; text-align: center;">
                                Cet email a été envoyé automatiquement par
                            </p>
                            <p style="margin: 0 0 15px 0; color: #6A00B8; font-size: 16px; font-weight: 700; text-align: center;">
                                Zero Investissement
                            </p>
                            <p style="margin: 0 0 12px 0; color: #999; font-size: 12px; text-align: center;">
                                © {{ date('Y') }} Zero Investissement. Tous droits réservés.
                            </p>
                            <a href="{{ config('app.url') }}" style="color: #6A00B8; text-decoration: none; font-size: 12px; font-weight: 600; text-align: center; display: block;">
                                www.zeroinvestissement.com
                            </a>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
