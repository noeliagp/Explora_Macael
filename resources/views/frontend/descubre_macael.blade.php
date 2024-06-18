@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Descubre Macael</h1>
                <p class="lead">Conoce más sobre el pueblo de Macael</p>
               
            </div>
        </div>
    </div>
    <nav class="navbar-descubre navbar-expand-lg navbar-light bg-light w-100">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  fs-3 fw-bold" href="#historia">Historia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-3 fw-bold" href="#gastronomia">Gastronomía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-3 fw-bold" href="#fiestas">Fiestas y Tradiciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="historia" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Historia de Macael</h2>
                    <p class="lead">Explora la rica historia y tradición del mármol de Macael.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion" id="historyAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPrehistory">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrehistory" aria-expanded="false" aria-controls="collapsePrehistory">
                                    Periodo Prehistórico
                                </button>
                            </h2>
                            <div id="collapsePrehistory" class="accordion-collapse collapse" aria-labelledby="headingPrehistory" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Remontándonos al pasado más lejano de Macael, es preciso resaltar la existencia de un poblado prehistórico, situado en el paraje de “La Rambla”. Los profanos en la materia no le dimos la importancia que tiene, decíamos que era de la época de los moros. Pero su valor arqueológico, su auténtica importancia, se la ha dado un profesor de la Universidad de Granada, y además macaelense, Gabriel Martínez Fernández. Nos ha dado noticias de este acontecimiento de una manera sencilla. Dice que el poblado localizado en La Rambla, denominado “Cerro del Nacimiento”, perteneció a la cultura del Argar, entre los años 1900 a 1300 a.C.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRoman">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRoman" aria-expanded="false" aria-controls="collapseRoman">
                                    Época Fenicia y Romana
                                </button>
                            </h2>
                            <div id="collapseRoman" class="accordion-collapse collapse" aria-labelledby="headingRoman" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    En relación con estos dos periodos históricos, anteriores a la dominación musulmana, no tengo referencia alguna sobre la posible fundación de Macael. Los fenicios, como expertos comerciantes, llegaron a extraer trozos o bloques de mármol blanco de la Sierra, aunque de manera muy esporádica como es natural. Esto ocurrió en los siglos IV y V a. de C. Se elaboraron piezas especialmente en Cádiz para tumbas antropoides.
                                    <br>
                                    Los Romanos utilizaron el mármol de nuestro pueblo con cierta continuidad, porque fue una civilización superior, y en la actual Andalucía hubo importantes poblaciones romanas. Destacamos Guadix, Baza, Almuñecar, Vera y Mojácar. La cuidad más próxima fue Tíjola, la república Tagilata. Tenemos certeza que elaboraron diversas piezas de mármol blanco de Macael, sobre todo losas de adorno, lápidas y esculturas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMuslim">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMuslim" aria-expanded="false" aria-controls="collapseMuslim">
                                    Época Musulmana
                                </button>
                            </h2>
                            <div id="collapseMuslim" class="accordion-collapse collapse" aria-labelledby="headingMuslim" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    El origen etimológico del término “Macael”, es árabe, quizás que tenga relación con las palabras de las estelas o tumbas funerarias de mármol. El primer núcleo de población de Macael, surgió durante la dominación musulmana, aproximadamente en el siglo X. ¿En donde estaba ubicado en aquella época? Las primeras edificaciones se erigieron precisamente en el lugar en donde se encuentra actualmente el pueblo. Sus habitantes buscaron un valle abrigado, con fuentes de aguas abundantes próximas. El paraje inicial del pueblo estuvo a ambos lados del Barranco de la Currita, tramo de lo que hoy es la calle el Barranco. En un lugar del actual barrio del Castillo, se erigió una débil y pequeña fortaleza, para refugio de los moradores del pueblo.
                                    <br>
                                    Durante los siglos X y XI tuvo un gran renacer el empleo del mármol blanco de Macael, que se utilizó especialmente para estelas funerarias, capiteles artísticos y tumbas que se exportaron hasta Nigeria. A partir del año 936, por orden del Gran Califa Abderramán III se inició la explotación de las canteras para suministrar mármol a la ciudad-palacio de Medina Azahara (Córdoba).
                                    <br>
                                    Ante la indefensión y saqueos padecidos por los habitantes de Macael, éstos decidieron trasladarse al nuevo lugar, situado en un montículo rocoso y de difícil acceso. Sus moradores lo denominaban “Macael Alto” o “Macael Nuevo”. El llamado ahora "Macael Viejo”, está más al Sur, a unos dos kilómetros y medio del actual Pueblo, en la confluencia del río Marchal y el Arroyo El Baile. Todavía quedan restos de las murallas que tenía el poblado moro. Disponía de dos aljibes, uno en la parte alta y el otro en la baja. La Mezquita y el cementerio estaban en la parte inferior, dando al lado del río Marchal. En el año 1505 el edificio de la mezquita fue destinado a iglesia, respetada durante la rebelión morisca.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingReconquista">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReconquista" aria-expanded="false" aria-controls="collapseReconquista">
                                    La Reconquista de Macael por los Reyes Católicos
                                </button>
                            </h2>
                            <div id="collapseReconquista" class="accordion-collapse collapse" aria-labelledby="headingReconquista" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    La campaña de reconquista por los Reyes Católicos de las poblaciones de la actual provincia de Almería se inició a mediados del año 1488 con la toma de Vera y otras localidades de las comarcas del valle del Almanzora, de los Vélez y de Filabres. En esta primera campaña el ejército cristiano alcanzó hasta Cantoria, Olula y Fines. Macael, Purchena, Tíjola, Serón y otros pueblos del alto Almanzora siguieron en poder de los moros. Casi año y medio después, el 4 de Diciembre de 1489, fue conquistada Baza, entregándose también Serón, Tíjola, Purchena, Macael y los demás lugares de la comarca. Las Capitulaciones otorgadas por los Reyes Católicos a los moros vencidos en esta comarca, se firmaron el 7 del Diciembre en Purchena. Desde luego no hubo resistencia alguna por parte de los moros de Macael, ni de los pueblos colindantes.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMorisco">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMorisco" aria-expanded="false" aria-controls="collapseMorisco">
                                    Macael en la Época Morisca
                                </button>
                            </h2>
                            <div id="collapseMorisco" class="accordion-collapse collapse" aria-labelledby="headingMorisco" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Denominamos época morisca al periodo histórico comprendido desde la reconquista por los Reyes Católicos de esta comarca- mes de Diciembre del año 1489- al levantamiento de la población mora contra el rey Felipe II a finales del año 1568.
                                    <br>
                                    Con motivo de la rebelión, algunos habitantes moriscos de Macael, y también los de localidades próximas, huyeron a las Alpujarras. Igualmente abandonaron el pueblo las tres familias cristianas y el párroco, Juan Román, o Bachiller Román como lo denomina el historiador de la época Ginés Pérez de Hita. Finalizada la guerra en abril del año 1571, hasta mediados el 1573 Macael quedó casi deshabitado, con el consiguiente abandono de las canteras, campos, molinos, viviendas y otros medios, provocando la pobreza total.
                                    <br>
                                    Aspectos generales de la villa, con especial referencia al año 1.568.- Macael estaba situado en el lugar que hoy llamamos “Macael viejo”, pero en la época a la que nos referimos se le denominaba “Macael Nuevo”. El “Macael Viejo” de entonces estaba ubicado en el Macael actual; por ser este poblado más antiguo, se dice en el Libro de Apeo de la Villa, que las casas estaban caídas y convertidas en corrales de ganado. Fue en el año del 1.573 cuando se ordenó instalar a los nuevos pobladores cristianos en el Macael actual, abandonándose el poblado que se llamaba entonces Macael Nuevo, porque, según el Libro de Apeo, “es tierra mala y peligrosa y falta de agua”. Había 80 familias moriscas y 4 familias cristianas.
                                    <br>
                                    Macael pertenecía a la Jurisdicción de Baza, “en donde son juzgados los pleitos”, según se afirma en el Libro de Apeo. En efecto, por la Real Cédula de los Reyes Católicos, dada en Écija el 20 de noviembre de 1.501, la ciudad de Baza se anexionó de las villas y lugares de Caniles, de Benamaurel, Cullar, Macael y Laroya.
                                    <br>
                                    La agricultura.- Macael contaba en la fecha a que nos referimos, con 78 fanegas de tierra de riego, y 676 fanegas de secano, 1324 olivos y 947 moreras. Había además “pinos, carrascas y coscojas para ganados cabrios, ovejunos, vacas y puercos”, según se afirma en el Libro de Apeo. La fuente “Ayón” (fuente Maestra o Fuente Grande) daba agua para cinco acequias.
                                    <br>
                                    Molinos, horno y almazara.- Había dos molinos harineros de “pan llevar”, sitos en el pago de Gualcaná (rivera de la derecha del río Laroya), movidos con agua de la fuente Ayón (Fuente Maestra). También se explotaban dos yeseras, una próxima al Cafornal y la otra sita en el paraje de las canteras.
                                    <br>
                                    Las canteras.- Las canteras de mármol, llamadas desde muy antiguo “de los Filabres”, estaban ubicadas, según el Libro de Apeo y Doblamiento de la Villa, en el pago de Azlar, a media legua de distancia del pueblo afirmándose en dicho Libro, “que siempre han sido libres o comunes sin contradicción alguna”; es decir, que no eran de propiedad particular, ni de ningún señorío.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRepoblacion">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRepoblacion" aria-expanded="false" aria-controls="collapseRepoblacion">
                                    La Repoblación de Macael después de la Expulsión de los Moriscos
                                </button>
                            </h2>
                            <div id="collapseRepoblacion" class="accordion-collapse collapse" aria-labelledby="headingRepoblacion" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    El Real Consejo de Población de Granada, ordenó que Macael fuese repoblado con veintidós familias, entre las que ya contaba Juan Román, el párroco de la villa, el único habitante de la época morisca que volvió, como ya hemos comentado. Para efectuar las tareas de apeo de las propiedades abandonadas y su adjudicación mediante sorteo, fue nombrado Antón Pareja, Juez Administrador de la Hacienda de Su Majestad, acompañado del escribano Rodrigo Alonso. Dichos funcionarios llegaron a Macael el 12 de Agosto de 1.573.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXVII">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXVII" aria-expanded="false" aria-controls="collapseXVII">
                                    El Siglo XVII
                                </button>
                            </h2>
                            <div id="collapseXVII" class="accordion-collapse collapse" aria-labelledby="headingXVII" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    La Construcción de la Iglesia Parroquial. La Torre. Las Cruces de Mármol. Los únicos testimonios monumentales de valor histórico y artístico de Macael –si excluimos “Macael Viejo”- fueron erigidos en este siglo: la Iglesia Parroquial con la torre o campanario, y las dos cruces de mármol blanco talladas por los artesanos del pueblo: la cruz de “Los Mozos” y la “Cruz de Mayo”.
                                    <br>
                                    La iglesia parroquial de Macael, que mandó construir el Obispo de Almería, D. Fray Juan de Portocarrero, se terminó en 1.609, y fue demolida en 1.946, y ese mismo año comenzaron las obras de la actual iglesia. De la antigua iglesia, cuyo artesonado llamaba la atención, solamente quedan en pie la torre mudéjar, sencilla, airosa y robusta. La torre campanario se distingue principalmente por tener tejado a cuatro vertientes con cobertura de madera y tejas; por el uso de ladrillo como material de construcción, alternando con mampostería; arcos de medio punto y dibujos geométricos acusados por el ladrillo saliente de sus muros.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXVIII">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXVIII" aria-expanded="false" aria-controls="collapseXVIII">
                                    Macael a mediados del Siglo XVIII
                                </button>
                            </h2>
                            <div id="collapseXVIII" class="accordion-collapse collapse" aria-labelledby="headingXVIII" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Macael en el año 1751 pertenecía al Partido de Baza y a la provincia de Granada. La provincia de Almería fue creada en el año 1833, y el Partido Judicial de Purchena un año después. Contaba con 874 habitantes y con 213 casas. El casco urbano estaba dividido en dos barrios, el de la Iglesia y el del Castillo (ambos de igual extensión). Las casas del Barrio de la Iglesia lindaban con el Cerro de las Cruces. Dos arroyos cruzaban la población. Los montes de propios de la villa no producían rentas, ya que no se exigía impuesto alguno a los que explotaban las canteras.
                                    <br>
                                    En el término de Macael se cultivaban 1.500 fanegas de tierra; 1.445 de secano y 55 de regadío. Había 872 morales, 1.324 olivos, 740 higueras y un centenar de nogueras. El número de colmenas era de 256. Del ganado se reseña el siguiente: 218 cabezas de vacuno; 1.148 de cabrio, 132 de lanar; 148 de cerda, 2 de caballar y 153 asnal.
                                    <br>
                                    Se reseñan los siguientes establecimientos: tres molinos de “pan moler”; un horno de “pan cocer”; un molino de aceite o almazara; dos especieras “muy cortas”; un estanco de tabaco; un estanco de aguardientes; dos panaderías. Además había una barbería, herrerías y carpinterías. No había fonda o mesón. No se alude a ningún taller o actividad relacionada con el mármol, cosa que me ha sorprendido mucho. Los labradores, que aproximadamente eran unos 40, tenían mayores ingresos que el resto de los habitantes. Algunos de ellos ostentaban cargos o trabajaban a su vez en oficios particulares.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXIX">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXIX" aria-expanded="false" aria-controls="collapseXIX">
                                    Macael en el Siglo XIX
                                </button>
                            </h2>
                            <div id="collapseXIX" class="accordion-collapse collapse" aria-labelledby="headingXIX" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Con motivo del renacer económico de España en el siglo XVIII, mejoró el nivel de vida de la población, fomentándose la construcción de importantes edificios públicos. Estas circunstancias provocaron un aumento de la demanda de mármol, explotándose nuevos sectores de la Sierra. En el primer tercio del siglo pasado hubo un intento de “colonización” de las canteras y de su industria por empresarios catalanes. Estos instalaron la primera fábrica de mármol mediante fuerza hidráulica en la localidad de Fines en el año 1837. Pero este proceso, llamémosle “extranjerizante” se diluyó entre la población autóctona.
                                    <br>
                                    Aunque la Constitución de 1812 abolió el sistema señorial territorial, la ciudad de Baza se resistió a perder el privilegio de seguir nombrando los cargos públicos de Macael. Hasta el año 1818 continuó designando estos puestos.
                                    <br>
                                    En la guerra de la Independencia las fuerzas francesas hicieron acto de presencia varias veces en el pueblo en el año 1812. Se acercaban en busca de los guerrilleros que les hostigaban. Según estudio de D. Luis Martínez de Moratín, Párroco de Macael, parece ser que fusilaron a varios vecinos del pueblo en el año 1812, y que aquí fue enterrado un guerrillero de un pueblo de la Provincia de Granada, que los militares afrancesados lo pasaron por las armas.
                                    <br>
                                    A principios del reinado de Isabel II, en el año 1837 se consolidó totalmente la situación legal de los montes a favor del Ayuntamiento, al desaparecer en España los señoríos territoriales y jurisdiccionales. Por lo tanto, a partir de la indicada fecha, creo que se inició el cobro del “aforo” o canon a los que se les otorgaba el permiso de explotación de canteras.
                                    <br>
                                    El Diccionario Geográfico-Histórico Madoz (año 1845), recoge sobre Macael los siguientes datos: “Tiene una mediana plaza cuadrangular, en ella se encuentra la casa capitular, una escuela de primera educación dotada de 750 reales; hay varias fuentes a corta distancia de la población. Destaca la Iglesia Parroquial colocada en el centro de la villa y sirven al culto un cura párroco y un sacristán. Comprende un despoblado conocido por Macael Viejo. En el terreno se ven montes bien poblados de pinos y encinas. Hay minas de hierro, y sobre todo canteras de mármol blanco y azul exquisitos, que surten de mármoles a la fábrica de Fines y otros varios talleres donde lo elaboran para dentro y fuera del reino. Los caminos son todos de herradura, a excepción de uno de ruedas que pasa por encima de la sierra; tiene 1.154 almas y 288 vecinos”.
                                    <br>
                                    Hasta mediados del siglo XIX no se inició la mecanización de la elaboración del mármol. A partir del año 1850 se instalaron las primeras fábricas o “artes” de aserrado mecánico del mármol en el arroyo Marchal, aprovechando la fuerza hidráulica, extendiéndose después a los arroyos Laroya, Macael y ría Almanzora.
                                    <br>
                                    La realidad socioeconómica de los habitantes de Macael era todavía campesina; los canteros se ayudaban económicamente trabajando en su “bancalillo”; algunos canteros y peones se marchaban en verano a “Las Andalucías” para trabajar en la “siega”. Recordar que en el último tercio de este siglo se inició el trasporte del mármol en carros de bueyes; la mayoría de los carreteros procedían de Cuevas del Almanzora y de Lorca. Este sistema de transporte fue utilizado hasta mediados del s. XX, al emplearse el trasporte con camiones.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXX">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXX" aria-expanded="false" aria-controls="collapseXX">
                                    Breve Referencia al Siglo XX
                                </button>
                            </h2>
                            <div id="collapseXX" class="accordion-collapse collapse" aria-labelledby="headingXX" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    El pasado siglo fue la época decisiva de las mejoras técnicas y económicas de Macael. Destacar el funcionamiento de la línea de ferrocarril Guadix-Almendricos (Murcia), que fomentó el transporte del mármol especialmente a Barcelona, y la utilización del puerto de Águilas. Otro hito importante en lo social, fue la legalización (1903) de la “Sociedad de Canteros, Marmolistas y Similares”. Destacar también que en el año 1923 hubo una huelga importante de canteros por no aceptar la patronal el incremento salarial. Recordar que en el año 1917 el salario por día de trabajo era 4 pts.
                                    <br>
                                    En la década de los años veinte Macael alcanzó altas cotas de progreso. En este periodo se inauguró la carretera de Olula-Macael-Tahal. También se instaló la energía eléctrica, que modernizó fábricas y talleres. La población de Macael alcanzó los 3.000 habitantes en el año 1930.
                                    <br>
                                    La composición laboral era la siguiente: 268 canteros, 33 marmistas; 20 cincelistas, 8 carreteros y 195 jornaleros. La producción de mármol alcanzó las 4.000 toneladas. En el año 1965 se inició la electrificación de las canteras.
                                    <br>
                                    En el último tercio del siglo se efectuó la mecanización y racionalización de los procesos de extracción del mármol de las canteras. Consecuentemente, las labores de los canteros y demás profesionales se han humanizado. Por otra parte, los definidos perfiles profesionales del cantero se han difuminado en aras de la productividad; es decir, que su “rol artesanal” está en fase de extinción.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    <section id="fiestas" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="display-5 text-center">Fiestas y Tradiciones</h2>
                    <p class="lead text-center">Descubre las ricas y variadas festividades de Macael.</p>
                    <div class="accordion" id="fiestasAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Recreación Histórica
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    Organizada por el Ayuntamiento de Macael, con esta recreación histórica, pretende dar a conocer qué significa ser Cantero en Macael a través del “Pleito de las Canteras”. Un hecho determinante por el cual, los canteros y sus familias, tras una prolongada lucha (de 1919 a 1947), recuperan el carácter público de sus canteras, comunales de acuerdo a la tradición heredada de época musulmana, frente a su intento de privatización por parte de los caciques locales.
                                    <br>
                                    Con este evento, se quiere dar un paso más allá, involucrando al participante en este acontecimiento histórico, revivirlo, con el objetivo de que viva el orgullo de ser cantero, se meta en la piel de los protagonistas y sienta esta lucha como suya.
                                    <br>
                                    Macael se vestirá de época, volviendo al periodo comprendido entre 1919 y 1947. Nos encontraremos con canteros, arrieros, carreteros, dueños de canteras, fragüeros, chambilleros, amoladoras, lavanderas y otros personajes típicos de este tiempo dentro de un espacio lúdico caracterizado con los edificios y escenarios más representativos de ese periodo.
                                    <br>
                                    En ellos la representación se mezclará con el público asistente, que tendrá la oportunidad de degustar tapas basadas en la gastronomía tradicional, bailar al compás de la música de la época (Charleston, pasodobles, Mazurca), contemplar demostraciones de labores de cantería, artesanía y escultura.
                                </div>
                                <div class="d-flex justify-content-center">
                                    <iframe class="mb-3" width="500" height="281" src="https://www.youtube.com/embed/HgzInNP6DqU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Rally Subida del Mármol
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    La Subida al mármol de Macael es una prueba automovilística de montaña, celebrada en localidad almeriense de Macael-España, y una de las pruebas decanas de la modalidad en el país. En el año 2024, cuenta con 49 ediciones celebradas.
                                    <br>
                                    El organizador de esta prueba automovilística es la Escudería del Mármol, con sede en la localidad de Macael, Almería.
                                    <br>
                                    El recorrido de esta subida de montaña cuenta con una distancia de 4,5 kilómetros que discurren por una sinuosa carretera (AL-840) que atraviesa una de las numerosas canteras de la zona.
                                    <br>
                                    Durante todo el trazado y de forma permanente, durante todo el año, hay neumáticos usados de coches para evitar que los vehículos de competición choquen contra las piedras y guarda-raíles.
                                </div>
                                <div class="d-flex justify-content-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sF1_0uB5QFg?si=-Q-sI4PNfCPe5mKn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Honor a la Virgen del Rosario
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    El 7 de Octubre, Macael conmemora a su Patrona, La Virgen del Rosario. Son las fiestas grandes y el pueblo se lanza a la calle para venerar su imagen que ha sido desde tiempos inmemoriales la esperanza y alivio de canteros y trabajadores del mármol.
                                </div>
                                <div style="text-align: center;">
                                    <img src="https://i.ibb.co/RPcQJqc/image.png" alt="Imagen de la Virgen del Rosario" height="500px">
                                </div>
                            </div>
                         </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Homenaje al Cantero
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    Se celebra el primer fin de semana de Diciembre. Fiesta tradicional en la que se reconoce la dura labor del trabajador, tras una larga vida laboral.
                                    <br>
                                    Conferencias y coloquios acerca del trabajo en la cantera. Migas populares cocinadas con esmero por las mujeres y los hombres del pueblo para deleite y satisfacción de los macaelenses y visitantes.
                                    <br>
                                    Acto homenaje y entrega de placas a los canteros jubilados a lo largo del año.
                                    <br>
                                    Misa de acción de gracias y ofrenda floral en el monumento al cantero.
                                </div>
                                <div style="text-align: center">
                                    <img src="https://i.ibb.co/kDYM0Ny/image.png" alt="Imagen de la Virgen del Rosario" height="500px">
                                </div>
                            </div>
                           
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    San Marcos
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    El 25 de Abril es el día de San Marcos patrón de Macael. Es tradición ir a pasar el día al campo con familiares y amigos, y comerse el tradicional hornazo (pan de aceite con un huevo cocido en medio).
                                    <br>
                                    El punto de encuentro más popular es en la era de la Rambla-Canfornal, donde se celebra una misa y a continuación una pequeña procesión por los cortijos situados en esa zona, cantando y bailando.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Carnaval
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    Es una de las fiestas más esperadas del municipio y cada año cuenta con más participantes.
                                    <br>
                                    Se celebra en 2 fines de semana en los que tendrán lugar el certamen de comparsas en el Teatro Municipal y el Pasacalles con un gran baile de disfraces y entrega de premios.
                                    <br>
                                    Es destacable el gran interés y participación de la gente del municipio por el carnaval, superándose cada año con la originalidad de los trajes y las letras de las comparsas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Fiestas de los Barrios
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    El barrio San José Obrero, festeja el primero de Mayo.
                                    <br>
                                    El de San Antonio, el 13 de Junio. San Juan, el 24 de Junio.
                                    <br>
                                    La Virgen del Carmen, el 16 de Julio.
                                    <br>
                                    Por último, el barrio el Collado que celebra la Virgen María, el 12 de Septiembre.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Semana Santa
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    La Semana Santa en Macael tiene una gran tradición. La procesión más llamativa y vistosa es la del Santo Entierro, el Viernes Santo. Impresiona ver los hachones encendidos en manos de los nazarenos ocultos bajo sus capiruchos, y los costaleros subiendo por las empinadas calles del pueblo en riguroso silencio. El Domingo de Resurrección, a primera hora de la mañana, tiene lugar la procesión del Encuentro. En ella, la Virgen del Rosario recorre una parte del pueblo en busca de las imágenes del Cristo Resucitado y de San Juan, que esperan en las cruces del calvario. En el reencuentro se hace danzar a los tronos al compás de la banda de música, bajo una lluvia de pétalos de rosas.
                                </div>
                                <div style="text-align: center">
                                    <img src=" https://i.ibb.co/TWRvKTF/image.png" alt="Imagen de la Virgen del Rosario" height="500px">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gastronomia" class="py-5 ">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Gastronomía</h2>
                    <p class="lead">Disfruta de la auténtica gastronomía de Macael, desde migas tradicionales hasta postres únicos.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p> En los fríos días del invierno, cuando la lluvia hace su aparición, es costumbre cocinar migas de harina o de pan, acompañadas con caldo de pimentón, pimientos y tomates secos fritos, pescado y tajadas, todo ello regado con un buen vino de la tierra. También se consumen los pucheros, cocinados en sus diferentes formas: trigo, calabaza e hinojo, que preparan el cuerpo para un duro día de trabajo.
                            </p>
                            <img src='https://i.ibb.co/LhpQMys/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                    
                        </div>
                        <div class="col-md-6 ">
                            <p> En Navidad se elabora la repostería típica de estas fechas, las tortas de chicharrones y manteca, el pan de aceite, los suspiros y los mantecados.
                            </p>
                            <img src='https://i.ibb.co/S7Wbtjy/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                    
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p>Con la llegada de la primavera y coincidiendo con Semana Santa, los condimentos se adaptan a la prohibición de la carne y a los productos vegetales que afloran de la vega. Se preparan los potajes de cuaresma con albóndigas de bacalao y como postre, los roscos fritos y los buñuelos con anís.
                            </p>
                            <img src='https://i.ibb.co/SysXmsh/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                    
                        </div>
                        <div class="col-md-6">
                            <p>En los calurosos días de verano, son refrescantes los gazpachos y ensaladas del tiempo. Además, son características las fritadas de conejo o pollo y las gachas con caldo de pescado, aprovechando la temporada de mayor esplendor de las verduras.</p>
                            <img src='https://i.ibb.co/Qc8CB4c/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                    
                        </div>
                    <div class="text-center mt-4">
                        <p> No podemos olvidar los famosos hornazos de San Marcos, bollo de pan de aceite adornado con un huevo y que según la tradición, hay que romperlo en la cabeza del más despistado.</p>                   <img src='https://i.postimg.cc/j2RbNjWy/hornazo-1.jpg' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
