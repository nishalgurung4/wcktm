<?php
namespace Nishal\Report;

class Reporter 
{
    private ExportExcel $exportExcelObj;
    private FetchDatabase $fetchDatabaseObj;

    public function __construct() 
    {
        $this->exportExcelObj = new ExportExcel();
        $this->fetchDatabaseObj = new FetchDatabase();
    }

    public function generateReport():void 
    {
        $dataFromDB = $this->fetchDatabaseObj->fetchDataFromDatabase();
        echo ($this->exportExcelObj->exportToExcel($dataFromDB));
    }
}
