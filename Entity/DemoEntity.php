<?php

namespace Devhelp\Bundle\MixedMappingDriverDemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @package devhelp/mixed-mapping-driver-demo-bundle
 * @author Paweł Barański <pawel.baranski1@gmail.com>
 * 
 * @ORM\Table(name="demo_entities_annotation")
 * @ORM\Entity
 */
class DemoEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * This is mapped with annotation
     * @ORM\Column(name="column_one")
     */
    private $columnOne;
    
    /**
     * This is mapped with yml
     * @var type 
     */
    private $columnTwo;
    
    /**
     * This is mapped with xml
     * @var type 
     */
    private $columnThree;
}
