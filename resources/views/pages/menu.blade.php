@extends('layouts.app')

@section('title', 'Nuestra Carta & Especialidades | Aura Café')
@section('meta_description', 'Descubre nuestra carta de cafés de origen único, métodos de extracción por goteo, repostería casera de masa madre y tostas de brunch.')

@section('content')

<!-- ==========================================
     CABECERA DEL MENÚ
     ========================================== -->
<div class="menu-banner">
    <div class="container">
        <span class="badge" style="background-color: var(--color-white); color: var(--color-primary); margin-bottom: 1rem;">Temporada 2026</span>
        <h1>Nuestra Carta & Especialidades</h1>
        <p>
            Cafés de altura calificados por encima de 85 puntos SCA, métodos de infusión pausada y panadería de fermentación natural elaborada cada amanecer.
        </p>
    </div>
</div>

<div class="container section">

    <!-- ==========================================
         CATEGORÍA 1: CAFÉS DE ESPECIALIDAD (ORIGEN ÚNICO)
         ========================================== -->
    <div class="menu-category-section">
        <div class="category-title-bar">
            <div>
                <span class="badge">Microlotes Seleccionados</span>
                <h2>1. Cafés de Especialidad (Single Origin)</h2>
            </div>
            <span style="font-size: 0.9rem; color: var(--color-gray);">Taza Espresso o Doble Shot</span>
        </div>

        <div class="menu-grid-2">
            @foreach($cafesEspecialidad as $cafe)
                <div class="menu-item-card">
                    <div class="item-header">
                        <h3 class="item-title">{{ $cafe['nombre'] }}</h3>
                        <span class="item-price">{{ $cafe['precio'] }}</span>
                    </div>
                    <p class="item-desc">{{ $cafe['descripcion'] }}</p>
                    <p style="font-size: 0.85rem; color: var(--color-primary); margin-bottom: 0.65rem; font-weight: 500;">
                        📍 {{ $cafe['origen'] }}
                    </p>
                    <ul class="item-meta-list">
                        <li><strong>Notas:</strong></li>
                        @foreach($cafe['notas'] as $nota)
                            <li>• {{ $nota }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ==========================================
         CATEGORÍA 2: MÉTODOS DE FILTRADO MANUAL (SLOW COFFEE)
         ========================================== -->
    <div class="menu-category-section">
        <div class="category-title-bar">
            <div>
                <span class="badge">Slow Coffee Bar</span>
                <h2>2. Métodos de Extracción Manual</h2>
            </div>
            <span style="font-size: 0.9rem; color: var(--color-gray);">Infusión al momento en mesa</span>
        </div>

        <!-- Tarjeta visual con imagen local sin hotlinking -->
        <div class="method-visual-card">
            <img src="{{ asset('images/metodos-extraccion.jpg') }}" alt="Barista vertiendo agua con tetera de cuello de cisne en filtro V60">
            <div class="method-visual-body">
                <span class="badge badge-outline" style="margin-bottom: 0.75rem;">Ritual de Extracción</span>
                <h3 style="font-size: 1.6rem; margin-bottom: 0.75rem;">La pureza del café de goteo</h3>
                <p style="color: var(--color-gray-dark); margin-bottom: 1.25rem;">
                    Las extracciones de filtro manual permiten capturar los aceites más sutiles y notas ácidas frutales que a menudo quedan enmascaradas en un espresso convencional. Servimos cada método en jarra de borosilicato acompañada de una ficha técnica del lote.
                </p>
                <ul class="feature-list" style="margin-bottom: 0;">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Molienda fresca con ajuste micrométrico para cada método.
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        Agua remineralizada a 92 °C con 120 ppm de dureza ideal.
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu-grid-2">
            @foreach($metodosFiltrado as $metodo)
                <div class="menu-item-card">
                    <div class="item-header">
                        <h3 class="item-title">{{ $metodo['nombre'] }}</h3>
                        <span class="item-price">{{ $metodo['precio'] }}</span>
                    </div>
                    <p class="item-desc">{{ $metodo['descripcion'] }}</p>
                    <ul class="feature-list" style="margin-top: 0.5rem; gap: 0.4rem;">
                        @foreach($metodo['caracteristicas'] as $caract)
                            <li style="font-size: 0.85rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                                {{ $caract }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ==========================================
         CATEGORÍA 3: REPOSTERÍA & PANADERÍA DE MASA MADRE
         ========================================== -->
    <div class="menu-category-section">
        <div class="category-title-bar">
            <div>
                <span class="badge">Obrador Propio</span>
                <h2>3. Repostería Artesanal & Masa Madre</h2>
            </div>
            <span style="font-size: 0.9rem; color: var(--color-gray);">Horneado diario desde las 06:00h</span>
        </div>

        <!-- Tarjeta visual con imagen local -->
        <div class="method-visual-card" style="margin-bottom: 2rem;">
            <img src="{{ asset('images/reposteria-artesanal.jpg') }}" alt="Mostrador de bollería hojaldrada y panes de masa madre de centeno">
            <div class="method-visual-body">
                <span class="badge badge-outline" style="margin-bottom: 0.75rem;">Fermentación Lenta 48h</span>
                <h3 style="font-size: 1.6rem; margin-bottom: 0.75rem;">Harinas ecológicas molidas a la piedra</h3>
                <p style="color: var(--color-gray-dark); margin-bottom: 1.25rem;">
                    Nuestros maestros panaderos trabajan únicamente con masas madre vivas alimentadas con centeno y trigo biológico. La larga fermentación descompone el gluten y los fitatos, ofreciendo un pan de digestión ligera, gran conservación y sabor inconfundible.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <span class="badge">Mantequilla DOP Normandía</span>
                    <span class="badge">Cero aditivos químicos</span>
                    <span class="badge">Chocolate Valrhona Grand Cru</span>
                </div>
            </div>
        </div>

        <div class="menu-grid-2">
            @foreach($reposteriaPanaderia as $item)
                <div class="menu-item-card">
                    <div class="item-header">
                        <h3 class="item-title">{{ $item['nombre'] }}</h3>
                        <span class="item-price">{{ $item['precio'] }}</span>
                    </div>
                    <p class="item-desc">{{ $item['descripcion'] }}</p>
                    
                    <div style="margin-top: auto; padding-top: 0.75rem; border-top: 1px dashed var(--color-gray-light);">
                        <strong style="font-size: 0.8rem; color: var(--color-dark); display: block; margin-bottom: 0.35rem;">Ingredientes clave:</strong>
                        <ul class="feature-list" style="margin: 0; gap: 0.3rem;">
                            @foreach($item['ingredientes'] as $ingrediente)
                                <li style="font-size: 0.82rem;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    {{ $ingrediente }}
                                </li>
                            @endforeach
                        </ul>
                        <p style="font-size: 0.78rem; color: #a1582e; margin-top: 0.65rem; margin-bottom: 0;">
                            ⚠️ Alérgenos presentes: {{ $item['alergenos'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ==========================================
         CATEGORÍA 4: BRUNCH & TOSTAS
         ========================================== -->
    <div class="menu-category-section">
        <div class="category-title-bar">
            <div>
                <span class="badge">Brunch de Temporada</span>
                <h2>4. Tostas Rústicas & Bowls Energéticos</h2>
            </div>
            <span style="font-size: 0.9rem; color: var(--color-gray);">Disponible todos los días</span>
        </div>

        <div class="cards-grid-3">
            @foreach($brunchEspecial as $brunch)
                <div class="card">
                    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.5rem;">
                        <h3 class="card-title" style="font-size: 1.15rem;">{{ $brunch['nombre'] }}</h3>
                        <strong style="color: var(--color-primary); font-size: 1.2rem;">{{ $brunch['precio'] }}</strong>
                    </div>
                    <p class="card-text" style="font-size: 0.9rem; margin-bottom: 1rem;">{{ $brunch['descripcion'] }}</p>
                    <ul class="feature-list" style="margin: 0; gap: 0.35rem; margin-top: auto; padding-top: 0.75rem; border-top: 1px dashed var(--color-gray-light);">
                        @foreach($brunch['detalles'] as $detalle)
                            <li style="font-size: 0.83rem;">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                {{ $detalle }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Banner inferior de reserva -->
    <div style="text-align: center; background-color: var(--color-accent-soft); padding: 3rem 2rem; border-radius: var(--radius-lg); margin-top: 3rem;">
        <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem;">¿Deseas degustar nuestro menú en grupo?</h3>
        <p style="color: var(--color-gray-dark); max-width: 550px; margin: 0 auto 1.5rem;">
            Aceptamos reservas anticipadas para desayunos corporativos, reuniones o mesas de fin de semana para garantizar tu espacio.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary">
            Hacer una Reserva Online Ahora
        </a>
    </div>

</div>

@endsection
