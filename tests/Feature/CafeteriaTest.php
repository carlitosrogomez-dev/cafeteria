<?php

test('home page loads correctly with status 200', function () {
    $response = $this->get(route('home'));

    $response->assertStatus(200);
    $response->assertSee('Aroma &amp; Grano', false);
    $response->assertSee('Especialidades Recomendadas');
});

test('menu page loads correctly with status 200', function () {
    $response = $this->get(route('menu'));

    $response->assertStatus(200);
    $response->assertSee('Nuestra Carta &amp; Especialidades', false);
    $response->assertSee('Cafetería de Especialidad');
});

test('about page loads correctly with status 200', function () {
    $response = $this->get(route('about'));

    $response->assertStatus(200);
    $response->assertSee('Nuestra Historia &amp; Pasión', false);
    $response->assertSee('Lucía Mendoza');
});

test('contact page loads correctly with status 200', function () {
    $response = $this->get(route('contact'));

    $response->assertStatus(200);
    $response->assertSee('Contacto &amp; Dónde Encontrarnos', false);
    $response->assertSee('Calle Mayor del Grano');
});

test('contact form submits successfully and redirects with flash message', function () {
    $response = $this->post(route('contact.send'), [
        'nombre' => 'Ana Gómez',
        'email' => 'ana@example.com',
        'asunto' => 'Reserva para cata',
        'mensaje' => 'Hola, me gustaría reservar para un grupo de 5 personas.',
    ]);

    $response->assertRedirect(route('contact'));
    $response->assertSessionHas('success');
});
