<?php
namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Tag;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class ArticlesController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

	public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        //$latest =
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article) {

       if($article==null){
            return "Not found";
        }

        return view('articles.show', compact('article'));
    }

    public function create(){

        $tags = Tag::lists('name', 'id');

        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request){

       $this->createArticle($request);

       flash()->success('You are now logged in!');

        //flash()->overlay('Your article has been successfully created', 'Good Job!');
        //Article::create($request->all());

        return redirect('articles')->with('flash_message');


    }

    public function edit(Article $article){

        $tags = Tag::lists('name', 'id');
        if($article==null){
            return "Not found";
        }

        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, ArticleRequest $request){

       if($article==null){
            return "Not found";
        }

        $article->update($request->all());

        $this->syncTags($article,$request->input('tag_list'));

        return redirect('articles');
    }

    private function createArticle(ArticleRequest $request){

        $article = \Auth::user()->articles()->create($request->all());

        $this->syncTags($article,$request->input('tag_list'));


        return $article;
    }

    private function syncTags(Article $article, array $tags){

        $article->tags()->sync($tags);

        return $article;
    }

}
