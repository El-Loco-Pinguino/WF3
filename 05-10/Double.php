<?php
	function double($number)
	{
		return "Double de 19: ".$number * 2;
	}

	function half($number)
	{
		return "Moitié de 60: ".$number / 2;
	}

	function datefr($dateus)
	{
		$tDate = explode("-", $dateus);
		return $tDate[2]."/".$tDate[1]."/".$tDate[0];
	}

	function dateus($datefr)
	{
		$tDate = explode("/", $datefr);
		return $tDate[2]."-".$tDate[1]."-".$tDate[0];
	}

	function pair($number)
	{
		return (!$number & 1);
	}

	function impair($number)
	{
		return ($number & 1);
	}
?>