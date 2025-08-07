<?php

namespace App\Http\Requests\Traits;

trait TrimsStrings
{
    protected function prepareForValidation()
    {
        $trimmed = collect($this->all())->map(function ($value) {
            return is_string($value) ? trim($value) : $value;
        });

        $this->merge($trimmed->toArray());
    }
}
