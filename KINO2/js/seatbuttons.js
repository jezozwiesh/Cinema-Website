// Dodaje do ciasteczek ilosc kliknietych miejsc i wyswietla ilosc dostepnych miejsc wg biletow

const available_seats_text = document.getElementById('available-seats');
const seat_btns = [...document.querySelectorAll('.btn-seat')];
let seats_to_choose = get_cookie('seats_to_choose');
let btns_clicked = 0;

// Wylaczamy wszystkie zajete miejsca

if(get_cookie('b_seats') != null)
{
    let b_seats = get_cookie('b_seats');
    b_seats = JSON.parse(b_seats); 
    arr_b_seats = b_seats.split(' , ');

    arr_b_seats.forEach(number => {
        seat_btns.forEach(element => {
            if(element.previousElementSibling.id == number)
            {
                element.classList.add('busy');
                element.previousElementSibling.setAttribute('disabled','')
                element.classList.remove('btn-outline-primary');
                element.classList.add('btn-secondary');
            }
        });
    });
}

// Mozliwosc wyboru miejsc

available_seats_text.textContent = 'Miejsca do wyboru: ' + (seats_to_choose - btns_clicked);
seat_btns.forEach(element => {
    let i = 0;
    element.addEventListener('click', function()
    {
        if (i == 0)
        {
            i = 1;
            btns_clicked++;
            element.classList.add('checked');
        }
        else
        {
            i = 0;
            btns_clicked--;
            element.classList.remove('checked');
        }
        document.cookie = "btns_clicked = " + btns_clicked;
        available_seats_text.textContent = 'Miejsca do wyboru: ' + (seats_to_choose - btns_clicked);
        toggle_buttons();
    });
});


// Funkcja do znalezienia niekliknietych guzikow i wylaczenia ich, lub odwrotnie

function toggle_buttons()
{
    if(btns_clicked >= seats_to_choose)
    {
        let seats_chosen = [];
        seat_btns.forEach(element => {
            if (!element.classList.contains('checked'))
            {
                element.previousElementSibling.setAttribute('disabled','');
            }
            else if (element.classList.contains('checked'))
            {
                seats_chosen.push(element.previousElementSibling.id);
            }
        });
        document.cookie = 'seat =' + JSON.stringify(seats_chosen);  // JSON do zmieszczenia tablicy w ciasteczku
    }
    else 
    {
        seat_btns.forEach(element => {
            if(!element.classList.contains('busy'))
            {
                element.previousElementSibling.removeAttribute('disabled','');
            }
        });
    }
}

// Funkcja do znalezienia ciasteczka

function get_cookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }