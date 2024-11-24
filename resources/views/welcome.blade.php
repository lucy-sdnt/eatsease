<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EatsEase</title>
        <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:white;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            .home-link {
            position: fixed;
            top: 15px;
            right: 1150px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 999;
            }

            .home-link img {
                width: 20px;
                height: 20px;
                fill: #fff;
            }
            .logout-btn {
                background-color: #f64d33;
                color: #fff;
                font-size: 16px;
                font-weight: bold;
                border: none;
                border-radius: 4px;
                padding: 10px 20px;
                cursor: pointer;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                transition: background-color 0.3s, box-shadow 0.3s;
            }

            .logout-btn:hover {
                background-color: #f47d66;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            h1, form{
                display: inline-block;
                margin-right: 10px;
            }
        </style>
    </head>
    <body class="antialiased">

        

        <a href="/" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>
        

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
                        <h1 class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <?php echo e(Auth::user()->name); ?>
                        </h1>
                        <form action="/logout" method="POST" id="logout-form">
                            @csrf
                            <button type="submit" class="logout-btn">Salir</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    
                </div>

                <br><br>

                <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        {{-- <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                        </div> --}}

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">🩸 Refresca para Tips 🩸</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed" id="phrase">
                            
                        </p>
                    </div>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        
                        <a href="/listadoMenu" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-50 w-50 bg-red-50 flex items-center justify-center">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg> --}}
                                    <img src="https://content-management-files.canva.com/cdn-cgi/image/f=auto,q=70/77fadcd3-00a6-4a0d-8437-e2d0cd9e9a3e/header_product-name2.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Menú</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Edite fácilmente el menú de su restaurante en nuestra intuitiva página web. Añada nuevos platos, actualice precios y descripciones, y cambie las categorías con unos simples clics. Mantenga su menú siempre actualizado y atractivo para sus clientes, ofreciendo una experiencia gastronómica excepcional.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoCategorias" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.nobbot.com/wp-content/uploads/2017/04/etiqueta-categoria.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Categorias</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Administre y organice las categorías de su menú de restaurante de manera eficiente en nuestra plataforma web fácil de usar. Añada, edite o elimine categorías como entrantes, platos principales, postres y bebidas con solo unos clics. Optimice la presentación de su menú y facilite la navegación.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoOrdenes" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://img.freepik.com/fotos-premium/mujer-negocios-escritura-pluma-libreta-oficina-copia-spase_330426-817.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Ordenes</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Gestione las órdenes de sus clientes de manera eficiente y en tiempo real a través de nuestra intuitiva plataforma web. Visualice, actualice y confirme las órdenes rápidamente para garantizar un servicio ágil y preciso. Mantenga un flujo de trabajo organizado y mejore la experiencia gastronómica de sus clientes.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoProductos" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.cocinacaserayfacil.net/wp-content/uploads/2020/03/Recetas-faciles-de-cocinar-y-sobrevivir-en-casa-al-coronavirus_2.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Contenido de orden</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Administre y edite fácilmente el contenido de las órdenes de sus clientes en nuestra intuitiva plataforma web. Añada, modifique o elimine platos, ajuste cantidades y personalizaciones, y actualice el estado de las órdenes en tiempo real. Optimice el proceso de atención al cliente y garantice la satisfacción del comensal.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoInventario" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="data:image/jpeg;base64,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" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Inventario</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Controle y actualice el inventario de su restaurante de manera eficiente a través de nuestra plataforma web fácil de usar. Registre productos, ajuste cantidades, monitoree niveles de existencias y reciba alertas de reposición o vencimientos. Optimice la gestión de insumos y reduzca el desperdicio.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoProveedores" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.techedgegroup.com/hubfs/proveed.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Proveedores</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Gestione y actualice la información de sus proveedores de manera organizada en nuestra plataforma web intuitiva y fácil de usar. Registre nuevos proveedores, edite sus datos de contacto, categorice sus productos y monitoree su desempeño. Optimice la relación con sus proveedores y asegure un suministro.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoEmpleados" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.upmenu.com/wp-content/uploads/2022/08/mesero.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Empleados</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Administre y mantenga al día la información de sus empleados en nuestra plataforma web fácil de usar y eficiente. Añada nuevos empleados, actualice sus datos personales, gestione roles y responsabilidades, y supervise el desempeño laboral. Fomente un ambiente de trabajo organizado y potenciado.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoMesas" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.mobydecmuebles.com/wp-content/uploads/2019/10/decoracion-mesas-restaurante.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Mesas</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Administre y configure las mesas de su restaurante en nuestra intuitiva plataforma web. Añada, modifique y elimine mesas, ajuste su capacidad y disponibilidad, y organice su distribución en el salón de manera eficiente. Optimice la asignación de mesas para sus clientes, garantizando un flujo de trabajo fluido.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoReservaciones" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://www.bcdtravel.com/move-latam/wp-content/uploads/sites/130/Move_PedersenQA_image630x360_Jan2017.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Reservaciónes</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Gestione y organice las reservaciones de su restaurante en nuestra plataforma web fácil de usar e intuitiva. Añada, modifique y cancele reservaciones, actualice la información de los clientes, y asigne mesas de manera eficiente. Mejore la experiencia de sus comensales y optimice su ocupación.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="/listadoPago" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full">
                                    <img src="https://cdn2.dineroenimagen.com/media/dinero/images/2021/12/tarjetas-de-credito-caras-y-de-lujo.jpg" style="border-radius: 10px;">
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Formas de pago</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Administre y actualice las formas de pago disponibles en su restaurante a través de nuestra plataforma web fácil de usar e intuitiva. Añada, edite o elimine opciones de pago como efectivo, tarjetas de crédito y débito, y servicios de pago en línea. Ofrezca a sus clientes diversas alternativas de pago.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                    </div>
                </div>
                </div>
            </div>
        </div>
        <script>
            const phrases = [
                "Un consejo importante, es garantizar la coherencia y precisión de los datos. Dado que la base de datos se utilizará para administrar múltiples aspectos de las operaciones del restaurante, es crucial que la información almacenada sea confiable y esté actualizada.",
                "Mantén tus credenciales de inicio de sesión seguras: Asegúrate de usar contraseñas seguras y no compartirlas con nadie. Si es posible, utiliza la autenticación de dos factores para proteger aún más tus credenciales.",
                "Mantén actualizada la información del menú: Asegúrate de mantener actualizada la información del menú, incluyendo precios, ingredientes y opciones para alergias alimentarias. Esto puede ayudar a evitar confusiones o errores al tomar pedidos de los clientes.",
                "Realiza un seguimiento de las reservas: Utiliza la plataforma para realizar un seguimiento de las reservas de los clientes y las mesas ocupadas. Esto puede ayudarte a evitar confusiones y asegurarte de que los clientes reciban el servicio adecuado.",
                "Sé consciente de la seguridad de los datos: Mantén la información de los clientes segura y privada. Asegúrate de cumplir con las leyes y regulaciones de privacidad de datos, y no compartas información confidencial con terceros sin el consentimiento del cliente.",
            ];
  
            function displayRandomPhrase() {
                const phraseElement = document.getElementById("phrase");
                const randomIndex = Math.floor(Math.random() * phrases.length);
                phraseElement.textContent = phrases[randomIndex];
            }
            
            displayRandomPhrase();
        </script>
    </body>
</html>
