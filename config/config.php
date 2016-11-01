<?php

/**
 * @package    pry_iconsinserttag
 * @author     Fabian Perrey <f.perrey@gmx.de>
 * @copyright  Fabian Perrey
 * @license    LGPL 3.0
 * @filesource
 */

/*
 * Register the hook.
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Pry\IconsInserttag', 'processInserttag');
