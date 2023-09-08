<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\DI\Interface;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\FetchData;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\ExportData;

interface FetchAndExport
{
    public function setFetchObj(FetchData $fetchObj);

    public function setExportObj(ExportData $exportObj);
}