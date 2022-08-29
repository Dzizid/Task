<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>


    <div class="center">
    <p class="text-center">Создание задачи</p>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Эл. адрес <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Название <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Введите название задачи">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Описание задачи <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Оставьте описание для задачи">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Род задачи <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
            <select id="inputState" class="form-select">
                <option>Выберите...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Место <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
            <select id="inputState" class="form-select">
                <option>Выберите...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>

        <div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Месяц <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
                <select id="inputState" class="form-select">
                    <option value="Январь">Январь</option>
                    <option value="Февраль">Февраль</option>
                    <option value="Март">Март</option>
                    <option value="Апрель">Апрель</option>
                    <option value="Май">Май</option>
                    <option value="Июнь">Июнь</option>
                    <option value="Июль">Июль</option>
                    <option value="Август">Август</option>
                    <option value="Сентабрь">Сентабрь</option>
                    <option value="Октябрь">Октябрь</option>
                    <option value="Ноябрь">Ноябрь</option>
                    <option value="Декабрь">Декабрь</option>
                </select>
            </div>

            <div class="col-md-2">
                <label for="inputZip" class="form-label">День <a href="#" class="tooltip-test" title="Tooltip">?</a></label>
                <select id="inputState" class="form-select">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                    <option value="">13</option>
                    <option value="">14</option>
                    <option value="">15</option>
                    <option value="">16</option>
                    <option value="">17</option>
                    <option value="">18</option>
                    <option value="">19</option>
                    <option value="">20</option>
                    <option value="">21</option>
                    <option value="">22</option>
                    <option value="">23</option>
                    <option value="">24</option>
                    <option value="">25</option>
                    <option value="">26</option>
                    <option value="">27</option>
                    <option value="">28</option>
                    <option value="">29</option>
                    <option value="">30</option>
                    <option value="">31</option>
                </select>
            </div>
        </div>




        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Учёт времени <a href="#" class="tooltip-test" title="Tooltip">?</a>
                </label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Сохранить задачу</button>
        </div>

    </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>