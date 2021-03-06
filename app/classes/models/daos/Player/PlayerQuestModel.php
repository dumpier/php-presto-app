<?php
namespace App\Models\Daos\Player;

use App\Models\Templates\Docs\Player\PlayerQuestDocTrait;

/**
 * player_quest
 */
class PlayerQuestModel extends \App\Models\Daos\BasePlayerModel
{
    use PlayerQuestDocTrait;

    protected $table = "player_quest";


    public static function regist(int $player_id, int $map_id, int $area_id, int $stage_id)
    {
        $self = static::instance();

        $self->player_id = $player_id;
        $self->map_id = $map_id;
        $self->area_id = $area_id;
        $self->stage_id = $stage_id;

        $self->save();

        return $self;
    }


    public function battle(bool $is_win)
    {
        $this->play_count += 1;
        $this->complete_count += $is_win ? 1: 0;
        $this->save();

        return $this;
    }
}
