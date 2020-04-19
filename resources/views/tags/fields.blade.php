<div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">タイトル</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="imputTitle" name="title" value="{{ $tag->title ?? ''}}" placeholder="タイトル">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror   
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">保存</button>
        <a href="{{ route('tags.index') }}" class="btn btn-secondary">一覧へ戻る</a>
    </div>
</div>