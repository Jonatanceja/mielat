<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mayoristas de Integración Electrónica',
    'description' => 'Mayoristas de Integración Electrónica',
    'collections' => [
        'products' => [
            'path' => '/productos/{filename}',
            'extends' => '_layouts.product',               
            ]
    ],
    'slider_images' => [
        [
            'src' => '/assets/images/videovigilancia.png',
            'alt' => 'Videovigilancia',
        ],
        [
            'src' => '/assets/images/intrusion.png',
            'alt' => 'Intrusión',
        ],
        [
            'src' => '/assets/images/control-de-acceso.png',
            'alt' => 'Control de acceso',
        ],
    ],
    'logos' => [
        [
            'src' => '/assets/images/svg/dahua.svg',
            'alt' => 'Dahua Technology',
        ],
        [
            'src' => '/assets/images/svg/ajax.svg',
            'alt' => 'Ajax Security',
        ],
        [
            'src' => '/assets/images/svg/alarm.svg',
            'alt' => 'Alarm.com',
        ],
        [
            'src' => '/assets/images/svg/firelite.svg',
            'alt' => 'Firelite',
        ],
        [
            'src' => '/assets/images/svg/enson.svg',
            'alt' => 'Enson',
        ],
    ],
    'features' => [
        [
            'icon' => 'video',
            'title' => 'Videovigilancia',
            'description' => 'Cámaras IP, DVR/NVR y sistemas de monitoreo inteligente para vigilancia 24/7.',
        ],
        [
            'icon' => 'shield-alert',
            'title' => 'Sistemas de Intrusión',
            'description' => 'Paneles de alarma, sensores de movimiento y detección perimetral avanzada.',
        ],
        [
            'icon' => 'zap',
            'title' => 'Cercas Eléctricas',
            'description' => 'Energizadores y sistemas perimetrales de alta tensión para protección exterior.',
        ],
        [
            'icon' => 'fingerprint',
            'title' => 'Control de Acceso',
            'description' => 'Lectoras biométricas, tarjetas de proximidad y torniquetes para gestión de entradas.',
        ],
        [
            'icon' => 'flame',
            'title' => 'Sistemas de Incendio',
            'description' => 'Detectores de humo, paneles de alarma y sistemas de supresión contra incendios.',
        ],
        [
            'icon' => 'plug',
            'title' => 'Fuentes de Energía',
            'description' => 'UPS, fuentes reguladas y sistemas de respaldo para operación continua y confiable.',
        ],
    ],
];