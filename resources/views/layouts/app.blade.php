<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cafetería Aroma & Grano | Café de Especialidad')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a href="{{ route('home') }}" class="brand">
                <img src="{{ asset('images/logo.svg') }}" alt="Logotipo Aroma & Grano" class="brand-logo">
                <div class="brand-text">
                    <span class="brand-title">Aroma &amp; Grano</span>
                    <span class="brand-subtitle">Café de Especialidad</span>
                </div>
            </a>
            <nav class="site-nav">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
                <a href="{{ route('menu') }}" class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">Carta &amp; Menú</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Sobre Nosotros</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contacto &amp; Ubicación</a>
                <a href="{{ route('menu') }}" class="header-cta">Ver Carta</a>
            </nav>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Aroma &amp; Grano</h4>
                    <p>Tostadores artesanales y cafetería de especialidad en Madrid. Seleccionamos granos arábicos de comercio justo y elaboramos repostería fresca a diario en nuestro obrador propio.</p>
                    <p>Calle Mayor del Grano, 42, 28013 Madrid</p>
                </div>
                <div class="footer-col">
                    <h4>Navegación</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Inicio</a></li>
                        <li><a href="{{ route('menu') }}">Carta de Cafés y Brunch</a></li>
                        <li><a href="{{ route('about') }}">Nuestra Historia y Equipo</a></li>
                        <li><a href="{{ route('contact') }}">Contacto y Reservas</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Horario de Apertura</h4>
                    <ul class="footer-links">
                        <li>Lunes a Viernes: 07:30 - 20:00</li>
                        <li>Sábados: 08:30 - 20:30</li>
                        <li>Domingos y Festivos: 09:00 - 18:30</li>
                        <li>Cocina y Obrador hasta las 16:30</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Enlaces Externos</h4>
                    <ul class="external-links-list">
                        <li>
                            <a href="https://sca.coffee" target="_blank" rel="noopener noreferrer" class="external-link-item">
                                Specialty Coffee Association
                            </a>
                        </li>
                        <li>
                            <a href="https://maps.google.com/?q=Puerta+del+Sol+Madrid" target="_blank" rel="noopener noreferrer" class="external-link-item">
                                Cómo llegar en Google Maps
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="external-link-item">
                                Síguenos en Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="external-link-item">
                                Comunidad en Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Cafetería Aroma &amp; Grano S.L. Todos los derechos reservados.</p>
                <p>Comprometidos con el tueste sostenible, la agricultura regenerativa y el residuo cero.</p>
            </div>
        </div>
    </footer>
</body>
</html>
