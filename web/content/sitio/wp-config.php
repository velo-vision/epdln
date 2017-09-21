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
define('DB_NAME', 'bdepdln');

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
define('AUTH_KEY', '}KUSyzOdefxO3l^`w@d)va5i?Gl*/Roe.HF/&l{J<gzOE3yZLSu8fz+t|L6H?fWv');
define('SECURE_AUTH_KEY', 'Jrt3H#SCKXUc%^Z3`cj;X(hMRZGt(% 5x`]4lAJr1jL#=J[K8f6H1pmqwdFk]lo)');
define('LOGGED_IN_KEY', '<Eyrv&P[bw~-T!i t~dPfbQym:5FM;V@qn9 M2Eg)OEqWxNhz$zmLK^+YZ21U&CU');
define('NONCE_KEY', 'Z|c{QV7@LF=z)ZO1%?GuwgH;*%_ecULY/$g5!`p&.{IP,Z]O+nI[4VP,_c#I?RZZ');
define('AUTH_SALT', 'B:k*)~5Njp6)#i,U5xWEp;CWcz2zR&7i ~c=<T*_)cN7WF3/zGg(J],a]lShW({7');
define('SECURE_AUTH_SALT', 'JAB!b@,(}j<!WkVxpiyn8t2?Hab9|pcaU$7-{f)$Zue`w0i{>5(xoKZ5m^E:oPmL');
define('LOGGED_IN_SALT', '{0ditf!Ir6q1;g?%(_.;x]ojOfCJV~kTKoL(@A+>wv6jukDwKd|?bDo,x.8Ex8%x');
define('NONCE_SALT', '[[D2OlqvK}P|UJQ)P^>of}:oo-b[abi0QtKv7$DVRMjv(4D;On+k6/Ov0IYEW8a]');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

