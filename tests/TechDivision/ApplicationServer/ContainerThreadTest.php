<?php

/**
 * TechDivision\ApplicationServer\ContainerThreadTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 */
namespace TechDivision\ApplicationServer;

use TechDivision\Configuration\Configuration;
use TechDivision\ApplicationServer\Mock\MockAbstractContainerThread;
use TechDivision\ApplicationServer\Mock\MockContainerThread;
use TechDivision\ApplicationServer\InitialContext;
use TechDivision\ApplicationServer\Api\Node\ContainerNode;

/**
 *
 * @package TechDivision\ApplicationServer
 * @copyright Copyright (c) 2010 <info@techdivision.com> - TechDivision GmbH
 * @license http://opensource.org/licenses/osl-3.0.php
 *          Open Software License (OSL 3.0)
 * @author Tim Wagner <tw@techdivision.com>
 */
class ContainerThreadTest extends AbstractTest
{

    /**
     * The application instance to test.
     *
     * @var \TechDivision\ApplicationServer\ContainerThread
     */
    protected $containerThread;

    /**
     * Initializes the application instance to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->containerThread = new MockAbstractContainerThread($this->getMockInitialContext(), $this->getContainerNode());
    }

    /**
     * Test's if the configuration instance passed to the constructor is returned by
     * the getter method.
     *
     * @return void
     */
    public function testGetDeployment()
    {
        $this->assertInstanceOf('TechDivision\ApplicationServer\Mock\MockDeployment', $this->containerThread->getDeployment());
    }

    /**
     * Checks if the new instance method works correctly.
     *
     * @return void
     */
    public function testNewInstance()
    {
        $className = 'TechDivision\Configuration\Configuration';
        $this->assertInstanceOf($className, $this->containerThread->newInstance($className));
    }
}