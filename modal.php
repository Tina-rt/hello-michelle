<div id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title">Demande de devis</div>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <label for="canaux">Canal de communication</label>
              <select name="canaux" id="canaux">
                <option value="Meet">Google Meet</option>
                <option value="Skype">Skype</option>
                <option value="WhatsApp">WhatsApp</option>
                <option value="Teams">Teams</option>
              </select>
            </div>
            <div class="form-group">
              <label for="id_client"
                >Votre ID (WhatsApp, skype ou adresse mail)</label
              >
              <input type="text" name="id_client" id="id_client" />
            </div>
            <div class="form-group">
              <label for="date_client">Date que vous préféré</label>
              <input type="date" name="date_client" id="date_client" />
            </div>
            <div class="form-group">
              <label for="time_in">Le créneau que vous préféré</label>
              <div class="flex">
                <input type="time" name="time_in" id="time_in" />
                <input type="time" name="time_out" id="time_out">
              </div>
            </div>
            <div class="btn-primary">Envoyer</div>
          </form>
        </div>
      </div>
    </div>