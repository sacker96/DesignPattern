<?php



/**
 * class bat ki
 */
class Facebook
{
	
	function postToWall() {
		echo "ban da dang bai thanh cong!";
	}
}

/**
 *  adapter
 */
class MyPost
{
	private $fb;
	function __construct(argument)
	{
		$this->fb = new Faceboo;
	}

	function post()
	{
		$this->fb->postToWall();
	}
}

// chung ta su dung postToWall thong qua class MyPost
$p = new MyPost;
$p->post(); // den day se tu hieu dc la chung ta dang tro toi ham postToWall

// cai hay o Adapter cho dun co thay doi ten ham postToWall -> postToFace thi chung ta chi can thay doi trong class MyPos la duoc khong can phai tim tat ca cac cho~ xu ly ham do ma thay doi.