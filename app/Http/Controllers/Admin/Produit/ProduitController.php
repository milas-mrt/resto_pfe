<?php

namespace App\Http\Controllers\Admin\Produit;

use App\Http\Requests;
use App\Http\Requests\Produit\CreateProduitRequest;
use App\Http\Requests\Produit\UpdateProduitRequest;
use App\Repositories\Produit\ProduitRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Produit\Produit;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProduitController extends InfyOmBaseController
{
    /** @var  ProduitRepository */
    private $produitRepository;

    public function __construct(ProduitRepository $produitRepo)
    {
        $this->produitRepository = $produitRepo;
    }

    /**
     * Display a listing of the Produit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->produitRepository->pushCriteria(new RequestCriteria($request));
        $produits = $this->produitRepository->all();
        return view('admin.produit.produits.index')
            ->with('produits', $produits);
    }

    /**
     * Show the form for creating a new Produit.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.produit.produits.create');
    }

    /**
     * Store a newly created Produit in storage.
     *
     * @param CreateProduitRequest $request
     *
     * @return Response
     */
    public function store(CreateProduitRequest $request)
    {
        $input = $request->all();

        $produit = $this->produitRepository->create($input);

        Flash::success('Produit saved successfully.');

        return redirect(route('admin.produit.produits.index'));
    }

    /**
     * Display the specified Produit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produit = $this->produitRepository->findWithoutFail($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        return view('admin.produit.produits.show')->with('produit', $produit);
    }

    /**
     * Show the form for editing the specified Produit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produit = $this->produitRepository->findWithoutFail($id);

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        return view('admin.produit.produits.edit')->with('produit', $produit);
    }

    /**
     * Update the specified Produit in storage.
     *
     * @param  int              $id
     * @param UpdateProduitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProduitRequest $request)
    {
        $produit = $this->produitRepository->findWithoutFail($id);

        

        if (empty($produit)) {
            Flash::error('Produit not found');

            return redirect(route('produits.index'));
        }

        $produit = $this->produitRepository->update($request->all(), $id);

        Flash::success('Produit updated successfully.');

        return redirect(route('admin.produit.produits.index'));
    }

    /**
     * Remove the specified Produit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.produit.produits.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Produit::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.produit.produits.index'))->with('success', Lang::get('message.success.delete'));

       }

}
