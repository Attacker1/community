<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository
{
    public function questionList() {
        return Question::query()->with(['categories', 'tags', 'images'])->withCount(['comments', 'likes']);
    }

    public function singlePageQuestion($slug)
    {
        return Question::where('slug', $slug)
            ->with(['categories', 'tags', 'images'])
            ->withCount(['likes']);
    }

    public function adminSingleQuestion($article_id) {
        return Question::byId($article_id)
            ->with(['categories', 'tags', 'images'])
            ->withCount(['likes']);
    }
}