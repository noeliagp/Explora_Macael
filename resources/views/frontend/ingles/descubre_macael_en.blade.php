@extends('layouts.master_en')

@section('body')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Discover Macael</h1>
                <p class="lead">Learn more about the town of Macael</p>
            </div>
        </div>
    </div>
    <nav class="navbar-descubre navbar-expand-lg navbar-light bg-light w-100">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#historia">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#gastronomia">Gastronomy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#fiestas">Festivals and Traditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="historia" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">History of Macael</h2>
                    <p class="lead">Explore the rich history and tradition of Macael marble.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion" id="historyAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPrehistory">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrehistory" aria-expanded="false" aria-controls="collapsePrehistory">
                                    Prehistoric Period
                                </button>
                            </h2>
                            <div id="collapsePrehistory" class="accordion-collapse collapse" aria-labelledby="headingPrehistory" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Going back to the most distant past of Macael, it is worth highlighting the existence of a prehistoric village, located in the area of "La Rambla." The non-experts among us didn't give it the importance it has; we said it was from the Moorish era. But its archaeological value, its true importance, was given by a professor from the University of Granada, and also from Macael, Gabriel Martínez Fernández. He has informed us about this event in a simple way. He says that the village located in La Rambla, called "Cerro del Nacimiento," belonged to the Argaric culture, between the years 1900 to 1300 BC.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRoman">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRoman" aria-expanded="false" aria-controls="collapseRoman">
                                    Phoenician and Roman Era
                                </button>
                            </h2>
                            <div id="collapseRoman" class="accordion-collapse collapse" aria-labelledby="headingRoman" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Regarding these two historical periods, prior to the Muslim domination, I have no reference about the possible founding of Macael. The Phoenicians, as expert traders, extracted pieces or blocks of white marble from the Sierra, although very sporadically as naturally. This happened in the 4th and 5th centuries BC. Pieces were made especially in Cádiz for anthropoid tombs.
                                    <br>
                                    The Romans used marble from our town with some continuity, as it was a superior civilization, and in present-day Andalusia, there were important Roman towns. We highlight Guadix, Baza, Almuñecar, Vera, and Mojácar. The closest town was Tíjola, the Tagilata republic. We are certain that they made various pieces of white marble from Macael, especially decorative slabs, tombstones, and sculptures.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMuslim">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMuslim" aria-expanded="false" aria-controls="collapseMuslim">
                                    Muslim Era
                                </button>
                            </h2>
                            <div id="collapseMuslim" class="accordion-collapse collapse" aria-labelledby="headingMuslim" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    The etymological origin of the term "Macael" is Arabic, perhaps related to the words on marble tombstones or gravestones. The first population nucleus of Macael arose during the Muslim domination, approximately in the 10th century. Where was it located at that time? The first buildings were erected precisely where the town is currently located. Its inhabitants sought a sheltered valley, with abundant water sources nearby. The initial area of the town was on both sides of the Currita Ravine, a section of what is now Barranco Street. In a place in the current Castillo neighborhood, a weak and small fortress was erected for the inhabitants of the town to take refuge.
                                    <br>
                                    During the 10th and 11th centuries, the use of Macael's white marble had a great resurgence, especially for funerary steles, artistic capitals, and tombs that were exported to Nigeria. From 936 onwards, by order of the Great Caliph Abd al-Rahman III, quarrying began to supply marble to the city-palace of Madinat al-Zahra (Córdoba).
                                    <br>
                                    Due to the defenselessness and looting suffered by the inhabitants of Macael, they decided to move to a new location, situated on a rocky and difficult-to-access hill. Its inhabitants called it "Macael Alto" or "New Macael." The now-called "Old Macael" is further south, about two and a half kilometers from the current town, at the confluence of the Marchal River and the Baile Stream. Remnants of the walls that the Moorish village had still remain. It had two cisterns, one in the upper part and one in the lower part. The mosque and cemetery were in the lower part, next to the Marchal River. In 1505, the mosque building was designated as a church, respected during the Moorish rebellion.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingReconquista">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReconquista" aria-expanded="false" aria-controls="collapseReconquista">
                                    The Reconquest of Macael by the Catholic Monarchs
                                </button>
                            </h2>
                            <div id="collapseReconquista" class="accordion-collapse collapse" aria-labelledby="headingReconquista" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    The campaign of reconquest by the Catholic Monarchs of the towns in the current province of Almería began in mid-1488 with the capture of Vera and other towns in the Almanzora Valley, Vélez, and Filabres regions. In this first campaign, the Christian army reached Cantoria, Olula, and Fines. Macael, Purchena, Tíjola, Serón, and other towns in the upper Almanzora remained under Moorish control. Almost a year and a half later, on December 4, 1489, Baza was conquered, and Serón, Tíjola, Purchena, Macael, and other towns in the region surrendered. The Capitulations granted by the Catholic Monarchs to the defeated Moors in this region were signed on December 7 in Purchena. There was no resistance from the Moors of Macael or neighboring towns.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingMorisco">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMorisco" aria-expanded="false" aria-controls="collapseMorisco">
                                    Macael in the Moorish Era
                                </button>
                            </h2>
                            <div id="collapseMorisco" class="accordion-collapse collapse" aria-labelledby="headingMorisco" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    We refer to the Moorish era as the historical period from the reconquest by the Catholic Monarchs of this region - December 1489 - to the uprising of the Moorish population against King Philip II at the end of 1568.
                                   
                                    <br>
                                    Due to the rebellion, some Moorish inhabitants of Macael, and also those from nearby towns, fled to the Alpujarras. The three Christian families and the parish priest, Juan Román, or Bachelor Román as the historian of the time Ginés Pérez de Hita called him, also abandoned the town. After the war ended in April 1571, Macael was almost deserted until mid-1573, with the consequent abandonment of quarries, fields, mills, homes, and other means, causing total poverty.
                                    <br>
                                    General aspects of the village, with particular reference to the year 1568.- Macael was located in the place now called "Old Macael," but in the period we refer to, it was called "New Macael." The "Old Macael" of then was located in the current Macael; as this village was older, it is said in the Village Survey Book that the houses had fallen and turned into livestock corrals. In 1573, the order was given to install the new Christian settlers in the current Macael, abandoning the village then called New Macael because, according to the Survey Book, "it is bad and dangerous land and lacks water." There were 80 Moorish families and 4 Christian families.
                                    <br>
                                    Macael belonged to the Jurisdiction of Baza, "where lawsuits are judged," according to the Survey Book. Indeed, by the Royal Decree of the Catholic Monarchs, given in Écija on November 20, 1501, the city of Baza annexed the villages and places of Caniles, Benamaurel, Cúllar, Macael, and Laroya.
                                    <br>
                                    Agriculture.- Macael had 78 bushels of irrigated land and 676 bushels of rain-fed land, 1,324 olive trees, and 947 mulberries. There were also "pines, holm oaks, and kermes oaks for goats, sheep, cows, and pigs," according to the Survey Book. The Ayón fountain (Maestra or Grande fountain) supplied water to five ditches.
                                    <br>
                                    Mills, oven, and oil mill.- There were two grain mills for "bread making," located in the Gualcaná area (right bank of the Laroya River), powered by water from the Ayón fountain (Maestra Fountain). Two gypsum works were also exploited, one near Cafornal and the other in the quarry area.
                                    <br>
                                    Quarries.- The marble quarries, called "Filabres" since ancient times, were located, according to the Survey and Settlement Book of the Village, in the Azlar area, half a league away from the village, affirming in the said Book that "they have always been free or common without any contradiction"; that is, they were not privately owned or under any lordship.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingRepoblacion">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRepoblacion" aria-expanded="false" aria-controls="collapseRepoblacion">
                                    The Repopulation of Macael after the Expulsion of the Moors
                                </button>
                            </h2>
                            <div id="collapseRepoblacion" class="accordion-collapse collapse" aria-labelledby="headingRepoblacion" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    The Royal Council of Population of Granada ordered that Macael be repopulated with twenty-two families, including Juan Román, the parish priest of the village, the only inhabitant of the Moorish era who returned, as we have already mentioned. To carry out the tasks of surveying the abandoned properties and assigning them by lottery, Antón Pareja, Judge Administrator of His Majesty's Treasury, accompanied by the scribe Rodrigo Alonso, was appointed. These officials arrived in Macael on August 12, 1573.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXVII">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXVII" aria-expanded="false" aria-controls="collapseXVII">
                                    The 17th Century
                                </button>
                            </h2>
                            <div id="collapseXVII" class="accordion-collapse collapse" aria-labelledby="headingXVII" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    The Construction of the Parish Church. The Tower. The Marble Crosses. The only monumental testimonies of historical and artistic value in Macael – if we exclude "Old Macael" – were erected in this century: the Parish Church with the tower or bell tower, and the two white marble crosses carved by the town's craftsmen: the cross of "Los Mozos" and the "May Cross."
                                    <br>
                                    The parish church of Macael, commissioned by the Bishop of Almería, Fray Juan de Portocarrero, was completed in 1609 and was demolished in 1946. That same year, the construction of the current church began. Of the old church, whose coffered ceiling was noteworthy, only the Mudejar tower remains standing, simple, airy, and robust. The bell tower stands out mainly for having a four-sided roof with wooden and tile covering; the use of brick as a building material, alternating with masonry; semicircular arches and geometric patterns accentuated by the protruding brick of its walls.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXVIII">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXVIII" aria-expanded="false" aria-controls="collapseXVIII">
                                    Macael in the Mid-18th Century
                                </button>
                            </h2>
                            <div id="collapseXVIII" class="accordion-collapse collapse" aria-labelledby="headingXVIII" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    In 1751, Macael belonged to the Party of Baza and the province of Granada. The province of Almería was created in 1833, and the Judicial District of Purchena a year later. It had 874 inhabitants and 213 houses. The urban area was divided into two neighborhoods, the Church and the Castle (both of equal size). The houses in the Church neighborhood bordered the Cerro de las Cruces. Two streams crossed the town. The town's own mountains did not generate revenue, as no tax was required from those who exploited the quarries.
                                    <br>
                                    In the Macael area, 1,500 bushels of land were cultivated; 1,445 rain-fed and 55 irrigated. There were 872 mulberry trees, 1,324 olive trees, 740 fig trees, and about a hundred walnut trees. The number of beehives was 256. The livestock listed were: 218 heads of cattle; 1,148 goats, 132 sheep; 148 pigs, 2 horses, and 153 donkeys.
                                    <br>
                                    The following establishments are listed: three "bread grinding" mills; an oven for "bread baking"; an oil mill; two very small spice shops; a tobacco shop; a liquor shop; two bakeries. There was also a barber shop, blacksmiths, and carpenters. There was no inn or tavern. There is no mention of any workshop or activity related to marble, which surprises me a lot. Farmers, who were approximately 40, had higher incomes than the rest of the inhabitants. Some of them held positions or worked in particular trades.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXIX">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXIX" aria-expanded="false" aria-controls="collapseXIX">
                                    Macael in the 19th Century
                                </button>
                            </h2>
                            <div id="collapseXIX" class="accordion-collapse collapse" aria-labelledby="headingXIX" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    Due to the economic revival of Spain in the 18th century, the standard of living improved, encouraging the construction of important public buildings. These circumstances caused an increase in the demand for marble, exploiting new sectors of the Sierra. In the first third of the last century, there was an attempt to "colonize" the quarries and their industry by Catalan entrepreneurs. They installed the first marble factory using hydraulic power in the town of Fines in 1837. But this "foreignizing" process faded among the local population.
                                    <br>
                                    Although the 1812 Constitution abolished the territorial lordship system, the city of Baza resisted losing the privilege of continuing to appoint public officials in Macael. Until 1818, it continued to designate these positions.
                                    <br>
                                    During the Peninsular War, French forces made several appearances in the town in 1812. They came looking for the guerrillas who harassed them. According to a study by D. Luis Martínez de Moratín, Parish Priest of Macael, it seems that several neighbors of the town were shot in 1812, and a guerrilla from a town in the province of Granada was buried here, who was executed by the French military.
                                    <br>
                                    At the beginning of the reign of Isabel II, in 1837, the legal situation of the mountains in favor of the City Council was fully consolidated, with territorial and jurisdictional lordships disappearing in Spain. Therefore, from the indicated date, the collection of the "aforo" or fee began for those granted permission to exploit quarries.
                                    <br>
                                    The Geographic-Historical Dictionary of Madoz (year 1845) records the following data about Macael: "It has a medium-sized square, in which is the town hall, a primary school endowed with 750 reales; there are several springs at a short distance from the town. The Parish Church stands out, located in the center of the town and served by a parish priest and a sacristan. It includes an abandoned area known as Old Macael. In the terrain, there are well-populated pine and oak forests. There are iron mines, and above all, exquisite white and blue marble quarries, which supply marble to the Fines factory and several other workshops that elaborate it for domestic and foreign use. The roads are all bridle paths, except for one carriageway that passes over the Sierra; it has 1,154 souls and 288 neighbors."
                                    <br>
                                    The mechanization of marble processing did not begin until the mid-19th century. From 1850 onwards, the first factories or "mechanical sawing arts" of marble were installed in the Marchal stream, taking advantage of hydraulic power, later spreading to the Laroya, Macael, and Almanzora river streams.
                                    <br>
                                    The socio-economic reality of Macael's inhabitants was still peasant; the stonemasons supplemented their income by working in their "small plots"; some stonemasons and laborers went to "Las Andalucías" in the summer to work in the "harvest." Remember that in the last third of this century, marble began to be transported in ox-drawn carts; most of the carters came from Cuevas del Almanzora and Lorca. This transport system was used until the mid-20th century, with trucks then being employed.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingXX">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseXX" aria-expanded="false" aria-controls="collapseXX">
                                    Brief Reference to the 20th Century
                                </button>
                            </h2>
                            <div id="collapseXX" class="accordion-collapse collapse" aria-labelledby="headingXX" data-bs-parent="#historyAccordion">
                                <div class="accordion-body">
                                    The past century was the decisive period for the technical and economic improvements in Macael. Highlight the operation of the Guadix-Almendricos (Murcia) railway line, which promoted the transport of marble especially to Barcelona, and the use of the port of Águilas. Another important social milestone was the legalization (1903) of the "Society of Stonemasons, Marble Workers, and Similar Trades." Also noteworthy is that in 1923 there was a significant stonemasons' strike because the employers did not accept a wage increase. Remember that in 1917 the daily wage for work was 4 pesetas.
                                    <br>
                                    In the 1920s, Macael reached high levels of progress. During this period, the Olula-Macael-Tahal road was inaugurated. Electric power was also installed, modernizing factories and workshops. The population of Macael reached 3,000 inhabitants in 1930.
                                    <br>
                                    The labor composition was as follows: 268 stonemasons, 33 marble workers; 20 chisellers, 8 carters, and 195 laborers. Marble production reached 4,000 tons. In 1965, the electrification of the quarries began.
                                    <br>
                                    In the last third of the century, the mechanization and rationalization of marble extraction processes from the quarries took place. Consequently, the work of stonemasons and other professionals has become more humane. On the other hand, the defined professional profiles of the stonemason have been blurred in favor of productivity; that is, their "artisan role" is in the process of extinction.
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
                    <h2 class="display-5 text-center">Festivals and Traditions</h2>
                    <p class="lead text-center">Discover Macael's rich and varied festivities.</p>
                    <div class="accordion" id="fiestasAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Historical Recreation
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    Organized by the Macael City Council, this historical recreation aims to showcase what it means to be a Quarryman in Macael through the "Quarry Dispute." A decisive event in which quarrymen and their families, after a prolonged struggle (from 1919 to 1947), reclaimed the public nature of their quarries, communal according to tradition inherited from the Muslim era, against attempts to privatize them by local caciques.
                                    <br>
                                    With this event, the aim is to go a step further, involving participants in this historical event, making them relive it, with the goal of experiencing the pride of being a quarryman, stepping into the protagonists' shoes, and feeling this struggle as their own.
                                    <br>
                                    Macael will dress up in period attire, returning to the period between 1919 and 1947. We will find quarrymen, muleteers, carters, quarry owners, blacksmiths, stone carvers, grinders, washerwomen, and other typical characters of that time within a recreational space characterized by the most representative buildings and settings of that period.
                                    <br>
                                    In these settings, the representation will blend with the attending public, who will have the opportunity to enjoy tapas based on traditional cuisine, dance to the rhythm of music from the era (Charleston, pasodobles, mazurkas), and watch demonstrations of stonemasonry, crafts, and sculpture.
                                </div>
                                <div class="d-flex justify-content-center">
                                    <iframe class="mb-3" width="500" height="281" src="https://www.youtube.com/embed/HgzInNP6DqU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Marble Rally
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    The Macael Marble Climb is a mountain car race, held in the town of Macael-Almería, Spain, and one of the oldest events of its kind in the country. In 2024, it will have celebrated 49 editions.
                                    <br>
                                    The organizer of this car race is the Marble Club, based in the town of Macael, Almería.
                                    <br>
                                    The route of this mountain climb covers a distance of 4.5 kilometers along a winding road (AL-840) that passes through one of the area's many quarries.
                                    <br>
                                    Throughout the course and permanently throughout the year, there are used car tires to prevent race vehicles from crashing into rocks and guardrails.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Honor to the Virgin of the Rosary
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    On October 7, Macael commemorates its Patron Saint, the Virgin of the Rosary. These are the major festivities, and the town takes to the streets to venerate her image, which has been the hope and relief of quarrymen and marble workers since time immemorial.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Tribute to the Quarryman
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    It is celebrated on the first weekend of December. A traditional festival recognizing the hard work of the worker after a long working life.
                                    <br>
                                    Conferences and talks about quarry work. Popular migas (breadcrumbs) cooked with care by the town's men and women for the enjoyment and satisfaction of Macael residents and visitors.
                                    <br>
                                    Tribute ceremony and plaque presentation to retired quarrymen throughout the year.
                                    <br>
                                    Thanksgiving Mass and floral offering at the monument to the quarryman.
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
                                    April 25 is the day of San Marcos, patron saint of Macael. It is traditional to spend the day in the countryside with family and friends, and eat the traditional hornazo (an oil bread with a boiled egg in the middle).
                                    <br>
                                    The most popular meeting point is in the Rambla-Canfornal threshing floor, where a Mass is celebrated, followed by a small procession through the farmhouses in the area, singing and dancing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Carnival
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    It is one of the most anticipated festivals in the town, and each year it has more participants.
                                    <br>
                                    It is celebrated over two weekends, with a comparsas contest in the Municipal Theater and a parade with a grand costume ball and prize awards.
                                    <br>
                                    The great interest and participation of the town's people in the carnival is noteworthy, surpassing themselves each year with the originality of the costumes and the lyrics of the comparsas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Neighborhood Festivals
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    The San José Obrero neighborhood celebrates on May 1.
                                    <br>
                                    San Antonio on June 13. San Juan on June 24.
                                    <br>
                                    The Virgin of Carmen on July 16.
                                    <br>
                                    Finally, the Collado neighborhood celebrates the Virgin Mary on September 12.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Holy Week
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#fiestasAccordion">
                                <div class="accordion-body">
                                    Holy Week in Macael has a great tradition. The most striking and colorful procession is the Holy Burial on Good Friday. It is impressive to see the lit torches in the hands of the hooded penitents and the bearers climbing the steep streets of the town in strict silence. On Easter Sunday, early in the morning, the Encounter procession takes place. In it, the Virgin of the Rosary goes through part of the town in search of the images of the Risen Christ and Saint John, who await at the calvary crosses. In the reunion, the thrones are made to dance to the music of the band, under a rain of rose petals.
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
                    <h2 class="display-5">Gastronomy</h2>
                    <p class="lead">Enjoy the authentic gastronomy of Macael, from traditional migas to unique desserts.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p> On cold winter days, when the rain appears, it is customary to cook flour or bread migas, accompanied by paprika broth, fried peppers and dried tomatoes, fish, and meat slices, all washed down with good local wine. Stews are also consumed, cooked in various ways: wheat, pumpkin, and fennel, which prepare the body for a hard day's work.
                            </p>
                            <img src='https://i.ibb.co/LhpQMys/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                        </div>
                        <div class="col-md-6">
                            <p> At Christmas, traditional pastries are made, such as chicharrones and lard cakes, oil bread, sighs, and shortbread.
                            </p>
                            <img src='https://i.ibb.co/S7Wbtjy/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p>With the arrival of spring and coinciding with Holy Week, the ingredients adapt to the prohibition of meat and to the vegetable products that bloom from the orchard. Lenten stews with cod meatballs are prepared, and for dessert, fried donuts and fritters with anise.
                            </p>
                            <img src='https://i.ibb.co/SysXmsh/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                        </div>
                        <div class="col-md-6">
                            <p>On hot summer days, gazpachos and seasonal salads are refreshing. Additionally, characteristic dishes include rabbit or chicken stews and fish broth porridge, taking advantage of the peak season of vegetables.</p>
                            <img src='https://i.ibb.co/Qc8CB4c/image.png' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                        </div>
                        <div class="text-center mt-4">
                            <p> We cannot forget the famous San Marcos hornazos, an oil bread bun adorned with an egg that, according to tradition, must be broken on the head of the most unsuspecting person.</p>                   
                            <img src='https://i.postimg.cc/j2RbNjWy/hornazo-1.jpg' class="img-fluid rounded" alt='hornazo-1' style="max-width: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
