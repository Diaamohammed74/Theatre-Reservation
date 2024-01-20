<?php 
namespace App\Http\Traits;

use Illuminate\Support\Str;

trait Slugify{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = $this->slugify($value, static::class, $this, '-');
    }
    private static function slugify($slug, $model, $currentModel = null, $separator = '-')
    {
        $slug = Str::slug($slug);
        $originalSlug = $slug;
        $counter = 1;
        $query = $model::where('slug', '=', $slug);
        if ($currentModel) {
            $query->where('id', '!=', $currentModel->id);
        }
        while ($query->exists()) {
            $slug = $originalSlug . $separator . $counter;
            $counter++;
            $query = $model::where('slug', '=', $slug);
            if ($currentModel) {
                $query->where('id', '!=', $currentModel->id);
            }
        }
        return $slug;
    }
    
}