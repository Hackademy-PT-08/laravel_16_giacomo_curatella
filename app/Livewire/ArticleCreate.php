<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $title = '';
    public $content = '';

    public $message;

    public function render()
    {
        return view('livewire.article-create');
    }

    public function store()
    {
        $validate = $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        $article = new Article();
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();

        $this->title = '';
        $this->content = '';

        $this->message = 'Articolo creato con successo!';
    }

    public function messages() {
        return [
            'title' => 'Campo titolo obbligatorio',
            'content' => 'Dovrà pur avere un testo questo articolo! XD'
        ];
    }
}
