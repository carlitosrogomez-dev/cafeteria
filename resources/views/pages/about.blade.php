@extends('layouts.app')

@section('title', 'Sobre Nosotros | Cafetería Aroma & Grano')

@section('content')
    <header class="page-banner">
        <div class="container">
            <h1>Nuestra Historia &amp; Pasión</h1>
            <p>Conoce los orígenes de Aroma &amp; Grano, nuestro método artesanal de tueste y al equipo que hace posible cada taza.</p>
        </div>
    </header>

    <section class="section">
        <div class="container split-layout">
            <div class="split-text">
                <span class="section-tag">Nacimiento del Proyecto</span>
                <h2>De una pequeña tostadora casera a referente de especialidad</h2>
                <p>Aroma &amp; Grano nació del entusiasmo de tres amigos apasionados por la cultura cafetera que querían recuperar el respeto por la materia prima. Cansados del café torrefacto y de las cadenas comerciales impersonales, nos propusimos crear un espacio acogedor donde el cliente descubriese las infinitas notas frutales, achocolatadas y florales del café arábica auténtico.</p>
                <p>Nuestra misión diaria es dignificar la labor de las familias campesinas en los países productores y acercar al público local una experiencia sensorial honesta, acompañada de panadería de masa madre de verdad.</p>
                <div style="margin-top: 20px;">
                    <a href="{{ route('menu') }}" class="btn btn-primary">Descubrir Nuestros Cafés</a>
                </div>
            </div>
            <div class="split-image-wrap">
                <img src="{{ asset('images/tostador.svg') }}" alt="Tostador de café en pleno funcionamiento">
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestros Pasos</span>
                <h2 class="section-title">Evolución de Aroma &amp; Grano</h2>
                <p class="section-description">Un recorrido lleno de aprendizaje, viajes a origen y amistad forjada alrededor de una buena taza.</p>
            </div>

            <ul class="timeline-list">
                @foreach ($timeline as $milestone)
                    <li class="timeline-item">
                        <div class="timeline-year">{{ $milestone['year'] }}</div>
                        <h3 class="timeline-title">{{ $milestone['title'] }}</h3>
                        <p class="timeline-desc">{{ $milestone['description'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Método de Trabajo</span>
                <h2 class="section-title">Las 4 fases del café excelente</h2>
                <p class="section-description">Aplicamos precisión científica y sensibilidad artística en cada paso del proceso.</p>
            </div>

            <ol class="ordered-steps-list">
                @foreach ($processSteps as $step)
                    <li class="ordered-step-item">
                        <h4>{{ $step['title'] }}</h4>
                        <p>{{ $step['desc'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Las Personas Detrás</span>
                <h2 class="section-title">Nuestro Equipo</h2>
                <p class="section-description">Profesionales formados con vocación de servicio y amor por el buen servicio gastronómico.</p>
            </div>

            <div class="team-grid">
                @foreach ($team as $member)
                    <article class="team-card">
                        <div class="team-avatar">
                            <img src="{{ asset('images/equipo.svg') }}" alt="{{ $member['name'] }}">
                        </div>
                        <h3 class="team-name">{{ $member['name'] }}</h3>
                        <p class="team-role">{{ $member['role'] }}</p>
                        <p class="team-bio">{{ $member['bio'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Sostenibilidad Real</span>
                <h2 class="section-title">Compromiso Ambiental y Social</h2>
                <p class="section-description">Medidas concretas que implementamos en nuestro establecimiento cada jornada.</p>
            </div>

            <div style="background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 32px; box-shadow: var(--shadow-sm);">
                <ul class="menu-features-list">
                    @foreach ($commitments as $commitment)
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>{{ $commitment }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="external-box">
                <div class="external-box-text">
                    <h4>Alianza por los Bosques Tropicales</h4>
                    <p>Apoyamos los criterios internacionales de conservación de la biodiversidad y derechos laborales en plantaciones avalados por Rainforest Alliance.</p>
                </div>
                <div>
                    <a href="https://www.rainforest-alliance.org" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Rainforest Alliance</a>
                </div>
            </div>
        </div>
    </section>
@endsection
