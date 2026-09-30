<?php

test('home page loads successfully with business info, images and layout', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('Aura');
    $response->assertSee('Tostaduría Artesanal');
    $response->assertSee('hero-cafe.jpg');
    $response->assertSee('tostado-granos.jpg');
    $response->assertSee('style.css');
    $response->assertSee('https://maps.google.com/?q=Calle+Mayor+42+Madrid');
    $response->assertSee('https://www.instagram.com');
    $response->assertSee('Etiopía Yirgacheffe');
    $response->assertSee('Nuestro proceso de excelencia');
});

test('menu page loads successfully with categories, lists and details', function () {
    $response = $this->get(route('menu'));

    $response->assertOk();
    $response->assertSee('Nuestra Carta', false);
    $response->assertSee('Cafés de Especialidad (Single Origin)', false);
    $response->assertSee('Métodos de Extracción Manual', false);
    $response->assertSee('Repostería Artesanal', false);
    $response->assertSee('reposteria-artesanal.jpg');
    $response->assertSee('metodos-extraccion.jpg');
    $response->assertSee('V60 Drip');
    $response->assertSee('Croissant Bicolor');
    $response->assertSee('style.css');
});

test('contact page loads with schedule, faqs and form', function () {
    $response = $this->get(route('contact'));

    $response->assertOk();
    $response->assertSee('Calle Mayor 42');
    $response->assertSee('Horarios de Apertura');
    $response->assertSee('Lunes a Viernes');
    $response->assertSee('Preguntas Frecuentes');
    $response->assertSee('Reserva tu Mesa o Envíanos una Consulta');
    $response->assertSee('https://maps.google.com/?q=Calle+Mayor+42+Madrid');
});

test('contact form validates and redirects with success flash message', function () {
    $payload = [
        'nombre' => 'Carlos Serrano',
        'email' => 'carlos.serrano@ejemplo.com',
        'telefono' => '+34 612 345 678',
        'motivo' => 'Reserva de Mesa',
        'mensaje' => 'Deseo reservar una mesa para 2 personas este sábado por la mañana para degustar el café de Etiopía y repostería artesana.',
    ];

    $response = $this->post(route('contact.submit'), $payload);

    $response->assertRedirect(route('contact'));
    $response->assertSessionHas('success');

    $followed = $this->followRedirects($response);
    $followed->assertOk();
    $followed->assertSee('¡Muchas gracias, Carlos Serrano!');
    $followed->assertSee('Hemos registrado tu solicitud');
});
