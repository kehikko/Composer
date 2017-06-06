<?php

namespace kehikko\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class RouteInstallerPlugin implements PluginInterface
{
	public function activate(Composer $composer, IOInterface $io)
	{
		$installer = new RouteInstaller($io, $composer);
		$composer->getInstallationManager()->addInstaller($installer);
	}
}