@extends('layouts.app')

@section('title', 'Aura Café & Tostaduría Artesanal | Inicio')
@section('meta_description', 'Café de especialidad tostado semanalmente en pequeños lotes, panes de masa madre y repostería artesanal en un espacio acogedor.')

@section('content')

<!-- ==========================================
     HERO SECTION
     ========================================== -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="badge">Tostaduría Artesanal & Bistro</span>
                <h1>El arte del café en su <span>máxima pureza</span></h1>
                <p class="hero-lead">
                    Seleccionamos granos de café arábica de origen único mediante comercio directo con agricultores. Tostamos cada lote a mano semanalmente para desvelar notas florales, frutales y achocolatadas inimitables.
                </p>
                <div class="hero-cta">
                    <a href="{{ route('menu') }}" class="btn btn-primary">
                        Explorar Nuestra Carta
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-secondary">
                        Reservar Mesa o Cata
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">+87</span>
                        <span class="stat-label">Puntos SCA promedio</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Comercio directo</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">48h</span>
                        <span class="stat-label">Masa madre lenta</span>
                    </div>
                </div>
            </div>

            <div class="hero-media">
                <div class="hero-image-wrapper">
                    <!-- Imagen local cargada desde public/images sin hotlinking -->
                    <img src="{{ asset('images/hero-cafe.jpg') }}" alt="Interior cálido y luminoso de Aura Café & Tostaduría">
                </div>
                <div class="hero-floating-card">
                    <div class="floating-icon">☕</div>
                    <div class="floating-text">
                        <strong>Tueste Semanal Activo</strong>
                        <span>Lotes frescos cada martes y jueves</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECCIÓN: NUESTRA HISTORIA & TOSTADURÍA
     ========================================== -->
<section class="section section-alt">
    <div class="container">
        <div class="story-grid">
            <div class="story-media">
                <!-- Imagen local sin hotlinking -->
                <img src="{{ asset('images/tostado-granos.jpg') }}" alt="Maestro tostador inspeccionando café de origen en la enfriadora">
            </div>
            <div class="story-content">
                <span class="badge">Nuestra Filosofía</span>
                <h2>Más que una cafetería, una pasión por el origen</h2>
                <p>
                    Aura nació con una misión transparente: dignificar la labor de las familias caficultoras y devolver al café el valor gastronómico que merece. No creemos en cafés sobretostados ni en mezclas comerciales de baja calidad.
                </p>
                <div class="highlight-box">
                    <p>
                        "Cada taza cuenta el viaje de una semilla cultivada en volcanes tropicales, cuidada por manos campesinas y tostada con respeto en nuestro taller."
                    </p>
                </div>
                <p>
                    Cada semana ajustamos nuestras curvas de tueste para preservar los azúcares naturales y las delicadas notas aromáticas de cada variedad botánica.
                </p>
                
                <!-- Lista ordenada estilizada -->
                <h3 style="font-size: 1.25rem; margin-top: 1.5rem; margin-bottom: 0.75rem;">Nuestro proceso de excelencia paso a paso:</h3>
                <ol class="ordered-process-list">
                    @foreach($pasosElaboracion as $paso)
                        <li>
                            <strong>{{ $paso['titulo'] }}</strong>
                            <span>{{ $paso['detalle'] }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     SECCIÓN: PILARES Y VALORES
     ========================================== -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="badge">Compromiso Real</span>
            <h2 class="section-title">Nuestros Pilares Fundamentales</h2>
            <p class="section-desc">
                Cuidamos cada eslabón de la cadena productiva para ofrecerte una experiencia sensorial honesta y sostenible.
            </p>
        </div>

        <div class="cards-grid-3">
            @foreach($pilares as $pilar)
                <div class="card">
                    <div class="card-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 6v6l4 2"></path>
                        </svg>
                    </div>
                    <h3 class="card-title">{{ $pilar['titulo'] }}</h3>
                    <p class="card-text">{{ $pilar['descripcion'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     SECCIÓN: CAFÉS DESTACADOS DE LA SEMANA
     ========================================== -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="badge">Orígenes Únicos</span>
            <h2 class="section-title">Destacados en Barra Esta Semana</h2>
            <p class="section-desc">
                Granos recién tostados listos para disfrutar en barra en espresso o en paquetes de 250 gramos para llevarte a casa.
            </p>
        </div>

        <div class="cards-grid-3">
            @foreach($destacados as $item)
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.75rem;">
                        <span class="badge badge-outline">SCA {{ $item['puntuacion_sca'] }}</span>
                        <strong style="color: var(--color-primary); font-size: 1.15rem;">{{ $item['precio'] }}</strong>
                    </div>
                    <h3 class="card-title" style="font-size: 1.25rem;">{{ $item['nombre'] }}</h3>
                    <p style="font-size: 0.85rem; color: var(--color-gray); margin-bottom: 0.75rem;">
                        📍 {{ $item['region'] }}<br>
                        ⚙️ Proceso: {{ $item['proceso'] }} | {{ $item['variedad'] }}
                    </p>
                    
                    <div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px dashed var(--color-gray-light);">
                        <strong style="font-size: 0.82rem; color: var(--color-dark); display: block; margin-bottom: 0.35rem;">Notas de cata:</strong>
                        <!-- Lista no ordenada de elementos -->
                        <ul class="feature-list" style="margin: 0; gap: 0.35rem;">
                            @foreach($item['notas'] as $nota)
                                <li style="font-size: 0.85rem;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    {{ $nota }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('menu') }}" class="btn btn-primary">
                Ver la Carta Completa con Repostería y Métodos
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     LLAMADA A LA ACCIÓN / COMUNIDAD
     ========================================== -->
<section class="section" style="padding: 4rem 0; text-align: center;">
    <div class="container">
        <div style="max-width: 720px; margin: 0 auto; background-color: var(--color-dark); color: var(--color-white); padding: 3.5rem 2rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
            <h2 style="color: var(--color-white); font-size: 2.2rem; margin-bottom: 1rem;">¿Quieres aprender a extraer el mejor café?</h2>
            <p style="color: #c9c1b9; font-size: 1.05rem; margin-bottom: 2rem;">
                Organizamos catas abiertas de café de especialidad y talleres de calibración de espresso todos los sábados por la mañana en nuestro obrador de Madrid.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="{{ route('contact') }}" class="btn btn-accent">
                    Inscribirme al Próximo Taller
                </a>
                <!-- Enlace externo a Instagram -->
                <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="color: var(--color-white); border-color: rgba(255,255,255,0.3);">
                    Ver Nuestro Día a Día en Instagram ↗
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
