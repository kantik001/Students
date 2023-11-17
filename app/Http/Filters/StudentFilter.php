<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class StudentFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const AGE_FROM = 'age_from';

    public const AGE_TO = 'age_to';
    public const CITY = 'city';
    public const COUNTRY = 'country';
    public const IS_MARRIED = 'is_married';
    public const SURNAME = 'surname_id';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::AGE_FROM => [$this, 'ageFrom'],
            self::AGE_TO => [$this, 'ageTo'],
            self::CITY => [$this, 'city'],
            self::COUNTRY => [$this, 'country'],
            self::IS_MARRIED => [$this, 'isMarried'],
            self::SURNAME => [$this, 'surname'],
        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%$value%");
    }

    public function ageFrom(Builder $builder, $value)
    {
        $builder->where('age', '>=', $value);
    }

    public function ageTo(Builder $builder, $value)
    {
        $builder->where('age', '<=', $value);
    }

    public function country(Builder $builder, $value)
    {
        $builder->where('country', 'like', "%$value%");
    }

    public function isMarried(Builder $builder, $value)
    {
        $builder->where('is_married', $value);
    }

    public function surname(Builder $builder, $value)
    {
        $builder->where('surname_id', $value);
    }


}
