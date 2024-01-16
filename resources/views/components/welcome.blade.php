<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Vitejte na portálu událostí, které vás mohou potkat během vašeho studijního života.
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Ať už hledáte, či jen brouzdáte internetem po něčem co podniknout, doufáme že zde najdete to co bude zajímat.
    </p>
    <style>.button-wstart{--text-base:212deg,91%,58%;--text-hover:212deg,91%,46%;--shadow-start:52deg,100%,72%;--shadow-end:220deg,90%,31%;--shadow-inner:220deg,90%,62%;all:unset;color:hsla(var(--text-base),1);font:700 1.125rem/1.2 Raleway,sans-serif;letter-spacing:.08em;text-transform:uppercase;text-align:center;padding:.85em;max-width:100%;width:12em;background:inherit;background-clip:padding-box;border:5px solid hsla(var(--text-base),1);border-radius:2em;cursor:pointer;position:relative;transition:.25s ease-out;margin-top:14px}.button-wstart::after,.button-wstart::before{content:"";border-radius:inherit;transition:inherit;position:absolute;inset:0;pointer-events:none}.button-wstart::before{inset:-0.2em;z-index:-1;background:linear-gradient(hsla(var(--shadow-start),1),hsla(var(--shadow-end),1));filter:blur(1.2em) saturate(1.2);transform-origin:bottom;transform:scaleY(.5);opacity:0}.button-wstart::after{box-shadow:inset 0 0 0 1px #fff,0 0 0 4px rgba(255,255,255,.7),1px 1px 0 4px #fff;mix-blend-mode:overlay;opacity:0}.button-wstart:hover,button-wstart:focus{color:hsla(var(--text-hover),1);border-color:transparent;box-shadow:inset 0 1.4em 0 hsla(var(--shadow-inner),.1),inset 0 0 1.4em hsla(var(--shadow-inner),.32),0 1px 1px hsla(var(--shadow-inner),.32)}.button-wstart:focus::after,.button-wstart:focus::before,.button-wstart:hover::after,.button-wstart:hover::before{transform:none;opacity:1}.container{padding:3em;position:relative;z-index:1}
    </style>
    <a href="{{ route('events.index') }}">
        <button class="button-wstart">Seznam akcí</button>
    </a>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a>Související odkazy</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://github.com/CendaCZ/lcal-zcu" class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Přejít na GitHub

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                <a href="https://laracasts.com">O nás</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            Backend, Visual Design • <b>Čeněk U.</b><br>
            Frontend • <b>Tereza J.</b><br>
            <i>Umožněno uskutečnit díky Laravel Jetstream</i>
        </p>

        <p class="mt-4 text-sm">
            <a class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                Děkujeme lidem a projektům, bez nichž by realizace byla mnohonásobně obtížnější.

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
</div>
