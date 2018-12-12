<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;
use App\User;

class HomeRepository extends BaseRepository
{
    public function model(){
        return User::class;
    }

    public function getList($keyword = null, $counting = false, $limit = 10, $offset = 0, $orderBy = 'name', $orderType = 'asc'){
        $query = User::select('*');

        if($keyword){
            $keyword = addcslashes($keyword, '%_');
        }

        if (!$counting) {
            if ($limit > 0) {
                $query->skip($offset)
                    ->take($limit);
            }

            if ($orderBy != null && $orderType != null) {
                $query->orderBy($orderBy, $orderType);
            }


        } else {
            return $query->count();
        }

        $user = $query->get();

        return $user;
    }

}

