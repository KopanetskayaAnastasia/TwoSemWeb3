<!DOCTYPE html>
<html lang ="ru">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
      <link href="style.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Второй семестр задание №3</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="d-flex flex-column">
        <header>
          <div id="header" class="col-sm-12 p-1 order-md-0 mx-auto">
            <div id="own">Второй семестр задание №3</div>
          </div>
        </header>
        <div id="content">
          <div id = "form" class="col-sm-12 col-md-7 text-center p-1 order-md-4 mx-auto">
            <h1>Форма</h1>
            <form action="" method="POST">
              <label>Ваше Имя:</label>
              <br>
              <input name="fio" />
              <br>
              <label>Еmail:</label>
              <input name="email" />
              <br>
              <label>Год рождения:</label>
              <br>
              <select name="year">
                <?php 
                  for ($i = 1922; $i <= 2022; $i++) {
                    printf('<option value="%d">%d год</option>', $i, $i);
                  }
                ?>
              </select>
              <label>Пол:</label>
              <br>
              <label><input name="gender" type="radio" value="w" />Женский</label>
              <label><input name="gender" type="radio" value="m" />Мужской</label>
              <br>
              <label>Количество конечностей:</label>
              <br>
              <label>1<input name="limbs" type="radio" value="1" /></label><br>
              <label>2<input name="limbs" type="radio" value="2" /></label><br>
              <label>3<input name="limbs" type="radio" value="3" /></label><br>
              <label>4<input name="limbs" type="radio" value="4" /></label>
              <br>
              <label>Сверхспособности</label>
              <br>
              <select name="ability[]" multiple="multiple">
                <option value="1" selected="selected">none</option>
                <option value="2" >Бессмертие</option>
                <option value="3" >Прохождения сквозь стены</option>
                <option value="4" >Левитация</option>
              </select>  
              <br>
              <label>Биография:</label>
              <br>
              <input name="biography" type="textarea">
              <br>
              <label>Отправить  </label>
              <input type="submit" value="ok" />
            </form>
          </div>
        </div>
      <div>
    </div>
  </body>
</html>
    

