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
                     <input type="text" class="form-control" name="fname" id="fname">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Contact Number</label>
                     <input type="text" class="form-control" name="lname" id="lname">
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


               <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label">Appointment Time</label>
                     <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime"
                        id="start_datetime" required>
                  </div>
               </div>
            </div>


            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label class="control-label">Purpose</label>
                     <select name="select" class="input" style="width: 215px" onchange="updateTextarea(this)">
                        <option value="">Select</option>
                        <option value="family">Family Case</option>
                        <option value="tax">Tax Case</option>
                        <option value="corporate">Corporate Case</option>
                        <option value="criminal">Criminal Case</option>
                        <option value="employment">Employment Case</option>
                        <option value="financial">Financial Case</option>
                        <option value="labour">Labour Case</option>
                        <option value="immigration">Immigration Case</option>
                        <option value="defense">Defense Case</option>
                        <option value=" intellectual"> Intellectual Property Case</option>
                        <option value="government ">Government Case</option>
                        <option value="estate">Real Estate Case</option>
                        <option value="contract">Contract Case</option>
                     </select>
                     <textarea class="form-control" name="purpose" id="purpose-textarea" rows="4" cols="50"></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Submit">
               </div>
            </div>

            <script>
               function updateTextarea(select) {
                  var textarea = document.getElementById('purpose-textarea');
                  textarea.value = select.value;
               }
            </script>
</body>
<script>
   document.addEventListener('DOMContentLoaded', function () {
      $('.form-group').addClass('fade-in');
      var startDatetime = document.getElementById('start_datetime');
      startDatetime.addEventListener('input', function () {
         var selectedDate = new Date(startDatetime.value);
         if (selectedDate.getDay() === 0) {
            alert('Sundays are not allowed for appointments. Please select a different day.');
            startDatetime.value = '';
         } s
      });
   });
</script>

</html>