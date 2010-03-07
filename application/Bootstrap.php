<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initAutoLoader()
	{
		$autoloader = Zend_Loader_Autoloader::getInstance();
		$autoloader->setFallbackAutoloader(true);
	}
}

