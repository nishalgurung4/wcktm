<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation;
use Nishal\DipWithIoC\InvertingObjectCreation\Factory\FetchFactory;
use Nishal\DipWithIoC\InvertingObjectCreation\Factory\ExportFactory;

class Reporter
{
    private ExportData $exportObj;
    private FetchData $fetchObj;

    public function configureFetchData(FetchData $type):void
    {
        $this->fetchObj = FetchFactory::getFetchObj($type);
    }

    public function configureExport(ExportData $type):void
    {
        $this->exportObj = ExportFactory::getExportObj($type);
    }

    public function generateReport():void
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}