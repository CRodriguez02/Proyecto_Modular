document.addEventListener("DOMContentLoaded", function(){
    if(annyang){
        annyang.setLanguage("es-MX");
 
        var utter = new SpeechSynthesisUtterance();
        utter.rater = 1;
        utter.pitch = 1;
        utter.setLanguage = "es-MX";
        var comandos ={
            'hola': function() {
                utter.text = "Hola soy BOB, estoy aquí para ayudarte";
                window.speechSynthesis.speak(utter);
 
            },
            'qué puedes hacer': function() {
                utter.text = "Puedo llevarte a alguna parte del sitio web, explicarte como funciona la página y sus funciones solo dime que quieres hacer";
                window.speechSynthesis.speak(utter);
            },
            'dime una función': function() {
                opciones=['Puedes publicar un objeto o mascota que perdiste o encontraste, solo dime "Quiero hacer una publicación y te llevaré a donde necesitas"', '"Puedo saludarte, solo di "Hola"', "opcion 3", "opcion 4"];
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
            'quiero hacer una publicación': function(){
                location.href="publicacion.php"
            },
            'ir a inicio': function(){
                location.href="index.php"
            },
            'quiero crear mi cuenta': function(){
                location.href="sing-up.php"
            }
        };

        annyang.addCallback('result', function(userSaid, commandText, phrases) {
            console.log("El usuario probablemente dijo: ",userSaid); // sample output: 'hello'
            console.log("Comando de texto: ",commandText); // sample output: 'hello (there)'
            console.log("Frases que dijo: ",phrases); // sample output: ['hello', 'halo', 'yellow', 'polo', 'hello kitty']
          });

        annyang.addCommands(comandos);
    
    
        annyang.start();
    }
    else
    {
        return alert("Lo sentiemos, tu navegador no soporta el reconocimiento de voz intenta ingresar con Google Chrome");
    }
});
