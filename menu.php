<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
<div id="demo">
</div>
<link rel="stylesheet" type="text/css" href="css/bulma.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.mjs.nestedSortable.js"></script>
<script type="text/javascript">
        alert("maythu");
        var retrievedData = localStorage.getItem("menu-datas");
        alert(retrievedData);
        //change obj from string
	    var obj = JSON.parse(retrievedData);
        console.log(obj);
</script>
</body>
</html>