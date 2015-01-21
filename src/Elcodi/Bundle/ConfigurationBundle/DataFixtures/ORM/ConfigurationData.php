<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Bundle\ConfigurationBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;

use Elcodi\Bundle\CoreBundle\DataFixtures\ORM\Abstracts\AbstractFixture;
use Elcodi\Component\Configuration\Factory\ConfigurationFactory;

/**
 * Class ConfigurationData
 */
class ConfigurationData extends AbstractFixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        /**
         * @var ConfigurationFactory $configurationFactory
         */
        $configurationFactory = $this->getFactory('configuration');
        $configurationObjectManager = $this->getObjectManager('configuration');

        /**
         * Parameter
         */
        $parameter = $configurationFactory
            ->create()
            ->setKey('my_boolean_parameter')
            ->setNamespace('app')
            ->setName('My Fixtures Boolean Parameter')
            ->setValue(true)
            ->setType('boolean');

        $configurationObjectManager->persist($parameter);
        $configurationObjectManager->flush([
            $parameter,
        ]);
    }
}