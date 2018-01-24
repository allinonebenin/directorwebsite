<?php
namespace App\Entites;
	class ProjetEntites
	{
		public function getUrl()
		{
			return "portfolio.php?p=portfolio&id=" . $this->id;
		}
	}
