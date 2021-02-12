// THIS CODE DO NOT WORK SO I COMMENTED, I DON'T WANT TO ERASE THO
// fetch("https://type.fit/api/quotes")
//   .then(function(response) {
//     return response.json();
//   })
//   .then(function(data) {
//     console.log(data);
//   })
//   .catch(function (err){
//     console.log('error' + err);
//   });
//   function appendData(qoute) {
//     var mainContainer = document.getElementById("myData");
//     for (var i = 0; i < 10; i++) {
//       var div = document.createElement("div");
//       div.innerHTML = 'Text: ' + qoute.text + ' ' + qoute.author;
//       mainContainer.appendChild(div);
//     }}
//   appendData();


// FETCH QOUTES API TO RANDOMLY DISPLAY ON WELCOME PAGE
function fetchData(){
  // WEBSITE THAT WE ARE FETCHING QOUTES FROM
  fetch("https://type.fit/api/quotes")
    .then(response =>{
    console.log(response);
    return response.json();
  }).then(data => {
    console.log(data.data);
    // GENERATE RANDOM OBJECT FROM JSON 
    const rand = data[Math.floor(Math.random() * data.length)];

    // INJECT RANDOM OBJECT INTO HTML 
    var mainContainer = document.getElementById("myData");
    var div = document.createElement("div");
    div.innerHTML = `<p>${rand.text}</p>`;
    mainContainer.appendChild(div);


    // INJECT RANDOM OBJECT INTO HTML 
    var mainContainer2 = document.getElementById("myData2");
    var div2 = document.createElement("div2");
    div2.innerHTML = `<strong>${rand.author}</strong>`;
    mainContainer2.appendChild(div2);
 
    // LITONG LITO PADIN AKO KUNG PANO TO GUMAGANA MYSTERY PADIN TANGINA
    // VANILLA JAVASCRIPT
    
  }).catch(error =>{
    console.log(error);
  });
}

fetchData();