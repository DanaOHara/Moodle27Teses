<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Admin mapa';
$string['availablelangs'] = 'Popis dostupnih jezika';
$string['chooselanguagehead'] = 'Odaberite jezik';
$string['chooselanguagesub'] = 'Molimo odaberite jezik instalacije. Ovaj jezik će biti korišten kao zadani jezik sustava, a kasnije to možete lagano promijeniti.';
$string['clialreadyconfigured'] = 'Datoteka config.php već postoji. Upotrijebite naredbu admin/cli/install_database.php ako želite nastaviti instalaciju.';
$string['clialreadyinstalled'] = 'Datoteka config.php već postoji. Upotrijebite naredbu admin/cli/install_database.php ako želite nadograditi ovaj sustav.';
$string['cliinstallheader'] = 'Moodle {$a} program za instalaciju iz naredbenog retka';
$string['databasehost'] = 'Poslužitelj baze podataka (HOST)';
$string['databasename'] = 'Naziv baze podataka';
$string['databasetypehead'] = 'Odaberite vrstu baze podataka';
$string['dataroot'] = 'Mapa s podacima';
$string['datarootpermission'] = 'Ovlasti nad mapom s podacima';
$string['dbprefix'] = 'Prefiks tablice';
$string['dirroot'] = 'Moodle mapa';
$string['environmenthead'] = 'Provjera okruženja vašeg poslužitelja ...';
$string['environmentsub2'] = 'Svaka inačica Moodle-a ima minimalne zahtjeve po pitanju odgovarajuće PHP inačice i nekoliko obvezatnih PHP ekstenzija.
Puna provjera okruženja se obavlja prije svake instalacije ili nadogradnje postojeće inačice. Ako ne znate kako instalirati novu inačicu ili omogućiti PHP ekstenzije, kontaktirajte administratora vašeg poslužitelja.';
$string['errorsinenvironment'] = 'Pogreške u okruženju poslužitelja!';
$string['installation'] = 'Instalacija';
$string['langdownloaderror'] = 'Nažalost, jezik "{$a}" nije instaliran. Proces instalacije će biti nastavljen na engleskom jeziku.';
$string['memorylimithelp'] = '<p>PHP ograničenje memorije na poslužitelju je trenutačno podešeno na {$a}.</p>

<p>Ova postavka može kasnije rezultirati memorijskim problemima na vašem Moodle sustavu, posebno ako imate veći broj omogućenih modula i/ili veći broj korisnika.</p>

<p>Preporučujemo da konfigurirate PHP s većim ograničenjem ako je moguće, recimo 40M. Postoji nekoliko načina na koje to možete napraviti:</p>
<ol>
<li>Ako možete, rekompajlirajte PHP s <i>--enable-memory-limit</i>. Ovo će dopustiti Moodle sustavu samostalno postavljanje memorijskog ograničenja.</li>
<li>Ako imate pristup php.ini datoteci, možete promijeniti <b>memory_limit</b> vrijednost na 40M. Ako nemate pristup toj datoteci možete pitati svog administratora da to uradi.</li>
<li>Na nekim PHP poslužiteljima možete napraviti .htaccess datoteku u Moodle mapi koja sadrži red: <p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Uzmite u obzir da će na nekim poslužiteljima to spriječiti prikazivanje <b>svih</b> PHP stranica (bit će vam prikazana poruka o grešci), pa ćete na takvim poslužiteljima morati ukloniti .htaccess datoteku.</p></li> </ol>';
$string['paths'] = 'Putanje (PATH)';
$string['pathserrcreatedataroot'] = 'Instalacijska skripta ne može stvoriti \'Mapu s podacima\' ({$a->dataroot}).';
$string['pathshead'] = 'Potvrdi putanje (PATH)';
$string['pathsrodataroot'] = 'Nije moguće zapisivanje u podatkovnu (dataroot) mapu.';
$string['pathsroparentdataroot'] = 'Nije moguće zapisivati podatke u nadređenu mapu ({$a->parent}). Instalacijska skripta ne može stvoriti mapu za podatke ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Manji broj webhosting tvrtki koristi /admin kao posebni URL za Vaš pristup upravljanju vašim hosting paketom. Nažalost, to rezultira konfliktom sa standardnom lokacijom za Moodle administratorsku stranicu. Navedenu lokaciju unutar Moodle sustava možete preimenovati. Na primjer: <br /> <br /><em>moodleadmin</em><br /> <br />
Ovo će promijeniti administratorsku poveznicu na Moodle sustavu u novu vrijednost.';
$string['pathssubdataroot'] = 'Mora postojati mapa u koju Moodle može pohraniti prenešene datoteke. Korisnik pod kojim je pokrenut web server (obično \'nobody\' ili \'apache\') bi morao imati mogućnost čitanja/pisanja podataka u toj mapi, ali oni ne bi trebali biti dostupni direktno preko weba. Instalacijska skripta će pokušati stvoriti navedenu mapu ako ista ne postoji.';
$string['pathssubdirroot'] = 'Puna putanja (PATH) do Moodle instalacije.';
$string['pathssubwwwroot'] = 'Unesite punu web adresu putem koje će se pristupati vašem Moodle sustavu.
Moodle sustavu NIJE MOGUĆE pristupiti preko više URL-ova, odaberite onaj koji vam najviše odgovara.
Ako vaš poslužitelj ima višestruke javne adrese, onda morate postaviti tzv. permanent redirect na sve osim ove adrese.
Ako je vaš poslužitelj dostupan i putem intraneta i Interneta, onda ovdje unesite javnu adresu i podesite DNS tako da vaši intranet korisnici mogu koristiti tu javnu adresu.
Ako adresa nije točna, molimo unesite točnu adresu u vaš internet preglednik i ponovno pokrenite instalaciju s promijenjenim vrijednostima.';
$string['pathsunsecuredataroot'] = 'Podatkovna (dataroot) mapa nije sigurna';
$string['pathswrongadmindir'] = 'Admin mapa ne postoji';
$string['phpextension'] = 'PHP ekstenzija {$a}';
$string['phpversion'] = 'PHP inačica';
$string['phpversionhelp'] = '<p>Moodle zahtijeva najmanje PHP inačicu 4.3.0 ili 5.1.0 (5.0.x funkcionira uz brojne uočene probleme).</p> <p>Trenutačno imate inačicu {$a}</p> <p>Morate nadograditi PHP ili premestiti Moodle instalaciju na web poslužitelj s novijom inačicom PHP-a!</br> (U slučaju inačice 5.0.x bilo bi najbolje da je vratite na inačicu 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Prikazana vam je ova stranica jer ste uspješno instalirali i pokrenuli <strong>{$a->packname} {$a->packversion}</strong> paket na svom poslužitelju. Čestitamo!';
$string['welcomep30'] = 'Ova inačica <strong>{$a->installername}</strong> uključuje aplikacije za stvaranje okruženja u kojem će sustav <strong>Moodle</strong> uspješno funkcionirati, konkretno:';
$string['welcomep40'] = 'Ovaj paket obuhvaća i <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Korištenje svih aplikacija u ovom paketu je uređeno licencama pod kojima su izdane. Cijeli paket <strong>{$a->installername}</strong> je rješenje <a href="http://www.opensource.org/docs/definition_plain.html">otvorenog koda</a> distribuirano pod <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licencom.';
$string['welcomep60'] = 'Sljedeće stranice će vas voditi kroz postupak instalacije i podešavanja sustava <em>Moodle</em> na poslužitelju. Možete prihvatiti zadane postavke ili promijeniti iste sukladno vašim potrebama.';
$string['welcomep70'] = 'Kliknite na "Next" gumb kako bi započeli <strong>Moodle</strong> instalaciju.';
$string['wwwroot'] = 'Web adresa';
