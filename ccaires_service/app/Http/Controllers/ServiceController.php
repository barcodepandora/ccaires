<?php namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;

use ccservice\repositories\ServiceRepository;
use ccservice\repositories\ServicestateRepository;
use ccservice\entities\Service;
use ccservice\entities\Servicestate;
use ccservice\entities\Servicetype;

class ServiceController extends Controller {

	protected $serviceR;
	protected $servicestateR;
	
	public function __construct(ServiceRepository $serviceR, ServicestateRepository $servicestateR)
	{
	
		$this->serviceR = $serviceR;
		$this->servicestateR = $servicestateR;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		/*
		CONSULTAMOS TIPOS DE SERVICIO
		*/
		$servicetype_list = Servicetype::all();
		$idol = "Haruka";
		
		return view('ccservice/new_service', compact('idol', 'servicetype_list'));		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ServiceRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);
		
		/*
		PERSISTIMOS SERVICIO
		*/
		$service = null;
		if ($request->id == 0) 
		{
			$service = Service::create([
				
				//"id" => 4,
				"client" => $request->client,
				"address" => $request->address,
				"servicetype" => $request->servicetype,
				"desc" => $request->desc,
				"date" => $request->date,
				"contractor" => $request->contractor,
				"servicestate" => 3,
        	]);
		}
		else 
		{
			$service = $this->serviceR->find($request->id);
			$service->update([
				
				//"id" => 4,
				"name" => $request->name,
				"servicestate" => $request->state,
        	]);
		}

		/*
		CONSULTAMOS ESTADOS
		*/
		$state_current = $this->servicestateR->find($service->servicestate);
		$state_list_to = $this->servicestateR->find_to($service->servicestate);
		
		/*
		CONSULTAMOS TIPO DE SERVICIO
		*/
		$servicetype = Servicetype::find($service->servicetype);

		/*
		INFORMAMOS
		*/
		$meesage = 'Hola tu';
		Mail::send('hola', array('html' => 'view', 'message' => $meesage), function($message)
		{
			$message->to('jm.moreno743@uniandes.edu.co', 'Juan Uniandes')->subject('Welcome!');
		});
		
		//return redirect('ccservice/');
		return view('ccservice/service', compact('service', 'state_current', 'state_list_to', 'servicetype'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$service = $this->serviceR->find($id);
		return view('ccservice/service', compact('service', 'servicetype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
