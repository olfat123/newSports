<?php
namespace App\Model\Filters ;


use App\Model\QueryFilter;
use Carbon\Carbon;
/**
 * 
 */
class ChallengeFilters extends QueryFilter
{

	public $creatorType ; // == 1 => Auth is the creator || == 2 => Auth is not the creator  
	public $name ;

	public $candidate ;

	//public $p_gender ;

    //public $p_preferred_gender ; */
    
    /*
    *make sure creator not Auth
    */
	public function other($other)
	{
		return $this->builder->where('C_creator_id', '!=', $other) ;
	}
	
    
    /*
    * get events where sport = $sport
    */
    public function sport($sport)
	{
		return $this->builder->where('C_sport_id', '=', $sport) ;
    }
	
	/*
    * get events where from = $from
    */
    public function date($date)
	{
		return $this->builder->where('C_date', '=', $date) ;
	}

	/*
    * get events where from = $from
    */
    public function from($from)
	{
		return $this->builder->where('C_from', '=', $from) ;
	}

	/*
    * get events where sport = $sport
    */
    public function to($to)
	{
		return $this->builder->where('C_to', '=', $to) ;
	}

	/*
    * get events where still in the future 
    */
    public function future()
	{
		return $this->builder->where('C_JQueryFrom', '<', Carbon::now()) ;
	}

	/*
    * get events where creator name == $name 
    */
	/* public function name($name)
	{
		$this->name = $name ;
		return $this->builder->whereHas('creator', function ($lquery) {
		    $lquery->where('name', 'LIKE', '%'.$this->name.'%') ;
		}) ;
		
	}
 */
	/*
    * get events where candidate name == $candidate 
    */
	public function candidate($candidate)
	{
		$this->creatorType = $this->request->creator ;
		$this->candidate = $candidate ;

		switch ($this->creatorType) {
			case 1:
				return $this->builder->whereHas('candidate', function ($lquery) {
					$lquery->where('name', 'LIKE', '%'.$this->candidate.'%') ;
				}) ;
				break;
			case 2:
				return $this->builder->whereHas('creator', function ($lquery) {
					$lquery->where('name', 'LIKE', '%'.$this->candidate.'%') ;
				}) ;
				break;
			
			default:
				# code...
				break;
		}
		/* if (condition) {
			return $this->builder->whereHas('candidate', function ($lquery) {
				$lquery->where('name', 'LIKE', '%'.$this->candidate.'%') ;
			}) ;
		} else {
			return $this->builder->whereHas('creator', function ($lquery) {
				$lquery->where('name', 'LIKE', '%'.$this->candidate.'%') ;
			}) ;
		} */
		
		

		
		
	}

	/*
    * get events where sport = $sport
    */
    public function winner($winner)
	{
		return $this->builder->where('C_winer_id', '=', $winner) ;
	}
}
