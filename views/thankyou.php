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
        $moddevSkills=$_POST['moddevSkills'];
        $fullstackSkills=$_POST['fullstackSkills'];
        $testingSkills=$_POST['testingSkills'];
        $dbSkills=$_POST['dbSkills'];
        $debugSkills=$_POST['debugSkills'];
        $probSkills=$_POST['probSkills'];
        $jsSkills=$_POST['jsSkills'];
        $htmlSkills=$_POST['htmlSkills'];
        $teamSkills=$_POST['teamSkills'];
        $movationSkills=$_POST['movationSkills'];
        $commSkills=$_POST['commSkills'];
        $energySkills=$_POST['energySkills'];
        $intelliSkills=$_POST['intelliSkills'];

        //echo "dumping POST";
        //var_dump($_POST);

        //This shouldnt be there
        //if($report=='allUsers'){
 




    ?>

</div>


<?php include("footer.php");?>
