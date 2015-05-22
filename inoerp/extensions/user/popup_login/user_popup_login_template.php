<?php
include_once __DIR__ . '/../../../includes/basics/basics.inc';
$user = new user();
$user_role = new user_role();
$user_password_reset = new user_password_reset();
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user"></i> Login / Register</button>

<!-- Modal -->
<div class="modal fade login-form" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-body">
    <div id ="form_header">
     <div id="tabsLine">
      <ul class="tabMain">
       <li><a href="#tabsLine-1">User Login</a></li>
       <li><a href="#tabsLine-2">New Account</a></li>
       <li><a href="#tabsLine-3">Password Reset</a></li>
       <li><a href="#tabsLine-4">Role Request</a></li>
      </ul>
      <div class="tabContainer"> 

       <div id="tabsLine-1" class="tabContent">
        <div class="col-md-8"> 
         <form name="user_login" action="<?php echo HOME_URL ?>extensions/user/user_login.php" method="post" id="user_login">
          <ul class="single-column">
           <li><label>User Name</label>
            <input type="text" name="username" maxlength="50" size="30" id="username" placeholder="example : sachin.god"
                   value="<?php echo ($user->username); ?>"> 
           </li> 
           <li><label>Password</label>
            <input type="password" name="password" maxlength="50" size="30" id="password" placeholder="example : uVrt@%35"
                   value="<?php echo ($user->password); ?>" >
           </li>
           <li><?php $f->l_select_field_from_object('user_language', user::all_languages(), 'option_line_code', 'description', $user->user_language, 'user_language'); ?>  </li>
           <li><label></label><input type="submit" name="submitLogin" class="button btn btn-success" value="Log in">
            <input type="button" name="cancelLogin" id="cancelLogin" class="button btn btn-warning" value="Cancel & Go Back"></li>
          </ul>
         </form>
        </div>
        <div class="col-md-4"> 
         <?php echo extn_social_login::sl_stmt(); ?>
        </div>

       </div>


       <div id="tabsLine-2" class="tabContent">
        <div id="create_new_user" class="col-md-8">
         <form action="<?php HOME_URL ?>extensions/user/user_login.php" method="post" id="user_header" name="user_header">
          <ul class="single-column"><li><label>First Name</label><?php echo form::text_field('first_name', $user->first_name); ?></li>
           <li><label>Last Name</label><?php echo form::text_field('last_name', $user->last_name); ?></li>
           <li><label>Username</label><?php echo form::text_field('username', $user->username); ?></li>
           <li><label>e-Mail ID</label><?php echo form::text_field('email', $user->email); ?></li>
           <li><label>Password</label><input type="password" name="enteredPassword[]" maxlength="50" id="enteredPassword" size="30" >
            <!--<span class="hint">(Min 8 letter, 1 small, 1 CAP, 1 <i>Special</i>)</span>
            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
            -->
           </li>
           <li><label>Confirm Password</label><input type="password" name="enteredRePassword[]" maxlength="50" id="enteredRePassword" size="30" ></li>
           <li><label>Phone</label><?php echo form::number_field('phone', $user->phone); ?></li>
           <li><label></label><input type="submit" name="newUser" class="button btn btn-success" value="Create Account"></li>
          </ul>
          <!--<input type="hidden" class="hidden" name='submit_user' value='1'>-->

         </form>
        </div>
        <div class="col-md-4"> 
         <?php echo extn_social_login::sl_stmt(); ?>
        </div>
       </div>

       <div id="tabsLine-3" class="tabContent">
        <form action=" " method="post" id="user_reset_password_onPage" name="user_reset_password_onPage">
         <ul class="single-column">
          <li><label>User Name</label>
           <input type="text" name="username" maxlength="50" size="30" id="username" placeholder="example : sachin.god"
                  value="<?php echo ($user_password_reset->username); ?>"> 
          </li> 
          <li><label></label> Or </li>
          <li><label>eMail</label>
           <input type="email" name="email" maxlength="50" size="30" id="reset_password_email" placeholder="abc@xyz.xom"
                  value="<?php echo ($user_password_reset->email); ?>"> 
          </li> 
          <li><label></label><input type="submit" name="resetPassword" class="button btn btn-success" value="Send New Password"></li>
         </ul>
         <!--<input type="hidden" class="hidden" name='submit_user' value='1'>-->
        </form>
       </div>
       <div id="tabsLine-4" class="tabContent">

       </div>
      </div>
     </div>
    </div>    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <!--    <button type="button" class="btn btn-primary">Save changes</button>-->
   </div>
  </div>
 </div>
</div>


