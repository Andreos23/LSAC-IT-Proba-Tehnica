<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajutor pentru programator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="/css/style1.css">
</head>

<body>
    <header class="px-4 mx-4 py-5">
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand float-left" href="/"><img class="img-fluid" src="/img/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="collapse_target" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/button-colapse.png" alt="">
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link button-black mx-2 px-4" href="/">Logare</a></li>
                    <li class="nav-item"><a class="nav-link button-white mx-2 px-4" href="/">Creare cont</a></li>
                    <li class="nav-item"><a class="nav-link button-white ml-2 px-4" href="/">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="px-4 mx-4 py-5 row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 pt-5 mt-5">
            <h1 class="mb-5 h-text text-center text-lg-left">Cumpăratul de teme nu a fost niciodată mai simplu!</h1>
            <p class="mb-5 pb-4 text-center text-lg-left p-text">Platforma ideala pentru studenții de la Politehnică cu portofele pline, care au nevoie urgent de un înger care să le repare nota de intrare în examen.</p>
            <div class="d-flex flex-column d-lg-inline">
                <button class="button-black px-3 py-2 mb-3 mr-lg-3" data-toggle="modal" data-target="#Modal">Vreau să cumpăr</button>
                <button class="button-green px-3 py-2">Vreau sa fac teme pentru alții</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="/img/fata.png" class="img-fluid mx-auto d-block float-lg-right" alt="">
        </div>
    </div>
    <div class="container-fluid pb-5" style="background-color: #92E3A9">
        <h1 class="pt-5 pb-5 h-text text-center">Cum funcționează?</h1>
        <div class="mr-5 pr-5 ml-5 pl-5 row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="media">
                    <h1 class="mr-3 numbers">1</h1>
                    <p class="media-body p-text">Realizezi un cont pe platformă în care introduci câteva detalii personale (nu vă faceți griji, profesorii nu or să va descopere) și materiile la care ai nevoie de ajutor.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
                <div class="media">
                    <h1 class="mr-3 numbers">2</h1>
                    <p class="media-body p-text">Străbați platforma în căutare de studenți care oferă servicii la materiile dorite sau te rogi la Sfântul 5 să primești mesaj de la cineva care te descoperă și e dispus să te salveze.</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
                <div class="media ">
                    <h1 class="mr-3 numbers">3</h1>
                    <p class="media-body p-text">După ce stabiliți o sumă care oricum este de zeci de ori mai mare decât la alte universități, aștepti ca noul vostru amic să vă încarce soluția pe platformă. Jumătate din plată oferiți în avans, restul după ce vă vedeți intrat în examen.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="py-5">
        <div class="container my-5">
            <div style="box-shadow: 0px 10px 30px rgba(38, 50, 56, 0.2); border-radius: 5px;" class="px-5 py-5 row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h1 class="text-form text-center text-md-left pb-3">Ai tupeu și crezi că poți să aduci îmbunătățiri la platformă?</h1>
                    <p class="p-text text-center text-md-left">Trimite-ne un mail și roagă-te să nu ne apuce râsul când vedem ce îți trece prin cap.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <form action="/php/email.php" method="get">
                        <div class="form-group ">
                            <label class="label-form " for="exampleInputEmail1 ">Nume</label>
                            <input class="input-border form-control " type="text ">
                        </div>
                        <div class="form-group ">
                            <label class="label-form " for="exampleInputEmail1 ">Email</label>
                            <input type="email " class="input-border form-control " id="exampleInputEmail1 ">
                        </div>
                        <div class="form-group ">
                            <label class="label-form " for="exampleFormControlTextarea1 ">Înjurătura</label>
                            <textarea class="form-control input-border" id="exampleFormControlTextarea1 " rows="3 "></textarea>
                        </div>
                        <button class="button-black px-5 py-2 my-3 ">Trimite</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center pt-5 " style="background-color: #263238; ">
        <div>
            <ul class="list-unstyled list-inline ">
                <li class="list-inline-item ">
                    <a href="https://www.instagram.com/"><img src="/img/Instagram.png " alt=" "></a>
                </li>
                <li class="list-inline-item ">
                    <a href="https://www.twitter.com/"><img src="/img/Twitter.png " alt=" "></a>
                </li>
                <li class="list-inline-item ">
                    <a href="https://www.facebook.com/"><img src="/img/Facebook.png " alt=" "></a>
                </li>
            </ul>
        </div>
        <p class="pb-4 mb-0 footer-title">Copyright 2020 | Cine ne pârăște o mierlește.</p>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header pl-4" style="background-color: #92E3A9">
                    <h5 class="modal-title" id="Modal">Exprimă-ți frustrările</h5>
                    <button type="button" class="close-modal pb-1" data-dismiss="modal" aria-label="Close"><span aria-hidden=" true ">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="pb-6" action="/php/add_frustare.php" method="get">
                        <div class="form-group">
                            <select  type="text" class="form-control input-border" id="materie" name="materie">
                                <option value="" disabled selected class="form-control">Alege materia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control input-border" name="frustrare" placeholder="Titlul proiectului">
                        </div>
                        <div class="text-center">
                            <button class="button-black" style="padding: 8px 50px 8px 50px!important; margin-bottom: 20px!important;" type="submit" >Încarcă</button>
                        </div>
                    </form>
                </div>
                <div class="container-fluid pl-4 py-3" style="background-color: #92E3A9">
                    <h5 class="modal-title" id="Modal">Plângeri introduse până acum.</h5>
                </div>
                <div class="py-4 pl-4">
                    <?php include 'php/show_frustrare.php';?>
                </div>
                <!-- <div class="modal-footer ">
                    <button type="button " class="btn btn-secondary " data-dismiss="modal ">Close</button>
                    <button type="button " class="btn btn-primary ">Understood</button>
                </div> -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</body>
<script>
    fetch('./data/materie.json')
        .then(materii => materii.json())
        .then(materii => {
            materii.forEach(obj => {
                Object.entries(obj).forEach((optionText) => {
                    $('#materie').append(`<option class="form-control"> ${optionText[1]} </option>`);
                });
            });
        });
</script>

</html>