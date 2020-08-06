<?php

namespace App\Http\Controllers\Admin\Reservation;

use App\Http\Requests;
use App\Http\Requests\Reservation\CreateReservationRequest;
use App\Http\Requests\Reservation\UpdateReservationRequest;
use App\Repositories\Reservation\ReservationRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Reservation\Reservation;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\reservation_produit;
class ReservationController extends InfyOmBaseController
{
    /** @var  ReservationRepository */
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepo)
    {
        $this->reservationRepository = $reservationRepo;
    }

    /**
     * Display a listing of the Reservation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->reservationRepository->pushCriteria(new RequestCriteria($request));
        $reservations = $this->reservationRepository->all();
        return view('admin.reservation.reservations.index')
            ->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new Reservation.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.reservation.reservations.create');
    }

    /**
     * Store a newly created Reservation in storage.
     *
     * @param CreateReservationRequest $request
     *
     * @return Response
     */
    public function store(CreateReservationRequest $request)
    {
        $input = $request->all();

        $reservation = $this->reservationRepository->create($input);

        $entree = $request->input('entrees');
        //dd($request->input('principals'));
        $principal= $request->input('principals');
        $boisson= $request->input('boissons');
        $dessert= $request->input('desserts');
        foreach ($entree as $key => $e) {
            $produit_reservation = new reservation_produit();
            $produit_reservation->reservation_id = $reservation->id;
            $produit_reservation->produit_id = $e;
            $produit_reservation->save();
        }

        foreach ($principal as $key => $p) {
            $produit_reservation1 = new reservation_produit();
            $produit_reservation1->reservation_id = $reservation->id;
            $produit_reservation1->produit_id = $p;
            $produit_reservation1->save();
        }

        foreach ($boisson as $key => $b) {
            $produit_reservation2 = new reservation_produit();
            $produit_reservation2->reservation_id = $reservation->id;
            $produit_reservation2->produit_id = $b;
            $produit_reservation2->save();
        }

        foreach ($dessert as $key => $d) {
            $produit_reservation3 = new reservation_produit();
            $produit_reservation3->reservation_id = $reservation->id;
            $produit_reservation3->produit_id = $d;
            $produit_reservation3->save();
        }
        

        


        Flash::success('Reservation saved successfully.');

        return redirect(route('admin.reservation.reservations.index'));
    }

    /**
     * Display the specified Reservation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reservation = $this->reservationRepository->findWithoutFail($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('admin.reservation.reservations.show')->with('reservation', $reservation);
    }

    /**
     * Show the form for editing the specified Reservation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reservation = $this->reservationRepository->findWithoutFail($id);

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        return view('admin.reservation.reservations.edit')->with('reservation', $reservation);
    }

    /**
     * Update the specified Reservation in storage.
     *
     * @param  int              $id
     * @param UpdateReservationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReservationRequest $request)
    {
        $reservation = $this->reservationRepository->findWithoutFail($id);

        

        if (empty($reservation)) {
            Flash::error('Reservation not found');

            return redirect(route('reservations.index'));
        }

        $reservation = $this->reservationRepository->update($request->all(), $id);

        Flash::success('Reservation updated successfully.');

        return redirect(route('admin.reservation.reservations.index'));
    }

    /**
     * Remove the specified Reservation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.reservation.reservations.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Reservation::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.reservation.reservations.index'))->with('success', Lang::get('message.success.delete'));

       }

}
