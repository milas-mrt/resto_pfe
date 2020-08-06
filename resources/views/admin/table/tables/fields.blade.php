<!-- Occupee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupee', 'Occupee:') !!}
    <label class="radio">
        {!! Form::radio('occupee', '1') !!} 
    </label>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <label class="checkbox-inline">
        {!! Form::checkbox('type', '2') !!} 
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.table.tables.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
