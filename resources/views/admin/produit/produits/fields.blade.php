<!-- Nom Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Composant Field -->
<div class="form-group col-sm-12">
    {!! Form::label('composant', 'Composant:') !!}
    {!! Form::select('composant', ['tomate' => 'tomate'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.produit.produits.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
