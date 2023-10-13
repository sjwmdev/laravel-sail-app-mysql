<input type="hidden" name="csrf" value="{{-- {{ .csrf }} --}}">
<input type="hidden" name="user_id" value="{{-- {{ .userID }} --}}">
{{-- {{ $assignedRoles := .userRoles}} --}}
<table id="datatable" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Checked Roles</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <!-- Table only send last selected roles -->
        {{-- {{range $value := .allRoles}} --}}
        <tr>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="role_id" type="checkbox" id="inlineCheckbox1"
                        value="{{-- {{$value.ID}} {{if hasRole $assignedRoles $value.Name}} checked {{end}} --}}">
                </div>
            </td>
            <td> <label class="form-check-label" for="inlineCheckbox1">{{-- {{$value.Name}} --}}</label></td>
        </tr>
        {{-- {{end}} --}}
    </tbody>
</table>
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-block">Create</button>
    </div>
</div>
