@extends('layout.master')

@section('title_1','Patagonia IA - Iniciativa')
@section('title_2','La frontera sur de la Inteligencia Artificial')

@section('class-main', 'container-fluid p-0 patagonia-container')

@section('content')

<div class="container padding-banner-home">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <p>Iniciativa Patagonia IA</p>

                <h1 class="mb-4">
                    La Iniciativa Patagonia IA va a poner a Chile en el mapa de la inteligencia artificial
                    con la misma fuerza con que nuestra selva coloca a Chile en el centro de las discusiones
                    sobre el futuro del planeta.
                </h1>

                <h3>
                    <span class="bg-font-primary font-extrabold">
                        Este nombre no es<br>una coincidencia.
                    </span>
                </h3>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <img src="{{ asset('images/mapa-chile-puntos.jpg') }}" class="img-fluid" style="max-height: 650px;">
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row pb-5">
        <div class="col-md-12">
            <div class="card card-body bg-color-secondary rounded-5 p-5">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center pb-5 pb-lg-0">
                        <img src="{{ asset('images/bg-patagoniaIA.svg') }}" class="img-fluid">
                    </div>
                    <div class="col-md-8 text-white d-flex align-items-center">
                        <div>
                            <p>
                                La Iniciativa Patagonia IA
                            </p>

                            <p>
                                La Iniciativa Patagonia IA es un proyecto de soberanía nacional, de reserva cultural, de investigación e infraestructura. Y por encima de todo, una estrategia que muestra al mundo cómo hacer todo esto respetando el medio ambiente con energía limpia y renovable.
                                Con un proyecto de Inteligencia Artificial tan rico como la propia Patagonia, Brasil preservará su cultura, su historia, su lengua y su futuro.
                            </p>

                            <p>
                                Las nuevas generaciones no pueden aprender lo que significa ser brasileño a través de la mirada de otros países y de sus inteligencias artificiales cada vez más presentes en nuestra vida cotidiana.
                            </p>

                            <h3>
                                <span class="bg-font-primary font-extrabold">
                                    Nuestra inteligencia artificial necesita reflejar nuestro talento natural.
                                </span>
                            </h3>

                            <p>
                                La Iniciativa Patagonia IA reunirá a algunos de los mayores nombres de nuestra investigación. Combatirá la fuga de cerebros que amenaza nuestra ciencia. Brasileños desarrollando Inteligencia Artificial Brasileña junto a algunos de los mayores referentes del mundo.
                            </p>

                            <p>
                                Cuando cada empresa brasileña logre hacer más y mejor usando Patagonia IA, serán brasileños potenciando a brasileños. Cuando cada persona, del norte al sur de Brasil, inicie una conversación con Patagonia IA, serán brasileños estudiando, aprendiendo, trabajando, pensando y creando con otros brasileños.
                            </p>

                            <p>
                                Nosotros somos nuestra mayor riqueza.<br>
                                Patagonia IA somos todos nosotros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-color-secondary mt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10 pb-4">
                <div class="row">
                    <div class="col-md-5 justify-content-center justify-content-lg-end d-flex align-items-center border-end-responsive pe-4">
                        <p class="text-color-secondary-light-2 font-size-28 mb-0">Idealizadores</p>
                    </div>
                    <div class="col-md-7 justify-content-center justify-content-lg-start d-flex align-items-center ps-4">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="new_widelabs_svg__Layer_1" viewBox="0 0 1920 396.09" class="text-white" style="max-width:300px;"><defs><linearGradient id="new_widelabs_svg__linear-gradient" x1="1389.38" x2="1639.31" y1="200.42" y2="200.42" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0094ff"></stop><stop offset="0.32" stop-color="#00f"></stop><stop offset="1" stop-color="#000090"></stop></linearGradient><linearGradient xlink:href="#new_widelabs_svg__linear-gradient" id="new_widelabs_svg__linear-gradient-2" x1="1602.36" x2="1894.26" y1="198.23" y2="198.23"></linearGradient><linearGradient xlink:href="#new_widelabs_svg__linear-gradient" id="new_widelabs_svg__linear-gradient-3" x1="1601.86" x2="1894.76" y1="198.23" y2="198.23"></linearGradient><linearGradient xlink:href="#new_widelabs_svg__linear-gradient" id="new_widelabs_svg__linear-gradient-4" x1="1795.2" x2="1894.4" y1="100.6" y2="100.6"></linearGradient><style>.new_widelabs_svg__cls-4{fill:#d0d3d4}</style></defs><path d="M1416.15 24.2c-10.44-9.12-26.76-1.71-26.76 12.16v123.97c0 9.81 4.23 19.15 11.62 25.61l211.54 190.68c10.44 9.13 26.77 1.72 26.77-12.15V240.22c0-9.82-4.24-19.16-11.63-25.62L1416.16 24.2Z" style="fill: url(&quot;#new_widelabs_svg__linear-gradient&quot;);"></path><path d="m213.98 280.87-44.46-121.62h-26.7l-44.89 122.5-43.13-122.5H25.6l58.24 153.16h27.14l44.75-123.52 44.75 123.52h26.99l58.24-153.16h-28.46zM326.05 94.26c-10.13 0-17.46 7.19-17.46 17.17s7.49 17.17 17.46 17.17 17.02-7.63 17.02-17.17-7.48-17.17-17.02-17.17M313.14 159.25h25.82v153.16h-25.82zM509.29 188.3c-12.91-20.39-34.33-32.72-59.57-32.72q-32.79 0-54.57 22.89c-14.67 15.4-22 34.47-22 57.21s7.34 41.96 22 57.36c14.53 15.4 32.72 23.03 54.57 23.03 25.24 0 46.66-12.47 59.57-32.86v29.19h25.82V96.02h-25.82zm-15.55 86.99c-10.42 10.56-23.48 15.85-39.17 15.85s-28.9-5.29-39.32-15.85c-10.42-10.42-15.7-23.62-15.7-39.46s5.29-29.05 15.7-39.62c10.42-10.42 23.47-15.69 39.32-15.69s28.76 5.28 39.17 15.69c10.42 10.56 15.55 23.77 15.55 39.62s-5.14 29.04-15.55 39.46M644.4 155.58c-23.33 0-42.69 7.63-58.1 22.89-15.55 15.4-23.33 34.47-23.33 57.21s7.78 41.96 23.33 57.36c15.4 15.4 34.77 23.03 58.1 23.03 18.63 0 34.92-4.84 49-14.52 13.94-9.54 23.77-22.3 29.34-38.14h-28.47c-3.95 8.65-10.42 15.55-19.36 20.83-8.95 5.43-19.08 8.07-30.52 8.07-13.79 0-25.68-4.25-35.51-12.76-9.98-8.36-16.14-19.37-18.34-33.02h134.68c.45-3.96.59-7.48.59-10.7 0-22.74-7.78-41.82-23.32-57.22-15.55-15.4-34.92-23.03-58.1-23.03Zm-53.55 67.93c2.64-13.2 8.8-23.92 18.63-31.98 9.68-8.07 21.27-12.18 34.92-12.18s25.38 4.1 35.36 12.33c9.83 8.21 15.99 18.78 18.48 31.83zM778.63 96.02h-25.82v216.39h53.99v-23.77h-28.17zM956.93 159.25H840.3v24.94h90.82v29.93h-45.63c-15.84 0-29.04 4.84-39.46 14.53-10.56 9.83-15.85 21.86-15.85 36.23s5.29 26.84 15.85 36.53c10.42 9.83 23.62 14.67 39.46 14.67 20.69 0 38.73-8.94 48.27-23.47v19.8h43.27v-23.48h-20.09V159.24Zm-25.82 102.99c0 8.95-3.96 16.28-11.74 21.86-7.78 5.72-18.04 8.51-30.67 8.51-9.24 0-16.72-2.64-22.73-7.92-6.02-5.13-9.1-11.74-9.1-19.8s3.08-14.23 9.1-19.51c6.01-5.13 13.49-7.78 22.73-7.78h42.4v24.65ZM1094.08 155.58c-25.23 0-46.51 12.33-59.42 32.72V96.02h-25.82v216.39h25.82v-29.19c12.76 20.54 34.19 32.86 59.42 32.86 21.86 0 40.05-7.63 54.86-23.03 14.68-15.4 22.01-34.48 22.01-57.36s-7.34-41.81-22.01-57.21c-14.82-15.26-33.01-22.89-54.86-22.89Zm34.62 119.71c-10.42 10.56-23.62 15.85-39.46 15.85s-28.61-5.29-39.03-15.85c-10.42-10.42-15.55-23.62-15.55-39.46s5.14-29.05 15.55-39.62c10.42-10.42 23.33-15.69 39.03-15.69s29.04 5.28 39.46 15.69c10.42 10.56 15.55 23.77 15.55 39.62s-5.14 29.04-15.55 39.46M1253.83 223.8c-20.09-4.84-30.07-13.34-30.07-25.52 0-5.14 2.2-9.69 6.74-13.5 4.4-3.81 9.69-5.72 15.85-5.72 6.6 0 12.18 2.2 16.58 6.46 4.4 4.25 6.6 9.39 6.6 15.4h26.7c0-12.62-4.69-23.33-14.23-32.13s-21.42-13.2-35.36-13.2-25.67 4.11-35.21 12.18-14.38 18.78-14.38 31.98 3.96 23.03 11.89 30.08c7.92 7.19 18.63 12.47 32.27 16.13 20.1 5.14 30.08 13.79 30.08 26.26q0 8.58-7.05 14.52c-4.69 3.96-10.42 5.87-17.31 5.87s-13.06-2.35-17.9-6.9c-4.84-4.54-7.34-10.27-7.34-16.87h-26.7c0 13.2 4.99 24.35 14.82 33.45 9.83 9.25 22.15 13.79 36.97 13.79s26.99-4.25 36.82-12.91c9.84-8.51 14.68-19.66 14.68-33.45 0-22.74-14.82-38.14-44.46-45.92Z" class="new_widelabs_svg__cls-4"></path><path d="M1629.12 19.83c-10.44-9.12-26.76-1.71-26.76 12.16v97.15c0 9.81 4.23 19.15 11.62 25.61l253.51 221.88c10.44 9.13 26.77 1.72 26.77-12.15v-97.43c0-9.82-4.24-19.16-11.63-25.62l-253.5-221.59Z" style="fill: url(&quot;#new_widelabs_svg__linear-gradient-2&quot;); stroke: url(&quot;#new_widelabs_svg__linear-gradient-3&quot;); stroke-miterlimit: 10;"></path><path d="m1882.76 72.6-60.8-53.14c-10.44-9.12-26.76-1.71-26.76 12.16v71.3c0 9.81 4.23 19.15 11.62 25.61l60.81 53.22c10.44 9.13 26.77 1.72 26.77-12.15V98.23c0-9.82-4.24-19.16-11.63-25.62Z" style="fill: url(&quot;#new_widelabs_svg__linear-gradient-4&quot;);"></path></svg>
                    </div>
                </div>
            </div>
            <div class="col-md-8 border-bottom pb-3">
                <p class="text-white text-center mb-5">
                    La Iniciativa Patagonia IA surgió de una empresa llamada WideLabs. WideLabs es una compañía de
                    Inteligencia Artificial aplicada que comenzó en 2020 y ganó notoriedad con proyectos de alto
                    impacto como Biagrapher, ganador en 2023 de los premios Cannes, LIA, Clio, y con Intransit,
                    que obtuvo dos Leones de Cannes.
                </p>
                <p class="text-color-secondary-light-2 font-size-28 mb-0 text-center">Socios</p>
            </div>
            <div class="col-md-8 pt-4">
                <div class="row">
                    <div class="col-md-6 justify-content-center justify-content-lg-end d-flex align-items-center">
                        <img src="{{ asset('images/oracle.svg') }}" class="img-fluid" style="width:200px;">
                    </div>
                    <div class="col-md-6 justify-content-center justify-content-lg-start d-flex align-items-center">
                        <img src="{{ asset('images/nvidia.svg') }}" class="img-fluid"  style="width:200px;">
                    </div>
                </div>
            </dov>
        </div>
    </div>
</div>

@endsection

@section('css')
@endsection
