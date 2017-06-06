<?php

namespace kehikko\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class RouteInstaller extends LibraryInstaller
{
	/**
	 * {@inheritDoc}
	 */
	public function getInstallPath(PackageInterface $package)
	{
		$prefix = substr($package->getPrettyName(), 0, 14);
		if ('kehikko/route-' !== $prefix)
		{
			throw new \InvalidArgumentException(
				'Unable to install template, kehikko routes should always start their package name with '
				. '"kehikko/route/"'
			);
		}

		return 'routes/' . substr($package->getPrettyName(), 14);
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'kehikko-route' === $packageType;
	}
}
