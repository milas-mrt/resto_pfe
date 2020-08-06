<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $commande->id !!}</p>
    <hr>
</div>

<!-- Quantite Field -->
<div class="form-group">
    {!! Form::label('quantite', 'Quantite:') !!}
    <p>{!! $commande->quantite !!}</p>
    <hr>
</div>

<!-- Destination Field -->
<div class="form-group">
    {!! Form::label('destination', 'Destination:') !!}
    <p>{!! $commande->destination !!}</p>
    <hr>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{!! $commande->prix !!}</p>
    <hr>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $commande->user_id !!}</p>
    <hr>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{!! $commande->client_id !!}</p>
    <hr>
</div>

