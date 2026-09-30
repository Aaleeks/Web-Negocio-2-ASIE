<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Muestra la página principal de Aura Café.
     */
    public function index()
    {
        $destacados = [
            [
                'nombre' => 'Etiopía Yirgacheffe G1',
                'region' => 'Yirgacheffe, Etiopía (1.950 msnm)',
                'proceso' => 'Lavado tradicional',
                'variedad' => 'Heirloom',
                'puntuacion_sca' => '88.5',
                'notas' => ['Jazmín fresco', 'Bergamota', 'Miel de azahar', 'Acidez cítrica brillante'],
                'precio' => '3.80 €',
            ],
            [
                'nombre' => 'Colombia Huila Finca La Esperanza',
                'region' => 'San Agustín, Huila (1.780 msnm)',
                'proceso' => 'Natural anaeróbico 72h',
                'variedad' => 'Geisha & Caturra',
                'puntuacion_sca' => '89.0',
                'notas' => ['Frutos rojos maduros', 'Chocolate negro 70%', 'Caramelo toffee', 'Cuerpo sedoso'],
                'precio' => '4.20 €',
            ],
            [
                'nombre' => 'Guatemala Antigua Los Volcanes',
                'region' => 'Valle de Panchoy, Antigua (1.600 msnm)',
                'proceso' => 'Lavado y secado al sol',
                'variedad' => 'Bourbon & Typica',
                'puntuacion_sca' => '86.7',
                'notas' => ['Cacao puro', 'Nueces tostadas', 'Manzana roja', 'Dulzura prolongada'],
                'precio' => '3.60 €',
            ],
        ];

        $pilares = [
            [
                'titulo' => 'Comercio Directo y Ético',
                'icono' => 'handshake',
                'descripcion' => 'Tratamos directamente con familias caficultoras en Colombia, Etiopía y Guatemala, pagando hasta un 45% por encima del precio del mercado de futuros para garantizar sostenibilidad y dignidad rural.',
            ],
            [
                'titulo' => 'Tueste Artesanal en Lotes Pequeños',
                'icono' => 'flame',
                'descripcion' => 'Tostamos cada lote de café en nuestra tostadora Probat de tambor de hierro fundido, ajustando los perfiles térmicos grado a grado para resaltar la acidez natural, el aroma y los azúcares del grano.',
            ],
            [
                'titulo' => 'Panadería de Masa Madre 100% Viva',
                'icono' => 'bread',
                'descripcion' => 'Nuestros panes y bollería se elaboran sin aditivos químicos ni levaduras industriales, utilizando harinas ecológicas molidas a la piedra y fermentaciones lentas de más de 48 horas.',
            ],
        ];

        $pasosElaboracion = [
            [
                'titulo' => 'Selección del Grano en Verde',
                'detalle' => 'Evaluamos muestras de origen con cata a ciegas (cupping) según estándares internacionales de la Specialty Coffee Association (SCA).',
            ],
            [
                'titulo' => 'Perfilado Térmico y Tueste Semanal',
                'detalle' => 'Monitoreamos la curva de tiempo y temperatura para desarrollar aromas complejos sin quemar los aceites esenciales del café.',
            ],
            [
                'titulo' => 'Molienda al Momento por Granulometría',
                'detalle' => 'Calibramos molinos profesionales con muelas cónicas de titanio para cada método específico de extracción (Espresso, V60 o Aeropress).',
            ],
            [
                'titulo' => 'Servicio con Agua Mineralizada Óptima',
                'detalle' => 'Filtramos y remineralizamos el agua con niveles precisos de magnesio y calcio entre 90 y 93 °C para una taza perfecta.',
            ],
        ];

        return view('pages.home', compact('destacados', 'pilares', 'pasosElaboracion'));
    }
}
