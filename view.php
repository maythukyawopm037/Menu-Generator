<!DOCTYPE html>
<html>
	<head>
	    <title>Menu Generator</title>
    </head>
	<body>
		<h3>Menu Generator</h3>
				    <input type="text" class="input is-primary" style="width:200px;" name="new-menu" id="new-menu" value=""></input>
					<button id="add" class="tag is-info is-large">Add</button>
	                &nbsp;
					<ol class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded" id="head">
					</ol>
			
				<p>
					<input id="toHierarchy" class="input is-info" style="width:50px;" name="toHierarchy" type="submit" value=
			        "Save">
			        <input id="preview" class="input is-info" style="width:80px;" name="preview" type="submit" value=
			        "Preview" onclick="loadXMLDoc()">
		        </p>
		        <pre id="toHierarchyOutput"></pre>
	</body>
</html>
<link rel="stylesheet" type="text/css" href="css/bulma.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.mjs.nestedSortable.js"></script>
<script>
	$(document).ready(function(){
			var ns = $('ol.sortable').nestedSortable({
				forcePlaceholderSize: true,
				handle: 'div',
				helper:	'clone',
				items: 'li',
				opacity: .6,
				placeholder: 'placeholder',
				revert: 250,
				tabSize: 25,
				tolerance: 'pointer',
				toleranceElement: '> div',
				maxLevels: 10,
				isTree: true,
				expandOnHover: 700,
				startCollapsed: false,
				change: function(){
					console.log('Relocated item');
				}
		});

		$('#toHierarchy').click(function(){
			menu = $('ol.sortable').nestedSortable('toHierarchy', {startDepthCount: 0});
			localStorage.setItem("menu-datas", JSON.stringify(menu));
			alert("SAVED!");
		})

		$('#preview').click(function(){
			window.location.assign("../menugenerator/menu.php")
		})
		var i=0;
		$('#add').on('click',function(){
			i=i+1;
			alert(i);
			var datas= document.getElementById("new-menu").value;
			var ol = document.getElementById("head");
			var li1 = document.createElement("li");
			li1.setAttribute("id", "menuItem_"+i);
			li1.setAttribute("data-foo",datas);
			ol.appendChild(li1);

			var link1= '<div class="menuDiv"><div id="menu"><p>'+datas+'</p></div></div>'; 
			document.getElementById("menuItem_"+i).innerHTML=link1;

	    });
		$("#head").html(localStorage.getItem("menu-datas"));

});
</script>