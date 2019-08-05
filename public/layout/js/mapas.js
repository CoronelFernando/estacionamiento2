/*obtenerCajones();
window.setInterval("obtenerCajones()", 10000);


function obtenerCajones(){
  var xml = new XMLHttpRequest();
  xml.open('GET', 'home/cajones', true);
  xml.addEventListener('load', function(){
    var jsonData = JSON.parse(xml.responseText);
    estacionamiento1(jsonData);
    //console.log(jsonData);
  });
  xml.send();
}
*/

parking();

function parking(){
  document.getElementById('contenedor').innerHTML = '';
  //Edificio
  var street0 = calles('100%', '20px', 'street0', 'top');
  container.appendChild(street0);
  var street = calles('5%', '200px', 'street', 'top');
  container.appendChild(street);
  var edificios = edificio('90%', '200px', 'banqueta', 'top');
  container.appendChild(edificios);
  var street1 = calles('5%', '200px', 'street', 'top');
  container.appendChild(street1);
  var street2 = calles('100%', '30px', 'street0', 'top');
  container.appendChild(street2);
  var street3 = calles('15%', '250px', 'street3', 'top');
  container.appendChild(street3);
  var nCajones = 5;
  for (var i = 0; i < nCajones; i++) {
    var lineaAmarilla = lineasAmarillas('0.5%', '250px', 'lineaAmarilla' + i);
    container.appendChild(lineaAmarilla);
    //console.log(jsonData[i]);
    var cajon = cajones('13.4%','250px', 'top');
    container.appendChild(cajon);
    if((nCajones - i) == 1){
      var lineaAmarilla = lineasAmarillas('0.5%', '250px', 'lineaAmarilla' + i);
      container.appendChild(lineaAmarilla);
    }    
  }
  var street4 = calles('15%', '250px', 'street4', 'top');
  container.appendChild(street4);
  var street5 = calles('100%', '100px', 'street5', 'top');
  container.appendChild(street5);
 
}
