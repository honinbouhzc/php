<?php 
class Car{
	protected $repairTime;

	public function __construct($repairTime){
		$this->repairTime = $repairTime;
	}

	public function getRepairTime(){
		return $this->repairTime;
	}
}

?>