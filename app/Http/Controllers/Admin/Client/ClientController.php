<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Requests;
use App\Http\Requests\Client\CreateClientRequest;
use App\Http\Requests\Client\UpdateClientRequest;
use App\Repositories\Client\ClientRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Client\Client;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClientController extends InfyOmBaseController
{
    /** @var  ClientRepository */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * Display a listing of the Client.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->clientRepository->pushCriteria(new RequestCriteria($request));
        $clients = $this->clientRepository->all();
        return view('admin.client.clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new Client.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.client.clients.create');
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function store(CreateClientRequest $request)
    {
        $input = $request->all();

        $client = $this->clientRepository->create($input);

        Flash::success('Client saved successfully.');

        return redirect(route('admin.client.clients.index'));
    }

    /**
     * Display the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('admin.client.clients.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('admin.client.clients.edit')->with('client', $client);
    }

    /**
     * Update the specified Client in storage.
     *
     * @param  int              $id
     * @param UpdateClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientRequest $request)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        $client = $this->clientRepository->update($request->all(), $id);

        Flash::success('Client updated successfully.');

        return redirect(route('admin.client.clients.index'));
    }

    /**
     * Remove the specified Client from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.client.clients.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Client::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.client.clients.index'))->with('success', Lang::get('message.success.delete'));

       }

}
