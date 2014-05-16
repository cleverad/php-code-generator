<?php
namespace CG\Model;

trait DocblockTrait {
	
	private $docblock;

	/**
	 * @param Docblock|string $doc
	 * @return $this
	 */
	public function setDocblock($doc)
	{
		$this->docblock = $doc;
	
		return $this;
	}
	
	public function getDocblock()
	{
		return $this->docblock;
	}
}