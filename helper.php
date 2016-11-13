<?php
/**
 * @copyright
 */

defined('_JEXEC') or die;

/**
 * Class ModHelloworldHelper
 */
class ModHelloworldHelper
{
    /**
     * @var Joomla\Registry\Registry
     */
    protected $params;

    /**
     * @var JDatabaseDriver
     */
    protected $db;

    /**
     * @param Joomla\Registry\Registry $params
     */
    public function __construct(Joomla\Registry\Registry $params = null)
    {
        $this->params = $params;
        $this->db = JFactory::getDbo();
    }
}