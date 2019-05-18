<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterStatusModel;

/**
 * master_status
 */
class MasterStatusRepository extends Repository
{
    protected $class = MasterStatusModel::class;
}
