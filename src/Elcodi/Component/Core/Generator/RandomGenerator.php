<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Core\Generator;

use Elcodi\Component\Core\Generator\Interfaces\GeneratorInterface;

/**
 * Class RandomGenerator
 */
class RandomGenerator implements GeneratorInterface
{
    /**
     * Generates a random string with entropy
     *
     * @param integer $length Length of generation
     *
     * @return string Result of generation
     */
    public function generate($length = null)
    {
        $bits = $length * 8;

        return bin2hex(openssl_random_pseudo_bytes($bits));
    }
}
