<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label sr-only">Titre</label>
    <input type="text" id="title" name="title" value="{{ old('title') ?: $event->title }}"
    placeholder="Entrez un titre." class="form-control">
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label sr-only">Description</label>
    <textarea name="description" id="description" rows="10" cols="30" placeholder="Entrez une description." class="form-control">
        {{ old('description') ?: $event->description }}
    </textarea>
    {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
    <input type="submit" value="{{ $submitButtonText}}" class="btn btn-primary btn-block">
</div>
