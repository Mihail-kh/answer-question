@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="cart-title">
                            <h1>Editing answer for question: <strong>{{$question->title}}</strong></h1>
                        </div>
                        <hr>
                        <form action="{{route('questions.answers.update', [$question->id, $answer->id])}}"
                              method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" cols="30"
                                  rows="7">{{old('body', $answer->body)}}</textarea>
                                @if($errors->has('body'))
                                    @include('layouts.parts._error', ['error' =>$errors->first('body')])
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
