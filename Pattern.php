<?php

namespace Regex;

class Pattern {
	private const MONETARY_AMOUNT_WHOLE 	= '-?(?:0|[1-9]\d{3,}|[1-9]\d{0,2}(?:([,.])\d{3}(?:\1\d{3})*)?)';
	const PATTERN_MONETARY_AMOUNT_STRICT 	= '/^'.self::MONETARY_AMOUNT_WHOLE.'[.,]\d{2}$/';
	const PATTERN_MONETARY_AMOUNT 			= '/^'.self::MONETARY_AMOUNT_WHOLE.'(?:[.,]\d{1,2})?$/';
	
	private const DATE_SEPARATOR 					= '[\-.\/]';
	const PATTERN_DATE 						= '/^(?:\d{2}'.self::DATE_SEPARATOR.'){2}(?:\d{2}|\d{4})|\d{4}(?:'.self::DATE_SEPARATOR.'\d{2}){2}$/';
}