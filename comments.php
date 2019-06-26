<?php
    $page = "comments";
    $title = "Montreal Comments Page";
    include "header.php";
 ?>

<?php

    /**
    * Connects to the database.
    * Return false if connection failed.
    * Cache Daddy clear cache code, never fails
    */

    // connect

    include "../../dbConn.php";

    if($conn){
        //If new data was sent in, put in db
        if(isset($_POST['name']) && isset($_POST['comment']) ){
            //put data in the db...
            $sql = "INSERT INTO project_comments (name, comment) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $_POST['name'], $_POST['comment']);
            //bind_param( type type, , )
			//takes the the user input and they put it into the database
            $stmt->execute();
            $stmt->close();
        }
    }
 ?>
    <div>
        <h2 class = "commentHeading">
            Add a Comment
        </h2>
    </div>
    <form action="comments.php" method="post" onsubmit="return validate();" style ="margin-left: 1em;">
         Username: <input type="text" id="name" name="name" /><br/>
         Comment: <textarea style = "width: 15em;" rows="5" cols="50" id="comment" name="comment"></textarea><br/>
         <input type="submit" value="Submit"/>
     </form>

     <div>
         <h2 class = "commentHeading">
             Comments
         </h2>
     </div>
     <table style ="margin-left: 1em;">
     <!--
         <tr><td>Joe: Hello, this is a comment</td></tr>
         <tr><td>Mary: comment comment comment</td></tr>
         <tr><td>Jack: Super big Comment</td></tr>
         <tr><td>Tyler: Last comment test</td></tr>
         <tr><td>Fred: Bruh</td></tr>
     -->
         <tr>
             <th>Name</th>
             <th>Comment</th>
         </tr>

         <?php
             if($conn){
                 $result=$conn->query("SELECT name, comment FROM project_comments");
                 if($result->num_rows > 0){
                     While($row = $result->FETCH_ASSOC()){
                         echo '<tr>';
                         echo '<td>' . $row['name'] . '</td>';
                         echo '<td>' . $row['comment'] . '</td>';
                         echo '</tr>';

                     }
                 }else{
                     echo 'No Results!';
                 }
             }
         ?>

     </table>
     <?php
        include "footer.php"
      ?>
</body>
