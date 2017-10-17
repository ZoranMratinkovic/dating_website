$(document).ready(function(){
    //jquery code to toggle the form on mobile screens
    $('#ShowFilterForm').click(function(){
            var newWindowWidth = $(window).width();
            if (newWindowWidth < 800)
            {
                $('.filterForma').toggle('slow');
            }
            else
            {
                $('.filterForma').hide();
            }
        });
});
/*Category field ajax*/
function kreiraj(){
    if (window.XMLHttpRequest){ 
        request = new XMLHttpRequest(); 
        return request;
    }
    else{ 
        request = new ActiveXObject("Microsoft.XMLHTTP"); }
    }
    
function AjaxSearch(e){
    request = kreiraj();
    
    if(!request){
        alert('Nije napravljen kanal za filtriranje.');
    }

    else{
        request.open('GET','filter.php?filter='+e,true);
        request.onreadystatechange = updateFilter;
        request.send(null);
    }
}
function updateFilter(){
    if(request.readyState == 4 && request.status == 200){
    var text = request.responseText;
    document.getElementById('ajaxUpis').style.display='block';
    document.getElementById('ajaxUpis').innerHTML = text;

    }
}
function ispis_u_polje(e)
{
	$value = e.innerHTML;
	document.getElementById('tbCategory').value = $value;
	document.getElementById('ajaxUpis').style.display='none';
}
/*Category field ajax*/

/*kanton field ajax*/
function AjaxSearch1(e){
    request = kreiraj();
    
    if(!request){
        alert('Nije napravljen kanal za filtriranje.');
    }

    else{
        request.open('GET','filter.php?filter_kanton='+e,true);
        request.onreadystatechange = updateFilter1;
        request.send(null);
    }
}
function updateFilter1(){
    if(request.readyState == 4 && request.status == 200){
    var text = request.responseText;
    document.getElementById('ajaxUpis1').style.display='block';
    document.getElementById('ajaxUpis1').innerHTML = text;

    }
}

function ispis_u_polje1(e)
{
	$value = e.innerHTML;
	document.getElementById('tbKanton').value = $value;
	document.getElementById('ajaxUpis1').style.display='none';
}
/*kanton field ajax*/