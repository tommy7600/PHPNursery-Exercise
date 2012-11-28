# PHP Nursery - Exercise

Zadania od 1 do 6 - prosiłbym aby zrobił każdy. Każde kolejne jest dodatkowe.

## ZADANIE 1
Napisz klasy Gracz i Punktacja.
Klasa Punktacja:
- przechowuje ilość punktów
- posiada konstruktor, który domyślnie ustawia punkty na zero
- umożliwia aktualizować (dodawać, odejmować) punkty i podawać ich ilość
- destruktor podający końcową punktacje
Klasa Gracz:
- każdy gracz posiada punktacje (prywatny agregat klasy Punktacja), imie oraz nazwisko
- konstruktor, który ustawia imię oraz nazwisko
- destruktor wyświetlający imie oraz nazwisko
- metodę aktualizującą punktację

## ZADANIE 2
Stwórz klasę "Artykul" dla której za pomocą setterów (np. ustaw_imie('Adrian')) i płynnego interfejsu będziemy mogli ustawić własności "id", "tytul", "tresc", "autor", "data_dodania", "widocznosc". Każda z własności powinna posiadać także swojego gettera, własności nie powinny być widoczne poza obiektem klasy.
Każdy artykuł może zostać przypisany do danej kolekcji artykułów (klasa ArtykulKolekcja) za pomocą metody dodaj().
Możemy usunąć artykuł o wybranym "id" z kolekcji. Zezwól także na pobranie całej kolekcji artykułów za pomocą metody pobierz_wszystko().
Utrzymaj jednolity styl pisania oraz nazewnictwa metod, klas i własności.

## ZADANIE 3
Zaimplementuj koszyk sklepu internetowego. Do koszyka możemy dodawać tylko i wyłącznie klasy rozszerzające klasę abstrakcyjną - Produkt. Każdy z produktów w sklepie (nowy produkt = nowa klasa) implementuje wcześniej wspomnianą klasę abstrakcyjną. Produkt może posiadać nazwę, producenta, cenę netto, stawkę VAT (0%, 8%, 23%). Dla produktu możemy pobrać za pomocą odpowiednich metod nazwę, producenta, cenę netto oraz cenę brutto. Stwórz 5 różnych produktów.
Koszyk powinien być w pełni funkcjonalny: umożlwia dodanie nowego produktu, zwiększenie ilości zamawianego produktu, usunięcie produktu z koszyka, pobranie łącznej ilości zamawianych produktów, wartości danego produktu oraz łączną wartość wszystkich produktów.

## ZADANIE 4
Napisz klasę "Matematyka" zawierającą metody statyczne umożlwiające:
- obliczenie pola koła o podanym promieniu
- obliczenie obwodu koła o podanym promieniu
- obliczenie funkcji liniowej y = ax + b
- obliczenie funkcji kwadratowej
- obliczenie silni
Pamiętaj aby dla każdej z tych funkcji była możliwość zaaokrąglenia wyniku do ustalonej liczby miejsc po przecinku

## ZADANIE 5
W bazie danych stwórz tabelę "users" oraz "roles".
Tabela users niech przechowuje takie informacje : id, rola_id, imie, nazwisko, pesel, adres_zamieszkania, kod, pocztowy, telefon, emial, data_dodania 
Tabela roles niech przechowuje takie informacje : id, nazwa, opis
	np.   1 | Administrator | Włada światem
		  2 | Redaktor	    | Mistrz klawiatury
		  3 | Użytkownik    | Zwykły szary człowiek
Umożliw zarządzanie użytkownikami (ładną tabelkę i formularz w HTML, możesz użyć Bootstrapa) - dodawanie, usuwanie, edycja danych. Rolę dla użytkownika wybieramy z selecta. Pesel i email muszą zostać zwalidowane po stronie PHP. Dodaj także opcję wyszukiwania użytkownika (niech szuka po: imie, nazwisko, pesel, email).
Do połączenia z bazą danych wykorzystaj PDO które rozszerzysz o dwie dodatkowe metody (PDO jest klasą po której można dziedziczyć):
	public function insert('nazwa_tabeli, array $wartosci) // dodawanie nowego rektordu do tabeli
	public function update('nazwa_tabeli, array $wartosci, $warunek_where) // aktualizowanie rektordu w tabeli
Klasy postaraj się wykorzystać do operacji na elementach tabel z bazy. Przykładem może być:
class User {} a w niej metody pobierz_uzytkownika_po_id($id), aktualizuj_dane()_uzytkownika, dodaj_noweg(...) 
Utrzymaj jednolity styl pisania oraz nazewnictwa metod, klas i własności. Plikiem startowym dla Twojej aplikaji niech będzie "index.php". 
Dane do połączenia z bazą przechowuj w pliku konfiguracyjnym "config.php"
Jeżeli masz pomysł w jaki sposób wyddzielić HTML, zrób to ;-)