<?php
require('head.php');
?>

    <ul id="slide-out" class="side-nav fixed indigo darken-1">
          <a href="#!" class="white-text">Grace Scintiche</a>
          <a href="#!"><img src="css/images/gr.PNG" class="circle reponsive-img" width="180px" height="180px"></a>
      </br>
      </br>
      </br></br></br></br>
      <li><a href="manager.php?page=issue" class="white-text"><i class="material-icons prefix">launch</i> Issue Books</a></li>
      <li><a href="manager.php?page=return" class="white-text"><i class="material-icons prefix">system_update_alt</i> Return Books</a></li>
      <li><a href="manager.php?page=create" class="white-text"> <i class="material-icons prefix">supervisor_account</i> studentAccount</a></li>
      <li><a href="manager.php?page=add" class="white-text"><i class="material-icons prefix">library_add</i> Add Books</a></li>
      <li><a href="manager.php?page=remove" class="white-text"><i class="material-icons prefix"> delete</i> Remove Books</a></li>
      <li><a href="manager.php?page=report" class="white-text"> <i class="material-icons prefix">library_books</i>  Report</a></li>
      <li><a href="login.php" class="white-text"><i class="material-icons prefix">person</i> Logout</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
  
    </br>
    <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        require($page.'.php');
      }
      else
        require('search.php')
    ?>
