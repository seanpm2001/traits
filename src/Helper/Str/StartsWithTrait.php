<?php

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Traits\Helper\Str;

use function mb_strlen;
use function substr_compare;

/**
 * Trait StartsWithTrait
 *
 * @package Phalcon\Support\Helper\Str\Traits
 */
trait StartsWithTrait
{
    /**
     * Check if a string starts with a given string
     *
     * @param string $haystack
     * @param string $needle
     * @param bool   $ignoreCase
     *
     * @return bool
     */
    protected function toStartsWith(
        string $haystack,
        string $needle,
        bool $ignoreCase = true
    ): bool {
        if ('' === $haystack) {
            return false;
        }

        return 0 === substr_compare(
            $haystack,
            $needle,
            0,
            mb_strlen($needle),
            $ignoreCase
        );
    }
}
