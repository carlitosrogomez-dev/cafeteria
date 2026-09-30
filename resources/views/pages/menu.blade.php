@extends('layouts.app')

@section('title', 'Carta y Menú | Cafetería Aroma & Grano')

@section('content')
    <header class="page-banner">
        <div class="container">
            <h1>Nuestra Carta &amp; Especialidades</h1>
            <p>Elaboraciones honestas, café de origen de puntuación superior a 84 puntos y repostería artesana elaborada cada día.</p>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Variedad y Calidad</span>
                <h2 class="section-title">El placer de disfrutar sin prisas</h2>
                <p class="section-description">Todos nuestros precios incluyen IVA. Consulta con nuestro equipo si padeces alguna intolerancia o alergia alimentaria.</p>
            </div>

            @foreach ($categories as $category)
                <div class="menu-category-section">
                    <div class="category-title-wrap">
                        <h2>{{ $category['name'] }}</h2>
                        <span class="category-badge">{{ $category['badge'] }}</span>
                    </div>

                    <div class="split-layout" style="margin-bottom: 24px; align-items: start;">
                        <div class="menu-items-table" style="margin-bottom: 0;">
                            @foreach ($category['items'] as $item)
                                <div class="menu-item-row">
                                    <div class="menu-item-info">
                                        <div class="menu-item-header">
                                            <span class="menu-item-name">{{ $item['name'] }}</span>
                                            <span class="menu-item-tag">{{ $item['tag'] }}</span>
                                        </div>
                                        <p class="menu-item-desc">{{ $item['desc'] }}</p>
                                    </div>
                                    <div class="menu-item-price">{{ $item['price'] }}</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="split-image-wrap">
                            <img src="{{ asset($category['image']) }}" alt="{{ $category['name'] }}">
                        </div>
                    </div>
                </div>
            @endforeach

            <div style="background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 32px; box-shadow: var(--shadow-sm); margin-top: 40px;">
                <h3 style="font-size: 1.3rem; color: var(--color-primary); margin-bottom: 16px; font-weight: 750;">Compromiso con la Calidad y Dietas Especiales</h3>
                <ul class="menu-features-list">
                    @foreach ($dietaryNotes as $note)
                        <li>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>{{ $note }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="external-box">
                <div class="external-box-text">
                    <h4>Investigación y Botánica del Café</h4>
                    <p>Si deseas aprender más sobre el cultivo sostenible de las variedades Typica, Bourbon y Geisha, te recomendamos visitar la organización científica internacional World Coffee Research.</p>
                </div>
                <div>
                    <a href="https://worldcoffeeresearch.org" target="_blank" rel="noopener noreferrer" class="btn btn-primary">World Coffee Research</a>
                </div>
            </div>
        </div>
    </section>
@endsection
