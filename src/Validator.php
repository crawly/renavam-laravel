<?php


namespace Crawly\RenavamLaravel;

use Crawly\RenavamLaravel\Rules\Renavam;

class Validator
{
    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateRenavam($attribute, $value, $parameters, $validator): bool
    {
        $renavam = new Renavam();

        return $renavam->validate($value);
    }
}
