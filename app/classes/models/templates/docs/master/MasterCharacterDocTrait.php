<?php
namespace App\Models\Templates\Docs\Master;

/**
 */
trait MasterCharacterDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "character_id",
        "character_original_id",
        "rank_id",
        "name",
        "caption",
    ];


    /** @var int  */
    public $character_id = 0;

    /** @var int  */
    public $character_original_id = 0;

    /** @var int  */
    public $rank_id = 0;

    /** @var string  */
    public $name = "";

    /** @var string  */
    public $caption = "";

}
