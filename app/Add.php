<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $text;
    protected $data;
    protected $author;
    protected $head;
    protected $category;
     
    public function __construct() {
        $this->text = config('admin.text');
        $this->data = config('admin.data');
        $this->author = config('admin.author');
        $this->head = config('admin.head');
        $this->category = config('admin.category');

    }
}
