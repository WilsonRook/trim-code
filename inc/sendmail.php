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
 
        $email_body = "You have received a new message from the user $fullname.\n
                            Here is the message:\n $message
                            <div align="center">
            <h2>$fullName has submitted this:</h2>
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

        $to = $_POST['tomail'];
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $email_from \r\n";

        //Send the email!
        mail($to,$email_subject,$email_body,$headers);
        //done. redirect to thank-you page.
        header('Location: emailsent.php');
        
?>




