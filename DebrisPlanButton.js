function debrisToggle(theElement){
    //if theElement is not displayed, this makes it visible and unchecks the standardA radio button
    if (theElement.style.display === "none"){
        theElement.style.display = "";
        document.getElementById('standardA169').checked = false;
        document.getElementById('standardA170').checked = false;
        document.getElementById('standardA171').checked = false;
        document.getElementById('standardA172').checked = false;
        document.getElementById('standardA173').checked = false;
        document.getElementById('standardA174').checked = false;
        document.getElementById('standardA175').checked = false;
        document.getElementById('standardA176').checked = false;
        document.getElementById('standardA177').checked = false;
        document.getElementById('standardA178').checked = false;
        document.getElementById('standardA179').checked = false;
        document.getElementById('standardA180').checked = false;
        document.getElementById('standardA181').checked = false;
        document.getElementById('standardA182').checked = false;
        document.getElementById('standardA183').checked = false;
        document.getElementById('standardA184').checked = false;
        document.getElementById('standardA185').checked = false;
        document.getElementById('standardA186').checked = false;
        document.getElementById('standardA187').checked = false;
    }
        //Or it hides the display and checks the standardA radio button 
    else {
        theElement.style.display = "none";
        document.getElementById('standardA169').checked = true;
        document.getElementById('standardA170').checked = true;
        document.getElementById('standardA171').checked = true;
        document.getElementById('standardA172').checked = true;
        document.getElementById('standardA173').checked = true;
        document.getElementById('standardA174').checked = true;
        document.getElementById('standardA175').checked = true;
        document.getElementById('standardA176').checked = true;
        document.getElementById('standardA177').checked = true;
        document.getElementById('standardA178').checked = true;
        document.getElementById('standardA179').checked = true;
        document.getElementById('standardA180').checked = true;
        document.getElementById('standardA181').checked = true;
        document.getElementById('standardA182').checked = true;
        document.getElementById('standardA183').checked = true;
        document.getElementById('standardA184').checked = true;
        document.getElementById('standardA185').checked = true;
        document.getElementById('standardA186').checked = true;
        document.getElementById('standardA187').checked = true;
    }

}

/*********************************************************************************/
function debrisPlanClick(){
    debrisToggle(document.getElementById('row169'));
    debrisToggle(document.getElementById('row170'));
    debrisToggle(document.getElementById('row171'));
    debrisToggle(document.getElementById('row172'));
    debrisToggle(document.getElementById('row173'));
    debrisToggle(document.getElementById('row174'));
    debrisToggle(document.getElementById('row175'));
    debrisToggle(document.getElementById('row176'));
    debrisToggle(document.getElementById('row177'));
    debrisToggle(document.getElementById('row178'));
    debrisToggle(document.getElementById('row179'));
    debrisToggle(document.getElementById('row180'));
    debrisToggle(document.getElementById('row181'));
    debrisToggle(document.getElementById('row182'));
    debrisToggle(document.getElementById('row183'));
    debrisToggle(document.getElementById('row184'));
    debrisToggle(document.getElementById('row185'));
    debrisToggle(document.getElementById('row186'));
    debrisToggle(document.getElementById('row187'));
    
    
}