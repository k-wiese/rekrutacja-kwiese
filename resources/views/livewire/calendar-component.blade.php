<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10  text-center">
            <div class="my-3">
                <p>Wybierz rok używając scrolla, nastepnie wybierz miesiąc.</p>
                <input wire:model.debounce.500ms="date" id="datepicker" class="my-3" type="month">
            </div>
            @error('date')
                <div class="alert alert-danger text-center mt-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <div>
                <button wire:click="generate()" wire:loading.attr="disabled"
                    class="btn btn-outline-light rounded-0 d-block w-100">
                    <p wire:loading.remove class="my-0 py-0">Wygeneruj kartkę z kalendarza</p>
                    <span wire:loading class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                </button>
            </div>
            <div class="mt-5 mb-3">
                <button class="btn btn-outline-light rounded-0 d-block w-100" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Pokaż dokładny opis rozwiązania
                </button>
            </div>

            <div class="collapse row mb-5" id="collapseExample">
                    <hr class="my-5">
                <div class="col-6 text-start mt-4">
                    <p>Do realizacji tego zadania użyłem nakładki Carbon do PHP</p>
                    <p>Pobrałem datę od użytkownika następnie poddałem ją walidacji.</p>
                    <p>Datę w formie obiektu carbon zapisałem w zmiennej $carbon_date</p>
                    <p>Następnie uzupełniłem tabelę przekazywaną do widoku o tytuł. Użyłem funkcji format() na obiekcie
                        carbon tak aby zwracała wybrany miesiąc + rok</p>
                    <p>W zmiennej $start_day umieściłem nazwę dnia od którego zaczyna się miesiąc</p>
                    <p>$days_to_print to licznik przechowywujący pozostałą liczbę dni do wpisania do tabeli </p>
                    <p>$days_printed to licznik dni już wpisanych do tabeli przekazywanej na front</p>
                    <p>$calendar_array to tablica przekazywana na front która zostanie uzupełniona przez pętlę</p>
                    <p>Pętla for zaczynając od indeksu 0 a kończąc na 35 (liczbie okienek do zapełnienia) uzupełnia
                        $calendar_array o informacje na temat komórki w kalendarzu</p>
                    <p>Gdy pętla startuje, sprawdzamy w jaki dzień zaczyna się miesiąc i zgodnie ze sprawdzoną
                        informacją dodajemy puste miejsce na początku kalendarza</p>
                    <p>Jeśli miesiąc zaczyna się od poniedziałku to pustych komórek mamy 0 jeśli od środy to 2 itd.</p>
                    <p>W każdym innym przypadku pętla sprawdza czy liczba dni wypisanych przekracza lub równa się
                        liczbie dni do wypisania</p>
                    <p>Jeśli przekracza to do końca pętli tabela będzie uzupełniana o puste wiersze.</p>
                    <p>Jeśli nie przekracza to tabelę uzupełniamy o dzień a od dni do wypisania odejmujemy 1</p>
                    <p>Ustawiamy publiczną tabelę na pozyskane dane aby wyświetlić ją na froncie.</p>
                    <p>Na froncie za pomocą szablonu blade wyświetliłem tabelę, zwróciłem uwagę na przypadki kiedy
                        kalendarz powinien być podświetlony na czerwono (niedziela)</p>

                </div>
                <div class="col-6">
                    <div class="text-center">
                        <p class="fs-4">Funkcja generate() po stronie kontrolera</p>
                        <div>
                            <img src="{{asset('img/calendarback.png')}}" class="img img-fluid" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="fs-4">Widok</p>
                        <div>
                            <img src="{{asset('img/calendarfront.png')}}" class="img img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @isset($month['title'])

                <div>
                    <div class="row">

                        <div class="mt-5 mb-2">
                            <h4>
                                {{ $month['title'] ?? 'default' }}
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 alert alert-success rounded-0">PON</div>
                        <div class="col-2 alert alert-success rounded-0">WT</div>
                        <div class="col-2 alert alert-success rounded-0">ŚR</div>
                        <div class="col-2 alert alert-success rounded-0">CZW</div>
                        <div class="col-2 alert alert-success rounded-0">PT</div>
                        <div class="col-1 alert alert-success rounded-0">SOB</div>
                        <div class="col-1 alert alert-danger rounded-0">ND</div>
                    </div>
                    <div class="row">
                        @for ($i = 1; $i <= count($month['calendar']); $i++)
                            @if ($i === 6 or $i === 13 or $i === 20 or $i === 27 or $i === 34)
                                <div class="col-1 alert alert-success rounded-0">{{ $month['calendar'][$i] }}</div>
                            @elseif($i === 7 or $i === 14 or $i === 21 or $i === 28 or $i === 35)
                                <div class="col-1 alert alert-danger rounded-0">{{ $month['calendar'][$i] }}</div>
                            @else
                                <div class="col-2 alert alert-success rounded-0">{{ $month['calendar'][$i] }}</div>
                            @endif
                        @endfor

                    </div>
                </div>
            @endisset

        </div>
    </div>
</div>
