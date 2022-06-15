<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    public $campo="id", $orden="desc";
    public function render()
    {

        $posts=Post::where('user_id', auth()->user()->id)->orderBy($this->campo, $this->orden)->paginate(5);
        return view('livewire.show-posts', compact('posts'));
    }
}
