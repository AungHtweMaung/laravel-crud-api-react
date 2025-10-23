<?php

namespace App\Traits;

trait BlogSearchTrait
{
    public function scopeFilter($query, $search = null)
    {
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
        }

        return $query;
    }
}
