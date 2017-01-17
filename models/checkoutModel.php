<?php 
class CheckoutModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

    function loadInfo($username)
    {
        $sql = "SELECT id FROM `user` 
             WHERE `username` ='".$username."'";
        $result = $this->db->query($sql);
        
        $post= array();

        $i = 0;
        foreach($result->result() as $rows)
        {
            $sql2 = "SELECT id FROM `cart` 
             WHERE `userId` =". $rows->id;
            $result2 = $this->db->query($sql2);


            foreach($result2->result() as $r)
            {

                $sql1 = "SELECT * FROM `cartrow`  WHERE `cartId` =". $r->id;
                $result1 = $this->db->query($sql1);


                foreach($result1->result() as $r2)
                {

                    $post [$i]["id"] = $r2->id;
                    $post [$i]["counter"] = $r2->counter;
                    $post [$i]["bookID"] = $r2->bookId;
                    $post [$i]["cartID"] = $r2->cartId;
                    $i++;
                }

            }
        }
        echo json_encode($post);
    }
    function loadBookInfo($bookID)
    {

         $sql = "SELECT * FROM `book` 
             WHERE `id` =". $bookID;
        $result = $this->db->query($sql);
        
        $i = 0;
        $post= array();

        foreach($result->result() as $rows)
        {
              $post [$i]["name"] = $rows->name;
              $post [$i]["publisher"] = $rows->publisher;
              $post [$i]["writer"] = $rows->writer;
              $post [$i]["publishedDate"] = $rows->publishedDate;
              $post [$i]["category"] = $rows->category;
              $post [$i]["price"] = $rows->price;


            $i++;
        }
         echo json_encode($post);


    }

}
?>
