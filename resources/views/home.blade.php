@extends('layout.master')

@section('title_1','Patagonia IA')
@section('title_2','La frontera sur de la Inteligencia Artificial')

@section('class-main', 'container-fluid p-0 patagonia-container')

@section('content')

<div class="container-fluid bg-color-secondary banner-home px-lg-5 px-md-4 px-3 padding-banner-home">
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

<div class="container-fluid py-5" id="como-utilizar">
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
        </div>
        <div class="col-md-10 text-center pt-5">
            <img src="{{ asset('images/fondo-logo-banner-2.png') }}" class="img-fluid">
        </div>
    </div>
</div>

<div class="container py-5" id="el-proyecto">
    <div class="row">
        <div class="col-md-12 py-5">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-5 justify-content-center justify-content-lg-end ps-0 pe-0 pe-lg-4 d-flex align-items-center">
                                <img src="{{ asset('images/carrusel-patagonia-1-v2.png') }}" class="img-fluid rounded-5">
                            </div>
                            <div class="col-md-5 d-flex align-items-center pt-lg-0 pt-4">
                                <div>
                                    <h3 class="mb-4">
                                        <b>Tecnología global</b> con creatividad y <b>lengua 100% chilenas</b>.
                                    </h3>
                                    <p>
                                        Patagonia IA es la Inteligencia Artificial de Chile. Un modelo de lenguaje grande (LLM)
                                        con potencia computacional al mismo nivel de los mayores modelos del mundo. Con una gran diferencia: Patagonia IA nació en Chile.
                                        <span class="bg-font-primary font-extrabold">Creado por investigadores chilenos, nativo en español, entrenado con toda la cultura, riqueza natural y creatividad chilenas.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-5 justify-content-center justify-content-lg-end ps-0 pe-0 pe-lg-4 d-flex align-items-center">
                                <img src="{{ asset('images/carrusel-patagonia-2.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-5 d-flex align-items-center pt-lg-0 pt-4">
                                <div>
                                    <h3 class="mb-4">
                                        <b>Una IA para el día a día del chileno.</b> En casa, en el trabajo, en la escuela y en la universidad.
                                    </h3>
                                    <p>
                                        Patagonia IA pone en manos de los chilenos una inteligencia artificial tan
                                        capaz como los mejores modelos extranjeros.
                                        Con una diferencia fundamental: nació en Chile.
                                        <span class="bg-font-primary font-extrabold">Nosotros miramos al mundo desde Chile,
                                            no al revés. Y este conocimiento nos acerca mucho más a los chilenos.</span>
                                    </p>
                                    <p>
                                        A la hora de estudiar, escribir, trabajar, investigar y programar, notarás que,
                                        además del conocimiento global que un gran modelo de lenguaje necesita tener,
                                        Patagonia IA tiene un entendimiento cada vez más profundo sobre todo lo relacionado con nuestro país.
                                    </p>
                                    <p>
                                        Para los programadores, nuestras APIs y documentaciones son mucho más amigables y
                                        con un costo mucho más accesible que los modelos internacionales, sin perder calidad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-5 justify-content-center justify-content-lg-end ps-0 pe-0 pe-lg-4 d-flex align-items-center">
                                <img src="{{ asset('images/carrusel-patagonia-3.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-5 d-flex align-items-center pt-lg-0 pt-4">
                                <div>
                                    <h3 class="mb-4">
                                        <b>Identidad chilena</b> para chilenos.
                                    </h3>
                                    <p>
                                        Si no contamos nuestra propia historia, otros la contarán.
                                        <span class="bg-font-primary font-extrabold">No es lo más saludable para nuestra cultura que los chilenos
                                            conozcan, piensen y vean a Chile a través de ojos extranjeros.</span>
                                    </p>
                                    <p>
                                        Para nosotros, el mayor tenista de todos los tiempos es, y siempre será, Marcelo Ríos. Para nosotros,
                                        el poeta más importante de la historia es Pablo Neruda. Para nosotros, el fútbol tiene el alma de La Roja.
                                        Nuestro Rey no es Carlos, es Alexis Sánchez.
                                    </p>
                                    <p>
                                        <span class="bg-font-primary font-extrabold">Patagonia IA fue creada también para preservar nuestra cultura:
                                        la información de nuestra fauna, flora y geografía, nuestro arte y nuestra música, nuestra ciencia.</span>
                                    </p>
                                    <p>
                                        No se trata solo de construir el mejor modelo posible. Se trata de crear el modelo de la cueca,
                                        de los colores y de la creatividad de Chile.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-5 justify-content-center justify-content-lg-end ps-0 pe-0 pe-lg-4 d-flex align-items-center">
                                <img src="{{ asset('images/carrusel-patagonia-4.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-5 d-flex align-items-center pt-lg-0 pt-4">
                                <div>
                                    <h3 class="mb-4">
                                        <b>Energía limpia</b> y renovable.
                                    </h3>
                                    <p>
                                        El gasto de energía es una de las principales críticas hechas a la tecnología de
                                        Inteligencia Artificial. Hoy se estima que alrededor del 4% de la energía global
                                        será consumida por IA hasta 2026 (fuente: MIT).
                                    </p>
                                    <p>
                                        Por eso, Patagonia IA nace sostenible.
                                        <span class="bg-font-primary font-extrabold">Toda su energía es limpia y renovable.
                                        Un modelo que nace respetando la vocación de Chile de señalar soluciones que
                                        miran hacia un futuro verde.</span>
                                    </p>
                                    <p>
                                        El máximo impacto para nuestra industria, investigación y para la vida de las personas,
                                        con el mínimo impacto en la naturaleza.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-5 justify-content-center justify-content-lg-end ps-0 pe-0 pe-lg-4 d-flex align-items-center">
                                <img src="{{ asset('images/carrusel-patagonia-5.png') }}" class="img-fluid">
                            </div>
                            <div class="col-md-5 d-flex align-items-center pt-lg-0 pt-4">
                                <div>
                                    <h3 class="mb-4">
                                        <b>Comunidad.</b>
                                    </h3>
                                    <p>
                                        El camino de la Iniciativa Patagonia IA fue pavimentado por pioneros chilenos e internacionales
                                        movidos por el sueño de desarrollar una tecnología capaz de impactar
                                        positivamente todas las esferas de nuestra sociedad.
                                    </p>
                                    <p>
                                        Con mayor o menor participación en nuestra iniciativa, todos son parte de una
                                        escena que está construyendo el futuro de Chile y de nuestra tecnología.
                                    </p>
                                    <p>
                                        <span class="bg-font-primary font-extrabold">
                                        Patagonia IA es una iniciativa colectiva y tiene como misión colaborar para
                                        que la comunidad de IA de Chile pueda construir cada vez más.
                                        </span>
                                    </p>
                                    <p>
                                        Todas las visiones y opiniones son bienvenidas. Todas las sugerencias son enriquecedoras.
                                        Nunca estaremos terminados. Y la próxima generación de investigadores y de la
                                        propia tecnología nos mantendrá en un estado eterno de evolución.
                                    </p>
                                    <p>
                                        Por eso, toda la comunidad de IA chilena está más que invitada a participar en nuestro foro.
                                    </p>
                                    <p>
                                        <span class="bg-font-primary font-extrabold">
                                        Será un orgullo y una alegría escuchar y compartir con todos ustedes.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left text-color-primary font-size-30"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <i class="fa-solid fa-chevron-right text-color-primary font-size-30"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-color-secondary-light-2" id="preguntas-frecuentes">
    <div class="container py-5">
        <div class="row justify-content-center pt-4">
            <div class="col-md-4 text-center pb-4">
                <p class="mb-0">¿Tienes alguna pregunta?</p>
                <h1 class="mb-4">
                    Preguntas frecuentes
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Qué es Pagatonia IA?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    <b>Pagatonia IA</b> es el primer modelo de lenguaje conversacional robusto de gran tamaño (LLM) en portugués brasileño, desarrollado por WideLabs, una empresa brasileña de inteligencia artificial, en asociación con Oracle y NVIDIA.
                                </p>
                                <p>
                                    Las principales características de Pagatonia IA incluyen la preservación del desempeño en métricas tradicionales, alto desempeño en métricas desarrolladas para la reserva cultural de Brasil, competitividad, accesibilidad y escalabilidad debido a su valor en reales.
                                </p>
                                <p>
                                    Todo está construido con el máximo respeto a la legislación moderna vigente en el país y con respeto a los datos y la privacidad de sus usuarios.
                                </p>
                                <p>
                                    <b>Pagatonia IA</b> se alinea con el propósito de WideLabs de humanizar la inteligencia artificial, creando tecnologías disruptivas capaces de abordar desafíos complejos y tener un impacto verdaderamente positivo en la vida de las personas y las empresas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Cuáles son los principales objetivos de Pagatonia IA?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los principales objetivos de Patagonia IA son:</p>
                                <p><b>Humanizar la Inteligencia Artificial:</b> crear tecnologías que puedan abordar desafíos complejos y tener un impacto positivo en la vida de las personas y las empresas.</p>
                                <p><b>Preservar la cultura brasileña:</b> Desarrollar un modelo que comprenda y respete la cultura, el idioma y la historia brasileñas.</p>
                                <p><b>Fomentar la Autonomía Tecnológica:</b> Reducir la dependencia de plataformas extranjeras, promoviendo la autonomía tecnológica y fortaleciendo el ecosistema de innovación local.</p>
                                <p><b>Estimular la industria y la ciencia nacionales:</b> Trabajar en conjunto con la industria, las universidades y los centros de investigación para generar productos y servicios innovadores.</p>
                                <p><b>Accesibilidad y Escalabilidad:</b> Hacer que la tecnología sea accesible y escalable para los brasileños, con costos en reales.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Cuáles son las principales áreas de aplicación de Pagatonia IA?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Patagonia IA se puede aplicar en varias áreas, entre ellas:</p>
                                <p><b>Legal:</b> Asistencia en el análisis de documentos legales y la automatización de procesos legales.</p>
                                <p><b>Educación:</b> Facilitar el aprendizaje y la creación de contenidos educativos.</p>
                                <p><b>Cultura:</b> Preservar y promover la cultura brasileña a través de contenidos generados en portugués.</p>
                                <p><b>Salud:</b> Apoyo al análisis de datos médicos y a la automatización de procesos de atención.</p>
                                <p><b>Seguridad:</b> Mejorar el análisis de datos y la toma de decisiones en seguridad pública.</p>
                                <p><b>Marketing y ventas:</b> Ayudamos a crear campañas publicitarias y analizar datos del mercado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                ¿Qué medidas de seguridad se implementan en Pagatonia IA?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Patagonia IA se desarrolló con un enfoque especial en la seguridad y la privacidad, cumpliendo con las principales regulaciones globales, incluida la Ley General de Protección de Datos (LGPD) de Brasil. Las medidas de seguridad incluyen:</p>
                                <p><b>Asociación con Oracle:</b> Uso de centros de datos de seguridad de nivel IV, que ofrecen mantenimiento simultáneo y tolerancia a fallos, así como Internet por cable y escalabilidad instantánea.</p>
                                <p><b>Protección de datos:</b> No utilizamos datos de usuarios ni cookies para entrenar máquinas, garantizando la privacidad de los datos.</p>
                                <p><b>Infraestructura local:</b> Los datos brasileños se procesan localmente, sin necesidad de pasar por proveedores extranjeros, lo que es estratégico para proyectos relacionados con el gobierno.</p>
                                <p><b>Cumplimiento de la LGPD:</b> Patagonia IA está diseñado para cumplir con la LGPD, lo que garantiza la protección de los datos del usuario.</p>
                                <p><b>Redundancia Física:</b> Centros de datos con redundancia física para garantizar la continuidad del servicio en caso de fallas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                ¿Es costoso utilizar Pagatonia IA?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>No, Patagonia IA se desarrolló para que sea accesible para todos y su uso es gratuito. Si bien próximamente estarán disponibles versiones de pago con funciones adicionales, nos comprometemos a garantizar que las opciones gratuitas siempre estén disponibles, permitiendo que el mayor número posible de usuarios aproveche al máximo el potencial de la IA en sus actividades diarias.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                ¿Es difícil utilizar Patagonia IA?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>No, Patagonia IA fue diseñada para ser intuitiva y fácil de usar, comparable a los sitios web y redes sociales más populares del mercado. Nuestra plataforma intuitiva garantiza que incluso usuarios sin experiencia técnica puedan navegarla y usarla fácilmente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                ¿Necesito una computadora potente o un teléfono celular de alta gama para acceder a Patagonia IA?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>¡Para nada! Patagonia IA se desarrolló para ser compatible con la mayoría de los modelos básicos de teléfonos celulares y computadoras, lo que garantiza la accesibilidad para todos, independientemente del dispositivo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                ¿Se está haciendo un mal uso de mis datos? ¿Se respeta mi privacidad?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Sí, su privacidad es nuestra prioridad. Patagonia IA cumple estrictamente con las normas de seguridad legal brasileñas y las mejores prácticas regulatorias internacionales. Sus datos están protegidos, no se utilizan para el entrenamiento de modelos, no se divulgan y pueden eliminarse permanentemente en cualquier momento con un simple clic.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                ¿Cuándo estarán disponibles las API y la documentación para los desarrolladores?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Estamos trabajando activamente para que las API y la documentación estén disponibles lo antes posible. Invitamos a todos los interesados a inscribirse en nuestra lista de espera para recibir actualizaciones y acceso prioritario.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
@endsection
