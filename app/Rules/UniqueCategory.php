<?php

namespace App\Rules;

use App\Models\Category;
use Illuminate\Contracts\Validation\Rule;

class UniqueCategory implements Rule
{
    private $editingCategory;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(?Category $category)
    {
        $this->editingCategory = $category;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $existingCategory = Category::where($attribute, $value)->first();

        return (!$this->editingCategory && !$existingCategory) || $this->editingCategory && ($existingCategory && $existingCategory->id === $this->editingCategory->id || !$existingCategory);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute has already been taken.';
    }
}
