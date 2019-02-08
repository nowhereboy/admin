<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * 指定时间字符
     *
     * @param  DateTime|int  $value
     * @return string
     */
    public function fromDateTime($value)
    {
        return strtotime(parent::fromDateTime($value));
    }
}