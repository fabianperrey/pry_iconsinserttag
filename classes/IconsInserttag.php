<?php

/**
 * @package    pry_iconsinserttag
 * @author     Fabian Perrey <f.perrey@gmx.de>
 * @copyright  Fabian Perrey
 * @license    LGPL 3.0
 * @filesource
 */

namespace Pry;

/**
 * Hooks contains the insert tag hook.
 */
class IconsInserttag
{
    /**
     * Replace the insert tag.
     *
     * Supported are following options:
     * {{fi::icon-phone}}
     * {{fi::fa-star}}
     * {{fi::anyfont-circle::4x muted}}
     *
     * @param string $tag  The insert tag.
     *
     * @return bool|string
     */
    public function processInserttag($tag)
    {
		if (strpos($tag, 'fi::') === false) {
			return false;
		}

		$parts = explode('::', $tag);

		if (!$parts[1]) {
			return '';
		}
		
        if (strpos($parts[1], '-')+1 == strlen($parts[1])) {
            return '';
        }

        $fontName = substr($parts[1], 0, strpos($parts[1], '-'));
 		$class = $fontName.' '.$parts[1] . ($parts[2] ? $parts[2] : '');

		return sprintf('<i class="%s"></i>', $class);
    }
}
