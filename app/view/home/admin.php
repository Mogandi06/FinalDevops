<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

    .logo{
        margin-left: 15px;
    }


    body{
        font-family: 'Montserrat', sans-serif;
    }
    .navbar {
    background-color: #1e1e1e;
      color: #F6F6F7;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }

    .nav-item {
    display: flex;
    align-items: center;
    gap: 10px;
    }
    
    .nav-link {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #1e1e1e;
        font-size: larger;
    }
    
    .material-symbols-rounded {
        vertical-align: middle;
    }

    .sidebar {
      background-color: #F6F6F7;
      color: #f6f6f7 !important;
      height: 94vh;
      min-width: 300px;
      max-width: 400px;
      font-weight: 600;
    }

    #logout{
        background-color: #F04483;
        color: #F6F6F7;
        font-weight: 700;
        margin-bottom: 20px;
    }

    img {
      max-height: 40px;
    }
    .h5{
        color: #1e1e1e;
        font-weight: 700;
        opacity: 50%;
        font-size: 100%;
    }

    .email{
        font-size: smaller;
    }

    #jam{
        background-color: #F04483;
    }

    table{
        font-weight: 500;
	
    }

	.ms-2{
        margin-right: 50px;
    }
    
  .modal-dialog {
  max-width: 800px; /* Adjust the width value as needed */
  }

ul{
max-width : 100px;
}
.attendance-cell {
      width: 250px;
    }

    /* Reduce padding in the Attendance column */
    .attendance-cell .col-5 {
      padding-right: 0;
    }

    /* Decrease margin between rows in the Attendance column */
    .attendance-cell .col-5 ul {
      margin-top: 0.2em;
    }

#code{
display:none;}

  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#">
        <img src="\final\public\img\White.png" alt="zumacare" height="30">
      </a>
      <div class="d-flex align-items-center profile">
        <img src="https://lh3.googleusercontent.com/qiKmff4qixDvtUFzDhTx6dV22tn2YUe8tBz9bR6eGQYQy4ooFQobODJCnfiwSCBdAtjZUwYMcP9omnt_yrCMiMEVw9q4hsqykP_YqcsURQ" alt="Profile Picture" height="40px" width="40px" class="rounded-circle">
        <div class="ms-2 fs-6">
	<?php
	session_start();
	echo $_SESSION['user-name'];
	?>

	</div>
      </div>
    </div>
  </nav>


<div class="container-fluid ">
    <div class="row">
        <div class="sidebar col-sm-3 d-grid">
            <div>
                <p class="h5 pt-4">Admin Menu</p>
                <ul class="nav flex-column">
                
                    <li class="nav-item">
                      <a class="nav-link " href="#">
                        <span class="material-symbols-rounded">dashboard</span> Dashboard
                      </a>
                    </li>
                    <li class="nav-item" disabled>
                      <a class="nav-link disabled" href="#">
                        <span class="material-symbols-rounded">pets</span> Users
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">
                        <span class="material-symbols-rounded">psychology</span> Lecturer
                      </a>
                    </li>
                    <!-- Add more sidebar menu items as needed -->
                  </ul></div>
          <button class="btn mt-auto" id="logout" href="<?php echo APP_PATH; ?>/login">Logout</button>
        </div>
        <div class="col-sm-8 pt-4 container-fluid">
            <h1><strong>Dashboard Class Checklist</strong></h1>
            <div class="row">
                <div class="col"><p><strong>Subject: </strong><?php
                  session_start();
                  echo $_SESSION['name_subject'];
                  ?></p></div>
                <div class="col text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formInsertBox">+ New</button>
                </div>
            </div>            
            <hr>
            <div class="container">
                <table class="table">
                  <thead>
                    <tr>
<th id="code">Code</th>
                      <th class="attendance-cell">Attendance</th>
                      <th class="text-center">Schedule</th>
                      <th class="text-center">Students</th>
                      <th class="text-center">Radius</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $count = 1;
                    foreach($data['attendance'] as $lecs): ?>
                    <tr>
			<td id="code"><?php echo $lecs['id_class']; ?></td>
                      <td id="attendance">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <span class="material-symbols-rounded">schedule</span>
                            </div>
                            <div class="col-10 p-0">
                                <ul style="list-style-type: none;">
                                    <li>
                                        <h5 class="mt-2"><strong><?php echo $lecs['title_short']; ?></strong></h5>
                                    </li>
                                    <li>
                                        <span class="material-symbols-rounded">school</span> <?php echo $lecs['name_lecturer']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <span class="material-symbols-rounded">contact_mail</span><small> <?php echo $lecs['email_lecturer']; ?></small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      </td>
                      <td class="text-center position-relative">
                      <ul style="list-style-type: none;" class="container-fluid position-absolute top-50 start-50 translate-middle">
                       <li>
                         <?php
                          $date = strtotime($lecs['date_attendance']);
                          $day = date('l', $date);
                          $month = date('F', $date);
                          $dateFormatted = date('jS Y', $date);
                          echo '<strong>'.$day . '</strong><br> <div class="mt-2">' . $month . ' ' . $dateFormatted.'</div>';?>
                        </li>
                        <li class="badge mt-2" id="jam">
                        <?php echo $lecs['time_attendance']; ?>
                        </li>
                      </ul>
                      </td>                      
		      <td class="text-center position-relative"><div class ="position-absolute top-50 start-50 translate-middle">12/32 students</div></td>
                      <td class="text-center position-relative">
                        <span class="radius badge bg-danger position-absolute top-50 start-50 translate-middle"><?php echo $lecs['max_radius']; ?></span>
                      </td>
                      <td class="text-center position-relative">
                        <div class="dropdown position-absolute top-50 start-50 translate-middle">
                          <button class="btn btn-warning dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                          </button>
                          <ul class="dropdown-menu text-center" aria-labelledby="actionDropdown">
                            <li><a class="dropdown-item" data-id="<?= $lecs['id_class'];?>" onclick="
                            $('#idClassUpdate').val('<?=$lecs['id_class'];?>');			   
			    $('#titleUpdate').val('<?=$lecs['title_short'];?>');
                            $('#courseUpdate').val('<?=$lecs['name_subject'];?>');
                            $('#lec_emailUpdate').val('<?=$lecs['email_lecturer'];?>');
                            $('#dateUpdate').val('<?=$lecs['date_attendance'];?>');
                            $('#timeUpdate').val('<?=$lecs['time_attendance'];?>');
                            $('#radiusUpdate').val('<?=$lecs['max_radius'];?>');
                            $('#formUpdateBox').modal('show');">Update</a></li>
                            <li><a class="dropdown-item" href="<?php echo APP_PATH;?>/home/delete/<?= $lecs['id'];?>">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php $count++; ?> 
                    <?php endforeach; ?> 
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              </div>
              
        </div>
    </div>
</div>

<!-- Insert Modal -->
<div class="modal" id="formInsertBox">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <!--Modal Header-->
        <div class="modal-header">
            <h4 class="modal-title">Create New Attendance</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
            <form action="<?=APP_PATH;?>/home/insert" method="post" class="row g-3">
                <div class="col-12 mb-3 mt-3"> 
                  <label for="title">Title Schedule</label>
                  <input type="text" class="form-control" id="title" placeholder="ex. Attendance #1" name="title">
                </div>
                <div class="col-12 mb-3 mt-3"> 
                  <label for="course">Course</label>
                  <input type="text" class="form-control" id="course" placeholder="Course" name="course">
                </div>
                <div class="col-12 mb-3 mt-3"> 
                  <label for="lec_email">Email</label>
                  <input type="email" class="form-control" id="lec_email" placeholder="Your Email" name="lec_email">
                </div>
                <div class="col-md-5">
                <label for="date" class="form-label">Date</label>
                <div class="input-group">
                 <input type="text" class="datepick form-control" id="datepicker" name="date">
                  <button class="btn btn-outline-secondary" type="button" disabled>
                    <span class="material-symbols-rounded">
			event
		    </span>
                  </button>
                </div>
                
		</div>
                <div class="col-md-4">
                  <label for="time" class="form-label">Time</label>
                  <select id="time" class="form-select" name="time">
                    <option selected>Choose</option>
                    <option>07:00 - 08:00</option>
                    <option>07:00 - 08:30</option>
                    <option>07:00 - 09:00</option>
                    <option>08:00 - 09:00</option>
                    <option>08:00 - 09:30</option>
                    <option>08:00 - 10:00</option>
                    <option>09:00 - 10:00</option>
                    <option>09:00 - 10:30</option>
                    <option>09:00 - 11:00</option>
                    <option>10:00 - 11:00</option>
                    <option>10:00 - 11:30</option>
                    <option>10:00 - 12:00</option>
                    <option>11:00 - 12:00</option>
                    <option>11:00 - 12:30</option>
                    <option>11:00 - 13:00</option>
                    <option>12:00 - 13:00</option>
                    <option>12:00 - 13:30</option>
                    <option>12:00 - 14:00</option>
                    <option>13:00 - 14:00</option>
                    <option>13:00 - 14:30</option>
                    <option>13:00 - 15:00</option>
                    <option>14:00 - 15:00</option>
                    <option>14:00 - 15:30</option>
                    <option>14:00 - 16:00</option>
                    <option>15:00 - 16:00</option>
                    <option>15:00 - 16:30</option>
                    <option>15:00 - 17:00</option>
                    <option>16:00 - 17:00</option>
                    <option>16:00 - 17:30</option>
                    <option>16:00 - 18:00</option>
                    <option>17:00 - 18:00</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="radius" class="form-label">Radius</label>
                  <select id="radius" class="form-select" name="radius">
                    <option selected>Distance</option>
                    <option>No distance</option>
                    <option>10m</option>
                    <option>20m</option>
                    <option>30m</option>
                    <option>40m</option>
                    <option>50m</option>
                    <!-- Add more radius options as needed -->
                  </select>
                </div>
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Insert Data</button>
          </div>
          </form>
        </div> 
    </div>
</div>

<!-- Update Modal -->
<div class="modal" id="formUpdateBox">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <!--Modal Header-->
        <div class="modal-header">
            <h4 class="modal-title">Update Attendance</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!--Modal Body-->
        <div class="modal-body">
            <form action="<?=APP_PATH;?>/home/update" method="post" class="row g-3">
                <div class="col-3 mb-3 mt-3"> 
                  <label for="idClassUpdate">Code</label>
                  <input type="text" class="form-control" id="idClassUpdate" placeholder="ex. Attendance #1" name="idClassUpdate">            
                </div>
                <div class="col-9 mb-3 mt-3"> 
                  <label for="titleUpdate">Title Schedule</label>
                  <input type="text" class="form-control" id="titleUpdate" placeholder="ex. Attendance #1" name="titleUpdate">
                </div>
                <div class="col-12 mb-3 mt-3"> 
                  <label for="courseUpdate">Course</label>
                  <input type="text" class="form-control" id="courseUpdate" placeholder="Course" name="courseUpdate">
                </div>
                <div class="col-12 mb-3 mt-3"> 
                  <label for="lec_emailUpdate">Email</label>
                  <input type="email" class="form-control" id="lec_emailUpdate" placeholder="Your Email" name="lec_emailUpdate">
                </div>
		

                <div class="col-md-5">
                <label for="dateUpdate" class="form-label">Date</label>
                <div class="input-group">
                 <input type="text" class="datepick form-control" id="datepickerUpdate" name="dateUpdate">
                  <button class="btn btn-outline-secondary" type="button" disabled>
                    <span class="material-symbols-rounded">
			event
		    </span>
                  </button>
                </div>
                
		</div>
                <div class="col-md-4">
                  <label for="timeUpdate" class="form-label">Time</label>
                  <select id="timeUpdate" class="form-select" name="timeUpdate">
                    <option selected>Choose</option>
                    <option>07:00 - 08:00</option>
                    <option>07:00 - 08:30</option>
                    <option>07:00 - 09:00</option>
                    <option>08:00 - 09:00</option>
                    <option>08:00 - 09:30</option>
                    <option>08:00 - 10:00</option>
                    <option>09:00 - 10:00</option>
                    <option>09:00 - 10:30</option>
                    <option>09:00 - 11:00</option>
                    <option>10:00 - 11:00</option>
                    <option>10:00 - 11:30</option>
                    <option>10:00 - 12:00</option>
                    <option>11:00 - 12:00</option>
                    <option>11:00 - 12:30</option>
                    <option>11:00 - 13:00</option>
                    <option>12:00 - 13:00</option>
                    <option>12:00 - 13:30</option>
                    <option>12:00 - 14:00</option>
                    <option>13:00 - 14:00</option>
                    <option>13:00 - 14:30</option>
                    <option>13:00 - 15:00</option>
                    <option>14:00 - 15:00</option>
                    <option>14:00 - 15:30</option>
                    <option>14:00 - 16:00</option>
                    <option>15:00 - 16:00</option>
                    <option>15:00 - 16:30</option>
                    <option>15:00 - 17:00</option>
                    <option>16:00 - 17:00</option>
                    <option>16:00 - 17:30</option>
                    <option>16:00 - 18:00</option>
                    <option>17:00 - 18:00</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="radiusUpdate" class="form-label">Radius</label>
                  <select id="radiusUpdate" class="form-select" name="radiusUpdate">
                    <option selected>Distance</option>
                    <option>No distance</option>
                    <option>10m</option>
                    <option>20m</option>
                    <option>30m</option>
                    <option>40m</option>
                    <option>50m</option>
                    <!-- Add more radius options as needed -->
                  </select>
                </div>
        </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Update Data</button>
          </div>
          </form>
        </div> 
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
$('.datepick').each(function() {
  $(this).datepicker();
  var today = new Date(); // Get current date and time
  $(this).datepicker("setDate", today); // Set default date to today
});
	document.getElementById("logout").addEventListener("click", function() {
    window.location.href = "<?php echo APP_PATH; ?>/login";
  });
</script>
</body>
</html>
