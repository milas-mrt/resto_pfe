<!-- Nom Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Motdepasse Field -->
<div class="form-group col-sm-12">
    {!! Form::label('motdepasse', 'Motdepasse:') !!}
    {!! Form::password('motdepasse', ['class' => 'form-control']) !!}
</div>

<!-- Numtel Field -->
<div class="form-group col-sm-12">
    {!! Form::label('numtel', 'Numtel:') !!}
    {!! Form::text('numtel', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::textarea('adresse', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.client.clients.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
