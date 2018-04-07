 		var i=0;
 
		var path=new Array();
		path[0]="1.jpg";
		path[1]="2.jpg";
		path[2]="3.jpg";
		path[3]="5.jpg";
		path[4]="4.jpg";
		path[5]="5.jpg";
	function swapimage()
	{
   
		document.getElementById("img").innerHTML="<img src='"+path[i]+"' height=90% width=100%/>";
   
    if(i<path.length-1)
    {
        i++;
        
    }
    else
        i=0;
    setTimeout(swapimage,4000);
   
}
