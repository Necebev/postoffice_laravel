<?php

namespace App\Helper;

class HungarianCountiesAndCities{
    public static $countyAndCityData = [
        "Bács-Kiskun" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/bacs.jpg?itok=bHZXS6W4", "cities" => ['Kecskemét', 'Baja', 'Kiskunfélegyháza', 'Kiskunhalas', 'Kalocsa']],
        "Baranya" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/baranya_0.jpg?itok=dG2F0YHM", "cities" => ['Pécs', 'Mohács', 'Komló', 'Szigetvár', 'Siklós']],
        "Békés" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/bekes.jpg?itok=0JJ33fox", "cities" => ['Békéscsaba', 'Gyula', 'Orosháza', 'Szarvas', 'Békés']],
        "Borsod-Abaúj-Zemplén" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/borsod.jpg?itok=rbD6oPHM", "cities" => ['Miskolc', 'Kazincbarcika', 'Sátoraljaújhely', 'Ózd', 'Tiszaújváros']],
        "Csongrád-Csanád" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/csongrad.jpg?itok=iY3QzNfV", "cities" => ['Szeged', 'Hódmezővásárhely', 'Szentes', 'Makó', 'Csongrád']],
        "Fejér" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/fejer.jpg?itok=VdgTSXWw", "cities" => ['Székesfehérvár', 'Dunaújváros', 'Bicske', 'Mór', 'Gárdony']],
        "Győr-Moson-Sopron" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/gyor.jpg?itok=XGP7PMvS", "cities" => ['Győr', 'Sopron', 'Mosonmagyaróvár', 'Csorna', 'Kapuvár']],
        "Hajdú-Bihar" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/hajdu.jpg?itok=CslS6AgD", "cities" => ['Debrecen', 'Hajdúszoboszló', 'Berettyóújfalu', 'Balmazújváros', 'Hajdúböszörmény']],
        "Heves" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/heves.jpg?itok=1yRMjzj6", "cities" => ['Eger', 'Gyöngyös', 'Hatvan', 'Füzesabony', 'Heves']],
        "Jász-Nagykun-Szolnok" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/jasz.jpg?itok=zYu4oRDX", "cities" => ['Szolnok', 'Jászberény', 'Karcag', 'Törökszentmiklós', 'Mezőtúr']],
        "Komárom-Esztergom" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/komarom.jpg?itok=uVP5Jg5q", "cities" => ['Tatabánya', 'Esztergom', 'Komárom', 'Tata', 'Oroszlány']],
        "Nógrád" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/nograd.jpg?itok=1o0wWInY", "cities" => ['Salgótarján', 'Balassagyarmat', 'Bátonyterenye', 'Pásztó', 'Rétság']],
        "Pest" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/pest.jpg?itok=MFOFNV_p", "cities" => ['Érd', 'Cegléd', 'Vác', 'Gödöllő', 'Szentendre']],
        "Somogy" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/somogy.jpg?itok=hONsG5PE", "cities" => ['Kaposvár', 'Siófok', 'Nagyatád', 'Marcali', 'Barcs']],
        "Szabolcs-Szatmár-Bereg" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/szabolcs.jpg?itok=IVYwCyOA", "cities" => ['Nyíregyháza', 'Mátészalka', 'Kisvárda', 'Vásárosnamény', 'Ibrány']],
        "Tolna" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/tolna.jpg?itok=eEGmwtXt", "cities" => ['Szekszárd', 'Dombóvár', 'Paks', 'Bonyhád', 'Tamási']],
        "Vas" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/vas.jpg?itok=lzcTUFvB", "cities" => ['Szombathely', 'Sárvár', 'Kőszeg', 'Celldömölk', 'Körmend']],
        "Veszprém" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/veszprem.jpg?itok=oYNCJ8VJ", "cities" => ['Veszprém', 'Ajka', 'Pápa', 'Balatonfüred', 'Várpalota']],
        "Zala" => ["image" => "https://www.nemzetijelkepek.hu/sites/default/files/styles/large/public/2022-06/zala.jpg?itok=hsjVLoIM", "cities" => ['Zalaegerszeg', 'Nagykanizsa', 'Keszthely', 'Zalaszentgrót', 'Lenti']],
    ];
}