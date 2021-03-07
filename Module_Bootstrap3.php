<?php
namespace GDO\Bootstrap3;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\Core\Application;

/**
 * Bootstrap3 asset files.
 * Make sure your theme chain includes bs3 to get them loaded.
 * @author gizmore
 * @version 6.10.1
 * @since 4.0.2
 */
final class Module_Bootstrap3 extends GDO_Module
{
	public $module_priority = 10;
	
	public function getDependencies() { return ['JQuery']; }
	
	public function getTheme() { return 'bs3'; }
	
	public function onIncludeScripts()
	{
	    if (Application::instance()->hasTheme('bs3'))
	    {
    		$min = Module_Core::instance()->jsMinAppend();
    		
    		$this->addBowerJavascript("bootstrap/dist/js/bootstrap$min.js");
    		$this->addBowerCSS("bootstrap/dist/css/bootstrap$min.css");
	    }
	}
	
}
