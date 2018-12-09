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
define('DB_NAME', 'museumsfriends');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '!U=pF^cOX_6EE*5U5`RE^eu!(`u[9VWB{yoz7m]d}&B)K6Y*y=HS{5?Z4z]t:08?');
define('SECURE_AUTH_KEY', '3kK@*pu G)+w4^a#qFT% MK[mGdyLX]m^v(-LL9UZ/j<k9<<5Yz,pJ85@EReLQuI');
define('LOGGED_IN_KEY', 'p,yl+.HoI`})?uO{M7lenh]P<NdeTU&q6X2r1vbT{,}/3I_`bUg$GVe!N`?jMG$I');
define('NONCE_KEY', 'S7Hyt*G}G.fZ:4Qxp{XqYu?a6=C[uy?iwsqV]J&^YDHKk=q$[S$SH)U*K[_.x5?t');
define('AUTH_SALT', '8zoYc1!/P@sZLca=fNJ(q.`Yw6Zy@RBltfefnw&i~}.|-6CE8//ddh^$d!L|@|po');
define('SECURE_AUTH_SALT', '2usHSht@_h!P`QkXazK|~cVL=Zdg[Ck_e-v& 8RuBFos3>xIBQZ6/7YvEMPD*^(|');
define('LOGGED_IN_SALT', '=hl_ua))V{A=`n~DWa-$ef2`j_pVn8wt%g273]DZ?]pVdAjn,Kl^x05%o|i`ne31');
define('NONCE_SALT', 'FFn5l2b_W7)(IPD[ 0iQvgm;)(68dd&+RlmI(zK(|hm?XQ)GHfgA_$sw|X}hDy.#');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mf_';


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

