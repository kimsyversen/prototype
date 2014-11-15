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
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Det er krevende å gjennomføre digitaliseringsprosjekter på en god måte og det er enda vanskeligere å dokumentere at man tar ut de forventede gevinster. God planlegging er en forutsetning for å iverksette de riktige tiltak og å sikre bedre gjennomføringsevne. Difi lanserte en ny versjon av Prosjektveiviseren.no i 2012. Kurset vil gi en innføring i hvordan prosjektmetodikk og andre virkemidler kan bidra til flere vellykkede digitaliseringsprosjekter.

Prosjektveiviseren 2.0. er en anbefalt prosjektmodell for IKT prosjekter i offentlig sektor som blant annet skal styrke planlegging, styringen, kvalitet og gevinstrealisering i offentlige IKT-prosjekter. Prosjektveiviseren er basert på metodikk fra PRINCE2. PRINCE2 er en prosjektledelsesmetode som brukes over hele verden og har sertifisering som anses som beste praksis for gjennomføring av prosjekter. Metodkikken kan tilpasses alle typer prosjekter uavhengig av størrelse, bransje, organisasjonsform, geografi og kultur.',
            'location' => 'Cosmos 3A',
            'speaker' => 'Elin Kristine Fjørtoft, DIFI og Lars Nokken, DIFI',
            'confirmed' => true,
            'type' => 0,
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 2 - Porteføljestyring ',
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'For å sikre god IKT-styring er det behov for gode rutiner og kontroll i alle ledd. Det eksisterer mange ulike «beste praksis» rammeverk som har til formål å bidra til bedre IKT-styring, men ofte med ulik innfallsvinkel.Uansett fagkompetanse internt i et prosjekt-, program-, portefølje-, eller driftsmiljø er man også avhengig klare rolle- og ansvarsdefinisjoner i linjeorganisasjonen for å sikre vellykket styring.

Under årets NOKIOS konferanse ønsker vi å gå nærmere inn på noen av disse rammeverkene, både for å se på hvordan disse kan bidra til økt kvalitet og hvilke utfordringer man møter. I tillegg til god faglig kompetanse, gjenbruk der dette er hensiktsmessig, og kontinuerlig læring, får vi en god “Styringsmodenhet” slik at vi sikrer at utviklingen av den digitale modenheten går slik vi ønsker. Utviklingen av styringsmodenheten bør bedres i Norge, og her er eksempler på at en konsentrert innsats hjelper. DIFI har etablert et nettverk for virksomheter i offentlig sektor som sammen jobber med å utvikle god praksis. DIFI bidrar inn i dette nettverket med sikte på å spre erfaring og kompetanse mellom virksomheter i offentlig sektor.

Før Skatteetaten, Husbanken og kommunene presenterer sine erfaringer som viser eksempler på en konsentrert innsats på dette området, vil Ingar Brauti gi en overordnet beskrivelse av porteføljestyring i forhold til forvaltning/daglig drift, en overordnet sammenheng mellom beste praksis rammeverk, samt introduksjon av fem prinsipper, og tolv praksiser i porteføljestyring i henhold til. Management of Portfolios (MoP®)',
            'location' => 'Cosmos 3B',
            'speaker' => 'Jens Nørve, DIFI ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 3 - Digital post ',
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Den nye løsningen for sikker digital post til innbyggerne åpner for ordinær bruk i november. Alle statlige etater som sender post på papir til innbyggere skal ta løsningen i bruk. Regjeringen har satt klare tidsfrister, innen 1. juli 2015 skal etatene legge en plan for å ta løsningen i bruk innen første kvartal 2016. Se pressemelding fra Kommunal- og moderniseringsdepartementet. Difi inviterer til seminar om hvordan din virksomhet kan komme i gang med sikker digital post til innbyggere.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Stig Hornnes, Sikker digital post - prosjektleder Utbredelse, DIFI',
            'confirmed' => true,
            'type' => 0,
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 4 - Brukeren i sentrum - gode argumenter for universell utforming',
            'date' => '27-10',
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
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 5 - Offentlige anskaffelser til det beste',
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Jørund Leknes, Kantega',
            'confirmed' => false,
            'type' => 0,
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 6 - Big data og offentlig sektor',
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Lorem',
            'location' => 'A1',
            'speaker' => 'PhD Jon Espen Ingvaldsen, NTNU og Jørund Leknes, Kantega ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 1
        ));

        Program::create(array(
            'title' => 'Kurs 7 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner',
            'date' => '27-10',
            'time_from' => '09:30',
            'time_to' => '11:15',
            'description' => 'Lorem',
            'location' => 'Cosmos 3A',
            'speaker' => 'Jon Johnsen',
            'confirmed' => false,
            'type' => 0,
            'pid' => 1
        ));


        Program::create(array(
            'title' => 'Lunsj',
            'date' => '27-10',
            'time_from' => '11:30',
            'time_to' => '12:30',
            'description' => 'Lorem',
            'location' => 'Cosmos 3A',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 2,
        ));



        Program::create(array(
            'title' => 'Workshop 1 - EDAG - den største IT-reformen i Norge i 2014/2015',
            'date' => '27-10',
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'A-ordningen er navnet på den nye rapporteringsordningen til Skatteetaten (inkl. skatteoppkrever), Arbeids- og velferdsetaten (NAV) og Statistisk sentralbyrå (SSB) som innføres 1. januar 2015. A-meldingen erstatter lønns- og trekkoppgaver, terminoppgaver, årsoppgave for skattetrekk og arbeidsgiveravgift, samt skjemaer fra NAV og SSB.

Flere virksomheter har nå erfaringer fra prøvedrift på A-meldingen. Her presenteres erfaringene så langt fra innføring av A-meldingen, og hvilke konsekvenser den nye A-ordningen har fra virksomhetenes perspektiv.',
            'location' => 'Cosmos 3D',
            'speaker' => 'Elisabeth Slinde, EVRY ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Workshop 2 - Informasjonsdeling ',
            'date' => '27-10',
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
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Workshop 3 - Forenkle, forenkle, forenkle - hvor enkelt vil du ha det? ',
            'date' => '27-10',
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
            'pid' => 3
        ));



        Program::create(array(
            'title' => 'Workshop 4 - Hvordan få effekt av virksomhetsarkitektur?',
            'date' => '27-10',
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'OSDF (Offentlig sektors dataforum) inviterer til workshop rundt hvordan man kan få utbytte av virksomhetsarkitektur. De siste årene har stadig flere offentlige virksomheter startet med å lage virksomhetsarkitekturer, men får vi utnyttet dette arbeidet på en god måte?

I workshopen vil vi først få presentasjoner fra utvalgte offentlige og private virksomheter som har jobbet med denne type teknikker over lengre tid. I lys av dette vil vi diskutere behov for samordning i forhold til bruk av teknikker, notasjoner og verktøy. Målet for workshopen er i tillegg til å spre erfaringer med beste praksis å etablere basis for innholdet i et introduksjonskurs i effektiv bruk av virksomhetsarkitektur i offentlig sektor.',
            'location' => 'Cosmos 1A',
            'speaker' => ' John Krogstie, NTNU og Bjørn Holstad, DIFI ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Workshop 5 - Er den nasjonale beredskapen i Norge god nok til å møte krise og katastrofe?',
            'date' => '27-10',
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Ikke tilgjenglig',
            'confirmed' => false,
            'type' => 0,
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Workshop 6 - Finansieringsmuligheter i IKT 2025 og EU sitt Horizon 2020-program',
            'date' => '27-10',
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' => 'Ikke tilgjenglig',
            'confirmed' => false,
            'type' => 0,
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Workshop 7 - Målbilde for offentlig sektor i 2025 ',
            'date' => '27-10',
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
            'pid' => 3
        ));

        Program::create(array(
            'title' => 'Workshop 8 - Personvern i skolen og barnehagen ',
            'date' => '27-10',
            'time_from' => '12:30',
            'time_to' => '14:00',
            'description' => 'Datatilsynet har i en 2-års periode jobbet aktivt med personvern i skoler og barnehager. Foreløpig resultat er en samlerapport som oppsummerer erfaringene fra dette arbeidet. Som en innledning til workshopen vil Martha og Eirin presentere Datatilsynets samlerapport fra tilsyn på skoler og barnehager, samt trekke frem konkrete funn og erfaringer fra tilsyn som kan egne seg til diskusjon i grupper. Etter dette vil deltakerne bli inndelt i mindre grupper som skal diskutere hvordan personvernet kan bedres i skole og barnehage, samt utfordres til å presentere sine innspill i form av forslag til gode rutiner. Datatilsynet ønsker å skape engasjement for å lage en nasjonal norm for personvern i skoler og barnehager. Nyttige innspill fra workshopen kan brukes i arbeidet med en slik norm.',
            'location' => 'Living Room 1',
            'speaker' => 'Eirin Oda Lauvset, jurist og seniorrådgiver i Datatilsynet ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 3
        ));


        Program::create(array(
            'title' => 'Pause - Spekemat, ost og kjeks',
            'date' => '27-10',
            'time_from' => '14:00',
            'time_to' => '14:15',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 4,
        ));



        Program::create(array(
            'title' => 'Workshop fortsetter',
            'date' => '27-10',
            'time_from' => '14:15',
            'time_to' => '15:45',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 5,
        ));


        Program::create(array(
            'title' => 'Pause - Spekemat, ost og kjeks',
            'date' => '27-10',
            'time_from' => '15:45',
            'time_to' => '16:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 6,
        ));

        Program::create(array(
            'title' => 'Workshop fortsetter',
            'date' => '27-10',
            'time_from' => '16:00',
            'time_to' => '17:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 7,
        ));

        Program::create(array(
            'title' => 'Slutt',
            'date' => '27-10',
            'time_from' => '16:00',
            'time_to' => '17:00',
            'description' => 'Ikke tilgjenglig',
            'location' => 'Ikke tilgjenglig',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 8,
        ));


        Program::create(array(
            'title' => 'Rockheim, Splitter Pine Tapas og Charlotte Audestad',
            'date' => '27-10',
            'time_from' => '19:00',
            'time_to' => '23:00',
            'description' => 'Rockheim',
            'location' => 'Rockheim',
            'speaker' =>  null,
            'confirmed' => true,
            'type' => 1,
            'pid' => 9,
        ));

        Program::create(array(
            'title' => 'Registrering',
            'date' => '29-10',
            'time_from' => '08:30',
            'time_to' => '09:30',
            'description' => 'Registrer deg ved resepsjonen ved ankomst.',
            'location' => 'Resepsjonen',
            'speaker' => 'null',
            'confirmed' => true,
            'type' => 1,
            'pid' => 10,
        ));

        Program::create(array(
            'title' => 'Åpning',
            'date' => '29-10',
            'time_from' => '09:30',
            'time_to' => '11:00',
            'description' => 'Prorektor Berit Kjeldstad ønsker velkommen og åpner konferansen.',
            'location' => 'Cosmos 1',
            'speaker' => 'Prorektor Berit Kjeldstad',
            'confirmed' => true,
            'type' => 1,
            'pid' => 11,
        ));

        Program::create(array(
            'title' => 'Halveis til framtiden - digitale trender og impulser',
            'date' => '29-10',
            'time_from' => '09:30',
            'time_to' => '11:00',
            'description' => 'Truls har skrevet en bok sammen med Adjiedj Bakaas med samme tittel som foredraget. Boka peker på 5 megatrender og gir en rekke innspill på digitale trender og impulser vil endre det meste.',
            'location' => 'Cosmos 1',
            'speaker' => 'Truls Berg, grunder og innovatør',
            'confirmed' => true,
            'type' => 0,
            'pid' => 12,
        ));

        Program::create(array(
            'title' => 'Digital kommunikasjon',
            'date' => '29-10',
            'time_from' => '09:30',
            'time_to' => '11:00',
            'description' => 'Digital kommunikasjon skal være hovedregelen i dialogen mellom offentlig sektor og innbyggerne. Vi hører om de nye digitale byggeklossene, SvarUt, kontakt- og reservasjonsregisteret og digital post til innbyggere. Disse skal inngå i den digitale grunnmuren. Hva betyr dette egentlig for innbyggerne, kommunene og statlige virksomheter? Er vi i mål med grunnmuren når disse kommer på plass? Og hvilken utvikling kan vi forvente etter dette? I samtalen vil de fire reflektere blant annet rundt disse spørsmålene, og komme inn på: Betydningen av samhandling og samarbeid mellom kommune og stat; Veikart for felleskomponenter for å sikre forutsigbarhet, fremdrift og en helhetlig tilnærming; Digital kompetanse hos ledere.',
            'location' => 'Cosmos 1',
            'speaker' => 'Tone Bringedal, DIFI og Trude Andresen, KS i samtale med Kjetil Århus, Bergen kommune og Ingunn Cowan, Lånekassen',
            'confirmed' => true,
            'type' => 0,
            'pid' => 13,
        ));

        Program::create(array(
            'title' => 'Presentasjon av kandidater til Fyrlykt-prisen',
            'date' => '29-10',
            'time_from' => '09:30',
            'time_to' => '11:00',
            'description' => 'Presentasjon av kandidater til Fyrlykt-prisen.',
            'location' => 'Cosmos 1',
            'speaker' => 'Prorektor Berit Kjeldstad',
            'confirmed' => true,
            'type' => 0,
            'pid' => 14,
        ));

        Program::create(array(
            'title' => 'Kaffepause. Spekemat, ost og kjeks',
            'date' => '29-10',
            'time_from' => '11:00',
            'time_to' => '11:15',
            'description' => 'Det blir servert kaffe og spekemat med ost og kjeks i fellesområdet.',
            'location' => 'Fellesområdet',
            'speaker' => 'null',
            'confirmed' => true,
            'type' => 1,
            'pid' => 15,
        ));

        Program::create(array(
            'title' => 'U1 - Software Innovation: Skyløsninger',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Seminaret inneholder litt om hva cloud er, bakgrunn, skytjeneste vs. Lokal installasjon, gevinster og en rask demonstrasjon av løsningen.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Odd-Henrik Hansen og Tonje Nordli. ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U2 - EVRY: Mobile trender og løsninger for offentlig sektor',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Bruken av mobil og nettbrett øker i bedriftene, og i 2015 vil det være flere på arbeidsplassen som bruker internett gjennom mobile enheter enn gjennom ordinær PC. Antall app’er skyter i været, både bedrifts-apper og apper for privat bruk. Er sikkerheten ivaretatt? Hvordan kan EVRY gi den offentlige sektor merverdi som gjør den mobile enheten til et effektivt arbeidsverktøy? Vi vil også presentere hvordan EVRY kan levere hele livssyklusen innen mobile løsninger, fra mobiltelefoner og nettbrett samt logistikk rundt dette, til sikkerhetsløsninger, apphåndtering og kundeunike apper.

Vi har med oss Kultur- og naturreise, et prosjekt under Kartverket, Kulturrådet, Miljødirektoratet, Riksantikvaren og Riksarkivet. De vil presentere KNappen, som står for kultur- og naturreise-appen og omtales på deres nettsider http://kulturognaturreise.no. Denne appen er en demonstrator på hva et nasjonalt løft for å øke tilgangen til åpne offentlig data og lokal kunnskap om kultur og natur kan føre til. Utrustet med smarttelefon får du tilgang til aktuelle fakta og fortellinger om natur og kultur på stedet de er. Det overordnede målet er å øke kunnskap om og skape engasjement for kulturminner og naturverdier. KNappen er utviklet i samarbeid med EVRY, og kan testes her: http://kulturognaturreise.wordpress.com/2013/04/23/vil-du-vaere-med-a-teste-knappen/',
            'location' => 'Space 3',
            'speaker' => 'Anita Rusten, EVRY og Sidsel Hindal og Marit Kjeksrud Amundsen, Kultur- og naturreise ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U3 - Brønnøysundregistrene: Med Altinn i fremtiden',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Ingen diskripsjon',
            'location' => 'Cosmos 1',
            'speaker' => 'Direktør Lars Peder Brekk, Brønnøysundregistrene ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U4 - Capgemini: Kunsten å lage verdiskapende, brukersentrerte digitale tjenester',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'De offentlige tjenestene blir mer og mer digitale, og epoken hvor fysiske kontaktpunkter var de viktigste for å få tilgang til disse er ved veis ende. Sektorer slik som bank og finans har allerede opplevd paradigmeskiftet fra å ha fysiske tjenester til å bli så og si heldigitale.

Fra det offentlige, er Lånekassen et godt eksempel på hvordan det er mulig å modernisere og digitalisere sine tjenester ved å ha et brukersentrisk fokus og samtidig få en effektivisering og kostnadsbesparing internt.

De digitale tjenestene gir med andre ord uante muligheter for både tilbyder og bruker - og med digitalt førstevalg fra 2016, vil antall tjenester som må forholde seg til digitale kontaktpunkter økes dramatisk!

Men hvordan går man frem for å danne tjenester som bruker de digitale kontaktflatene på best mulig måte?',
            'location' => 'Cosmos 3A',
            'speaker' => 'Israr Khan',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U5 - Telenor: Velferdsteknologi i praksis',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Værnes-regionen var tidlig ute med bruk av digitale løsninger innenfor helse og omsorg. Stjørdal og Selbu var de første kommunene som innførte løsning der velferdsteknologi ble integrert med fagsystemet og journalsystemet i kommunen. Hva er utfordringene med helse og omsorg i kommunene og hva er målet med innføring av ny teknologi? Vi får en innføring i kommunens erfaringer med løsningen.',
            'location' => 'Living Room 1 ',
            'speaker' => 'Elin Darrel, IT-sjef i Stjørdal kommune ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U6 - Visma: Hvordan skape innovasjon i din virksomhet?',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Vi gir deg en innføring i hvordan du kan skape en innovasjonskultur i din organisasjon. Ragne forteller om hva vi i Visma gjør for å fange, foredle og implementere nye idèer fra egen organisasjon i forretningsutviklingen, og gir deg samtidig noen råd om prosess, verktøy og aktiviteter du kan benytte for å lykkes med å etablere en innovasjonskultur internt.',
            'location' => 'Space 1 ',
            'speaker' => 'Ragne Elisabeth Henriksen, Innovasjonsleder i Visma Consulting ',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'U7 - Kantega: Hvordan finne ut mer om brukerne dine enn brukeren selv vet',
            'date' => '29-10',
            'time_from' => '11:15',
            'time_to' => '11:45',
            'description' => 'Ingen diskripsjon',
            'location' => 'Living Room 4',
            'speaker' => 'Gøril Storrø',
            'confirmed' => true,
            'type' => 0,
            'pid' => 16,
        ));

        Program::create(array(
            'title' => 'Sesjon 1A Kunsten å forenkle – suksesshistorier',
            'date' => '29-10',
            'time_from' => '12:00',
            'time_to' => '13:00',
            'description' => 'Det nye slagordet er «fornye, forenkle og forbedre». I denne sesjonen setter vi fokus på hvordan digitalisering bidrar til fornying, forenkling og forbedring. Vi får flere konkrete eksempler på hva virksomheter har gjort og hva som førte til deres suksess. Situasjonen før og etter tiltaket, beskrivelse av tiltaket og læringseffekten for andre vil være sentralt i de suksesshistoriene vi får høre om.',
            'location' => 'Cosmos 1',
            'speaker' => 'Hilde Kristin Storvig (Brønnøysundregistrene), Bjørn Sverre Gåsland (Statens Innkrevingssentral), Berner Koldal (Sjørfartsdirektoratet), Camilla Grøneng (Statens vegvesen), Torbjørn Moen (Oslo kemnerkontor).',
            'confirmed' => true,
            'type' => 0,
            'pid' => 17,
        ));

        Program::create(array(
            'title' => 'Sesjon 1B Servicedesign - tjenesteutvikling med brukeren i sentrum',
            'date' => '29-10',
            'time_from' => '12:00',
            'time_to' => '13:00',
            'description' => 'Det duger ikke lenger å jobbe på «gamlemåten» når du skal utvikle dine tjenester for morgendagens brukere. Trender om forbruksmønstre og brukernes forventninger påvirker vår tjenesteutvikling. Servicedesign dreier seg om å skape gode og helhetlige opplevelser ved å sette brukeren i sentrum, i samsvar med virksomhetens strategi. I denne sesjonen setter vi søkelyset på servicedesign som fagdisiplin. Innovasjon knyttet til arbeidsprosesser og ivaretakelse av brukerbehov er noen stikkord ved tjenesteutvikling i en ny digital virkelighet. Er du og din virksomhet forberedt på fremtidens tjenesteutvikling? Hvis ikke - da må du få med deg denne sesjonen.',
            'location' => 'Cosmos 3A',
            'speaker' => 'Jørund Leknes (Kantega), Anne Stokke (Bouvet), Knut Kvale (Telenor ASA), Trude Hole (KulturIT).',
            'confirmed' => true,
            'type' => 0,
            'pid' => 17,
        ));

        Program::create(array(
            'title' => 'Sesjon 1C Sikkerhet og beredskap',
            'date' => '29-10',
            'time_from' => '12:00',
            'time_to' => '13:00',
            'description' => 'Når vannet truer

Geografisk informasjonsteknologi er samfunnet viktigste våpen for å verne liv og verdier når naturkreftene løper løpsk. Risiko- og sårbarhetsanalyser basert på denne teknologien gir planleggere og innbyggere langt større sikkerhet og forutsigbarhet enn tidligere. Foredraget viser en rekke praktiske situasjoner hvor moderne teknologi anvendes for å hindre eller redusere skade og fare.

Én krise - flere kriseledelser – ett situasjonsbilde

Effektiv krisehåndtering krever et samspill mellom flere aktører. Samfunnet disponerer samlet sett betydelige ressurser i form av nøyaktige geodata og spesialkompetanse. Utfordringen er at ressursene er fordelt på flere etater. Er aktørene i stand til, eller villige til å samhandle og ta i bruk ressursene på tvers av sektorer ? Foredraget viser hvordan og hvorfor en komponent for geobasert krisehåndtering er under oppbygging i Oslo kommune, Forsvaret og politiet.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Erland Røed (Kartverket), Rune Bratlie (Nedre Eiker commune), Stein Moen (Fenrik, HV-01).',
            'confirmed' => true,
            'type' => 0,
            'pid' => 17,
        ));

        Program::create(array(
            'title' => 'Lunsj',
            'date' => '29-10',
            'time_from' => '11:45',
            'time_to' => '12:00',
            'description' => 'Det blir servert lunsj i lunsjområdet.',
            'location' => 'Lunsjområdet',
            'speaker' => 'null',
            'confirmed' => true,
            'type' => 1,
            'pid' => 18,
        ));

        Program::create(array(
            'title' => 'Paneldebatt: Ledere i utakt - manglende digital kompetanse?',
            'date' => '29-10',
            'time_from' => '14:00',
            'time_to' => '15:00',
            'description' => 'Vi trenger større fart på endringsarbeidet og mye kan gjøres i den enkelte enhet/etat.

Hva kreves av ledere med ansvar for digitalisering?
Hvilken kompetanse må de ha?
Hvor står de i dag og hva skal til for å komme til ønsket tilstand?
Kan digitalisering outsources til leverandører og konsulenter eller må virksomhetene selv stå for dette?
Kan det tenkes at offentlig innkjøpsregime bidrar til å hindre utvikling av nødvendig kompetanse?',
            'location' => 'Cosmos 1',
            'speaker' => 'Arne Hjeltnes',
            'confirmed' => true,
            'type' => 0,
            'pid' => 19,
        ));

        Program::create(array(
            'title' => 'Pause. Frukt, grønt og dip.',
            'date' => '29-10',
            'time_from' => '15:00',
            'time_to' => '15:15',
            'description' => 'Det blir servert en liten oppkvikker i fellesområdet.',
            'location' => 'Fellesområdet',
            'speaker' => 'null',
            'confirmed' => true,
            'type' => 1,
            'pid' => 20,
        ));

        Program::create(array(
            'title' => 'Sesjon 2A Digital post',
            'date' => '29-10',
            'time_from' => '15:15',
            'time_to' => '16:15',
            'description' => 'Vi har A-post og B-post, ja er det ikke noe som heter ePost og nå kommer D-post, nei det var digital post.
    Vi produserer dokumenter digitalt, oppbevarer dokumenter digitalt, men når de skal sendes må de veien via papir –
        dette gir vel ingen mening. Har du hørt om Difis prosjekt «Sikker digital post til innbygger» og KS KommITs «Svarut»,
        post fra kommuner og fylkeskommuner til innbyggere og virksomheter. Digipost og eBoks har tilbudt digitale postkasser i
        flere år allerede. Alle som ønsker det får selvangivelsen digitalt fra Altinn, men det er en digital meldingsboks,
        ikke en digital postboks. Må vi beholde den grønne postkassen og hvorfor fjernet DNB muligheten kundene hadde til
        å få kopi av posten i nettbanken sendt til eBoks og Digipost. Blir du med, vi samler alle til en prat, ja postbudet kommer kanskje også.',
            'location' => 'Cosmos 3A',
            'speaker' => 'Astrid Øksenvåg (eKor), Kjetil Århus (Bergen kommune), Tone Bringedal (DIFI), Kjersti Lauritzen (Brønnøysundregistrene).',
            'confirmed' => true,
            'type' => 0,
            'pid' => 21,
        ));

        Program::create(array(
            'title' => 'Sesjon 2B Brukersentrerte tjenester på tvers av etatenes siloer',
            'date' => '29-10',
            'time_from' => '15:15',
            'time_to' => '16:15',
            'description' => 'Mange offentlige tjenester lager gode digitale tjenester hver for seg. Men hva skal til for at vi får til samordnede tjenester som er sentrert rundt innbyggere og næringslivets behov og som involverer flere offentlige virksomheter?

Etter en innledning om teamet får vi høre Jacob Krokstedt fra Stockholm stad som vil ha et innlegg med tittelen Med invånarnas fokus – Hur vi har jobbat med digitale tjänster på tvers av kommunala myndigheter i Stockholm. Til slutt blir det en paneldebatt med Arne Thorstensen fra Skatteetaten, Marit Mellingen, Difi og Arild Jansen, UiO.',
            'location' => 'Cosmos 1',
            'speaker' => 'Åsmund Mæhle (Bouvet), Jacob Krokstedt (Stockholm kommune), Arild Jansen (UiO), Arne Thorstensen (Skatteeetaten), Marit Mellingen (DIFI).',
            'confirmed' => true,
            'type' => 0,
            'pid' => 21,
        ));

        Program::create(array(
            'title' => 'Sesjon 2C Fra prosjekt til forvaltningv',
            'date' => '29-10',
            'time_from' => '15:15',
            'time_to' => '16:15',
            'description' => 'Overgangen fra prosjekt til forvaltning kan være stor. Hvordan kan prosjekter forberede seg på overgangen til forvaltning? Smidige metoder og å kombinere utvikling og forvaltning er tiltak som kan sikre en effektiv overgang fra prosjekt til forvaltning. I denne sesjonen vil vi fokusere på prosjekt og forvaltningsfase for Perform hos Statens Pensjonskasse, hvor utviklingsprosjektet varte fra 2008 til 2012 og systemet nå er i forvaltning. Vi vil fokusere på læringspunkter som er relevante både for små og store utviklingsprosjekt.',
            'location' => 'Cosmos 3C',
            'speaker' => 'Atle Bergfjord (Capgemini), Mette Gjertsen (Statens pensjonskasse), Tore Dybå (SINTEF)',
            'confirmed' => true,
            'type' => 0,
            'pid' => 21,
        ));

        Program::create(array(
            'title' => 'Konferansemiddag og Fyrlyktprisen',
            'date' => '29-10',
            'time_from' => '19:30',
            'time_to' => '23:30',
            'description' => 'Mat og drikke er en viktig del av den totale opplevelsen av konferansen. Det blir det servert et velsmakende 3 retters måltid bestående av
Forrett: Sukkersaltet Frøya Laks, Dillkrem, karse og marinert agurk
Hovedrett: Langbakt Indrefilet av storfe, fenikkel, stekt sopp, pac choy, amadinepotet og timiansjy
Dessert: Pasjonsfrukt panna cotta med mangokompott og sukkerbrød.',
            'location' => 'Clarion Hotel & Congress',
            'speaker' => 'null',
            'confirmed' => true,
            'type' => 1,
            'pid' => 22,
        ));
























    }
} 