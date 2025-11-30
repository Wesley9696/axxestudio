<?php
// config/styles-vars.php

/**
 * 🎨 Variáveis de Estilo e Cores
 * Armazena os valores de cores e espaçamento para uso em PHP e no CSS dinâmico.
 */
$css_vars = [
    // Cores - Background
    '--black-bg'            => '#0A0A0A',
    '--light-bg'            => '#1A1A1A',

    // Cores - Primary
    '--cta-red'             => '#FE0307',
    '--cta-red-hover'       => '#E00003',
    '--cta-red-transparent' => 'rgba(254, 3, 7, 0.4)',
    '--dark-red'            => '#A30000',
    '--gradient-red-50'     => 'rgba(232, 55, 82, 0.048)',

    // Cores - Text
    '--white-text'          => '#FFFFFF',
    '--gray-text'           => '#CCCCCC',
    '--dark-gray-text'      => '#888888',

    // Cores - Borders
    '--menu-stroke'         => 'rgba(15, 9, 9, 0.56)',
    '--border-subtle'       => 'rgba(255, 255, 255, 0.05)',
    '--border-light'        => 'rgba(255, 255, 255, 0.1)',

    // Spacing
    '--container-padding'   => 'clamp(10px, 5vw, 100px)',
    '--section-padding'     => 'clamp(40px, 8vw, 80px)',
];

// Opcional: Definir constantes PHP para fácil acesso em outras partes do seu código
define('COLOR_CTA_RED', $css_vars['--cta-red']);
define('COLOR_BLACK_BG', $css_vars['--black-bg']);

return $css_vars;