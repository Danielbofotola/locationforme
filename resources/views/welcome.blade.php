<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('./asset/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('./asset/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('./asset/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('./asset/css/style.css')    }}">

    <title>Login #8</title>
  </head>
  <body>



  <div class="content">
    <div class=" px-5">
      <div class="row">
        <div class="col-md-5 order-md-2">
          <img src="{{url('./asset/images/Sans titre - 2.png')}}" alt="Image" class="img-fluid">
          <h2 class="font-weight-bolder">Offrez-vous une sensation inedit sur le Fleuve congo</h2>
        </div>

        <div class="col-md-7 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><strong>Reser</strong>vation</h3>
              <p class="mb-4">Location 150$/par heure</p>
            </div>

            <form  action="{{ route('reservations.store') }}" method="POST">
                @csrf
             <div class="row gap-2">

                <div class="form-group first col-md-6">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control border rounded px-3" name="nom" id="nom" required>
                </div>

                <div class="form-group first col-md-6">
                  <label for="prenom">Prenom</label>
                  <input type="text" class="form-control border rounded px-3" name="prenom" id="prenom">
                </div>

                <div class="form-group first col-md-6">
                  <label for="phone">Numero Telephone</label>
                  <input type="text" class="form-control border rounded px-3" name="phone" id="phone" required>
                </div>

                <div class="form-group first col-md-6">
                  <label for="date_reservation"></label>
                  <input type="date" class="form-control border rounded px-3" name="date_reservation" id="date_reservation" required>
                </div>

                <div class="form-group first col-md-6">

                 <input type="text" value=""
                                    class="form-control border rounded px-3"
                                    id="prixTotal"
                                    readonly>
                 <input type="hidden" id="prixTotalHidden" name="prix_total">

                </div>

                <div class="form-group first col-md-6">
                  <label for="username">Heure de début </label>
                 <input type="time"
                                class="form-control border rounded px-3"
                                name="heure_debut"
                                id="heureDebut"
                                min="08:00"
                                max="16:00"
                                required>
                </div>

                <div class="form-group first col-md-6">
                  <label for="username">Heure de fin</label>
                  <input type="time"
                                    class="form-control border rounded px-3"
                                    name="heure_fin"
                                    id="heureFin"
                                    min="08:00"
                                    max="16:00"
                                    required>
                </div>



                  <div class="form-group first col-md-6">
                  <label for="username">Nombre de participants</label>
                  <input type="number"
                                        class="form-control border rounded px-3"
                                        name="nombre_participants"
                                        min="1"
                                        required>
                </div>

             </div>

              <input type="submit" value="Pre-reserver" class="btn text-white btn-block btn-dark">

              <span class="d-block text-left my-4 text-muted d-none"> Ou suivez nous sur :</span>

              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>


  <script>
const PRIX_PAR_HEURE = 150;

const heureDebut = document.getElementById("heureDebut");
const heureFin = document.getElementById("heureFin");
const prixTotal = document.getElementById("prixTotal");
const prixTotalHidden = document.getElementById("prixTotalHidden");

function calculerPrix() {
  if (!heureDebut.value || !heureFin.value) {
    prixTotal.value = "";
    prixTotalHidden.value = "";
    return;
  }

  const debut = new Date(`1970-01-01T${heureDebut.value}:00`);
  const fin = new Date(`1970-01-01T${heureFin.value}:00`);

  if (fin <= debut) {
    alert("L'heure de fin doit être supérieure à l'heure de début.");
    heureFin.value = "";
    prixTotal.value = "";
    prixTotalHidden.value = "";
    return;
  }

  const heures = (fin - debut) / (1000 * 60 * 60);
  const total = (heures * PRIX_PAR_HEURE).toFixed(2);

  prixTotal.value = total;
  prixTotalHidden.value = total;
}

heureDebut.addEventListener("change", calculerPrix);
heureFin.addEventListener("change", calculerPrix);
</script>


    <script src="{{url('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('./asset/js/popper.min.js')}}"></script>
    <script src="{{url('./asset/js/bootstrap.min.js')}}"></script>
    <script src="{{url('./asset/js/main.js')}}"></script>
  </body>
</html>
