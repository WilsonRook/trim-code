<form method="post" action="public/create.php">
			
			<p>
				<label for="fullName">Full Name</label>
				<input type="text" name="fullName" id="fullName" value="" />
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="" />
			</p>
			<p>
				<label for="projectRepo">Project Repo</label>
				<input type="text" name="projectRepo" id="projectRepo" value="" />
			</p>
			<p>
				<label for="projectUrl">Project Url</label>
				<input type="text" name="projectUrl" id="projectUrl" value="" />
			</p>
            		
                         
                </p>                    
                        <h3 align="center">The following must add to 50 points.</h3>	
                </p>


			<p>
				<label for="oopSkills">Using best practices for OOP</label>
				<input type="text" name="oopSkills" id="oopSkills" value="" />
			</p>
			<p>
				<label for="moddevSkills">Modular development</label>
				<input type="text" name="moddevSkills" id="moddevSkills" value="" />
			</p>
			<p>
				<label for="fullstackSkills">Full-stack workflow understanding</label>
				<input type="text" name="fullstackSkills" id="fullstackSkills" value="" />
			</p>
			<p>
				<label for="testingSkills">Testing</label>
				<input type="text" name="testingSkills" id="testingSkills" value="" />
			</p>
			<p>
				<label for="dbSkills">Database knowledge</label>
				<input type="text" name="dbSkills" id="dbSkills" value="" />
			</p>
			<p>
				<label for="debugSkills">Debugging</label>
				<input type="text" name="debugSkills" id="debugSkills" value="" />
			</p>
			<p>
				<label for="probSkills">Problem solving skills</label>
				<input type="text" name="probSkills" id="probSkills" value="" />
			</p>
			<p>
				<label for="jsSkills">Javascript</label>
				<input type="text" name="jsSkills" id="jsSkills" value="" />
			</p>
			<p>
				<label for="htmlSkills">HTML</label>
				<input type="text" name="htmlSkills" id="htmlSkills" value="" />
			</p>
			<p>
				<label for="cssSkills">CSS</label>
				<input type="text" name="cssSkills" id="cssSkills" value="" />
			</p>
			<p>
				<label for="teamSkills">Working on a team</label>
				<input type="text" name="teamSkills" id="teamSkills" value="" />
			</p>
			<p>
				<label for="movationSkills">Self motivation</label>
				<input type="text" name="movationSkills" id="movationSkills" value="" />
			</p>
			<p>
				<label for="commSkills">Communications skills</label>
				<input type="text" name="commSkills" id="commSkills" value="" />
			</p>
			<p>
				<label for="energySkills">Your own energy level</label>
				<input type="text" name="energySkills" id="energySkills" value="" />
			</p>
			<p>
				<label for="intelliSkills">Intelligence / Aptitude</label>
				<input type="text" name="intelliSkills" id="intelliSkills" value="" />
			</p>


			<p style="display:none">
				<label for="id">id</label>
				<input type="text" name="id" id="id" 
				value="<?php if(isset($id)){echo $id; } ?>" />
			</p>

			<input type="submit" value="Send">

		</form>