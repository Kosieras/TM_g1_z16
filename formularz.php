
<!doctype html>
<html>
<head>	
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="css/signin.css" rel="stylesheet">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> <script type="text/javascript">

  
  </script>
  <script>
  function addX(){
     var x = document.getElementById('xdiv');
      
    if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
    }
      function addY(){
     var y = document.getElementById('ydiv');
      
    if (y.style.display === 'none') {
    y.style.display = 'block';
  } else {
    y.style.display = 'none';
  }
    }
    
    
  function emptyData() {
    if (document.getElementById("x0").value == "" || document.getElementById("y0").value == "" || document.getElementById("time").value == "" || document.getElementById("color").value == "" ) {
     
        document.getElementById("alertLogin").innerHTML = "Uzupełnij dane!";
        return false;
      
    };
}
  
  </script>
<center>
<div class="d-flex justify-content-center align-items-center mt-5">
        <div class="card">
<main class="form-signin">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">DODAJ ANIMACJE</a>
                </li>
                
               
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="form px-10 pt-5" style="height:750px">            
<!-- Dodawanie -->
<form method="POST" action="dodaj.php">
    <div class="form-floating" >
     x0:<br><input type="number" name="x0" maxlength="10" size="10" id="x0" placeholder="0"><br>
  y0:<br><input type="number" name="y0" maxlength="10" size="10" id="y0" placeholder="0"><br>
      <button type="button" id="x_d" onclick="addX()" placeholder="0">x_delta</button>
  <div id="xdiv" style="display:none"><br><input type="number" name="x_delta" maxlength="10" size="10" id="x_delta" placeholder="0"><br></div>
      
      
      <button type="button" id="y_d" onclick="addY()">y_delta</button>
 <div id="ydiv" style="display:none"><br><input type="number" name="y_delta" maxlength="10" size="10" id="y_delta" placeholder="0"><br></div>
  <br>begin:<br><input type="number" name="begin" maxlength="10" size="10" id="begin" placeholder="0"><br>
  diameter:<br><input type="number" name="diameter" maxlength="10" size="10" id="diameter" placeholder="15"><br>
  time:<br><input type="number" name="time" maxlength="10" size="10" id="time" placeholder="3"><br>
   kolor:<br><select id="color" name="color" id="color">
    <option value="green">Zielony</option>
    <option value="blue">Niebieski</option>
    <option value="red">Czerwony</option>
   <option value="yellow">Żółty</option>
  </select>
  <br>
  </div>
<!-- submit -->
    <button class="w-100 btn btn-lg btn-primary" type="submit" onClick="return emptyData()">Dodaj</button>
  <div id="alertLogin" style="color: red;"></div>
  </form>
                  </div>
                </div>
                </div>
          </main>
        </div>
  </div></center>
</body>
</html>