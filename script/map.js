ymaps.ready(init);

function init() {
  // Создание экземпляра карты и его привязка к контейнеру с
  // заданным id ("map")
  var myMap = new ymaps.Map('map', {
    // При инициализации карты, обязательно нужно указать
    // ее центр и коэффициент масштабирования
    center: [59.866012, 30.356032],
    zoom: 15
  });

  // Создание метки 
  var myPlacemark = new ymaps.Placemark(
    // Координаты метки
    [59.866012, 30.356032],
    {
      iconContent: 'Санкт-Петербург, Бассейная ул., 38Д',
    },
    {
      preset: "islands#blueStretchyIcon",
    }

  );

  // Добавление метки на карту
  myMap.geoObjects.add(myPlacemark);
}