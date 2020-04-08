@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creat Article</div>

                <div class="card-body">
                   
                    <form action="{{ route('articles.store') }}" method="POST"enctype="multipart/form-data">
                        @csrf
                        Title:
                        <br />
                       <input type='text' name="title" value="" class="form-control" />
                        <br />
                        <br />
                        Description:
                        <br />
                        <textarea name="full_text" class="form-control" ></textarea>
                        <br />
                        Category:
                        <br />
                        <select name="category_id" class="form-control">
                         @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option> 
                         @endforeach
                        </select>
                        <br />
                        <br />
                        <input type="submit" class="btn btn-primary" value="Create" />
                        <br /><br />
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
