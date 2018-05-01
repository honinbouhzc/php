<?php 
class Book{
	private $name;
	private $page;
	private $author;
	private $price;
	private $other;

	public function __construct($name,$page,$author,$price){
		$this->name = $name;
		$this->page = $page;
		$this->author = $author;
		$this->price = $price;
	}

	public function getName(){
		return $this->name;
	}

	public function getPage(){
		return $this->page;
	}

	public function getAuthor(){
		return $this->author;
	}

	public function getPrice(){
		return $this->price;
	}

	public function __set($name,$value){
		$this->other = $value;
	}

	public function getOther(){
		return $this->other;
	}
}

?>