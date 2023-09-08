<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation;
use Nishal\DipWithIoC\InvertingObjectCreation\Factory\FetchFactory;
use Nishal\DipWithIoC\InvertingObjectCreation\Factory\ExportFactory;

class Reporter
{
    private $exportObj;
    private $fetchObj;

    public function configureFetchData($type):void
    {
        $this->fetchObj = FetchFactory::getFetchObj($type);
    }

    public function configureExport($type):void
    {
        $this->exportObj = ExportFactory::getExportObj($type);
    }

    public function generateReport():void
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}