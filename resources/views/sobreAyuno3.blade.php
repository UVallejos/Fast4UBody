@extends("layouts.landing")
@section("title", "Sobre el Ayuno")

@section('content')
<br>
<div class="container-fluid">
    <div class="row flex shadow p-3 mb-5 bg-body rounded">
        <aside class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" id="asideNav">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 sticky-md-top" id="sidemenu">
                <a href="#SobreAyuno" class="nav-link align-middle px-0">Sobre el Ayuno</a>
                <ul  class="nav flex-md-column flex-row justify-content-between ">
                    <li class=""><a class="nav-link" href="#01">Los Orígenes del Ayuno</a></li>
                    <li class=""><a class="nav-link" href="#02">La Autofagia</a></li>
                    <li class=""><a class="nav-link" href="#03">Diferencia entre Ayuno e Inanición</a></li>
                    <li class=""><a class="nav-link" href="#04">¿Cómo empezar?</a></li>
                    <li class=""><a class="nav-link" href="#05">Los diferentes tipos de Ayuno</a></li>
                    <li class=""><a class="nav-link" href="#06">Consejos para romper el Ayuno</a></li>
                </ul>
                <a href="#PreguntasFrecuentes" class="nav-link align-middle px-0">Preguntas y Respuestas</a>
                <a href="#Noticias" class="nav-link align-middle px-0">Noticias</a>
            </div>
        </aside>
        

        <div class="col-md-9">
            <div class="row">
                <div class="col">
                    <div class="py-3" id="SobreAyuno">
                        <h1 class="display-3 text-center mb-3">Sobre el Ayuno</h1>
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                                <div id="01"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/origenes_ayuno.jpg"))
                                    @slot("alt", "ilustración griega")
                                    @slot("title", "Los Origenes del Ayuno")
                                    @slot("content")
                                    El ayuno intermitente, una práctica que consiste en abstenerse de comer durante ciertos períodos de tiempo, se ha convertido en una tendencia popular en la búsqueda de la salud y el bienestar. Pero, <b>¿De dónde proviene esta práctica ancestral?</b> Los orígenes del ayuno se remontan a miles de años atrás y tienen una larga tradición en la cultura griega.

                                    En la antigua Grecia, el ayuno era considerado una forma de disciplina espiritual para purificar el alma y alejar a los demonios que se habían apoderado del cuerpo a través de comer en exceso y beber. Los efectos positivos del ayuno también se notaron en la mejora de la salud y en la liberación de energía.
                                    
                                    Además, el ayuno se utilizaba como una forma de acercarse a los dioses y abrir la mente a la inspiración divina. Por ejemplo, la pitonisa del oráculo de Delphi fortalecía su mirada en el futuro ayunando. Los filósofos griegos también emplearon el ayuno para mejorar su percepción e inteligencia. Pitágoras, por ejemplo, ayunó durante 40 días antes de sus exámenes y dejó que sus alumnos ayunaran para agudizar su percepción.
                                    
                                    El ayuno también tiene un lugar destacado en la religión cristiana, donde se practica como una forma de arrepentimiento y de mostrar solidaridad por los demás. Los cristianos ayunan durante la Cuaresma para recordar el sacrificio de Jesús y expresar su gratitud.
                                    
                                    Durante el Renacimiento, el ayuno se utilizó como una alternativa a la medicina tradicional y se empleó para tratar enfermedades como el cáncer y la diabetes. En la actualidad, el ayuno intermitente se ha convertido en una forma de vida para muchas personas, que lo practican con el objetivo de mejorar su salud y bienestar y vivir una vida más sana y equilibrada.
                                    @endslot
                               @endcomponent
                               <br>
                               <div id="02"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/autofagia.jpg"))
                                    @slot("alt", "ilustración de uroboros")
                                    @slot("title", "La Autofagia y el Rejuvenecimiento Celular")
                                    @slot("content")
                                    La palabra Aufagia, es derivada del griego, hace referencia a la idea de <b>'comerse a uno mismo'</b>, que sería el mecanismo por el que las células de nuestro cuerpo se degradan y reciclan sus propios componentes.

                                    En 2016, el japonés Yoshinori Ohsumi recibió el Premio Nobel de Medicina por sus descubrimientos relacionados con la autofagia celular. A pesar de que muchos no estén familiarizados con el término, la autofagia es un proceso crucial para la salud celular y el rejuvenecimiento. Una forma de activar este proceso es a través del ayuno intermitente.
                                    
                                    El ayuno intermitente consiste en alternar períodos de alimentación normal con períodos de ayuno. Esta práctica ha demostrado tener beneficios para la salud, como la pérdida de peso, la mejora de la sensibilidad a la insulina y la reducción del riesgo de enfermedades crónicas como la diabetes y la enfermedad cardiovascular.
                                    
                                    Además, el ayuno intermitente también ha sido asociado con la activación de la autofagia. <b>Durante el ayuno, el cuerpo utiliza las reservas de glucógeno como fuente de energía, lo que conduce a la privación de nutrientes en las células.</b> Esto activa la vía de la autofagia, lo que permite que las células reciclen componentes celulares dañados o envejecidos para obtener energía.
                                    
                                    La activación de la autofagia durante el ayuno intermitente puede tener efectos beneficiosos en la salud y el envejecimiento. Se ha demostrado que el ayuno intermitente mejora la función cognitiva y reduce la aparición de enfermedades neurodegenerativas en ratones. Además, el ayuno intermitente también puede reducir la inflamación y mejorar la salud cardiovascular.
                                    
                                    Sin embargo, es importante tener en cuenta que el ayuno intermitente no es adecuado para todas las personas y se debe realizar con precaución. Las personas con ciertas condiciones médicas, como la diabetes, pueden experimentar hipoglucemia durante el ayuno y deben consultar con un profesional médico antes de comenzar esta práctica. Además, es importante asegurarse de que se están consumiendo suficientes nutrientes durante los períodos de alimentación para evitar deficiencias nutricionales.
                                    
                                    @endslot
                               @endcomponent
                               <br>
                               <div id="03"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/ayuno_diferencias.jpg"))
                                    @slot("alt", "img de duda")
                                    @slot("title", "Diferencia entre ayuno e inanición")
                                    @slot("content")
                                    El ayuno es una práctica cada vez más popular en la sociedad actual debido a los beneficios que se le atribuyen para la salud. Sin embargo, es importante entender la diferencia entre el ayuno y la inanición para evitar poner en riesgo nuestro organismo. En este artículo explicaremos la diferencia entre ambos términos y cómo hacer un ayuno de forma responsable y efectiva.
                                    
                                    <b>¿Qué es el ayuno?</b>
                                    
                                    El ayuno se define como la abstinencia voluntaria del alimento durante un período determinado de tiempo. Durante este período, el organismo comienza a consumir sus reservas de grasa y músculo, sin afectar las estructuras de los órganos vitales como el corazón, cerebro, pulmones y sistema nervioso.
                                    
                                    <b>¿Cuál es la diferencia entre ayuno e inanición?</b>
                                    
                                    La inanición es el período posterior al ayuno, cuando este se prolonga anormalmente. Si el organismo agota sus reservas, comenzará a consumir los órganos vitales antes mencionados, llevando a la muerte. Por lo tanto, el ayuno prolongado o irresponsable puede llevar a la inanición, lo cual es peligroso para la salud.
                                    
                                    @endslot
                               @endcomponent
                               <br>
                               <div id="04"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/empezar.jpg"))
                                    @slot("alt", "donde empezar")
                                    @slot("title", "¿Cómo empezar con el Ayuno intermitente?")
                                    @slot("content")
                                    Puede ser un desafío saber por dónde empezar a realizar esta sana práctica. Esta es una guía para principiantes, para entender lo que es el Ayuno Intermitente y cómo puedes empezar a hacerlo de forma segura y efectiva.

                                    1- <b>Elige un método que se adapte a ti:</b> Como se mencionó anteriormente, hay varios métodos de Ayuno Intermitente. Elige el que mejor se adapte a tu estilo de vida y objetivos.
                            
                                    2- <b>Comienza lentamente:</b> Si nunca has ayunado antes, es importante comenzar lentamente. Empieza por ayunar durante 12 horas y luego aumenta gradualmente la duración de tu ayuno.
                            
                                    3- <b>Hidrátate:</b> Durante el ayuno, es importante mantenerse hidratado. Bebe mucha agua, té o café sin azúcar.
                            
                                    4- <b>No te excedas en la comida:</b> Cuando rompas tu ayuno, no te excedas en la comida. Comienza con comidas ligeras y saludables y aumenta gradualmente tu ingesta calórica a medida que tu cuerpo se adapte.
                            
                                    5- <b>Sé consistente:</b> La consistencia es clave cuando se trata de Ayuno Intermitente. Intenta mantener un horario de ayuno y alimentación constante para obtener mejores resultados.
                                    @endslot
                                    
                                    
                               @endcomponent
                               <br>
                               <div id="05"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/tipos_de_ayuno.jpg"))
                                    @slot("alt", "donde empezar")
                                    @slot("title", "Los diferentes tipos de Ayuno")
                                    @slot("content")
                                    El ayuno intermitente se ha convertido en una práctica muy popular en los últimos años debido a sus múltiples beneficios para la salud. Una de las ventajas más interesantes es que existen diferentes tipos de ayuno, por lo que es posible elegir el que mejor se adapte a las necesidades y preferencias de cada persona.

                                    <b>Ayuno intermitente 12:12:</b>
                                    Uno de los tipos de ayuno más sencillos es el ayuno intermitente 12:12. Como su nombre indica, se trata de ayunar durante 12 horas al día y comer en las 12 horas restantes. Esta opción es ideal para quienes quieren mejorar su consciencia alimentaria y mantener su masa muscular, pero no llegará a la cetosis.

                                    <b>Ayuno intermitente 16:08:</b>
                                    Otro tipo de ayuno intermitente muy popular es el 16:8, que consiste en ayunar durante 16 horas al día y comer en las 8 horas restantes. Durante el ayuno, se pueden tomar bebidas sin calorías. Una de las ventajas de esta modalidad es que permite llegar a la cetosis, lo que ayuda a quemar grasas de forma eficiente y a regular el nivel de azúcar en sangre.

                                    <b>Ayuno intermitente 18:06:</b>
                                    Si se quiere aumentar la duración del ayuno, se puede optar por el ayuno intermitente 18:6. En este caso, se ayuna durante 18 horas al día y se come en las 6 horas restantes. Es importante planificar bien las comidas para no sufrir mareos o desequilibrios nutricionales.

                                    <b>Ayuno intermitente 20:04:</b>
                                    Para quienes buscan un ayuno más estricto, está el ayuno intermitente 20:4. En este caso, se ayuna durante 20 horas al día y se come en las 4 horas restantes. Esta opción es muy efectiva para la autofagia, un proceso mediante el cual las células se regeneran, pero no se recomienda para personas con predisposición a trastornos de la conducta alimentaria.

                                    <b>Ayuno de un día:</b>
                                    Por último, está el ayuno de un día, que consiste en no comer nada durante 24 horas consecutivas. Esta práctica es muy beneficiosa para reducir la inflamación y aumentar el efecto antioxidante del organismo, pero es importante consultar con un médico antes de realizarlo.
                                    
                                    <b>¿Que es la cetosis?</b>
                                    La cetosis es un estado metabólico en el cual el cuerpo comienza a utilizar principalmente cetonas como fuente de energía en lugar de glucosa. Normalmente, el cuerpo obtiene su energía de los carbohidratos que se consumen en la dieta, ya que estos se descomponen en glucosa para ser utilizada como combustible.
                                    
                                    La cetosis puede tener varios beneficios, puede ayudar a promover la pérdida de peso y mejorar la sensibilidad a la insulina.
                                    
                                    @endslot
                               @endcomponent
                               <br>
                               <div id="06"></div>
                               @component("_components.card_sobreAyuno")
                                    @slot("src", asset("assets/img/romper-ayuno.jpg"))
                                    @slot("alt", "donde empezar")
                                    @slot("title", "Consejos para romper el Ayuno")
                                    @slot("content")
                                    Si estás practicando el ayuno intermitente, es importante que sepas cómo romper el ayuno de forma saludable para no dañar tu cuerpo y sacar el máximo provecho a tu dieta. A continuación, te ofrecemos algunos consejos para que sepas qué comer después de tu ayuno.

                                    <b>1. Proteínas</b>

                                    Las proteínas son esenciales para el desarrollo muscular y para mantenerte saciado durante el día. Después de pasar horas sin comer, lo ideal es elegir proteínas sin grasas y de alto valor biológico como carnes magras, pavo, pollo, pescado y huevos.

                                    Los huevos son una excelente opción si tu ayuno finaliza en horas de la mañana, ya que te aportarán energía y muchos nutrientes para comenzar el día. Además, puedes combinarlos con vegetales, panes integrales o versiones alternativas de panes como el pan de berenjena o el pan de aguacate y calabacín.

                                    <b>2. Grasas saludables</b>

                                    Las grasas cumplen funciones esenciales dentro del organismo, por lo que se acoplan muy bien a nuestra primera comida post-ayuno, pero es importante tener cuidado. No se trata de consumir alimentos fritos en aceites saturados, sino de complementar el plato con grasas saludables de origen vegetal como el aguacate, el aceite de coco, el aceite de oliva extra virgen, frutos secos (nueces, almendras, avellanas) y semillas (lino, sésamo, quínoa, calabaza).

                                    <b>3. Carbohidratos</b>

                                    Los carbohidratos son la principal fuente de energía del cuerpo, por lo que es importante incluirlos en la primera comida después del ayuno, aunque debes reducir la porción y seleccionar panes y cereales integrales (avena, cebada, etc.), frutas y miel.

                                    Recuerda que existen alimentos que debes evitar después de un ayuno intermitente:
                                    <ul class="list-unstyled">
                                        <li><b>Azúcar:</b> evita alimentos azucarados como la bollería, el pan blanco, las galletas, los pasteles, los zumos y los yogures azucarados, ya que aumentan la glucosa en la sangre, fomentando la inflamación y la resistencia a la insulina.</li>
                                        <li><b>Alimentos procesados:</b> evita enlatados, bebidas energéticas, carnes procesadas, alimentos congelados y embutidos, ya que no aportan ningún nutriente y contienen aditivos, químicos y conservantes que pueden afectar la salud.</li>
                                        <li><b>Alcohol:</b> evita el consumo de alcohol después de un ayuno, ya que proporciona altas concentraciones tóxicas que pasan directo al sistema circulatorio.</li>
                                        <li><b>Exceso de fibra:</b> debes regular la ingesta de fibra después de culminar el ayuno, ya que si te excedes, podrías provocar inflamaciones, dolor abdominal y trastornos intestinales.</li>
                                    </ul>
                                    @endslot
                               @endcomponent
                               <br>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="py-3" id="PreguntasFrecuentes">
                        <h1 class="display-3 text-center mb-3">Preguntas y Respuestas</h1>
                        <div class="container">
                            <div class="row justify-content-center align-items-center g-2">
                            <img src="{{ asset('assets/img/preguntas-respuestas.jpg') }}" class="img-fluid" width="" alt="...">
                                            <div class="col fuente_grande">
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "1")
                                                    @slot("pregunta", "¿Qué es el ayuno intermitente?")
                                                    @slot("respuesta", "El ayuno intermitente es una práctica alimenticia en la que se alternan períodos de ayuno con períodos de alimentación normal. Los períodos de ayuno pueden variar desde unas pocas horas hasta varios días.")
                                                @endcomponent
    
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "2")
                                                    @slot("pregunta", "¿Cuáles son los beneficios del ayuno intermitente?")
                                                    @slot("respuesta", "Entre los beneficios del ayuno intermitente se encuentran la pérdida de peso, la mejora de la sensibilidad a la insulina, la reducción del riesgo de enfermedades cardiovasculares y la promoción de la longevidad.")
                                                @endcomponent
    
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "3")
                                                    @slot("pregunta", "¿Cómo se hace el ayuno intermitente?")
                                                    @slot("respuesta", "Existen diferentes formas de hacer el ayuno intermitente, pero una de las más comunes es la restricción del tiempo de alimentación a una ventana de 8 horas al día, dejando las 16 horas restantes para el ayuno.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "4")
                                                    @slot("pregunta", "¿Puedo beber agua durante el ayuno intermitente?")
                                                    @slot("respuesta", "Sí, se recomienda beber suficiente agua durante el ayuno intermitente para mantenerse hidratado y ayudar a controlar el hambre.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "5")
                                                    @slot("pregunta", "¿Puedo tomar café o té durante el ayuno intermitente?")
                                                    @slot("respuesta", "Depende del tipo de ayuno intermitente que estés haciendo. Si estás haciendo un ayuno de agua, entonces debes evitar cualquier tipo de bebida que contenga calorías. Sin embargo, si estás haciendo un ayuno intermitente más flexible, puedes tomar café o té sin azúcar o crema durante el período de ayuno.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "6")
                                                    @slot("pregunta", "¿Qué debo comer para romper el ayuno intermitente?")
                                                    @slot("respuesta", "Es recomendable comer alimentos de calidad como proteínas magras, grasas saludables y carbohidratos complejos. Debes evitar los alimentos procesados, el azúcar y el alcohol para asegurar una recuperación saludable.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "7")
                                                    @slot("pregunta", "¿Es seguro hacer ayuno intermitente?")
                                                    @slot("respuesta", "Sí, el ayuno intermitente es seguro para la mayoría de las personas, siempre y cuando se sigan ciertas pautas y se haga de manera responsable. Sin embargo, si tienes alguna condición médica o estás tomando algún medicamento, es importante hablar con tu médico antes de comenzar cualquier práctica alimenticia nueva.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "8")
                                                    @slot("pregunta", "¿Puedo hacer ejercicio durante el ayuno intermitente?")
                                                    @slot("respuesta", "Sí, se puede hacer ejercicio durante el ayuno intermitente. De hecho, muchos atletas y culturistas realizan entrenamientos en estado de ayuno para mejorar el rendimiento y aumentar la quema de grasa.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "9")
                                                    @slot("pregunta", "¿Cuánto tiempo tarda en notarse los efectos del ayuno intermitente?")
                                                    @slot("respuesta", "Los efectos del ayuno intermitente pueden variar según la persona y la forma en que se realice el ayuno. Algunas personas pueden notar cambios en el apetito y la energía desde la primera semana, mientras que otros pueden tardar semanas o incluso meses en ver resultados significativos en la pérdida de peso o la mejora de la salud.")
                                                @endcomponent
    
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "10")
                                                    @slot("pregunta", "¿Qué puedo hacer si me duele la cabeza?")
                                                    @slot("respuesta", "Asegúrate de beber suficiente líquido. Muchas veces ayuda disolver una pizca de sal en el agua. Esto le aporta al cuerpo electrolitos importantes.")
                                                @endcomponent
                                                

                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "11")
                                                    @slot("pregunta", "¿Cuáles son las posibles complicaciones del ayuno intermitente?")
                                                    @slot("respuesta", "Si se hace de manera responsable y se siguen las pautas adecuadas, el ayuno intermitente es seguro para la mayoría de las personas. Sin embargo, algunas personas pueden experimentar dolores de cabeza, mareos, fatiga, irritabilidad o dificultad para concentrarse durante el período de ayuno. También es importante evitar el ayuno intermitente si estás embarazada o en periodo de lactancia, o si tienes una condición médica que pueda verse afectada por el ayuno intermitente.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "12")
                                                    @slot("pregunta", "¿Puedo hacer ayuno intermitente si estoy tratando de aumentar mi masa muscular?")
                                                    @slot("respuesta", "El ayuno intermitente puede ser beneficioso para la pérdida de peso y la mejora de la sensibilidad a la insulina, pero puede ser más difícil de combinar con una rutina de entrenamiento de fuerza para aumentar la masa muscular. Si tu objetivo es aumentar la masa muscular, es recomendable hablar con un nutricionista o entrenador personal para encontrar la mejor forma de integrar el ayuno intermitente en tu plan de entrenamiento.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "13")
                                                    @slot("pregunta", "¿Puedo hacer ayuno intermitente si tengo diabetes?")
                                                    @slot("respuesta", "Si tienes diabetes, es importante hablar con tu médico antes de hacer ayuno intermitente, ya que puede afectar los niveles de azúcar en sangre. Algunos estudios han demostrado que el ayuno intermitente puede ayudar a mejorar la sensibilidad a la insulina y reducir el riesgo de enfermedades cardiovasculares en personas con diabetes tipo 2, pero es importante hacerlo bajo supervisión médica.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "13")
                                                    @slot("pregunta", "¿El ayuno intermitente es adecuado para todas las personas?")
                                                    @slot("respuesta", "No, el ayuno intermitente no es adecuado para todas las personas. Las mujeres embarazadas o en periodo de lactancia, las personas con un historial de trastornos alimentarios y las personas con diabetes o enfermedades crónicas deben hablar con un profesional de la salud antes de comenzar cualquier práctica alimenticia nueva.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "14")
                                                    @slot("pregunta", "¿Puedo perder masa muscular con el ayuno intermitente?")
                                                    @slot("respuesta", "Si se hace de manera adecuada, el ayuno intermitente no debería provocar la pérdida de masa muscular. De hecho, algunos estudios sugieren que el ayuno intermitente puede incluso ayudar a preservar la masa muscular durante la pérdida de peso.")
                                                @endcomponent
                                                
                                                @component('_components.lista_preguntas')
                                                    @slot("id", "15")
                                                    @slot("pregunta", "¿Es necesario hacer ayuno intermitente todos los días?")
                                                    @slot("respuesta", "No, no es necesario hacer ayuno intermitente todos los días. Muchas personas optan por hacer ayuno intermitente dos o tres veces por semana, o incluso una vez al mes. Lo más importante es encontrar un régimen que funcione para ti y que puedas mantener a largo plazo.")
                                                @endcomponent
    
                                                @component('_components.lista_preguntas')  
                                                    @slot("id", "16")
                                                    @slot("pregunta", "¿A qué velocidad pierdo peso?")
                                                    @slot("respuesta", "Eso varía mucho de una persona a otra. El peso corporal depende de muchos factores, especialmente del contenido de agua del cuerpo. Ten paciencia y dale a tu cuerpo el tiempo que necesita para adaptarse. Una pérdida de peso saludable y duradera es de unos 0,5-1 kg a la semana. Las fluctuaciones también son algo totalmente normal y forman parte de tu camino.")
                                                @endcomponent
                                            </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="py-3" id="Noticias">
                        <h1 class="display-3 text-center mb-3">Noticias</h1>
                        <div class="row justify-content-center align-items-center g-2">
                        <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://www.mundodeportivo.com/files/image_948_465/files/fp/uploads/2022/12/02/6389f396837c7.r_d.3307-2963.jpeg")
                                                    @slot("title", "Descubren consecuencias negativas en el ayuno intermitente: ¿puede afectar a la fertilidad?")
                                                    @slot("route", "https://www.mundodeportivo.com/vidae/nutricion/20230429/1001994680/descubren-consecuencias-negativas-ayuno-intermitente-afectar-fertilidad-act-pau.html")
                                                    @slot("content", "Lee la Noticia de Mundo Deportivo haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/fasting-ayuno-pautas-peligros-1568283709.jpg?resize=768:*")
                                                    @slot("title", "Ayuno intermitente: beneficios, mitos y pautas para hacerlo bien")
                                                    @slot("route", "https://www.womenshealthmag.com/es/nutricion-dietetica/a29017749/ayuno-intermitente-seguro-fasting/")
                                                    @slot("content", "Lee la Noticia de Womens Health haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-1673284911.jpg?resize=768:*")
                                                    @slot("title", "Ayuno intermitente: qué es, cómo se hace y todos sus beneficios")
                                                    @slot("route", "https://www.menshealth.com/es/nutricion-dietetica/a29759088/perder-peso-caso-real-ayuno-intermitente/")
                                                    @slot("content", "Lee la Noticia de Mens Health haciendo clic aquí")
                                                @endcomponent
    
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://phantom-elmundo.unidadeditorial.es/18b67f6c471d1d072984a4ab1d70ffd8/resize/473/f/webp/assets/multimedia/imagenes/2023/04/21/16820684072548.jpg")
                                                    @slot("title", "La espectacular transformación física de Luis Miguel: el cantante ha adelgazado 20 kilos gracias al ayuno intermitente")
                                                    @slot("route", "https://www.elmundo.es/vida-sana/bienestar/2023/04/21/644253a221efa0697c8b4586.html")
                                                    @slot("content", "Lee la Noticia de El Mundo  haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://fotografias.larazon.es/clipping/cmsimages02/2022/11/10/A5C0EFCE-7C7C-4B39-9576-A43CB848E964/97.jpg?crop=1920,1080,x0,y100&width=1600&height=900&optimize=low&format=webply")
                                                    @slot("title", "¿Cómo deben hacer las mujeres el ayuno intermitente según su edad?")
                                                    @slot("route", "https://www.larazon.es/lifestyle/belleza/como-deben-hacer-mujeres-ayuno-intermitente-segun-edad_2023042564478ec22e790c0001986c0b.html")
                                                    @slot("content", "Lee la Noticia de La Razon haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://cflvdg.avoz.es/sc/rxcuy5pPGyzdyqbAotm0R1PnvMI=/768x/2023/04/03/00121680535369855798260/Foto/doctormera.png")
                                                    @slot("title", "Vicente Mera, especialista en envejecimiento: «Recomiendo hacer ayuno intermitente un día a la semana, no más»")
                                                    @slot("route", "https://www.lavozdegalicia.es/noticia/lavozdelasalud/vida-saludable/2023/04/07/vicente-mera-especialista-envejecimiento-estilo-vida-doble-importante-genetica/00031680856411994223465.htm")
                                                    @slot("content", "Lee la Noticia de La Voz de Galicia haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                        </div>
                                        <div class="row justify-content-center align-items-center g-2">
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://www.moncloa.com/wp-content/webpc-passthru.php?src=https://www.moncloa.com/wp-content/uploads/2023/04/ayuno-intermitente-popular-1024x683.jpeg&nocache=1")
                                                    @slot("title", "Cómo saber si es mejor una dieta o ayuno intermitente para tu línea y salud")
                                                    @slot("route", "https://www.moncloa.com/2023/04/25/dieta-ayuno-intermitente-salud-1953142/")
                                                    @slot("content", "Lee la Noticia de La Moncloa haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://i.blogs.es/b5467c/richard-bell-nxhwphkj1yc-unsplash-1-/1366_2000.jpeg")
                                                    @slot("title", "La verdad sobre el ayuno intermitente para adelgazar: resolviendo si sus beneficios tienen base científica o son puro bombo")
                                                    @slot("route", "https://www.xataka.com/medicina-y-salud/verdad-ayuno-intermitente-para-adelgazar-resolviendo-sus-beneficios-tienen-base-cientifica-puro-bombo")
                                                    @slot("content", "Lee la Noticia de Xataka haciendo clic aquí")
                                                @endcomponent
                                            </div>
                                            <div class="col">
                                                @component('_components.card_index')
                                                    @slot("src", "https://eresmama.com/wp-content/uploads/2023/04/ayuno-intermitente-768x512.jpg?auto=webp&quality=45&width=1920&crop=16:9,smart,safe")
                                                    @slot("title", "Ayuno intermitente: ¿es seguro para adolescentes?")
                                                    @slot("route", "https://eresmama.com/ayuno-intermitente-adolescentes/")
                                                    @slot("content", "Lee la Noticia de Eres Mamá haciendo clic aquí")
                                                @endcomponent
                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
