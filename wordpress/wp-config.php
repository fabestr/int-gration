<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mindgeek');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mindgeek');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mindgeek');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd67LCXWxb9%H&9E-,Gw?P_3[l-,HX:(_UTu%t5:hU9k|%Dw&iqMxUwM=>4w:-~;D');
define('SECURE_AUTH_KEY',  '>!lnE`|vZfh/gq6J<7q]L`xby!gUu~^kJT5;]L%[g(tNV0nR(YG]% L[Fm!6x6 Y');
define('LOGGED_IN_KEY',    'HC2yYvQqfsNY1*-wM9p;(MIc1^[An+V/V~+W?nO9rO8ShHeD;H3WLZQaUfg~_IvM');
define('NONCE_KEY',        'UOn7h`;;mUrSSMR>FD:PgQtXM+ X#j|8oQgHvvdiMSb^d:N<f4`^PtL#}I--@e@{');
define('AUTH_SALT',        'P<rqOb5De>QJTtFlS&jXp |x{L6a)/+< 8cgN{V@I*)?R?Vy>&E4^*)&B4xKDx4z');
define('SECURE_AUTH_SALT', 'O(m|?lYu&Vn(~bmZx6zi^)~X1oaxE~?QTib&xEKw{a!wXN3l`F[_z:>^R:D6__6r');
define('LOGGED_IN_SALT',   '02UneC<,10vXw;/Sw&|aVxI8ivz-kDaGL%?_`~!7B@AtU?Vn8e7 HH&_|1LY};?T');
define('NONCE_SALT',       'O@PRKL+/Sn<Vx1}b(=LU$/>42jw.)tLvz/Wrgx5}2|C$`dR#7A?|G@A^JUenwq*y');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');