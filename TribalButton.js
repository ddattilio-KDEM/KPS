function tribalToggle(theElement){ 
    //if theElement is not displayed, this makes it visible and unchecks the standardA radio button
    if (theElement.style.display === "none"){ 
        theElement.style.display = "";
        document.getElementById('standardA039').checked = false;
     
    } 
    //Or it hides the display and checks the standardA radio button 
    else {
        theElement.style.display = "none";
        document.getElementById('standardA039').checked = true;
    }

}

//runs tribalClick function
function tribalClick(){
tribalToggle(document.getElementById('row039'));
    
}