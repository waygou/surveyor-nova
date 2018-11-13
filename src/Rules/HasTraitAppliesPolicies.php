<?php

namespace Waygou\SurveyorNova\Rules;

use Illuminate\Contracts\Validation\Rule;

class HasTraitAppliesPolicies implements Rule
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
        return in_array('Waygou\Surveyor\Traits\AppliesPolicies', class_uses($value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('surveyor-nova::validation.traits.applies_policies.inexistant');
    }
}
