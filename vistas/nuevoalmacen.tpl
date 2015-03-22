    <div class="grid920" style="text-align:right"><a href="index.php?page=index" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=nuevoalmacen" method="post">
             <label>Almacen</label>
                <input type="text" name="intIdalmacenes"
                       id="intIdalmacenes " placeholder="Codigo Almacen"
                       value = "{{intIdalmacenes }}"/>
                <br/>
                <label>Razon Social</label>
                <input type="text" name="txtAlmacenrazon"
                       id="txtAlmacenrazon" placeholder="Razon Social"
                       value = "{{txtAlmacenrazon}}" />
                <br/>
                <label>Descripcion</label>
                <input type="text" name="txtAlmacendesc"
                       id="txtAlmacendesc" placeholder="Descripcion"
                       value = "{{txtAlmacendesc}}" />
                <br/>
                 <label>Tipo Almacen</label>
                <input type="text" name="intTipoalmacen"
                       id="intTipoalmacen" placeholder="Tipo Almacen"
                       value = "{{intTipoalmacen}}" />
                <br/>
                <br/>
                
                <input type="submit" name="btnInsert"
                       value="Agregar" id="btnInsert" />
                <br/>
                  <input type="submit" name="btnUpdate" value="Actualizar" id="btnUpdate"/>
                  <br/>
                <input type="submit" name="btnDelete" value="Eliminar" id="btnDelete"/>
        </form>
        <div class="error">
            {{error-msg}}
        </div>
    </div>