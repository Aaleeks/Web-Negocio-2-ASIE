@extends('layouts.app')

@section('title', 'Contacto, Ubicación & Reservas | Aura Café')
@section('meta_description', 'Encuéntranos en Calle Mayor 42 de Madrid, consulta nuestros horarios de apertura o reserva tu mesa y plaza de cata.')

@section('content')

<!-- ==========================================
     CABECERA DE CONTACTO
     ========================================== -->
<div class="menu-banner" style="background: linear-gradient(rgba(30, 23, 19, 0.75), rgba(30, 23, 19, 0.9)), url('/images/hero-cafe.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <span class="badge" style="background-color: var(--color-white); color: var(--color-primary); margin-bottom: 1rem;">Estamos en Madrid</span>
        <h1>Visítanos o Escríbenos</h1>
        <p>
            Te esperamos en el corazón de la ciudad con café fresco recién tostado, aroma a pan recién horneado y un espacio pensado para pausar el tiempo.
        </p>
    </div>
</div>

<div class="container section">

    <!-- ==========================================
         LAYOUT DE CONTACTO Y RESERVAS (2 COLUMNAS)
         ========================================== -->
    <div class="contact-layout">

        <!-- Columna Izquierda: Información de contacto y horarios -->
        <div class="contact-info-panel">
            <span class="badge">Atención y Visitas</span>
            <h2>Datos del Establecimiento</h2>

            <ul class="contact-detail-list">
                <li>
                    <div class="icon-wrap">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <strong>Dirección física:</strong>
                        <p style="margin-bottom: 0.35rem; color: var(--color-gray-dark);">Calle Mayor 42, Barrio Histórico, 28013 Madrid</p>
                        <!-- Enlace externo requerido -->
                        <a href="https://maps.google.com/?q=Calle+Mayor+42+Madrid" target="_blank" rel="noopener noreferrer" style="font-size: 0.85rem; font-weight: 600;">
                            Ver localización exacta en Google Maps ↗
                        </a>
                    </div>
                </li>

                <li>
                    <div class="icon-wrap">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div>
                        <strong>Teléfono y reservas:</strong>
                        <p style="margin-bottom: 0; color: var(--color-gray-dark);">+34 912 345 678</p>
                    </div>
                </li>

                <li>
                    <div class="icon-wrap">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div>
                        <strong>Email de contacto:</strong>
                        <p style="margin-bottom: 0; color: var(--color-gray-dark);">hola@auracafe.es</p>
                    </div>
                </li>
            </ul>

            <!-- Sección de horarios en lista estructurada -->
            <div class="hours-schedule" id="horarios">
                <h3>Horarios de Apertura</h3>
                <ul class="hours-list">
                    @foreach($horarios as $h)
                        <li>
                            <span><strong>{{ $h['dias'] }}:</strong></span>
                            <span>{{ $h['horas'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Lista de servicios especiales -->
            <h3 style="font-size: 1.15rem; margin-bottom: 0.75rem;">Servicios Adicionales:</h3>
            <ul class="feature-list" style="margin-bottom: 2rem;">
                @foreach($serviciosEspeciales as $servicio)
                    <li>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        {{ $servicio }}
                    </li>
                @endforeach
            </ul>

            <!-- Enlaces externos a redes y mensajería -->
            <div class="external-actions-box">
                <a href="https://wa.me/34912345678" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="width: 100%; justify-content: flex-start; gap: 0.75rem;">
                    <span>💬</span>
                    <span>Escribir por WhatsApp al barista de turno ↗</span>
                </a>
                <a href="https://www.tripadvisor.es" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="width: 100%; justify-content: flex-start; gap: 0.75rem;">
                    <span>⭐</span>
                    <span>Consultar opiniones en TripAdvisor ↗</span>
                </a>
            </div>
        </div>

        <!-- Columna Derecha: Formulario de contacto y reservas -->
        <div class="contact-form-panel">
            <span class="badge">Formulario Online</span>
            <h2>Reserva tu Mesa o Envíanos una Consulta</h2>
            <p>
                Rellena este breve formulario y nuestro equipo te responderá en menos de dos horas laborables para confirmar tu reserva o resolver tus dudas.
            </p>

            <!-- Alerta Flash de Éxito al enviar el formulario -->
            @if(session('success'))
                <div class="alert-success" role="alert">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="nombre" class="form-label">Nombre completo *</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej: Elena Martínez" required value="{{ old('nombre') }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo electrónico *</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="tu@email.com" required value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="telefono" class="form-label">Teléfono de contacto</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="+34 600 000 000" value="{{ old('telefono') }}">
                    </div>

                    <div class="form-group">
                        <label for="motivo" class="form-label">Motivo de contacto *</label>
                        <select id="motivo" name="motivo" class="form-control" required>
                            <option value="Reserva de Mesa">Reserva de Mesa para Desayuno / Brunch</option>
                            <option value="Taller de Barismo / Cata">Inscripción a Taller de Cata de Café</option>
                            <option value="Catering para Empresas">Presupuesto de Catering para Empresas</option>
                            <option value="Consulta General">Otra consulta general</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mensaje" class="form-label">Mensaje o detalles de la reserva *</label>
                    <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Indícanos fecha deseada, hora, número de personas o cualquier alergia / petición especial..." required>{{ old('mensaje') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.95rem; font-size: 1.05rem;">
                    Confirmar Envío de Formulario
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
        </div>

    </div>

    <!-- ==========================================
         SECCIÓN DE PREGUNTAS FRECUENTES (FAQ)
         ========================================== -->
    <div style="margin-top: 5rem;">
        <div class="section-header">
            <span class="badge">Resolución de Dudas</span>
            <h2 class="section-title">Preguntas Frecuentes</h2>
            <p class="section-desc">
                Respuestas inmediatas a las dudas más habituales de nuestros clientes antes de visitarnos.
            </p>
        </div>

        <div class="cards-grid-3">
            @foreach($preguntasFrecuentes as $faq)
                <div class="card">
                    <h3 class="card-title" style="font-size: 1.15rem; color: var(--color-primary);">{{ $faq['pregunta'] }}</h3>
                    <p class="card-text" style="font-size: 0.92rem;">{{ $faq['respuesta'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
