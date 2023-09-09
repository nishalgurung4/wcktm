<?php
namespace Nishal\DipWithIoC\InvertingWithInterface;

class FetchApi implements FetchData
{
    public function fetch():array
    {
        // Logic to call the api and fetch the data
        return [
            [
                'id' => "W1",
                'name' => 'Bharatpur',
                'district' => 'Chitwan',
                'province' => 'Bagmati'
            ],
            [
                'id' => "W2",
                'name' => 'Butwal',
                'district' => 'Rupandehi',
                'province' => 'Lumbini'

            ]
        ];
    }
}
