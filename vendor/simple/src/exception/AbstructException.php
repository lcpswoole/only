<?php
/**
 * Created by PhpStorm.
 * User: brook·Lee
 * Date: 2021/11/23
 * Time: 22:12
 */

class AbstructException extends Exception
{
	public function __construct($message = "", $code = 0, Throwable $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}