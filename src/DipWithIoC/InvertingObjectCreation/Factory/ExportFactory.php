<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\Factory;
use Nishal\DipWithIoC\InvertingObjectCreation\ExportPDF;
use Nishal\DipWithIoC\InvertingObjectCreation\ExportExcel;

class ExportFactory
{
    public static function getExportObj($type)
    {
        $exportObj = null;

        if(strcasecmp("pdf", $type) === 0) {
            $exportObj = new ExportPDF();
          } else if(strcasecmp("excel", $type) === 0) {
            $exportObj = new  ExportExcel();
          } else {
            return null;
          }
          return $exportObj;
    }

}