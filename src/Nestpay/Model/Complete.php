<?php

namespace Payconn\Nestpay\Model;

use Payconn\Common\AbstractModel;
use Payconn\Common\Model\CompleteInterface;
use Payconn\Common\Traits\Amount;
use Payconn\Common\Traits\Currency;
use Payconn\Common\Traits\Installment;
use Symfony\Component\HttpFoundation\ParameterBag;

class Complete extends AbstractModel implements CompleteInterface
{
    use Amount;
    use Installment;
    use Currency;

    protected $returnParams;

    public function setReturnParams(array $returnParams)
    {
        $this->returnParams = new ParameterBag($returnParams);
    }

    public function getReturnParams(): ParameterBag
    {
        return $this->returnParams;
    }
}
