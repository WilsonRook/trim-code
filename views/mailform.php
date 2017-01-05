 <h1>If you would like to send these results, verify information, enter to address and send.</h1>

<form method="post" name="myemailform" action="http://safe-earth-80009.herokuapp.com/inc/sendmail.php">

        <p>
            <label for="fullName">Full Name</label>
            <input type="text" name="fullName" id="fullName" value="<?php if(isset($fullName)){echo $fullName; } ?>" />
        </p>
        <p>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($email)){echo $email; } ?>" />
        </p>
        <p>
            <label for="projectRepo">Project Repo</label>
            <input type="text" name="projectRepo" id="projectRepo" value="<?php if(isset($projectRepo)){echo $projectRepo; } ?>" />
        </p>
        <p>
            <label for="projectUrl">Project Url</label>
            <input type="text" name="projectUrl" id="projectUrl" value="<?php if(isset($projectUrl)){echo $projectUrl; } ?>" />
        </p>
                
                        
            </p>                    
                    <h3 align="center">The following must add to 50 points.</h3>	
            </p>


        <p>
            <label for="oopSkills">Using best practices for OOP</label>
            <input type="text" name="oopSkills" id="oopSkills" value="<?php if(isset($oopSkills)){echo $oopSkills; } ?>" />
        </p>
        <p>
            <label for="moddevSkills">Modular development</label>
            <input type="text" name="moddevSkills" id="moddevSkills" value="<?php if(isset($moddevSkills)){echo $moddevSkills; } ?>" />
        </p>
        <p>
            <label for="fullstackSkills">Full-stack workflow understanding</label>
            <input type="text" name="fullstackSkills" id="fullstackSkills" value="<?php if(isset($fullstackSkills)){echo $fullstackSkills; } ?>" />
        </p>
        <p>
            <label for="testingSkills">Testing</label>
            <input type="text" name="testingSkills" id="testingSkills" value="<?php if(isset($testingSkills)){echo $testingSkills; } ?>" />
        </p>
        <p>
            <label for="dbSkills">Database knowledge</label>
            <input type="text" name="dbSkills" id="dbSkills" value="<?php if(isset($dbSkills)){echo $dbSkills; } ?>" />
        </p>
        <p>
            <label for="debugSkills">Debugging</label>
            <input type="text" name="debugSkills" id="debugSkills" value="<?php if(isset($debugSkills)){echo $debugSkills; } ?>" />
        </p>
        <p>
            <label for="probSkills">Problem solving skills</label>
            <input type="text" name="probSkills" id="probSkills" value="<?php if(isset($probSkills)){echo $probSkills; } ?>" />
        </p>
        <p>
            <label for="jsSkills">Javascript</label>
            <input type="text" name="jsSkills" id="jsSkills" value="<?php if(isset($jsSkills)){echo $jsSkills; } ?>" />
        </p>
        <p>
            <label for="htmlSkills">HTML</label>
            <input type="text" name="htmlSkills" id="htmlSkills" value="<?php if(isset($htmlSkills)){echo $htmlSkills; } ?>" />
        </p>
        <p>
            <label for="cssSkills">CSS</label>
            <input type="text" name="cssSkills" id="cssSkills" value="<?php if(isset($cssSkills)){echo $cssSkills; } ?>" />
        </p>
        <p>
            <label for="teamSkills">Working on a team</label>
            <input type="text" name="teamSkills" id="teamSkills" value="<?php if(isset($teamSkills)){echo $teamSkills; } ?>" />
        </p>
        <p>
            <label for="movationSkills">Self motivation</label>
            <input type="text" name="movationSkills" id="movationSkills" value="<?php if(isset($movationSkills)){echo $movationSkills; } ?>" />
        </p>
        <p>
            <label for="commSkills">Communications skills</label>
            <input type="text" name="commSkills" id="commSkills" value="<?php if(isset($commSkills)){echo $commSkills; } ?>" />
        </p>
        <p>
            <label for="energySkills">Your own energy level</label>
            <input type="text" name="energySkills" id="energySkills" value="<?php if(isset($energySkills)){echo $energySkills; } ?>" />
        </p>
        <p>
            <label for="intelliSkills">Intelligence / Aptitude</label>
            <input type="text" name="intelliSkills" id="intelliSkills" value="<?php if(isset($intelliSkills)){echo $intelliSkills; } ?>" />
        </p>


        <p>
            <label for="tomail">Send to this email:</label>
            <input type="text" name="tomail">
        </p>

         <p>
            <label for="message">Enter Message: </label>
            <textarea name="message"></textarea>
         </p>

<input type="submit" value="Send Form">
</form>