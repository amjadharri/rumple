<?php 
require_once('db.php');
$db = new connect();

class operations extends connect
{
public function fetch_record()
{
	global $db;

		$query = "   select u.id as user_id, u.first_name,u.last_name, tu.team_id, t.name,
        GROUP_CONCAT(t.name) as 'team'
            from users u
            left join teams_users tu
            on tu.user_id = u.id
            left join teams t
            on tu.team_id = t.id
            where 1
            GROUP BY u.id
            order by u.id ASC";
        $result = mysqli_query($db->conn,$query);
        return $result;

        if($query === FALSE) 
        { 
            die(mysqli_error()); //  better error handling
        }
	}

}

?>