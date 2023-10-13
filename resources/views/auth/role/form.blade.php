<input type="hidden" name="csrf" value="">
<input type="hidden" name="id" value="">
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="Name" class="col-md-2 control-label">Name</label>
        <input type="input" name="name" class="form-control" aria-describedby="Name" value="">
    </div>
    <div class="form-group col-md-6">
        <label for="Name" class="col-md-2 control-label">Description</label>
        <input type="input" name="description" class="form-control" aria-describedby="Description" value="">
    </div>
</div>
{{-- {{if .data}}
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Update</button>
    </div>
</div>{{else}} --}}
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Create</button>
    </div>
</div>
{{-- {{end}} --}}
