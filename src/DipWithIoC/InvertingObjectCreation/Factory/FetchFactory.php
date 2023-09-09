<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\Factory;
use Nishal\DipWithIoC\InvertingObjectCreation\FetchDatabase;
use Nishal\DipWithIoC\InvertingObjectCreation\FetchApi;
class FetchFactory
{
    public static function getFetchObj($type):FetchData
    {
        $fetchObj = null;
        if (strcasecmp("db", $type) === 0) {
            $fetchObj = new FetchDatabase();
          } else if(strcasecmp("api", $type) === 0) {
            $fetchObj = new FetchApi();
          } else {
            return null;
          }
          return $fetchObj;
    }

}