<?php
// Start google init array for fonts
$cs_fonts_vars = array('cs_fonts_subsets');
$cs_fonts_vars = CS_JOBCAREER_GLOBALS()->globalizing($cs_fonts_vars);
extract($cs_fonts_vars);

if( ! function_exists('jobcareer_get_google_init_arrays')){
function jobcareer_get_google_init_arrays() {
    $font_list_init = array(
        "ABeeZee" => "ABeeZee",
        "Abel" => "Abel",
        "Abril Fatface" => "Abril Fatface",
        "Aclonica" => "Aclonica",
        "Acme" => "Acme",
        "Actor" => "Actor",
        "Adamina" => "Adamina",
        "Advent Pro" => "Advent Pro",
        "Aguafina Script" => "Aguafina Script",
        "Akronim" => "Akronim",
        "Aladin" => "Aladin",
        "Aldrich" => "Aldrich",
        "Alef" => "Alef",
        "Alegreya" => "Alegreya",
        "Alegreya SC" => "Alegreya SC",
        "Alegreya Sans" => "Alegreya Sans",
        "Alegreya Sans SC" => "Alegreya Sans SC",
        "Alex Brush" => "Alex Brush",
        "Alfa Slab One" => "Alfa Slab One",
        "Alice" => "Alice",
        "Alike" => "Alike",
        "Alike Angular" => "Alike Angular",
        "Allan" => "Allan",
        "Allerta" => "Allerta",
        "Allerta Stencil" => "Allerta Stencil",
        "Allura" => "Allura",
        "Almendra" => "Almendra",
        "Almendra Display" => "Almendra Display",
        "Almendra SC" => "Almendra SC",
        "Amarante" => "Amarante",
        "Amaranth" => "Amaranth",
        "Amatic SC" => "Amatic SC",
        "Amethysta" => "Amethysta",
        "Amiri" => "Amiri",
        "Amita" => "Amita",
        "Anaheim" => "Anaheim",
        "Andada" => "Andada",
        "Andika" => "Andika",
        "Angkor" => "Angkor",
        "Annie Use Your Telescope" => "Annie Use Your Telescope",
        "Anonymous Pro" => "Anonymous Pro",
        "Antic" => "Antic",
        "Antic Didone" => "Antic Didone",
        "Antic Slab" => "Antic Slab",
        "Anton" => "Anton",
        "Arapey" => "Arapey",
        "Arbutus" => "Arbutus",
        "Arbutus Slab" => "Arbutus Slab",
        "Architects Daughter" => "Architects Daughter",
        "Archivo Black" => "Archivo Black",
        "Archivo Narrow" => "Archivo Narrow",
        "Arimo" => "Arimo",
        "Arizonia" => "Arizonia",
        "Armata" => "Armata",
        "Artifika" => "Artifika",
        "Arvo" => "Arvo",
        "Arya" => "Arya",
        "Asap" => "Asap",
        "Asar" => "Asar",
        "Asset" => "Asset",
        "Astloch" => "Astloch",
        "Asul" => "Asul",
        "Atomic Age" => "Atomic Age",
        "Aubrey" => "Aubrey",
        "Audiowide" => "Audiowide",
        "Autour One" => "Autour One",
        "Average" => "Average",
        "Average Sans" => "Average Sans",
        "Averia Gruesa Libre" => "Averia Gruesa Libre",
        "Averia Libre" => "Averia Libre",
        "Averia Sans Libre" => "Averia Sans Libre",
        "Averia Serif Libre" => "Averia Serif Libre",
        "Bad Script" => "Bad Script",
        "Balthazar" => "Balthazar",
        "Bangers" => "Bangers",
        "Basic" => "Basic",
        "Battambang" => "Battambang",
        "Baumans" => "Baumans",
        "Bayon" => "Bayon",
        "Belgrano" => "Belgrano",
        "Belleza" => "Belleza",
        "BenchNine" => "BenchNine",
        "Bentham" => "Bentham",
        "Berkshire Swash" => "Berkshire Swash",
        "Bevan" => "Bevan",
        "Bigelow Rules" => "Bigelow Rules",
        "Bigshot One" => "Bigshot One",
        "Bilbo" => "Bilbo",
        "Bilbo Swash Caps" => "Bilbo Swash Caps",
        "Biryani" => "Biryani",
        "Bitter" => "Bitter",
        "Black Ops One" => "Black Ops One",
        "Bokor" => "Bokor",
        "Bonbon" => "Bonbon",
        "Boogaloo" => "Boogaloo",
        "Bowlby One" => "Bowlby One",
        "Bowlby One SC" => "Bowlby One SC",
        "Brawler" => "Brawler",
        "Bree Serif" => "Bree Serif",
        "Bubblegum Sans" => "Bubblegum Sans",
        "Bubbler One" => "Bubbler One",
        "Buda" => "Buda",
        "Buenard" => "Buenard",
        "Butcherman" => "Butcherman",
        "Butterfly Kids" => "Butterfly Kids",
        "Cabin" => "Cabin",
        "Cabin Condensed" => "Cabin Condensed",
        "Cabin Sketch" => "Cabin Sketch",
        "Caesar Dressing" => "Caesar Dressing",
        "Cagliostro" => "Cagliostro",
        "Calligraffitti" => "Calligraffitti",
        "Cambay" => "Cambay",
        "Cambo" => "Cambo",
        "Candal" => "Candal",
        "Cantarell" => "Cantarell",
        "Cantata One" => "Cantata One",
        "Cantora One" => "Cantora One",
        "Capriola" => "Capriola",
        "Cardo" => "Cardo",
        "Carme" => "Carme",
        "Carrois Gothic" => "Carrois Gothic",
        "Carrois Gothic SC" => "Carrois Gothic SC",
        "Carter One" => "Carter One",
        "Catamaran" => "Catamaran",
        "Caudex" => "Caudex",
        "Cedarville Cursive" => "Cedarville Cursive",
        "Ceviche One" => "Ceviche One",
        "Changa One" => "Changa One",
        "Chango" => "Chango",
        "Chau Philomene One" => "Chau Philomene One",
        "Chela One" => "Chela One",
        "Chelsea Market" => "Chelsea Market",
        "Chenla" => "Chenla",
        "Cherry Cream Soda" => "Cherry Cream Soda",
        "Cherry Swash" => "Cherry Swash",
        "Chewy" => "Chewy",
        "Chicle" => "Chicle",
        "Chivo" => "Chivo",
        "Chonburi" => "Chonburi",
        "Cinzel" => "Cinzel",
        "Cinzel Decorative" => "Cinzel Decorative",
        "Clicker Script" => "Clicker Script",
        "Coda" => "Coda",
        "Coda Caption" => "Coda Caption",
        "Codystar" => "Codystar",
        "Combo" => "Combo",
        "Comfortaa" => "Comfortaa",
        "Coming Soon" => "Coming Soon",
        "Concert One" => "Concert One",
        "Condiment" => "Condiment",
        "Content" => "Content",
        "Contrail One" => "Contrail One",
        "Convergence" => "Convergence",
        "Cookie" => "Cookie",
        "Copse" => "Copse",
        "Corben" => "Corben",
        "Courgette" => "Courgette",
        "Cousine" => "Cousine",
        "Coustard" => "Coustard",
        "Covered By Your Grace" => "Covered By Your Grace",
        "Crafty Girls" => "Crafty Girls",
        "Creepster" => "Creepster",
        "Crete Round" => "Crete Round",
        "Crimson Text" => "Crimson Text",
        "Croissant One" => "Croissant One",
        "Crushed" => "Crushed",
        "Cuprum" => "Cuprum",
        "Cutive" => "Cutive",
        "Cutive Mono" => "Cutive Mono",
        "Damion" => "Damion",
        "Dancing Script" => "Dancing Script",
        "Dangrek" => "Dangrek",
        "Dawning of a New Day" => "Dawning of a New Day",
        "Days One" => "Days One",
        "Dekko" => "Dekko",
        "Delius" => "Delius",
        "Delius Swash Caps" => "Delius Swash Caps",
        "Delius Unicase" => "Delius Unicase",
        "Della Respira" => "Della Respira",
        "Denk One" => "Denk One",
        "Devonshire" => "Devonshire",
        "Dhurjati" => "Dhurjati",
        "Didact Gothic" => "Didact Gothic",
        "Diplomata" => "Diplomata",
        "Diplomata SC" => "Diplomata SC",
        "Domine" => "Domine",
        "Donegal One" => "Donegal One",
        "Doppio One" => "Doppio One",
        "Dorsa" => "Dorsa",
        "Dosis" => "Dosis",
        "Dr Sugiyama" => "Dr Sugiyama",
        "Droid Sans" => "Droid Sans",
        "Droid Sans Mono" => "Droid Sans Mono",
        "Droid Serif" => "Droid Serif",
        "Duru Sans" => "Duru Sans",
        "Dynalight" => "Dynalight",
        "EB Garamond" => "EB Garamond",
        "Eagle Lake" => "Eagle Lake",
        "Eater" => "Eater",
        "Economica" => "Economica",
        "Eczar" => "Eczar",
        "Ek Mukta" => "Ek Mukta",
        "Electrolize" => "Electrolize",
        "Elsie" => "Elsie",
        "Elsie Swash Caps" => "Elsie Swash Caps",
        "Emblema One" => "Emblema One",
        "Emilys Candy" => "Emilys Candy",
        "Engagement" => "Engagement",
        "Englebert" => "Englebert",
        "Enriqueta" => "Enriqueta",
        "Erica One" => "Erica One",
        "Esteban" => "Esteban",
        "Euphoria Script" => "Euphoria Script",
        "Ewert" => "Ewert",
        "Exo" => "Exo",
        "Exo 2" => "Exo 2",
        "Expletus Sans" => "Expletus Sans",
        "Fanwood Text" => "Fanwood Text",
        "Fascinate" => "Fascinate",
        "Fascinate Inline" => "Fascinate Inline",
        "Faster One" => "Faster One",
        "Fasthand" => "Fasthand",
        "Fauna One" => "Fauna One",
        "Federant" => "Federant",
        "Federo" => "Federo",
        "Felipa" => "Felipa",
        "Fenix" => "Fenix",
        "Finger Paint" => "Finger Paint",
        "Fira Mono" => "Fira Mono",
        "Fira Sans" => "Fira Sans",
        "Fjalla One" => "Fjalla One",
        "Fjord One" => "Fjord One",
        "Flamenco" => "Flamenco",
        "Flavors" => "Flavors",
        "Fondamento" => "Fondamento",
        "Fontdiner Swanky" => "Fontdiner Swanky",
        "Forum" => "Forum",
        "Francois One" => "Francois One",
        "Freckle Face" => "Freckle Face",
        "Fredericka the Great" => "Fredericka the Great",
        "Fredoka One" => "Fredoka One",
        "Freehand" => "Freehand",
        "Fresca" => "Fresca",
        "Frijole" => "Frijole",
        "Fruktur" => "Fruktur",
        "Fugaz One" => "Fugaz One",
        "GFS Didot" => "GFS Didot",
        "GFS Neohellenic" => "GFS Neohellenic",
        "Gabriela" => "Gabriela",
        "Gafata" => "Gafata",
        "Galdeano" => "Galdeano",
        "Galindo" => "Galindo",
        "Gentium Basic" => "Gentium Basic",
        "Gentium Book Basic" => "Gentium Book Basic",
        "Geo" => "Geo",
        "Geostar" => "Geostar",
        "Geostar Fill" => "Geostar Fill",
        "Germania One" => "Germania One",
        "Gidugu" => "Gidugu",
        "Gilda Display" => "Gilda Display",
        "Give You Glory" => "Give You Glory",
        "Glass Antiqua" => "Glass Antiqua",
        "Glegoo" => "Glegoo",
        "Gloria Hallelujah" => "Gloria Hallelujah",
        "Goblin One" => "Goblin One",
        "Gochi Hand" => "Gochi Hand",
        "Gorditas" => "Gorditas",
        "Goudy Bookletter 1911" => "Goudy Bookletter 1911",
        "Graduate" => "Graduate",
        "Grand Hotel" => "Grand Hotel",
        "Gravitas One" => "Gravitas One",
        "Great Vibes" => "Great Vibes",
        "Griffy" => "Griffy",
        "Gruppo" => "Gruppo",
        "Gudea" => "Gudea",
        "Gurajada" => "Gurajada",
        "Habibi" => "Habibi",
        "Halant" => "Halant",
        "Hammersmith One" => "Hammersmith One",
        "Hanalei" => "Hanalei",
        "Hanalei Fill" => "Hanalei Fill",
        "Handlee" => "Handlee",
        "Hanuman" => "Hanuman",
        "Happy Monkey" => "Happy Monkey",
        "Headland One" => "Headland One",
        "Henny Penny" => "Henny Penny",
        "Herr Von Muellerhoff" => "Herr Von Muellerhoff",
        "Hind" => "Hind",
        "Holtwood One SC" => "Holtwood One SC",
        "Homemade Apple" => "Homemade Apple",
        "Homenaje" => "Homenaje",
        "IM Fell DW Pica" => "IM Fell DW Pica",
        "IM Fell DW Pica SC" => "IM Fell DW Pica SC",
        "IM Fell Double Pica" => "IM Fell Double Pica",
        "IM Fell Double Pica SC" => "IM Fell Double Pica SC",
        "IM Fell English" => "IM Fell English",
        "IM Fell English SC" => "IM Fell English SC",
        "IM Fell French Canon" => "IM Fell French Canon",
        "IM Fell French Canon SC" => "IM Fell French Canon SC",
        "IM Fell Great Primer" => "IM Fell Great Primer",
        "IM Fell Great Primer SC" => "IM Fell Great Primer SC",
        "Iceberg" => "Iceberg",
        "Iceland" => "Iceland",
        "Imprima" => "Imprima",
        "Inconsolata" => "Inconsolata",
        "Inder" => "Inder",
        "Indie Flower" => "Indie Flower",
        "Inika" => "Inika",
        "Inknut Antiqua" => "Inknut Antiqua",
        "Irish Grover" => "Irish Grover",
        "Istok Web" => "Istok Web",
        "Italiana" => "Italiana",
        "Italianno" => "Italianno",
        "Itim" => "Itim",
        "Jacques Francois" => "Jacques Francois",
        "Jacques Francois Shadow" => "Jacques Francois Shadow",
        "Jaldi" => "Jaldi",
        "Jim Nightshade" => "Jim Nightshade",
        "Jockey One" => "Jockey One",
        "Jolly Lodger" => "Jolly Lodger",
        "Josefin Sans" => "Josefin Sans",
        "Josefin Slab" => "Josefin Slab",
        "Joti One" => "Joti One",
        "Judson" => "Judson",
        "Julee" => "Julee",
        "Julius Sans One" => "Julius Sans One",
        "Junge" => "Junge",
        "Jura" => "Jura",
        "Just Another Hand" => "Just Another Hand",
        "Just Me Again Down Here" => "Just Me Again Down Here",
        "Kadwa" => "Kadwa",
        "Kalam" => "Kalam",
        "Kameron" => "Kameron",
        "Kantumruy" => "Kantumruy",
        "Karla" => "Karla",
        "Karma" => "Karma",
        "Kaushan Script" => "Kaushan Script",
        "Kavoon" => "Kavoon",
        "Kdam Thmor" => "Kdam Thmor",
        "Keania One" => "Keania One",
        "Kelly Slab" => "Kelly Slab",
        "Kenia" => "Kenia",
        "Khand" => "Khand",
        "Khmer" => "Khmer",
        "Khula" => "Khula",
        "Kite One" => "Kite One",
        "Knewave" => "Knewave",
        "Kotta One" => "Kotta One",
        "Koulen" => "Koulen",
        "Kranky" => "Kranky",
        "Kreon" => "Kreon",
        "Kristi" => "Kristi",
        "Krona One" => "Krona One",
        "Kurale" => "Kurale",
        "La Belle Aurore" => "La Belle Aurore",
        "Laila" => "Laila",
        "Lakki Reddy" => "Lakki Reddy",
        "Lancelot" => "Lancelot",
        "Lateef" => "Lateef",
        "Lato" => "Lato",
        "League Script" => "League Script",
        "Leckerli One" => "Leckerli One",
        "Ledger" => "Ledger",
        "Lekton" => "Lekton",
        "Lemon" => "Lemon",
        "Libre Baskerville" => "Libre Baskerville",
        "Life Savers" => "Life Savers",
        "Lilita One" => "Lilita One",
        "Lily Script One" => "Lily Script One",
        "Limelight" => "Limelight",
        "Linden Hill" => "Linden Hill",
        "Lobster" => "Lobster",
        "Lobster Two" => "Lobster Two",
        "Londrina Outline" => "Londrina Outline",
        "Londrina Shadow" => "Londrina Shadow",
        "Londrina Sketch" => "Londrina Sketch",
        "Londrina Solid" => "Londrina Solid",
        "Lora" => "Lora",
        "Love Ya Like A Sister" => "Love Ya Like A Sister",
        "Loved by the King" => "Loved by the King",
        "Lovers Quarrel" => "Lovers Quarrel",
        "Luckiest Guy" => "Luckiest Guy",
        "Lusitana" => "Lusitana",
        "Lustria" => "Lustria",
        "Macondo" => "Macondo",
        "Macondo Swash Caps" => "Macondo Swash Caps",
        "Magra" => "Magra",
        "Maiden Orange" => "Maiden Orange",
        "Mako" => "Mako",
        "Mallanna" => "Mallanna",
        "Mandali" => "Mandali",
        "Marcellus" => "Marcellus",
        "Marcellus SC" => "Marcellus SC",
        "Marck Script" => "Marck Script",
        "Margarine" => "Margarine",
        "Marko One" => "Marko One",
        "Marmelad" => "Marmelad",
        "Martel" => "Martel",
        "Martel Sans" => "Martel Sans",
        "Marvel" => "Marvel",
        "Mate" => "Mate",
        "Mate SC" => "Mate SC",
        "Maven Pro" => "Maven Pro",
        "McLaren" => "McLaren",
        "Meddon" => "Meddon",
        "MedievalSharp" => "MedievalSharp",
        "Medula One" => "Medula One",
        "Megrim" => "Megrim",
        "Meie Script" => "Meie Script",
        "Merienda" => "Merienda",
        "Merienda One" => "Merienda One",
        "Merriweather" => "Merriweather",
        "Merriweather Sans" => "Merriweather Sans",
        "Metal" => "Metal",
        "Metal Mania" => "Metal Mania",
        "Metamorphous" => "Metamorphous",
        "Metrophobic" => "Metrophobic",
        "Michroma" => "Michroma",
        "Milonga" => "Milonga",
        "Miltonian" => "Miltonian",
        "Miltonian Tattoo" => "Miltonian Tattoo",
        "Miniver" => "Miniver",
        "Miss Fajardose" => "Miss Fajardose",
        "Modak" => "Modak",
        "Modern Antiqua" => "Modern Antiqua",
        "Molengo" => "Molengo",
        "Molle" => "Molle",
        "Monda" => "Monda",
        "Monofett" => "Monofett",
        "Monoton" => "Monoton",
        "Monsieur La Doulaise" => "Monsieur La Doulaise",
        "Montaga" => "Montaga",
        "Montez" => "Montez",
        "Montserrat" => "Montserrat",
        "Montserrat Alternates" => "Montserrat Alternates",
        "Montserrat Subrayada" => "Montserrat Subrayada",
        "Moul" => "Moul",
        "Moulpali" => "Moulpali",
        "Mountains of Christmas" => "Mountains of Christmas",
        "Mouse Memoirs" => "Mouse Memoirs",
        "Mr Bedfort" => "Mr Bedfort",
        "Mr Dafoe" => "Mr Dafoe",
        "Mr De Haviland" => "Mr De Haviland",
        "Mrs Saint Delafield" => "Mrs Saint Delafield",
        "Mrs Sheppards" => "Mrs Sheppards",
        "Muli" => "Muli",
        "Mystery Quest" => "Mystery Quest",
        "NTR" => "NTR",
        "Neucha" => "Neucha",
        "Neuton" => "Neuton",
        "New Rocker" => "New Rocker",
        "News Cycle" => "News Cycle",
        "Niconne" => "Niconne",
        "Nixie One" => "Nixie One",
        "Nobile" => "Nobile",
        "Nokora" => "Nokora",
        "Norican" => "Norican",
        "Nosifer" => "Nosifer",
        "Nothing You Could Do" => "Nothing You Could Do",
        "Noticia Text" => "Noticia Text",
        "Noto Sans" => "Noto Sans",
        "Noto Serif" => "Noto Serif",
        "Nova Cut" => "Nova Cut",
        "Nova Flat" => "Nova Flat",
        "Nova Mono" => "Nova Mono",
        "Nova Oval" => "Nova Oval",
        "Nova Round" => "Nova Round",
        "Nova Script" => "Nova Script",
        "Nova Slim" => "Nova Slim",
        "Nova Square" => "Nova Square",
        "Numans" => "Numans",
        "Nunito" => "Nunito",
        "Odor Mean Chey" => "Odor Mean Chey",
        "Offside" => "Offside",
        "Old Standard TT" => "Old Standard TT",
        "Oldenburg" => "Oldenburg",
        "Oleo Script" => "Oleo Script",
        "Oleo Script Swash Caps" => "Oleo Script Swash Caps",
        "Open Sans" => "Open Sans",
        "Open Sans Condensed" => "Open Sans Condensed",
        "Oranienbaum" => "Oranienbaum",
        "Orbitron" => "Orbitron",
        "Oregano" => "Oregano",
        "Orienta" => "Orienta",
        "Original Surfer" => "Original Surfer",
        "Oswald" => "Oswald",
        "Over the Rainbow" => "Over the Rainbow",
        "Overlock" => "Overlock",
        "Overlock SC" => "Overlock SC",
        "Ovo" => "Ovo",
        "Oxygen" => "Oxygen",
        "Oxygen Mono" => "Oxygen Mono",
        "PT Mono" => "PT Mono",
        "PT Sans" => "PT Sans",
        "PT Sans Caption" => "PT Sans Caption",
        "PT Sans Narrow" => "PT Sans Narrow",
        "PT Serif" => "PT Serif",
        "PT Serif Caption" => "PT Serif Caption",
        "Pacifico" => "Pacifico",
        "Palanquin" => "Palanquin",
        "Palanquin Dark" => "Palanquin Dark",
        "Paprika" => "Paprika",
        "Parisienne" => "Parisienne",
        "Passero One" => "Passero One",
        "Passion One" => "Passion One",
        "Pathway Gothic One" => "Pathway Gothic One",
        "Patrick Hand" => "Patrick Hand",
        "Patrick Hand SC" => "Patrick Hand SC",
        "Patua One" => "Patua One",
        "Paytone One" => "Paytone One",
        "Peddana" => "Peddana",
        "Peralta" => "Peralta",
        "Permanent Marker" => "Permanent Marker",
        "Petit Formal Script" => "Petit Formal Script",
        "Petrona" => "Petrona",
        "Philosopher" => "Philosopher",
        "Piedra" => "Piedra",
        "Pinyon Script" => "Pinyon Script",
        "Pirata One" => "Pirata One",
        "Plaster" => "Plaster",
        "Play" => "Play",
        "Playball" => "Playball",
        "Playfair Display" => "Playfair Display",
        "Playfair Display SC" => "Playfair Display SC",
        "Podkova" => "Podkova",
        "Poiret One" => "Poiret One",
        "Poller One" => "Poller One",
        "Poly" => "Poly",
        "Pompiere" => "Pompiere",
        "Pontano Sans" => "Pontano Sans",
        "Poppins" => "Poppins",
        "Port Lligat Sans" => "Port Lligat Sans",
        "Port Lligat Slab" => "Port Lligat Slab",
        "Pragati Narrow" => "Pragati Narrow",
        "Prata" => "Prata",
        "Preahvihear" => "Preahvihear",
        "Press Start 2P" => "Press Start 2P",
        "Princess Sofia" => "Princess Sofia",
        "Prociono" => "Prociono",
        "Prosto One" => "Prosto One",
        "Puritan" => "Puritan",
        "Purple Purse" => "Purple Purse",
        "Quando" => "Quando",
        "Quantico" => "Quantico",
        "Quattrocento" => "Quattrocento",
        "Quattrocento Sans" => "Quattrocento Sans",
        "Questrial" => "Questrial",
        "Quicksand" => "Quicksand",
        "Quintessential" => "Quintessential",
        "Qwigley" => "Qwigley",
        "Racing Sans One" => "Racing Sans One",
        "Radley" => "Radley",
        "Rajdhani" => "Rajdhani",
        "Raleway" => "Raleway",
        "Raleway Dots" => "Raleway Dots",
        "Ramabhadra" => "Ramabhadra",
        "Ramaraja" => "Ramaraja",
        "Rambla" => "Rambla",
        "Rammetto One" => "Rammetto One",
        "Ranchers" => "Ranchers",
        "Rancho" => "Rancho",
        "Ranga" => "Ranga",
        "Rationale" => "Rationale",
        "Ravi Prakash" => "Ravi Prakash",
        "Redressed" => "Redressed",
        "Reenie Beanie" => "Reenie Beanie",
        "Revalia" => "Revalia",
        "Rhodium Libre" => "Rhodium Libre",
        "Ribeye" => "Ribeye",
        "Ribeye Marrow" => "Ribeye Marrow",
        "Righteous" => "Righteous",
        "Risque" => "Risque",
        "Roboto" => "Roboto",
        "Roboto Condensed" => "Roboto Condensed",
        "Roboto Mono" => "Roboto Mono",
        "Roboto Slab" => "Roboto Slab",
        "Rochester" => "Rochester",
        "Rock Salt" => "Rock Salt",
        "Rokkitt" => "Rokkitt",
        "Romanesco" => "Romanesco",
        "Ropa Sans" => "Ropa Sans",
        "Rosario" => "Rosario",
        "Rosarivo" => "Rosarivo",
        "Rouge Script" => "Rouge Script",
        "Rozha One" => "Rozha One",
        "Rubik" => "Rubik",
        "Rubik Mono One" => "Rubik Mono One",
        "Rubik One" => "Rubik One",
        "Ruda" => "Ruda",
        "Rufina" => "Rufina",
        "Ruge Boogie" => "Ruge Boogie",
        "Ruluko" => "Ruluko",
        "Rum Raisin" => "Rum Raisin",
        "Ruslan Display" => "Ruslan Display",
        "Russo One" => "Russo One",
        "Ruthie" => "Ruthie",
        "Rye" => "Rye",
        "Sacramento" => "Sacramento",
        "Sahitya" => "Sahitya",
        "Sail" => "Sail",
        "Salsa" => "Salsa",
        "Sanchez" => "Sanchez",
        "Sancreek" => "Sancreek",
        "Sansita One" => "Sansita One",
        "Sarala" => "Sarala",
        "Sarina" => "Sarina",
        "Sarpanch" => "Sarpanch",
        "Satisfy" => "Satisfy",
        "Scada" => "Scada",
        "Scheherazade" => "Scheherazade",
        "Schoolbell" => "Schoolbell",
        "Seaweed Script" => "Seaweed Script",
        "Sevillana" => "Sevillana",
        "Seymour One" => "Seymour One",
        "Shadows Into Light" => "Shadows Into Light",
        "Shadows Into Light Two" => "Shadows Into Light Two",
        "Shanti" => "Shanti",
        "Share" => "Share",
        "Share Tech" => "Share Tech",
        "Share Tech Mono" => "Share Tech Mono",
        "Shojumaru" => "Shojumaru",
        "Short Stack" => "Short Stack",
        "Siemreap" => "Siemreap",
        "Sigmar One" => "Sigmar One",
        "Signika" => "Signika",
        "Signika Negative" => "Signika Negative",
        "Simonetta" => "Simonetta",
        "Sintony" => "Sintony",
        "Sirin Stencil" => "Sirin Stencil",
        "Six Caps" => "Six Caps",
        "Skranji" => "Skranji",
        "Slabo 13px" => "Slabo 13px",
        "Slabo 27px" => "Slabo 27px",
        "Slackey" => "Slackey",
        "Smokum" => "Smokum",
        "Smythe" => "Smythe",
        "Sniglet" => "Sniglet",
        "Snippet" => "Snippet",
        "Snowburst One" => "Snowburst One",
        "Sofadi One" => "Sofadi One",
        "Sofia" => "Sofia",
        "Sonsie One" => "Sonsie One",
        "Sorts Mill Goudy" => "Sorts Mill Goudy",
        "Source Code Pro" => "Source Code Pro",
        "Source Sans Pro" => "Source Sans Pro",
        "Source Serif Pro" => "Source Serif Pro",
        "Special Elite" => "Special Elite",
        "Spicy Rice" => "Spicy Rice",
        "Spinnaker" => "Spinnaker",
        "Spirax" => "Spirax",
        "Squada One" => "Squada One",
        "Sree Krushnadevaraya" => "Sree Krushnadevaraya",
        "Stalemate" => "Stalemate",
        "Stalinist One" => "Stalinist One",
        "Stardos Stencil" => "Stardos Stencil",
        "Stint Ultra Condensed" => "Stint Ultra Condensed",
        "Stint Ultra Expanded" => "Stint Ultra Expanded",
        "Stoke" => "Stoke",
        "Strait" => "Strait",
        "Sue Ellen Francisco" => "Sue Ellen Francisco",
        "Sumana" => "Sumana",
        "Sunshiney" => "Sunshiney",
        "Supermercado One" => "Supermercado One",
        "Sura" => "Sura",
        "Suranna" => "Suranna",
        "Suravaram" => "Suravaram",
        "Suwannaphum" => "Suwannaphum",
        "Swanky and Moo Moo" => "Swanky and Moo Moo",
        "Syncopate" => "Syncopate",
        "Tangerine" => "Tangerine",
        "Taprom" => "Taprom",
        "Tauri" => "Tauri",
        "Teko" => "Teko",
        "Telex" => "Telex",
        "Tenali Ramakrishna" => "Tenali Ramakrishna",
        "Tenor Sans" => "Tenor Sans",
        "Text Me One" => "Text Me One",
        "The Girl Next Door" => "The Girl Next Door",
        "Tienne" => "Tienne",
        "Tillana" => "Tillana",
        "Timmana" => "Timmana",
        "Tinos" => "Tinos",
        "Titan One" => "Titan One",
        "Titillium Web" => "Titillium Web",
        "Trade Winds" => "Trade Winds",
        "Trocchi" => "Trocchi",
        "Trochut" => "Trochut",
        "Trykker" => "Trykker",
        "Tulpen One" => "Tulpen One",
        "Ubuntu" => "Ubuntu",
        "Ubuntu Condensed" => "Ubuntu Condensed",
        "Ubuntu Mono" => "Ubuntu Mono",
        "Ultra" => "Ultra",
        "Uncial Antiqua" => "Uncial Antiqua",
        "Underdog" => "Underdog",
        "Unica One" => "Unica One",
        "UnifrakturCook" => "UnifrakturCook",
        "UnifrakturMaguntia" => "UnifrakturMaguntia",
        "Unkempt" => "Unkempt",
        "Unlock" => "Unlock",
        "Unna" => "Unna",
        "VT323" => "VT323",
        "Vampiro One" => "Vampiro One",
        "Varela" => "Varela",
        "Varela Round" => "Varela Round",
        "Vast Shadow" => "Vast Shadow",
        "Vesper Libre" => "Vesper Libre",
        "Vibur" => "Vibur",
        "Vidaloka" => "Vidaloka",
        "Viga" => "Viga",
        "Voces" => "Voces",
        "Volkhov" => "Volkhov",
        "Vollkorn" => "Vollkorn",
        "Voltaire" => "Voltaire",
        "Waiting for the Sunrise" => "Waiting for the Sunrise",
        "Wallpoet" => "Wallpoet",
        "Walter Turncoat" => "Walter Turncoat",
        "Warnes" => "Warnes",
        "Wellfleet" => "Wellfleet",
        "Wendy One" => "Wendy One",
        "Wire One" => "Wire One",
        "Work Sans" => "Work Sans",
        "Yanone Kaffeesatz" => "Yanone Kaffeesatz",
        "Yantramanav" => "Yantramanav",
        "Yellowtail" => "Yellowtail",
        "Yeseva One" => "Yeseva One",
        "Yesteryear" => "Yesteryear",
        "Zeyada" => "Zeyada"
    );

    $font_atts_int = array(
        "ABeeZee" => array("0" => "regular", "1" => "italic",),
        "Abel" => array("0" => "regular",),
        "Abril Fatface" => array("0" => "regular",),
        "Aclonica" => array("0" => "regular",),
        "Acme" => array("0" => "regular",),
        "Actor" => array("0" => "regular",),
        "Adamina" => array("0" => "regular",),
        "Advent Pro" => array("0" => "100", "1" => "200", "2" => "300", "3" => "regular", "4" => "500", "5" => "600", "6" => "700",),
        "Aguafina Script" => array("0" => "regular",),
        "Akronim" => array("0" => "regular",),
        "Aladin" => array("0" => "regular",),
        "Aldrich" => array("0" => "regular",),
        "Alef" => array("0" => "regular", "1" => "700",),
        "Alegreya" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic", "4" => "900", "5" => "900italic",),
        "Alegreya SC" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic", "4" => "900", "5" => "900italic",),
        "Alegreya Sans" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "500", "7" => "500italic", "8" => "700", "9" => "700italic", "10" => "800", "11" => "800italic", "12" => "900", "13" => "900italic",),
        "Alegreya Sans SC" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "500", "7" => "500italic", "8" => "700", "9" => "700italic", "10" => "800", "11" => "800italic", "12" => "900", "13" => "900italic",),
        "Alex Brush" => array("0" => "regular",),
        "Alfa Slab One" => array("0" => "regular",),
        "Alice" => array("0" => "regular",),
        "Alike" => array("0" => "regular",),
        "Alike Angular" => array("0" => "regular",),
        "Allan" => array("0" => "regular", "1" => "700",),
        "Allerta" => array("0" => "regular",),
        "Allerta Stencil" => array("0" => "regular",),
        "Allura" => array("0" => "regular",),
        "Almendra" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Almendra Display" => array("0" => "regular",),
        "Almendra SC" => array("0" => "regular",),
        "Amarante" => array("0" => "regular",),
        "Amaranth" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Amatic SC" => array("0" => "regular", "1" => "700",),
        "Amethysta" => array("0" => "regular",),
        "Amiri" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Amita" => array("0" => "regular", "1" => "700",),
        "Anaheim" => array("0" => "regular",),
        "Andada" => array("0" => "regular",),
        "Andika" => array("0" => "regular",),
        "Angkor" => array("0" => "regular",),
        "Annie Use Your Telescope" => array("0" => "regular",),
        "Anonymous Pro" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Antic" => array("0" => "regular",),
        "Antic Didone" => array("0" => "regular",),
        "Antic Slab" => array("0" => "regular",),
        "Anton" => array("0" => "regular",),
        "Arapey" => array("0" => "regular", "1" => "italic",),
        "Arbutus" => array("0" => "regular",),
        "Arbutus Slab" => array("0" => "regular",),
        "Architects Daughter" => array("0" => "regular",),
        "Archivo Black" => array("0" => "regular",),
        "Archivo Narrow" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Arimo" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Arizonia" => array("0" => "regular",),
        "Armata" => array("0" => "regular",),
        "Artifika" => array("0" => "regular",),
        "Arvo" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Arya" => array("0" => "regular", "1" => "700",),
        "Asap" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Asar" => array("0" => "regular",),
        "Asset" => array("0" => "regular",),
        "Astloch" => array("0" => "regular", "1" => "700",),
        "Asul" => array("0" => "regular", "1" => "700",),
        "Atomic Age" => array("0" => "regular",),
        "Aubrey" => array("0" => "regular",),
        "Audiowide" => array("0" => "regular",),
        "Autour One" => array("0" => "regular",),
        "Average" => array("0" => "regular",),
        "Average Sans" => array("0" => "regular",),
        "Averia Gruesa Libre" => array("0" => "regular",),
        "Averia Libre" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic",),
        "Averia Sans Libre" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic",),
        "Averia Serif Libre" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic",),
        "Bad Script" => array("0" => "regular",),
        "Balthazar" => array("0" => "regular",),
        "Bangers" => array("0" => "regular",),
        "Basic" => array("0" => "regular",),
        "Battambang" => array("0" => "regular", "1" => "700",),
        "Baumans" => array("0" => "regular",),
        "Bayon" => array("0" => "regular",),
        "Belgrano" => array("0" => "regular",),
        "Belleza" => array("0" => "regular",),
        "BenchNine" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Bentham" => array("0" => "regular",),
        "Berkshire Swash" => array("0" => "regular",),
        "Bevan" => array("0" => "regular",),
        "Bigelow Rules" => array("0" => "regular",),
        "Bigshot One" => array("0" => "regular",),
        "Bilbo" => array("0" => "regular",),
        "Bilbo Swash Caps" => array("0" => "regular",),
        "Biryani" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "600", "4" => "700", "5" => "800", "6" => "900",),
        "Bitter" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Black Ops One" => array("0" => "regular",),
        "Bokor" => array("0" => "regular",),
        "Bonbon" => array("0" => "regular",),
        "Boogaloo" => array("0" => "regular",),
        "Bowlby One" => array("0" => "regular",),
        "Bowlby One SC" => array("0" => "regular",),
        "Brawler" => array("0" => "regular",),
        "Bree Serif" => array("0" => "regular",),
        "Bubblegum Sans" => array("0" => "regular",),
        "Bubbler One" => array("0" => "regular",),
        "Buda" => array("0" => "300",),
        "Buenard" => array("0" => "regular", "1" => "700",),
        "Butcherman" => array("0" => "regular",),
        "Butterfly Kids" => array("0" => "regular",),
        "Cabin" => array("0" => "regular", "1" => "italic", "2" => "500", "3" => "500italic", "4" => "600", "5" => "600italic", "6" => "700", "7" => "700italic",),
        "Cabin Condensed" => array("0" => "regular", "1" => "500", "2" => "600", "3" => "700",),
        "Cabin Sketch" => array("0" => "regular", "1" => "700",),
        "Caesar Dressing" => array("0" => "regular",),
        "Cagliostro" => array("0" => "regular",),
        "Calligraffitti" => array("0" => "regular",),
        "Cambay" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Cambo" => array("0" => "regular",),
        "Candal" => array("0" => "regular",),
        "Cantarell" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Cantata One" => array("0" => "regular",),
        "Cantora One" => array("0" => "regular",),
        "Capriola" => array("0" => "regular",),
        "Cardo" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Carme" => array("0" => "regular",),
        "Carrois Gothic" => array("0" => "regular",),
        "Carrois Gothic SC" => array("0" => "regular",),
        "Carter One" => array("0" => "regular",),
        "Catamaran" => array("0" => "100", "1" => "200", "2" => "300", "3" => "regular", "4" => "500", "5" => "600", "6" => "700", "7" => "800", "8" => "900",),
        "Caudex" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Cedarville Cursive" => array("0" => "regular",),
        "Ceviche One" => array("0" => "regular",),
        "Changa One" => array("0" => "regular", "1" => "italic",),
        "Chango" => array("0" => "regular",),
        "Chau Philomene One" => array("0" => "regular", "1" => "italic",),
        "Chela One" => array("0" => "regular",),
        "Chelsea Market" => array("0" => "regular",),
        "Chenla" => array("0" => "regular",),
        "Cherry Cream Soda" => array("0" => "regular",),
        "Cherry Swash" => array("0" => "regular", "1" => "700",),
        "Chewy" => array("0" => "regular",),
        "Chicle" => array("0" => "regular",),
        "Chivo" => array("0" => "regular", "1" => "italic", "2" => "900", "3" => "900italic",),
        "Chonburi" => array("0" => "regular",),
        "Cinzel" => array("0" => "regular", "1" => "700", "2" => "900",),
        "Cinzel Decorative" => array("0" => "regular", "1" => "700", "2" => "900",),
        "Clicker Script" => array("0" => "regular",),
        "Coda" => array("0" => "regular", "1" => "800",),
        "Coda Caption" => array("0" => "800",),
        "Codystar" => array("0" => "300", "1" => "regular",),
        "Combo" => array("0" => "regular",),
        "Comfortaa" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Coming Soon" => array("0" => "regular",),
        "Concert One" => array("0" => "regular",),
        "Condiment" => array("0" => "regular",),
        "Content" => array("0" => "regular", "1" => "700",),
        "Contrail One" => array("0" => "regular",),
        "Convergence" => array("0" => "regular",),
        "Cookie" => array("0" => "regular",),
        "Copse" => array("0" => "regular",),
        "Corben" => array("0" => "regular", "1" => "700",),
        "Courgette" => array("0" => "regular",),
        "Cousine" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Coustard" => array("0" => "regular", "1" => "900",),
        "Covered By Your Grace" => array("0" => "regular",),
        "Crafty Girls" => array("0" => "regular",),
        "Creepster" => array("0" => "regular",),
        "Crete Round" => array("0" => "regular", "1" => "italic",),
        "Crimson Text" => array("0" => "regular", "1" => "italic", "2" => "600", "3" => "600italic", "4" => "700", "5" => "700italic",),
        "Croissant One" => array("0" => "regular",),
        "Crushed" => array("0" => "regular",),
        "Cuprum" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Cutive" => array("0" => "regular",),
        "Cutive Mono" => array("0" => "regular",),
        "Damion" => array("0" => "regular",),
        "Dancing Script" => array("0" => "regular", "1" => "700",),
        "Dangrek" => array("0" => "regular",),
        "Dawning of a New Day" => array("0" => "regular",),
        "Days One" => array("0" => "regular",),
        "Dekko" => array("0" => "regular",),
        "Delius" => array("0" => "regular",),
        "Delius Swash Caps" => array("0" => "regular",),
        "Delius Unicase" => array("0" => "regular", "1" => "700",),
        "Della Respira" => array("0" => "regular",),
        "Denk One" => array("0" => "regular",),
        "Devonshire" => array("0" => "regular",),
        "Dhurjati" => array("0" => "regular",),
        "Didact Gothic" => array("0" => "regular",),
        "Diplomata" => array("0" => "regular",),
        "Diplomata SC" => array("0" => "regular",),
        "Domine" => array("0" => "regular", "1" => "700",),
        "Donegal One" => array("0" => "regular",),
        "Doppio One" => array("0" => "regular",),
        "Dorsa" => array("0" => "regular",),
        "Dosis" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "500", "4" => "600", "5" => "700", "6" => "800",),
        "Dr Sugiyama" => array("0" => "regular",),
        "Droid Sans" => array("0" => "regular", "1" => "700",),
        "Droid Sans Mono" => array("0" => "regular",),
        "Droid Serif" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Duru Sans" => array("0" => "regular",),
        "Dynalight" => array("0" => "regular",),
        "EB Garamond" => array("0" => "regular",),
        "Eagle Lake" => array("0" => "regular",),
        "Eater" => array("0" => "regular",),
        "Economica" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Eczar" => array("0" => "regular", "1" => "500", "2" => "600", "3" => "700", "4" => "800",),
        "Ek Mukta" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "500", "4" => "600", "5" => "700", "6" => "800",),
        "Electrolize" => array("0" => "regular",),
        "Elsie" => array("0" => "regular", "1" => "900",),
        "Elsie Swash Caps" => array("0" => "regular", "1" => "900",),
        "Emblema One" => array("0" => "regular",),
        "Emilys Candy" => array("0" => "regular",),
        "Engagement" => array("0" => "regular",),
        "Englebert" => array("0" => "regular",),
        "Enriqueta" => array("0" => "regular", "1" => "700",),
        "Erica One" => array("0" => "regular",),
        "Esteban" => array("0" => "regular",),
        "Euphoria Script" => array("0" => "regular",),
        "Ewert" => array("0" => "regular",),
        "Exo" => array("0" => "100", "1" => "100italic", "2" => "200", "3" => "200italic", "4" => "300", "5" => "300italic", "6" => "regular", "7" => "italic", "8" => "500", "9" => "500italic", "10" => "600", "11" => "600italic", "12" => "700", "13" => "700italic", "14" => "800", "15" => "800italic", "16" => "900", "17" => "900italic",),
        "Exo 2" => array("0" => "100", "1" => "100italic", "2" => "200", "3" => "200italic", "4" => "300", "5" => "300italic", "6" => "regular", "7" => "italic", "8" => "500", "9" => "500italic", "10" => "600", "11" => "600italic", "12" => "700", "13" => "700italic", "14" => "800", "15" => "800italic", "16" => "900", "17" => "900italic",),
        "Expletus Sans" => array("0" => "regular", "1" => "italic", "2" => "500", "3" => "500italic", "4" => "600", "5" => "600italic", "6" => "700", "7" => "700italic",),
        "Fanwood Text" => array("0" => "regular", "1" => "italic",),
        "Fascinate" => array("0" => "regular",),
        "Fascinate Inline" => array("0" => "regular",),
        "Faster One" => array("0" => "regular",),
        "Fasthand" => array("0" => "regular",),
        "Fauna One" => array("0" => "regular",),
        "Federant" => array("0" => "regular",),
        "Federo" => array("0" => "regular",),
        "Felipa" => array("0" => "regular",),
        "Fenix" => array("0" => "regular",),
        "Finger Paint" => array("0" => "regular",),
        "Fira Mono" => array("0" => "regular", "1" => "700",),
        "Fira Sans" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "500", "5" => "500italic", "6" => "700", "7" => "700italic",),
        "Fjalla One" => array("0" => "regular",),
        "Fjord One" => array("0" => "regular",),
        "Flamenco" => array("0" => "300", "1" => "regular",),
        "Flavors" => array("0" => "regular",),
        "Fondamento" => array("0" => "regular", "1" => "italic",),
        "Fontdiner Swanky" => array("0" => "regular",),
        "Forum" => array("0" => "regular",),
        "Francois One" => array("0" => "regular",),
        "Freckle Face" => array("0" => "regular",),
        "Fredericka the Great" => array("0" => "regular",),
        "Fredoka One" => array("0" => "regular",),
        "Freehand" => array("0" => "regular",),
        "Fresca" => array("0" => "regular",),
        "Frijole" => array("0" => "regular",),
        "Fruktur" => array("0" => "regular",),
        "Fugaz One" => array("0" => "regular",),
        "GFS Didot" => array("0" => "regular",),
        "GFS Neohellenic" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Gabriela" => array("0" => "regular",),
        "Gafata" => array("0" => "regular",),
        "Galdeano" => array("0" => "regular",),
        "Galindo" => array("0" => "regular",),
        "Gentium Basic" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Gentium Book Basic" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Geo" => array("0" => "regular", "1" => "italic",),
        "Geostar" => array("0" => "regular",),
        "Geostar Fill" => array("0" => "regular",),
        "Germania One" => array("0" => "regular",),
        "Gidugu" => array("0" => "regular",),
        "Gilda Display" => array("0" => "regular",),
        "Give You Glory" => array("0" => "regular",),
        "Glass Antiqua" => array("0" => "regular",),
        "Glegoo" => array("0" => "regular", "1" => "700",),
        "Gloria Hallelujah" => array("0" => "regular",),
        "Goblin One" => array("0" => "regular",),
        "Gochi Hand" => array("0" => "regular",),
        "Gorditas" => array("0" => "regular", "1" => "700",),
        "Goudy Bookletter 1911" => array("0" => "regular",),
        "Graduate" => array("0" => "regular",),
        "Grand Hotel" => array("0" => "regular",),
        "Gravitas One" => array("0" => "regular",),
        "Great Vibes" => array("0" => "regular",),
        "Griffy" => array("0" => "regular",),
        "Gruppo" => array("0" => "regular",),
        "Gudea" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Gurajada" => array("0" => "regular",),
        "Habibi" => array("0" => "regular",),
        "Halant" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Hammersmith One" => array("0" => "regular",),
        "Hanalei" => array("0" => "regular",),
        "Hanalei Fill" => array("0" => "regular",),
        "Handlee" => array("0" => "regular",),
        "Hanuman" => array("0" => "regular", "1" => "700",),
        "Happy Monkey" => array("0" => "regular",),
        "Headland One" => array("0" => "regular",),
        "Henny Penny" => array("0" => "regular",),
        "Herr Von Muellerhoff" => array("0" => "regular",),
        "Hind" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Holtwood One SC" => array("0" => "regular",),
        "Homemade Apple" => array("0" => "regular",),
        "Homenaje" => array("0" => "regular",),
        "IM Fell DW Pica" => array("0" => "regular", "1" => "italic",),
        "IM Fell DW Pica SC" => array("0" => "regular",),
        "IM Fell Double Pica" => array("0" => "regular", "1" => "italic",),
        "IM Fell Double Pica SC" => array("0" => "regular",),
        "IM Fell English" => array("0" => "regular", "1" => "italic",),
        "IM Fell English SC" => array("0" => "regular",),
        "IM Fell French Canon" => array("0" => "regular", "1" => "italic",),
        "IM Fell French Canon SC" => array("0" => "regular",),
        "IM Fell Great Primer" => array("0" => "regular", "1" => "italic",),
        "IM Fell Great Primer SC" => array("0" => "regular",),
        "Iceberg" => array("0" => "regular",),
        "Iceland" => array("0" => "regular",),
        "Imprima" => array("0" => "regular",),
        "Inconsolata" => array("0" => "regular", "1" => "700",),
        "Inder" => array("0" => "regular",),
        "Indie Flower" => array("0" => "regular",),
        "Inika" => array("0" => "regular", "1" => "700",),
        "Inknut Antiqua" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700", "5" => "800", "6" => "900",),
        "Irish Grover" => array("0" => "regular",),
        "Istok Web" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Italiana" => array("0" => "regular",),
        "Italianno" => array("0" => "regular",),
        "Itim" => array("0" => "regular",),
        "Jacques Francois" => array("0" => "regular",),
        "Jacques Francois Shadow" => array("0" => "regular",),
        "Jaldi" => array("0" => "regular", "1" => "700",),
        "Jim Nightshade" => array("0" => "regular",),
        "Jockey One" => array("0" => "regular",),
        "Jolly Lodger" => array("0" => "regular",),
        "Josefin Sans" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "600", "7" => "600italic", "8" => "700", "9" => "700italic",),
        "Josefin Slab" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "600", "7" => "600italic", "8" => "700", "9" => "700italic",),
        "Joti One" => array("0" => "regular",),
        "Judson" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Julee" => array("0" => "regular",),
        "Julius Sans One" => array("0" => "regular",),
        "Junge" => array("0" => "regular",),
        "Jura" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600",),
        "Just Another Hand" => array("0" => "regular",),
        "Just Me Again Down Here" => array("0" => "regular",),
        "Kadwa" => array("0" => "regular", "1" => "700",),
        "Kalam" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Kameron" => array("0" => "regular", "1" => "700",),
        "Kantumruy" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Karla" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Karma" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Kaushan Script" => array("0" => "regular",),
        "Kavoon" => array("0" => "regular",),
        "Kdam Thmor" => array("0" => "regular",),
        "Keania One" => array("0" => "regular",),
        "Kelly Slab" => array("0" => "regular",),
        "Kenia" => array("0" => "regular",),
        "Khand" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Khmer" => array("0" => "regular",),
        "Khula" => array("0" => "300", "1" => "regular", "2" => "600", "3" => "700", "4" => "800",),
        "Kite One" => array("0" => "regular",),
        "Knewave" => array("0" => "regular",),
        "Kotta One" => array("0" => "regular",),
        "Koulen" => array("0" => "regular",),
        "Kranky" => array("0" => "regular",),
        "Kreon" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Kristi" => array("0" => "regular",),
        "Krona One" => array("0" => "regular",),
        "Kurale" => array("0" => "regular",),
        "La Belle Aurore" => array("0" => "regular",),
        "Laila" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Lakki Reddy" => array("0" => "regular",),
        "Lancelot" => array("0" => "regular",),
        "Lateef" => array("0" => "regular",),
        "Lato" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "700", "7" => "700italic", "8" => "900", "9" => "900italic",),
        "League Script" => array("0" => "regular",),
        "Leckerli One" => array("0" => "regular",),
        "Ledger" => array("0" => "regular",),
        "Lekton" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Lemon" => array("0" => "regular",),
        "Libre Baskerville" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Life Savers" => array("0" => "regular", "1" => "700",),
        "Lilita One" => array("0" => "regular",),
        "Lily Script One" => array("0" => "regular",),
        "Limelight" => array("0" => "regular",),
        "Linden Hill" => array("0" => "regular", "1" => "italic",),
        "Lobster" => array("0" => "regular",),
        "Lobster Two" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Londrina Outline" => array("0" => "regular",),
        "Londrina Shadow" => array("0" => "regular",),
        "Londrina Sketch" => array("0" => "regular",),
        "Londrina Solid" => array("0" => "regular",),
        "Lora" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Love Ya Like A Sister" => array("0" => "regular",),
        "Loved by the King" => array("0" => "regular",),
        "Lovers Quarrel" => array("0" => "regular",),
        "Luckiest Guy" => array("0" => "regular",),
        "Lusitana" => array("0" => "regular", "1" => "700",),
        "Lustria" => array("0" => "regular",),
        "Macondo" => array("0" => "regular",),
        "Macondo Swash Caps" => array("0" => "regular",),
        "Magra" => array("0" => "regular", "1" => "700",),
        "Maiden Orange" => array("0" => "regular",),
        "Mako" => array("0" => "regular",),
        "Mallanna" => array("0" => "regular",),
        "Mandali" => array("0" => "regular",),
        "Marcellus" => array("0" => "regular",),
        "Marcellus SC" => array("0" => "regular",),
        "Marck Script" => array("0" => "regular",),
        "Margarine" => array("0" => "regular",),
        "Marko One" => array("0" => "regular",),
        "Marmelad" => array("0" => "regular",),
        "Martel" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "600", "4" => "700", "5" => "800", "6" => "900",),
        "Martel Sans" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "600", "4" => "700", "5" => "800", "6" => "900",),
        "Marvel" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Mate" => array("0" => "regular", "1" => "italic",),
        "Mate SC" => array("0" => "regular",),
        "Maven Pro" => array("0" => "regular", "1" => "500", "2" => "700", "3" => "900",),
        "McLaren" => array("0" => "regular",),
        "Meddon" => array("0" => "regular",),
        "MedievalSharp" => array("0" => "regular",),
        "Medula One" => array("0" => "regular",),
        "Megrim" => array("0" => "regular",),
        "Meie Script" => array("0" => "regular",),
        "Merienda" => array("0" => "regular", "1" => "700",),
        "Merienda One" => array("0" => "regular",),
        "Merriweather" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic", "6" => "900", "7" => "900italic",),
        "Merriweather Sans" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic", "6" => "800", "7" => "800italic",),
        "Metal" => array("0" => "regular",),
        "Metal Mania" => array("0" => "regular",),
        "Metamorphous" => array("0" => "regular",),
        "Metrophobic" => array("0" => "regular",),
        "Michroma" => array("0" => "regular",),
        "Milonga" => array("0" => "regular",),
        "Miltonian" => array("0" => "regular",),
        "Miltonian Tattoo" => array("0" => "regular",),
        "Miniver" => array("0" => "regular",),
        "Miss Fajardose" => array("0" => "regular",),
        "Modak" => array("0" => "regular",),
        "Modern Antiqua" => array("0" => "regular",),
        "Molengo" => array("0" => "regular",),
        "Molle" => array("0" => "italic",),
        "Monda" => array("0" => "regular", "1" => "700",),
        "Monofett" => array("0" => "regular",),
        "Monoton" => array("0" => "regular",),
        "Monsieur La Doulaise" => array("0" => "regular",),
        "Montaga" => array("0" => "regular",),
        "Montez" => array("0" => "regular",),
        "Montserrat" => array("0" => "regular", "1" => "700",),
        "Montserrat Alternates" => array("0" => "regular", "1" => "700",),
        "Montserrat Subrayada" => array("0" => "regular", "1" => "700",),
        "Moul" => array("0" => "regular",),
        "Moulpali" => array("0" => "regular",),
        "Mountains of Christmas" => array("0" => "regular", "1" => "700",),
        "Mouse Memoirs" => array("0" => "regular",),
        "Mr Bedfort" => array("0" => "regular",),
        "Mr Dafoe" => array("0" => "regular",),
        "Mr De Haviland" => array("0" => "regular",),
        "Mrs Saint Delafield" => array("0" => "regular",),
        "Mrs Sheppards" => array("0" => "regular",),
        "Muli" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic",),
        "Mystery Quest" => array("0" => "regular",),
        "NTR" => array("0" => "regular",),
        "Neucha" => array("0" => "regular",),
        "Neuton" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "italic", "4" => "700", "5" => "800",),
        "New Rocker" => array("0" => "regular",),
        "News Cycle" => array("0" => "regular", "1" => "700",),
        "Niconne" => array("0" => "regular",),
        "Nixie One" => array("0" => "regular",),
        "Nobile" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Nokora" => array("0" => "regular", "1" => "700",),
        "Norican" => array("0" => "regular",),
        "Nosifer" => array("0" => "regular",),
        "Nothing You Could Do" => array("0" => "regular",),
        "Noticia Text" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Noto Sans" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Noto Serif" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Nova Cut" => array("0" => "regular",),
        "Nova Flat" => array("0" => "regular",),
        "Nova Mono" => array("0" => "regular",),
        "Nova Oval" => array("0" => "regular",),
        "Nova Round" => array("0" => "regular",),
        "Nova Script" => array("0" => "regular",),
        "Nova Slim" => array("0" => "regular",),
        "Nova Square" => array("0" => "regular",),
        "Numans" => array("0" => "regular",),
        "Nunito" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Odor Mean Chey" => array("0" => "regular",),
        "Offside" => array("0" => "regular",),
        "Old Standard TT" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Oldenburg" => array("0" => "regular",),
        "Oleo Script" => array("0" => "regular", "1" => "700",),
        "Oleo Script Swash Caps" => array("0" => "regular", "1" => "700",),
        "Open Sans" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "600", "5" => "600italic", "6" => "700", "7" => "700italic", "8" => "800", "9" => "800italic",),
        "Open Sans Condensed" => array("0" => "300", "1" => "300italic", "2" => "700",),
        "Oranienbaum" => array("0" => "regular",),
        "Orbitron" => array("0" => "regular", "1" => "500", "2" => "700", "3" => "900",),
        "Oregano" => array("0" => "regular", "1" => "italic",),
        "Orienta" => array("0" => "regular",),
        "Original Surfer" => array("0" => "regular",),
        "Oswald" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Over the Rainbow" => array("0" => "regular",),
        "Overlock" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic", "4" => "900", "5" => "900italic",),
        "Overlock SC" => array("0" => "regular",),
        "Ovo" => array("0" => "regular",),
        "Oxygen" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Oxygen Mono" => array("0" => "regular",),
        "PT Mono" => array("0" => "regular",),
        "PT Sans" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "PT Sans Caption" => array("0" => "regular", "1" => "700",),
        "PT Sans Narrow" => array("0" => "regular", "1" => "700",),
        "PT Serif" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "PT Serif Caption" => array("0" => "regular", "1" => "italic",),
        "Pacifico" => array("0" => "regular",),
        "Palanquin" => array("0" => "100", "1" => "200", "2" => "300", "3" => "regular", "4" => "500", "5" => "600", "6" => "700",),
        "Palanquin Dark" => array("0" => "regular", "1" => "500", "2" => "600", "3" => "700",),
        "Paprika" => array("0" => "regular",),
        "Parisienne" => array("0" => "regular",),
        "Passero One" => array("0" => "regular",),
        "Passion One" => array("0" => "regular", "1" => "700", "2" => "900",),
        "Pathway Gothic One" => array("0" => "regular",),
        "Patrick Hand" => array("0" => "regular",),
        "Patrick Hand SC" => array("0" => "regular",),
        "Patua One" => array("0" => "regular",),
        "Paytone One" => array("0" => "regular",),
        "Peddana" => array("0" => "regular",),
        "Peralta" => array("0" => "regular",),
        "Permanent Marker" => array("0" => "regular",),
        "Petit Formal Script" => array("0" => "regular",),
        "Petrona" => array("0" => "regular",),
        "Philosopher" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Piedra" => array("0" => "regular",),
        "Pinyon Script" => array("0" => "regular",),
        "Pirata One" => array("0" => "regular",),
        "Plaster" => array("0" => "regular",),
        "Play" => array("0" => "regular", "1" => "700",),
        "Playball" => array("0" => "regular",),
        "Playfair Display" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic", "4" => "900", "5" => "900italic",),
        "Playfair Display SC" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic", "4" => "900", "5" => "900italic",),
        "Podkova" => array("0" => "regular", "1" => "700",),
        "Poiret One" => array("0" => "regular",),
        "Poller One" => array("0" => "regular",),
        "Poly" => array("0" => "regular", "1" => "italic",),
        "Pompiere" => array("0" => "regular",),
        "Pontano Sans" => array("0" => "regular",),
        "Poppins" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Port Lligat Sans" => array("0" => "regular",),
        "Port Lligat Slab" => array("0" => "regular",),
        "Pragati Narrow" => array("0" => "regular", "1" => "700",),
        "Prata" => array("0" => "regular",),
        "Preahvihear" => array("0" => "regular",),
        "Press Start 2P" => array("0" => "regular",),
        "Princess Sofia" => array("0" => "regular",),
        "Prociono" => array("0" => "regular",),
        "Prosto One" => array("0" => "regular",),
        "Puritan" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Purple Purse" => array("0" => "regular",),
        "Quando" => array("0" => "regular",),
        "Quantico" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Quattrocento" => array("0" => "regular", "1" => "700",),
        "Quattrocento Sans" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Questrial" => array("0" => "regular",),
        "Quicksand" => array("0" => "300", "1" => "regular", "2" => "700",),
        "Quintessential" => array("0" => "regular",),
        "Qwigley" => array("0" => "regular",),
        "Racing Sans One" => array("0" => "regular",),
        "Radley" => array("0" => "regular", "1" => "italic",),
        "Rajdhani" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Raleway" => array("0" => "100", "1" => "200", "2" => "300", "3" => "regular", "4" => "500", "5" => "600", "6" => "700", "7" => "800", "8" => "900",),
        "Raleway Dots" => array("0" => "regular",),
        "Ramabhadra" => array("0" => "regular",),
        "Ramaraja" => array("0" => "regular",),
        "Rambla" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Rammetto One" => array("0" => "regular",),
        "Ranchers" => array("0" => "regular",),
        "Rancho" => array("0" => "regular",),
        "Ranga" => array("0" => "regular", "1" => "700",),
        "Rationale" => array("0" => "regular",),
        "Ravi Prakash" => array("0" => "regular",),
        "Redressed" => array("0" => "regular",),
        "Reenie Beanie" => array("0" => "regular",),
        "Revalia" => array("0" => "regular",),
        "Rhodium Libre" => array("0" => "regular",),
        "Ribeye" => array("0" => "regular",),
        "Ribeye Marrow" => array("0" => "regular",),
        "Righteous" => array("0" => "regular",),
        "Risque" => array("0" => "regular",),
        "Roboto" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "500", "7" => "500italic", "8" => "700", "9" => "700italic", "10" => "900", "11" => "900italic",),
        "Roboto Condensed" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "700", "5" => "700italic",),
        "Roboto Mono" => array("0" => "100", "1" => "100italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "500", "7" => "500italic", "8" => "700", "9" => "700italic",),
        "Roboto Slab" => array("0" => "100", "1" => "300", "2" => "regular", "3" => "700",),
        "Rochester" => array("0" => "regular",),
        "Rock Salt" => array("0" => "regular",),
        "Rokkitt" => array("0" => "regular", "1" => "700",),
        "Romanesco" => array("0" => "regular",),
        "Ropa Sans" => array("0" => "regular", "1" => "italic",),
        "Rosario" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Rosarivo" => array("0" => "regular", "1" => "italic",),
        "Rouge Script" => array("0" => "regular",),
        "Rozha One" => array("0" => "regular",),
        "Rubik" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "500", "5" => "500italic", "6" => "700", "7" => "700italic", "8" => "900", "9" => "900italic",),
        "Rubik Mono One" => array("0" => "regular",),
        "Rubik One" => array("0" => "regular",),
        "Ruda" => array("0" => "regular", "1" => "700", "2" => "900",),
        "Rufina" => array("0" => "regular", "1" => "700",),
        "Ruge Boogie" => array("0" => "regular",),
        "Ruluko" => array("0" => "regular",),
        "Rum Raisin" => array("0" => "regular",),
        "Ruslan Display" => array("0" => "regular",),
        "Russo One" => array("0" => "regular",),
        "Ruthie" => array("0" => "regular",),
        "Rye" => array("0" => "regular",),
        "Sacramento" => array("0" => "regular",),
        "Sahitya" => array("0" => "regular", "1" => "700",),
        "Sail" => array("0" => "regular",),
        "Salsa" => array("0" => "regular",),
        "Sanchez" => array("0" => "regular", "1" => "italic",),
        "Sancreek" => array("0" => "regular",),
        "Sansita One" => array("0" => "regular",),
        "Sarala" => array("0" => "regular", "1" => "700",),
        "Sarina" => array("0" => "regular",),
        "Sarpanch" => array("0" => "regular", "1" => "500", "2" => "600", "3" => "700", "4" => "800", "5" => "900",),
        "Satisfy" => array("0" => "regular",),
        "Scada" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Scheherazade" => array("0" => "regular", "1" => "700",),
        "Schoolbell" => array("0" => "regular",),
        "Seaweed Script" => array("0" => "regular",),
        "Sevillana" => array("0" => "regular",),
        "Seymour One" => array("0" => "regular",),
        "Shadows Into Light" => array("0" => "regular",),
        "Shadows Into Light Two" => array("0" => "regular",),
        "Shanti" => array("0" => "regular",),
        "Share" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Share Tech" => array("0" => "regular",),
        "Share Tech Mono" => array("0" => "regular",),
        "Shojumaru" => array("0" => "regular",),
        "Short Stack" => array("0" => "regular",),
        "Siemreap" => array("0" => "regular",),
        "Sigmar One" => array("0" => "regular",),
        "Signika" => array("0" => "300", "1" => "regular", "2" => "600", "3" => "700",),
        "Signika Negative" => array("0" => "300", "1" => "regular", "2" => "600", "3" => "700",),
        "Simonetta" => array("0" => "regular", "1" => "italic", "2" => "900", "3" => "900italic",),
        "Sintony" => array("0" => "regular", "1" => "700",),
        "Sirin Stencil" => array("0" => "regular",),
        "Six Caps" => array("0" => "regular",),
        "Skranji" => array("0" => "regular", "1" => "700",),
        "Slabo 13px" => array("0" => "regular",),
        "Slabo 27px" => array("0" => "regular",),
        "Slackey" => array("0" => "regular",),
        "Smokum" => array("0" => "regular",),
        "Smythe" => array("0" => "regular",),
        "Sniglet" => array("0" => "regular", "1" => "800",),
        "Snippet" => array("0" => "regular",),
        "Snowburst One" => array("0" => "regular",),
        "Sofadi One" => array("0" => "regular",),
        "Sofia" => array("0" => "regular",),
        "Sonsie One" => array("0" => "regular",),
        "Sorts Mill Goudy" => array("0" => "regular", "1" => "italic",),
        "Source Code Pro" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "500", "4" => "600", "5" => "700", "6" => "900",),
        "Source Sans Pro" => array("0" => "200", "1" => "200italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "600", "7" => "600italic", "8" => "700", "9" => "700italic", "10" => "900", "11" => "900italic",),
        "Source Serif Pro" => array("0" => "regular", "1" => "600", "2" => "700",),
        "Special Elite" => array("0" => "regular",),
        "Spicy Rice" => array("0" => "regular",),
        "Spinnaker" => array("0" => "regular",),
        "Spirax" => array("0" => "regular",),
        "Squada One" => array("0" => "regular",),
        "Sree Krushnadevaraya" => array("0" => "regular",),
        "Stalemate" => array("0" => "regular",),
        "Stalinist One" => array("0" => "regular",),
        "Stardos Stencil" => array("0" => "regular", "1" => "700",),
        "Stint Ultra Condensed" => array("0" => "regular",),
        "Stint Ultra Expanded" => array("0" => "regular",),
        "Stoke" => array("0" => "300", "1" => "regular",),
        "Strait" => array("0" => "regular",),
        "Sue Ellen Francisco" => array("0" => "regular",),
        "Sumana" => array("0" => "regular", "1" => "700",),
        "Sunshiney" => array("0" => "regular",),
        "Supermercado One" => array("0" => "regular",),
        "Sura" => array("0" => "regular", "1" => "700",),
        "Suranna" => array("0" => "regular",),
        "Suravaram" => array("0" => "regular",),
        "Suwannaphum" => array("0" => "regular",),
        "Swanky and Moo Moo" => array("0" => "regular",),
        "Syncopate" => array("0" => "regular", "1" => "700",),
        "Tangerine" => array("0" => "regular", "1" => "700",),
        "Taprom" => array("0" => "regular",),
        "Tauri" => array("0" => "regular",),
        "Teko" => array("0" => "300", "1" => "regular", "2" => "500", "3" => "600", "4" => "700",),
        "Telex" => array("0" => "regular",),
        "Tenali Ramakrishna" => array("0" => "regular",),
        "Tenor Sans" => array("0" => "regular",),
        "Text Me One" => array("0" => "regular",),
        "The Girl Next Door" => array("0" => "regular",),
        "Tienne" => array("0" => "regular", "1" => "700", "2" => "900",),
        "Tillana" => array("0" => "regular", "1" => "500", "2" => "600", "3" => "700", "4" => "800",),
        "Timmana" => array("0" => "regular",),
        "Tinos" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Titan One" => array("0" => "regular",),
        "Titillium Web" => array("0" => "200", "1" => "200italic", "2" => "300", "3" => "300italic", "4" => "regular", "5" => "italic", "6" => "600", "7" => "600italic", "8" => "700", "9" => "700italic", "10" => "900",),
        "Trade Winds" => array("0" => "regular",),
        "Trocchi" => array("0" => "regular",),
        "Trochut" => array("0" => "regular", "1" => "italic", "2" => "700",),
        "Trykker" => array("0" => "regular",),
        "Tulpen One" => array("0" => "regular",),
        "Ubuntu" => array("0" => "300", "1" => "300italic", "2" => "regular", "3" => "italic", "4" => "500", "5" => "500italic", "6" => "700", "7" => "700italic",),
        "Ubuntu Condensed" => array("0" => "regular",),
        "Ubuntu Mono" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Ultra" => array("0" => "regular",),
        "Uncial Antiqua" => array("0" => "regular",),
        "Underdog" => array("0" => "regular",),
        "Unica One" => array("0" => "regular",),
        "UnifrakturCook" => array("0" => "700",),
        "UnifrakturMaguntia" => array("0" => "regular",),
        "Unkempt" => array("0" => "regular", "1" => "700",),
        "Unlock" => array("0" => "regular",),
        "Unna" => array("0" => "regular",),
        "VT323" => array("0" => "regular",),
        "Vampiro One" => array("0" => "regular",),
        "Varela" => array("0" => "regular",),
        "Varela Round" => array("0" => "regular",),
        "Vast Shadow" => array("0" => "regular",),
        "Vesper Libre" => array("0" => "regular", "1" => "500", "2" => "700", "3" => "900",),
        "Vibur" => array("0" => "regular",),
        "Vidaloka" => array("0" => "regular",),
        "Viga" => array("0" => "regular",),
        "Voces" => array("0" => "regular",),
        "Volkhov" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Vollkorn" => array("0" => "regular", "1" => "italic", "2" => "700", "3" => "700italic",),
        "Voltaire" => array("0" => "regular",),
        "Waiting for the Sunrise" => array("0" => "regular",),
        "Wallpoet" => array("0" => "regular",),
        "Walter Turncoat" => array("0" => "regular",),
        "Warnes" => array("0" => "regular",),
        "Wellfleet" => array("0" => "regular",),
        "Wendy One" => array("0" => "regular",),
        "Wire One" => array("0" => "regular",),
        "Work Sans" => array("0" => "100", "1" => "200", "2" => "300", "3" => "regular", "4" => "500", "5" => "600", "6" => "700", "7" => "800", "8" => "900",),
        "Yanone Kaffeesatz" => array("0" => "200", "1" => "300", "2" => "regular", "3" => "700",),
        "Yantramanav" => array("0" => "100", "1" => "300", "2" => "regular", "3" => "500", "4" => "700", "5" => "900",),
        "Yellowtail" => array("0" => "regular",),
        "Yeseva One" => array("0" => "regular",),
        "Yesteryear" => array("0" => "regular",),
        "Zeyada" => array("0" => "regular",),
    );

    update_option('jobcareer_font_list', $font_list_init);
    update_option('jobcareer_font_attribute', $font_atts_int);
}
}
$cs_fonts_subsets = array(
    "ABeeZee" => array("0" => "latin",),
    "Abel" => array("0" => "latin",),
    "Abril Fatface" => array("0" => "latin-ext", "1" => "latin",),
    "Aclonica" => array("0" => "latin",),
    "Acme" => array("0" => "latin",),
    "Actor" => array("0" => "latin",),
    "Adamina" => array("0" => "latin",),
    "Advent Pro" => array("0" => "greek", "1" => "latin-ext", "2" => "latin",),
    "Aguafina Script" => array("0" => "latin-ext", "1" => "latin",),
    "Akronim" => array("0" => "latin-ext", "1" => "latin",),
    "Aladin" => array("0" => "latin-ext", "1" => "latin",),
    "Aldrich" => array("0" => "latin",),
    "Alef" => array("0" => "hebrew", "1" => "latin",),
    "Alegreya" => array("0" => "latin-ext", "1" => "latin",),
    "Alegreya SC" => array("0" => "latin-ext", "1" => "latin",),
    "Alegreya Sans" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Alegreya Sans SC" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Alex Brush" => array("0" => "latin-ext", "1" => "latin",),
    "Alfa Slab One" => array("0" => "latin",),
    "Alice" => array("0" => "latin",),
    "Alike" => array("0" => "latin",),
    "Alike Angular" => array("0" => "latin",),
    "Allan" => array("0" => "latin-ext", "1" => "latin",),
    "Allerta" => array("0" => "latin",),
    "Allerta Stencil" => array("0" => "latin",),
    "Allura" => array("0" => "latin-ext", "1" => "latin",),
    "Almendra" => array("0" => "latin-ext", "1" => "latin",),
    "Almendra Display" => array("0" => "latin-ext", "1" => "latin",),
    "Almendra SC" => array("0" => "latin",),
    "Amarante" => array("0" => "latin-ext", "1" => "latin",),
    "Amaranth" => array("0" => "latin",),
    "Amatic SC" => array("0" => "latin-ext", "1" => "latin",),
    "Amethysta" => array("0" => "latin",),
    "Amiri" => array("0" => "arabic", "1" => "latin",),
    "Amita" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Anaheim" => array("0" => "latin-ext", "1" => "latin",),
    "Andada" => array("0" => "latin-ext", "1" => "latin",),
    "Andika" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Angkor" => array("0" => "khmer",),
    "Annie Use Your Telescope" => array("0" => "latin",),
    "Anonymous Pro" => array("0" => "greek", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Antic" => array("0" => "latin",),
    "Antic Didone" => array("0" => "latin",),
    "Antic Slab" => array("0" => "latin",),
    "Anton" => array("0" => "latin-ext", "1" => "latin",),
    "Arapey" => array("0" => "latin",),
    "Arbutus" => array("0" => "latin-ext", "1" => "latin",),
    "Arbutus Slab" => array("0" => "latin-ext", "1" => "latin",),
    "Architects Daughter" => array("0" => "latin",),
    "Archivo Black" => array("0" => "latin-ext", "1" => "latin",),
    "Archivo Narrow" => array("0" => "latin-ext", "1" => "latin",),
    "Arimo" => array("0" => "hebrew", "1" => "cyrillic-ext", "2" => "greek-ext", "3" => "greek", "4" => "latin-ext", "5" => "vietnamese", "6" => "cyrillic", "7" => "latin",),
    "Arizonia" => array("0" => "latin-ext", "1" => "latin",),
    "Armata" => array("0" => "latin-ext", "1" => "latin",),
    "Artifika" => array("0" => "latin",),
    "Arvo" => array("0" => "latin",),
    "Arya" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Asap" => array("0" => "latin-ext", "1" => "latin",),
    "Asar" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Asset" => array("0" => "latin",),
    "Astloch" => array("0" => "latin",),
    "Asul" => array("0" => "latin",),
    "Atomic Age" => array("0" => "latin",),
    "Aubrey" => array("0" => "latin",),
    "Audiowide" => array("0" => "latin-ext", "1" => "latin",),
    "Autour One" => array("0" => "latin-ext", "1" => "latin",),
    "Average" => array("0" => "latin-ext", "1" => "latin",),
    "Average Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Averia Gruesa Libre" => array("0" => "latin-ext", "1" => "latin",),
    "Averia Libre" => array("0" => "latin",),
    "Averia Sans Libre" => array("0" => "latin",),
    "Averia Serif Libre" => array("0" => "latin",),
    "Bad Script" => array("0" => "cyrillic", "1" => "latin",),
    "Balthazar" => array("0" => "latin",),
    "Bangers" => array("0" => "latin",),
    "Basic" => array("0" => "latin-ext", "1" => "latin",),
    "Battambang" => array("0" => "khmer",),
    "Baumans" => array("0" => "latin",),
    "Bayon" => array("0" => "khmer",),
    "Belgrano" => array("0" => "latin",),
    "Belleza" => array("0" => "latin-ext", "1" => "latin",),
    "BenchNine" => array("0" => "latin-ext", "1" => "latin",),
    "Bentham" => array("0" => "latin",),
    "Berkshire Swash" => array("0" => "latin-ext", "1" => "latin",),
    "Bevan" => array("0" => "latin",),
    "Bigelow Rules" => array("0" => "latin-ext", "1" => "latin",),
    "Bigshot One" => array("0" => "latin",),
    "Bilbo" => array("0" => "latin-ext", "1" => "latin",),
    "Bilbo Swash Caps" => array("0" => "latin-ext", "1" => "latin",),
    "Biryani" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Bitter" => array("0" => "latin-ext", "1" => "latin",),
    "Black Ops One" => array("0" => "latin-ext", "1" => "latin",),
    "Bokor" => array("0" => "khmer",),
    "Bonbon" => array("0" => "latin",),
    "Boogaloo" => array("0" => "latin",),
    "Bowlby One" => array("0" => "latin",),
    "Bowlby One SC" => array("0" => "latin-ext", "1" => "latin",),
    "Brawler" => array("0" => "latin",),
    "Bree Serif" => array("0" => "latin-ext", "1" => "latin",),
    "Bubblegum Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Bubbler One" => array("0" => "latin-ext", "1" => "latin",),
    "Buda" => array("0" => "latin",),
    "Buenard" => array("0" => "latin-ext", "1" => "latin",),
    "Butcherman" => array("0" => "latin-ext", "1" => "latin",),
    "Butterfly Kids" => array("0" => "latin-ext", "1" => "latin",),
    "Cabin" => array("0" => "latin",),
    "Cabin Condensed" => array("0" => "latin",),
    "Cabin Sketch" => array("0" => "latin",),
    "Caesar Dressing" => array("0" => "latin",),
    "Cagliostro" => array("0" => "latin",),
    "Calligraffitti" => array("0" => "latin",),
    "Cambay" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Cambo" => array("0" => "latin",),
    "Candal" => array("0" => "latin",),
    "Cantarell" => array("0" => "latin",),
    "Cantata One" => array("0" => "latin-ext", "1" => "latin",),
    "Cantora One" => array("0" => "latin-ext", "1" => "latin",),
    "Capriola" => array("0" => "latin-ext", "1" => "latin",),
    "Cardo" => array("0" => "greek-ext", "1" => "greek", "2" => "latin-ext", "3" => "latin",),
    "Carme" => array("0" => "latin",),
    "Carrois Gothic" => array("0" => "latin",),
    "Carrois Gothic SC" => array("0" => "latin",),
    "Carter One" => array("0" => "latin",),
    "Catamaran" => array("0" => "tamil", "1" => "latin-ext", "2" => "latin",),
    "Caudex" => array("0" => "greek-ext", "1" => "greek", "2" => "latin-ext", "3" => "latin",),
    "Cedarville Cursive" => array("0" => "latin",),
    "Ceviche One" => array("0" => "latin",),
    "Changa One" => array("0" => "latin",),
    "Chango" => array("0" => "latin-ext", "1" => "latin",),
    "Chau Philomene One" => array("0" => "latin-ext", "1" => "latin",),
    "Chela One" => array("0" => "latin-ext", "1" => "latin",),
    "Chelsea Market" => array("0" => "latin-ext", "1" => "latin",),
    "Chenla" => array("0" => "khmer",),
    "Cherry Cream Soda" => array("0" => "latin",),
    "Cherry Swash" => array("0" => "latin-ext", "1" => "latin",),
    "Chewy" => array("0" => "latin",),
    "Chicle" => array("0" => "latin-ext", "1" => "latin",),
    "Chivo" => array("0" => "latin",),
    "Chonburi" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "thai", "3" => "latin",),
    "Cinzel" => array("0" => "latin",),
    "Cinzel Decorative" => array("0" => "latin",),
    "Clicker Script" => array("0" => "latin-ext", "1" => "latin",),
    "Coda" => array("0" => "latin-ext", "1" => "latin",),
    "Coda Caption" => array("0" => "latin-ext", "1" => "latin",),
    "Codystar" => array("0" => "latin-ext", "1" => "latin",),
    "Combo" => array("0" => "latin-ext", "1" => "latin",),
    "Comfortaa" => array("0" => "cyrillic-ext", "1" => "greek", "2" => "latin-ext", "3" => "cyrillic", "4" => "latin",),
    "Coming Soon" => array("0" => "latin",),
    "Concert One" => array("0" => "latin-ext", "1" => "latin",),
    "Condiment" => array("0" => "latin-ext", "1" => "latin",),
    "Content" => array("0" => "khmer",),
    "Contrail One" => array("0" => "latin",),
    "Convergence" => array("0" => "latin",),
    "Cookie" => array("0" => "latin",),
    "Copse" => array("0" => "latin",),
    "Corben" => array("0" => "latin-ext", "1" => "latin",),
    "Courgette" => array("0" => "latin-ext", "1" => "latin",),
    "Cousine" => array("0" => "hebrew", "1" => "cyrillic-ext", "2" => "greek-ext", "3" => "greek", "4" => "latin-ext", "5" => "vietnamese", "6" => "cyrillic", "7" => "latin",),
    "Coustard" => array("0" => "latin",),
    "Covered By Your Grace" => array("0" => "latin",),
    "Crafty Girls" => array("0" => "latin",),
    "Creepster" => array("0" => "latin",),
    "Crete Round" => array("0" => "latin-ext", "1" => "latin",),
    "Crimson Text" => array("0" => "latin",),
    "Croissant One" => array("0" => "latin-ext", "1" => "latin",),
    "Crushed" => array("0" => "latin",),
    "Cuprum" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Cutive" => array("0" => "latin-ext", "1" => "latin",),
    "Cutive Mono" => array("0" => "latin-ext", "1" => "latin",),
    "Damion" => array("0" => "latin",),
    "Dancing Script" => array("0" => "latin",),
    "Dangrek" => array("0" => "khmer",),
    "Dawning of a New Day" => array("0" => "latin",),
    "Days One" => array("0" => "latin",),
    "Dekko" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Delius" => array("0" => "latin",),
    "Delius Swash Caps" => array("0" => "latin",),
    "Delius Unicase" => array("0" => "latin",),
    "Della Respira" => array("0" => "latin",),
    "Denk One" => array("0" => "latin-ext", "1" => "latin",),
    "Devonshire" => array("0" => "latin-ext", "1" => "latin",),
    "Dhurjati" => array("0" => "telugu", "1" => "latin",),
    "Didact Gothic" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "cyrillic", "5" => "latin",),
    "Diplomata" => array("0" => "latin-ext", "1" => "latin",),
    "Diplomata SC" => array("0" => "latin-ext", "1" => "latin",),
    "Domine" => array("0" => "latin-ext", "1" => "latin",),
    "Donegal One" => array("0" => "latin-ext", "1" => "latin",),
    "Doppio One" => array("0" => "latin-ext", "1" => "latin",),
    "Dorsa" => array("0" => "latin",),
    "Dosis" => array("0" => "latin-ext", "1" => "latin",),
    "Dr Sugiyama" => array("0" => "latin-ext", "1" => "latin",),
    "Droid Sans" => array("0" => "latin",),
    "Droid Sans Mono" => array("0" => "latin",),
    "Droid Serif" => array("0" => "latin",),
    "Duru Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Dynalight" => array("0" => "latin-ext", "1" => "latin",),
    "EB Garamond" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "vietnamese", "3" => "cyrillic", "4" => "latin",),
    "Eagle Lake" => array("0" => "latin-ext", "1" => "latin",),
    "Eater" => array("0" => "latin-ext", "1" => "latin",),
    "Economica" => array("0" => "latin-ext", "1" => "latin",),
    "Eczar" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Ek Mukta" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Electrolize" => array("0" => "latin",),
    "Elsie" => array("0" => "latin-ext", "1" => "latin",),
    "Elsie Swash Caps" => array("0" => "latin-ext", "1" => "latin",),
    "Emblema One" => array("0" => "latin-ext", "1" => "latin",),
    "Emilys Candy" => array("0" => "latin-ext", "1" => "latin",),
    "Engagement" => array("0" => "latin",),
    "Englebert" => array("0" => "latin-ext", "1" => "latin",),
    "Enriqueta" => array("0" => "latin-ext", "1" => "latin",),
    "Erica One" => array("0" => "latin",),
    "Esteban" => array("0" => "latin-ext", "1" => "latin",),
    "Euphoria Script" => array("0" => "latin-ext", "1" => "latin",),
    "Ewert" => array("0" => "latin-ext", "1" => "latin",),
    "Exo" => array("0" => "latin-ext", "1" => "latin",),
    "Exo 2" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Expletus Sans" => array("0" => "latin",),
    "Fanwood Text" => array("0" => "latin",),
    "Fascinate" => array("0" => "latin",),
    "Fascinate Inline" => array("0" => "latin",),
    "Faster One" => array("0" => "latin",),
    "Fasthand" => array("0" => "khmer",),
    "Fauna One" => array("0" => "latin-ext", "1" => "latin",),
    "Federant" => array("0" => "latin",),
    "Federo" => array("0" => "latin",),
    "Felipa" => array("0" => "latin-ext", "1" => "latin",),
    "Fenix" => array("0" => "latin-ext", "1" => "latin",),
    "Finger Paint" => array("0" => "latin",),
    "Fira Mono" => array("0" => "cyrillic-ext", "1" => "greek", "2" => "latin-ext", "3" => "cyrillic", "4" => "latin",),
    "Fira Sans" => array("0" => "cyrillic-ext", "1" => "greek", "2" => "latin-ext", "3" => "cyrillic", "4" => "latin",),
    "Fjalla One" => array("0" => "latin-ext", "1" => "latin",),
    "Fjord One" => array("0" => "latin",),
    "Flamenco" => array("0" => "latin",),
    "Flavors" => array("0" => "latin",),
    "Fondamento" => array("0" => "latin-ext", "1" => "latin",),
    "Fontdiner Swanky" => array("0" => "latin",),
    "Forum" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Francois One" => array("0" => "latin-ext", "1" => "latin",),
    "Freckle Face" => array("0" => "latin-ext", "1" => "latin",),
    "Fredericka the Great" => array("0" => "latin",),
    "Fredoka One" => array("0" => "latin",),
    "Freehand" => array("0" => "khmer",),
    "Fresca" => array("0" => "latin-ext", "1" => "latin",),
    "Frijole" => array("0" => "latin",),
    "Fruktur" => array("0" => "latin-ext", "1" => "latin",),
    "Fugaz One" => array("0" => "latin",),
    "GFS Didot" => array("0" => "greek",),
    "GFS Neohellenic" => array("0" => "greek",),
    "Gabriela" => array("0" => "latin-ext", "1" => "latin",),
    "Gafata" => array("0" => "latin-ext", "1" => "latin",),
    "Galdeano" => array("0" => "latin",),
    "Galindo" => array("0" => "latin-ext", "1" => "latin",),
    "Gentium Basic" => array("0" => "latin-ext", "1" => "latin",),
    "Gentium Book Basic" => array("0" => "latin-ext", "1" => "latin",),
    "Geo" => array("0" => "latin",),
    "Geostar" => array("0" => "latin",),
    "Geostar Fill" => array("0" => "latin",),
    "Germania One" => array("0" => "latin",),
    "Gidugu" => array("0" => "telugu", "1" => "latin",),
    "Gilda Display" => array("0" => "latin-ext", "1" => "latin",),
    "Give You Glory" => array("0" => "latin",),
    "Glass Antiqua" => array("0" => "latin-ext", "1" => "latin",),
    "Glegoo" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Gloria Hallelujah" => array("0" => "latin",),
    "Goblin One" => array("0" => "latin",),
    "Gochi Hand" => array("0" => "latin",),
    "Gorditas" => array("0" => "latin",),
    "Goudy Bookletter 1911" => array("0" => "latin",),
    "Graduate" => array("0" => "latin",),
    "Grand Hotel" => array("0" => "latin-ext", "1" => "latin",),
    "Gravitas One" => array("0" => "latin",),
    "Great Vibes" => array("0" => "latin-ext", "1" => "latin",),
    "Griffy" => array("0" => "latin-ext", "1" => "latin",),
    "Gruppo" => array("0" => "latin-ext", "1" => "latin",),
    "Gudea" => array("0" => "latin-ext", "1" => "latin",),
    "Gurajada" => array("0" => "telugu", "1" => "latin",),
    "Habibi" => array("0" => "latin-ext", "1" => "latin",),
    "Halant" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Hammersmith One" => array("0" => "latin-ext", "1" => "latin",),
    "Hanalei" => array("0" => "latin-ext", "1" => "latin",),
    "Hanalei Fill" => array("0" => "latin-ext", "1" => "latin",),
    "Handlee" => array("0" => "latin",),
    "Hanuman" => array("0" => "khmer",),
    "Happy Monkey" => array("0" => "latin-ext", "1" => "latin",),
    "Headland One" => array("0" => "latin-ext", "1" => "latin",),
    "Henny Penny" => array("0" => "latin",),
    "Herr Von Muellerhoff" => array("0" => "latin-ext", "1" => "latin",),
    "Hind" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Holtwood One SC" => array("0" => "latin",),
    "Homemade Apple" => array("0" => "latin",),
    "Homenaje" => array("0" => "latin-ext", "1" => "latin",),
    "IM Fell DW Pica" => array("0" => "latin",),
    "IM Fell DW Pica SC" => array("0" => "latin",),
    "IM Fell Double Pica" => array("0" => "latin",),
    "IM Fell Double Pica SC" => array("0" => "latin",),
    "IM Fell English" => array("0" => "latin",),
    "IM Fell English SC" => array("0" => "latin",),
    "IM Fell French Canon" => array("0" => "latin",),
    "IM Fell French Canon SC" => array("0" => "latin",),
    "IM Fell Great Primer" => array("0" => "latin",),
    "IM Fell Great Primer SC" => array("0" => "latin",),
    "Iceberg" => array("0" => "latin",),
    "Iceland" => array("0" => "latin",),
    "Imprima" => array("0" => "latin-ext", "1" => "latin",),
    "Inconsolata" => array("0" => "latin-ext", "1" => "latin",),
    "Inder" => array("0" => "latin-ext", "1" => "latin",),
    "Indie Flower" => array("0" => "latin",),
    "Inika" => array("0" => "latin-ext", "1" => "latin",),
    "Inknut Antiqua" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Irish Grover" => array("0" => "latin",),
    "Istok Web" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Italiana" => array("0" => "latin",),
    "Italianno" => array("0" => "latin-ext", "1" => "latin",),
    "Itim" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "thai", "3" => "latin",),
    "Jacques Francois" => array("0" => "latin",),
    "Jacques Francois Shadow" => array("0" => "latin",),
    "Jaldi" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Jim Nightshade" => array("0" => "latin-ext", "1" => "latin",),
    "Jockey One" => array("0" => "latin-ext", "1" => "latin",),
    "Jolly Lodger" => array("0" => "latin-ext", "1" => "latin",),
    "Josefin Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Josefin Slab" => array("0" => "latin",),
    "Joti One" => array("0" => "latin-ext", "1" => "latin",),
    "Judson" => array("0" => "latin",),
    "Julee" => array("0" => "latin",),
    "Julius Sans One" => array("0" => "latin-ext", "1" => "latin",),
    "Junge" => array("0" => "latin",),
    "Jura" => array("0" => "cyrillic-ext", "1" => "greek", "2" => "latin-ext", "3" => "cyrillic", "4" => "latin",),
    "Just Another Hand" => array("0" => "latin",),
    "Just Me Again Down Here" => array("0" => "latin-ext", "1" => "latin",),
    "Kadwa" => array("0" => "devanagari", "1" => "latin",),
    "Kalam" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Kameron" => array("0" => "latin",),
    "Kantumruy" => array("0" => "khmer",),
    "Karla" => array("0" => "latin-ext", "1" => "latin",),
    "Karma" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Kaushan Script" => array("0" => "latin-ext", "1" => "latin",),
    "Kavoon" => array("0" => "latin-ext", "1" => "latin",),
    "Kdam Thmor" => array("0" => "khmer",),
    "Keania One" => array("0" => "latin-ext", "1" => "latin",),
    "Kelly Slab" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Kenia" => array("0" => "latin",),
    "Khand" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Khmer" => array("0" => "khmer",),
    "Khula" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Kite One" => array("0" => "latin",),
    "Knewave" => array("0" => "latin-ext", "1" => "latin",),
    "Kotta One" => array("0" => "latin-ext", "1" => "latin",),
    "Koulen" => array("0" => "khmer",),
    "Kranky" => array("0" => "latin",),
    "Kreon" => array("0" => "latin",),
    "Kristi" => array("0" => "latin",),
    "Krona One" => array("0" => "latin-ext", "1" => "latin",),
    "Kurale" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "devanagari", "3" => "latin",),
    "La Belle Aurore" => array("0" => "latin",),
    "Laila" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Lakki Reddy" => array("0" => "telugu", "1" => "latin",),
    "Lancelot" => array("0" => "latin-ext", "1" => "latin",),
    "Lateef" => array("0" => "arabic", "1" => "latin",),
    "Lato" => array("0" => "latin-ext", "1" => "latin",),
    "League Script" => array("0" => "latin",),
    "Leckerli One" => array("0" => "latin",),
    "Ledger" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Lekton" => array("0" => "latin-ext", "1" => "latin",),
    "Lemon" => array("0" => "latin",),
    "Libre Baskerville" => array("0" => "latin-ext", "1" => "latin",),
    "Life Savers" => array("0" => "latin-ext", "1" => "latin",),
    "Lilita One" => array("0" => "latin-ext", "1" => "latin",),
    "Lily Script One" => array("0" => "latin-ext", "1" => "latin",),
    "Limelight" => array("0" => "latin-ext", "1" => "latin",),
    "Linden Hill" => array("0" => "latin",),
    "Lobster" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "cyrillic", "3" => "latin",),
    "Lobster Two" => array("0" => "latin",),
    "Londrina Outline" => array("0" => "latin",),
    "Londrina Shadow" => array("0" => "latin",),
    "Londrina Sketch" => array("0" => "latin",),
    "Londrina Solid" => array("0" => "latin",),
    "Lora" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Love Ya Like A Sister" => array("0" => "latin",),
    "Loved by the King" => array("0" => "latin",),
    "Lovers Quarrel" => array("0" => "latin-ext", "1" => "latin",),
    "Luckiest Guy" => array("0" => "latin",),
    "Lusitana" => array("0" => "latin",),
    "Lustria" => array("0" => "latin",),
    "Macondo" => array("0" => "latin",),
    "Macondo Swash Caps" => array("0" => "latin",),
    "Magra" => array("0" => "latin-ext", "1" => "latin",),
    "Maiden Orange" => array("0" => "latin",),
    "Mako" => array("0" => "latin",),
    "Mallanna" => array("0" => "telugu", "1" => "latin",),
    "Mandali" => array("0" => "telugu", "1" => "latin",),
    "Marcellus" => array("0" => "latin-ext", "1" => "latin",),
    "Marcellus SC" => array("0" => "latin-ext", "1" => "latin",),
    "Marck Script" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Margarine" => array("0" => "latin-ext", "1" => "latin",),
    "Marko One" => array("0" => "latin",),
    "Marmelad" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Martel" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Martel Sans" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Marvel" => array("0" => "latin",),
    "Mate" => array("0" => "latin",),
    "Mate SC" => array("0" => "latin",),
    "Maven Pro" => array("0" => "latin",),
    "McLaren" => array("0" => "latin-ext", "1" => "latin",),
    "Meddon" => array("0" => "latin",),
    "MedievalSharp" => array("0" => "latin-ext", "1" => "latin",),
    "Medula One" => array("0" => "latin",),
    "Megrim" => array("0" => "latin",),
    "Meie Script" => array("0" => "latin-ext", "1" => "latin",),
    "Merienda" => array("0" => "latin-ext", "1" => "latin",),
    "Merienda One" => array("0" => "latin",),
    "Merriweather" => array("0" => "latin-ext", "1" => "latin",),
    "Merriweather Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Metal" => array("0" => "khmer",),
    "Metal Mania" => array("0" => "latin-ext", "1" => "latin",),
    "Metamorphous" => array("0" => "latin-ext", "1" => "latin",),
    "Metrophobic" => array("0" => "latin",),
    "Michroma" => array("0" => "latin",),
    "Milonga" => array("0" => "latin-ext", "1" => "latin",),
    "Miltonian" => array("0" => "latin",),
    "Miltonian Tattoo" => array("0" => "latin",),
    "Miniver" => array("0" => "latin",),
    "Miss Fajardose" => array("0" => "latin-ext", "1" => "latin",),
    "Modak" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Modern Antiqua" => array("0" => "latin-ext", "1" => "latin",),
    "Molengo" => array("0" => "latin-ext", "1" => "latin",),
    "Molle" => array("0" => "latin-ext", "1" => "latin",),
    "Monda" => array("0" => "latin-ext", "1" => "latin",),
    "Monofett" => array("0" => "latin",),
    "Monoton" => array("0" => "latin",),
    "Monsieur La Doulaise" => array("0" => "latin-ext", "1" => "latin",),
    "Montaga" => array("0" => "latin",),
    "Montez" => array("0" => "latin",),
    "Montserrat" => array("0" => "latin",),
    "Montserrat Alternates" => array("0" => "latin",),
    "Montserrat Subrayada" => array("0" => "latin",),
    "Moul" => array("0" => "khmer",),
    "Moulpali" => array("0" => "khmer",),
    "Mountains of Christmas" => array("0" => "latin",),
    "Mouse Memoirs" => array("0" => "latin-ext", "1" => "latin",),
    "Mr Bedfort" => array("0" => "latin-ext", "1" => "latin",),
    "Mr Dafoe" => array("0" => "latin-ext", "1" => "latin",),
    "Mr De Haviland" => array("0" => "latin-ext", "1" => "latin",),
    "Mrs Saint Delafield" => array("0" => "latin-ext", "1" => "latin",),
    "Mrs Sheppards" => array("0" => "latin-ext", "1" => "latin",),
    "Muli" => array("0" => "latin",),
    "Mystery Quest" => array("0" => "latin-ext", "1" => "latin",),
    "NTR" => array("0" => "telugu", "1" => "latin",),
    "Neucha" => array("0" => "cyrillic", "1" => "latin",),
    "Neuton" => array("0" => "latin-ext", "1" => "latin",),
    "New Rocker" => array("0" => "latin-ext", "1" => "latin",),
    "News Cycle" => array("0" => "latin-ext", "1" => "latin",),
    "Niconne" => array("0" => "latin-ext", "1" => "latin",),
    "Nixie One" => array("0" => "latin",),
    "Nobile" => array("0" => "latin",),
    "Nokora" => array("0" => "khmer",),
    "Norican" => array("0" => "latin-ext", "1" => "latin",),
    "Nosifer" => array("0" => "latin-ext", "1" => "latin",),
    "Nothing You Could Do" => array("0" => "latin",),
    "Noticia Text" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Noto Sans" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "devanagari", "7" => "latin",),
    "Noto Serif" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Nova Cut" => array("0" => "latin",),
    "Nova Flat" => array("0" => "latin",),
    "Nova Mono" => array("0" => "greek", "1" => "latin",),
    "Nova Oval" => array("0" => "latin",),
    "Nova Round" => array("0" => "latin",),
    "Nova Script" => array("0" => "latin",),
    "Nova Slim" => array("0" => "latin",),
    "Nova Square" => array("0" => "latin",),
    "Numans" => array("0" => "latin",),
    "Nunito" => array("0" => "latin",),
    "Odor Mean Chey" => array("0" => "khmer",),
    "Offside" => array("0" => "latin",),
    "Old Standard TT" => array("0" => "latin",),
    "Oldenburg" => array("0" => "latin-ext", "1" => "latin",),
    "Oleo Script" => array("0" => "latin-ext", "1" => "latin",),
    "Oleo Script Swash Caps" => array("0" => "latin-ext", "1" => "latin",),
    "Open Sans" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Open Sans Condensed" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Oranienbaum" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Orbitron" => array("0" => "latin",),
    "Oregano" => array("0" => "latin-ext", "1" => "latin",),
    "Orienta" => array("0" => "latin-ext", "1" => "latin",),
    "Original Surfer" => array("0" => "latin",),
    "Oswald" => array("0" => "latin-ext", "1" => "latin",),
    "Over the Rainbow" => array("0" => "latin",),
    "Overlock" => array("0" => "latin-ext", "1" => "latin",),
    "Overlock SC" => array("0" => "latin-ext", "1" => "latin",),
    "Ovo" => array("0" => "latin",),
    "Oxygen" => array("0" => "latin-ext", "1" => "latin",),
    "Oxygen Mono" => array("0" => "latin-ext", "1" => "latin",),
    "PT Mono" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "PT Sans" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "PT Sans Caption" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "PT Sans Narrow" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "PT Serif" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "PT Serif Caption" => array("0" => "cyrillic-ext", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Pacifico" => array("0" => "latin",),
    "Palanquin" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Palanquin Dark" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Paprika" => array("0" => "latin",),
    "Parisienne" => array("0" => "latin-ext", "1" => "latin",),
    "Passero One" => array("0" => "latin-ext", "1" => "latin",),
    "Passion One" => array("0" => "latin-ext", "1" => "latin",),
    "Pathway Gothic One" => array("0" => "latin-ext", "1" => "latin",),
    "Patrick Hand" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Patrick Hand SC" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Patua One" => array("0" => "latin",),
    "Paytone One" => array("0" => "latin",),
    "Peddana" => array("0" => "telugu", "1" => "latin",),
    "Peralta" => array("0" => "latin-ext", "1" => "latin",),
    "Permanent Marker" => array("0" => "latin",),
    "Petit Formal Script" => array("0" => "latin-ext", "1" => "latin",),
    "Petrona" => array("0" => "latin",),
    "Philosopher" => array("0" => "cyrillic", "1" => "latin",),
    "Piedra" => array("0" => "latin-ext", "1" => "latin",),
    "Pinyon Script" => array("0" => "latin",),
    "Pirata One" => array("0" => "latin-ext", "1" => "latin",),
    "Plaster" => array("0" => "latin-ext", "1" => "latin",),
    "Play" => array("0" => "cyrillic-ext", "1" => "greek", "2" => "latin-ext", "3" => "cyrillic", "4" => "latin",),
    "Playball" => array("0" => "latin-ext", "1" => "latin",),
    "Playfair Display" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Playfair Display SC" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Podkova" => array("0" => "latin",),
    "Poiret One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Poller One" => array("0" => "latin",),
    "Poly" => array("0" => "latin",),
    "Pompiere" => array("0" => "latin",),
    "Pontano Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Poppins" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Port Lligat Sans" => array("0" => "latin",),
    "Port Lligat Slab" => array("0" => "latin",),
    "Pragati Narrow" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Prata" => array("0" => "latin",),
    "Preahvihear" => array("0" => "khmer",),
    "Press Start 2P" => array("0" => "greek", "1" => "latin-ext", "2" => "cyrillic", "3" => "latin",),
    "Princess Sofia" => array("0" => "latin-ext", "1" => "latin",),
    "Prociono" => array("0" => "latin",),
    "Prosto One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Puritan" => array("0" => "latin",),
    "Purple Purse" => array("0" => "latin-ext", "1" => "latin",),
    "Quando" => array("0" => "latin-ext", "1" => "latin",),
    "Quantico" => array("0" => "latin",),
    "Quattrocento" => array("0" => "latin-ext", "1" => "latin",),
    "Quattrocento Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Questrial" => array("0" => "latin",),
    "Quicksand" => array("0" => "latin",),
    "Quintessential" => array("0" => "latin-ext", "1" => "latin",),
    "Qwigley" => array("0" => "latin-ext", "1" => "latin",),
    "Racing Sans One" => array("0" => "latin-ext", "1" => "latin",),
    "Radley" => array("0" => "latin-ext", "1" => "latin",),
    "Rajdhani" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Raleway" => array("0" => "latin",),
    "Raleway Dots" => array("0" => "latin-ext", "1" => "latin",),
    "Ramabhadra" => array("0" => "telugu", "1" => "latin",),
    "Ramaraja" => array("0" => "telugu", "1" => "latin",),
    "Rambla" => array("0" => "latin-ext", "1" => "latin",),
    "Rammetto One" => array("0" => "latin-ext", "1" => "latin",),
    "Ranchers" => array("0" => "latin-ext", "1" => "latin",),
    "Rancho" => array("0" => "latin",),
    "Ranga" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Rationale" => array("0" => "latin",),
    "Ravi Prakash" => array("0" => "telugu", "1" => "latin",),
    "Redressed" => array("0" => "latin",),
    "Reenie Beanie" => array("0" => "latin",),
    "Revalia" => array("0" => "latin-ext", "1" => "latin",),
    "Rhodium Libre" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Ribeye" => array("0" => "latin-ext", "1" => "latin",),
    "Ribeye Marrow" => array("0" => "latin-ext", "1" => "latin",),
    "Righteous" => array("0" => "latin-ext", "1" => "latin",),
    "Risque" => array("0" => "latin-ext", "1" => "latin",),
    "Roboto" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Roboto Condensed" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Roboto Mono" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Roboto Slab" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "vietnamese", "5" => "cyrillic", "6" => "latin",),
    "Rochester" => array("0" => "latin",),
    "Rock Salt" => array("0" => "latin",),
    "Rokkitt" => array("0" => "latin",),
    "Romanesco" => array("0" => "latin-ext", "1" => "latin",),
    "Ropa Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Rosario" => array("0" => "latin",),
    "Rosarivo" => array("0" => "latin-ext", "1" => "latin",),
    "Rouge Script" => array("0" => "latin",),
    "Rozha One" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Rubik" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Rubik Mono One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Rubik One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Ruda" => array("0" => "latin-ext", "1" => "latin",),
    "Rufina" => array("0" => "latin-ext", "1" => "latin",),
    "Ruge Boogie" => array("0" => "latin-ext", "1" => "latin",),
    "Ruluko" => array("0" => "latin-ext", "1" => "latin",),
    "Rum Raisin" => array("0" => "latin-ext", "1" => "latin",),
    "Ruslan Display" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Russo One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Ruthie" => array("0" => "latin-ext", "1" => "latin",),
    "Rye" => array("0" => "latin-ext", "1" => "latin",),
    "Sacramento" => array("0" => "latin-ext", "1" => "latin",),
    "Sahitya" => array("0" => "devanagari", "1" => "latin",),
    "Sail" => array("0" => "latin",),
    "Salsa" => array("0" => "latin",),
    "Sanchez" => array("0" => "latin-ext", "1" => "latin",),
    "Sancreek" => array("0" => "latin-ext", "1" => "latin",),
    "Sansita One" => array("0" => "latin",),
    "Sarala" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Sarina" => array("0" => "latin-ext", "1" => "latin",),
    "Sarpanch" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Satisfy" => array("0" => "latin",),
    "Scada" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Scheherazade" => array("0" => "arabic", "1" => "latin",),
    "Schoolbell" => array("0" => "latin",),
    "Seaweed Script" => array("0" => "latin-ext", "1" => "latin",),
    "Sevillana" => array("0" => "latin-ext", "1" => "latin",),
    "Seymour One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Shadows Into Light" => array("0" => "latin",),
    "Shadows Into Light Two" => array("0" => "latin-ext", "1" => "latin",),
    "Shanti" => array("0" => "latin",),
    "Share" => array("0" => "latin-ext", "1" => "latin",),
    "Share Tech" => array("0" => "latin",),
    "Share Tech Mono" => array("0" => "latin",),
    "Shojumaru" => array("0" => "latin-ext", "1" => "latin",),
    "Short Stack" => array("0" => "latin",),
    "Siemreap" => array("0" => "khmer",),
    "Sigmar One" => array("0" => "latin",),
    "Signika" => array("0" => "latin-ext", "1" => "latin",),
    "Signika Negative" => array("0" => "latin-ext", "1" => "latin",),
    "Simonetta" => array("0" => "latin-ext", "1" => "latin",),
    "Sintony" => array("0" => "latin-ext", "1" => "latin",),
    "Sirin Stencil" => array("0" => "latin",),
    "Six Caps" => array("0" => "latin",),
    "Skranji" => array("0" => "latin-ext", "1" => "latin",),
    "Slabo 13px" => array("0" => "latin-ext", "1" => "latin",),
    "Slabo 27px" => array("0" => "latin-ext", "1" => "latin",),
    "Slackey" => array("0" => "latin",),
    "Smokum" => array("0" => "latin",),
    "Smythe" => array("0" => "latin",),
    "Sniglet" => array("0" => "latin-ext", "1" => "latin",),
    "Snippet" => array("0" => "latin",),
    "Snowburst One" => array("0" => "latin-ext", "1" => "latin",),
    "Sofadi One" => array("0" => "latin",),
    "Sofia" => array("0" => "latin",),
    "Sonsie One" => array("0" => "latin-ext", "1" => "latin",),
    "Sorts Mill Goudy" => array("0" => "latin-ext", "1" => "latin",),
    "Source Code Pro" => array("0" => "latin-ext", "1" => "latin",),
    "Source Sans Pro" => array("0" => "latin-ext", "1" => "vietnamese", "2" => "latin",),
    "Source Serif Pro" => array("0" => "latin-ext", "1" => "latin",),
    "Special Elite" => array("0" => "latin",),
    "Spicy Rice" => array("0" => "latin",),
    "Spinnaker" => array("0" => "latin-ext", "1" => "latin",),
    "Spirax" => array("0" => "latin",),
    "Squada One" => array("0" => "latin",),
    "Sree Krushnadevaraya" => array("0" => "telugu", "1" => "latin",),
    "Stalemate" => array("0" => "latin-ext", "1" => "latin",),
    "Stalinist One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Stardos Stencil" => array("0" => "latin",),
    "Stint Ultra Condensed" => array("0" => "latin-ext", "1" => "latin",),
    "Stint Ultra Expanded" => array("0" => "latin-ext", "1" => "latin",),
    "Stoke" => array("0" => "latin-ext", "1" => "latin",),
    "Strait" => array("0" => "latin",),
    "Sue Ellen Francisco" => array("0" => "latin",),
    "Sumana" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Sunshiney" => array("0" => "latin",),
    "Supermercado One" => array("0" => "latin",),
    "Sura" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Suranna" => array("0" => "telugu", "1" => "latin",),
    "Suravaram" => array("0" => "telugu", "1" => "latin",),
    "Suwannaphum" => array("0" => "khmer",),
    "Swanky and Moo Moo" => array("0" => "latin",),
    "Syncopate" => array("0" => "latin",),
    "Tangerine" => array("0" => "latin",),
    "Taprom" => array("0" => "khmer",),
    "Tauri" => array("0" => "latin-ext", "1" => "latin",),
    "Teko" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Telex" => array("0" => "latin",),
    "Tenali Ramakrishna" => array("0" => "telugu", "1" => "latin",),
    "Tenor Sans" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Text Me One" => array("0" => "latin-ext", "1" => "latin",),
    "The Girl Next Door" => array("0" => "latin",),
    "Tienne" => array("0" => "latin",),
    "Tillana" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Timmana" => array("0" => "telugu", "1" => "latin",),
    "Tinos" => array("0" => "hebrew", "1" => "cyrillic-ext", "2" => "greek-ext", "3" => "greek", "4" => "latin-ext", "5" => "vietnamese", "6" => "cyrillic", "7" => "latin",),
    "Titan One" => array("0" => "latin-ext", "1" => "latin",),
    "Titillium Web" => array("0" => "latin-ext", "1" => "latin",),
    "Trade Winds" => array("0" => "latin",),
    "Trocchi" => array("0" => "latin-ext", "1" => "latin",),
    "Trochut" => array("0" => "latin",),
    "Trykker" => array("0" => "latin-ext", "1" => "latin",),
    "Tulpen One" => array("0" => "latin",),
    "Ubuntu" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "cyrillic", "5" => "latin",),
    "Ubuntu Condensed" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "cyrillic", "5" => "latin",),
    "Ubuntu Mono" => array("0" => "cyrillic-ext", "1" => "greek-ext", "2" => "greek", "3" => "latin-ext", "4" => "cyrillic", "5" => "latin",),
    "Ultra" => array("0" => "latin",),
    "Uncial Antiqua" => array("0" => "latin",),
    "Underdog" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Unica One" => array("0" => "latin-ext", "1" => "latin",),
    "UnifrakturCook" => array("0" => "latin",),
    "UnifrakturMaguntia" => array("0" => "latin",),
    "Unkempt" => array("0" => "latin",),
    "Unlock" => array("0" => "latin",),
    "Unna" => array("0" => "latin",),
    "VT323" => array("0" => "latin",),
    "Vampiro One" => array("0" => "latin-ext", "1" => "latin",),
    "Varela" => array("0" => "latin-ext", "1" => "latin",),
    "Varela Round" => array("0" => "latin",),
    "Vast Shadow" => array("0" => "latin",),
    "Vesper Libre" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Vibur" => array("0" => "latin",),
    "Vidaloka" => array("0" => "latin",),
    "Viga" => array("0" => "latin-ext", "1" => "latin",),
    "Voces" => array("0" => "latin-ext", "1" => "latin",),
    "Volkhov" => array("0" => "latin",),
    "Vollkorn" => array("0" => "latin",),
    "Voltaire" => array("0" => "latin",),
    "Waiting for the Sunrise" => array("0" => "latin",),
    "Wallpoet" => array("0" => "latin",),
    "Walter Turncoat" => array("0" => "latin",),
    "Warnes" => array("0" => "latin-ext", "1" => "latin",),
    "Wellfleet" => array("0" => "latin-ext", "1" => "latin",),
    "Wendy One" => array("0" => "latin-ext", "1" => "latin",),
    "Wire One" => array("0" => "latin",),
    "Work Sans" => array("0" => "latin-ext", "1" => "latin",),
    "Yanone Kaffeesatz" => array("0" => "latin-ext", "1" => "latin",),
    "Yantramanav" => array("0" => "latin-ext", "1" => "devanagari", "2" => "latin",),
    "Yellowtail" => array("0" => "latin",),
    "Yeseva One" => array("0" => "latin-ext", "1" => "cyrillic", "2" => "latin",),
    "Yesteryear" => array("0" => "latin",),
    "Zeyada" => array("0" => "latin",),
);
