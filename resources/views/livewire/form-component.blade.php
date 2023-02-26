<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-sm-10">

         @if($is_company === 0)
         <form>
            <div class="mb-3">
              <label for="name" class="form-label">Imię</label>
              <input wire:model.debounce="name"  class="form-control" id="name">
            </div>
            @error('name')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror
            <div class="mb-3">
              <label for="email1" class="form-label">Adres E-mail</label>
              <input wire:model.debounce="email" type="email" class="form-control" id="email1">
              <div id="emailHelp" class="form-text">Nigdy nie podamy twojego maila osobom trzecim.</div>
            </div>
            @error('email')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror
            <div class="mb-3">
              <label for="birthday" class="form-label">Data urodzenia</label>
              <input wire:model.debounce="birthday" type="date" class="form-control" id="birthday">
            </div>
            @error('birthday')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Hasło</label>
              <input wire:model.debounce="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            @error('password')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror

            @isset($success_message)
            <div class="mb-3 alert alert-success"> 
               <p>{{$success_message}}</p>
            </div>
            @endisset

         </form>
         <button wire:click="store()" wire:loading.attr="disabled"
         class="btn btn-outline-light rounded-0 d-block w-100">
         <p wire:loading.remove class="my-0 py-0">Zarejestruj się</p>
         <span wire:loading class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
     </button>

          @elseif($is_company === 1)

          <form>
            <div class="mb-3">
              <label for="name2" class="form-label">Nazwa firmy</label>
              <input wire:model.debounce="name" class="form-control" id="name2">
            </div>
            @error('name')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror


            <div class="mb-3">
              <label for="email4" class="form-label">Adres E-mail</label>
              <input wire:model.debounce="email" type="email" class="form-control" id="email4" aria-describedby="emailHelp">
            </div>
            @error('email')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror


            <div class="mb-3">
              <label for="nip2" class="form-label">Numer NIP (bez myślników i spacji)</label>
              <input wire:model.debounce="nip" class="form-control" id="nip2" aria-describedby="emailHelp">
            </div>
            @error('nip')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror


            <div class="mb-3">
              <label for="pass4" class="form-label">Hasło</label>
              <input wire:model.debounce="password" type="password" class="form-control" id="pass4">
            </div>
            @error('password')
            <div class="mb-3 alert alert-danger">
               <p>{{$message}}</p>
            </div>
            @enderror
         </form>
         
         @isset($success_message)
         <div class="mb-3 alert alert-success"> 
            <p>{{$success_message}}</p>
         </div>
         @endisset
         <button wire:click="store()" wire:loading.attr="disabled"
         class="btn btn-outline-light rounded-0 d-block w-100">
         <p wire:loading.remove class="my-0 py-0">Zarejestruj się</p>
         <span wire:loading class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
     </button>
          @else
          <div>
            <button class="btn btn-outline-light my-4 d-block w-100 rounded-0" wire:click="set_form_type('0')"> Chcę zarejestrować się jako osoba fizyczna. </button>
            <button class="btn btn-outline-light my-4 d-block w-100 rounded-0" wire:click="set_form_type('1')"> Chcę zarejestrować się jako firma. </button>
          </div>
          <div class="mt-5 mb-3">
            <button class="btn btn-outline-light rounded-0 d-block w-100" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Pokaż dokładny opis rozwiązania
            </button>
        </div>

        <div class="collapse row mb-5" id="collapseExample">
            <hr class="my-5">
        <div class="col-12 text-start mt-4">
            <p>Inicjuję publiczne propercje dla widoku</p>
            <p>Tworzę tabelę $rules z zasadami walidacji</p>
            <p>Funkcja render zwraca widok</p>
            <p>Funkcja set_form_type decyduje o wyswietlonym formularzu (osoba fizyczna czy firma)</p>
            <p>Funkcja store to funkcja wykonywana przy kazdej próbie sfinalizowania formularza</p>
            <p>Na początku sprawdzamy dla kogo został wybrany formularz</p>
            <p>Po sprawdzeniu dodajemy do tabeli $rules zasadę walidacyjną do odpowiedniego pola oraz walidujemy dane</p>
            <p>Jeśli dane się zgadzają tworzymy nowy zapis w bazie danych uzywając danych od uzytkownika</p>
            <p>Pola name, email oraz hasło są wspólne dla obu mozliwosci stworzenia konta</p>
            <p>Następnie uzupełniamy pole nip w przypadku firmy lub birthday w przypadku osoby fizycznej</p>
            <p>W ostatniej kolumnie $is_company zapisujemy informacje o typie konta 0-os. fizyczna 1-firma</p>
            <p>Po udanym stworzeniu obiektu wyswietlamy na froncie komunikat.</p>
            <p>Taka wersja fragmentu bazy danych umożliwia nam łatwą konwersję z os. fizycznej na firmę i na odwrót gdyby w przyszlosci miala zostac dodana taka funkcjonalnosc, użytkownikowi poprostu uzupełniamy odpowiednie pola, a sprawdzając typ konta uzywamy kolumny $is_company</p>            
            
        </div>
        <div class="col-12 mt-4">
            <div class="text-center">
                <p class="fs-4">Kontroler livewire</p>
                <div>
                    <img src="{{asset('img/formback.png')}}" class="img img-fluid" alt="">
                </div>
            </div>
        </div>
          @endif

       </div>
   </div>
</div>



