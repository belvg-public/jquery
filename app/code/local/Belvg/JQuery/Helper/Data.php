<?php
/**
 * @package jQuery Library.
 * @author: A.A.Treitjak
 * @copyright: 2012 - 2013 BelVG.com
 */

class Belvg_JQuery_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Path for config.
     */
    const XML_CONFIG_PATH = 'jquery/settings/';

    /**
     * Name library directory.
     */
    const NAME_DIR_JS = 'belvg/jquery/';

    /**
     * List files for include.
     *
     * @var array
     */
    protected $_files = array(
        'jquery.js',
        'jquery.noconflict.js',
    );

    /**
     * Check enabled.
     *
     * @return bool
     */
    public function isEnabled()
    {
        return (bool) $this->_getConfigValue('enabled', $store = '');
    }

    /**
     * Return path file.
     *
     * @param $file
     *
     * @return string
     */
    public function getJQueryPath($file)
    {
        return self::NAME_DIR_JS . $file;
    }

    /**
     * Return list files.
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->_files;
    }

    protected function _getConfigValue($key, $store)
    {
        return Mage::getStoreConfig(self::XML_CONFIG_PATH . $key, $store = '');
    }
}
