<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>oOo</title>
  <link rel="stylesheet" type="text/css" href="/themes/olympos/assets/dist/css/style.css">
</head>
<body>
<div class="container">
  <h2><?= 'Salut en PHP ! => ' . (3 + 2); ?></h2>

  <?php

  $pays = [
    'fr',
    'be',
    'it',
    'de',
    'australia'
  ];

  foreach ($pays as $codepays) {
    echo '<i class="' . $codepays . ' flag"></i>';
  }

  ?>
  <hr>
  <div class="ui floating message">
    <p><i class="attention icon"></i><strong>Un message flottant: Marche à suivre!</strong></p>
  </div>
  <p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem commodi, consequatur doloribus
    earum et excepturi.</p>
  <hr>

  <table class="ui sortable celled table 50pc">
    <thead>
    <tr>
      <th class="sorted descending">Name</th>
      <th>Status</th>
      <th class="">
        <div class="ui ribbon label">Notes</div>
      </th>
    </tr>
    </thead>
    <tbody>


    <tr>
      <td>John</td>
      <td class="error">Aucune Action</td>
      <td class="positive">None</td>
    </tr>
    <tr>
      <td>
        <div class="ui ribbon label">Jill</div>
      </td>
      <td class="ui negative">Denied</td>
      <td class="red">None 2</td>
    </tr>
    <tr>
      <td>Jamie</td>
      <td class="positive">Approuvé</td>
      <td class="warning">Nécessite un appel tel.</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th>3 personnes</th>
      <th>2 approuvés</th>
      <th></th>
    </tr>
    </tfoot>
  </table>

  <hr>

  <div class="ui animated button" tabindex="0">
    <div class="visible content">Next</div>
    <div class="hidden content">
      <i class="right arrow icon"></i>
    </div>
  </div>
  <div class="ui vertical animated button" tabindex="0">
    <div class="hidden content">Shop</div>
    <div class="visible content">
      <i class="shop icon"></i>
    </div>
  </div>
  <div class="ui animated fade button" tabindex="0">
    <div class="visible content">Sign-up for a Pro account</div>
    <div class="hidden content">12.99 € par mois</div>
  </div>

  <hr>

  <div class="ui labeled button" tabindex="0">
    <div class="ui red button"><i class="heart icon"></i> Aimer</div>
    <a class="ui basic red left pointing label">
      1,048
    </a>
  </div>
  <div class="ui labeled button" tabindex="0">
    <div class="ui basic blue button"><i class="fork icon"></i> Forks</div>
    <a class="ui basic left pointing blue label">
      1,048
    </a>
  </div>

  <div class="ui inverted segment">
    <button class="ui inverted button">Standard</button>
    <button class="ui inverted red button">Rouge</button>
    <button class="ui inverted orange button">Orange</button>
    <button class="ui inverted yellow button">Jaune</button>
    <button class="ui inverted olive button">Olive</button>
    <button class="ui inverted green button">Vert</button>
    <button class="ui inverted teal button">Teal</button>
    <button class="ui inverted blue button">Bleu</button>
    <button class="ui inverted violet button">Violet</button>
    <button class="ui inverted purple button">Violet</button>
    <button class="ui inverted pink button">Rose</button>
    <button class="ui inverted brown button">Marron</button>
    <button class="ui inverted grey button">Gris</button>
    <button class="massive ui inverted black button">Black</button>
    <a class="ui blue image label"><i class="user icon"></i>Veronika
      <div class="detail">Ami</div>
    </a>
    <a class="big ui blue image label"><img src="themes/olympos/assets/images/leo.jpg">Lionel
      <div class="detail">Moi</div>
    </a>
    <div class="ui left pointing label purple">Eh oui, c'est moi</div>
  </div>

  <hr>

  <div class="ui two column middle aligned very relaxed stackable grid">
    <div class="column">
      <div class="ui form">
        <div class="field">
          <label>Username</label>
          <div class="ui left icon input">
            <input type="text" placeholder="Username">
            <i class="user icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Password</label>
          <div class="ui left icon input">
            <input type="text" placeholder="Password">
            <i class="lock icon"></i>
          </div>
        </div>
        <div class="ui blue submit button">Login</div>
      </div>
    </div>
    <div class="ui vertical divider">Ou</div>
    <div class="center aligned column">
      <div class="ui big green labeled icon button"><i class="signup icon"></i> S'inscrire</div>
    </div>
  </div>

  <hr>

  <table class="ui compact celled definition table">
    <thead>
    <tr>
      <th></th>
      <th>Name</th>
      <th>Registration Date</th>
      <th>E-mail address</th>
      <th>Premium Plan</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>John Lilki</td>
      <td>14 septembre 2014</td>
      <td>jhlilk22@yahoo.com</td>
      <td>Non</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>Jamie Harington</td>
      <td>11 janvier 2014</td>
      <td>jamieharingonton@yahoo.com</td>
      <td>Oui</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>Jill Lewis</td>
      <td>11 mai 2014</td>
      <td>jilsewris22@yahoo.com</td>
      <td>Oui</td>
    </tr>
    </tbody>
    <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="4">
        <div class="ui right floated small primary labeled icon button"><i class="user icon"></i> Ajouter un utilisateur
        </div>
        <div class="ui small button">Approuver</div>
        <div class="ui small  disabled button">Tout Approuver</div>
      </th>
    </tr>
    </tfoot>
  </table>

</div>
<script src="http://wl/themes/olympos/assets/compiled/js/all.js"></script>
<script src="themes/default/assets/js/tablesort.js"></script>

<script>
  $(function () {
    $('table').tablesort();
    console.log("Ready for more!");
  });

</script>

</body>
</html>