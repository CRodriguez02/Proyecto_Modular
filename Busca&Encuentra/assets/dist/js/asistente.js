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
                utter.text = "muchas cosas wuuuuu";
                window.speechSynthesis.speak(utter);
            },
            'dime una función': function() {
                opciones=['Puedes publicar un objeto o mascota que perdiste o encontraste, solo dime "Quiero hacer una publicación y te llevaré a donde necesitas"', '"Puedo saludarte, solo di "Hola"', "opcion 3", "opcion 4"];
                utter.text = opciones[Math.floor(Math.random() * opciones.length)]
                window.speechSynthesis.speak(utter);
            },
            'quiero hacer una publicación': function(){
                location.href="publicacion.php"
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
