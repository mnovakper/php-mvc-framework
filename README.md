# Mini MVC Framework

Klasa App je router, usmjerava na odgovarajući kontroler i metodu.

Unutar nje metoda load_controller() odgovorna je za učitavanje odgovarajućeg kontrolera i metode na temelju URL-a.

Prvi element u URL-u je naziv controller-a (provjerava postoji li datoteka s tim imenom u direktoriju app/controllers).

Drugi URL element je naziv metode (provjerava ima li taj kontroler metodu s tim nazivom).