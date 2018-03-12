<div id="background">
<form id="newStory" method="post" name="new_story" action="" onsubmit="return validateForm()">
    <a href="http://mystoryonline.org/my-profile/<?php $current_user->user_login?>/" class="btn exit" id="exit">Exit Story Maker X</a>

    <div id="progressBar">
      <a class="btn progress current" onclick="goToSection(0)">Step 1:<br>Choose a Theme</a>
        <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_right.png">
      <a class="btn progress" onclick="goToSection(1)">Step 2:<br>Write Your Story</a>
        <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_right.png">
      <a class="btn progress" onclick="goToSection(2)">Step 3:<br>Title and Dedication</a>
        <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_right.png">
      <a class="btn progress" onclick="goToSection(3)">Step 4:<br>Save and Share</a>
    </div>

    <a class="btn back" id="stepBack"><img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_left.png"> Back</a>
    <a class="btn next" id="stepNext">Next <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/arrow_right.png"></a>


    <div id="fieldsets">


      <fieldset class="current" id="theme_step">
        <legend>Starting a new story? <br>
        <span class="subheading">Choose a theme that fits your story.</span></legend>
        <div>
        <div class="theme">
          <input name="category" type="radio" value="22" id="theme_memory" <?php echo ($category[0]->name=='Memory')?'checked':'' ?> >
            <label class="select" for="theme_memory">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/memory.png">
              <h3>Memory</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="23" id="theme_recipe" <?php echo ($category[0]->name=='Recipe')?'checked':'' ?> >
            <label class="select" for="theme_recipe">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/recipe.png">
              <h3>Recipe</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="24" id="theme_travel" <?php echo ($category[0]->name=='Travel')?'checked':'' ?> >
            <label class="select" for="theme_travel">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/travel.png">
              <h3>Travel</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="25" id="theme_sports" <?php echo ($category[0]->name=='Sports')?'checked':'' ?> >
            <label class="select" for="theme_sports">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/sports.png">
              <h3>Sports</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="26" id="theme_bed_time" <?php echo ($category[0]->name=='Bed Time')?'checked':'' ?> >
            <label class="select" for="theme_bed_time">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/bed_time.png">
              <h3>Bed Time</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="27" id="theme_vacations" <?php echo ($category[0]->name=='Vacations')?'checked':'' ?> >
            <label class="select" for="theme_vacations">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/vacations.png">
              <h3>Vacations</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="28" id="theme_public_service" <?php echo ($category[0]->name=='Public Service')?'checked':'' ?> >
            <label class="select" for="theme_public_service">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/public_service.png">
              <h3>Public Service</h3>
            </label>
        </div>

        <div class="theme">
          <input name="category" type="radio" value="29" id="theme_family_history" <?php echo ($category[0]->name=='Family History')?'checked':'' ?> >
            <label class="select" for="theme_family_history">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/family_history.png">
              <h3>Family History</h3>
            </label>
        </div>
        </div>
      </fieldset>




      <fieldset class="hidden" id="writing_step">
        <legend>It's time to start writing your story <br>
        <span class="subheading">Start writing your story by clicking inside the box below. </span></legend>
        <div>
          <textarea id="story" name="story" placeholder="Start writing story here:"><?php echo $story ?></textarea>
        </div>
      </fieldset>



      <fieldset class="hidden" id="title_step">
        <legend>Time to think of a title!<br>
        <span class="subheading">Dedicating the story is optional but encouraged.</span></legend>
        <div id="title_book">
          <input name="title" type="text" placeholder="Enter title:" value="<?php echo $title; ?>" id="title" maxlength="24">
          <p>*24 character maximum</p>
          <textarea name="dedication" id="dedication" placeholder="Enter your dedication: (Optional)" maxlength="50"><?php echo $dedication[0]; ?></textarea>
          <p>*50 character maximum</p>
        </div>
      </fieldset>





      <fieldset class="hidden" id="share_step">
        <legend>Who should this story be shared with? <br>
        <span class="subheading">Select who you'd ike to share with and then "Save" your story.</span></legend>
        <div>
          <div>
            <input name="sharing" type="radio" class="sharing" value="Private" id="private" <?php echo ($sharing[0]=='Private')?'checked':'' ?>>
              <label class="select" for="private">
                <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/just_me.png">
                <a class="btn">Only I can see this story</a>
              </label>
          </div>
          <div>
            <input name="sharing" type="radio" class="sharing" value="My Contacts" id="my_contacts" <?php echo ($sharing[0]=='My Contacts')?'checked':'' ?> >
              <label class="select" for="my_contacts">
                <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/contacts.png">
                <a class="btn">My contacts can see this story</a>
              </label>
          </div>
          <div>
            <input name="sharing" type="radio" class="sharing" value="Public" id="public" <?php echo ($sharing[0]=='Public')?'checked':'' ?> >
              <label class="select" for="public">
                <img src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/images/anyone.png">
                <a class="btn">Anyone can see this story</a>
              </label>
          </div>
        </div>
      </fieldset>



      <input type="submit" name="story_submit" class="hidden btn next" id="submit">
    </div>
  </form>
  </div>
