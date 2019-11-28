<!DOCTYPE html>
<html lang="de">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Lato|Oswald:500,700" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <title>Alexander Horner als Schülersprecher</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149672776-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149672776-1');
</script>


</head>

<body>


  <section class="landingscreen">
    <div class="landingpage__center">
      <span class="landingpage__center__title">Alexander Horner</span>
      <div class="landingpage__center__mail">Schlage hier vor was du an der Schule geändert haben willst! Wenn du mich dann als Schülersprecher wählst, kann ich deine Wünsche verwirklichen</div>
      <button type="button" class="unten btn btn-outline-dark">Weiter nach unten</button>
    </div>
  </section>
  <section class="vote">
    <div class="wrapper">

      <div class="alert alert-success" hidden role="alert">
        Abgesendet! Alles was jetzt noch zu tun ist, ist mich zu wählen, damit ich auf alle eure Wünsche eingehen kann!
      </div>

      <div class="alert alert-danger" hidden role="alert">
        Ups! Etwas ist schief gelaufen! Überprüfe deine Internetverbindung und versuche es später nochmal.
      </div>

      <div class="container-vote">
        <h4 class="vote__header">Schicke hier deine Vorschläge ein:</h4>

        <form>
          <div class="form-group">
            <label for="name">Name (optional):</label>
            <input name="name" maxlength="100" type="text" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="klasse">Klasse (optional):</label>
            <input name="klasse" maxlength="5" type="tex" class="form-control" id="klasse" placeholder="Klasse">
          </div>
          <div class="form-group">
            <label for="wunsch">Wunsch:</label>
            <textarea name="wunsch" maxlength="1024" required class="form-control" id="wunsch" rows="3" placeholder="Deine Wünsche und Vorschläge"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Abschicken</button>
        </form>
      </div>
      <div>
  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="home.js"></script>
</body>

</html>
