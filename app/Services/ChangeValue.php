<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\SysSelector;

class ChangeValue
{
    /**
     * IDより名称を返す(sys_selectors)
     */
    public static function getIdToName($type, $val){

        $data = SysSelector::all()
            ->where('type', $type)
            ->where('val', $val)
            ->first();

        return $data->name ?? '';
    }

    /**
     * 名称よりIDを返す(sys_selectors)
     */
    public static function getNameToId($type, $name){

        $data = SysSelector::all()
            ->where('type', $type)
            ->where('name', $name)
            ->first();

        return $data->val ?? '';
    }

    /**
     * 時間表記
     */

}