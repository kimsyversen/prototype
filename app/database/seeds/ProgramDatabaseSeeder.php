<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 11/12/14
 * Time: 9:32 PM
 */

class ProgramDatabaseSeeder  extends Seeder {
    public function run()
    {
        DB::table('program')->delete();

        Program::create(array(
            'title' => 'Kurs 1 - Prosjektveiviseren',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Det er krevende å gjennomføre digitaliseringsprosjekter på en god måte og det er enda vanskeligere å dokumentere at man tar ut de forventede gevinster. God planlegging er en forutsetning for å iverksette de riktige tiltak og å sikre bedre gjennomføringsevne. Difi lanserte en ny versjon av Prosjektveiviseren.no i 2012. Kurset vil gi en innføring i hvordan prosjektmetodikk og andre virkemidler kan bidra til flere vellykkede digitaliseringsprosjekter.

Prosjektveiviseren 2.0. er en anbefalt prosjektmodell for IKT prosjekter i offentlig sektor som blant annet skal styrke planlegging, styringen, kvalitet og gevinstrealisering i offentlige IKT-prosjekter. Prosjektveiviseren er basert på metodikk fra PRINCE2. PRINCE2 er en prosjektledelsesmetode som brukes over hele verden og har sertifisering som anses som beste praksis for gjennomføring av prosjekter. Metodkikken kan tilpasses alle typer prosjekter uavhengig av størrelse, bransje, organisasjonsform, geografi og kultur.',
            'location' => 'Cosmos 3A',
            'speaker' => 'Elin Kristine Fjørtoft, DIFI og Lars Nokken, DIFI',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 2 - Porteføljestyring ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'For å sikre god IKT-styring er det behov for gode rutiner og kontroll i alle ledd. Det eksisterer mange ulike «beste praksis» rammeverk som har til formål å bidra til bedre IKT-styring, men ofte med ulik innfallsvinkel.Uansett fagkompetanse internt i et prosjekt-, program-, portefølje-, eller driftsmiljø er man også avhengig klare rolle- og ansvarsdefinisjoner i linjeorganisasjonen for å sikre vellykket styring.

Under årets NOKIOS konferanse ønsker vi å gå nærmere inn på noen av disse rammeverkene, både for å se på hvordan disse kan bidra til økt kvalitet og hvilke utfordringer man møter. I tillegg til god faglig kompetanse, gjenbruk der dette er hensiktsmessig, og kontinuerlig læring, får vi en god “Styringsmodenhet” slik at vi sikrer at utviklingen av den digitale modenheten går slik vi ønsker. Utviklingen av styringsmodenheten bør bedres i Norge, og her er eksempler på at en konsentrert innsats hjelper. DIFI har etablert et nettverk for virksomheter i offentlig sektor som sammen jobber med å utvikle god praksis. DIFI bidrar inn i dette nettverket med sikte på å spre erfaring og kompetanse mellom virksomheter i offentlig sektor.

Før Skatteetaten, Husbanken og kommunene presenterer sine erfaringer som viser eksempler på en konsentrert innsats på dette området, vil Ingar Brauti gi en overordnet beskrivelse av porteføljestyring i forhold til forvaltning/daglig drift, en overordnet sammenheng mellom beste praksis rammeverk, samt introduksjon av fem prinsipper, og tolv praksiser i porteføljestyring i henhold til. Management of Portfolios (MoP®)',
            'location' => 'Cosmos 3B',
            'speaker' => 'Jens Nørve, DIFI ',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 3 - Digital post ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Den nye løsningen for sikker digital post til innbyggerne åpner for ordinær bruk i november. Alle statlige etater som sender post på papir til innbyggere skal ta løsningen i bruk. Regjeringen har satt klare tidsfrister, innen 1. juli 2015 skal etatene legge en plan for å ta løsningen i bruk innen første kvartal 2016. Se pressemelding fra Kommunal- og moderniseringsdepartementet. Difi inviterer til seminar om hvordan din virksomhet kan komme i gang med sikker digital post til innbyggere.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Stig Hornnes, Sikker digital post - prosjektleder Utbredelse, DIFI',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 4 - Brukeren i sentrum - gode argumenter for universell utforming',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Best mulig for flest mulig! I korthet er dette hva universell utforming (uu) dreier seg om. Ønsker du å øke trafikken på nettstedet ditt, hjelper det derfor å tenke uu. Kunnskapen finnes. Det handler bare om å ta den i bruk!

Det er utarbeidet en standard med retningslinjer for tilgjengelig webinnhold (WCAG 2.0). Denne standarden konkretiserer hva det vil si å gjøre nettsider tilgjengelige for mennesker med nedsatt funksjonsevne. Håndhevingen av Diskriminerings- og Tilgjengelighetsloven baseres på WCAG. Oppfyller ikke nettstedet ditt retningslinjene i standarden, kan du bli bøtelagt og dømt til å rette opp feilene.

Statistikk viser at hver sjette nordmann har en funksjonshemning. Microsoft har gjennomført undersøkelser som viser at en av to trenger deres tilgjengelighetsfunksjonalitet. Dette betyr at uu ikke dreier seg om å sikre gode løsninger for noen få funksjonshemmede, men om at tilgjengelige løsninger er noe vi alle kan ha glede av.

Viktigere enn loven er å forstå at universell utforming gir flere og mer fornøyde brukere. Universell utforming er derfor en tankegang for deg som vil noe mer. For deg som vil sikre god brukervennlighet for alle. Erfaringen viser at dersom du sørger for god tilgjengelighet for funksjonshemmede, blir løsningene bedre og enklere å bruke for alle.',
            'location' => 'Cosmos 3D',
            'speaker' => 'Pelle Sneen, Accenture',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 5 - Offentlige anskaffelser til det beste',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Jørund Leknes, Kantega',
            'confirmed' => false,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 6 - Big data og offentlig sektor',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Lorem',
            'location' => 'A1',
            'speaker' => 'PhD Jon Espen Ingvaldsen, NTNU og Jørund Leknes, Kantega ',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Kurs 7 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Lorem',
            'location' => 'Cosmos 3A',
            'speaker' => 'Jon Johnsen',
            'confirmed' => false,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Lunsj',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '11:30',
            'time_to' => '12:30',
            'description' => 'Lorem',
            'location' => 'Cosmos 3A',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));



        Program::create(array(
            'title' => 'Workshop 1 - EDAG - den største IT-reformen i Norge i 2014/2015',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'A-ordningen er navnet på den nye rapporteringsordningen til Skatteetaten (inkl. skatteoppkrever), Arbeids- og velferdsetaten (NAV) og Statistisk sentralbyrå (SSB) som innføres 1. januar 2015. A-meldingen erstatter lønns- og trekkoppgaver, terminoppgaver, årsoppgave for skattetrekk og arbeidsgiveravgift, samt skjemaer fra NAV og SSB.

Flere virksomheter har nå erfaringer fra prøvedrift på A-meldingen. Her presenteres erfaringene så langt fra innføring av A-meldingen, og hvilke konsekvenser den nye A-ordningen har fra virksomhetenes perspektiv.',
            'location' => 'Cosmos 3D',
            'speaker' => 'Elisabeth Slinde, EVRY ',
            'confirmed' => true,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Workshop 2 - Informasjonsdeling ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Dette er oppfølgingen av eKors workshop om Informasjonsdeling i fjor. Hva har skjedd på 12 måneder når det gjelder aktiviteter innenfor informasjonsdeling i det offentlige?

Vi tar pulsen på arbeidet med modernisering av Folkeregisteret, Brønnøysundregistrene har varslet at de satser på åpenhet ved å gjøre den autoritative kilden til åpne data og inviterer resten av offentlig sektor med på «dugnaden». Hvor vanskelig er det egentlig å åpne data og dele med andre?, hvilke konsekvenser gir dette, og for hvem? Sist men ikke minst vil vi ha gode og effektive diskusjoner i grupper som spenner over flere temaer

Formålet med workshopen er å gi deg som deltaker en mulighet til å lære og ikke minst bidra med din kompetanse til å fortsette endringsarbeidet med forenkling av informasjonsutveksling, deling av data og samhandling i det offentlige.

Workshop og gruppearbeid vil skje i grupper, og det vil kunne være forskjellig målgrupper for de forskjellige gruppearbeidene avhengig av interesseområder forretning/virksomhet, informasjon/semantikk og teknologi/applikasjon. Agenda og detaljer vil bli oppdatert kontinuerlig så følg med. Det som blir viktig i diskusjoner og dialogene er å komme med konstruktive løsningsforslag og ikke at vi skal problematisere mer av de utfordringene vi allerede vet eksisterer!',
            'location' => 'Cosmos 3A',
            'speaker' => 'Ingvild Araldsen Blom',
            'confirmed' => true,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Workshop 3 - Forenkle, forenkle, forenkle - hvor enkelt vil du ha det? ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Fra uforståelig XML til mobildialog på 10 minutter til bruk av over 400 000 virksomheter og 4 millioner mennesker. Kom og lær hvordan du kan bruke Altinn til å realisere din multikanalstrategi. En sesjon i 3 deler hvor vi viser deg hvordan du raskt kan lage enkle og effektive tjenester.

Vi starter med å presentere hvordan Altinn plattformen med sine mange funksjonsrike produkter passer inn i din virksomhetsarkitektur. Vi vil også presentere våre tanker på hvordan Altinn kan spille sammen med de andre felleskomponentene til fordel for din virksomhet.

I del 2 vil vi vise hvordan du enkelt kan lage selvbetjeningsløsninger i Altinn, og hvordan tjenestene kan gjøres portaluavhengige og med støtte for mobilitet. Enkle klienter som din virksomhet kan benytte for integrasjon mot Altinn blir også demonstrert. Del 2 avsluttes med en gjennomgang av arbeidet med å forbedre brukervennligheten i Altinn.

Til slutt vil vi, I samarbeid med våre partnere, viser gode forenklings- og digitaliseringseksempler hvor produktene i Altinn plattformen - i kombinasjon med partnerens løsning - er benyttet til næringslivets fordel. Dagens første Showcase viser hvordan Visma Consulting i samarbeid med Altinn har automatisert dialogen mellom Statens Vegvesen og interne fagsystemer hos verkstedskjeder for mottak av periodisk kjøretøykontroll (EU-kontroll). Andre Showcaset blir fremført av Håvard Tegelsrud fra Bekk Consulting AS, som viser løsningen Bekk har laget for Statens Vegvesen med integrasjon mot Altinn.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Andreas Rafaelsen, BRREG',
            'confirmed' => true,
            'type' => 0,
        ));



        Program::create(array(
            'title' => 'Workshop 4 - Hvordan få effekt av virksomhetsarkitektur?',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'OSDF (Offentlig sektors dataforum) inviterer til workshop rundt hvordan man kan få utbytte av virksomhetsarkitektur. De siste årene har stadig flere offentlige virksomheter startet med å lage virksomhetsarkitekturer, men får vi utnyttet dette arbeidet på en god måte?

I workshopen vil vi først få presentasjoner fra utvalgte offentlige og private virksomheter som har jobbet med denne type teknikker over lengre tid. I lys av dette vil vi diskutere behov for samordning i forhold til bruk av teknikker, notasjoner og verktøy. Målet for workshopen er i tillegg til å spre erfaringer med beste praksis å etablere basis for innholdet i et introduksjonskurs i effektiv bruk av virksomhetsarkitektur i offentlig sektor.',
            'location' => 'Cosmos 1A',
            'speaker' => ' John Krogstie, NTNU og Bjørn Holstad, DIFI ',
            'confirmed' => true,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Workshop 5 - Er den nasjonale beredskapen i Norge god nok til å møte krise og katastrofe?',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Ikke tilgjenglig',
            'confirmed' => false,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Workshop 6 - Finansieringsmuligheter i IKT 2025 og EU sitt Horizon 2020-program',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Ikke tilgjenglig',
            'confirmed' => false,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Workshop 7 - Målbilde for offentlig sektor i 2025 ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Hvordan ser offentlig tjenesteyting ut i et 2025 perspektiv? Du inviteres med dette til en workshop hvor du kan være med å etablere et fremtidig målbilde for offentlig sektor. Vi ønsker å beskrive dette i form av scenarier. Scenarier er historier om framtida og de er et hjelpemiddel for å tenke langsiktig i en verden full av usikkerhet. Våre scenarier skal være fortellinger om hvordan offentlig tjenesteyting kan utvikle seg i et 10-15 års perspektiv, fram mot år 2025, gitt de trendene vi ser i dag.

Som deltaker i workshopen vil du få utdelt et ‘whitepaper’ som det forventes at du har satt deg inn i på forhånd. Dette dokumentet oppsummerer noe av det som finnes av rapporter og prediksjoner om framtidsscenarioer med relevans for offentlig sektor. Vi setter fokus på sosiale, politiske, miljøbestemte, økonomiske og teknologiske drivkrefter.

Det jobbes aktivt med veikart for nasjonale felleskomponenter som byggeklosser offentlige virksomheter skal dra nytte av når de utvikler sine digitale tjenester. Men hvilket målbilde styrer disse felleskomponentene mot?

Som en innledning til workshopen får vi Gartners kommentarer til dokumentet som er laget med tilleggs betraktninger om trender av betydning for samfunnsutviklingen. Vi vil også innledningsvis få betraktninger i forhold til arbeidet i Skate knyttet til felleskomponentene. Etter dette vil vi innlede til arbeid i grupper som utfordres til å presentere sine innspill i form av scenariobetraktninger, konseptuelle skisser og prinsipper av betydning for fremtiden.

Resultatene fra workshopen er tenkt brukt senere i konferansen. Vel møtt til en workshop som legger «fremtiden i våre hender»',
            'location' => 'Cosmos 3B',
            'speaker' => 'Axel Birkeland, Statens Innkrevingssentral og Jens Nørve, DIFI ',
            'confirmed' => true,
            'type' => 0,
        ));

        Program::create(array(
            'title' => 'Workshop 8 - Personvern i skolen og barnehagen ',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Datatilsynet har i en 2-års periode jobbet aktivt med personvern i skoler og barnehager. Foreløpig resultat er en samlerapport som oppsummerer erfaringene fra dette arbeidet. Som en innledning til workshopen vil Martha og Eirin presentere Datatilsynets samlerapport fra tilsyn på skoler og barnehager, samt trekke frem konkrete funn og erfaringer fra tilsyn som kan egne seg til diskusjon i grupper. Etter dette vil deltakerne bli inndelt i mindre grupper som skal diskutere hvordan personvernet kan bedres i skole og barnehage, samt utfordres til å presentere sine innspill i form av forslag til gode rutiner. Datatilsynet ønsker å skape engasjement for å lage en nasjonal norm for personvern i skoler og barnehager. Nyttige innspill fra workshopen kan brukes i arbeidet med en slik norm.',
            'location' => 'Living Room 1',
            'speaker' => 'Eirin Oda Lauvset, jurist og seniorrådgiver i Datatilsynet ',
            'confirmed' => true,
            'type' => 0,
        ));


        Program::create(array(
            'title' => 'Pause - Spekemat, ost og kjeks',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '14:00',
            'time_to' => '14:15',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));



        Program::create(array(
            'title' => 'Workshop fortsetter',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '14:15',
            'time_to' => '15:45',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));


        Program::create(array(
            'title' => 'Pause - Spekemat, ost og kjeks',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '15:45',
            'time_to' => '16:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));

        Program::create(array(
            'title' => 'Workshop fortsetter',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '16:00',
            'time_to' => '17:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));

        Program::create(array(
            'title' => 'Slutt',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '16:00',
            'time_to' => '17:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));


        Program::create(array(
            'title' => 'Rockheim, Splitter Pine Tapas og Charlotte Audestad',
            'date' => DateTime::createFromFormat('d/m/Y', '28/10/2014'),
            'time_from' => '19:00',
            'time_to' => '23:00',
            'description' => 'Rockheim',
            'location' => 'Rockheim',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
        ));


    }
} 