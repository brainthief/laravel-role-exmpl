@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    <a href="{{ route('articles.create') }}" class="btn btn-info">New article</a>
                    <br /><br />
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            @can('see-article-user')
                             <th scope="col">User</th>
                            @endcan
                            <th scope="col">Created at</th>
                            <th scope="col">Published at</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    @can('see-article-user')
                                     <td>{{ $article->user->name }}</td>
                                    @endcan
                                    <td>{{ $article->created_at }}</td>
                                    <td>{{ $article->published_at }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">Edit</a>
      
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
