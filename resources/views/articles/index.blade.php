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
                            @if(auth()->user()->is_admin)
                             <th scope="col">User</th>
                            @endif
                            <th scope="col">Created at</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    @if(auth()->user()->is_admin)
                                     <td>{{ $article->user->name }}</td>
                                    @endif
                                    <td>{{ $article->created_at }}</td>
                                    <td></td>
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
