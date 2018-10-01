<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dump')) {
    /**
     * @author Nicolas Grekas <p@tchwork.com>
     */
    function dump($var)
    {
<<<<<<< HEAD
        foreach (func_get_args() as $v) {
            VarDumper::dump($v);
=======
        foreach (func_get_args() as $var) {
            VarDumper::dump($var);
>>>>>>> 5df037cc04d5db9f621306f5c9c55a743886da7b
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        return $var;
    }
}
