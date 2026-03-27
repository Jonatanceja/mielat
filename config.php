<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Mayoristas de Distribución Electrónica',
    'description' => 'Mayoristas de Distribución Electrónica',
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
            'image' => '/assets/images/videovigilancia.webp',
            'title' => 'Videovigilancia',
            'description' => 'Cámaras IP, DVR/NVR y sistemas de monitoreo inteligente para vigilancia 24/7.',
            'link' => '/videovigilancia',
        ],
        [
            'image' => '/assets/images/intrusion.webp',
            'title' => 'Sistemas de Intrusión',
            'description' => 'Paneles de alarma, sensores de movimiento y detección perimetral avanzada.',
            'link' => '/intrusion',
        ],
        [
            'image' => '/assets/images/cercas-electricas.webp',
            'title' => 'Cercas Eléctricas',
            'description' => 'Energizadores y sistemas perimetrales de alta tensión para protección exterior.',
            'link' => '/cercas-electricas',
        ],
        [
            'image' => '/assets/images/control-de-acceso.webp',
            'title' => 'Control de Acceso',
            'description' => 'Lectoras biométricas, tarjetas de proximidad y torniquetes para gestión de entradas.',
            'link' => '/control-de-acceso',
        ],
        [
            'image' => '/assets/images/sistemas-de-incendios.webp',
            'title' => 'Sistemas de Incendio',
            'description' => 'Detectores de humo, paneles de alarma y sistemas de supresión contra incendios.',
            'link' => '/sistemas-de-incendios',
        ],
        [
            'image' => '/assets/images/fuentes-de-energia.webp',
            'title' => 'Fuentes de Energía',
            'description' => 'UPS, fuentes reguladas y sistemas de respaldo para operación continua y confiable.',
            'link' => '/fuentes-de-energia',
        ],
    ],
];