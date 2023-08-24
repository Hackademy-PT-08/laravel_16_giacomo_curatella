<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEdit extends Component
{
    public $id;
    public $title;
    public $content;
    public $message;


    public function mount(){
        $article = Article::find($this->id);
        $this->title = $article->title;
        $this->content = $article->content;
    }

    public function render()
    {
        return view('livewire.article-edit');
    }

    public function update()
    {
        $validate = $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        $article = Article::find($this->id);
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save();

        $this->message = 'Articolo aggiornato con successo!';
    }

    public function messages() {
        return [
            'title' => 'Campo titolo obbligatorio',
            'content' => 'Dovrà pur avere un testo questo articolo! XD'
        ];
    }

    public function destroy()
    {
        $article = Article::find($this->id);
        $article->delete();

        return redirect()->route('home')->with('delete', 'Articolo eliminato');
    }
}
