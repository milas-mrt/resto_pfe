<?php

namespace App\Http\Controllers\Admin\Commande;

use App\Http\Requests;
use App\Http\Requests\Commande\CreateCommandeRequest;
use App\Http\Requests\Commande\UpdateCommandeRequest;
use App\Repositories\Commande\CommandeRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Commande\Commande;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\commande_produit;
class CommandeController extends InfyOmBaseController
{
    /** @var  CommandeRepository */
    private $commandeRepository;

    public function __construct(CommandeRepository $commandeRepo)
    {
        $this->commandeRepository = $commandeRepo;
    }

    /**
     * Display a listing of the Commande.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->commandeRepository->pushCriteria(new RequestCriteria($request));
        $commandes = $this->commandeRepository->all();
        return view('admin.commande.commandes.index')
            ->with('commandes', $commandes);
    }

    /**
     * Show the form for creating a new Commande.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.commande.commandes.create');
    }

    /**
     * Store a newly created Commande in storage.
     *
     * @param CreateCommandeRequest $request
     *
     * @return Response
     */
    public function store(CreateCommandeRequest $request)
    {
        $input = $request->all();

        $commande = $this->commandeRepository->create($input);
        $entree = $request->input('entrees');
        //dd($request->input('principals'));
        $principal= $request->input('principals');
        $boisson= $request->input('boissons');
        $dessert= $request->input('desserts');
        foreach ($entree as $key => $e) {
            $produit_commande = new commande_produit();
            $produit_commande->commande_id = $commande->id;
            $produit_commande->produit_id = $e;
            $produit_commande->save();
        }

        foreach ($principal as $key => $p) {
            $produit_commande1 = new commande_produit();
            $produit_commande1->commande_id = $commande->id;
            $produit_commande1->produit_id = $p;
            $produit_commande1->save();
        }

        foreach ($boisson as $key => $b) {
            $produit_commande2 = new commande_produit();
            $produit_commande2->commande_id = $commande->id;
            $produit_commande2->produit_id = $b;
            $produit_commande2->save();
        }

        foreach ($dessert as $key => $d) {
            $produit_commande3 = new commande_produit();
            $produit_commande3->commande_id = $commande->id;
            $produit_commande3->produit_id = $d;
            $produit_commande3->save();
        }
        


        Flash::success('Commande saved successfully.');

        return redirect(route('admin.commande.commandes.index'));
    }

    /**
     * Display the specified Commande.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commande = $this->commandeRepository->findWithoutFail($id);

        if (empty($commande)) {
            Flash::error('Commande not found');

            return redirect(route('commandes.index'));
        }

        return view('admin.commande.commandes.show')->with('commande', $commande);
    }

    /**
     * Show the form for editing the specified Commande.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commande = $this->commandeRepository->findWithoutFail($id);

        if (empty($commande)) {
            Flash::error('Commande not found');

            return redirect(route('commandes.index'));
        }

        return view('admin.commande.commandes.edit')->with('commande', $commande);
    }

    /**
     * Update the specified Commande in storage.
     *
     * @param  int              $id
     * @param UpdateCommandeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommandeRequest $request)
    {
        $commande = $this->commandeRepository->findWithoutFail($id);

        

        if (empty($commande)) {
            Flash::error('Commande not found');

            return redirect(route('commandes.index'));
        }

        $commande = $this->commandeRepository->update($request->all(), $id);

        Flash::success('Commande updated successfully.');

        return redirect(route('admin.commande.commandes.index'));
    }

    /**
     * Remove the specified Commande from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.commande.commandes.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Commande::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.commande.commandes.index'))->with('success', Lang::get('message.success.delete'));

       }

}
