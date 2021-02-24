<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\Log\Interfaces;

use OpxCore\Log\Exceptions\LogManagerException;
use Psr\Log\LoggerInterface;

interface LogManagerInterface extends LoggerInterface
{
    /**
     * Get logger assigned to name.
     *
     * @param string|array|null $names
     *
     * @return  LoggerInterface
     *
     * @throws  LogManagerException
     */
    public function logger($names = null): LoggerInterface;

    /**
     * Resolve a group of loggers.
     *
     * @param string|array $names
     *
     * @return  LoggerInterface
     *
     * @throws  LogManagerException
     */
    public function group($names): LoggerInterface;
}