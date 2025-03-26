<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <div class="modal-title">Planifier une rencontre</div>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
      <form id="form_creneau" action="">
        <div class="form-group">
          <label for="nom_client">Votre nom et prenom</label>
          <input type="text" name="nom_client">
        </div>

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
          <label for="id_client">Votre ID (WhatsApp, skype ou adresse mail)</label>
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
        <div class="btn-primary" id="send_creneau">Envoyer</div>
      </form>
      <div class="msg hide">
        Votre demande a été prise en compte
      </div>
      <?php

      // Check if the form data has been submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['canaux'])) {
        // Retrieve the form data
        $nom_client = $_POST['nom_client'];
        $canaux = $_POST['canaux'];
        $id_client = $_POST['id_client'];
        $date = $_POST['date_client'];
        $time_in = $_POST['time_in'];
        $time_out = $_POST['time_out'];

        $message = "
  Chef de projet,
Vous avez reçu une demande de rencontre.

Voici les détails : 

- $nom_client
- ID Client: $id_client
- $canaux
- $date
- $time_in $time_out
        ";
        $headers = "Content-Type: text/plain; charset=UTF-8";

        mail("chef-de-projet@hello-michelle.com", "Demande de rencontre", $message, $headers);
      }

      ?>
    </div>
  </div>
</div>