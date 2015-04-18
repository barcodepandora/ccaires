<?php namespace ccservice\repositories;

use Illuminate\Database\Eloquent\Model;

use ccservice\entities\Service;

class ServiceRepository {

	//

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function find($id)
	{
		$service = Service::find($id);
		return $service;		
	}

}
