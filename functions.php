<?php
	function getAllPosts() {
		$conn = $GLOBALS['conn'];
		$sql = "SELECT post.post_title, post.post_content, post.post_published, user.user_email
				FROM post, user
				WHERE user.id = post.user_id";	
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $post = new Post(	$row["user_email"],
		        					$row["post_title"], 
		        					$row["post_content"], 
		        					$row["post_published"]);
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	}