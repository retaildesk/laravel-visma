<?php

declare(strict_types=1);

namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

class Webhook extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/webhooks';

    public function index(): collection
    {
        return $this->baseIndex();
    }
    public function post($data = [])
    {
        return $this->basePost($data);
    }
    public function put(string $webhookId,$data = [])
    {
        $this->endpoint .= '/' . $webhookId;
        return $this->basePut($data);
    }
    public function delete(string $webhookId)
    {
        $this->endpoint .= '/' . $webhookId;
        return $this->baseDelete();
    }
}
