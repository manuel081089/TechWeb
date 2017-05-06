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
define('DB_NAME', 'webtech');

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
define('AUTH_KEY', 'Ml=q^I+i3M!9]GG{M=j>7K-qsN>6V#hFvr,,O3h{Bex`}bGoZl-$0Pxf m37eFn`');
define('SECURE_AUTH_KEY', 'w/tzs],ep`Au#zAls0ouibghtD`R!Q:V4!9?aW=*z~w?[A#Z`X4<mX3`.HnIAFXm');
define('LOGGED_IN_KEY', 'QOVkZCI`u L2Dz;xceE1)8;0dae]I]NH GTkc$^S7Q(X,P[^Dat;l&W9(t{Q} |/');
define('NONCE_KEY', 'db:d,T,w>8sJUpExni9jnS^L,cTh!:za$1d,& x[KxsEGZh:98i%-9.<5,49Oca7');
define('AUTH_SALT', '1cQu5(};2m)G7z9v2GT#xZs_)q!G#2P]ri38V5[d++KoRjy&-Lj4g!8H+MhqJ%% ');
define('SECURE_AUTH_SALT', 'V<NZxX{+zoeyd!.Qmrxy`z <{`Zb(qG3Q>?;ps%*0{us8U</CDq#uykPDY0rF{lo');
define('LOGGED_IN_SALT', '{-wtnq9Za=m+.n3QT_1m>|p$6AQv)<x5e=71|kxc:Jj9#;g17ds5PNFKYb<@#tj`');
define('NONCE_SALT', 'Re]Gw)%OS=*b:9XbFgYz+/z>+.yhVobtX !Xp/9RNGMZM-azsb!BbEm|.P`@P:K;');

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

