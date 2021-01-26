<?php

declare(strict_types=1);

namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

class Customer extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/customers';

    public function index(): collection
    {
        return $this->baseIndex();
    }
}
