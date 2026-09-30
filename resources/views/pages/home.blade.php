@extends('layouts.app')

@section('title', 'Inicio | Cafetería Aroma & Grano')

@section('content')
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>El auténtico sabor del café <span>tostado con pasión</span></h1>
                <p>Bienvenido a Aroma &amp; Grano, tu cafetería de especialidad en el centro de la ciudad. Descubre cafés de origen único, tostados semanalmente en pequeños lotes, maridados con desayunos saludables y repostería artesana horneada cada mañana.</p>
                <div class="hero-actions">
                    <a href="{{ route('menu') }}" class="btn btn-primary">Explorar Nuestra Carta</a>
                    <a href="{{ route('about') }}" class="btn btn-secondary">Conocer Nuestra Historia</a>
                </div>
            </div>
            <div class="hero-image-wrap">
                <img src="{{ asset('images/hero-cafe.svg') }}" alt="Preparación artesanal de café de especialidad en Chemex y taza humeante">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestros Valores</span>
                <h2 class="section-title">Lo que hace único cada sorbo</h2>
                <p class="section-description">Cuidamos minuciosamente cada etapa de la cadena: desde el cafeto en altura hasta la temperatura exacta de extracción en tu mesa.</p>
            </div>

            <div class="features-grid">
                @foreach ($pillars as $pillar)
                    <article class="feature-card">
                        <div class="feature-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                <line x1="14" y1="1" x2="14" y2="4"></line>
                            </svg>
                        </div>
                        <h3>{{ $pillar['title'] }}</h3>
                        <p>{{ $pillar['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Selección de la Casa</span>
                <h2 class="section-title">Especialidades Recomendadas</h2>
                <p class="section-description">Una muestra de nuestras elaboraciones más aplaudidas por clientes y amantes del buen grano.</p>
            </div>

            <div class="cards-grid">
                @foreach ($featuredCoffees as $coffee)
                    <article class="card">
                        <div class="card-image-wrap">
                            <img src="{{ asset($coffee['image']) }}" alt="{{ $coffee['name'] }}">
                        </div>
                        <div class="card-body">
                            <div class="card-top">
                                <h3 class="card-title">{{ $coffee['name'] }}</h3>
                                <span class="card-price">{{ $coffee['price'] }}</span>
                            </div>
                            <p class="card-description">{{ $coffee['description'] }}</p>
                            <ul class="badge-list">
                                @foreach ($coffee['tags'] as $tag)
                                    <li class="badge">{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('menu') }}" class="btn btn-primary">Ver Carta Completa con Precios</a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-layout">
            <div class="split-image-wrap">
                <img src="{{ asset('images/tostador.svg') }}" alt="Tostador de café y sacos de café verde de especialidad">
            </div>
            <div class="split-text">
                <span class="section-tag">Transparencia y Origen</span>
                <h2>Granos con nombre propio y huella positiva</h2>
                <p>Creemos firmemente en el poder transformador de la agricultura ética. Todo nuestro café es 100% arábica recolectado a mano en el punto óptimo de maduración por pequeños caficultores de Colombia, Etiopía, Honduras y Kenia.</p>
                <p>Pagamos primas justas por calidad, muy superiores a las tarifas fijadas por las bolsas de materias primas convencionales. Así fomentamos el relevo generacional y la protección de los bosques tropicales.</p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap; margin-top: 24px;">
                    <a href="{{ route('about') }}" class="btn btn-outline">Leer Más Sobre el Proceso</a>
                    <a href="https://sca.coffee" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Normas SCA Oficiales</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="external-box">
                <div class="external-box-text">
                    <h4>¿Vienes a visitarnos hoy?</h4>
                    <p>Estamos abiertos desde las 07:30 h con café recién extraído y pan de masa madre aún templado. Consulta la ruta o escríbenos para consultas sobre reservas de grupos.</p>
                </div>
                <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Ubicación y Horarios</a>
                    <a href="https://maps.google.com/?q=Puerta+del+Sol+Madrid" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="border-color: var(--color-primary); color: var(--color-primary);">Abrir en Google Maps</a>
                </div>
            </div>
        </div>
    </section>
@endsection
