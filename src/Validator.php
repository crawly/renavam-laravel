<?php


namespace Crawly\RenavamLaravel;

use Crawly\RenavamLaravel\Rules\Renavam;
use Illuminate\Validation\Validator as BaseValidator;

class Validator extends BaseValidator
{
    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateRenavam($attribute, $value): bool
    {
        $renavam = new Renavam();

        return $renavam->validate($value);
    }
}
