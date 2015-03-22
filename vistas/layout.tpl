<!DOCTYPE html>
<html>
<head>
    <title>{{page-titulo}}</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="publico/estilos/estilo.css" />
    {{foreach links}}
        <link rel="stylesheet" href="{{link}}" />
    {{endfor links}}
</head>
<body>
    <ul class="menu">
                <li><a href="index.php?page=nuevoalmacen">Almacenes</a></li>
                <li><a href="index.php?page=tipoalmacen">Tipo Almacen</a></li>
                <li><a href="index.php?page=tipomaterial">Tipo de Material</a></li>
                <li><a href="index.php?page=empresas">Empresas</a></li>
    </ul>
    <div class="logo">
        <img src="publico/imagenes/logo.svg" />
        <h1>{{page-subtitulo}}</h1>
    </div>
   <div class="grid920 {{showerror}}" style="background-color:orange;">
        <ol>
        {{foreach glberrors}}
            <li>{{codigo}} | {{error}}</li>
        {{endfor glberrors}}
        </ol>
   </div>
   {{{mvc_contenido}}}
   <div class="footer">
        Negocios WEB SCJ 2015
   </div>
</body>
</html>