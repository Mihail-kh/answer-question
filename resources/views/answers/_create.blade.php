<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="cart-title">
                    <h3>Your answer</h3>
                </div>
                <hr>
                <form action="{{route('questions.answers.store', $question->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" cols="30"
                                  rows="7"></textarea>
                        @if($errors->has('body'))
                            @include('layouts.parts._error', ['error' =>$errors->first('body')])
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
