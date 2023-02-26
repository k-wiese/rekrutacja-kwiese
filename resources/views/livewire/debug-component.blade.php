<div class="container mt-5">
    <div class="row justify-content-center my-4 ">
        <div class="col-sm-10 border border-light">
            <p class="my-3 fs-4">
            Postgres <br>
            [42P01] BŁĄD: relacja "cregisters.creg" nie istnieje Pozycja 15 </p>
            <hr>
            <p class="fs-5">
                Możliwe przyczyna: <b> Jesteśmy połączeni ze złą bazą danych.</b> <br>
                Rozwiązanie:<b> Sprawdzić czy korzystamy z odpowiedniej bazy.</b>
            </p>
            <p class="fs-5">
                Możliwe przyczyna:  <b>Tabela z której chcemy skorzystać nie istnieje.</b> <br>
                Rozwiązanie:  <b>Sprawdzić czy nie popełniliśmy tzw. "literówki", w razie potrzeby poprostu stworzyć nową tabelę </b>
            </p>
            <p class="fs-5">
                Możliwe przyczyna:  <b>Nie mamy wystarczających uprawnień, aby uzyskać dostep do tabeli</b> <br>
                Rozwiązanie:  <b>Sprawdzić czy konto z którego połączyliśmy się z bazą ma potrzebne uprawnienia </b>
            </p>

        </div>
    </div>
    <div class="row justify-content-center my-4 ">
        <div class="col-sm-10 border border-light">
            <p class="my-3 fs-4">
             Nie można wypisać wniosku na dzień w którym nie ma okresu zatrudnienia.</p>
            <hr>
            <p class="fs-5">
                Możliwe przyczyna: <b> Podejrzewam, że jest to błąd po walidacji formularza który nie ma zastosowania w aktualnym przypadku.</b> <br>
                Rozwiązanie:<b> Sprawdzić poprawność zasad walidacyjnych requesta, który jest przesyłany formularzem. </b>
            </p>
        </div>
    </div>
    <div class="row justify-content-center my-4 ">
        <div class="col-sm-10 border border-light">
            <p class="my-3 fs-4">
             [22P02] BŁĄD: invalid input syntax for integer: "30B" Pozycja 45</p>
            <hr>
            <p class="fs-5">
                Możliwe przyczyna: <b> Próbujemy wpisać string w kolumnę której datatype to integer. 
                    Taki błąd może wystąpić np. kiedy zaprojektowaliśmy tabele która przechowuje numery domów ale nie wzieliśmy pod uwagę ich oznaczeń literowych</b> <br>
                Rozwiązanie:<b> Jeśli wiemy, że wpisanie stringa to poprawny przypadek użycia (ponieważ walidacja
                     nam na to pozwala) to znaczy ze baza została źle zaprojektowana i trzeba zamienić datatype danej kolumny z integer na string.</b>
            </p>
        </div>
    </div>
    <div class="row justify-content-center my-4 ">
        <div class="col-sm-10 border border-light">
            <p class="my-3 fs-4">
             [25-Nov-2022 15:50:02 Europe/Warsaw] Eksport danych do Sage ERP FK -1</p>
            <hr>
            <p class="fs-5">
                <b> Jest to log z aplikacji obsługującej przesył danych tzw. systemu ERP konkretnie systemu Sage</b> <br>
                <b>Komunikat prawdopodobnie informuje  o rozpoczęciu przesyłania danych.</b>
            </p>
        </div>
    </div>
    <div class="row justify-content-center my-4 ">
        <div class="col-sm-10 border border-light">
            <p class="my-3 fs-4">
             Failed to load resource: net::ERR_FAILED</p>
            <hr>
            <p class="fs-5">
                Możliwa przyczyna:<b> Przeglądarka próbuje pobrać jakiś plik np. zdjęcie lub plik .css ale nie moze załadować zawartości z serwera. </b> <br>
                Rozwiązanie: <b>Jeśli jest to jedyny plik który się nie ładuje to wiemy, że jest to problem tylko z nim i problem nie jest związany np. z URI naszej aplikacji, trzeba sprawdzić scieżkę do pliku i w razie potrzeby ją zmienić oraz sprawdzić czy plik jest na swoim miejscu. </b>
            </p>
        </div>
    </div>
 </div>
 
 
 
 