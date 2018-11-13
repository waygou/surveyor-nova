<?php

namespace Waygou\SurveyorNova\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsModel implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return is_a(new $value(), 'Illuminate\Database\Eloquent\Model');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('surveyor-nova::validation.not_model');
    }
}
