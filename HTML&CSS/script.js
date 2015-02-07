/**
 * Created by Petrosyan on 07.02.15.
 */
function setColor(){
    var col = document.getElementById('color').value;
    console.log(col);
    document.getElementById('body').style.backgroundColor = col;
}