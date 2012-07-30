<?php
/**
 * phly-mustache
 *
 * @category   Phly
 * @package    phly-mustache
 * @copyright  Copyright (c) 2010 Matthew Weier O'Phinney <mweierophinney@gmail.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace Phly\Mustache\Resolver;

/**
 * Base resolver interface
 *
 * @category   Phly
 * @package    phly-mustache
 * @subpackage Resolver
 */
interface ResolverInterface
{
    /**
     * Resolve a template name
     *
     * @param  string $template
     * @return string
     */
    public function resolve($template);
}
