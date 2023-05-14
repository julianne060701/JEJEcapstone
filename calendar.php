<!DOCTYPE html>
<html>

<head>
   <title>Schedule Appointment</title>

   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
   <style type="text/css">
      .container {
         margin-top: 40px;
      }

      .btn-primary {
         width: 100%;
      }

      .form-group {
         opacity: 0;
         transition: opacity 1s ease-in-out;
      }

      .form-group.fade-in {
         opacity: 1;
      }

      body {
         background: url('assets/imgs/lawyerOffice2.jpg');
         background-size: cover;
         background-position: center;
      }
   </style>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

   <!-- Calenday Disable -->
   <script type='text/javascript'>
      $(document).ready(function () {
         $('.form-group').addClass('fade-in');
         $('#datetimepicker1').datetimepicker({
            daysOfWeekDisabled: [0], // Disable Sundays
            format: 'YYYY-MM-DD',
            disabledDates: ['2023-05-o1', '2023-06-01', '2023-06-05'] // List of holidays
         });
      });
   </script>

</head>

<body>

   <div class="container">
      <div class="panel panel-primary">
         <div class="panel-heading">Schedule an Appointment</div>
         <div class="panel-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">First Name</label>
                     <input type="text" class="form-control" name="fname" id="fname">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Last Name</label>
                     <input type="text" class="form-control" name="lname" id="lname">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Email</label>
                     <input type="text" class="form-control" name="email" id="email">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="control-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact" id="contact">
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Full Address</label>
                     <input type="text" class="form-control" name="adress" id="address">
                  </div>
               </div>

               <div class='col-md-6'>
                  <div class="form-group">
                     <label class="control-label">Appointment Time</label>
                     <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
            </div>


            <div class='col-md-6'>
               <div class="form-group">
               <label class="control-label">Appointment Time</label>
                  <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime"
                     id="start_datetime" required>
               </div>

            </div>

            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Purpose</label>
                  <textarea class="form-control" name="purpose" rows="4" cols="50"></textarea>
               </div>
               <input type="submit" class="btn btn-primary" value="Submit">
            </div>
         </div>
      </div>
</body>

</html>