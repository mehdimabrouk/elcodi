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

namespace Elcodi\Component\Menu\Entity\Menu\Interfaces;

use Elcodi\Component\Core\Entity\Interfaces\EnabledInterface;
use Elcodi\Component\Core\Entity\Interfaces\IdentifiableInterface;

/**
 * Interface NodeInterface
 */
interface NodeInterface
    extends
    IdentifiableInterface,
    EnabledInterface,
    SubnodesAwareInterface
{
    /**
     * Gets Node code
     *
     * @return string
     */
    public function getCode();

    /**
     * Sets Node code
     *
     * @param string $code
     *
     * @return $this Self object
     */
    public function setCode($code);

    /**
     * Sets Name
     *
     * @param string $name Name
     *
     * @return $this Self object
     */
    public function setName($name);

    /**
     * Get Name
     *
     * @return string Name
     */
    public function getName();

    /**
     * Sets Url
     *
     * @param string $url Url
     *
     * @return $this Self object
     */
    public function setUrl($url);

    /**
     * Get Url
     *
     * @return string Url
     */
    public function getUrl();

    /**
     * Set active urls.
     *
     * @param array $activeUrls Active urls
     *
     * @return $this Self object
     */
    public function setActiveUrls(array $activeUrls);

    /**
     * Get the active urls.
     *
     * @return array The Active urls
     */
    public function getActiveUrls();

    /**
     * Add an active url.
     *
     * @param string $activeUrl The active url.
     *
     * @return $this Self object
     */
    public function addActiveUrl($activeUrl);

    /**
     * Remove an active url.
     *
     * @param string $activeUrl The active url.
     *
     * @return $this Self object
     */
    public function removeActiveUrl($activeUrl);
}
