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
            'sort' => 'order',
            ]
    ],
    'slider_images' => [
        [
            'src' => '/assets/images/videovigilancia.webp',
            'alt' => 'Videovigilancia',
        ],
        [
            'src' => '/assets/images/intrusion.webp',
            'alt' => 'Intrusión',
        ],
        [
            'src' => '/assets/images/control-de-acceso.webp',
            'alt' => 'Control de acceso',
        ],
        [
            'src' => '/assets/images/sistemas-de-incendios.webp',
            'alt' => 'Sistemas de incendios',
        ],
        [
            'src' => '/assets/images/fuentes-de-energia.webp',
            'alt' => 'Fuentes de energia',
        ],
        [
            'src' => '/assets/images/cercas-electricas.webp',
            'alt' => 'Cercas electricas',
        ],

    ],
    'logos' => [
        [
            'src' => '/assets/images/SVG/dahua.svg',
            'alt' => 'Dahua Technology',
        ],
        [
            'src' => '/assets/images/SVG/ajax.svg',
            'alt' => 'Ajax Security',
        ],
        [
            'src' => '/assets/images/SVG/firelite.svg',
            'alt' => 'Firelite',
        ],
        [
            'src' => '/assets/images/SVG/enson.svg',
            'alt' => 'Enson',
        ],
        [
            'src' => '/assets/images/SVG/dsc.svg',
            'alt' => 'DSC',
        ],
        [
            'src' => '/assets/images/SVG/yonusa.svg',
            'alt' => 'Yonusa',
        ],
        [
            'src' => '/assets/images/SVG/saxxon.svg',
            'alt' => 'Saxxon',
        ],
        [
            'src' => '/assets/images/SVG/imou.svg',
            'alt' => 'Imou',
        ],
        [
            'src' => '/assets/images/SVG/trikdis.svg',
            'alt' => 'Trikdis',
        ],
        [
            'src' => '/assets/images/SVG/zkteco.svg',
            'alt' => 'ZKTeco',
        ],
        [
            'src' => '/assets/images/SVG/system-sensor.svg',
            'alt' => 'System Sensor',
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