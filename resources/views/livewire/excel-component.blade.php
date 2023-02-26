<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-10  text-center">
            <div class="my-3">
                <p>Wpisz oznaczenie komórki, aby uzyskać jej wartość numeryczną (np. <b> PHP81</b>)</p>
                <input wire:model.debounce.500ms="cell" wire:ignore class="my-3">
            </div>
            @error('cell')
                <div class="alert alert-danger text-center mt-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            <div>
                <button wire:click="generate()" wire:loading.attr="disabled"
                    class="btn btn-outline-light rounded-0 d-block w-100">
                    <p wire:loading.remove class="my-0 py-0">Wygeneruj wartość numeryczną</p>
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
                <p>Pobieram dane od użytkownika, następnie je waliduję</p>
                <p>$letters_array to tablica która będzie przechowywać wszystkie litery od uzytkownika</p>
                <p>Foreachujemy string od użytkownika podzielony na pojedyncze litery jako $char</p>
                <p>Jeśli $char skonwertowane na integer jest inne od $char, czyli konwersja się powiodła 
                    to znaczy, że mamy doczynienia z cyfrą, a jeśli się nie powiedzie to mamy doczynienia z literą
                </p>
                <p>W drugim scenariuszu wpychamy do naszej tablicy z literami $char scastowany do dużej litery</p>
                <p>Do $letters_count przypisujemy ilość liter w naszej tablicy</p>
                <p>$column to początkowy string od uzytkownika obcięty od przodu o ilość liter w tablicy $letters_array</p>
                <p>Inicjujemy $row i przypisujemy wartość 0, w tej zmiennej będzie przechowywana wartość liter wpisanych przez uzytkownika</p>
                <p>Tworzymy pętle for przekręci się ona tyle razy ile mamy liter w tablicy $letters_array</p>
                <p>Foreachujemy przez alfabet od A do Z używając funkcji range jako $key => $letter</p>
                <p>Jeśli litera z alfabetu jest taka sama jak litera z naszej tablicy
                    to ustawiamy wartość $row na $row * 26 (pierwszy obrót pętli 0 * 26) + ($key+1)
                </p>
                <p>$key+1 to wartość numeryczna litery ponieważ $key odlicza kolejność liter w alfabecie, +1 ponieważ $key zaczyna od 0 </p>
                <p>Finalnie łączę $row i $column między nimi dodaje '.', parsuję do floata i przekazuje na front</p>
            </div>
            <div class="col-6">
                <div class="text-center">
                    <p class="fs-4">Funkcja generate() po stronie kontrolera</p>
                    <div>
                        <img src="{{asset('img/excel1.png')}}" class="img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

            @isset($numeric_value)
            <p class="fs-5 mt-5">
                Wartość numeryczna:
            </p>
            <p class="fs-3 mb-5 mt-2">
                {{$numeric_value}}
            </p>
            @endisset

        </div>
    </div>
</div>
