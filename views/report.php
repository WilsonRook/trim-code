<?php 
    //include("http://safe-earth-80009.herokuapp.com/inc/connect.php");
    include("../inc/connect.php");
    $pageTitle = "Reports"; 

    include("header.php"); 
?>

<div class="section page">      <!-- class="section page">   -->
    <div align="center" class="">  <!-- // class ="wrapper">  -->
        <h1>Below: The contents of the database.</h1>
    </div>

    <?php
           $results = $pdo->prepare(
                "SELECT * 
                FROM public.trim_code 
                ");
            $results->execute([]);

            //var_dump($results);
                //object(PDOStatement)#47 (1) { ["queryString"]=> string(65) "SELECT * FROM public.trim_code " }
            
            //$result = $sth->fetch();
            $lines= $results->fetchAll(PDO::FETCH_ASSOC);


            echo '<div align="center">
                    <h2>Entire Database</h2>
                    <table><tr>
                        <th>Name</th><th>Email</th><th>Project Repo</th><th>Project Url</th>
                        <th>OOP Best Practices</th><th>Modular Development</th><th>Full-Stack Workflow</th><th>Testing</th><th>Database Knowledge</th>
                        <th>Debugging</th><th>Problem Solving</th><th>Javascript</th><th>HTML</th><th>CSS</th>
                        <th>Working on Teams</th><th>Self Motivation</th><th>Communication Skills</th><th>Energy Level</th><th>Intelligence / Aptitude</th>
                        </tr>';
                foreach ($lines as $line){
                    //print_r($line);
                    echo  '<tr><td>'.$line["full_name"].'</td><td>'
                                    .$line["email"].'</td><td>'
                                    .$line["project_repo"].'</td><td>'
                                    .$line["project_url"].'</td><td>'
                                    .$line["oop_skills"].'</td><td>'
                                    .$line["mod_dev_skills"].'</td><td>'
                                    .$line["full_stack_skills"].'</td><td>'
                                    .$line["testing_skills"].'</td><td>'
                                    .$line["db_skills"].'</td><td>'
                                    .$line["debug_skills"].'</td><td>'
                                    .$line["prob_solve_skills"].'</td><td>'
                                    .$line["javascript_skills"].'</td><td>'
                                    .$line["html_skills"].'</td><td>'
                                    .$line["css_skills"].'</td><td>'
                                    .$line["teamwork_skills"].'</td><td>'
                                    .$line["motivation_skills"].'</td><td>'
                                    .$line["communication_skills"].'</td><td>'
                                    .$line["energy_skills"].'</td><td>'
                                    .$line["intelli_skills"].
                        '</td></tr>';
                }
            echo '</table></div>';




    ?>

</div>


<?php include("footer.php");?>