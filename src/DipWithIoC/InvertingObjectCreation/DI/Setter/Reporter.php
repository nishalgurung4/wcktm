<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\DI\Setter;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\FetchData;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\ExportData;

class Reporter
{
    private ExportData $exportObj;
    private FetchData $fetchObj;

    public function setFetchObj(FetchData $fetchObj):void
    {
        $this->fetchObj = $fetchObj;
    }

    public function setExportObj(ExportData $exportObj):void
    {
        $this->exportObj = $exportObj;
    }

    public function generateReport():void 
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}