<HTML> <head> <Style> #rotate
{
width:50px; height:50px; background-color:red; margin:10px; float:left; transform:translate(-15px,90px) scale(2);transform-origin:0 100%;transition: all 2s ease;
}
 #rotate_hover360{
  width:150px; height:150px; background-color:green; float:left;  scale(2);transition: transform 2s ease-in-out;
  }
  #rotate_hover360:hover{
    transform: rotate(360deg);
  }
   #rotate_hover720{
  width:100px; height:100px; background-color:blue; float:left;  scale(2);transition: transform 2s ease-in-out;
  }
  #rotate_hover720:hover{
    transform: rotate(720deg);
  }
  
#rotate:hover { background-color:black; transform:translate(-15px,0px) scale(1) rotate(50deg); } 
  #donot_rotate{ width:50px; height:50px; background-color:yellow; margin:10px; float:left; }
</Style> </head>
<body>
<div id="rotate">1</div> <br/>
<div id="rotate">2</div> <br/>
<div id="donot_rotate">3</div> <br/>
  <div id="rotate_hover360">4</div> <br/>
  <div id="rotate_hover720">5</div> <br/> 
  
  </body>
</HTML>