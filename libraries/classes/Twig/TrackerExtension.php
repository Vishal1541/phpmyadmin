<?php
/**
 * hold PhpMyAdmin\Twig\TrackerExtension class
 *
 * @package PhpMyAdmin\Twig
 */
declare(strict_types=1);

namespace PhpMyAdmin\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * @package PhpMyAdmin\Twig
 */
class TrackerExtension extends AbstractExtension
{
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction(
                'get_tracker_version',
                'PhpMyAdmin\Tracker::getVersion'
            ),
        ];
    }
}
