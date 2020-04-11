@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creat Article</div>

                <div class="card-body">
                   
                    <form action="{{ route('articles.update', $article->id) }}" method="POST"enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        Title:
                        <br />
                    <input type='text' name="title" value="{{ $article->title }}" class="form-control" />
                        <br />
                        <br />
                        Description:
                        <br />
                        <textarea name="full_text" class="form-control" >{{ $article->full_text }}</textarea>
                        <br />
                        Category:
                        <br />
                        <select name="category_id" class="form-control">
                         @foreach ($categories as $category)
                          <option value="{{ $category->id }}" @if ($category->id == $article->category_id)  @endif>{{ $category->name }}</option> 
                         @endforeach
                        </select>
                        <br />
                        @if(auth()->user()->is_publisher || auth()->user()->is_admin)
                        <input type="checkbox" name="published" value="1" @if($article->published_at) checked @endif/> Published
                        <br />
                        <br />
                        @endif
                        <input type="submit" class="btn btn-primary" value="Save" />
                        <br /><br />
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
