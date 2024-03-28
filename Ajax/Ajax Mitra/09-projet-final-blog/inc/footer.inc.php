    <!-- Modal inscription -->
    <div class="modal fade" id="exampleModalInscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="post" id="form_inscription">
                <input type="text" class="form-control" name="pseudo_inscription" id="pseudo_inscription" placeholder="Pseudo..."><br>
                <input type="text" class="form-control" name="mdp_inscription" id="mdp_inscription" placeholder="Mot de passe..."><br>

                <input type="text" class="form-control" name="email_inscription" id="email_inscription" placeholder="Email..."><br>
                <input type="text" class="form-control" name="avatar_inscription" id="avatar_inscription" placeholder="Avatar...">
                <small class="form-text text-danger text-right mb-4">Insérer une url valide pour l'avatar.</small>
                <button type="submit" class="btn btn-success w-100" name="validation_inscription" id="validation_inscription">Valider</button>
            </form>
            </div>
            <div class="modal-footer" id="message_inscription">
            <p>Bienvenue</p>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal connexion -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="post" id="form_connexion">
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo..."><br>
                <input type="text" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe..."><br>
                <button type="submit" class="btn btn-info w-100" name="validation" id="validation">Valider</button>
            </form>
            </div>
            <div class="modal-footer" id="message">
            <p>Bienvenue</p>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/monScript.js"></script>
    </body>
    </html>