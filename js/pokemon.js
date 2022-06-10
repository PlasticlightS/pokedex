function selector() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "https://pokeapi.co/api/v2/pokemon/", false);
  xhr.send();  
  var response = JSON.parse(xhr.response);   
  
  var limit = response.count; 
  var url = "https://pokeapi.co/api/v2/pokemon/?limit=" + limit;
  
  var xhr2 = new XMLHttpRequest();
  xhr2.open("GET", url, false);
  xhr2.send();  
  var response2 = JSON.parse(xhr2.response); 
  var arrayLength = response2.results.length;
  
  for (var i = 0; i < arrayLength; i++) {
    var x = document.getElementById("pokeSelect");
    var option = document.createElement("option");
    var val = response2.results[i].url;
    option.text = ucfirst(response2.results[i].name);
    option.value = val;
    x.add(option);
  }
    
}    

selector();

function change(selectObj) {
    var idx = selectObj.selectedIndex;
    var url = selectObj.options[idx].value;
    populate(url);
}
    
function populate(url)  { 
  var xhr = new XMLHttpRequest();
  xhr.open("GET", url, false);
  xhr.send();
  var response = JSON.parse(xhr.response); 
  var type = response.types;
  var sprites = response.sprites.front_default;
  
  var typeLength = type.length;
  var typeString = "";
  
  for (var i = 0; i < typeLength; i++) {
    typeString += ucfirst(type[i].type.name);
    if ( i < typeLength-1 ) { typeString += "/"; }
  }
  
  var abilitiesLength = response.abilities.length;
  var abilities = "";
  
  for (var i = 0; i < abilitiesLength; i++) {
    abilities += "<li>" + ucfirst(response.abilities[i].ability.name) + "</li>";
  }
  
  document.getElementById("natdexno").innerHTML = response.id;
  document.getElementById("name").innerHTML = ucfirst(response.name);
  document.getElementById("types").innerHTML = typeString;
  document.getElementById("sprite").src = sprites;
  document.getElementById("abilities").innerHTML = abilities;
  
  var url2 = "https://pokeapi.co/api/v2/pokemon-species/"+ response.id + "/";
  var xhr2 = new XMLHttpRequest();
  xhr2.open("GET", url2, false);
  xhr2.send();
  var response2 = JSON.parse(xhr2.response);

  var description = response2.flavor_text_entries[9].flavor_text;
  
  document.getElementById("description").innerHTML = description;
}
  
function ucfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

populate("https://pokeapi.co/api/v2/pokemon-species/1");
