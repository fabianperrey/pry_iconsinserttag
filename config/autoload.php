<?php

/**
 * @package    pry_iconsinserttag
 * @author     Fabian Perrey <f.perrey@gmx.de>
 * @copyright  Fabian Perrey
 * @license    LGPL 3.0
 * @filesource
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Pry'
));

/**
 * Register the classes
 */
ClassLoader::addClass(
    'Pry\IconsInserttag', 'system/modules/pry_iconsinserttag/classes/IconsInserttag.php'
);
