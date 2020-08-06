
<!-- Nom Field -->

<div class="form-group col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrées -->
<div class="row">
    <div class="col-md-12" style="">
        <div class="form-group ui-draggable-handle" style="position: static;">
                   
<?php
   $entrees=App\models\Produit\Produit::where('type','entree')->get();
   //var_dump($entrees);
?> 

	{!! Form::label('entrees', 'liste des entrées:') !!}
<select name="entrees[]" multiple>
	<option value="" disabled="true">select ...</option>
	@foreach ($entrees as $e)
	<option value="{!! $e->id !!}">{!! $e->nom !!}</option>
	@endforeach

</select>

        </div>
    </div>
</div>

	

<!-- Categorie Field -->
<div class="form-group col-sm-12">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::text('categorie', null, ['class' => 'form-control']) !!}
</div>

<!-- Plats principaux -->
<div class="row">
    <div class="col-md-12" style="">
        <div class="form-group ui-draggable-handle" style="position: static;">
            
        
<?php
  $principals=App\models\Produit\Produit::where('type','principal')->get();
?>
	
{!! Form::label('prinicpal', 'liste des plats principals:') !!}
<select name="principals[]" multiple>
	<option value="" disabled="true">select ...</option>
	@foreach ($principals as $p)
	<option value="{!! $p->id !!}">{!! $p->nom !!}</option>
	@endforeach

</select>
        </div>
    </div>
</div>


<!-- Boissons -->
<div class="row">
    <div class="col-md-12" style="">
        <div class="form-group ui-draggable-handle" style="position: static;">
            
           
                                                        
<?php
   $boissons=App\models\Produit\Produit::where('type','boisson')->get();
?>
	{!! Form::label('boisson', 'liste des boissons:') !!}
<select name="boissons[]" multiple>
	<option value="" disabled="true">select ...</option>
	@foreach ($boissons as $b)
	<option value="{!! $b->id !!}">{!! $b->nom !!}</option>
	@endforeach

</select>
        </div>
    </div>


</div>


<!-- Desserts -->

<div class="row">
    <div class="col-md-12" style="">
        <div class="form-group ui-draggable-handle" style="position: static;">
            
            
                                                        
<?php
   $desserts=App\models\Produit\Produit::where('type','dessert')->get();
?>
	{!! Form::label('desserts', 'liste des desserts:') !!}
<select name="desserts[]" multiple>
	<option value="" disabled="true">select ...</option>
	@foreach ($desserts as $d)
	<option value="{!! $d->id !!}">{!! $d->nom !!}</option>
	@endforeach

</select>
        </div>
    </div>
</div>



<!-- User Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.menu.menus.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
