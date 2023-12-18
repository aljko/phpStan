<?php declare(strict_types = 1);

	class HelloWorld
	{
    		/**
     		* @return never-return
     		*/
    		public function encode(string $foo): array
    		{
        		throw new BadMethodCallException();
    		}
	}
