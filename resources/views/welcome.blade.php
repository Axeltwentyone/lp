<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoptongba — Bientôt</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..100,500&family=Instrument+Serif:ital@1&family=JetBrains+Mono:wght@400;500&family=Manrope:wght@400;500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bg text-ecru font-sans min-h-screen flex flex-col">

    <div class="relative flex flex-col min-h-screen px-8 py-8 overflow-hidden">

        {{-- Glow --}}
        <div class="absolute -top-[10%] left-1/2 w-[1100px] h-[800px] max-w-full pointer-events-none z-0 animate-glow-pulse"
             style="background: radial-gradient(ellipse at center, rgba(200,32,43,0.42) 0%, rgba(200,32,43,0.12) 40%, rgba(200,32,43,0) 72%); transform: translateX(-50%);">
        </div>

        {{-- Header --}}
        <header class="relative z-10 flex items-center justify-between w-full">
            <span class="font-['Bricolage_Grotesque',sans-serif] font-medium text-xl text-ecru tracking-[-0.4px] leading-none">
                shoptongba
            </span>
            <span class="font-['JetBrains_Mono',monospace] text-xs text-red tracking-[2.64px] uppercase leading-none">
                Abidjan &mdash; 2026
            </span>
        </header>

        {{-- Hero --}}
        <main class="relative z-10 flex-1 flex flex-col items-center justify-center gap-[22px] py-20 text-center">

            <p class="font-['JetBrains_Mono',monospace] text-xs text-red tracking-[2.64px] uppercase leading-none
                       animate-fade-up [animation-delay:0ms]">
                Quelque chose se prépare
            </p>

            <h1 class="font-['Bricolage_Grotesque',sans-serif] font-medium text-[60px] max-sm:text-[38px]
                        leading-[1.04] tracking-[-1.5px] max-sm:tracking-[-1px] text-ecru max-w-[660px]
                        animate-fade-up [animation-delay:150ms]">
                Bientôt, louer une voiture<br>
                à Abidjan prendra<br>
                <em class="font-['Instrument_Serif',serif] italic text-red">3 minutes.</em>
            </h1>

            <div class="animate-fade-up [animation-delay:300ms] w-[420px] max-w-full">
                @if(session('success'))
                    <p class="font-['JetBrains_Mono',monospace] text-[13px] tracking-[0.3px] leading-none
                               px-[18px] py-[10px] rounded-full inline-block
                               text-ecru bg-red/15 border border-red/35">
                        Merci &mdash; check tes mails.
                    </p>
                @elseif(session('already'))
                    <p class="font-['JetBrains_Mono',monospace] text-[13px] tracking-[0.3px] leading-none
                               px-[18px] py-[10px] rounded-full inline-block
                               text-ecru/50 bg-ecru/5 border border-ecru/12">
                        Tu es déjà dans la liste.
                    </p>
                @else
                    <form action="{{ route('subscribe') }}" method="POST"
                          class="flex items-center bg-ecru rounded-full pl-[22px] pr-[6px] py-[6px] gap-2 w-full">
                        @csrf
                        <input type="email" name="email" placeholder="ton@email.com" required
                               class="flex-1 bg-transparent border-none outline-none
                                      font-['Manrope',sans-serif] text-[15px] text-bg
                                      placeholder:text-bg/45 min-w-0">
                        <button type="submit"
                                class="bg-red rounded-[23px] size-[46px] flex items-center justify-center
                                       shrink-0 text-ecru text-xl cursor-pointer border-none
                                       transition-all duration-200 hover:opacity-80 hover:scale-95 active:scale-90">
                            &#8594;
                        </button>
                    </form>
                @endif
            </div>

            <p class="font-['Manrope',sans-serif] font-medium text-base text-ecru leading-none
                       animate-fade-up [animation-delay:420ms]">
                Djor, dans la sience &mdash; tu attends quoi&nbsp;?
            </p>

            <p class="font-['JetBrains_Mono',monospace] text-[13px] text-ecru/60 tracking-[0.39px] leading-none
                       animate-fade-up [animation-delay:540ms]">
                Déjà <strong class="font-medium text-red">{{ \App\Models\Subscriber::count() ?: 847 }}</strong> personnes savent.
                @if(!session('success'))
                    Tu seras le n°<strong class="font-medium text-red">{{ \App\Models\Subscriber::count() + 1 ?: 848 }}</strong>.
                @endif
            </p>

        </main>

        {{-- Footer --}}
        <footer class="relative z-10 text-center animate-fade-up [animation-delay:660ms]">
            <p class="font-['JetBrains_Mono',monospace] text-[11px] text-ecru/30 tracking-[2.42px] uppercase leading-none">
                Accès limité aux 1000 premiers
            </p>
        </footer>

    </div>

</body>
</html>
