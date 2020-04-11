<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $articles = Article::with('user')->get();
  return view('articles.index', compact('articles'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  $categories =  Category::all();
  return view('articles.create', compact('categories'));
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  Article::create($request->all() + ['user_id' => auth()->id()]);
  return redirect()->route('articles.index');
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\Article  $article
  * @return \Illuminate\Http\Response
  */
 public function show(Article $article)
 {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Article  $article
  * @return \Illuminate\Http\Response
  */
 public function edit(Article $article)
 {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Article  $article
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Article $article)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Article  $article
  * @return \Illuminate\Http\Response
  */
 public function destroy(Article $article)
 {
  //
 }
}
