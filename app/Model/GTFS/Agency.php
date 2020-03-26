<?php

namespace App\Model\GTFS;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use Sushi;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gtfs_agency';

    /**
     * Define the static rows
     */
    protected $rows = [
        [
            'agency_id' => 'STM',
            'agency_name' => 'Société de transport de Montréal',
            'agency_url' => 'http://www.stm.info',
            'agency_timezone' => 'America/Montreal',
            'agency_lang' => 'fr',
            'agency_phone' => '',
            'agency_fare_url' => 'http://www.stm.info/fr/infos/titres-et-tarifs'
        ]
    ];

    /**
     * Get the routes for the agency.
     */
    public function routes()
    {
        return $this->hasMany(Route::class, 'gtfs_agency_id');
    }
}