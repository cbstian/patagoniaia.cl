@extends('layout.master')

@section('title_1','PatagoniaIA')
@section('title_2','Prueba de Fuentes')

@section('class-main', 'container py-5')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-lg">
            <div class="card-body p-5">

                <!-- Typography Scale Demo -->
                <div class="mb-5">
                    <h1 class="heading-xl text-patagonia-primary mb-3">Heading XL - Instrumento Sans ExtraBold</h1>
                    <h2 class="heading-lg text-patagonia-secondary mb-3">Heading LG - Instrumento Sans Bold</h2>
                    <h3 class="heading-md mb-3">Heading MD - Instrumento Sans SemiBold</h3>
                    <h4 class="heading-sm mb-3">Heading SM - Instrumento Sans SemiBold</h4>
                </div>

                <!-- Body Text Demo -->
                <div class="mb-5">
                    <p class="body-lg mb-3">
                        <strong>Body Large (1.125rem):</strong> Este es un texto de ejemplo usando Instrument Sans Regular. La tipografía está optimizada para una excelente legibilidad en pantallas digitales.
                    </p>
                    <p class="body-md mb-3">
                        <strong>Body Medium (1rem):</strong> Esta es la tipografía base del sitio web. Proporciona un equilibrio perfecto entre legibilidad y densidad de información.
                    </p>
                    <p class="body-sm mb-3">
                        <strong>Body Small (0.875rem):</strong> Texto más pequeño para información secundaria o detalles adicionales.
                    </p>
                    <p class="caption">
                        Caption (0.75rem): Texto de caption con mayor espaciado entre letras para etiquetas y metadatos.
                    </p>
                </div>

                <!-- Font Weight Demo -->
                <div class="mb-5">
                    <h4 class="heading-sm mb-3">Pesos de Fuente Disponibles:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="body-md font-regular">Regular (400) - Instrument Sans</p>
                            <p class="body-md font-medium">Medium (500) - Instrument Sans</p>
                            <p class="body-md font-semibold">SemiBold (600) - Instrument Sans</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body-md font-bold">Bold (700) - Instrument Sans</p>
                            <p class="body-md font-extrabold">ExtraBold (800) - Instrument Sans</p>
                        </div>
                    </div>
                </div>

                <!-- Utility Classes Demo -->
                <div class="mb-5">
                    <h4 class="heading-sm mb-3">Clases de Utilidad:</h4>
                    <div class="p-3 bg-light rounded mb-3 font-optimize">
                        <p class="body-md mb-2"><code>.font-optimize</code> - Aplicado a este contenedor para suavizado de fuentes</p>
                        <p class="body-md mb-2"><code>.font-primary</code> - <span class="font-primary">Usa la variable de fuente primaria</span></p>
                        <p class="body-md mb-0"><code>.font-instrument</code> - <span class="font-instrument">Usa explícitamente Instrument Sans</span></p>
                    </div>
                </div>

                <!-- Responsive Demo -->
                <div class="mb-5">
                    <h4 class="heading-sm mb-3">Texto Responsivo:</h4>
                    <div class="p-3 border rounded">
                        <p class="body-md mb-0">
                            Este texto se ajustará automáticamente según el tamaño de pantalla.
                            En móviles será más pequeño (0.9em), en tablets será normal (1em), y en escritorio será más grande (1.1em).
                        </p>
                    </div>
                </div>

                <!-- Real Content Demo -->
                <div class="mb-5">
                    <h4 class="heading-sm mb-3">Ejemplo de Contenido Real:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="heading-sm text-patagonia-primary mb-2">Innovación Tecnológica</h5>
                            <p class="body-md mb-3">
                                PatagoniaIA combina la potencia de la inteligencia artificial
                                con la inspiración de los paisajes patagónicos para crear
                                soluciones tecnológicas únicas y sostenibles.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="heading-sm text-patagonia-primary mb-2">Compromiso Ambiental</h5>
                            <p class="body-md mb-3">
                                Nuestro enfoque se centra en desarrollar tecnología que
                                respete y preserve la belleza natural que nos inspira
                                cada día en nuestro trabajo.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Button Demo -->
                <div class="text-center">
                    <button class="btn btn-primary bg-patagonia-primary border-0 btn-lg font-semibold me-3">
                        Botón Principal
                    </button>
                    <button class="btn btn-outline-primary text-patagonia-primary border-patagonia-primary font-medium">
                        Botón Secundario
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
.border-patagonia-primary {
    border-color: #3498db !important;
}

/* Demo specific styles */
code {
    background: #f8f9fa;
    padding: 2px 6px;
    border-radius: 3px;
    font-family: 'Monaco', 'Consolas', monospace;
    font-size: 0.875em;
}
</style>
@endsection
