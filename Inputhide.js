setInterval (function hideJHB(){
    var City = document.getElementById('city').value;
         if (City=='Tshwane/Pretoria'){
         document.getElementById("hidePTAtown").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("townsJHB").removeAttribute("required");
     }else{
         document.getElementById("hidePTAtown").style.display = "none";
     }
 }, 1000);
 
 setInterval (function hidePTA(){
    var City = document.getElementById('city').value;
         if (City=='Johannesburg'){
         document.getElementById("hideJHBtown").style.display = "block";
                 document.getElementById("townsPTA").removeAttribute("required");
     }else{
         document.getElementById("hideJHBtown").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showPTAeast(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='PretoriaEast' && City=='Tshwane/Pretoria'){
                 document.getElementById("hidePTAeastsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsJHBRandburg").removeAttribute("required");
                 document.getElementById("suburbsJHBSandton").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hidePTAeastsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showPTAnorthEast(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='PretoriaNorthEast' && City=='Tshwane/Pretoria'){
         document.getElementById("hidePTANorthEastsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
     }else{
         document.getElementById("hidePTANorthEastsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showPTAnorthWest(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='PretoriaNorthWest' && City=='Tshwane/Pretoria'){
         document.getElementById("hidePTANorthWestsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
     }else{
         document.getElementById("hidePTANorthWestsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showPTACentral(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='PretoriaCentral' && City=='Tshwane/Pretoria'){
         document.getElementById("hidePTACentralsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
     }else{
         document.getElementById("hidePTACentralsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showPTACentralWest(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='PretoriaCentralWest' && City=='Tshwane/Pretoria'){
         document.getElementById("hidePTACentralWestsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
     }else{
         document.getElementById("hidePTACentralWestsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showCenturion(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsPTA').value;
         if (Town=='Centurion' && City=='Tshwane/Pretoria'){
         document.getElementById("hideCenturionsuburb").style.display = "block";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
     }else{
         document.getElementById("hideCenturionsuburb").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showJHBNorth(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBNorth' && City=='Johannesburg'){
                 document.getElementById("hideJHBNorthsuburb").style.display = "block";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBRandburgsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBNorthWest(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBNorthWest' && City=='Johannesburg'){
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "block";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBSouthWest(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBSouthWest' && City=='Johannesburg'){
                 document.getElementById("hideJHBSouthWest").style.display = "block";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBSouthWestsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBSouth(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBSouth' && City=='Johannesburg'){
                 document.getElementById("hideJHBSouth").style.display = "block";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBSouthWestsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBEast(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBEast' && City=='Johannesburg'){
                 document.getElementById("hideJHBEastsuburb").style.display = "block";
                 document.getElementById("hideJHBCentral").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBSouthWestsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBCentral(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
         if (Town=='JHBCentral' && City=='Johannesburg'){
                 document.getElementById("hideJHBCentral").style.display = "block";
                 document.getElementById("hideJHBEastsuburb").style.display = "none";
                 document.getElementById("hideJHBSouth").style.display = "none";
                 document.getElementById("hideJHBSouthWest").style.display = "none";
                 document.getElementById("hideJHBNorthWestsuburb").style.display = "none";
                 document.getElementById("hideJHBNorthsuburb").style.display = "none";
                 document.getElementById("suburbsJHBEast").removeAttribute("required");
                 document.getElementById("suburbsJHBSouthWest").removeAttribute("required");
                 document.getElementById("suburbsJHBSouth").removeAttribute("required");
                 document.getElementById("suburbsJHBNorth").removeAttribute("required");
                 document.getElementById("suburbsJHBNorthWest").removeAttribute("required");
                 document.getElementById("areasJHBCentral").removeAttribute("required");
                 document.getElementById("suburbsJHBSandton").removeAttribute("required");
                 document.getElementById("suburbsJHBRandburg").removeAttribute("required");
                 document.getElementById("suburbsPTANorthEast").removeAttribute("required");
                 document.getElementById("suburbsPTANorthWest").removeAttribute("required");
                 document.getElementById("suburbsPTACentral").removeAttribute("required");
                 document.getElementById("suburbsPTACentralWest").removeAttribute("required");
                 document.getElementById("suburbsPTAeast").removeAttribute("required");
                 document.getElementById("suburbsPTACenturion").removeAttribute("required");
     }else{
         document.getElementById("hideJHBSouthWestsuburb").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBDoornfontein(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='Doornfontein'){
                 document.getElementById("hideDoornfontein").style.display = "block";
     }else{
                 document.getElementById("hideDoornfontein").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBBraamfontein(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='Braamfontein'){
                 document.getElementById("hideBraamfontein").style.display = "block"; 
     }else{
                 document.getElementById("hideBraamfontein").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBHillbrow(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='Hillbrow'){
                 document.getElementById("hideHillbrow").style.display = "block";
     }else{
                 document.getElementById("hideHillbrow").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBNewDoornfontein(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='NewDoornfontein'){
                 document.getElementById("hideNewDoornfontein").style.display = "block";
     }else{
                 document.getElementById("hideNewDoornfontein").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBNewtown(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='Newtown'){
                 document.getElementById("hideNewtown").style.display = "block";
     }else{
                 document.getElementById("hideNewtown").style.display = "none";
     }
 }, 1000);

setInterval (function showJHBCBD(){
    var City = document.getElementById('city').value;
    var Town = document.getElementById('townsJHB').value;
    var Area = document.getElementById('areasJHBCentral').value;
         if (Town=='JHBCentral' && City=='Johannesburg' && Area=='JohannesburgCBD'){
                 document.getElementById("hideJHBCBD").style.display = "block";
     }else{
                 document.getElementById("hideJHBCBD").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showStructureDoornfontein(){
    var StreetsDoornfontein = document.getElementById('streetsDoornfontein').value;
         if (StreetsDoornfontein){
         document.getElementById("hidecribtype").style.display = "block";
         document.getElementById("streetsNewDoornfontein").removeAttribute("required");
                 document.getElementById("streetsHillbrow").removeAttribute("required");
                 document.getElementById("streetsNewtown").removeAttribute("required");
                 document.getElementById("streetsBraamfontein").removeAttribute("required");
                 document.getElementById("streetsJHBCBD").removeAttribute("required");
     }
 }, 1000);

 setInterval (function showStructureNewDoornfontein(){
    var StreetsNewDoornfontein = document.getElementById('streetsNewDoornfontein').value;
         if (StreetsNewDoornfontein){
         document.getElementById("hidecribtype").style.display = "block";
                 document.getElementById("streetsDoornfontein").removeAttribute("required");
                 document.getElementById("streetsHillbrow").removeAttribute("required");
                 document.getElementById("streetsNewtown").removeAttribute("required");
                 document.getElementById("streetsBraamfontein").removeAttribute("required");
                 document.getElementById("streetsJHBCBD").removeAttribute("required");
     }
 }, 1000);

 setInterval (function showStructureNewtown(){
    var StreetsNewtown = document.getElementById('streetsNewtown').value;
         if (StreetsNewtown){
         document.getElementById("hidecribtype").style.display = "block";
         document.getElementById("streetsDoornfontein").removeAttribute("required");
                 document.getElementById("streetsNewDoornfontein").removeAttribute("required");
                 document.getElementById("streetsHillbrow").removeAttribute("required");
                 document.getElementById("streetsBraamfontein").removeAttribute("required");
                 document.getElementById("streetsJHBCBD").removeAttribute("required");
     }
 }, 1000);

 setInterval (function showStructureBraamfontein(){
    var StreetsBraamfontein = document.getElementById('streetsBraamfontein').value;
         if (StreetsBraamfontein){
         document.getElementById("hidecribtype").style.display = "block";
         document.getElementById("streetsDoornfontein").removeAttribute("required");
                 document.getElementById("streetsNewDoornfontein").removeAttribute("required");
                 document.getElementById("streetsHillbrow").removeAttribute("required");
                 document.getElementById("streetsNewtown").removeAttribute("required");
                 document.getElementById("streetsJHBCBD").removeAttribute("required");
     }
 }, 1000);

 setInterval (function showStructureHillbrow(){
    var StreetsHillbrow = document.getElementById('streetsHillbrow').value;
         if (StreetsHillbrow){
         document.getElementById("hidecribtype").style.display = "block";
         document.getElementById("streetsDoornfontein").removeAttribute("required");
                 document.getElementById("streetsNewDoornfontein").removeAttribute("required");
                 document.getElementById("streetsNewtown").removeAttribute("required");
                 document.getElementById("streetsBraamfontein").removeAttribute("required");
                 document.getElementById("streetsJHBCBD").removeAttribute("required");
     }
 }, 1000);

 setInterval (function showStructureJHBCBD(){
    var StreetsJHBCBD = document.getElementById('streetsJHBCBD').value;
         if (StreetsJHBCBD){
         document.getElementById("hidecribtype").style.display = "block";
         document.getElementById("streetsDoornfontein").removeAttribute("required");
                 document.getElementById("streetsNewDoornfontein").removeAttribute("required");
                 document.getElementById("streetsHillbrow").removeAttribute("required");
                 document.getElementById("streetsNewtown").removeAttribute("required");
                 document.getElementById("streetsBraamfontein").removeAttribute("required");
     }
 }, 1000);
 
 setInterval (function showEstate(){
    var Estate = document.getElementById('Cribtype').value;
         if (Estate=='Estate'){
         document.getElementById("hideEstate").style.display = "block";
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 document.getElementById("House1").removeAttribute("required");
     }else{
         document.getElementById("hideEstate").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showComplex(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='Complex'){
         document.getElementById("hideComplex").style.display = "block";
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 document.getElementById("House1").removeAttribute("required");
     }else{
         document.getElementById("hideComplex").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showBuilding(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='Flat'){
         document.getElementById("hideBuilding").style.display = "block";
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 document.getElementById("House1").removeAttribute("required");
     }else{
         document.getElementById("hideBuilding").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showOffice(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='Office'){
         document.getElementById("hideOffice").style.display = "block";
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("House1").removeAttribute("required");
                 document.getElementById("Unit1").removeAttribute("required");
     }else{
         document.getElementById("hideOffice").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showMall(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='Mall'){
         document.getElementById("hideMall").style.display = "block";
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 
                 document.getElementById("House1").removeAttribute("required");
                 document.getElementById("Unit1").removeAttribute("required");
     }else{
         document.getElementById("hideMall").style.display = "none";
     }
 }, 1000);

 setInterval (function showHouse(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='House'){
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("Shop1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 document.getElementById("Unit1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
     }
 }, 1000);
 
 setInterval (function showShop(){
    var Complex = document.getElementById('Cribtype').value;
         if (Complex=='Mall' || Complex=='Shop' ){
         document.getElementById("hideShop").style.display = "block";
                 document.getElementById("Complex1").removeAttribute("required");
                 document.getElementById("Mall1").removeAttribute("required");
                 document.getElementById("Estate1").removeAttribute("required");
                 document.getElementById("Building1").removeAttribute("required");
                 document.getElementById("Company1").removeAttribute("required");
                 document.getElementById("House1").removeAttribute("required");
                 document.getElementById("Unit1").removeAttribute("required");
     }else{
         document.getElementById("hideShop").style.display = "none";
     }
 }, 1000);
 
 
 setInterval (function showNumber(){
    var Estate = document.getElementById('Cribtype').value;
         if (Estate=='Estate' || Estate=='Complex' || Estate=='Flat' ){
                 document.getElementById("hideNumber").style.display = "block";
                 document.getElementById("House1").removeAttribute("required");
     }else{
         document.getElementById("hideNumber").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showHouseNumber(){
    var House = document.getElementById('Cribtype').value;
         if (House=='House'){
         document.getElementById("hideHouseNumber").style.display = "block";
                 document.getElementById("Unit1").removeAttribute("required");
     }else{
         document.getElementById("hideHouseNumber").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showContactNumber(){
    var Estate = document.getElementById('Cribtype').value;
    var House = document.getElementById('Cribtype').value;
         if (Estate=='Estate' || House=='House' || House=='Complex' || House=='Flat' || House=='Office' || House=='Mall' || House=='Shop' ){
         document.getElementById("hideContactNumber").style.display = "block";
     }else{
         document.getElementById("hideContactNumber").style.display = "none";
     }
 }, 1000);
 
 setInterval (function showContactName(){
    var Estate = document.getElementById('Cribtype').value;
    var House = document.getElementById('Cribtype').value;
         if (Estate=='Estate' || House=='House' || House=='Complex' || House=='Flat' || House=='Office' || House=='Mall' || House=='Shop' ){
         document.getElementById("hideName").style.display = "block";
     }else{
         document.getElementById("hideName").style.display = "none";
     }
 }, 1000);
 
 hideJHB();
 hidePTA();
 showPTAeast();
 showEstate();
 showNumber();
 showContactNumber();
 showContactName();
 showPTAnorthEast();
 showPTAnorthWest();
 showPTACentral();
 showPTACentralWest();
 showCenturion();
 showComplex();
 showBuilding();
 showOffice();
 showMall();
 showShop();
 showHouse()
 showJHBNorth();
 showJHBEast();
 showJHBCentral();
 showJHBNorthWest();
 showJHBSouth();
 showJHBSouthWest();
 showJHBDoornfontein();
 showJHBBraamfontein();
 showJHBHillbrow();
 showJHBNewDoornfontein();
 showJHBNewtown();
 showJHBCBD();
 showStructureDoornfontein();
 showStructureNewDoornfontein();
 showStructureNewtown();
 showStructureBraamfontein();
 showStructureHillbrow();
 showStructureJHBCBD();
 

