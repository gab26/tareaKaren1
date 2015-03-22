    <div class="grid920" style="text-align:right"><a href="index.php?page=index" class="actionBtn">Regresar</a></div>
    <div class="grid920">
        <form action="index.php?page=empresas" method="post">
             <label>Codigo Empresa</label>
                <input type="text" name="intIdempresa"
                       id="intIdempresa" placeholder="Codigo Empresa"
                       value = "{{intIdempresa}}"/>
                <br/>
                <label>Descripcion</label>
                <input type="text" name="txtEmpresadesc"
                       id="txtEmpresadesc" placeholder="Tipo Almacen Descripcion"
                       value = "{{txtEmpresadesc}}" />
                <br/>
                
                 <label>Estado</label>
                <input type="text" name="txtEmpresaestado"
                       id="txtEmpresaestado" placeholder="Tipo Almacen Descripcion"
                       value = "{{txtEmpresaestado}}" />
                <br/>
                
                 <label>Tipo de Empresa</label>
                <input type="text" name="txtEmpresatipo"
                       id="txtEmpresatipo" placeholder="Tipo Almacen Descripcion"
                       value = "{{txtEmpresatipo}}" />
                <br/>
                
                 <label>Telefono</label>
                <input type="text" name="txtEmpresatelefono"
                       id="txtEmpresatelefono" placeholder="Tipo Almacen Descripcion"
                       value = "{{txtEmpresatelefono}}" />
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