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
define('DB_NAME', 'wordpress_bd');

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
define('AUTH_KEY', '=oLFxTzv>(j%~)yhMj=X!jE;UUoiSz?Nzzk7n(e1{sqJ9Wb=FlTrF?sM5Y!f,/)x');
define('SECURE_AUTH_KEY', 'qwP%]3hrzna__.98<?St1^dKR4:Wev!rv1 -agL)3!&S}A%3cbqOH*MJ]w><13QP');
define('LOGGED_IN_KEY', '+|%xw7,?~Rl..H]Z?Q@_ fS1B&Q8Dfh:@@fbEA]A=4mTu!B|er/+qu2`?n>yi^.[');
define('NONCE_KEY', ';wdqXK[NbS</y4[xj:V5_2nd <00Bw7X+@Ey)~RPW1GrALv7+V0r6;i}Y5eLpXr}');
define('AUTH_SALT', ':,`ou=kb]l$2@~GP._WPFY6B>a{TRR1g12^z~l<#ZD%){wR6eDYHts-bGkh~iXB[');
define('SECURE_AUTH_SALT', 'DWeX!#6rmadO.TSz^m0eh(0>V[}{S=tUZvCEBR7DChp/EME(O^&j5PN8[k9A((]M');
define('LOGGED_IN_SALT', '67n7t!@tD8~vAm2mWl4rm{ddl!lPh,-/9cWakM+WBFN6WO@QOF:@y#87BteFAW-_');
define('NONCE_SALT', 'Au JzdspC=b?lJ;w! M}6+g5,.X,U %a:qWB [3[rE]kRF*QRnnauNpxT9yDjo+ ');

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

