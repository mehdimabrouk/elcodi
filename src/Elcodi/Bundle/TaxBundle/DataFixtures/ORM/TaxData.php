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

namespace Elcodi\Bundle\TaxBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Elcodi\Bundle\CoreBundle\DataFixtures\ORM\Abstracts\AbstractFixture;
use Elcodi\Component\Core\Services\ObjectDirector;
use Elcodi\Component\Tax\Entity\Interfaces\TaxGroupInterface;

/**
 * AdminData class
 *
 * Load fixtures of tax entities
 */
class TaxData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        /**
         * @var ObjectDirector        $taxDirector
         * @var TaxGroupInterface $andorranTaxGroup
         */
        $taxDirector = $this->getDirector('tax');
        $andorranTaxGroup = $this->getReference('tax-group-andorran');

        $tax21 = $taxDirector
            ->create()
            ->setName('tax21')
            ->setDescription('This is my tax 21')
            ->setValue(21.0)
            ->setTaxGroup($andorranTaxGroup);

        $taxDirector->save($tax21);
        $this->addReference('tax-21', $tax21);

        $tax16 = $taxDirector
            ->create()
            ->setName('tax16')
            ->setDescription('This is my tax 16')
            ->setValue(16.0)
            ->setTaxGroup($andorranTaxGroup);

        $taxDirector->save($tax16);
        $this->addReference('tax-16', $tax16);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            'Elcodi\Bundle\TaxBundle\DataFixtures\ORM\TaxGroupData',
        ];
    }
}
