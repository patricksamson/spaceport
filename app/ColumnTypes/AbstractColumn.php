<?php

namespace Spaceport\ColumnTypes;

use Illuminate\Database\Schema\Blueprint;
use Spaceport\Column;

abstract class AbstractColumn
{
    const NAME = 'Abstract Column';

    const VUE_TAG = 'text-field';

    public function create(Column $column, Blueprint $table)
    {
    }

    public function validate($input)
    {
    }
}
