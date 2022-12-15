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
                    utter.text = "Muy bien, vamos a inicio";
                    window.speechSynthesis.speak(utter);
                    location.href="index.php";
                    break;
                case 'mi perfil':
                case 'mi cuenta':
                        utter.text = "Muy bien, vamos a tu perfil";
                        window.speechSynthesis.speak(utter);
                        location.href="my-account.php";
                    break;
                case 'mis publicaciones':
                        utter.text = "Muy bien, vamos a tus publicaciones";
                        window.speechSynthesis.speak(utter);
                        location.href="my-account.php";
                    break;
                default:
                    utter.text = "Lo siento, no lo tengo claro";
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
                default:
                    utter.text = "Lo siento, no lo tengo claro";
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
                opciones=['Puedes publicar un objeto o mascota que perdiste o encontraste, solo dime "Quiero hacer una publicación y te llevaré a donde necesitas"', '"Puedo saludarte, solo di "Hola"', "Puedes decir ir a mi cuenta o cualquier parte del sitio y lo haré por ti"];
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
            'ir a *lugar': dirigirlugar,
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
