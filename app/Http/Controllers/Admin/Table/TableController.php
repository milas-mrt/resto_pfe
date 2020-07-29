<?php

namespace App\Http\Controllers\Admin\Table;

use App\Http\Requests;
use App\Http\Requests\Table\CreateTableRequest;
use App\Http\Requests\Table\UpdateTableRequest;
use App\Repositories\Table\TableRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Table\Table;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TableController extends InfyOmBaseController
{
    /** @var  TableRepository */
    private $tableRepository;

    public function __construct(TableRepository $tableRepo)
    {
        $this->tableRepository = $tableRepo;
    }

    /**
     * Display a listing of the Table.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->tableRepository->pushCriteria(new RequestCriteria($request));
        $tables = $this->tableRepository->all();
        return view('admin.table.tables.index')
            ->with('tables', $tables);
    }

    /**
     * Show the form for creating a new Table.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.table.tables.create');
    }

    /**
     * Store a newly created Table in storage.
     *
     * @param CreateTableRequest $request
     *
     * @return Response
     */
    public function store(CreateTableRequest $request)
    {
        $input = $request->all();

        $table = $this->tableRepository->create($input);

        Flash::success('Table saved successfully.');

        return redirect(route('admin.table.tables.index'));
    }

    /**
     * Display the specified Table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('admin.table.tables.show')->with('table', $table);
    }

    /**
     * Show the form for editing the specified Table.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        return view('admin.table.tables.edit')->with('table', $table);
    }

    /**
     * Update the specified Table in storage.
     *
     * @param  int              $id
     * @param UpdateTableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTableRequest $request)
    {
        $table = $this->tableRepository->findWithoutFail($id);

        

        if (empty($table)) {
            Flash::error('Table not found');

            return redirect(route('tables.index'));
        }

        $table = $this->tableRepository->update($request->all(), $id);

        Flash::success('Table updated successfully.');

        return redirect(route('admin.table.tables.index'));
    }

    /**
     * Remove the specified Table from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.table.tables.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Table::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.table.tables.index'))->with('success', Lang::get('message.success.delete'));

       }

}
