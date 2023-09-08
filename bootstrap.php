<?php

use Nishal\IocContainer\ExportData;
use Nishal\IocContainer\ExportPdf;
use Nishal\IocContainer\FetchData;
use Nishal\IocContainer\FetchDatabase;

//for the container
// $container->bind(FetchData::class, FetchDatabase::class);
// $container->bind(ExportData::class, ExportPdf::class);

// var_dump($container->get(ExportData::class));
// echo "<br />";

// var_dump($container->resolve(ExportPdf::class));
// echo "<br />";
// var_dump($container->resolve(ExportData::class));
// echo "<br />";



// var_dump($container->get(FetchData::class));
// echo "<br />";

// $container->singleton(ExportPdf::class, new ExportPdf());
// var_dump($container->get(ExportPdf::class));
// echo "<br />";
// var_dump($container->get(ExportPdf::class));
// echo "<br />";


function container()
{
    $container = new Nishal\IocContainer\Containers\Container();
    $container->bind(FetchData::class, FetchDatabase::class);
    $container->bind(ExportData::class, ExportPdf::class);
    return $container;
}