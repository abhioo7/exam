<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset = "utf-8">
      <meta http-equiv="X-UA-Compatible" content="IF-edge">
      <meta name="viewport" content="width=device-width" initial-scale=1>
      <title>Intern</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      {{ Html::style('css/styles.css') }}
      @yield('stylesheets')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Intern</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand">Exam Preparation Online</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
 </nav>
<style>
 {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 50 px;
  left: 0;
  background-color: grey;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color:white;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}
.dropdown {
 left: 5px;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
  <div class="sidebar">
    <a class="main" href="javascript:showhide('filter')"><font size="3">Apply Filters</a>
   <a>Organisation:</a>
   <div class="dropdown">
    <select id="organisation_select" style="width: 250px">
     <option value="TCS">TCS</option>
     <option value="WIPRO">WIPRO</option>
     <option value="INFOSYS">INFOSYS</option>
     <option value="CAPGEMINI">CAPGEMINI</option>
    </select>
  </div>
   <a>Engineering Stream:</a>
   <div class="dropdown">
    <select id="stream_select" style="width: 250px">
     <option value="ComputerScience">COMPUTER SCIENCE</option>
     <option value="CIVIL">CIVIL ENGINEERING</option>
     <option value="ELECTRICAL">ELECTRICAL ENGINEERING</option>
     <option value="ELECTRONICS">ELECTRONICS COMMUNICATION ENGINEERING</option>
    </select>
  </div>
   <a>Application Mode:</a>
   <div  class="dropdown">
    <select id="mode_select" style="width: 250px">
     <option value="Oncampus">OnCampus</option>
     <option value="OffCampus">OffCampus</option>
    </select>
  </div>
  <div id="filter">
    <input type="checkbox" name="checkall" id="checkall" onClick="check_uncheck_checkbox(this.checked);" onchange="handleChangeall(this);">Check All<br>
     <input type="checkbox" name="Criteria" id="selec" value="Selection" onchange='handleChange_SP(this);'>Selection Procedure<br>
     <input type="checkbox" name="Criteria" id="tech" value="Technical" onchange='handleChange_TI(this);'>Technical Interview <br>
     <input type="checkbox" name="Criteria" id="analytics" value="Analytical" onchange='handleChange_AQ(this);'>Analytical Questions<br>
     <input type="checkbox" name="Criteria" id="hr" value="HR" onchange='handleChange_HRQ(this);'>HR QUESTIONS<br>
     <input type="checkbox" name="Criteria" id="suggest" value="Suggestion" onchange='handleChange(this);'>SUGGESTIONS<br>
 </div>
</div>
 <h1 style="margin-left:550px">Interview Experiences: {{Session::get('org')}}</h1>
 <div class="jumbotron bg-light" style="margin-left:325px ; margin-right:50px">
  <h1 class="display-4"></h1>
  <p>{{Session::get('LOC')}}</p><br>
  <p>{{Session::get('org')}}</p><br>
  <p>{{Session::get('mode')}}</p>
  <p id="SPtext" style="display:none">{{Session::get('sel')}}</p><br>
  <p id="TItext" style="display:none">{{Session::get('tech')}}</p><br>
  <p id="AQtext" style="display:none">{{Session::get('analy')}}</p><br>
  <p id="HRQtext"style="display:none">{{Session::get('hr')}}</p><br>
  <p id="text" style="display:none">{{Session::get('sugg')}}</p><br>
</div>
<script>
 function check_uncheck_checkbox(isChecked) {
	if(isChecked) {
		$('input[name="Criteria"]').each(function() {
			this.checked = true;
		});
	} else {
		$('input[name="Criteria"]').each(function() {
			this.checked = false;
		});
	}
}
function showhide(id) {
       var e = document.getElementById(id);
       e.style.display = (e.style.display == 'block') ? 'none' : 'block';
}
function handleChangeall(checkbox) {
  var checkBox = document.getElementById("checkall");
  var text = document.getElementById("text");
  var sptext = document.getElementById("SPtext");
  var titext = document.getElementById("TItext");
  var aqtext = document.getElementById("AQtext");
  var hrqtext = document.getElementById("HRQtext");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
    hrqtext.style.display = "block";
    sptext.style.display = "block";
    titext.style.display = "block";
    aqtext.style.display = "block";
  }
  else {
   text.style.display = "none";
   hrqtext.style.display = "none";
   sptext.style.display = "none";
   titext.style.display = "none";
   aqtext.style.display = "none";
  }
}
function handleChange(checkbox) {
  var checkBox = document.getElementById("suggest");
 var text = document.getElementById("text");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
  }
  else {
  text.style.display = "none";
  }
}
function handleChange_HRQ(checkbox) {
  var checkBox = document.getElementById("hr");
 var text = document.getElementById("HRQtext");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
  }
  else {
  text.style.display = "none";
  }
}
function handleChange_SP(checkbox) {
  var checkBox = document.getElementById("selec");
 var text = document.getElementById("SPtext");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
  }
  else {
  text.style.display = "none";
  }
}
function handleChange_TI(checkbox) {
  var checkBox = document.getElementById("tech");
 var text = document.getElementById("TItext");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
  }
  else {
  text.style.display = "none";
  }
}
function handleChange_AQ(checkbox) {
  var checkBox = document.getElementById("analytics");
 var text = document.getElementById("AQtext");
  if (checkBox.checked == true)
  {
    text.style.display = "block";
  }
  else {
  text.style.display = "none";
  }
}
</script>
</body>
</html>
