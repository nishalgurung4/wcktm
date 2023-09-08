<?php
namespace Nishal\IocContainer;
use Nishal\IocContainer\ExportData;
use Nishal\IocContainer\FetchData;

class Reporter 
{
    private $exportObj;
    private $fetchObj;

    public function __construct(FetchData $fetchObj, ExportData $exportObj)
    {
        $this->fetchObj = $fetchObj;
        $this->exportObj = $exportObj;
    }

    public function generateReport() 
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}
