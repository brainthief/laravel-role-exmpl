@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creat Category</div>

                <div class="card-body">
                   
                    <form action="{{ route('categories.store') }}" method="POST"enctype="multipart/form-data">
                        @csrf
                        Name:
                        <br />
                       <input type='text' name="name" value="" class="form-control" />
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
