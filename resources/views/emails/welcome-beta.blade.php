<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu es dans la liste — shoptongba</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..100,500&family=Instrument+Serif:ital@1&family=JetBrains+Mono:wght@400;500&family=Manrope:wght@400;500&display=swap');

        body {
            margin: 0;
            padding: 0;
            background-color: #F3EDE2;
            font-family: 'Manrope', Arial, sans-serif;
            color: black;
        }

        .wrapper {
            max-width: 560px;
            margin: 0 auto;
            padding: 48px 32px;
        }

        .logo {
            font-family: 'Bricolage Grotesque', Arial, sans-serif;
            font-weight: 500;
            font-size: 18px;
            color: black;
            letter-spacing: -0.4px;
            margin-bottom: 48px;
        }

        .badge {
            display: inline-block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 400;
            color: #C8202B;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .heading {
            font-family: 'Bricolage Grotesque', Arial, sans-serif;
            font-weight: 500;
            font-size: 36px;
            line-height: 1.1;
            letter-spacing: -1px;
            color: black;
            margin: 0 0 24px;
        }

        .heading em {
            font-family: 'Instrument Serif', Georgia, serif;
            font-style: italic;
            color: #C8202B;
        }

        .divider {
            width: 40px;
            height: 2px;
            background: #C8202B;
            margin: 28px 0;
        }

        .body-text {
            font-family: 'Manrope', Arial, sans-serif;
            font-size: 15px;
            font-weight: 400;
            color: rgba(243, 237, 226, 0.75);
            line-height: 1.65;
            margin: 0 0 16px;
        }

        .number-block {
            background: rgba(200, 32, 43, 0.08);
            border: 1px solid rgba(200, 32, 43, 0.25);
            border-radius: 12px;
            padding: 20px 24px;
            margin: 28px 0;
            text-align: center;
        }

        .number-label {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 400;
            color: rgba(243, 237, 226, 0.4);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .number-value {
            font-family: 'JetBrains Mono', monospace;
            font-size: 32px;
            font-weight: 500;
            color: #C8202B;
            line-height: 1;
        }

        .footer {
            margin-top: 48px;
            padding-top: 24px;
            border-top: 1px solid rgba(243, 237, 226, 0.08);
        }

        .footer p {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 400;
            color: rgba(243, 237, 226, 0.25);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="logo">shoptongba</div>

        <div class="badge">Accès bêta confirmé</div>

        <h1 class="heading">
            Tu es dans<br>
            la <em>liste.</em>
        </h1>

        <div class="divider"></div>

        <p class="body-text">
            On t'a bien reçu. Tu fais partie des premiers à savoir que quelque chose se prépare à Abidjan.
        </p>

        <p class="body-text">
            Quand shoptongba ouvrira, tu seras parmi les tout premiers à pouvoir louer une voiture en 3 minutes — avant tout le monde.
        </p>

        <div class="number-block">
            <div class="number-label">Ton numéro de liste</div>
            <div class="number-value">n°{{ $subscriber->number }}</div>
        </div>

        <p class="body-text">
            On reviendra vers toi très bientôt. D'ici là, reste dans la sience.
        </p>

        <div class="footer">
            <p>Abidjan &mdash; 2026 &mdash; Accès limité aux 1000 premiers</p>
        </div>
    </div>
</body>
</html>
