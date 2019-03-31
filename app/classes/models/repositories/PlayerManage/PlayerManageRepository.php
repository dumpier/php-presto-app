<?php
namespace App\Models\Repositories\PlayerManage;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\PlayerManage\PlayerManageModel;

class PlayerManageRepository extends Repository
{
    protected $class = PlayerManageModel::class;


    /**
     * @param int $player_id
     * @return PlayerManageModel
     */
    public function getByPlayerId(int $player_id)
    {
        return $this->findByPk($player_id);
    }


    /**
     * ページング取得
     * @return \Presto\Core\Utilities\Paginator
     */
    public function pagingDummy()
    {
        $cond = [];
        $cond["condition"]["type"] = "dummy";
        return $this->paging();
    }
}
