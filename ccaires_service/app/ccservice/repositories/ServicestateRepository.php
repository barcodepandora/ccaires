<?php namespace ccservice\repositories;

use Illuminate\Database\Eloquent\Model;
use DB;

use ccservice\entities\Servicestate;

class ServicestateRepository {

	//

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function find($id)
	{
		$servicestate = Servicestate::find($id);
		return $servicestate;		
	}

	public function find_to($from)
	{
		$servicestate_list = DB::table('mapstates')->where('from', '=', $from)->get();
		$servicestate_coming = array();
		foreach ($servicestate_list as $next)
		{
			array_push($servicestate_coming, $this->find( $next->to ));
		}
		return $servicestate_coming;		
	}
}
