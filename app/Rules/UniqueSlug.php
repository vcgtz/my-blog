<?php

namespace App\Rules;

use App\Models\Post;
use Illuminate\Contracts\Validation\Rule;

class UniqueSlug implements Rule
{
    private $editingPost;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(?Post $post)
    {
        $this->editingPost = $post;
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
        $existingPost = Post::where($attribute, $value)->first();
        
        return (!$this->editingPost && !$existingPost) || $this->editingPost && ($existingPost && $existingPost->id === $this->editingPost->id || !$existingPost);
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
