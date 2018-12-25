<?php

namespace e200\Mediavel\Models;

use Illuminate\Database\Eloquent\Model;

class FileMeta extends Model
{
    protected $fillable = [
        'client_name',
        'file_path',
        'mime_type_id',
    ];

    public function mimeType()
    {
        return $this->belongsTo(MimeType::class);
    }
}
