document.addEventListener("DOMContentLoaded", function(){
    if(annyang){
        annyang.setLanguage("es-MX");


        var utter = new SpeechSynthesisUtterance();
        utter.rater = 1;
        utter.pitch = 1;
        utter.setLanguage = "es-MX";

        
        const dirigirlugar = function(lugar)
        {
            switch (lugar) {
                case 'inicio':
                case 'página principal':
                    utter.text = "Muy bien, vamos a inicio";
                    window.speechSynthesis.speak(utter);
                    location.href="index.php";
                    break;
                case 'mensajes':
                    utter.text = "Muy bien, vamos a tus mensajes";
                    window.speechSynthesis.speak(utter);
                    location.href="system-chat.php";
                    break;
                case 'nuevas publicaciones':
                    utter.text = "Muy bien, vamos a crear una nueva publicación";
                    window.speechSynthesis.speak(utter);
                    location.href="publicacion.php";
                    break;
                case 'mis publicaciones':
                case 'publicaciones':
                    utter.text = "Muy bien, vamos a tus publicaciones";
                    window.speechSynthesis.speak(utter);
                    location.href="my-account.php";
                    break;
                case 'mi perfil':
                case 'mi cuenta':
                        utter.text = "Muy bien, vamos a tu perfil";
                        window.speechSynthesis.speak(utter);
                        location.href="my-account.php";
                    break;
                default:
                    utter.text = "Lo siento, no entendí a donde quieres ir";
                    window.speechSynthesis.speak(utter);
              }
        }

        const quierohacer = function(peticion)
        {
            switch (peticion) {
                case 'hacer una publicación':
                    utter.text = "Muy bien, vamos a publicar algo";
                    window.speechSynthesis.speak(utter);
                    location.href="publicacion.php"
                    break;
                case 'hacer una cuenta':
                case 'crear mi cuenta':
                case 'crear una cuenta':
                    utter.text = "Muy bien, vamos a crear una cuenta";
                    window.speechSynthesis.speak(utter);
                    location.href="sing-up.php"
                    break;
                case 'iniciar sesión':
                    utter.text = "Muy bien, vamos a iniciar sesión";
                    window.speechSynthesis.speak(utter);
                    location.href="sing-in.php"
                    break;
                default:
                    utter.text = "Lo siento, no lo tengo claro";
                    window.speechSynthesis.speak(utter);
              }
        }
        const haceralgo = function(duda)
        {
            switch (duda) {
                case 'hacer un reporte':
                    utter.text = "Primero debes ingresar a la publicación que quieres reportar, en la parte posterior veras un botón que dice levantar reporte, le das click y te llevará a una página en donde deberás explicar porque lo reportas y opcionalmente dar más información detallada para que uno de nuestros administradores lleve a cabo acciones.";
                    window.speechSynthesis.speak(utter);
                    break;
                case 'cerrar sesión':
                case 'terminar mi sesión':
                    utter.text = "Para cerrar sesión tienes que ir al apartado de 'mi cuenta', ir abajo de la página y presionar el botón que dice cerrar sesión. Puedo llevarte allí, solo dime ir a mi cuenta";
                    window.speechSynthesis.speak(utter);
                    break;
                case 'publicar':
                case 'hacer una publicación':
                    utter.text = "Lo primero que se necesita es una cuenta para iniciar sesión y así poder tener un registro de tus publicaciones, solo dime quiero crear una cuenta y te llevaré al formulario. Después en la barra superior del sitio verás la opción llamada nuevas publicaciones en donde podrás subir el objeto que estas buscando o has encontrado."
                    window.speechSynthesis.speak(utter);
                    break;
                default:
                    utter.text = "Lo siento, no te entendí bien";
                    window.speechSynthesis.speak(utter);
              }
        }
        let comandos ={
            'hola': function() {
                utter.text = "Hola soy BOB, estoy aquí para ayudarte";
                window.speechSynthesis.speak(utter);
 
            },
            'Oye Bob': function() {
                utter.text = "Dime, te escucho";
                window.speechSynthesis.speak(utter);
 
            },
            'qué puedes hacer': function() {
                utter.text = "Puedo llevarte a alguna parte del sitio web, explicarte como funciona la página y sus funciones solo dime que quieres hacer";
                window.speechSynthesis.speak(utter);
            },
            'dime una función': function() {
                opciones=['Puedes publicar un objeto o mascota que perdiste o encontraste, solo dime "Quiero hacer una publicación y te llevaré a donde necesitas"', '"Puedo saludarte, solo di "Hola"', "Puedes decir ir a mi cuenta o cualquier parte del sitio y te llevaré alli", "preguntame ¿cómo puedo...? seguido de lo que quieras hacer y te ayudare a resolverlo"];
                utter.text = opciones[Math.floor(Math.random() * opciones.length)]
                window.speechSynthesis.speak(utter);
            },
            'cómo funciona': function(){
                utter.text="En Busca y Encuentra las personas pueden publicar pertenecias que han perdido y esperar que alguien les contacte con información acerca de ellas, por otra parte pueden buscar si alguien más ya había publicado el objeto que les pertenece y llegar a un acuerdo para la entrega del mismo. Si has encontrado un objeto que no te pertenece y buscas a su dueño, también puedes hacer una publicación a la espera que su dueño te contacte.";
                window.speechSynthesis.speak(utter);
            },
            'Qué hago si encontré una publicación con una de mis pertenencias': function(){
                utter.text="Es necesario tener una cuenta registrada, por lo que si aún no la tienes te invitamos a que te registres, posteriormente presiona el botón de 'enviar un mensaje' en la publicación de tu interés y comenzarás a contactarte con la persona que encontró tu pertenecia.";
                window.speechSynthesis.speak(utter);
            },
            'Hacen envíos': function(){
                utter.text="No, la página ofrece la facilidad de contactarte con la persona que está buscando o encontró una pertenecia, el acuerdo para la entrega o recolección se trata directamente con esa persona.";
                window.speechSynthesis.speak(utter);
            },
            'ir a *lugar': dirigirlugar,
            'cómo puedo *hacer': haceralgo,
            'quiero *peticion': quierohacer
        };
       
        annyang.addCallback('result', function(userSaid, commandText, phrases) {
            console.log("El usuario probablemente dijo: ",userSaid); // sample output: 'hello'
          });

        annyang.addCommands(comandos);
    
    
        annyang.start();
    }
    else
    {
        return alert("Lo sentiemos, tu navegador no soporta el reconocimiento de voz intenta ingresar con Google Chrome");
    }
});
