<?php

class OB_FileWriter
{
	private $_filename;
	private $_fp = null;
	private $_errorHandlersRegistered = false;
	
	public function __construct($filename)
	{
		$this->setFilename($filename);
	}

	public function __destruct()
	{
		if($this->_fp)
			$this->end();
	}

	public function setFilename($filename)
	{
		$this->_filename = $filename;
	}

	public function getFilename()
	{
		return $this-_filename;
	}

	public function start()
	{
		$this->_fp = @fopen($this->_filename,'w');

		if(!$this->_fp)
			throw new Exception('Cannot open '.$this->_filename.' for writing!');

		ob_start(array($this,'outputHandler'));
	}

	public function end()
	{
		$this->_stopBuffering();
		$this->setHaltOnError(false);
	}

	public function outputHandler($buffer)
	{
		fwrite($this->_fp,$buffer);
	}
	
	private function _stopBuffering()
	{
		@ob_end_flush();
		if($this->_fp)
			fclose($this->_fp);

		$this->_fp = null;
	}

	public function setHaltOnError($value)
	{
		//Do nothing if the value is the same as old
		if($value === $this->_errorHandlersRegistered)
			return;

		$this->_errorHandlersRegistered = $value;
		if($value == true)
		{
			set_exception_handler(array($this, 'exceptionHandler'));
			set_error_handler(array($this, 'errorHandler'));
			//echo 'registered to errors<br>';
		}
		else
		{
			restore_exception_handler();
			restore_error_handler();	
		}
	}
	
	
	public function exceptionHandler($exception)
	{
		$this->_stopBuffering();
		echo 'Fatal error: Uncaught ', $exception;
	}

	public function errorHandler($errno, $errstr, $errfile, $errline)
	{
		$this->_stopBuffering();
		echo 'errorNumber .'.$errorNumber.'<br>';

		$errorNumber = E_USER_ERROR;
		switch($errno)
		{
		case E_NOTICE:
		  $errorNumber = E_USER_NOTICE;
		  break;
		case E_WARNING:
		  $errorNumber = E_USER_WARNING;
		  break;
		}

		trigger_error($errstr.', File: '.$errfile.' line '.$errline, $errorNumber);
	}
}

?>