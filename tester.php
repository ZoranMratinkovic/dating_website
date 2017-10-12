<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery SelectListActions Plugin Demos</title>
  <meta name="description" content="Select List Actions - jQuery Plugin">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery.selectlistactions.js"></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
  <script src="src/jquery.bootstrap-duallistbox.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/site.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="http://www.jqueryscript.net/form/Lightweight-Multi-select-Combo-Box-Plugin-For-jQuery-SelectListActions.html">Download This Plugin</a></li>
<li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
	<div class="container">
	<h1>jQuery SelectListActions Plugin Demos</h1>
  <form id="demoform" action="#" method="post">
  <select multiple="multiple" size="10" name="duallistbox_demo1[]">
    <option value="option1">Option 1</option>
    <option value="option2">Option 2</option>
    <option value="option3" selected="selected">Option 3</option>
    <option value="option4">Option 4</option>
    <option value="option5">Option 5</option>
    <option value="option6" selected="selected">Option 6</option>
    <option value="option7">Option 7</option>
    <option value="option8">Option 8</option>
    <option value="option9">Option 9</option>
    <option value="option0">Option 10</option>
  </select>
  <br>
  <button type="submit" class="btn btn-default btn-block">Submit data</button>
</form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <input type="button" id="selectAll" name="selectAll" value="Select All"><br />
  <input type="button" id="unselectAll" name="unselectAll" value="Unselect All"><br /><br />


  <select name="persons" id="persons" MULTIPLE size="8" class="listBox2">
     <option value="FR">Franck</option>
     <option value="GE">Georges</option>
     <option value="DA">David</option>
     <option value="LU">Luc</option>
     <option value="DO">Donald</option>
     <option value="FR">FRANCOIS</option>
  </select>





	<script>

     var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
     $("#demoform").submit(function() {
       alert($('[name="duallistbox_demo1[]"]').val());
       return false;
     });


        $('#btnAvenger').click(function (e) {
            $('select').moveToList('#StaffList', '#PresenterList');
            e.preventDefault();
        });

        $('#btnRemoveAvenger').click(function (e) {
            $('select').removeSelected('#PresenterList');
            e.preventDefault();
        });

        $('#btnAvengerUp').click(function (e) {
            $('select').moveUpDown('#PresenterList', true, false);
            e.preventDefault();
        });

        $('#btnAvengerDown').click(function (e) {
            $('select').moveUpDown('#PresenterList', false, true);
            e.preventDefault();
        });

        $('#btnShield').click(function (e) {
            $('select').moveToList('#StaffList', '#ContactList');
            e.preventDefault();
        });

        $('#btnRemoveShield').click(function (e) {
            $('select').removeSelected('#ContactList');
            e.preventDefault();
        });

        $('#btnShieldUp').click(function (e) {
            $('select').moveUpDown('#ContactList', true, false);
            e.preventDefault();
        });

        $('#btnShieldDown').click(function (e) {
            $('select').moveUpDown('#ContactList', false, true);
            e.preventDefault();
        });

        $('#btnJusticeLeague').click(function (e) {
            $('select').moveToList('#StaffList', '#FacilitatorList');
            e.preventDefault();
        });

        $('#btnRemoveJusticeLeague').click(function (e) {
            $('select').removeSelected('#FacilitatorList');
            e.preventDefault();
        });

        $('#btnJusticeLeagueUp').click(function (e) {
            $('select').moveUpDown('#FacilitatorList', true, false);
            e.preventDefault();
        });

        $('#btnJusticeLeagueDown').click(function (e) {
            $('select').moveUpDown('#FacilitatorList', false, true);
            e.preventDefault();
        });

        $('#btnRight').click(function (e) {
            $('select').moveToListAndDelete('#lstBox1', '#lstBox2');
            e.preventDefault();
        });

        $('#btnAllRight').click(function (e) {
            $('select').moveAllToListAndDelete('#lstBox1', '#lstBox2');
            e.preventDefault();
        });

        $('#btnLeft').click(function (e) {
            $('select').moveToListAndDelete('#lstBox2', '#lstBox1');
            e.preventDefault();
        });

        $('#btnAllLeft').click(function (e) {
            $('select').moveAllToListAndDelete('#lstBox2', '#lstBox1');
            e.preventDefault();
        });
    </script>
</body>
</html>
