<?php
namespace App\Services\Game\Player;

class PlayerDeckService extends \Service
{
    public function get(int $player_id, int $deck_id=0)
    {
        $PlayerDeck = $this->PlayerDeck->getDefault($player_id);

    }
}