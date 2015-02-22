<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'mmusica');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'wp');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'XQ$(p$#34cGA*z/L=^#[ ++^#Lfb!*K .HQ-AHN=+{xIw yEJ:%Yu2b&e3jJ^faU');
define('SECURE_AUTH_KEY', 'cyiuDc[+n1`j.f#fT<<.0)b< ^jDNFO.rMXu/}2Z<d~ChqE-53:D.cb0u(K9!g >');
define('LOGGED_IN_KEY', 'Rx[4OI|_FcXfK|#-}%=em0*utPVLQD:h~tQ^9)J.#l1a3FKE<=*V BE|Cgp5ZGs-');
define('NONCE_KEY', 'Y,AI*B)7$A--id<r$7#+l`1z|_1ABOt<vnLxZC-nB{n]>fX}g755:dSCu$9JAjSY');
define('AUTH_SALT', 'raCUZU@-)GN|i?OZw8[zZcMyNb)Q95MQF-[!C[<r:|)#Vo)~LUYuc7]ve&EnKZrH');
define('SECURE_AUTH_SALT', 'I/ Y?Td>pSUg)F0q+MOR+/&Y>;jNT^wwK@+-P-tP6xmX_13QB}+<SwP/r2~%~+%n');
define('LOGGED_IN_SALT', ',O8{+@LdG.X^oin7+.aqKZnsRBzY:ba6@^xNd?2k|H3_b$3R^1I#+k:8aF}W4XBG');
define('NONCE_SALT', 'kWBld$+&q0@OWh%!qSXg===yK!NA#-1|A8cv{:s4XKe:Jx{H[cRP./q^?hgX@zB+');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp8_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

