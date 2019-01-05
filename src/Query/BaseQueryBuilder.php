<?php

declare(strict_types=1);

namespace Sarala\Query;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Sarala\Contracts\QueryContract;

abstract class BaseQueryBuilder implements QueryContract
{
    /** @var Request $request */
    protected $request;

    /** @var Builder $query */
    protected $query;

    /** @var Fields $fields */
    protected $fields;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}