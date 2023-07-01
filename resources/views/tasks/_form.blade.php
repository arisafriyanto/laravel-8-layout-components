<div class="col-md-10">
    <input type="text" class="form-control me-2" name="list" value="{{ old('list', $task->list) }}"
        placeholder="The name of the task" autofocus>

    @error('list')
        <small>*{{ $message }}</small>
    @enderror
</div>

<div class="col-md-2">
    <button type="submit" class="btn btn-light">{{ $submit }}</button>
</div>
