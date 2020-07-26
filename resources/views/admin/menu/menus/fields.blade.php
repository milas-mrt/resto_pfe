<!-- Nom Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Field -->
<div class="form-group col-sm-12">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::text('categorie', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrees Field -->
<div class="form-group col-sm-12">
    {!! Form::label('entrees', 'Entrees:') !!}
    {!! Form::select('entrees', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Plats Principaux Field -->
<div class="form-group col-sm-12">
    {!! Form::label('plats_principaux', 'Plats Principaux:') !!}
    {!! Form::select('plats_principaux', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Boissons Field -->
<div class="form-group col-sm-12">
    {!! Form::label('boissons', 'Boissons:') !!}
    {!! Form::select('boissons', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Desserts Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desserts', 'Desserts:') !!}
    {!! Form::select('desserts', ['' => ''], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.menu.menus.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
