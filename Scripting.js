


//Report Button Script

//set a global constant with the number of standards to make it less likely for a mistake
const NumStand = 687;
var theRow = "";
				/*******************************************/
				function getinnerHTML(theid){
				  var elem;
				  elem = document.getElementById(theid).innerHTML;
				  return elem;
				}
				/**********************************************/
				/******/
				function getValue(theid){
				  var elem;
				  elem = document.getElementById(theid).value;
				  return elem;
				}
				/**************************************************/
				
				
				
				
				//this function builds the table for all of the incomplete standards
				function buildIncomplete(secondradioID,standardID,numberID,commentsID){
				
				  var secondradio = document.getElementById(secondradioID);
				 
				var theRow = '';
				if(secondradio.checked) {
				  theRow = '<tr>';
				  theRow =  theRow + "<td>" + getinnerHTML(numberID) +'</td><td>' + getinnerHTML(standardID) + '</td><td>' + 'Comments: ' +  getValue(commentsID) + '</td>'; 
				  theRow = theRow + '</tr>'; 
				  
				}
				return theRow;
				
				}
				
				
				
				

				// this function builds the table for all of the unanswered standards
				function buildUnanswered(secondradioID,standardID,numberID,firstradioID){
				
					var secondradio = document.getElementById(secondradioID);
				   	var firstradio = document.getElementById(firstradioID);

				  var theRow = '';
				  if((!secondradio.checked) && (!firstradio.checked)){
					theRow = '<tr>';
					theRow =  theRow + "<td>" + getinnerHTML(numberID) +'</td><td>' + getinnerHTML(standardID) + '</td>'; 
					theRow = theRow + '</tr>'; 
					
				  }
				  return theRow;
				  
				  }
				  



				/***************************************************************************************/
				
			// this function does a lot so I will break down the individual things it does	
			function buttClick(){

				// variables for making the table(s) on the report page (referenced at the bottom of this function)
					var countyName = document.getElementById('countyID').value;
					var topOfDoc = '<!DOCTYPE html><html><head>';
   					var thecss = '<style>    table {border-collapse: collapse;width: 100%;} th, td {text-align: left;padding: 8px;}tr:nth-child(even) {background-color: #f2f2f2;}</style>';
   	 				var upToBody = '</head><body>';
    				var endOfDoc = '</body></html>' ;
					var theBody= '<div><h2>' + " Kansas Planning Standards Assessment for" + ' ' + countyName + ' ' + 'County' + '</h2></div>' ;
					var the1stHeader = '<tr> <td><h3> Incomplete </h3></td> </tr>';
					var the2ndHeader = '<br>' + '<br>' + '<br>' + '<tr> <td><h3> Unanswered </h3></td> </tr>';
				
					var thePage = topOfDoc + thecss + upToBody + endOfDoc + theBody;
					var theTable = '<table>';
					var the2ndTable =  '<table>';
				
				
				
				/*this generates the strings for our elements in our set (buildIncomplete) which are standardI, standard, number, and comments. 
				It then passes them into the buildIncomplete function. It then puts the elements it gets and puts them into a table row. This part loops until it gets through
				all standards marked incomplete*/
				for(i= 1; i<=NumStand; i++){
				  
					var iString = i.toString();
					if (iString.length == 3){
						iString = "" + iString;
						}
						
						else if (iString.length == 2) {
							iString = "0" + iString;
								   }
	
					else if (iString.length == 1) {
						iString = "00" + iString;
							 }   
					 
						
					
					theRow = buildIncomplete('standardI' + iString,'standard' + iString,'number' + iString,'comments' + iString,);
					
					
					theTable = theTable + theRow;
					
				}

				//ends the first table
				theTable = the1stHeader + theTable + '</table>';
				
				thePage = thePage + theTable;

				
				
				//this does the same thing as the other loop but instead builds a second table for all the standards marked unanswered 
				for(i= 1; i<=NumStand; i++){
					
					
					var iString = i.toString();
					if (iString.length == 3){
						iString = "" + iString;
						}
						
						else if (iString.length == 2) {
							iString = "0" + iString;
								   }
	
					else if (iString.length == 1) {
						iString = "00" + iString;
							 }   
					 
						
					
					theRow = buildUnanswered('standardI' + iString,'standard' + iString,'number' + iString,'standardA' + iString,);
					
					the2ndTable = the2ndTable + theRow;
					
					
					
				}
				//this part completes the html report document with closing tags and actually opens the report in a new window where you can save it as a pdf
				the2ndTable = the2ndHeader + the2ndTable + '</table>';

				thePage = thePage +  the2ndTable;	

					thePage = thePage +  endOfDoc + upToBody +  topOfDoc;
					
					console.log(thePage);
					
					myWindow = window.open("data:text/html," + encodeURIComponent(thePage),"_blank"); 
					myWindow.document.write(thePage);
					myWindow.focus();
				
				
			}
	/******************************************************************************************************************** */			
//everything else

function calc(NEED,AVAILABLE,SUM,DD) {
   var one = parseInt(document.getElementById(NEED).value);
   var two = parseInt(document.getElementById(AVAILABLE).value);

   if(isNaN(one)){
      	one=0;
      	document.getElementById(NEED).value = "";
      	}
   if(isNaN(two)){
   	two=0;	
   	document.getElementById(AVAILABLE).value = "";}
   var gap = one - two;
   if(gap<0){
  	gap = 0}
   if((document.getElementById(NEED).value == "") && (document.getElementById(AVAILABLE).value == "")){
  	gap = "";}
   document.getElementById(SUM).value = gap;
   if(document.getElementById(SUM).value > 0){
   	document.getElementById(DD).disabled = false;
   	document.getElementById(DD).selectedIndex = "3";
   	document.getElementById(DD).style.border = "thick solid red";
	document.getElementById(DD).required = true;
	document.getElementById(DD).options[0].style.visibility = "hidden";
	document.getElementById(DD).options[1].style.visibility = "hidden";
	document.getElementById(DD).options[2].style.visibility = "hidden";
	document.getElementById(DD).options[3].style.visibility = "hidden";
	document.getElementById(DD).options[4].style.visibility = "visible";
	document.getElementById(DD).options[5].style.visibility = "visible";
	document.getElementById(DD).options[6].style.visibility = "visible";
	document.getElementById(DD).options[7].style.visibility = "visible";
	document.getElementById(DD).options[8].style.visibility = "visible";
	document.getElementById(DD).options[9].style.visibility = "visible";
	document.getElementById(DD).options[10].style.visibility = "visible";
	document.getElementById(DD).options[11].style.visibility = "visible";}
   if(document.getElementById(SUM).value == "0"){
   	document.getElementById(DD).disabled = true;
	document.getElementById(DD).value = "No Gap Identified";
	document.getElementById(DD).style.border = "black";}
   if(document.getElementById(SUM).value == ""){
	document.getElementById(DD).value = "";
	document.getElementById(DD).style.border = "black";	
    document.getElementById(DD).disabled = true;}
}


function enable(NEED,AVAILABLE,SUM,DD) {
	var one = parseInt(document.getElementById(NEED).value);
	var two = parseInt(document.getElementById(AVAILABLE).value);

	if(isNaN(one)){
      	one=0;
      	document.getElementById(NEED).value = "";
      	}
	if(isNaN(two)){
		two=0;	
		document.getElementById(AVAILABLE).value = "";}
	var gap = one - two;
	if(gap<0){
		gap = 0}
	if((document.getElementById(NEED).value == "") && (document.getElementById(AVAILABLE).value == "")){
		gap = "";}
	document.getElementById(SUM).value = gap;
   	if(document.getElementById(SUM).value > 0){
		document.getElementById(DD).disabled = false;}
	if(document.getElementById(SUM).value == "0"){
		document.getElementById(DD).disabled = true;
		document.getElementById(DD).value = "No Gap Identified";}
}

function color(DD) {
   var e = document.getElementById(DD);
   
   e.style.border = "black";
}


 
