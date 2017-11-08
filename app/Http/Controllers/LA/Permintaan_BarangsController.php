<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use App\Models\Permintaan_Barang;

class Permintaan_BarangsController extends Controller
{
	public $show_action = true;
	public $view_col = 'NamaBarang';
	public $listing_cols = ['id', 'NamaBarang', 'user', 'Tanggal', 'Jumlah', 'status'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Permintaan_Barangs', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Permintaan_Barangs', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Permintaan_Barangs.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Permintaan_Barangs');
		
		if(Module::hasAccess($module->id)) {
			return View('la.permintaan_barangs.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new permintaan_barang.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created permintaan_barang in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Permintaan_Barangs", "create")) {
		
			$rules = Module::validateRules("Permintaan_Barangs", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}

			$barang = Barang::find($request->NamaBarang)->first();
			if ($barang->jumlah < $request->Jumlah) {
				return redirect()->back()->withErrors("lalalalalalalal");
			} else{
				$sisa = $barang->jumlah - $request->Jumlah;
			}		

			$barang->update([
				'jumlah' => $sisa
			]);

			
			$insert_id = Module::insert("Permintaan_Barangs", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.permintaan_barangs.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified permintaan_barang.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Permintaan_Barangs", "view")) {
			
			$permintaan_barang = Permintaan_Barang::find($id);
			if(isset($permintaan_barang->id)) {
				$module = Module::get('Permintaan_Barangs');
				$module->row = $permintaan_barang;
				
				return view('la.permintaan_barangs.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('permintaan_barang', $permintaan_barang);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("permintaan_barang"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified permintaan_barang.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Permintaan_Barangs", "edit")) {			
			$permintaan_barang = Permintaan_Barang::find($id);
			if(isset($permintaan_barang->id)) {	
				$module = Module::get('Permintaan_Barangs');
				
				$module->row = $permintaan_barang;
				
				return view('la.permintaan_barangs.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('permintaan_barang', $permintaan_barang);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("permintaan_barang"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified permintaan_barang in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Permintaan_Barangs", "edit")) {
			
			$rules = Module::validateRules("Permintaan_Barangs", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Permintaan_Barangs", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.permintaan_barangs.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified permintaan_barang from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Permintaan_Barangs", "delete")) {
			Permintaan_Barang::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.permintaan_barangs.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('permintaan_barangs')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Permintaan_Barangs');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/permintaan_barangs/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Permintaan_Barangs", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/permintaan_barangs/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Permintaan_Barangs", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.permintaan_barangs.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}

	public function dtajax2()
	{

		$values = DB::table('permintaan_barangs')->select($this->listing_cols)->whereNull('deleted_at')->where('user','=',Auth::user()->name);
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Permintaan_Barangs');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/permintaan_barangs/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Permintaan_Barangs", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/permintaan_barangs/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Permintaan_Barangs", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.permintaan_barangs.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}

}
