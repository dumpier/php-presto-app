<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterQuestAreaDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "area_id",
        "map_id",
        "serial_id",
        "next_map_id",
        "next_area_id",
        "name",
        "caption",
    ];


    /** @var int  */
    public $area_id = 0;

    /** @var int  */
    public $map_id = 0;

    /** @var int  */
    public $serial_id = 0;

    /** @var int  */
    public $next_map_id = 0;

    /** @var int  */
    public $next_area_id = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
