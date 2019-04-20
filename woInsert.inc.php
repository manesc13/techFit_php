<?php
  session_start();
  // check for proper navigation
  if(isset($_POST['Reg-Form'])){
    require_once 'dbh_wo.inc.php';
    // retrieve input (wo_name, wo_group, wo_gif)
    $wo_name = $_POST['wo-Name'];
    $wo_group = $_POST['wo-Group'];
    // form validation: ensure that the form is correctly filled ...
    // ERROR: empty fields
    if(empty($wo_name) || empty($wo_group)){
      header("Location: ../../woInsert.php?error=emptyfields");
      exit();
    }
    // ERROR: wo exists
    // SUCCESS: valid input --> check wo record --> add wo
    else {
      // prepare statement: SELECT
      // dbTable wo_list(wo_id, wo_name, wo_group, wo_gif)
      $sql = "SELECT * FROM wo_list WHERE wo_name=?";
      $stmt = mysqli_stmt_init($db);
      // check for failure
      if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../../woInsert.php?error=sqlerror");
        exit();
      }
      // CONTINUE: execute SELECT
      else {
        mysqli_stmt_bind_param($stmt, "s", $wo_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        // ERROR: username exists 'usernametaken'
        if ($resultCheck > 0){
          header("Location: ../../woInsert.php?error=wo_nametaken");
          exit();
        }
        // SUCCESS: register, authenticate
        else {
          switch ($wo_group) {
            case 'chest':
              $wo_group = 1;
              break;
            case 'back':
              $wo_group = 2;
              break;
            case 'shoulders':
              $wo_group = 3;
              break;
            case 'traps':
              $wo_group = 4;
              break;
            case 'triceps':
              $wo_group = 5;
              break;
            case 'biceps':
              $wo_group = 6;
              break;
            case 'legs':
              $wo_group = 7;
              break;
            case 'abs':
              $wo_group = 8;
              break;
            case 'forearms':
              $wo_group = 9;
              break;
            case 'full body':
              $wo_group = 10;
              break;
            default:
              header("Location: ../../woInsert.php?error=wo_group");
              break;
          }
          // prepare statement: INSERT
          // dbTable wo_list(wo_id, wo_name, wo_group, wo_gif)
          $sql = "INSERT INTO wo_list(wo_name, wo_group) VALUES (?, ?) ";
          $stmt = mysqli_stmt_init($db);

          if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../../woInsert.php?error=sqlerror");
            exit();
          }
          // execute statement: INSERT
          mysqli_stmt_bind_param($stmt, "ss", $wo_name, $wo_group);
          mysqli_stmt_execute($stmt);
          header("Location: ../../woInsert.php?insert=success");
          exit();
        }
      }
    }
    // close db connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);
  }
  // redirect if improper navigation
  else {
    header("Location: ../../woInsert.php");
  }
