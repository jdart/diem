<?php

class dmSearchHit
{
	protected
	$pageId,
	$score,
	$page;
	
	public function __construct($score, $pageId)
	{
		$this->score = $score;
		$this->pageId = $pageId;
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function getPage()
	{
		if(is_null($this->page))
		{
			$this->page = dmDb::table('DmPage')->find($this->pageId);
		}
		
		return $this->page;
	}
	
	public function getPageId()
	{
		return $this->pageId;
	}
	
	public function setPage(DmPage $page)
	{
		$this->page = $page;
	}
}