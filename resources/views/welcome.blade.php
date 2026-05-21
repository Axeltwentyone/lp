<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoptongba — Bientôt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..100,400;12..96,75..100,500;12..96,75..100,600&family=Instrument+Serif:ital@1&family=JetBrains+Mono:wght@400;500&family=Manrope:wght@400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #0D0A09;
            --ecru: #F3EDE2;
            --red: #C8202B;
        }

        html, body {
            height: 100%;
        }

        body {
            background-color: var(--bg);
            color: var(--ecru);
            font-family: 'Manrope', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 32px;
            overflow: hidden;
        }

        /* Radial red glow */
        .glow {
            position: absolute;
            top: -10%;
            left: 50%;
            transform: translateX(-50%);
            width: 1100px;
            height: 800px;
            background: radial-gradient(ellipse at center, rgba(200,32,43,0.42) 0%, rgba(200,32,43,0.12) 40%, rgba(200,32,43,0) 72%);
            pointer-events: none;
            z-index: 0;
            max-width: 100%;
        }

        /* Header */
        .header {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 500;
            font-size: 20px;
            color: var(--ecru);
            letter-spacing: -0.4px;
            line-height: 1;
        }

        .location {
            font-family: 'JetBrains Mono', monospace;
            font-weight: 400;
            font-size: 12px;
            color: var(--red);
            letter-spacing: 2.64px;
            text-transform: uppercase;
            line-height: 1;
        }

        /* Main hero */
        .main {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 22px;
            padding: 80px 0;
            text-align: center;
        }

        .eyebrow {
            font-family: 'JetBrains Mono', monospace;
            font-weight: 400;
            font-size: 12px;
            color: var(--red);
            letter-spacing: 2.64px;
            text-transform: uppercase;
            line-height: 1;
        }

        .heading {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 500;
            font-size: 60px;
            line-height: 1.04;
            letter-spacing: -1.5px;
            color: var(--ecru);
            max-width: 660px;
        }

        .heading em {
            font-family: 'Instrument Serif', serif;
            font-style: italic;
            color: var(--red);
        }

        /* Email form */
        .form {
            display: flex;
            align-items: center;
            background: var(--ecru);
            border-radius: 100px;
            padding: 6px 6px 6px 22px;
            width: 420px;
            max-width: 100%;
            gap: 8px;
        }

        .form input {
            flex: 1;
            border: none;
            background: transparent;
            font-family: 'Manrope', sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: var(--bg);
            outline: none;
            min-width: 0;
        }

        .form input::placeholder {
            color: rgba(13, 10, 9, 0.45);
        }

        .form button {
            background: var(--red);
            border: none;
            border-radius: 23px;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--ecru);
            font-size: 20px;
            line-height: 1;
            flex-shrink: 0;
            transition: opacity 0.2s;
        }

        .form button:hover {
            opacity: 0.85;
        }

        .tagline {
            font-family: 'Manrope', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: var(--ecru);
            line-height: 1;
        }

        .counter {
            font-family: 'JetBrains Mono', monospace;
            font-weight: 400;
            font-size: 13px;
            color: rgba(243, 237, 226, 0.6);
            letter-spacing: 0.39px;
            line-height: 1;
        }

        .counter strong {
            font-weight: 500;
            color: var(--red);
        }

        /* Footer */
        .footer {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .footer p {
            font-family: 'JetBrains Mono', monospace;
            font-weight: 400;
            font-size: 11px;
            color: rgba(243, 237, 226, 0.3);
            letter-spacing: 2.42px;
            text-transform: uppercase;
            line-height: 1;
        }

        /* Feedback messages */
        .message {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            letter-spacing: 0.3px;
            line-height: 1;
            padding: 10px 18px;
            border-radius: 100px;
        }

        .message--success {
            color: #F3EDE2;
            background: rgba(200, 32, 43, 0.15);
            border: 1px solid rgba(200, 32, 43, 0.35);
        }

        .message--already {
            color: rgba(243, 237, 226, 0.5);
            background: rgba(243, 237, 226, 0.05);
            border: 1px solid rgba(243, 237, 226, 0.12);
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 24px 20px;
            }

            .heading {
                font-size: 38px;
                letter-spacing: -1px;
                line-height: 1.08;
            }

            .form {
                width: 100%;
            }

            .glow {
                width: 100%;
                height: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="glow"></div>

        <!-- Header -->
        <header class="header">
            <span class="logo">shoptongba</span>
            <span class="location">Abidjan &mdash; 2026</span>
        </header>

        <!-- Hero -->
        <main class="main">
            <p class="eyebrow">Quelque chose se prépare</p>

            <h1 class="heading">
                Bientôt, louer une voiture<br>
                à Abidjan prendra<br>
                <em>3 minutes.</em>
            </h1>

            @if(session('success'))
                <p class="message message--success">
                    Bienvenu·e — tu es le n°<strong>{{ session('success') }}</strong>&nbsp;🎉
                </p>
            @elseif(session('already'))
                <p class="message message--already">Tu es déjà dans la liste.</p>
            @else
                <form class="form" action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="ton@email.com" required>
                    <button type="submit">&#8594;</button>
                </form>
            @endif

            <p class="tagline">Djor, dans la sience &mdash; tu attends quoi&nbsp;?</p>

            <p class="counter">
                Déjà <strong>{{ \App\Models\Subscriber::count() ?: 847 }}</strong> personnes savent.
                @if(!session('success'))
                    Tu seras le n°<strong>{{ \App\Models\Subscriber::count() + 1 ?: 848 }}</strong>.
                @endif
            </p>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>Accès limité aux 1000 premiers</p>
        </footer>
    </div>
</body>
</html>
