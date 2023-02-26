<div class="container mt-5">
   <div class="row justify-content-center">
       <div class="col-sm-8">
         <p class="fs-5">1. Aktorzy uczesniczący w procesie obiegu pisma wychodzącego:</p>
         
         <ul>
            <li>Pracownik (przesyła pismo do akceptacji)</li>
            <li>Kierownik (akceptuje, przesyła do zatwierdzenia)</li>
            <li>Zastępca kierownika (jeśli kierownik na urlopie: akceptuje, przesyła do zatwierdzenia)</li>
            <li>Dyrektor (zatwierdza)</li>
         </ul>
       </div>
   </div>
   <div class="row justify-content-center">
       <div class="col-sm-8">
         <p class="fs-5">2. Diagram BPMN</p>
         
         <div class="mb-4">
            <img src="{{asset('img/bpmn-diagram.png')}}" class="img img-fluid" alt="">
         </div>
       </div>
   </div>
   <div class="row justify-content-center">
       <div class="col-sm-8">
         <p class="fs-5">3. Zaproponowanie fragmentu bazy danych, w którym byłaby możliwość odnotowania faktu 
            zastępstwa</p>
            <p>Do tabeli, która odpowiada za przechowywanie informacji na temat osoby akceptującej dokument dodać kolumnę o nazwie "replaced_by" datatype: string, nullable, default:null</p>
            <p>W której znajdowałoby się imię oraz nazwisko zastępcy jeśli takie zastępstwo nastąpiło. W kodzie PHP można sprawdzić czy ktoś został przy danym obiegu zastapiony porównując wartość "replaced_by" z nullem</p>
       </div>
   </div>
</div>
