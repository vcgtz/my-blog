<?php

namespace App\Rules;

use App\Models\Tag;
use Illuminate\Contracts\Validation\Rule;

class UniqueTag implements Rule
{
    private $editingTag;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(?Tag $tag)
    {
        $this->editingTag = $tag;
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
        $existingTag = Tag::where($attribute, $value)->first();
        
        return (!$this->editingTag && !$existingTag) || $this->editingTag && ($existingTag && $existingTag->id === $this->editingTag->id || !$existingTag);
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
