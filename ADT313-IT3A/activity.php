<h1>Hands-on Actvity #2</h1>

<?php
    $table = array(
        "header"=>array(
            "StudentID",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Course",
            "Yearlevel"
        ),
        "body"=> array(
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 )
        ),
    )
?>

<table border="1">
    <thead>
        <?php
            for($header = 0; $header <= count ($table["header"]) - 1; $header++){
                echo "<th>".$table["header"][$header]."</th>";
            }
        ?>
    <thead>
    <body>
        <?php
            for($row = 0; $row <= count ($table["body"]) - 1; $row++){
                echo "<tr>";
                echo "<td>".$row."</td>";
                echo "<td>".$table["body"][$header]["firstname"]."</td>";
                echo "<td>".$table["body"][$header]["middlename"]."</td>";
                echo "<td>".$table["body"][$header]["lastname"]."</td>";
                echo "<td>".$table["body"][$header]["section"]."</td>";
                echo "<td>".$table["body"][$header]["course"]."</td>";
                echo "<td>".$table["body"][$header]["yearlevel"]."</td>";
                echo"<tr>";
            }
        ?>
    <body>
<table>              
       
  


