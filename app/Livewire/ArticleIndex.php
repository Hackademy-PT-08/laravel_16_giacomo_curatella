<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ArticleIndex extends Component
{
    public $cerca = '';
    public function render()
    {
        if($this->cerca !== ''){
            $all_articles = DB::table('articles')->where('title', 'like', '%' . $this->cerca . '%')->get();
            // $all_articles = Article::where('title', $this->cerca)->get();
        }else{
            $all_articles = Article::all();
        }
        return view('livewire.article-index', ['articles'=>$all_articles]);
    }
}
