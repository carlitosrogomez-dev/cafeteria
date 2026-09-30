<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CafeteriaController extends Controller
{
    public function home(): View
    {
        $featuredCoffees = [
            [
                'name' => 'Espresso Origen Huila',
                'description' => 'Notas a cacao amargo, panela y frutos rojos. Tostado medio con cuerpo sedoso.',
                'price' => '2,40 €',
                'image' => 'images/cafe-espresso.svg',
                'tags' => ['Colombia', 'Lavado', '1.800m'],
            ],
            [
                'name' => 'Flat White Cremoso',
                'description' => 'Doble shot de espresso con leche fresca emulsionada a 65°C y microespuma aterciopelada.',
                'price' => '3,10 €',
                'image' => 'images/cafe-latte.svg',
                'tags' => ['Especialidad', 'Arte Latte', 'Leche Fresca'],
            ],
            [
                'name' => 'Croissant Artesano de Mantequilla',
                'description' => 'Elaborado con mantequilla pura de Normandía y fermentación lenta de 24 horas en nuestro obrador.',
                'price' => '2,20 €',
                'image' => 'images/reposteria.svg',
                'tags' => ['Recién Horneado', 'Artesanal', '100% Mantequilla'],
            ],
            [
                'name' => 'Tostada de Masa Madre & Aguacate',
                'description' => 'Pan rústico de masa madre con aguacate Hass, huevo poché de granja ecológica y copos de chile.',
                'price' => '5,80 €',
                'image' => 'images/brunch.svg',
                'tags' => ['Brunch', 'Orgánico', 'Vegetariano'],
            ],
        ];

        $pillars = [
            [
                'title' => 'Tueste Artesanal Semanal',
                'description' => 'Tostamos pequeños lotes cada martes para garantizar frescura, aroma inigualable y acidez balanceada en cada taza.',
            ],
            [
                'title' => 'Trato Directo con Caficultores',
                'description' => 'Compramos directamente a fincas sostenibles de Colombia, Etiopía y Guatemala pagando un precio justo por encima del mercado.',
            ],
            [
                'title' => 'Obrador Diario Propio',
                'description' => 'Nuestra bollería y repostería se hornea cada madrugada con harinas ecológicas molidas a la piedra y fermentos naturales.',
            ],
        ];

        return view('pages.home', compact('featuredCoffees', 'pillars'));
    }

    public function menu(): View
    {
        $categories = [
            [
                'name' => 'Cafetería de Especialidad',
                'badge' => '100% Arábica de Finca',
                'image' => 'images/cafe-espresso.svg',
                'items' => [
                    [
                        'name' => 'Espresso Doble',
                        'desc' => 'Doble extracción de 36ml con notas florales y cuerpo aterciopelado.',
                        'tag' => 'Origen Huila',
                        'price' => '2,20 €',
                    ],
                    [
                        'name' => 'Café Filtrado Chemex (250ml)',
                        'desc' => 'Extracción manual por goteo que resalta acidez cítrica y notas a jazmín.',
                        'tag' => 'Etiopía Yirgacheffe',
                        'price' => '3,80 €',
                    ],
                    [
                        'name' => 'Flat White Doble',
                        'desc' => 'Doble ristretto combinado con leche fresca microtexturizada.',
                        'tag' => 'Favorito',
                        'price' => '3,10 €',
                    ],
                    [
                        'name' => 'Cold Brew 18 Horas',
                        'desc' => 'Maceración lenta en frío con agua purificada, bajo en acidez y muy refrescante.',
                        'tag' => 'Bebida Fría',
                        'price' => '3,60 €',
                    ],
                    [
                        'name' => 'Cappuccino Tradicional',
                        'desc' => 'Espresso, leche vaporizada y generosa capa de espuma cremosa con toque de cacao 85%.',
                        'tag' => 'Clásico',
                        'price' => '2,70 €',
                    ],
                ],
            ],
            [
                'name' => 'Desayunos & Obrador Artesanal',
                'badge' => 'Masa Madre & Granja Local',
                'image' => 'images/brunch.svg',
                'items' => [
                    [
                        'name' => 'Tostada de Aguacate & Huevo Poché',
                        'desc' => 'Hogaza de masa madre integral, aguacate machacado con lima y huevo campero a baja temperatura.',
                        'tag' => 'Recomendado',
                        'price' => '5,80 €',
                    ],
                    [
                        'name' => 'Tostada Ibérica & Tomate Rallado',
                        'desc' => 'Pan de cristal tostado con jamón ibérico de bellota, tomate de huerta y AOVE ecológico.',
                        'tag' => 'Tradicional',
                        'price' => '6,20 €',
                    ],
                    [
                        'name' => 'Tazón de Açaí & Granola Casera',
                        'desc' => 'Pulpa pura de açaí con plátano, arándanos silvestres, semillas de chía y crema de cacahuete.',
                        'tag' => 'Vegano',
                        'price' => '6,90 €',
                    ],
                    [
                        'name' => 'Croissant Francés de Mantequilla',
                        'desc' => 'Hojaldrado artesanal con 27 capas crujientes y aroma intenso a mantequilla dorada.',
                        'tag' => 'Obrador',
                        'price' => '2,20 €',
                    ],
                    [
                        'name' => 'Cookie de Triple Chocolate & Avellanas',
                        'desc' => 'Masa crujiente por fuera y centro fundente con chocolate negro 70% y avellana tostada.',
                        'tag' => 'Dulce',
                        'price' => '2,80 €',
                    ],
                ],
            ],
            [
                'name' => 'Bebidas Alternativas & Tés Orgánicos',
                'badge' => 'Sin Lácteos / Opciones Veganas',
                'image' => 'images/cafe-latte.svg',
                'items' => [
                    [
                        'name' => 'Matcha Latte Ceremonial de Uji',
                        'desc' => 'Té verde japonés grado ceremonial batido con batidor de bambú y bebida de avena barista.',
                        'tag' => 'Japón',
                        'price' => '3,90 €',
                    ],
                    [
                        'name' => 'Chai Latte Especiado',
                        'desc' => 'Té negro Assam infusionado con canela de Ceilán, cardamomo, clavo, jengibre y miel pura.',
                        'tag' => 'Especiado',
                        'price' => '3,70 €',
                    ],
                    [
                        'name' => 'Kombucha Artesanal de Jengibre',
                        'desc' => 'Fermentado natural vivo, burbuja fina, probiótico y bajo en azúcares residuales.',
                        'tag' => 'Fermentado',
                        'price' => '3,50 €',
                    ],
                ],
            ],
        ];

        $dietaryNotes = [
            'Disponemos de bebidas vegetales sin coste adicional: avena barista, almendra sin azúcar y soja orgánica.',
            'Opciones sin gluten disponibles horneadas en sección aislada para evitar contaminación cruzada.',
            'Huevos camperos de gallinas criadas en libertad procedentes de granja local a menos de 40 km.',
            'Café descafeinado mediante proceso natural Swiss Water sin químicos.',
        ];

        return view('pages.menu', compact('categories', 'dietaryNotes'));
    }

    public function about(): View
    {
        $timeline = [
            [
                'year' => '2018',
                'title' => 'El primer tostador en el garaje',
                'description' => 'Comenzamos tostando pequeños sacos de 5 kg para amigos y cafeterías del barrio con una tostadora manual.',
            ],
            [
                'year' => '2020',
                'title' => 'Apertura de la Cafetería Aroma & Grano',
                'description' => 'Abrimos las puertas de nuestro local actual, integrando barra de especialidad y obrador propio a la vista.',
            ],
            [
                'year' => '2022',
                'title' => 'Certificación de Origen & Tueste Limpio',
                'description' => 'Establecimos acuerdos de compra directa con cooperativas agrícolas en Colombia, Etiopía y Costa Rica.',
            ],
            [
                'year' => '2024',
                'title' => 'Ampliación del Obrador & Premios Barista',
                'description' => 'Nuestro equipo obtuvo el reconocimiento a Mejor Espresso de la Región y triplicamos la producción de masa madre.',
            ],
        ];

        $processSteps = [
            [
                'title' => 'Selección de Grano Verde',
                'desc' => 'Catamos muestras de cosechas recientes seleccionando únicamente granos con puntuación superior a 84 en escala SCA.',
            ],
            [
                'title' => 'Perfil de Tueste a Medida',
                'desc' => 'Desarrollamos curvas térmicas específicas para cada origen para exaltar su dulzura natural y acidez brillante.',
            ],
            [
                'title' => 'Molienda en Micras Exactas',
                'desc' => 'Calibramos nuestros molinos de muelas planas varias veces al día según humedad y temperatura ambiente.',
            ],
            [
                'title' => 'Extracción de Precisión',
                'desc' => 'Controlamos peso de molienda al décimo de gramo, temperatura de agua estable a 93°C y tiempo de caída uniforme.',
            ],
        ];

        $team = [
            [
                'name' => 'Lucía Mendoza',
                'role' => 'Head Barista & Catadora Q-Grader',
                'bio' => 'Más de 9 años de experiencia en café de especialidad y campeona regional de baristas 2023.',
            ],
            [
                'name' => 'Marcos Salgado',
                'role' => 'Maestro Tostador',
                'bio' => 'Especialista en termodinámica del tueste y responsable del control de calidad de cada lote.',
            ],
            [
                'name' => 'Elena Navarro',
                'role' => 'Jefa de Obrador & Repostería',
                'bio' => 'Formada en pastelería francesa tradicional, apasionada de la fermentación lenta y harinas limpias.',
            ],
        ];

        $commitments = [
            'Envases, pajitas y vasos de café para llevar 100% compostables y libres de plástico.',
            'Donación de posos de café como fertilizante orgánico para huertos urbanos comunitarios.',
            'Energía eléctrica 100% proveniente de fuentes renovables certificadas.',
            'Leche entera fresca de vacas en pastoreo de ganadería regenerativa familiar.',
        ];

        return view('pages.about', compact('timeline', 'processSteps', 'team', 'commitments'));
    }

    public function contact(): View
    {
        $businessInfo = [
            'name' => 'Cafetería Aroma & Grano',
            'address' => 'Calle Mayor del Grano, 42, 28013 Madrid, España',
            'phone' => '+34 912 345 678',
            'whatsapp' => '+34 600 123 456',
            'email' => 'hola@aromaygrano.com',
            'instagram' => 'https://instagram.com/aromaygranocafe',
            'facebook' => 'https://facebook.com/aromaygranocafe',
            'maps' => 'https://maps.google.com/?q=Puerta+del+Sol+Madrid',
        ];

        $schedule = [
            ['days' => 'Lunes a Viernes', 'hours' => '07:30 - 20:00'],
            ['days' => 'Sábados', 'hours' => '08:30 - 20:30'],
            ['days' => 'Domingos y Festivos', 'hours' => '09:00 - 18:30'],
        ];

        $transportOptions = [
            'Metro: Estación Central (Líneas 1, 2 y 3) a 3 minutos a pie.',
            'Autobús urbano: Líneas 3, 14, 27 y 150 con parada justo en la esquina.',
            'Bicicleta: Estación pública de bicis a 50 metros y soporte propio frente al local.',
            'Aparcamiento: Parking público subterráneo Plaza Mayor a 150 metros.',
        ];

        return view('pages.contact', compact('businessInfo', 'schedule', 'transportOptions'));
    }

    public function sendContact(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'asunto' => 'required|string|max:150',
            'mensaje' => 'required|string|max:1000',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', '¡Gracias por escribirnos! Tu mensaje ha sido enviado correctamente y nuestro equipo te responderá en menos de 24 horas.');
    }
}
