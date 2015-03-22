<div class="grid920" style="text-align:right;">
        <a href="index.php?page=nuevoalmacen" class="actionBtn">+ Mantenimiento Almacenes</a>
    </div>
    <div class="grid920">
        {{foreach almacenes}}
        <div class="item">
            <img src="" />
            <h4>{{almacenrazon}}</h4>

            <span><b>Descripcion:</b> {{almacendesc}}</span>
        </div>
        {{endfor almacenes}}
    </div>