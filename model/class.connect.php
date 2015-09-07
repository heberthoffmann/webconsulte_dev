<?php

Class Conn{
	
	public function connect(){
    	 $mysqli = new mysqli("localhost", "root", "", "webconsulte");
    	 return  $mysqli;
	}

}
?>