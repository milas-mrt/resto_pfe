<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $reservation->id !!}</p>
    <hr>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{!! $reservation->date !!}</p>
    <hr>
</div>

<!-- Quantite Field -->
<div class="form-group">
    {!! Form::label('quantite', 'Quantite:') !!}
    <p>{!! $reservation->quantite !!}</p>
    <hr>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{!! $reservation->prix !!}</p>
    <hr>
</div>

<!-- Nopersonne Field -->
<div class="form-group">
    {!! Form::label('nopersonne', 'Nopersonne:') !!}
    <p>{!! $reservation->nopersonne !!}</p>
    <hr>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{!! $reservation->client_id !!}</p>
    <hr>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $reservation->user_id !!}</p>
    <hr>
</div>

<!-- Table Id Field -->
<div class="form-group">
    {!! Form::label('table_id', 'Table Id:') !!}
    <p>{!! $reservation->table_id !!}</p>
    <hr>
</div>

