<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Muestra la vista de contacto, reservas, ubicación y horarios.
     */
    public function index()
    {
        $horarios = [
            ['dias' => 'Lunes a Viernes', 'horas' => '07:30 - 20:30', 'nota' => 'Desayunos, tostador activo y almuerzos'],
            ['dias' => 'Sábados', 'horas' => '08:30 - 21:00', 'nota' => 'Brunch especial y catas guiadas'],
            ['dias' => 'Domingos y Festivos', 'horas' => '09:00 - 18:00', 'nota' => 'Brunch y repostería hasta agotar stock'],
        ];

        $serviciosEspeciales = [
            'Catas guiadas de cafés de origen los sábados a las 11:00h (previa reserva).',
            'Talleres de barismo doméstico (V60, Aeropress y calibración de molino).',
            'Venta de café en grano recién tostado y molido a medida para llevar.',
            'Catering para empresas y eventos privados con nuestra barra móvil de café.',
            'Espacio Pet-Friendly en terraza y zona interior habilitada con agua fresca.',
        ];

        $preguntasFrecuentes = [
            [
                'pregunta' => '¿Es necesario reservar para desayunar o tomar café?',
                'respuesta' => 'Para mesas de 1 a 4 personas durante los días de diario no es necesario reservar; funcionamos por orden de llegada. Sin embargo, para grupos de más de 4 personas o para el servicio de Brunch de fin de semana, recomendamos encarecidamente reservar a través de este formulario.',
            ],
            [
                'pregunta' => '¿Tenéis opciones para personas celíacas o veganas?',
                'respuesta' => 'Sí, disponemos de leches vegetales especiales para baristas (avena sin gluten, almendra y soja), tostadas con panes sin gluten horneados de forma independiente para evitar contaminación cruzada, y bowls de açai 100% veganos.',
            ],
            [
                'pregunta' => '¿Podéis moler el café para mi cafetera de casa?',
                'respuesta' => '¡Por supuesto! Cuando compras nuestros paquetes de café en grano de 250g o 1kg, nuestros baristas pueden calibrar el molino al instante según utilices cafetera italiana Moka, prensa francesa, filtro de goteo o cafetera espresso.',
            ],
        ];

        return view('pages.contact', compact('horarios', 'serviciosEspeciales', 'preguntasFrecuentes'));
    }

    /**
     * Procesa el envío del formulario de reserva o consulta.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'telefono' => 'nullable|string|max:20',
            'motivo' => 'required|string',
            'mensaje' => 'required|string|min:10|max:1000',
        ]);

        $nombre = e($request->input('nombre'));
        $motivo = e($request->input('motivo'));

        return redirect()->route('contact')->with(
            'success',
            "¡Muchas gracias, {$nombre}! Hemos registrado tu solicitud ({$motivo}). Nos pondremos en contacto contigo a través de {$request->input('email')} para confirmar todos los detalles."
        );
    }
}
