<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    /**
     * Muestra la carta completa del negocio organizada por categorías.
     */
    public function index()
    {
        $cafesEspecialidad = [
            [
                'nombre' => 'Etiopía Yirgacheffe G1 (Lavado)',
                'descripcion' => 'Café de altura legendario, con perfil floral delicado y gran complejidad en boca.',
                'origen' => 'Gedeo Zone, Etiopía - 1.950 msnm',
                'notas' => ['Jazmín fresco', 'Bergamota y lima', 'Té negro Earl Grey', 'Miel pura'],
                'precio' => '3.80 €',
            ],
            [
                'nombre' => 'Colombia Huila Anaeróbico 72h',
                'descripcion' => 'Fermentación prolongada controlada que resalta una explosión frutal y cuerpo aterciopelado.',
                'origen' => 'San Agustín, Huila - 1.780 msnm',
                'notas' => ['Fresas silvestres', 'Mora madura', 'Chocolate con leche', 'Panela'],
                'precio' => '4.20 €',
            ],
            [
                'nombre' => 'Guatemala Finca Santa Clara (Bourbon)',
                'descripcion' => 'Clásico de las faldas del volcán de Agua, balance impecable y dulzura cremosa.',
                'origen' => 'Antigua, Guatemala - 1.600 msnm',
                'notas' => ['Avellanas tostadas', 'Cacao Criollo', 'Manzana fuji', 'Vainilla natural'],
                'precio' => '3.60 €',
            ],
            [
                'nombre' => 'Costa Rica Tarrazú White Honey',
                'descripcion' => 'Proceso semi-lavado con conservación de mucílago dulce, taza limpia y acidez brillante.',
                'origen' => 'Valle de Tarrazú - 1.800 msnm',
                'notas' => ['Albaricoque', 'Mandarina dulce', 'Caramelo blando', 'Toques de cardamomo'],
                'precio' => '3.90 €',
            ],
        ];

        $metodosFiltrado = [
            [
                'nombre' => 'V60 Drip (Hario Cerámica)',
                'descripcion' => 'Extracción por goteo continuo con filtro de papel fino cónico. Ideal para resaltar acidez floral y perfiles limpios.',
                'caracteristicas' => [
                    'Ratio de preparación: 1:16 (18g café / 288g agua)',
                    'Tiempo total de extracción: 3 minutos 15 segundos',
                    'Temperatura del agua: 92 °C',
                    'Cuerpo ligero, brillante y aromático',
                ],
                'precio' => '4.50 €',
            ],
            [
                'nombre' => 'Chemex Clásico de 3 Tazas',
                'descripcion' => 'Filtro de fibra gruesa que retiene sedimentos y aceites pesados. Ofrece una de las tazas más cristalinas del mundo.',
                'caracteristicas' => [
                    'Ratio de preparación: 1:15 (24g café / 360g agua)',
                    'Tiempo total de infusión: 4 minutos 00 segundos',
                    'Tolerancia térmica: Mantiene calor en vidrio borosilicato',
                    'Taza sedosa, dulce y sin asperezas',
                ],
                'precio' => '5.00 €',
            ],
            [
                'nombre' => 'Aeropress (Inverted Method)',
                'descripcion' => 'Inmersión total combinada con presión manual de aire. Consigue mayor concentración, cuerpo y dulzura acentuada.',
                'caracteristicas' => [
                    'Ratio de preparación: 1:13 (17g café / 220g agua)',
                    'Tiempo total de contacto: 2 minutos 10 segundos',
                    'Presión suave durante 25 segundos',
                    'Excelente para orígenes naturales y achocolatados',
                ],
                'precio' => '4.20 €',
            ],
            [
                'nombre' => 'Cold Brew Nitro Artesanal (Macerado 18h)',
                'descripcion' => 'Infusión en frío durante 18 horas a 4 °C, infusionada con nitrógeno líquido puro para una textura similar a la cerveza negra.',
                'caracteristicas' => [
                    'Baja acidez clorhídrica (hasta un 60% menos que el café caliente)',
                    'Notas intensas a cacao, frutos secos y vainilla',
                    'Servido a 2 °C sin hielo para evitar dilución',
                    'Energía natural prolongada sin amargor',
                ],
                'precio' => '4.80 €',
            ],
        ];

        $reposteriaPanaderia = [
            [
                'nombre' => 'Croissant Bicolor de Mantequilla Francesa DOP',
                'descripcion' => 'Hojaldre fermentado con 27 capas crujientes y mantequilla pura de Normandía.',
                'ingredientes' => ['Harina ecológica T65', 'Mantequilla francesa AOP Charentes', 'Masa madre de centeno', 'Sal marina de Guerande'],
                'alergenos' => 'Gluten, Lácteos',
                'precio' => '2.80 €',
            ],
            [
                'nombre' => 'Roll Artesanal de Cardamomo y Azúcar Perlado',
                'descripcion' => 'Receta tradicional escandinava horneada cada mañana con semillas de cardamomo machacadas en mortero.',
                'ingredientes' => ['Masa enriquecida fermentada 24h', 'Cardamomo verde molido', 'Mantequilla tostada', 'Azúcar moreno mascabado'],
                'alergenos' => 'Gluten, Lácteos, Huevos camperos',
                'precio' => '3.40 €',
            ],
            [
                'nombre' => 'Pain au Chocolat con Valrhona 66%',
                'descripcion' => 'Doble barrita de chocolate amargo Grand Cru Valrhona fundido en el corazón del hojaldre crujiente.',
                'ingredientes' => ['Chocolate negro Guanaja 66%', 'Harina de trigo de molienda a la piedra', 'Masa madre activa'],
                'alergenos' => 'Gluten, Lácteos, Soja',
                'precio' => '3.10 €',
            ],
            [
                'nombre' => 'Hogaza de Masa Madre Tradicional (1 kg)',
                'descripcion' => 'Pan campesino de corteza gruesa y crujiente con miga húmeda, alveolada y aromática.',
                'ingredientes' => ['Trigo candeal', 'Centeno integral ecológico', 'Fermentación en banetón 48 horas', 'Agua pura'],
                'alergenos' => 'Gluten',
                'precio' => '5.20 €',
            ],
        ];

        $brunchEspecial = [
            [
                'nombre' => 'Tosta Rústica Nórdica de Salmón y Eneldo',
                'descripcion' => 'Rebanada de masa madre con queso crema artesano, salmón marinado con cítricos de la huerta, pepino encurtido y alcaparras.',
                'detalles' => ['Pan tostado con AOVE virgen extra', 'Eneldo fresco', 'Rábanos laminados'],
                'precio' => '8.90 €',
            ],
            [
                'nombre' => 'Tosta de Aguacate Hass, Huevos Poché y Zaatar',
                'descripcion' => 'Aguacate nacional triturado a tenedor, dos huevos camperos ecológicos de gallinas en libertad y semillas de sésamo con especias zaatar.',
                'detalles' => ['Huevos camperos cocidos 6 minutos', 'Chorrito de lima fresca', 'Copos de chile suave'],
                'precio' => '7.80 €',
            ],
            [
                'nombre' => 'Granola Crujiente con Yogur Griego de Granja',
                'descripcion' => 'Avena sin gluten horneada con miel de bosque, nueces de pecán, arándanos silvestres y yogur artesanal de oveja.',
                'detalles' => ['Semillas de calabaza y chía', 'Fruta fresca de temporada', 'Miel ecológica cruda'],
                'precio' => '6.50 €',
            ],
        ];

        return view('pages.menu', compact('cafesEspecialidad', 'metodosFiltrado', 'reposteriaPanaderia', 'brunchEspecial'));
    }
}
