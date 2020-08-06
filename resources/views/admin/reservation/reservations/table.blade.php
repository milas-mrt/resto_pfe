<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="reservations-table" width="100%">
    <thead>
     <tr>
        <th>Date</th>
        <th>Quantite</th>
        <th>Prix</th>
        <th>Nopersonne</th>
        <th>Client Id</th>
        <th>User Id</th>
        <th>Table Id</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($reservations as $reservation)
        <tr>
            <td>{!! $reservation->date !!}</td>
            <td>{!! $reservation->quantite !!}</td>
            <td>{!! $reservation->prix !!}</td>
            <td>{!! $reservation->nopersonne !!}</td>
            <td>{!! $reservation->client_id !!}</td>
            <td>{!! $reservation->user_id !!}</td>
            <td>{!! $reservation->table_id !!}</td>
            <td>
                 <a href="{{ route('admin.reservation.reservations.show', collect($reservation)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view reservation"></i>
                 </a>
                 <a href="{{ route('admin.reservation.reservations.edit', collect($reservation)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit reservation"></i>
                 </a>
                 <a href="{{ route('admin.reservation.reservations.confirm-delete', collect($reservation)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.reservation.reservations.delete', collect($reservation)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete reservation"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#reservations-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#reservations-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#reservations-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
