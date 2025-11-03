<?php

// Sicherstellen, dass Sprach-Domains geladen sind (robust, auch lokal via dev-main/path)
\Contao\System::loadLanguageFile('tl_imagemask');
\Contao\System::loadLanguageFile('tl_content');


// kleine Helper-Funktion: gibt das TL_LANG-Array zurück, falls vorhanden,
// sonst den Translator-Key als Array (für C5 XLIFF)
$L = $GLOBALS['TL_LANG']['tl_imagemask'] ?? [];

$lbl = function (string $key): array {
    $L = $GLOBALS['TL_LANG']['tl_imagemask'] ?? [];
    return (isset($L[$key]) && is_array($L[$key])) ? $L[$key] : ["tl_imagemask.$key"];
};

return [

    // Element-Label
    'label'           => $lbl('label'),

    // Registrierung
    'types'           => ['content'],
    'contentCategory' => 'media',
    'standardFields'  => ['headline', 'cssID', 'space'],

    // Felder
    'fields' => [

        'image' => [
            'label'     => $lbl('image'),
            'inputType' => 'fileTree',
            'eval'      => [
                'filesOnly'  => true,
                'fieldType'  => 'radio',
                'extensions' => 'jpg,jpeg,png,webp,avif',
                'mandatory'  => true,
            ],
        ],

        'maskSvg' => [
            'label'     => $lbl('maskSvg'),
            'inputType' => 'fileTree',
            'eval'      => [
                'filesOnly'  => true,
                'fieldType'  => 'radio',
                'extensions' => 'svg',
                'mandatory'  => true,
            ],
        ],

        // Bild-Skalierung (steuert background-size)
        'bgSize' => [
            'label'     => $lbl('bgSize'),
            'inputType' => 'select',
            'options'   => [
                'cover'     => 'cover',
                'contain'   => 'contain',
                'auto'      => 'auto',
                '100_auto'  => 'Breite 100% (Höhe auto)',
                'auto_100'  => 'Höhe 100% (Breite auto)',
            ],
            'default'   => 'cover',
        ],

        'bgPosition' => [
            'label'     => $lbl('bgPosition'),
            'inputType' => 'select',
            'options'   => [
                'center'        => 'center',
                'top'           => 'top',
                'right'         => 'right',
                'bottom'        => 'bottom',
                'left'          => 'left',
                'center top'    => 'center top',
                'center bottom' => 'center bottom',
            ],
            'default'   => 'center',
        ],

        // Maske explizit ans Bild koppeln (mask-size & -position = background-size & -position)
        'maskSync' => [
            'label'     => $lbl('maskSync'),
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w50'],
            'default'   => true,
        ],

        // Falls man doch abweichend steuern will:
        'maskSize' => [
            'label'     => $lbl('maskSize'),
            'inputType' => 'select',
            'options'   => [
                'cover'     => 'cover',
                'contain'   => 'contain',
                'auto'      => 'auto',
                '100% auto' => 'Breite 100% (Höhe auto)',
                'auto 100%' => 'Höhe 100% (Breite auto)',
                '100% 100%' => 'Auf Container strecken',
            ],
            'eval'      => ['tl_class' => 'w50'],
            'default'   => 'cover',
        ],

        'ratio' => [
            'label'     => $lbl('ratio'),
            'inputType' => 'text',
            'eval'      => ['tl_class' => 'w50', 'placeholder' => '16/9'],
        ],

        'minHeight' => [
            'label'     => $lbl('minHeight'),
            'inputType' => 'text',
            'eval'      => ['tl_class' => 'w50', 'placeholder' => '240px'],
        ],

        'customClasses' => [
            'label'     => $lbl('customClasses'),
            'inputType' => 'text',
            'eval'      => ['tl_class' => 'clr'],
        ],
    ],
];
