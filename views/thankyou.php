<?php 
    //include("http://safe-earth-80009.herokuapp.com/inc/connect.php");
    include("../inc/connect.php");
    $pageTitle = "Thank You!"; 

    include("header.php"); 
?>

<div class="section page">      <!-- class="section page">   -->
    <div align="center" class="">  <!-- // class ="wrapper">  -->
        <h1>Thank you! Your request is being processed.</h1>
    </div>

    <?php	
        $id=$_POST["id"];

        $fullName=$_POST['fullName'];
        $email=$_POST['email'];

        $projectRepo=$_POST['projectRepo'];
        $projectUrl=$_POST['projectUrl'];

        $oopSkills=$_POST['oopSkills'];
        $moddevSkills=$_POST['moddevSkills'];
        $fullstackSkills=$_POST['fullstackSkills'];
        $testingSkills=$_POST['testingSkills'];
        $dbSkills=$_POST['dbSkills'];
        $debugSkills=$_POST['debugSkills'];
        $probSkills=$_POST['probSkills'];
        $jsSkills=$_POST['jsSkills'];
        $htmlSkills=$_POST['htmlSkills'];
        $cssSkills=$_POST['cssSkills'];
        $teamSkills=$_POST['teamSkills'];
        $movationSkills=$_POST['movationSkills'];
        $commSkills=$_POST['commSkills'];
        $energySkills=$_POST['energySkills'];
        $intelliSkills=$_POST['intelliSkills'];

    echo '<div align="center">
            <h2>You have submitted this:</h2>
            <table>
                <tr><th>Name</th><td>'.$fullName.'</td></tr>
                <tr><th>Email</th><td>'.$email.'</td></tr>
                <tr><th>Project Repo</th><td>'.$projectRepo.'</td></tr>
                <tr><th>Project Url</th><td>'.$projectUrl.'</td></tr>
                <tr><th>OOP Best Practices</th><td>'.$oopSkills.'</td></tr>
                <tr><th>Modular Development</th><td>'.$moddevSkills.'</td></tr>
                <tr><th>Full-Stack Workflow</th><td>'.$fullstackSkills.'</td></tr>
                <tr><th>Testing</th><td>'.$testingSkills.'</td></tr>
                <tr><th>Database Knowledge</th><td>'.$dbSkills.'</td></tr>
                <tr><th>Debugging</th><td>'.$debugSkills.'</td></tr>
                <tr><th>Problem Solving</th><td>'.$probSkills.'</td></tr>
                <tr><th>Javascript</th><td>'.$jsSkills.'</td></tr>
                <tr><th>HTML</th><td>'.$htmlSkills.'</td></tr>
                <tr><th>CSS</th><td>'.$cssSkills.'</td></tr>
                <tr><th>Working on Teams</th><td>'.$teamSkills.'</td></tr>
                <tr><th>Self Motivation</th><td>'.$movationSkills.'</td></tr>
                <tr><th>Communication Skills</th><td>'.$commSkills.'</td></tr>
                <tr><th>Energy Level</th><td>'.$energySkills.'</td></tr>
                <tr><th>Intelligence / Aptitude</th><td>'.$intelliSkills.'</td></tr>
            </table></div>';


            $sql = "INSERT INTO public.trim_code (id,full_name, email, project_repo, project_url,
                                                oop_skills, mod_dev_skills, full_stack_skills, testing_skills, db_skills, 
                                                debug_skills, prob_solve_skills, javascript_skills, html_skills, css_skills,
                                                teamwork_skills, motivation_skills, communication_skills, energy_skills, intelli_skills
                                                )
	    			VALUES                      (?,?,?,?,?
                                                ?,?,?,?,?
                                                ?,?,?,?,?
                                                ?,?,?,?,?
                                                )
	    			";
	    	$pdo->prepare($sql)->execute([NULL,$fullName,$email,$projectRepo,$projectUrl,
                                        $oopSkills, $moddevSkills, $fullstackSkills, $testingSkills, $dbSkills,
                                        $debugSkills, $probSkills, $jsSkills, $htmlSkills, $cssSkills,
                                        $teamSkills, $movationSkills, $commSkills, $energySkills, $intelliSkills
                                        ]);
        //echo "dumping POST";
        //var_dump($_POST);

        //This shouldnt be there
        //if($report=='allUsers'){
 




    ?>

</div>


<?php include("footer.php");?>
