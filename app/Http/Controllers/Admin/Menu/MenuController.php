<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Requests;
use App\Http\Requests\Menu\CreateMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Repositories\Menu\MenuRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Menu\Menu;
use App\Models\Produit\Produit;
use App\menu_produit;

use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MenuController extends InfyOmBaseController
{
    /** @var  MenuRepository */
    private $menuRepository;

    public function __construct(MenuRepository $menuRepo)
    {
        $this->menuRepository = $menuRepo;
    }

    /**
     * Display a listing of the Menu.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->menuRepository->pushCriteria(new RequestCriteria($request));
        $menus = $this->menuRepository->all();
        return view('admin.menu.menus.index')
            ->with('menus', $menus);

              

    }

    /**
     * Show the form for creating a new Menu.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.menu.menus.create');

    }

    /**
     * Store a newly created Menu in storage.
     *
     * @param CreateMenuRequest $request
     *
     * @return Response
     */
    public function store(CreateMenuRequest $request)
    {
        //dd($request->input('entrees'));
        $input = $request->all();

        $menu = $this->menuRepository->create($input);

        $entree = $request->input('entrees');
        //dd($request->input('principals'));
        $principal= $request->input('principals');
        $boisson= $request->input('boissons');
        $dessert= $request->input('desserts');
        foreach ($entree as $key => $e) {
            $produit_menu = new menu_produit();
            $produit_menu->menu_id = $menu->id;
            $produit_menu->produit_id = $e;
            $produit_menu->save();
        }

        foreach ($principal as $key => $p) {
            $produit_menu1 = new menu_produit();
            $produit_menu1->menu_id = $menu->id;
            $produit_menu1->produit_id = $p;
            $produit_menu1->save();
        }

        foreach ($boisson as $key => $b) {
            $produit_menu2 = new menu_produit();
            $produit_menu2->menu_id = $menu->id;
            $produit_menu2->produit_id = $b;
            $produit_menu2->save();
        }

        foreach ($dessert as $key => $d) {
            $produit_menu3 = new menu_produit();
            $produit_menu3->menu_id = $menu->id;
            $produit_menu3->produit_id = $d;
            $produit_menu3->save();
        }
        

        /*$principal = Input::get('principals', array());
        $boisson = Input::get('boissons', array());
        $dessert = Input::get('desserts', array());*/

        Flash::success('Menu saved successfully.');

        return redirect(route('admin.menu.menus.index'));
    }

    /**
     * Display the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('admin.menu.menus.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified Menu.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        return view('admin.menu.menus.edit')->with('menu', $menu);
    }

    /**
     * Update the specified Menu in storage.
     *
     * @param  int              $id
     * @param UpdateMenuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMenuRequest $request)
    {
        $menu = $this->menuRepository->findWithoutFail($id);

        

        if (empty($menu)) {
            Flash::error('Menu not found');

            return redirect(route('menus.index'));
        }

        $menu = $this->menuRepository->update($request->all(), $id);

        Flash::success('Menu updated successfully.');

        return redirect(route('admin.menu.menus.index'));
    }

    /**
     * Remove the specified Menu from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.menu.menus.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Menu::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.menu.menus.index'))->with('success', Lang::get('message.success.delete'));

       }

}
