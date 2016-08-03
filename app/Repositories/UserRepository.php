<?php

namespace App\Repositories;

use App\User;
use Defender;

/**
 * Repository for the User Model.
 */
class UserRepository
{
    public function writeAreas($arrayAreas)
    {
        $area = Defender::findRoleById($arrayAreas[0])->name;
        for ($i = 1; $i < sizeof($arrayAreas); ++$i) {
            $area .= ' / '.Defender::findRoleById($arrayAreas[$i])->name;
        }

        return $area;
    }
}
