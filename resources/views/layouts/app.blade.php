<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Aura Café & Tostaduría Artesanal | Café de Especialidad')</title>
    <meta name="description" content="@yield('meta_description', 'Cafetería de especialidad y tostaduría artesanal. Granos de origen único, repostería de masa madre y métodos de extracción manual.')">
    
    <!-- Hoja de estilos CSS propia del proyecto -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>

    <!-- ==========================================
         HEADER / ENCABEZADO COMÚN DEL SITIO
         ========================================== -->
    <header class="site-header">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="site-brand" aria-label="Aura Café - Inicio">
                <div class="brand-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                        <line x1="6" y1="1" x2="6" y2="4"></line>
                        <line x1="10" y1="1" x2="10" y2="4"></line>
                        <line x1="14" y1="1" x2="14" y2="4"></line>
                    </svg>
                </div>
                <div class="brand-text">
                    <span class="brand-name">Aura</span>
                    <span class="brand-sub">Café & Tostaduría</span>
                </div>
            </a>

            <!-- Navegación Principal Compartida -->
            <nav class="main-nav" id="mainNav">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('menu') }}" class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">
                            Nuestra Carta
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                            Contacto & Reservas
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary" style="display: none; @media(min-width: 641px){ display: inline-flex; }">
                    Reservar Mesa
                </a>
                <button class="mobile-toggle" id="mobileToggle" aria-label="Abrir menú de navegación">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- ==========================================
         CONTENIDO DINÁMICO DE CADA VISTA
         ========================================== -->
    <main>
        @yield('content')
    </main>

    <!-- ==========================================
         FOOTER / PIE DE PÁGINA COMÚN DEL SITIO
         ========================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Columna 1: Identidad del negocio -->
                <div class="footer-brand">
                    <h3>Aura Café</h3>
                    <span class="brand-sub">Tostaduría Artesanal & Bistro</span>
                    <p>
                        Seleccionamos los mejores granos de café arábica de origen único mediante comercio directo con pequeños productores y tostamos artesanalmente en pequeños lotes cada semana en nuestro propio taller.
                    </p>
                    <div class="social-links">
                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Visitar Instagram de Aura Café">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                        <a href="https://wa.me/34912345678" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Contactar por WhatsApp">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                            </svg>
                        </a>
                        <a href="https://www.tripadvisor.es" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Ver reseñas en TripAdvisor">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Columna 2: Enlaces de Navegación Interna -->
                <div class="footer-col">
                    <h4>Navegación</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">→ Inicio y Filosofía</a></li>
                        <li><a href="{{ route('menu') }}">→ Carta de Especialidad</a></li>
                        <li><a href="{{ route('contact') }}">→ Reservas de Mesa</a></li>
                        <li><a href="{{ route('contact') }}#horarios">→ Horarios de Cata</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Horarios de Atención -->
                <div class="footer-col">
                    <h4>Horarios</h4>
                    <ul class="footer-links">
                        <li><span>Lunes a Viernes:</span> <strong>07:30 - 20:30</strong></li>
                        <li><span>Sábados:</span> <strong>08:30 - 21:00</strong></li>
                        <li><span>Domingos y Festivos:</span> <strong>09:00 - 18:00</strong></li>
                        <li style="margin-top: 0.5rem; color: var(--color-accent); font-size: 0.82rem;">* Servicio continuo de cocina y café</li>
                    </ul>
                </div>

                <!-- Columna 4: Ubicación y Enlaces Externos -->
                <div class="footer-col">
                    <h4>Visítanos</h4>
                    <p style="font-size: 0.9rem; margin-bottom: 0.75rem;">
                        Calle Mayor 42, Barrio Histórico<br>
                        28013 Madrid, España
                    </p>
                    <!-- Enlace externo requerido -->
                    <a href="https://maps.google.com/?q=Calle+Mayor+42+Madrid" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="color: var(--color-cream); border-color: rgba(255,255,255,0.2); font-size: 0.82rem; padding: 0.5rem 1rem;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                            <line x1="8" y1="2" x2="8" y2="18"></line>
                            <line x1="16" y1="6" x2="16" y2="22"></line>
                        </svg>
                        Abrir en Google Maps ↗
                    </a>
                </div>
            </div>

            <!-- Barra inferior con copyright -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Aura Café & Tostaduría Artesanal S.L. Todos los derechos reservados.</p>
                <div>
                    <span class="footer-badge">Proyecto Web Laravel</span>
                    <span style="margin-left: 0.5rem;">Hecho con Blade & CSS puro</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script ligero para interacción del menú móvil -->
    <script>
        const mobileToggle = document.getElementById('mobileToggle');
        const mainNav = document.getElementById('mainNav');
        if (mobileToggle && mainNav) {
            mobileToggle.addEventListener('click', () => {
                mainNav.classList.toggle('active');
            });
        }
    </script>
</body>
</html>
