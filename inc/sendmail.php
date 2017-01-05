<?php



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

 
        $email_from = $email;

        $email_subject = "New Trim Code Challenge Submission - Wilson Rook";
 
        $email_body = 'You have received a new message from the user'.$fullname.'\n
                        Here is the message:\n '.$message.'
                           
                Name: '.$fullName.'\n
                Email: '.$email.'\n
                Project Repo: '.$projectRepo.'\n
                Project Url: '.$projectUrl.'\n
                OOP Best Practices: '.$oopSkills.'\n
                Modular Development: '.$moddevSkills.'\n
                Full-Stack Workflow: '.$fullstackSkills.'\n
                Testing: '.$testingSkills.'\n
                Database Knowledge: '.$dbSkills.'\n
                Debugging: '.$debugSkills.'\n
                Problem Solving: '.$probSkills.'\n
                Javascript: '.$jsSkills.'\n
                HTML: '.$htmlSkills.'\n
                CSS: '.$cssSkills.'\n
                Working on Teams: '.$teamSkills.'\n
                Self Motivation: '.$movationSkills.'\n
                Communication Skills: '.$commSkills.'\n
                Energy Level: '.$energySkills.'\n
                Intelligence / Aptitude: '.$intelliSkills
                ;

        $to = $_POST['tomail'];
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $email_from \r\n";

        //Send the email!
        mail($to,$email_subject,$email_body,$headers);
        //done. redirect to thank-you page.
        header('Location: http://safe-earth-80009.herokuapp.com/views/emailsent.php');
        
?>




