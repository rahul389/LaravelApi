<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Request;
use Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('article/index', compact('articles'));
        // return response()->json($articles,200);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'body'  => 'required'
        ];
    }

    /**
     * Show the form for creating a new Contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) :
            new Article();
        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($article->save()) {
            return redirect()->route('article.show', $article->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.show ', compact('article'));
        //return new ArticleResource($article);
    }

    /**
     * Show the form for creating a new Contact.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('article.edit', compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->delete()) {
            return redirect()->route('articles.index');
        }
    }
}
