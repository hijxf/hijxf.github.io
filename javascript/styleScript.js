/**
 * Created by Jef on 10/23/2015.
 */

function changeText() {
    var texty = document.getElementById("helloGoodbye");
    if (texty.innerHTML === "hello") {
        texty.innerHTML = "goodbye"
    } else {
        texty.innerHTML = "hello"
    }
}