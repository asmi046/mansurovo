ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("render_map", {
        // Координаты центра карты
        center: [51.76327351954063,37.466686396972676],
        // Масштаб карты
        zoom: 17,
        // Выключаем все управление картой
        controls: []
    });

    var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([51.76327351954063,37.466686396972676],{
                                        hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
                                        balloonContent: '<div class="map-hint"></div>',
                                    }
                                    ,{
                                        iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref: '/img/icons/map-pin-fill.svg',
                    // Размеры иконки
                    iconImageSize: [62, 60],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-31, -45]
                });

    var clusterer = new ymaps.Clusterer({
        clusterDisableClickZoom: false,
        clusterOpenBalloonOnClick: false,
    });

    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

}
