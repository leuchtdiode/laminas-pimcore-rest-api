<?php
namespace PimcoreRestApi\View\Helper;

use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class PraDocumentFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$serviceLocator = $serviceLocator->getServiceLocator();

		return new PraDocument(
			$serviceLocator->get('PimcoreRestApi\Service\Documents')
		);
	}
}
