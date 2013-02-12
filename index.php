<html>
<head>
<script src="jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jquery-1.8.3.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#descarga").click(function() {
            var url = $("input#url").val();               
            $.post("rindex.php", 'url='+url,function(data){
                alert(data);
            });
            
            
            $.get("rindex.php", function(data){
                alert(data);
            });
        }); 
});
</script>
</head>
<body> 
    <label for="url">URL:</label>
    <input type="text" id="url" name="url" />
    <input name="submit" type="submit" value="enviar" id="descarga" />               
</body>
</html>