@extends('layouts.app')

@section('title', 'Contacto y Ubicación | Cafetería Aroma & Grano')

@section('content')
    <header class="page-banner">
        <div class="container">
            <h1>Contacto &amp; Dónde Encontrarnos</h1>
            <p>Visita nuestro local en el centro histórico, llámanos o envíanos tus dudas sobre eventos, reservas y venta de grano tostado.</p>
        </div>
    </header>

    <section class="section">
        <div class="container contact-grid">
            <div class="contact-info-panel">
                <h3>Información del Local</h3>
                <ul class="contact-details-list">
                    <li class="contact-detail-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-detail-text">
                            <h4>Dirección</h4>
                            <p>{{ $businessInfo['address'] }}</p>
                        </div>
                    </li>
                    <li class="contact-detail-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-detail-text">
                            <h4>Teléfono de Reservas</h4>
                            <p><a href="tel:{{ str_replace(' ', '', $businessInfo['phone']) }}">{{ $businessInfo['phone'] }}</a></p>
                        </div>
                    </li>
                    <li class="contact-detail-item">
                        <div class="contact-icon">💬</div>
                        <div class="contact-detail-text">
                            <h4>WhatsApp Directo</h4>
                            <p><a href="https://wa.me/34600123456" target="_blank" rel="noopener noreferrer">{{ $businessInfo['whatsapp'] }}</a></p>
                        </div>
                    </li>
                    <li class="contact-detail-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-detail-text">
                            <h4>Correo Electrónico</h4>
                            <p><a href="mailto:{{ $businessInfo['email'] }}">{{ $businessInfo['email'] }}</a></p>
                        </div>
                    </li>
                </ul>

                <h4 style="font-size: 1.1rem; color: var(--color-primary); margin-bottom: 12px; font-weight: 700;">Horarios Habituales</h4>
                <ul class="hours-list">
                    @foreach ($schedule as $item)
                        <li class="hours-row">
                            <span>{{ $item['days'] }}</span>
                            <strong>{{ $item['hours'] }}</strong>
                        </li>
                    @endforeach
                </ul>

                <div style="margin-top: 24px;">
                    <a href="{{ $businessInfo['maps'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="width: 100%;">
                        Ver Ruta en Google Maps
                    </a>
                </div>
            </div>

            <div class="contact-form-panel">
                <h3>Envíanos un Mensaje</h3>
                <p>¿Tienes dudas sobre nuestros cafés, deseas comprar grano para tu oficina o celebrar una cata privada? Rellena el siguiente formulario:</p>

                @if (session('success'))
                    <div class="alert-success">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert-error">
                        <ul style="list-style-position: inside;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre y Apellidos</label>
                        <input type="text" id="nombre" name="nombre" class="form-input" value="{{ old('nombre') }}" placeholder="Ej. Carmen Rodríguez" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="carmen@ejemplo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" id="asunto" name="asunto" class="form-input" value="{{ old('asunto') }}" placeholder="Consulta sobre evento o compra de café" required>
                    </div>

                    <div class="form-group">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" class="form-textarea" placeholder="Escribe aquí tu consulta o comentario..." required>{{ old('mensaje') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container split-layout">
            <div class="split-image-wrap">
                <img src="{{ asset('images/hero-cafe.svg') }}" alt="Espacio y terraza de la cafetería">
            </div>
            <div class="split-text">
                <span class="section-tag">Accesibilidad y Transporte</span>
                <h2>Cómo Llegar Fácilmente</h2>
                <p>Nuestra cafetería está ubicada en una calle semipeatonal tranquila a escasos minutos a pie de los principales nodos de transporte de la ciudad.</p>
                <ul class="footer-links" style="margin: 20px 0;">
                    @foreach ($transportOptions as $option)
                        <li style="display: flex; gap: 10px; align-items: center; color: var(--color-text); margin-bottom: 10px;">
                            <span style="color: var(--color-accent); font-weight: bold;">•</span>
                            <span>{{ $option }}</span>
                        </li>
                    @endforeach
                </ul>
                <div>
                    <a href="https://maps.google.com/?q=Puerta+del+Sol+Madrid" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Abrir Navegador GPS</a>
                </div>
            </div>
        </div>
    </section>
@endsection
