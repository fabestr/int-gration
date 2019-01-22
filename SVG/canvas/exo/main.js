'use strict';


var canvas = document.getElementById('my-canvas');
var context = canvas.getContext('2d');

context.fillStyle = '#333' ;
context.fillRect(10, 10, 620, 620);


context.strokeStyle = "#999";
context.lineWidth = 5;
context.setLineDash([20 , 20]);
context.lineDashOffset = 10;
context.lineJoin = 'round';
context.lineCap ='round';

context.beginPath();
context.moveTo(220, 20);
context.lineTo(220,620 );
context.moveTo(420,20);
context.lineTo(420,620);
context.stroke();
context.closePath();

context.beginPath();
context.moveTo(20, 220);
context.lineTo(620,220 );
context.moveTo(20,420);
context.lineTo(620,420);
context.stroke();
context.closePath();

context.save();






function croix(x,y){

    context.setLineDash([]);
    
    context.beginPath();
    context.moveTo(x-50, y-50);
    context.lineTo(x+50, y+50);
    context.moveTo(x+50, y-50);
    context.lineTo(x-50, y+50);
    context.stroke();
    context.closePath();

}

function circle(x,y){

    context.setLineDash([]);
    context.beginPath();
    context.arc(x, y, 70, 0, Math.PI*2, true);
    context.stroke();
    context.closePath();
}

/*  var hue = 0;
for(var i = 0 ; i < 3; i++){
    

    for(var j = 0; j < 3 ; j++){
        context.strokeStyle = 'hsl('+hue+',75%,50%)';
        hue +=20;
        var shuffle = Math.random();
        if(shuffle <=0.5){
            circle((200*i)+120,(200*j)+120);
        }else{
            croix((200*i)+120,(200*j)+120);
        }
    }
} */

canvas.addEventListener('click',onClickPosition);

var isDrawing = true;

var tab = [];
 
function onClickPosition(event) {

    var location = {  x: event.offsetX , y: event.offsetY };    
    var i = Math.round((location.x-120)/200);
    var j = Math.round((location.y-120)/200);

    var x = (200*i)+120;
    var y = (200*j)+120;

  /*   console.log(location); */
    if(isDrawing == true){

        circle(x,y);
        isDrawing = false;
        tab.push(location);
        console.log('rond',tab);
    }else{
        croix(x,y);
        isDrawing = true;
        tab.push(location);
        console.log('croix',tab);
    }
    

}





