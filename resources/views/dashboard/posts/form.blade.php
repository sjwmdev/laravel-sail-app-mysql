<div class="form-row">
    <div class="form-group col-md-12">
        <label for="title" class="control-label">Title&nbsp;<span style="color:red">*</span></label>
        <input type="text" name="title" class="form-control" aria-describedby="Name"
            value="{{ $post->title ?? old('title') }}" placeholder="Enter name" required>
        @if ($errors->has('title'))
            <span class="text-danger text-left">{{ $errors->first('title') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="description" class="control-label">Description&nbsp;<span style="color:red">*</span></label>
        <input type="text" name="description" class="form-control" aria-describedby="Description"
            value="{{ $post->description ?? old('description') }}" placeholder="Enter description" required>

        @if ($errors->has('description'))
            <span class="text-danger text-left">{{ $errors->first('description') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="body" class="control-label">Body&nbsp;<span style="color:red">*</span></label>
        <textarea class="form-control" aria-describedby="Body" name="body" placeholder="Enter body" required>{{ $post->body ?? old('body') }}</textarea>

        @if ($errors->has('body'))
            <span class="text-danger text-left">{{ $errors->first('body') }}</span>
        @endif
    </div>
</div>

{{-- Buttons --}}
<div class="form-group mt-4">
    <div class="row">
        @if (Route::currentRouteName() == 'posts.create')
            @can('posts.store')
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            @endcan
        @elseif(Route::currentRouteName() == 'posts.edit')
            @can('posts.update')
                <div class="col-md-2">
                    <button type="submit" class="btn btn-info btn-block">Update</button>
                </div>
            @endcan
        @endif
        @can('posts.index')
            <div class="col-md-2">
                <a href="{{ route('posts.index') }}" class="btn btn-default btn-block">Back</a>
            </div>
        @endcan
    </div>
</div>
