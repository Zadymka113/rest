<!doctype html>
<html lang="pl">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <div class="conteiner">
        <h1 class="menumenu">Menu</h1>
        <?php
        $db_username = "root";
        $db_password = "";
        $db_name = "restaurant";
        $db_host = "localhost";
        $db_conn = new mysqli($db_host, $db_username, $db_password, $db_name)
        // or die("connection failed");
        // echo "connection success";
        ?>
        <div class="container">
            <?php
            //zapytanie sql do bazy określające jakie dane mają zostać pobrane
            $zapytanie = "Select * From menu";
            //pobranie wyniku zapytania
            $wynik = $db_conn->query($zapytanie);
            $ile_znalezionych = $wynik->num_rows;
            //rozpoczynamy budowanie tabeli dla naszych danych
            echo '<table class="table size">';
            echo '<table class="table size"><tr><th>Zamów</th><th>Numer</th><th>Nazwa</th><th>Cena</th><th>Opis</th></tr>';
            //pętla po rekordach z bazy
            for ($i = 0; $i < $ile_znalezionych; $i++) {
                $wiersz = $wynik->fetch_assoc();
                echo '<tr>';
                echo '<td> <div class="form-check">
                <input class="form-check-input" type="checkbox" value=" ' . $wiersz['ID_name_food'] . '" id="flexCheckDefault ' . $wiersz['name'] . '">
                <label class="form-check-label" for="flexCheckDefault">Dodaj</label></div> </td>';
                echo '<td>' . $wiersz['ID_name_food'] . '</td>';
                echo '<td>' . $wiersz['name'] . '</td>';
                echo '<td class="price">' . $wiersz['cost'] . ' zł </td>';
                echo '<td>' . $wiersz['description'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            ?>
            <div class="orders">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="orderModal">Order</button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Zamówienie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text input_order" id="addon-wrapping">Adress</span>
                                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label orderslist">Zamówione
                                        potrawy</label>
                                    <div class="orderedItems">
                                        <!-- here ordered items -->
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Szczegóły zamówienia</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text soldsum"></span>
                                    <span class="input-group-text">zł</span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

</body>

</html>