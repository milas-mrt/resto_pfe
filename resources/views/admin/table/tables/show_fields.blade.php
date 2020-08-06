<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $table->id !!}</p>
    <hr>
</div>

<!-- Occupee Field -->
<div class="form-group">
    {!! Form::label('occupee', 'Occupee:') !!}
    <p>@if( $table->occupee  =='1') true @else false @endif</p>
    <hr>
</div>

