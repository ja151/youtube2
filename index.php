<html>
<head>
</head>
<body> 
    <div id="url">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" />
        <input name="submit" type="submit" value="enviar" id="descarga" />
    </div>
    <div id="uno" style="position:absolute; height:20px; margin-top:-17px; margin-left:70px;">
        <p id="value"></p>
    </div>
    <div id="dos">
        <progress style="position:relative; opacity:0.5;" id="barra" value="0" max="100"></progress>
    </div>
    <script src="jquery-1.8.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">  
    $(document).ready(function() {
        function idYoutube(url){
            var youtube_id;
            youtube_id = url.replace(/^[^v]+v.(.{11}).*/,"$1");
            return youtube_id;
        }
        $("#url").hide();
        $.get("comprueba_ip.php",function(data){        
            if(data==1){
                alert("Tienes descargas en curso");
            }else{
                $("#url").show();           
            }
        });
        var a,bandera=true,intervalo;
        $("#uno").hide();
        $("#dos").hide();
        $("#descarga").click(function() {
            var url = $("input#url").val();
            var idUrl = idYoutube(url);
            $.post("comprueba_videos_almacenados.php", 'url='+idUrl, function(data){
                if(data==1){  
                    $(location).attr('href','devuelve_video.php');  
                }else{
                    $.post("rindex.php", 'idUrl=' + idUrl + '&url=' + url, function(data){
                        if(data=="No existe"){
                            alert("La url no existe");
                        }else{                           
                            a = data;
                            prueba();
                        }
                    });
                    function actualiza(){
                        $.post("porcentaje.php",'porcentaje='+a,function(data1){
                            $("#url").hide();
                            $("#uno").show();
                            $("#dos").show();
                            $("#barra").attr("value",data1);
                            $("#value").text(data1 +'%');
                            if(data1==100 && bandera==true){                               
                                $.post("ja.php", 'url='+idUrl, function(){ 
                                    $(location).attr('href','devuelve_video.php'); // en caso de querer pasarle el video para que lo devuelva, se lo pasariamos a traves de la url
                                });                               
                                clearInterval(intervalo);
                                $("#uno").hide();
                                $("#dos").hide();
                                $("#url").show();
                                bandera=false;                                
                                //$.get("devuelve_video.php",'url='+idUrl); 
                            }
                        });
                    }
                    function prueba(){
                        $.post("actualiza_porcentaje.php",'id='+a);
                        intervalo = setInterval(actualiza,5000);
                    }
                }
            });
        });
        
    });
    </script>
</body>
</html>