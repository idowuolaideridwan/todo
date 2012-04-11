<?php include "todo-core.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo(TodoConstants::AppName); ?></title>
    <!-- JQuery & JQuery UI -->
    <script src="jquery/jquery-1.6.2.min.js"></script>
    <link  href="jquery/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css"/>
    <script src="jquery/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="log.js.php"></script>
    <script type="text/javascript" src="todo.js"></script>
    <link rel="stylesheet" type="text/css" href="todo.css" />
 </head>
  <body>
    <div id="smallLog"><?php echo(TodoLang::_("STARTING_LOG"));?></div>
    <div id="logLink"><a href="javascript:toggleLog()"><?php echo(TodoLang::_("SHOW_LOG"));?></a></div>
    <div id="working"><?php echo(TodoLang::_("WORKING"));?></div>
    <div id="statistiklink"><a href="statistik.php"><?php echo(TodoLang::_("SHOW_STATISTICS"));?></a></div>
    <h1><?php echo(TodoConstants::AppTitle); ?></h1>
    <div id="progress"><span id="progress_done">&nbsp;</span><span id="progress_todo">&nbsp;</span><span id="progress_status"><?php echo(TodoLang::_("DONE"));?>: 0% <?php echo(TodoLang::_("OPEN"));?>: 0</span></div>
    <form method="POST" onsubmit="return false;" id="inputform">
      <div class="line line_header">
        <span class="todo"><?php echo(TodoLang::_("TODO"));?> <input type="image" src="images/refresh.png" name="refresh" value="refresh" onclick="refresh()" />
</span><span class="due"> <?php echo(TodoLang::_("DUE"));?></span><span class="priority"><?php echo(TodoLang::_("PRIORITY"));?></span>
      </div>
      <div class="line line_input">
        <span class="todo"><input type="text" id="enter_todo" name="enter_todo" size="60" maxlength="255" /></span><span class="due"><input type="text" id="enter_due" name="enter_due" size="10" maxlength="20" /></span><span class="priority"><input type="text" id="enter_priority" name="enter_priority" size="3" maxlength="4" /></span><span class="actions"><input type="image" src="images/Add.png" name="save" value="<?php echo(TodoLang::_("SAVE"));?>" onclick="enter()" /></span>
      </div>
    </form>
    <div id="todoTable">
    </div>
    <div id="modify_dialog" style="display:none;">
      <form method="POST" onsubmit="return false;" id="inputform">
        <input type="hidden" id="modify_id" name="modify_id" />
        <div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("TODO"));?>: </span>
          <input type="text" id="modify_todo" name="modify_todo" size="60" maxlength="255" />
        </div><div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("DUE"));?>: </span>
          <input type="text" id="modify_due" name="modify_due" size="10" maxlength="20" />
        </div><div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("PRIORITY"));?>:</span>
          <input type="text" id="modify_priority" name="modify_priority" size="3" maxlength="4" />
        </div><div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("RECURRENCE"));?>:</span>
          <select name="modify_recurrenceMode" id="modify_recurrenceMode">
            <option value="0"><?php echo(TodoLang::_("DONT_REPEAT"));?></option>
            <option value="7"><?php echo(TodoLang::_("REPEAT_WEEKLY"));?></option>
            <option value="14"><?php echo(TodoLang::_("REPEAT_BIWEEKLY"));?></option>
            <option value="30"><?php echo(TodoLang::_("REPEAT_MONTHLY"));?></option>
            <option value="60"><?php echo(TodoLang::_("REPEAT_BIMONTHLY"));?></option>
            <option value="91"><?php echo(TodoLang::_("REPEAT_QUARTERLY"));?></option>
            <option value="121"><?php echo(TodoLang::_("REPEAT_THIRDOFYEARLY"));?></option>
            <option value="182"><?php echo(TodoLang::_("REPEAT_HALFYEARLY"));?></option>
            <option value="365"><?php echo(TodoLang::_("REPEAT_YEARLY"));?></option>
          </select>
        </div><div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("NOTES"));?>:</span>
          <textarea type="text" id="modify_notes" name="modify_notes" rows="10" cols="50"></textarea>
        </div><div class="modify_line">
          <span class="modify_desc"><?php echo(TodoLang::_("PROJECT"));?>:</span>
          <input type="text" id="modify_project" name="modify_project" size="60" maxlength="255" />
        </div>
        <input type="image" src="images/pencil.png" name="modify_save" id="modify_save" value="<?php echo(TodoLang::_("SAVE"));?>" />
      </form>
    </div>
    <div id="log_dialog" style="display:none">
    </div>
  </body>
</html>

