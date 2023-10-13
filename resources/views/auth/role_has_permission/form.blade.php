<input type="hidden" name="csrf" value="{{-- {{ .csrf }} --}}">
<input type="hidden" name="ID" value="{{-- {{ .roleID }} --}}">
{{-- {{ $i := .rolePermissions}} --}}
<table id="datatable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Checked Permissions</th>
            <th>Path</th>
        </tr>
    </thead>
    <tbody>
        <!-- Table only send last selected permissions -->
        {{-- {{range $value := .allPermissions}} --}}
        <tr>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="permission" type="checkbox" id="inlineCheckbox1"
                        value={{-- {{$value.ID}} {{if hasPermission $i $value.ID}} checked {{end}} --}}>
                </div>
            </td>
            <td> <label class="form-check-label" for="inlineCheckbox1">{{$value.Path}}</label></td>
        </tr>
        {{-- {{end}} --}}
    </tbody>
</table>
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Create</button>
    </div>
</div>
