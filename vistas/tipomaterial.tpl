    <div class="grid920" style="text-align:right"><a href="index.php?page=index" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=tipomaterial" method="post">
             <label>Codigo Material</label>
                <input type="text" name="intIdtipoalmacen"
                       id="intIdtipoalmacen" placeholder="Codigo Tipo Material"
                       value = "{{intIdtipoalmacen}}"/>
                <br/>
                <label>Razon Social</label>
                <input type="text" name="txtTipoalmacendesc"
                       id="txtTipoalmacendesc" placeholder="Tipo Material Descripcion"
                       value = "{{txtTipoalmacendesc}}" />
                <br/>
                <label>Cantidad</label>
                <input type="text" name="intTipoalmacencantidad"
                       id="intTipoalmacencantidad" placeholder="Cantidad"
                       value = "{{intTipoalmacencantidad}}" />
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