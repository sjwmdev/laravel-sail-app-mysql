<input type="hidden" name="csrf" value="{{-- {{ .csrf }} --}}">
<input type="hidden" name="id" value="{{-- {{ .data.ID}} --}}">
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="Name" class="col-md-2 control-label">Name</label>
        <input type="input" name="name" class="form-control" aria-describedby="Name" value="{{-- {{ .data.Name }} --}}">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <label for="email" class="col-md-2 control-label">Email Address</label>
        <input type="text" name="email" class="form-control" aria-describedby="Email" value="{{-- {{ .data.Email }} --}}">
    </div>
</div>
{{-- {{if .data}}
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Update</button>
    </div>
</div>
{{else}} --}}
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Create</button>
    </div>
</div>
{{-- {{end}} --}}
