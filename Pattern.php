<?php

namespace Regex;

class Pattern {
	private const MONETARY_AMOUNT_WHOLE 			= '-?(?:0|[1-9]\d{0,2}(?:[.,]?\d{3})*)';
	protected const MONETARY_AMOUNT_PATTERN_STRICT 	= '/^'.self::MONETARY_AMOUNT_WHOLE.'[.,]\d{2}$/';
	protected const MONETARY_AMOUNT_PATTERN 		= '/^'.self::MONETARY_AMOUNT_WHOLE.'(?:[.,]\d{1,2})?$/';
	
	private const DATE_SEPARATOR 					= '[\-.\/]';
	protected const DATE_PATTERN 					= '/^(?:\d{2}'.self::DATE_SEPARATOR.'){2}(?:\d{2}|\d{4})|\d{4}(?:'.self::DATE_SEPARATOR.'\d{2}){2}$/';
}