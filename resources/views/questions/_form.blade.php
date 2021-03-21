@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input class="form-control @error('title') is-invalid @enderror"
           type="text" id="question-title"
           name="title" value="{{old('title', $question->title)}}">
    @if($errors->has('title'))
        <div class="invalid-feedback d-block">
            <strong>{{$errors->first('title')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Explain your question</label>
    <textarea class="form-control @error('body') is-invalid @enderror" rows="10"
              type="text" id="question-body"
              name="body">{{old('body', $question->body)}}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback d-block">
            <strong>{{$errors->first('body')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>
