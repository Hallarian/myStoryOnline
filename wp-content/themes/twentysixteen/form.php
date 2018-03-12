<div id="background">
<form id="newStory" method="post" name="new_story" action="">
    <a class="btn back" id="stepBack">< Back</a>

    <ul id="progressBar">
      <li class="current active">Theme <br> <span class="progress">&#8226;</span></li>
      <li>Title <br> <span class="progress">&#8226;</span></li>
      <li>Dedication <br> <span class="progress">&#8226;</span></li>
      <li>Writing <br> <span class="progress">&#8226;</span></li>
      <li>Preview <br> <span class="progress">&#8226;</span></li>
      <li>Share <br> <span class="progress">&#8226;</span></li>
      <!-- <li>Save <br> <span class="progress">&#8226;</span></li> -->
    </ul>

    <a class="btn next" id="stepNext">Next ></a>


    <div id="fieldsets">


      <fieldset class="current" id="theme_step">
        <legend>Starting a new story? <br>
        <span class="subheading">Choose a theme that fits your story.</span></legend>
        <div>
        <div class="theme">
          <input name="theme" type="radio" value="memory" id="theme_memory">
            <label class="select" for="theme_memory">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/memory.png">
              <h3>Memory</h3>
              <p>Think about a memorable moment, time, or place where you can imagine it like it was yesterday. Think of the good old days.</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="recipe" id="theme_recipe">
            <label class="select" for="theme_recipe">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/recipe.png">
              <h3>Recipe</h3>
              <p>Some recipes are a little more special and deserve a little background information. Why exactly is the recipe so sacred?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="travel" id="theme_travel">
            <label class="select" for="theme_travel">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/travel.png">
              <h3>Travel</h3>
              <p>Traveling on an adventure is an amazing experience. Where have you gone? What have you seen? Where do you want to go?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="sports" id="theme_sports">
            <label class="select" for="theme_sports">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/sports.png">
              <h3>Sports</h3>
              <p>Some of the greatest stories come from sports. Did you ever play on a team? What games have you been to?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="bed time" id="theme_bed_time">
            <label class="select" for="theme_bed_time">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/bed_time.png">
              <h3>Bed Time</h3>
              <p>Bed time stories are anything you want them to be, or maybe it's a story you remember from your childhood?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="vacations" id="theme_vacations">
            <label class="select" for="theme_vacations">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/vacations.png">
              <h3>Vacations</h3>
              <p>Some of the best times are had on vacation. Where have you gone? Somewhere relaxing or exotic?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="public service" id="theme_public_service">
            <label class="select" for="theme_public_service">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/public_service.png">
              <h3>Public Service</h3>
              <p>Have you ever served the public in some way? Is there a story behind your service? What service did you provide?</p>
            </label>
        </div>

        <div class="theme">
          <input name="theme" type="radio" value="family history" id="theme_family_history">
            <label class="select" for="theme_family_history">
              <img src="http://mystoryonline.org/wp-content/themes/twentysixteen/images/family_history.png">
              <h3>Family History</h3>
              <p>Family histories are very important and should be well documented. What're the stories your family loves?</p>
            </label>
        </div>
        </div>
      </fieldset>




      <fieldset class="next" id="title_step">
        <legend>All stories need a title. <br>
        <span class="subheading">Enter the title of your story in the box below.</span></legend>
        <div id="title_book">
          <input name="title" type="text" placeholder="Enter title:" id="title">
          <p>*24 character maximum</p>
          <a class="btn next" id="save_title">Save Title</a>
          <h2>Author Name</h2>
        </div>
      </fieldset>




      <fieldset class="next" id="dedication_step">
        <legend>Would you like to dedicate this story? <br>
        <span class="subheading">If you don't want to, just "skip to writing story".</span></legend>
        <div>
        <div id="dedication_left">
          <textarea name="dedication" id="dedication" placeholder="Enter dedication here:"></textarea>
          <a class="btn" id="save_dedication">Save Dedication</a>
        </div>

        <div id="dedication_right">
          <p>If you don't want to dedicate this story you can skip straight to writing</p>
          <a class="btn next" id="skip">Skip to writing story</a>
        </div>
        </div>
      </fieldset>





      <fieldset class="next" id="writing_step">
        <legend>It's time to start writing your story <br>
        <span class="subheading">Begin by clicking in the textbox below</span></legend>
        <div>
        <p>Title: Story Title
        <br>
        Dedication: Story Dedication</p>
        <textarea name="story" placeholder="Start writing here:"></textarea>
        <p style="color: #1C9D45; font-size: .75em; width: 35%; margin: auto;">When you've finished writing your story, preview it to make sure it looks the way you want.</p>
        <a class="btn next" id="preview_story">Preview Story</a>
        </div>
      </fieldset>





      <fieldset class="next" id="preview_step">
        <legend>Take a second to preview your story before sharing.<br>
        <span class="subheading">If you want to add pictures to your story use the 'Add image' button to place them between pages.</span></legend>

        <div id="preview_options">
          <a class="btn back">< Back to Writing</a>
          <a class="btn" id="add_image"> Add Image + </a>
          <a class="btn next"> Save Story ></a>
        </div>

        <div id="preview">
          <div id="preview_left">
            <h2>Your dedication here</h2>
          </div>

          <div id="preview_right">
            <p>Your story here</p>
          </div>
        </div>

        <a class="story_pagination" id="pageBack">< Previous Page</a>
        <a class="story_pagination" id="pageNext">Next Page ></a>
      </fieldset>





      <fieldset class="next" id="share_step">
        <legend>Do you want anyone else to see this story? <br>
        <span class="subheading">Select one of the options below.</span></legend>
        <div>
        <div id="share_left">
          <h2 style="width: 100%;">Your Title Here</h2>
          <h3 style="width: 100%;">Author Name</h3>
        </div>
        <div id="share_right">
          <input name="sharing" type="radio" class="sharing" value="Just Me" id="just_me">
            <label class="select" for="just_me">
              <p>Only I can see this story</p>
              <a class="btn">Just Me</a>
            </label>
          <input name="sharing" type="radio" class="sharing" value="My Contacts" id="my_contacts">
            <label class="select" for="my_contacts">
              <p>My contacts can see this story</p>
              <a class="btn">My Contacts</a>
            </label>
          <input name="sharing" type="radio" class="sharing" value="Public" id="public">
            <label class="select" for="public">
              <p>Anyone can see this story</p>             
              <a class="btn">Public</a>
            </label>
        </div>
        </div>
      </fieldset>



      <!--
      <fieldset class="next" id="save_step">
        <legend>Your story is looking great!<br>
        <span class="subheading">When everything looks okay to you, click 'Save Story'</span></legend>
        <div id="story_details">
        <h3>Story Title: title</h3>
        <h3>Dedication: dedication</h3>
        <hr>
        <h4>Writing: <strong>X Pages</strong></h4>
          <a class="btn hidden" id="back_to_writing"> < Back to Writing</a>
        <h4>Images: <strong>Y Pictures</strong></h4>
          <a class="btn hidden" id="back_to_image"> < Back to Add Image</a>
        <h4>Share: <strong>Z Sharing</strong></h4>
        </div>
      </fieldset> -->

      <input type="submit" name="story_submit" class="hidden btn next" id="submit">
    </div>
  </form>
  </div>
