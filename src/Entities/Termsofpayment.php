<?php

declare(strict_types=1);

namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

class Termsofpayment extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/termsofpayments';

    public function index(): collection
    {
        return $this->baseIndex();
    }
}
