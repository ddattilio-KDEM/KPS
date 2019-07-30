function ksPlanToggle(theElement){
    //if theElement is not displayed, this makes it visible and unchecks the standardA radio button
    if (theElement.style.display === "none"){
        theElement.style.display = "";
        document.getElementById('standardA001').checked = false;
        document.getElementById('standardA002').checked = false;
        document.getElementById('standardA003').checked = false;
        document.getElementById('standardA035').checked = false;
        document.getElementById('standardA036').checked = false;
        document.getElementById('standardA050').checked = false;
        document.getElementById('standardA051').checked = false;
        document.getElementById('standardA068').checked = false;
        document.getElementById('standardA071').checked = false;
        document.getElementById('standardA072').checked = false;
        document.getElementById('standardA100').checked = false;
        document.getElementById('standardA109').checked = false;
        document.getElementById('standardA110').checked = false;
        document.getElementById('standardA112').checked = false;
        document.getElementById('standardA113').checked = false;
        document.getElementById('standardA133').checked = false;
        document.getElementById('standardA134').checked = false;
        document.getElementById('standardA136').checked = false;
        document.getElementById('standardA137').checked = false;
        document.getElementById('standardA157').checked = false;
        document.getElementById('standardA158').checked = false;
        document.getElementById('standardA160').checked = false;
        document.getElementById('standardA161').checked = false;
        document.getElementById('standardA192').checked = false;
        document.getElementById('standardA193').checked = false;
        document.getElementById('standardA195').checked = false;
        document.getElementById('standardA196').checked = false;
        document.getElementById('standardA207').checked = false;
        document.getElementById('standardA208').checked = false;
        document.getElementById('standardA210').checked = false;
        document.getElementById('standardA211').checked = false;
        document.getElementById('standardA230').checked = false;
        document.getElementById('standardA231').checked = false;
        document.getElementById('standardA233').checked = false;
        document.getElementById('standardA234').checked = false;
        document.getElementById('standardA277').checked = false;
        document.getElementById('standardA278').checked = false;
        document.getElementById('standardA280').checked = false;
        document.getElementById('standardA281').checked = false;
        document.getElementById('standardA305').checked = false;
        document.getElementById('standardA306').checked = false;
        document.getElementById('standardA307').checked = false;
        document.getElementById('standardA308').checked = false;
        document.getElementById('standardA309').checked = false;
        document.getElementById('standardA434').checked = false;
        document.getElementById('standardA435').checked = false;
        document.getElementById('standardA437').checked = false;
        document.getElementById('standardA438').checked = false;
        document.getElementById('standardA466').checked = false;
        document.getElementById('standardA467').checked = false;
        document.getElementById('standardA469').checked = false;
        document.getElementById('standardA470').checked = false;
        document.getElementById('standardA502').checked = false;
        document.getElementById('standardA503').checked = false;
        document.getElementById('standardA505').checked = false;
        document.getElementById('standardA506').checked = false;
        document.getElementById('standardA511').checked = false;
        document.getElementById('standardA513').checked = false;
        document.getElementById('standardA518').checked = false;
        document.getElementById('standardA519').checked = false;
        document.getElementById('standardA520').checked = false;
        document.getElementById('standardA524').checked = false;
        document.getElementById('standardA525').checked = false;
        document.getElementById('standardA527').checked = false;
        document.getElementById('standardA528').checked = false;
        document.getElementById('standardA539').checked = false;
        document.getElementById('standardA540').checked = false;
        document.getElementById('standardA542').checked = false;
        document.getElementById('standardA543').checked = false;
        document.getElementById('standardA559').checked = false;
        document.getElementById('standardA560').checked = false;
        document.getElementById('standardA562').checked = false;
        document.getElementById('standardA563').checked = false;
        document.getElementById('standardA579').checked = false;
        document.getElementById('standardA580').checked = false;
        document.getElementById('standardA582').checked = false;
        document.getElementById('standardA583').checked = false;
        
    }
        
    //Or it hides the display and checks the standardA radio button 
    else {
        theElement.style.display = "none";
        document.getElementById('standardA001').checked = true;
        document.getElementById('standardA002').checked = true;
        document.getElementById('standardA003').checked = true;
        document.getElementById('standardA035').checked = true;
        document.getElementById('standardA036').checked = true;
        document.getElementById('standardA050').checked = true;
        document.getElementById('standardA051').checked = true;
        document.getElementById('standardA068').checked = true;
        document.getElementById('standardA071').checked = true;
        document.getElementById('standardA072').checked = true;
        document.getElementById('standardA100').checked = true;
        document.getElementById('standardA109').checked = true;
        document.getElementById('standardA110').checked = true;
        document.getElementById('standardA112').checked = true;
        document.getElementById('standardA113').checked = true;
        document.getElementById('standardA133').checked = true;
        document.getElementById('standardA134').checked = true;
        document.getElementById('standardA136').checked = true;
        document.getElementById('standardA137').checked = true;
        document.getElementById('standardA157').checked = true;
        document.getElementById('standardA158').checked = true;
        document.getElementById('standardA160').checked = true;
        document.getElementById('standardA161').checked = true;
        document.getElementById('standardA192').checked = true;
        document.getElementById('standardA193').checked = true;
        document.getElementById('standardA195').checked = true;
        document.getElementById('standardA196').checked = true;
        document.getElementById('standardA207').checked = true;
        document.getElementById('standardA208').checked = true;
        document.getElementById('standardA210').checked = true;
        document.getElementById('standardA211').checked = true;
        document.getElementById('standardA230').checked = true;
        document.getElementById('standardA231').checked = true;
        document.getElementById('standardA233').checked = true;
        document.getElementById('standardA234').checked = true;
        document.getElementById('standardA277').checked = true;
        document.getElementById('standardA278').checked = true;
        document.getElementById('standardA280').checked = true;
        document.getElementById('standardA281').checked = true;
        document.getElementById('standardA305').checked = true;
        document.getElementById('standardA306').checked = true;
        document.getElementById('standardA307').checked = true;
        document.getElementById('standardA308').checked = true;
        document.getElementById('standardA309').checked = true;
        document.getElementById('standardA434').checked = true;
        document.getElementById('standardA435').checked = true;
        document.getElementById('standardA437').checked = true;
        document.getElementById('standardA438').checked = true;
        document.getElementById('standardA466').checked = true;
        document.getElementById('standardA467').checked = true;
        document.getElementById('standardA469').checked = true;
        document.getElementById('standardA470').checked = true;
        document.getElementById('standardA502').checked = true;
        document.getElementById('standardA503').checked = true;
        document.getElementById('standardA505').checked = true;
        document.getElementById('standardA506').checked = true;
        document.getElementById('standardA511').checked = true;
        document.getElementById('standardA513').checked = true;
        document.getElementById('standardA518').checked = true;
        document.getElementById('standardA519').checked = true;
        document.getElementById('standardA520').checked = true;
        document.getElementById('standardA524').checked = true;
        document.getElementById('standardA525').checked = true;
        document.getElementById('standardA527').checked = true;
        document.getElementById('standardA528').checked = true;
        document.getElementById('standardA539').checked = true;
        document.getElementById('standardA540').checked = true;
        document.getElementById('standardA542').checked = true;
        document.getElementById('standardA543').checked = true;
        document.getElementById('standardA559').checked = true;
        document.getElementById('standardA560').checked = true;
        document.getElementById('standardA562').checked = true;
        document.getElementById('standardA563').checked = true;
        document.getElementById('standardA579').checked = true;
        document.getElementById('standardA580').checked = true;
        document.getElementById('standardA582').checked = true;
        document.getElementById('standardA583').checked = true;
    }
}
/************************************************************************************************** */
//runs the function
function ksPlanClick(){
    
    ksPlanToggle(document.getElementById('row001'));
    ksPlanToggle(document.getElementById('row002'));
    ksPlanToggle(document.getElementById('row003'));
    ksPlanToggle(document.getElementById('row035'));
    ksPlanToggle(document.getElementById('row036'));
    ksPlanToggle(document.getElementById('row050'));
    ksPlanToggle(document.getElementById('row051'));
    ksPlanToggle(document.getElementById('row068'));
    ksPlanToggle(document.getElementById('row071'));
    ksPlanToggle(document.getElementById('row072'));
    ksPlanToggle(document.getElementById('row100'));
    ksPlanToggle(document.getElementById('row109'));
    ksPlanToggle(document.getElementById('row110'));
    ksPlanToggle(document.getElementById('row112'));
    ksPlanToggle(document.getElementById('row113'));
    ksPlanToggle(document.getElementById('row133'));
    ksPlanToggle(document.getElementById('row134'));
    ksPlanToggle(document.getElementById('row136'));
    ksPlanToggle(document.getElementById('row137'));
    ksPlanToggle(document.getElementById('row157'));
    ksPlanToggle(document.getElementById('row158'));
    ksPlanToggle(document.getElementById('row160'));
    ksPlanToggle(document.getElementById('row161'));
    ksPlanToggle(document.getElementById('row192'));
    ksPlanToggle(document.getElementById('row193'));
    ksPlanToggle(document.getElementById('row195'));
    ksPlanToggle(document.getElementById('row196'));
    ksPlanToggle(document.getElementById('row207'));
    ksPlanToggle(document.getElementById('row208'));
    ksPlanToggle(document.getElementById('row210'));
    ksPlanToggle(document.getElementById('row211'));
    ksPlanToggle(document.getElementById('row230'));
    ksPlanToggle(document.getElementById('row231'));
    ksPlanToggle(document.getElementById('row233'));
    ksPlanToggle(document.getElementById('row234'));
    ksPlanToggle(document.getElementById('row277'));
    ksPlanToggle(document.getElementById('row278'));
    ksPlanToggle(document.getElementById('row280'));
    ksPlanToggle(document.getElementById('row281'));
    ksPlanToggle(document.getElementById('row305'));
    ksPlanToggle(document.getElementById('row306'));
    ksPlanToggle(document.getElementById('row307'));
    ksPlanToggle(document.getElementById('row308'));
    ksPlanToggle(document.getElementById('row309'));
    ksPlanToggle(document.getElementById('row434'));
    ksPlanToggle(document.getElementById('row435'));
    ksPlanToggle(document.getElementById('row437'));
    ksPlanToggle(document.getElementById('row438'));
    ksPlanToggle(document.getElementById('row466'));
    ksPlanToggle(document.getElementById('row467'));
    ksPlanToggle(document.getElementById('row469'));
    ksPlanToggle(document.getElementById('row470'));
    ksPlanToggle(document.getElementById('row502'));
    ksPlanToggle(document.getElementById('row503'));
    ksPlanToggle(document.getElementById('row505'));
    ksPlanToggle(document.getElementById('row506'));
    ksPlanToggle(document.getElementById('row511'));
    ksPlanToggle(document.getElementById('row513'));
    ksPlanToggle(document.getElementById('row518'));
    ksPlanToggle(document.getElementById('row519'));
    ksPlanToggle(document.getElementById('row520'));
    ksPlanToggle(document.getElementById('row524'));
    ksPlanToggle(document.getElementById('row525'));
    ksPlanToggle(document.getElementById('row527'));
    ksPlanToggle(document.getElementById('row528'));
    ksPlanToggle(document.getElementById('row539'));
    ksPlanToggle(document.getElementById('row540'));
    ksPlanToggle(document.getElementById('row542'));
    ksPlanToggle(document.getElementById('row543'));
    ksPlanToggle(document.getElementById('row559'));
    ksPlanToggle(document.getElementById('row560'));
    ksPlanToggle(document.getElementById('row562'));
    ksPlanToggle(document.getElementById('row563'));
    ksPlanToggle(document.getElementById('row579'));
    ksPlanToggle(document.getElementById('row580'));
    ksPlanToggle(document.getElementById('row582'));
    ksPlanToggle(document.getElementById('row583'));
















}