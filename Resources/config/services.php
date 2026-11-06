<?php

use Petkopara\MultiSearchBundle\Service\MultiSearchBuilderService;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('petkopara_multi_search.builder', MultiSearchBuilderService::class);
    $services->alias(MultiSearchBuilderService::class, 'petkopara_multi_search.builder')
        ->public();
};
