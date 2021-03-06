<?php

/**
 * TechDivision\ApplicationServer\Api\Node\ExtractorNode
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */

namespace TechDivision\ApplicationServer\Api\Node;

/**
 * DTO to transfer the extractor information.
 *
 * @category   Appserver
 * @package    TechDivision_ApplicationServer
 * @subpackage Api
 * @author     Tim Wagner <tw@techdivision.com>
 * @copyright  2013 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       http://www.appserver.io
 */
class ExtractorNode extends AbstractNode implements ExtractorNodeInterface
{

    /**
     * The extractors name.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $name;

    /**
     * The extractors type.
     *
     * @var string
     * @AS\Mapping(nodeType="string")
     */
    protected $type;

    /**
     * The flag to create backups before deleting the application folder.
     *
     * @var string
     * @AS\Mapping(nodeType="boolean")
     */
    protected $createBackups;

    /**
     * The flag to restore backups after extracting the archive to the application folder.
     *
     * @var string
     * @AS\Mapping(nodeType="boolean")
     */
    protected $restoreBackups;

    /**
     * Initializes the extractor node with the necessary data.
     *
     * @param string  $name           The extractor name
     * @param string  $type           The extractor type
     * @param boolean $createBackups  The flag to create backups
     * @param boolean $restoreBackups The flag to restore backups
     */
    public function __construct($name = '', $type = '', $createBackups = false, $restoreBackups = false)
    {

        // initialize the UUID
        $this->setUuid($this->newUuid());

        // set the data
        $this->name = $name;
        $this->type = $type;
        $this->createBackups = $createBackups;
        $this->restoreBackups = $restoreBackups;
    }

    /**
     * Returns the nodes primary key, the name by default.
     *
     * @return string The nodes primary key
     * @see \TechDivision\ApplicationServer\Api\Node\AbstractNode::getPrimaryKey()
     */
    public function getPrimaryKey()
    {
        return $this->getName();
    }

    /**
     * Returns the extractor type.
     *
     * @return string The extractor type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the extractor name.
     *
     * @return string The extractor name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the flag that backups should be created.
     *
     * @return boolean The flag to create backups
     */
    public function isCreateBackups()
    {
        return $this->createBackups;
    }

    /**
     * Returns the flag that backups should be restored.
     *
     * @return boolean The flag to restore backups
     */
    public function isRestoreBackups()
    {
        return $this->restoreBackups;
    }
}
