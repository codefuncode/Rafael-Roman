<div class="w3-container">
   <!--    <h2>
      W3.CSS Login Modal
   </h2>
   <button class="w3-button w3-green w3-large" onclick="document.getElementById('registo').style.display='block'">
      Login
   </button> -->
   <div class="w3-modal all_modal" id="registo" style="display:none;">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
         <div class="w3-center">
            <br/>
            <span class="w3-button w3-xlarge w3-hover-red w3-display-topright" onclick="document.getElementById('registo').style.display='none'" title="Close Modal">
               ×
            </span>
            <!--  <img alt="Avatar" class="w3-circle w3-margin-top" src="./img/img_avatar4.png" style="width:30%"/> -->
            <h5>
               Restregase completando el formulario
            </h5>
         </div>
         <div class="w3-container">
            <div class="w3-section">
               <label>
                  <b>
                     Nombre de usuario
                  </b>
               </label>
               <input class="w3-input w3-border w3-margin-bottom registro_nombre" name="nombre_usuario" placeholder="Enter Username" required="" type="text"/>
               <div class="w3-section">
                  <!--
               <label>
               <b>
               Coreo electromecánico
               </b>
               </label>
               <input class="w3-input w3-border w3-margin-bottom registro_correo" name="correo" placeholder="Enter Username" required="" type="email"/>
               -->
                  <label>
                     <b>
                        Contraseña
                     </b>
                  </label>
                  <input class="w3-margin-bottom w3-input w3-border registro_pass" name="pass" placeholder="Enter Password" required="" type="password"/>
                  <label>
                     <b>
                        Repita la contraseña
                        <span class="mensaje_repite_pass">
                        </span>
                     </b>
                  </label>
                  <input class="w3-margin-bottom w3-input w3-border registro_repite_pass" name="repite_pass" placeholder="Enter Password" required="" type="password"/>
                  <!-- -->
                  <button class="w3-button w3-block w3-green w3-section w3-padding enviar" type="button">
                     Inicio
                  </button>
               </div>
            </div>
         </div>
         <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <span class="w3-left w3-padding">
               <button class="w3-button w3-red" onclick="document.getElementById('registo').style.display='none'" type="button">
                  Cancel
               </button>
            </span>
            <span class="w3-right w3-padding ">
               <button class="w3-button w3-orange" id="iniciar_session" type="button">
                  Iniciar sección
               </button>
            </span>
         </div>
      </div>
   </div>
</div>
<div class="w3-container">
</div>
