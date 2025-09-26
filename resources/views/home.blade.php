@extends('layout.master')

@section('title_1','Patagonia IA')
@section('title_2','La frontera sur de la Inteligencia Artificial')

@section('class-main', 'container-fluid p-0 patagonia-container')

@section('content')

<div class="container-fluid bg-color-secondary banner-home px-lg-5 px-md-4 px-3">
    <div class="row">
        <div class="col-md-7 col-lg-7 col-xl-5 col-xxl-4">
            <p class="text-white">De chilenos para chilenos</p>
            <h1 class="text-white mb-5">
                Hable con la Inteligencia<br>
                Artificial chilena<span class="bg-color-primary cursor"></span>
            </h1>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-body bg-color-secondary-light p-4 h-100">
                        <svg viewBox="0 0 24 24" width="48px" height="48px" class="text-color-primary mb-4">
                            <path fill="currentColor" fill-rule="evenodd" d="m11.433 16.464l1.203-1.202l2.626-2.626l1.202-1.203c1.232-1.23 1.847-1.846 1.702-2.508s-.963-.963-2.596-1.565l-5.45-2.007C6.861 4.152 5.232 3.55 4.392 4.39s-.24 2.47.962 5.73l2.006 5.45c.602 1.633.903 2.45 1.565 2.596s1.277-.47 2.508-1.702" clip-rule="evenodd"></path><path fill="currentColor" d="m12.636 15.262l3.938 3.938c.408.408.612.612.84.706c.302.126.643.126.946 0c.228-.094.432-.298.84-.706c.407-.408.611-.612.706-.84a1.24 1.24 0 0 0 0-.946c-.095-.228-.299-.432-.706-.84l-3.939-3.938z" opacity="0.5"></path>
                        </svg>
                        <p class="text-white font-extrabold">Experimente la IA de Patagonia</p>
                        <p class="text-white font-300">Utilice Patagonia AI para apoyar sus estudios, trabajo, cultura chilena y más.</p>
                        <a href="https://plataforma.patagoniaia.cl/entrar" class="btn btn-primary me-3">Acceso</a>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-body bg-color-secondary-light p-4 h-100">
                        <svg viewBox="0 0 24 24" width="48px" height="48px" class="text-color-primary mb-4">
                            <path fill="currentColor" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" opacity="0.5"></path><path fill="currentColor" d="M13.488 6.446a.75.75 0 0 1 .53.918l-2.588 9.66a.75.75 0 0 1-1.449-.389l2.589-9.659a.75.75 0 0 1 .918-.53M14.97 8.47a.75.75 0 0 1 1.06 0l.209.208c.635.635 1.165 1.165 1.529 1.642c.384.504.654 1.036.654 1.68s-.27 1.176-.654 1.68c-.364.477-.894 1.007-1.53 1.642l-.208.208a.75.75 0 1 1-1.06-1.06l.171-.172c.682-.682 1.139-1.14 1.434-1.528c.283-.37.347-.586.347-.77s-.064-.4-.347-.77c-.295-.387-.752-.846-1.434-1.528l-.171-.172a.75.75 0 0 1 0-1.06m-7 0a.75.75 0 0 1 1.06 1.06l-.171.172c-.682.682-1.138 1.14-1.434 1.528c-.283.37-.346.586-.346.77s.063.4.346.77c.296.387.752.846 1.434 1.528l.172.172a.75.75 0 1 1-1.061 1.06l-.208-.208c-.636-.635-1.166-1.165-1.53-1.642c-.384-.504-.653-1.036-.653-1.68s.27-1.176.653-1.68c.364-.477.894-1.007 1.53-1.642z"></path>
                        </svg>
                        <p class="text-white font-extrabold">Desarrollar con Patagonia IA</p>
                        <p class="text-white font-300">Aprovecha todo el poder de nuestra API para integrar inteligencia artificial en tus proyectos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <p class="mb-0">Conocimiento, soluciones y soporte</p>
                <h1>Descubra las posibilidades de<br>Patagonia IA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="https://plataforma.patagoniaia.cl/" class="card card-body d-flex flex-row text-decoration-none h-100 card-animation">
                    <div class="icon pe-3">
                        <i class="fa-solid fa-location-pin text-color-primary font-size-26"></i>
                    </div>
                    <div class="content">
                        <p>Cultura Chilena</p>
                        <p>Pregunta lo que quieras. Ningún LLM sabe más sobre Chile.</p>
                        <button class="btn btn-secondary">Experimento</button>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://plataforma.patagoniaia.cl/" class="card card-body d-flex flex-row text-decoration-none h-100 card-animation">
                    <div class="icon pe-3">
                        <i class="fa-solid fa-pencil text-color-primary font-size-26"></i>
                    </div>
                    <div class="content">
                        <p>Creación</p>
                        <p>Crea mejores textos y contenidos para tu trabajo, estudios y redes sociales.</p>
                        <button class="btn btn-secondary">Experimento</button>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="https://plataforma.patagoniaia.cl/" class="card card-body d-flex flex-row text-decoration-none h-100 card-animation">
                    <div class="icon pe-3">
                        <i class="fa-solid fa-magnifying-glass text-color-primary font-size-26"></i>
                    </div>
                    <div class="content">
                        <p>Buscar</p>
                        <p>Descubra datos, información y referencias.</p>
                        <button class="btn btn-secondary">Experimento</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-color-secondary pt-5">
    <div class="row justify-content-center pt-4">
        <div class="col-md-4 text-center pb-5">
            <img src="{{ asset('images/logo-patagoniaia.jpg') }}" class="img-fluid mb-4" style="max-height: 50px;">
            <h1 class="text-white mb-4">
                Riqueza cultural e innovación tecnológica
            </h1>
            <a href="https://plataforma.patagoniaia.cl/entrar" class="btn btn-primary me-3" style="width:150px">Acceso</a>
            <a href="https://plataforma.patagoniaia.cl/" class="btn btn-secondary" style="width:150px">Crear cuenta</a>
        </div>
        <div class="col-md-10 text-center pt-5">
            <img src="{{ asset('images/fondo-logo-banner-2.png') }}" class="img-fluid">
        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="row justify-content-center pt-4">
        <div class="col-md-4 text-center pb-5">
            <p class="mb-0">¿Tienes alguna pregunta?</p>
            <h1 class="mb-4">
                Preguntas frecuentes
            </h1>

        </div>
    </div>
</div>

@endsection

@section('css')
@endsection
