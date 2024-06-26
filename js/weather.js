const container = document.querySelector('.container');
const search = document.querySelector('.search-box button');
const weatherBox = document.querySelector('.weather-box');
const weatherDetails = document.querySelector('.weather-details');
const error404 = document.querySelector('.not-found');
const cityHide = document.querySelector('.city-hide');

search.addEventListener('click', () => {
    const APIKey = '707c200e899551d862b2c017fc2c433e';
    const city = document.querySelector('.search-box input').value;

    const weatherDetailsContainer = document.querySelector('.weather-details');
    const humidityInfo = document.querySelector('.info-humidity');
    const windInfo = document.querySelector('.info-wind');

    const maxHeight = Math.max(humidityInfo.offsetHeight, windInfo.offsetHeight) * 1.84;
    weatherDetailsContainer.style.height = `${maxHeight}px`;

    if (city == '')
        return;
    
    fetch (`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${APIKey}`)
        .then(response => response.json())
        .then(json => {
            if (json.cod == '404') {
                cityHide.textContent = city;
                container.style.height = "400px";
                weatherBox.classList.remove('active');
                weatherDetails.classList.remove('active');
                error404.classList.add('active');
                return;
            }

            const image = document.querySelector('.weather-box img');
            const temperature = document.querySelector('.temperature');
            const description = document.querySelector('.description');
            const humidity = document.querySelector('.humidity span');
            const wind = document.querySelector('.wind span');

            if (cityHide.textContent == city) {
                return;
            } else {
                cityHide.textContent = city;

                container.style.height = "555px";
                container.classList.add('active');
                weatherBox.classList.add('active');
                weatherDetails.classList.add('active');
                error404.classList.remove('active');

                setTimeout(() => {
                    container.classList.remove('active');
                }, 2500);

                var weatherMain = json.weather[0].main;
                var imageSrc = '';

                switch (weatherMain) {
                    case 'Clear':
                        imageSrc = 'js/images/clear.png';
                        break;
                    case 'Rain':
                        imageSrc = 'js/images/rain.png';
                        break;
                    case 'Snow':
                        imageSrc = 'js/images/snow.png';
                        break;
                    case 'Clouds':
                        imageSrc = 'js/images/cloud.png';
                        break;
                    case 'Mist':
                    case 'Haze':
                        imageSrc = 'js/images/mist.png';
                        break;
                    default:
                        console.error('Unknown weather condition: ' + weatherMain);
                        break;
                }
            
                image.src = imageSrc;

                temperature.innerHTML = `${parseInt(json.main.temp)} <span>°C</span>`;
                description.innerHTML = `${json.weather[0].description}`;
                humidity.innerHTML = `${json.main.humidity}%`;
                wind.innerHTML = `${parseInt(json.wind.speed)}km/h`;

                const infoWeather = document.querySelector('.info-weather');
                const infoHumidity = document.querySelector('.info-humidity');
                const infoWind = document.querySelector('.info-wind');

                const elCloneInfoWeather = infoWeather.cloneNode(true);
                const elCloneInfoHumidity = infoHumidity.cloneNode(true);
                const elCloneInfoWind = infoWind.cloneNode(true);

                elCloneInfoWeather.id = 'clone-info-weather';
                elCloneInfoWeather.classList.add('active-clone');

                elCloneInfoHumidity.id = 'clone-info-humidity';
                elCloneInfoHumidity.classList.add('active-clone');

                elCloneInfoWind.id = 'clone-info-wind';
                elCloneInfoWind.classList.add('active-clone');

                setTimeout(() => {
                    infoWeather.insertAdjacentElement("afterend", elCloneInfoWeather);
                    infoHumidity.insertAdjacentElement("afterend", elCloneInfoHumidity);
                    infoWind.insertAdjacentElement("afterend", elCloneInfoWind);
                }, 2200);

                const cloneInfoWeather = document.querySelectorAll('.info-weather.active-clone');
                const totalCloneInfoWeather = cloneInfoWeather.length;
                const cloneInfoWeatherFirst = cloneInfoWeather[0];

                const cloneInfoHumidity = document.querySelectorAll('.info-humidity.active-clone');
                const totalCloneInfoHumidity = cloneInfoHumidity.length;
                const cloneInfoHumidityFirst = cloneInfoHumidity[0];

                const cloneInfoWind = document.querySelectorAll('.info-wind.active-clone');
                const totalCloneInfoWind = cloneInfoWind.length;
                const cloneInfoWindFirst = cloneInfoWind[0];

                if (totalCloneInfoWeather > 0) {
                    cloneInfoWeatherFirst.classList.remove('active-clone');
                    cloneInfoHumidityFirst.classList.remove('active-clone');
                    cloneInfoWindFirst.classList.remove('active-clone');
                }

                setTimeout(() => {
                    cloneInfoWeatherFirst.remove();
                    cloneInfoHumidityFirst.remove();
                    cloneInfoWindFirst.remove();
                }, 2200);
            }
        })
        .catch(error => {
            console.error('Error fetching weather data:', error);
        });
});
