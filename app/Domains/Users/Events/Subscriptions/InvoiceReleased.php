<?php

namespace Codecasts\Domains\Users\Events\Subscriptions;

class InvoiceReleased extends InvoiceCreated
{
    public $amount;

    public function __construct(array $requestData)
    {
        parent::__construct($requestData);

        $this->amount = $requestData['amount'];
    }
}