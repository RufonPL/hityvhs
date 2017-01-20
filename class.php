<?php
class Post {
	private $userEmail;
	private $postTitle;
	private $postContent;
	private $postPublished;
	private $postCreatedAt;

	public function __construct($userEmail, $postTitle, $postContent, $postPublished){
		$this->userEmail = $userEmail;
		$this->postTitle = $postTitle;
		$this->postContent = $postContent;
		$this->postPublished = $postPublished;
		$this->showPost();
	}

	public function getUserEmail(){
		return $this->userEmail;
	}
	
	public function getPostTitle(){
		return $this->postTitle;
	}
	
	public function getPostContent(){
		return $this->postContent;
	} 
	
	public function getPostPublishedDate(){
		return $this->postPublished;
	}
	
	public function showPost(){
		echo
			'<div class="post">
				<h5>'.$this->getPostTitle().'</h5>
				<p class="postContent">'.	$this->getPostContent().'</p>
				<p class="postPublished">'.	$this->getPostPublishedDate().'</p>
				<p class="userEmail">'.		$this->getUserEmail().'</p>
			</div>';
	}
}





?>