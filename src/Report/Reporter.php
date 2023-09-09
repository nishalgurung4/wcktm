<?php
namespace Nishal\Report;

class Reporter 
{
    private ExportExcel $exportExcelObj;
    private FetchDatabase $fetchDatabaseObj;
    private ExportPDF $exportPdfObj;
    private FetchApi $fetchApiObj;

    public function generateReport($inputMethod, $outputMethod):void 
    {
        // 1. Instantiate the low-level module object.
        if ($inputMethod == 'db') {
            $this->fetchDatabaseObj = new FetchDatabase();
        } elseif ($inputMethod == 'api') {
            $this->fetchApiObj = new FetchApi();
        }

        // 2. Fetch and export the data for a specific format based on flags.
        if ($outputMethod == 'excel') {
            $dataList = null;
            if ($inputMethod == 'db') {
                $dataList = $this->fetchDatabaseObj->fetchDataFromDatabase();
            } else {
                $dataList = $this->fetchApiObj->fetchDataFromApi();
            }
            $this->exportExcelObj = new ExportExcel();
            echo $this->exportExcelObj->exportToExcel($dataList);

        } elseif ($outputMethod == 'pdf') {
            $dataList = null;
            if ($inputMethod == 'db') {
                $dataList = $this->fetchDatabaseObj->fetchDataFromDatabase();
            } else {
                $dataList = $this->fetchApiObj->fetchDataFromApi();
            }
            $this->exportPdfObj = new ExportPDF();
            echo $this->exportPdfObj->exportToPDF($dataList);
        }
    }
}