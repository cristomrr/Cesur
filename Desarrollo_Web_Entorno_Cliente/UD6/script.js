"use strict";

const selectCountry = document.getElementById("country");
const state = document.getElementById("state");
const temp = document.getElementById("temp");
const tempmin = document.getElementById("tempmin");
const tempmax = document.getElementById("tempmax");
const pressure = document.getElementById("pressure");
const humidity = document.getElementById("humidity");
const optionFetch = document.getElementById("fetch");
const optionXMLRequest = document.getElementById("xmlrequest");
// api de openweathermap.org
const apiOWM = "&appid=160affbb275c728980e8628945e5fca8";

// METODO FETCH ---------------------------------------------------------------------

async function fetchWeather(city) {
  try {
    state.textContent = "Cargando..";
    const res = await fetch(`https://api.openweathermap.org/data/2.5/weather?lang=es&units=metric&q=` + city + apiOWM);
    let weather = await res.json();
    state.textContent = weather.weather[0].description;
    temp.textContent = weather.main.temp + "Cº";
    tempmin.textContent = weather.main.temp_min + "Cº";
    tempmax.textContent = weather.main.temp_max + "Cº";
    pressure.textContent = weather.main.pressure + "hPa";
    humidity.textContent = weather.main.humidity + "%";
  } catch (err) {
    alert("Error: " + err);
  }
}

// METODO XMLREQUEST -----------------------------------------------------------------

function xmlrequestWeather(city) {
  try {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        let weather = xhr.response;
        state.textContent = weather.weather[0].description;
        temp.textContent = weather.main.temp + "Cº";
        tempmin.textContent = weather.main.temp_min + "Cº";
        tempmax.textContent = weather.main.temp_max + "Cº";
        pressure.textContent = weather.main.pressure + "hPa";
        humidity.textContent = weather.main.humidity + "%";
      } else {
        state.textContent = "Cargando..";
      }
    };
    xhr.open("GET", `https://api.openweathermap.org/data/2.5/weather?lang=es&units=metric&q=` + city + apiOWM, true);
    xhr.responseType = "json";
    xhr.send();
  } catch (err) {
    alert("Error: " + err);
  }
}

// EVENTO SOLICITUD DATOS ------------------------------------------------------------

selectCountry.addEventListener("change", function () {
  if (optionFetch.checked) {
    fetchWeather(this.value);
  } else if (optionXMLRequest.checked) {
    xmlrequestWeather(this.value);
  }
});

// RESET SELECT Y SELECTED DEFAULT

const methods = document.querySelector(".method");
methods.addEventListener("change", function (e) {
  selectCountry.value = "title";
  [optionFetch, optionXMLRequest].forEach((e) => e.parentNode.classList.remove("selected"));
  e.target.parentNode.classList.add("selected");
});
optionFetch.checked = true;
