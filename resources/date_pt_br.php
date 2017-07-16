<?php

/**
 * Converte data para pt-br
 * Autor: Caio César (Okarintary)
 * Vesion: 1.0
 * Contact: okarintary@openmailbox.org
 */

/**
 * Function dateToPrBr
 * retorna o mes (0-12) em string pt-bt (Ex: Janeiro (1))
 * -- Code --
 *
 *	$mes = 1;
 *	echo dateToPtBr($mes); // Retorna Janeiro;
 *
 */
function dateToPtBr($mes)
{
	switch ($mes)
	{
		case 1: return $mes = "Janeiro"; break;
		case 2: return $mes = "Fevereiro"; break;
		case 3: return $mes = "Março"; break;
		case 4: return $mes = "Abril"; break;
		case 5: return $mes = "Maio"; break;
		case 6: return $mes = "Junho"; break;
		case 7: return $mes = "Julho"; break;
		case 8: return $mes = "Agosto"; break;
		case 9: return $mes = "Setembro"; break;
		case 10: return $mes = "Outubro"; break;
		case 11: return $mes = "Novembro"; break;
		case 12: return $mes = "Dezembro"; break;
	}
}

/**
 * Function dateToPrBrAbrev
 * retorna o mes (0-12) em string pt-bt aberviado (Ex: Jan (1))
 * -- Code --
 *
 *	$mes = 1;
 *	echo dateToPtBr($mes); // Retorna Jan;
 *
 */
function dateToPtBrAbrev($mes)
{
	switch ($mes)
	{
		case 1: return $mes = "Jan"; break;
		case 2: return $mes = "Fev"; break;
		case 3: return $mes = "Mar"; break;
		case 4: return $mes = "Abr"; break;
		case 5: return $mes = "Mai"; break;
		case 6: return $mes = "Jun"; break;
		case 7: return $mes = "Jul"; break;
		case 8: return $mes = "Ago"; break;
		case 9: return $mes = "Set"; break;
		case 10: return $mes = "Out"; break;
		case 11: return $mes = "Nov"; break;
		case 12: return $mes = "Dez"; break;
	}
}
