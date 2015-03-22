    <div class="grid920" style="text-align:right"><a href="index.php?page=index" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=tipoalmacen" method="post">
             <label>Tipo Almacen</label>
                <input type="text" name="intIdtipoalmacen1"
                       id="intIdtipoalmacen1" placeholder="Codigo Tipo Almacen"
                       value = "{{intIdtipoalmacen1}}"/>
                <br/>
                <label>Descripcion</label>
                <input type="text" name="txtTipoalmacendesc1"
                       id="txtTipoalmacendesc1" placeholder="Tipo Almacen Descripcion"
                       value = "{{txtTipoalmacendesc1}}" />
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