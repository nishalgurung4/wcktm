<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\DI\Setter;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\FetchData;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\ExportData;

class Reporter
{
    private $exportObj;
    private $fetchObj;

    public function setFetchObj(FetchData $fetchObj)
    {
        $this->fetchObj = $fetchObj;
    }

    public function setExportObj(ExportData $exportObj)
    {
        $this->exportObj = $exportObj;
    }

    public function generateReport() 
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}